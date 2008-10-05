#!/bin/bash

# un projet créé avec ce script sera accessible par une instruction comme
# ./create_svn_repo.sh
# > svn co svn://localhost/

# TODO : réaliser une version CLI argument de cette commande
# ./create_svn_repo.sh PROJECT_NAME PROJECT_SOURCE_PATH PROJECT_NAME
# actuellement, les arguments sont demandées successivement par le script


# Vous pouvez éditer ces variables selon vos besoins
SVN_ROOT="/var/svn"
SVN_TMP_PATH="/tmp/svn"
APACHE_USER="www-data"
APAGE_GROUP="www-data"
TRAC_ROOT="/var/trac"
TRAC_SHARE="/usr/share/trac"

# Ce script doit être executer avec les droits de superutilisateur
test -w /root; 
if [ ! "$?" -eq "0" ]; then 
	echo "Vous devez executer ce script en tant que superutilisateur."
	exit 0
fi 

echo "#######################################"
echo "Création d'un nouveau projet Subversion"
echo "#######################################"
echo ""
echo "Tapez le nom du nouveau projet :"
read PROJECT_NAME

if [ -z "$PROJECT_NAME" ]; then
        echo "$PROJECT_NAME n'est pas un nom de projet valide.";
        exit 0  
fi

echo "Tapez maintenant le chemin du répertoire source :"
echo "(Note: les répertoires trunk, branches et tags seront créés automatiquement)"
read PROJECT_SOURCE_PATH

if [ -z "$PROJECT_SOURCE_PATH" -o ! -d $PROJECT_SOURCE_PATH ]; then
	echo "$PROJECT_SOURCE_PATH n'est pas un répertoire valide.";
	exit 0
fi

echo "Création du projet $PROJECT_NAME depuis $PROJECT_SOURCE_PATH..."

# Si le répertoire $SVN_ROOT n'existe pas, on le crée
if [ ! -d $SVN_ROOT ]; then
	mkdir $SVN_ROOT
fi

# Si le répertoire $SVN_TMP_PATH n'existe pas, on le crée
if [ ! -d $SVN_TMP_PATH ]; then
	mkdir $SVN_TMP_PATH
fi	

# Création du répertoire du dépôt
mkdir $SVN_ROOT/$PROJECT_NAME

# Création d'un répertoire temporaire de stockage avant import
mkdir $SVN_TMP_PATH/$PROJECT_NAME
mkdir $SVN_TMP_PATH/$PROJECT_NAME/branches
mkdir $SVN_TMP_PATH/$PROJECT_NAME/tags
mkdir $SVN_TMP_PATH/$PROJECT_NAME/trunk

# Copie des fichiers originaux dans le répertoire temporaire
cp -R $PROJECT_SOURCE_PATH/* $SVN_TMP_PATH/$PROJECT_NAME/trunk/

# Création du dépôt et import depuis le répertoire créé
svnadmin create $SVN_ROOT/$PROJECT_NAME
svn import $SVN_TMP_PATH/$PROJECT_NAME file://$SVN_ROOT/$PROJECT_NAME -m "Initial import"

# Attribution des permissions à Apache sur le repertoire du dépot
chown -R $APACHE_USER:$APACHE_GROUP $SVN_ROOT/$PROJECT_NAME

# Attribution de droits supplémentaires
sudo chown -R $APACHE_USER:$APACHE_GROUP $TRAC_SHARE

# Suppression du répertoire temporaire
rm -rf $SVN_TMP_PATH/$PROJECT_NAME	

# Done !
echo ""
echo "Projet subversion $PROJECT_NAME créé avec succès dans $SVN_ROOT/$PROJECT_NAME !"

echo "Voulez-vous lancer l'utilitaire de création d'environnement trac" 
echo "correspondant au projet ? (oui/non)"

read GENERATE_TRAC_INSTANCE

if [ $GENERATE_TRAC_INSTANCE == "oui" ]; then
  trac-admin $TRAC_ROOT/$PROJECT_NAME initenv
  chown -R $APACHE_USER:$APACHE_GROUP $TRAC_ROOT/$PROJECT_NAME
fi
