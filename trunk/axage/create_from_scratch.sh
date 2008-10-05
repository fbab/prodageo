#!/bin/bash
# Parametres (un seul)
# $1 : nom du nouveau projet

# ce script suppose que SVN et Trac ont déjà été installé
# TO DO : vérifier et sortir en erreur si c'est faux
# FAUT-IL QUE SVN soit ouvert ?
# a priori, SVN ouvert comme suit : svnserve 

# fake project for initialisation of svn
PROJECT_SOURCE_PATH=/tmp/rouage
 
if [ -e $PROJECT_SOURCE_PATH ]
then
	echo "le repertoire matrice existe deja. C'est bien." ;
	# exit ;
else
	echo "creation du repertoire" ;
	mkdir $PROJECT_SOURCE_PATH ;
fi


# initialisation d'un projet bidon
echo "initialisation rouage pour $1" > $PROJECT_SOURCE_PATH/readme.txt

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
PROJECT_NAME=$1

if [ -z "$PROJECT_NAME" ]; then
        echo "$PROJECT_NAME n'est pas un nom de projet valide.";
        exit 0  
fi

echo "Tapez maintenant le chemin du répertoire source :"
echo "(Note: les répertoires trunk, branches et tags seront créés automatiquement)"

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

# echo "Voulez-vous lancer l'utilitaire de création d'environnement trac" 
# echo "correspondant au projet ? (oui/non)"
# read GENERATE_TRAC_INSTANCE
# GENERATE_TRAC_INSTANCE=oui

# if [ $GENERATE_TRAC_INSTANCE == "oui" ]; then
  # echo "valider directement (taper Entree) pour chacune des questions"

  # echo "sauf pour la question sur le chemin projet, taper alors /var/svn/rouage"
  # trac-admin $TRAC_ROOT/$PROJECT_NAME initenv $1 i

  # extrait de http://fr.gentoo-wiki.com/HOWTO_Trac
  # initialement, tracadmin admet 4 arguments
  # project_name, trac_db, repos_path, template_path 
  # a partir de trac-admin 0.10.3, initenv admet 5 argument
  # project_name, trac_db, repos_type, repos_path, template_path 
  trac-admin $TRAC_ROOT/$PROJECT_NAME initenv $1	\
	"sqlite:db/trac.db"		\
	svn		\
	"/var/svn/$1"			\
	"/usr/share/trac/templates" ;
  # msg_result 0
  # rm -f trac.log
  chown -R $APACHE_USER:$APACHE_GROUP $TRAC_ROOT/$PROJECT_NAME ;
fi
echo "$TRAC_ROOT/$PROJECT_NAME created"
