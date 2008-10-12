#!/usr/bin/perl -w
#
# Nagios host script to get the speedfan values
#
# Speedfan is an application for gathering infos like temperature, fan speed and voltage.
# for more details, visit http://www.almico.com/speedfan.php
#
# This monitor also requires the SFSNMP extension so you can fetch data by SNMP.
# You can find the latest version from the SVN section at http://code.bastart.eu.org/sfsnmp
# svn co https://code.bastart.eu.org/svn/sfsnmp
#
# Changes and Modifications
# =========================
# 02-may-2008 - Mattias Ryrlen <mattias.ryrlen@op5.com>
#	- version 1.1
#	- Complete rewrite, just saved some variables and connection rutines
#	- Support for Long options
#	- Support for op5 Monitor
#	- Changed OID to match release Version 0.1.0-10 of SpeedFan SNMP
# 26-feb-2008 - Samuel Archambault <samifruit514@hotmail.com>
# 	- version 1.0 intial release
#
#
#
# This program is free software; you can redistribute it and/or
# modify it under the terms of the GNU General Public License
# as published by the Free Software Foundation; either version 2
# of the License, or (at your option) any later version.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
#
# You should have received a copy of the GNU General Public License
# along with this program; if not, write to the Free Software
# Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.

use strict;
use lib "/opt/plugins/";
use lib "/usr/lib/nagios/plugins/";
use Net::SNMP;
use utils qw ($TIMEOUT %ERRORS &print_revision &support);
use Switch;
use Getopt::Long;

my ($opt_V, $opt_h, $opt_H, $opt_w, $opt_T, $opt_P, $opt_C, $opt_i, $opt_c, $opt_t);

my %ERRORS=(	"OK"=>0,
		"WARNING"=>1,
		"CRITICAL"=>2,
		"UNKNOWN"=>3,
		"DEPENDENT"=>4
);

my %READ_ERRORS=(	0 => "OK",
			1 => "WARNING",
			2 => "CRITICAL",
			3 => "UNKNOWN",
			4 => "DEPENDENT"
);

my $unit;
my $value;
my $sfan_table_stub = '.1.3.6.1.4.1.16.0.';
my $sfan_table;
my $sfan_table_count;

my $PROGNAME="check_sfan.pl";
my $PROGVERSION="1.1";

# Setting default values
$opt_t = 15; 		# Default 5s Timeout
$opt_T = "temp";	# Type to check
$opt_P = 161;		# SNMP Port
$opt_i = 0;		# SensorIndex
$opt_C = "public";	# SNMP Community

Getopt::Long::Configure('bundling');
GetOptions(
    "V"   => \$opt_V, "version"		=> \$opt_V,
    "h"   => \$opt_h, "help"		=> \$opt_h,
    "H=s" => \$opt_H, "host=s"		=> \$opt_H,
    "w=f" => \$opt_w, "warning=f"	=> \$opt_w,
    "T=s" => \$opt_T, "type=s"		=> \$opt_T,
    "P=f" => \$opt_P, "port=f"		=> \$opt_P,
    "C=s" => \$opt_C, "community=s"	=> \$opt_C,
    "i=f" => \$opt_i, "index=f"		=> \$opt_i,
    "c=f" => \$opt_c, "critical=f"	=> \$opt_c,
    "t=f" => \$opt_t, "timeout=f"	=> \$opt_t);

# Set and use alarmclock.
if($opt_t) {
    $TIMEOUT = $opt_t;
}

# Just in case of problems, let's not hang Nagios
$SIG{'ALRM'} = sub {
    print ("$PROGNAME ERROR: $PROGNAME timed out (alarm)\n");
    exit $ERRORS{"UNKNOWN"};
};
alarm($TIMEOUT);

if ($opt_V) {
    print "$PROGNAME v$PROGVERSION\n";
    exit $ERRORS{'OK'};
}

if ($opt_h) {
    usage();
    exit $ERRORS{'OK'};
}

if (!$opt_H) {
	usage();
	exit $ERRORS{'OK'};
}

