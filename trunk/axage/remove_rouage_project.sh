#!/bin/bash
# ATTENTION : le projet a-t-il bien ete svg auparavant ??

DUMP_ROOT_PATH=/var/rouage.dump
DUMP_PROJECT_FILE=$DUMP_ROOT_PATH/$1.tar.gz

DOMAIN=rouage.local

SVN_ROOT_PATH=/var/svn
SVN_PROJECT_PATH=$SVN_ROOT_PATH/$1

TRAC_ROOT_PATH=/var/trac
TRAC_PROJECT_PATH=$TRAC_ROOT_PATH/$1

if [ ! -e $DUMP_PROJECT_FILE ]; then
  echo "Le projet Rouage $1 n'a pas ete sauvegarde !" ;
  echo "Appliquer > sudo ./dump.sh $1." ;
  exit 0
fi

# pour eliminer un projet de développement Rouage (Trac, SVN)
# sur une architecture :
# * SVN
# * Trac sur Apache2 avec VirtualHost accessible à l'adresse
#   http://%projet%.%domaine

# VERIFICATION

# Trac OK
# il n'existe pas de commande simple permettant de verifier l'existence d'un projet ???
sudo trac-admin /var/trac/$1 version list 1>>/tmp/$1.rouage.log 2>>/tmp/$1.rouage.err
if [ ! "$?" -eq "0" ]; then
        echo "La commande Trac a echoue => $1 n'existe probablement pas => arret traitement !"
        exit 0
else
        echo "La commande Trac a reussi => $1 existe probablement => le traitement continue ..."
fi


# SVN OK

# Ce script doit être executer avec les droits de superutilisateur
test -w /root;
if [ ! "$?" -eq "0" ]; then
        echo "Vous devez executer ce script en tant que superutilisateur."
        exit 0
fi

# rappel sur le bash : -z chaine est vrai si la chaine est
if [ -z "$1" ]; then
        echo "$PROJECT_NAME n'est pas un nom de projet valide.";
        exit 0
fi

# retirer l'hote virtuel (VirtualHost au sens apache2)
if [ -e /etc/apache2/sites-available/$1.$DOMAIN ]; then
  sudo a2dissite $1.$DOMAIN
  sudo rm -rf /etc/apache2/sites-available/$1.$DOMAIN ;
  sudo  /etc/init.d/apache2 reload
else
  echo "Le domaine $1.$DOMAIN est incomplet (cf /etc/apache2/sites-available)." ;
fi

# vérifier que la creation Trac et SVN ont deja eu lieu
if [ -d /var/svn/$1 ]; then
  if [ -d /var/trac/$1 ]; then
    echo "Les repertoires SVN et Trac sont bien presents => debut de la suppresion ..." ;
    sudo rm -rf $TRAC_PROJECT_PATH ;
    sudo rm -rf $SVN_PROJECT_PATH ;
    echo "... fin de la suppression." ;
  fi
else
  echo "Il manque au moins le repertoire /var/svn/$1." ;
fi
