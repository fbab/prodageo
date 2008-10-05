Intro
Cet ensemble de scripts

Pré-requis
trac, libapache2-mod-python, subversion, libapache2-svn

Installation
Copier les fichiers dans /opt/axage

Usage
> /opt/axage/create_rouage_project.sh monzouliprojet
> le portail projet Trac est accessible par l'URL http://monzouliprojet

Troubleshooting

E: Emplacement des fichiers de config de mzp
S :
/var/trac/mzp/conf/trac.ini

E: http://mzp ne marche pas
S: Essayer avec http://localhost:8000/mzp en ayant lancé au préalable
> sudo tracd --port 8000 /var/trac/app9


E :
Syntax error on line 8 of /etc/apache2/sites-enabled/app8.rouage.local:
Invalid command 'PythonHandler', perhaps misspelled or defined by a module not included in the server configuration
   ...fail!
S :
> sudo apt-get install libapache2-mod-python

E:
Syntax error on line 18 of /etc/apache2/sites-enabled/app8.rouage.local:
Invalid command 'DAV', perhaps misspelled or defined by a module not included in the server configuration
   ...fail!
S:
 sudo apt-get install libapache2-svn

References
* http://prendreuncafe.com/blog/post/2006/09/05/489-installer-et-configurer-apache2-trac-et-subversion-sur-ubuntu