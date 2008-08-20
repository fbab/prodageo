#!/bin/bash
php symfony propel:build-model
php symfony propel:build-sql
php symfony propel:insert-sql
php symfony propel:build-form
php symfony propel:generate-crud gd dossier Dossier --with-show
php symfony propel:generate-crud gd findossier Findossier --with-show
php symfony propel:generate-crud gd personne Personne --with-show
php symfony propel:generate-crud gd nationalite Nationalite --with-show
php symfony propel:generate-crud gd ville Ville --with-show
php symfony propel:generate-crud gd categorielogementactuel Categorielogementactuel --with-show
php symfony propel:generate-crud gd typestructure Typestructure --with-show
php symfony propel:generate-crud gd typecontrat Typecontrat --with-show
php symfony propel:generate-crud gd tranchesalaire Tranchesalaire --with-show
php symfony propel:generate-crud gd typeparc Typeparc --with-show
php symfony propel:generate-crud gd typeproprietairehlm Typeproprietairehlm --with-show
php symfony propel:generate-crud gd typeproprietaireprive Typeproprietaireprive --with-show
php symfony propel:generate-crud gd typeproprietairehebtemp Typeproprietairehebtemp --with-show
php symfony propel:generate-crud gd nombailleurshlm Nombailleurshlm --with-show
php symfony propel:generate-crud gd nomfjt Nomfjt --with-show
php symfony propel:generate-crud gd nomchrs Nomchrs --with-show
php symfony propel:generate-crud gd conditionsacces Conditionsacces --with-show
php symfony propel:generate-crud gd nomlocapass Nomlocapass --with-show
php symfony propel:generate-crud gd typelogement Typelogement --with-show
php symfony propel:generate-crud gd listerequetes Listerequetes --with-show
php symfony propel:generate-crud gd statistiques Statistiques --with-show
php symfony propel:generate-crud gd chapitre Chapitre --with-show
php symfony cache:clear

