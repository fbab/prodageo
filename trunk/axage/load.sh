#!/bin/bash
# on suppose que tout projet trac est stocke dans
# /var/svn
# /var/trac
# par exemple s00
# /var/svn/s00

# qd on veut récuperer un projet, on met le $1.tar.gz dans LOAD_ROOT_PATH
DUMP_ROOT_PATH=/var/rouage.dump
DUMP_PROJECT_PATH=$DUMP_ROOT_PATH/$1

# repertoire dans lesquels on va dezipper avant de mover (ou loader)
LOAD_ROOT_PATH=/var/rouage.load
LOAD_PROJECT_PATH=$LOAD_ROOT_PATH/$1
echo $LOAD_PROJECT_PATH

# repertoire de destination finale pour prod
TRAC_ROOT_PATH=/var/trac
TRAC_PROJECT_PATH=$TRAC_ROOT_PATH/$1
echo $TRAC_PROJECT_PATH

SVN_ROOT_PATH=/var/svn
SVN_PROJECT_PATH=/var/svn/$1
echo $SVN_PROJECT_PATH

# les fichiers sont copies dans /var/rouage.load/$1.tar.gz
# $1.tar.gz contient $1/tar
# $1.tar contient trac.tar et svn.tar
# trac.tar contient $1 qui contient les fichiers du dump
# svn.tar contient le tar de /var/svn/$1

# VERIFICATIONS DIVERSES

if [ -z "$TRAC_PROJECT_PATH" -o ! -d $TRAC_PROJECT_PATH ]; then
        echo "$PROJECT_SOURCE_PATH n'est pas un répertoire valide.";
        exit 0
fi

# le fichier de dump est-il present ? 
# le répertoire d'accueil des LOAD existe ?
if [ ! -f $DUMP_ROOT_PATH/$1.tar.gz ]; then
        echo "$DUMP_ROOT_PATH/$1.tar.gz n'existe pas !" ;
        exit 0
fi


# le répertoire d'accueil des LOAD existe ?
if [ ! -d $LOAD_ROOT_PATH ]; then
        echo "$LOAD_ROOT_PATH n'existe pas !" ;
        exit 0
fi

# le projet Trac existe-t-il sur la machine cible
sudo trac-admin $TRAC_PROJECT_PATH version list

# EXECUTION DES CHANGEMENTS

# Ce script doit être executer avec les droits de superutilisateur
test -w /root;
if [ ! "$?" -eq "0" ]; then
        echo "Vous devez executer ce script en tant que superutilisateur."
        exit 0
fi

echo "Restore les 2 tar (trac, svn)"
sudo cp $DUMP_ROOT_PATH/$1.tar.gz $LOAD_ROOT_PATH
cd $LOAD_ROOT_PATH
sudo gunzip $1.tar.gz
sudo tar xvf $1.tar 1>>/tmp/$1.rouage.log

echo "Restore SVN par move"
cd $LOAD_ROOT_PATH/$1
sudo tar xvf svn.tar 1>>/tmp/$1.rouage.log
# => /var/rouage.dump/s01/s01 qui contient conf, dav d'un rep svn
# sudo mv $SVN_PROJECT_PATH $SVN_PROJECT_PATH.old
# NON cette technique ne marche qu'avec des SVN neuf !!!
sudo mv $LOAD_ROOT_PATH/$1/$1  $SVN_PROJECT_PATH

sudo tar xvf trac.tar 1>>/tmp/$1.rouage.log
# => /var/rouage.dump/s01/trac qui contient les fichiers dump

echo "Restore Trac par load"
# pour faire, le projet Trac $1 doit exister sur la machine cible
sudo trac-admin $TRAC_PROJECT_PATH wiki load $LOAD_ROOT_PATH/$1/trac 1>>/tmp/$1.rouage.log 2>>/tmp/$1.rouage.err

echo "menage avant finition (1)" ;
sudo rm -rf $LOAD_ROOT_PATH/$1
echo "menage avant finition (2)" ;
sudo rm -rf $LOAD_ROOT_PATH/$1.tar
cd
