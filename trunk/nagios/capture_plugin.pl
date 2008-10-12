#!/usr/bin/perl -w
#
# Written 2007-03-24 by Wolfgang Wagner (aka wolle)
#
# $id: capture_plugin.pl v1.0
#
# Captures stdout&stderr in a file and returns orginial results to Nagios (http://www.nagios.org)
#
# Copyright 2007 by Wolfgang Wagner. All rights reserved.
#
# This software is licensed under the terms of the GNU General Public License Version 2 
# as published by the Free Software Foundation.
# It is provided AS IS with NO WARRANTY OF ANY KIND, INCLUDING THE WARRANTY OF DESIGN, 
# MERCHANTABILITY, AND FITNESS FOR A PARTICULAR PURPOSE.
#
# Check out http://www.waggy.at for possible future versions.
# 
# Example of usage
# suppose that check_example (stored in /usr/lib/nagios/plugins/ on Ubuntu 7.10 with Nagios 1.4)
# is a script declared in checkcommand.cfg (stored in /etc/nagios/ on Ubuntu 7.10 with Nagios 1.4)
# define command {
#        command_name    check-temperature
#        command_line    /usr/lib/nagios/plugins/capture_plugin.pl $USER1$/check_example -H $HOSTADDRESS$
#        }


use strict;

# This plugin does not need any nagios utils. It just interfaces the original plugin.

my $LOG_FILE = "/tmp/captured-plugins.log";

my ($cmd, $ret_code, $output);
# First display all arguments
my ($numArgs, $argnum);
$numArgs = $#ARGV + 1;

# create the command-line

$cmd = $ARGV[0];
foreach $argnum (1 .. $#ARGV) {
  $cmd = $cmd . " '" . $ARGV[$argnum] . "'"
}

# prepare debug-output
# ($second, $minute, $hour, $dayOfMonth, $month, $yearOffset, $dayOfWeek, $dayOfYear, $daylightSavings) = localtime(time);
my ($second, $minute, $hour, $dayOfMonth, $month, $yearOffset) = localtime(time);
my $year = 1900 + $yearOffset;
my $theTime = " $year-$month-$dayOfMonth $hour:$minute:$second";
# now execute the command

$output = `$cmd 2>&1`;
$ret_code = $?>>8;

# log the start, output, retcode & end

my $LogFile;
# open could be better: check success later; if unsuccessful return UNKNWON to Nagios
open (LogFile, ">>$LOG_FILE") || die ("Cannot open logfile");
print LogFile "$theTime ------ debugging\ncmd=[$cmd]\noutput=[$output]\nretcode=$ret_code\n-------\n";
close(LogFile);
# avoid access problems for others.
chmod 0777, $LOG_FILE;

# now return the original resutlt to Nagios
print $output;
exit "$ret_code";
