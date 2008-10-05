#!/bin/bash
# pour verifier la coherence d'un projet de développement Rouage (Trac, SVN)
# sur une architecture :
# * SVN
# * Trac sur Apache2 avec VirtualHost accessible à l'adresse
#   http://%projet%.%domaine

# VERIFICATION

# Trac OK
# il n'existe pas de commande simple permettant de verifier l'existence d'un projet ???
sudo trac-admin /var/trac/$1 version list 1>>/tmp/$1.rouage.log 2>>/tmp/$1.rouage.err
if [ ! "$?" -eq "0" ]; then
        echo "La commande Trac a echoue => $1 n'existe probablement pas."
else
        echo "La commande Trac a reussi => $1 existe probablement."
fi


# SVN OK



# Ce script doit être executer avec les droits de superutilisateur
test -w /root;
if [ ! "$?" -eq "0" ]; then
        echo "Vous devez executer ce script en tant que superutilisateur."
        exit 0
fi

# ne pas créer deux fois un projet existant
if [ -e /etc/apache2/sites-available/$1.rouage.local ]; then
        echo "Le site virtuel $1 (http://$1.rouage.local) existe.";
else
        echo "Le site virtuel $1 n'existe pas.";
fi

# vérifier que la creation Trac et SVN ont deja eu lieu
if [ -d /var/svn/$1 ]; then
  if [ -d /var/trac/$1 ]; then
    echo "Les repertoires SVN et Trac de $1 ont bien ete crees" ;
  fi
else
  echo "Il manque au moins le repertoire /var/svn/$1." ;
fi
