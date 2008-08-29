<?php $personne = $form->getObject() ?>
<h1><?php echo $personne->isNew() ? 'Profil' : 'Edit' ?> Personne</h1>

<form action="<?php echo url_for('personne/update'.(!$personne->isNew() ? '?id='.$personne->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          &nbsp;<a href="<?php echo url_for('personne/index') ?>">Annuler</a>
          <?php if (!$personne->isNew()): ?>
            &nbsp;<?php echo link_to('Supprimer', 'personne/delete?id='.$personne->getId(), array('post' => true, 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><label for="personne_dossier_id">Numero de dossier</label></th>
        <td>
          <?php echo $form['dossier_id']->renderError();
                $maxi=$personne->getLastCreatedDossier();
                echo $maxi;
                echo $form['dossier_id'] ?>
        </td>
      </tr>
      <tr>
        <th><label for="personne_nom">Nom</label></th>
        <td>
          <?php echo $form['nom']->renderError() ?>
          <?php echo $form['nom'] ?>
        </td>
      </tr>
      <tr>
        <th><label for="personne_prenom">Prenom</label></th>
        <td>
          <?php echo $form['prenom']->renderError() ?>
          <?php echo $form['prenom'] ?>
        </td>
      </tr>
      <tr>
        <th><label for="personne_num_telephone">Numero de telephone</label></th>
        <td>
          <?php echo $form['num_telephone']->renderError() ?>
          <?php echo $form['num_telephone'] ?>
        </td>
      </tr>
      <tr>
        <th><label for="personne_sexe">Sexe</label></th>
        <td>
          <?php echo $form['sexe']->renderError() ?>
          <?php echo $form['sexe'] ?>
        </td>
      </tr>
      <tr>
        <th><label for="personne_date_naissance">Date de naissance</label></th>
        <td>
          <?php echo $form['date_naissance']->renderError() ?>
          <?php echo $form['date_naissance'] ?>
        </td>
      </tr>
      <tr>
        <th><label for="personne_tranche_age">Tranche d'age</label></th>
        <td>
          <?php echo $form['tranche_age']->renderError() ?>
          <?php echo $form['tranche_age'] ?>
        </td>
      </tr>
      <tr>
        <th><label for="personne_statut">Statut</label></th>
        <td>
          <?php echo $form['statut']->renderError() ?>
          <?php echo $form['statut'] ?>
        </td>
      </tr>
      <tr>
        <th><label for="personne_enfants">Enfants</label></th>
        <td>
          <?php echo $form['enfants']->renderError() ?>
          <?php echo $form['enfants'] ?>
        </td>
      </tr>
      <tr>
        <th><label for="personne_nb_enfants">Nombre d'enfants</label></th>
        <td>
          <?php echo $form['nb_enfants']->renderError() ?>
          <?php echo $form['nb_enfants'] ?>
        </td>
      </tr>
      <tr>
        <th><label for="personne_lieu_naissance">Lieu de naissance</label></th>
        <td>
          <?php echo $form['lieu_naissance']->renderError() ?>
          <?php echo $form['lieu_naissance'] ?>
        </td>
      </tr>
      <tr>
        <th><label for="personne_nationalite">Nationalite</label></th>
        <td>
          <?php echo $form['nationalite']->renderError() ?>
          <?php echo $form['nationalite'] ?>
        </td>
      </tr>
      <tr>
        <th><label for="personne_adresse_actuelle">Adresse actuelle</label></th>
        <td>
          <?php echo $form['adresse_actuelle']->renderError() ?>
          <?php echo $form['adresse_actuelle'] ?>
        </td>
      </tr>
      <tr>
        <th><label for="personne_ville_actuelle">Ville actuelle</label></th>
        <td>
          <?php echo $form['ville_actuelle']->renderError() ?>
          <?php echo $form['ville_actuelle'] ?>
        </td>
      </tr>
      <tr>
        <th><label for="personne_type_logement_actuel">Type de logement actuel</label></th>
        <td>
          <?php echo $form['type_logement_actuel']->renderError() ?>
          <?php echo $form['type_logement_actuel'] ?>
        </td>
      </tr>
      <tr>
        <th><label for="personne_categorie_logement_actuel">Categorie de logement actuel</label></th>
        <td>
          <?php echo $form['categorie_logement_actuel']->renderError() ?>
          <?php echo $form['categorie_logement_actuel'] ?>
        </td>
      </tr>
      <tr>
        <th><label for="personne_origine_demande">Origine de la demande</label></th>
        <td>
          <?php echo $form['origine_demande']->renderError() ?>
          <?php echo $form['origine_demande'] ?>
        </td>
      </tr>
      <tr>
        <th><label for="personne_type_structure">Type de structure</label></th>
        <td>
          <?php echo $form['type_structure']->renderError() ?>
          <?php echo $form['type_structure'] ?>
        </td>
      </tr>
      <tr>
        <th><label for="personne_referent">Referent</label></th>
        <td>
          <?php echo $form['referent']->renderError() ?>
          <?php echo $form['referent'] ?>
        </td>
      </tr>
      <tr>
        <th><label for="personne_loyer_actuel">Loyer actuel</label></th>
        <td>
          <?php echo $form['loyer_actuel']->renderError() ?>
          <?php echo $form['loyer_actuel'] ?>
          <label>euros</label>
        </td>
      </tr>
      <tr>
        <th><label for="personne_profession_actuelle">Profession actuelle</label></th>
        <td>
          <?php echo $form['profession_actuelle']->renderError() ?>
          <?php echo $form['profession_actuelle'] ?>
        </td>
      </tr>
      <tr>
        <th><label for="personne_employeur_actuel">Employeur actuel</label></th>
        <td>
          <?php echo $form['employeur_actuel']->renderError() ?>
          <?php echo $form['employeur_actuel'] ?>
        </td>
      </tr>
      <tr>
        <th><label for="personne_ville_employeur_actuel">Ville de l'employeur actuel</label></th>
        <td>
          <?php echo $form['ville_employeur_actuel']->renderError() ?>
          <?php echo $form['ville_employeur_actuel'] ?>
        </td>
      </tr>
      <tr>
        <th><label for="personne_dpt_employeur_actuel">Dpt de l'employeur actuel</label></th>
        <td>
          <?php echo $form['dpt_employeur_actuel']->renderError() ?>
          <?php echo $form['dpt_employeur_actuel'] ?>
        </td>
      </tr>
      <tr>
        <th><label for="personne_date_embauche">Date d'embauche</label></th>
        <td>
          <?php echo $form['date_embauche']->renderError() ?>
          <?php echo $form['date_embauche'] ?>
        </td>
      </tr>
      <tr>
        <th><label for="personne_type_contrat">Type de contrat</label></th>
        <td>
          <?php echo $form['type_contrat']->renderError() ?>
          <?php echo $form['type_contrat'] ?>
        </td>
      </tr>
      <tr>
        <th><label for="personne_tranche_salaire">Tranche salaire</label></th>
        <td>
          <?php echo $form['tranche_salaire']->renderError() ?>
          <?php echo $form['tranche_salaire'] ?>
        </td>
      </tr>
      <tr>
        <th><label for="personne_salaire_exact">Salaire exact</label></th>
        <td>
          <?php echo $form['salaire_exact']->renderError() ?>
          <?php echo $form['salaire_exact'] ?>
          <label>euros</label>
        </td>
      </tr>
      <tr>
        <th><label for="personne_dettes_credits">Dettes / credits</label></th>
        <td>
          <?php echo $form['dettes_credits']->renderError() ?>
          <?php echo $form['dettes_credits'] ?>
          <label>euros</label>
        </td>
      </tr>
      <tr>
        <th><label for="personne_motif_recherche_logement">Motif de recherche de logement</label></th>
        <td>
          <?php echo $form['motif_recherche_logement']->renderError() ?>
          <?php echo $form['motif_recherche_logement'] ?>
        </td>
      </tr>
      <tr>
        <th><label for="personne_observations">Observations</label></th>
        <td>
          <?php echo $form['observations']->renderError() ?>
          <?php echo $form['observations'] ?>
        <?php echo $form['id'] ?>
        </td>
      </tr>
    </tbody>
  </table>
          <input type="submit" value="Conjoint / Conjointe" name="Conjoint"/>
          <input type="submit" value="Colocataire" name="Colocataire"/>
          <input type="submit" value="Clôturer dossier" name="Cloturer"/>
          <input type="submit" value="fin saisie" name="Fin"/>
</form>
