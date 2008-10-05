#!/bin/bash
# pour créer un projet dans Trac en tant que virtual host
# à la manière de Rouage
# il sera accessible en local (sur localhost) à l'adresse
# projet.rouage.local
# et en distant si on execute la commande publish_virtual_host

# ce script suppose que le projet a ete auparavant creé
# avec create_from_scratch $1

# pour y acceder en distant :
# * sous Windows XP, éditer /windows/etc/drivers/hosts et
#   ajouter une ligne avec l'adresse IP du serveur qui fait tourner 
#   apache, trac, svnserve, ...
#   192.168.1.17   s00.rouage.local
# * sous Ubuntu
#   editer /etc/hosts


# $1 = nom du projet (pris parmi les 26 caractere, ne doit pas contenir de point ni d'espace)
NOM_PROJET=$1
# eventuellement nom du domaine du serveur qui heberge Trac
DOMAIN="" ;



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

# verifier que axage est correctement installe
# et qu'il trouve bien les fichiers generiques dont il aura besoin
if [ -e /opt/axage/virtualhost_template ];
then
# c'est bien
  echo "OK" ;
else
        echo "Le template virtual est absent.";
        exit 0
fi


# ne pas créer deux fois un projet existant
if [ -e /etc/apache2/sites-available/$1.rouage.local ]; then
        echo "Le projet $1 existe deja.";
        exit 0
fi

# vérifier que la creation Trac et SVN ont deja eu lieu
if [ -d /var/svn/$1 ]; then
  if [ -d /var/trac/$1 ]; then
    echo "Les repertoires SVN et Trac ont bien ete crees" ;
  fi
else
  echo "Il manque au moins le repertoire /var/svn/$1." ;
fi


# echo "127.0.0.1 $1.$DOMAIN" >> /etc/hosts
echo "127.0.0.1 $1" >> /etc/hosts
cd /etc/apache2/sites-available
sed "s/app8/$1/" /opt/axage/virtualhost_template > /etc/apache2/sites-available/$1
a2ensite $1
sudo  /etc/init.d/apache2 reload

