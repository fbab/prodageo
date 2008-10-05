#!/bin/bash
# on suppose que tout projet trac est stocke dans
# /var/svn
# /var/trac
# par exemple s00
# /var/svn/s00

TRAC_PROJECT_PATH=/var/trac/$1
echo "Repertoire Trac : $TRAC_PROJECT_PATH" ;

SVN_ROOT_PATH=/var/svn
SVN_PROJECT_PATH=$SVN_ROOT_PATH/$1
echo "Repertoire SVN : $SVN_PROJECT_PATH" ;

DUMP_ROOT_PATH=/var/rouage.dump

DUMP_PROJECT_PATH=$DUMP_ROOT_PATH/$1
echo "Repertoire cible du dump : $DUMP_PROJECT_PATH." ;

# VERIFICATIONS DIVERSES

if [ -z "$TRAC_PROJECT_PATH" -o ! -d $TRAC_PROJECT_PATH ]; then
        echo "$PROJECT_SOURCE_PATH n'est pas un répertoire valide.";
        exit 0
fi

# le répertoire d'accueil des DUMP existe ?
if [ ! -d $DUMP_ROOT_PATH ]; then
        echo "$DUMP_ROOT_PATH n'existe pas !" ;
        exit 0
fi


# si le repertoire dump est déja rempli, alors abandonner car un dump precedent a du echouer, mauvais signe ...
if [ -d $DUMP_PROJECT_PATH ]; then
        echo "$DUMP_PROJECT_PATH existe deja !" ;
        exit 0
fi

# EXECUTION DES CHANGEMENTS

# Ce script doit être executer avec les droits de superutilisateur
test -w /root;
if [ ! "$?" -eq "0" ]; then
        echo "Vous devez executer ce script en tant que superutilisateur."
        exit 0
fi

sudo mkdir $DUMP_PROJECT_PATH
sudo mkdir $DUMP_PROJECT_PATH/trac

# dump de trac (un tar ne marche pas !!!)
sudo trac-admin $TRAC_PROJECT_PATH wiki dump $DUMP_PROJECT_PATH/trac 1>>/tmp/$1.rouage.log
cd $DUMP_PROJECT_PATH
sudo tar cvf  $DUMP_PROJECT_PATH/trac.tar trac 1>>/tmp/$1.rouage.log


# tar de svn
# TO DO : fermer svnserve non ???
cd $SVN_ROOT_PATH
sudo tar cvf $DUMP_PROJECT_PATH/svn.tar $1 1>>/tmp/$1.rouage.log

# preparation du fichier global
sudo rm -rf $DUMP_PROJECT_PATH/trac


cd $DUMP_ROOT_PATH
sudo tar cvf $DUMP_PROJECT_PATH.tar $1 1>>/tmp/$1.rouage.log
if [ "$?" -eq "0" ]; then
  # la cmd tar a du bien se derouler ...
  if [ -e $DUMP_PROJECT_PATH.tar ] ; then
    sudo rm -rf $1 ;
  else
    echo "Fichier de dump absent !!!" ;
  fi
else
  echo "Echec du tar !!!" ;
fi

sudo gzip $DUMP_PROJECT_PATH.tar

if [ -e  $DUMP_PROJECT_PATH.tar.gz ]; then
  echo "Dump termine avec succes." ;
else
  echo "Echec : fichier  $DUMP_PROJECT_PATH.tar.gz absent !" ;
fi