switch($opt_T)
{
	case 'temp'
	{
		$sfan_table = $sfan_table_stub.'1.';
		$sfan_table_count = $sfan_table_stub.'1.1';
		$unit = '°C';
	}

	case 'fanspeed'
	{
		$sfan_table = $sfan_table_stub.'2.';
		$sfan_table_count = $sfan_table_stub.'1.2';
		$unit = 'RPM';
	}

	case 'voltage'
	{
		$sfan_table = $sfan_table_stub.'3.';
		$sfan_table_count = $sfan_table_stub.'1.3';
		$unit = 'V';
	}
}

sub usage {
	print "Perl Check speedfan for Nagios\n";
	print "Usage: $PROGNAME -H <host> -T <type> -i <sensor index> [-C <community>] [-P <snmp port>]\n";
	print " [-w <warn>] [-c <critical>] [-t <timeout>]\n";
	print "\n";
	print "-H, --host=STRING\n";
	print "-T, --type=STRING\n";
	print "\ttype of sensor: 'temp','fanspeed' or 'voltage'. Defaults to $opt_T\n";
	print "-i, --index=INTEGER\n";
	print "\tindex of the monitor sensor. Defaults to $opt_i\n";
	print "-C, --community=STRING\n";
	print "-P, --port=INTEGER\n";
	print "-w, --warning=INTEGER\n";
	print "-c, --critical=INTEGER\n";
	print "\n";
	print "Example: ./$PROGNAME -H 192.168.0.1 -T temp -C public -i 1\n";
	exit $ERRORS{"UNKNOWN"};
}

my $idx = $opt_i;

my $return_code;

my ($session,$error);
($session, $error) = Net::SNMP->session(
     -hostname  => $opt_H,
     -community => $opt_C,
     -port      => $opt_P,
     -timeout   => $opt_t
  );

if (!defined($session)) {
   printf("$PROGNAME ERROR opening session: %s.\n", $error);
   exit $ERRORS{"UNKNOWN"};
}

# Get desctiption table

my @oid = ($sfan_table.$idx);
my $resultat = $session->get_request( 
	'-varbindlist' => \@oid
);

if (!defined($resultat)) {
	if ($session->error eq "Received genError(5) error-status at error-index 1") {
		print "SpeedFan ERROR: No $opt_T on that index (index: $opt_i)\n";
	} else {
		printf("SpeedFan ERROR: Description table : %s.\n", $session->error);
	}
	
	$session->close;
	exit $ERRORS{"UNKNOWN"};
}
my @key_one = keys %$resultat;
$value = $$resultat{$key_one[0]};
if($opt_T eq "temp" || $opt_T eq "voltage")
{
	$value = $value /100;
}

if ($opt_w && $opt_c) {
	if ($opt_T ne "fanspeed" && $opt_T ne "voltage") {
		if ($opt_w >= $opt_c) {
			print "Warning treshold is the same or above Critical, please correct\n";
			exit $ERRORS{"UNKNOWN"};
		}

		if ($value < $opt_w) {
			$return_code = $ERRORS{"OK"};
		}

		if ($value >= $opt_w && $value < $opt_c) {
			$return_code = $ERRORS{"WARNING"};
		}
	
		if ($value >= $opt_c) {
			$return_code = $ERRORS{"CRITICAL"};
		}
	} else {
		if ($opt_w <= $opt_c) {
			print "Warning treshold is the same or below Critical, please correct\n";
			exit $ERRORS{"UNKNOWN"};
		}

		if ($value > $opt_w) {
			$return_code = $ERRORS{"OK"};
		}
		
		if ($value <= $opt_w && $value > $opt_c) {
			$return_code = $ERRORS{"WARNING"};
		}

		if ($value <= $opt_c) {
			$return_code = $ERRORS{"CRITICAL"};
		}
	}
} else {
	$opt_w = 0;
	$opt_c = 0;
	$return_code = $ERRORS{"OK"};
}

print "SpeedFan $opt_T$idx ". $READ_ERRORS{$return_code} . " - $value$unit |check_sfan;$opt_T;$idx;$value;$opt_w;$opt_c\n";
exit $return_code;
