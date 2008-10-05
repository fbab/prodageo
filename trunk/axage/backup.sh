#!/bin/bash
mv /media/AMAZIGH2/sauvegarde/trac/current.tar /media/AMAZIGH2/sauvegarde/trac/old.tar
cp /media/AMAZIGH2/sauvegarde/trac/new.tar /media/AMAZIGH2/sauvegarde/trac/current.tar
# les options  --exclude='*.exe' --exclude='*.msi'
# permettent de ne pas sauvegarder les gros fichiers de type
# *.exe et *.msi qui peuvent etre présent en tant que pieces attachées
# dans les projets
tar  --exclude='*.exe' --exclude='*.msi' -cvf /media/AMAZIGH2/sauvegarde/trac/new.tar /var/trac

