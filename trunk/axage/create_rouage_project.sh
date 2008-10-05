#!/bin/bash
# pour créer un projet de développement Rouage (Trac, SVN)
# sur une architecture :
# * SVN
# * Trac sur Apache2 avec VirtualHost accessible à l'adresse
#   http://%projet%.%domaine

DOMAIN=rouage.local

# VERIFICATION

# Trac OK
# il n'existe pas de commande simple permettant de verifier l'existence d'un projet ???
sudo trac-admin /var/trac/$1 version list 1>>/tmp/$1.rouage.log 2>>/tmp/$1.rouage.err
if [ ! "$?" -eq "0" ]; then
        echo "La commande Trac a echoue => $1 n'existe probablement pas => bien, on continue ..."
else
        echo "La commande Trac a reussi => $1 existe probablement ! Arret du traitement !"
        exit 0
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

# ne pas créer deux fois un projet existant
if [ -e /etc/apache2/sites-available/$1.rouage.local ]; then
        echo "L'hote virtuel $1 existe deja => arret traitement !";
        exit 0
fi

# vérifier que la creation Trac et SVN ont deja eu lieu
if [ -d /var/svn/$1 ]; then
  if [ -d /var/trac/$1 ]; then
    echo "Les repertoires SVN et Trac ont bien ete crees => arret traitement !" ;
  exit 0
  fi
else
  echo "Il manque au moins le repertoire /var/svn/$1 => le traitement continue ..." ;
fi


sudo ./create_from_scratch.sh $1
# des que /var/trac/$1 existe, on peut lancer le VirtualHost
sudo ./create_virtual_host.sh $1

echo "Pour verifier que l'installation est correct," ;
echo "ouvrir la page http://$1.$DOMAIN dans un navigateur Web." ;
