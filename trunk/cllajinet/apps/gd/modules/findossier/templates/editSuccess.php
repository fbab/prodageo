<?php $findossier = $form->getObject()?>
<h1><?php echo $findossier->isNew() ? 'New' : 'Edit' ?> Findossier</h1>
<form action="<?php echo url_for('findossier/update'.(!$findossier->isNew() ? '?id='.$findossier->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          &nbsp;<a href="<?php echo url_for('findossier/index') ?>">Cancel</a>
          <?php if (!$findossier->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'findossier/delete?id='.$findossier->getId(), array('post' => true, 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>

      <tr>
        <th><label for="findossier_dossier_id">Dossier id</label></th>
        <td>
          <?php echo $form['dossier_id']->renderError();
                echo $form['dossier_id'];
                echo $findossier->getDossierId();
          ?>
        </td>
      </tr>

      <tr>
        <th><label for="findossier_type_parc">Type parc</label></th>
        <td>
          <?php echo $form['type_parc']->renderError() ?>
          <?php echo $form['type_parc'] ?>
          <?php switch($findossier->getTypeParc())
                {
                case '0': echo "HLM";break;
                case '1': echo "Privé";break;
                case '2': echo "Hébergement temporaire";break;
                };
          ?>
        </td>
      </tr>

      <tr>
        <th><label for="findossier_type_proprietaire_bailleur">Type proprietaire bailleur</label></th>
        <td>
          <?php echo $form['type_proprietaire_bailleur']->renderError() ?>
          <?php echo $form['type_proprietaire_bailleur'] ?>
        </td>
      </tr>
      <tr>
        <th><label for="findossier_nom_proprietaire_bailleur">Nom proprietaire bailleur</label></th>
        <td>
          <?php echo $form['nom_proprietaire_bailleur']->renderError() ?>
          <?php echo $form['nom_proprietaire_bailleur'] ?>
        </td>
      </tr>
      <tr>
        <th><label for="findossier_type_condition_acces">Type condition acces</label></th>
        <td>
          <?php echo $form['type_condition_acces']->renderError() ?>
          <?php echo $form['type_condition_acces'] ?>
        </td>
      </tr>
      <tr>
        <th><label for="findossier_nom_condition_acces">Nom condition acces</label></th>
        <td>
          <?php echo $form['nom_condition_acces']->renderError() ?>
          <?php echo $form['nom_condition_acces'] ?>
        </td>
      </tr>
      <tr>
        <th><label for="findossier_ville_logement">Ville logement</label></th>
        <td>
          <?php echo $form['ville_logement']->renderError() ?>
          <?php echo $form['ville_logement'] ?>
        </td>
      </tr>
      <tr>
        <th><label for="findossier_departement_logement">Departement logement</label></th>
        <td>
          <?php echo $form['departement_logement']->renderError() ?>
          <?php echo $form['departement_logement'] ?>
        </td>
      </tr>
      <tr>
        <th><label for="findossier_type_logement">Type logement</label></th>
        <td>
          <?php echo $form['type_logement']->renderError() ?>
          <?php echo $form['type_logement'] ?>
          <?php echo $findossier->getTypeLogement() ?></td>
        </td>
      </tr>
      <tr>
        <th><label for="findossier_superficie_logement">Superficie logement</label></th>
        <td>
          <?php echo $form['superficie_logement']->renderError() ?>
          <?php echo $form['superficie_logement'] ?>
        </td>
      </tr>
      <tr>
        <th><label for="findossier_loyer">Loyer</label></th>
        <td>
          <?php echo $form['loyer']->renderError() ?>
          <?php echo $form['loyer'] ?>
        </td>
      </tr>
      <tr>
        <th><label for="findossier_edf_gdf">Edf gdf</label></th>
        <td>
          <?php echo $form['edf_gdf']->renderError() ?>
          <?php echo $form['edf_gdf'] ?>
        </td>
      </tr>
      <tr>
        <th><label for="findossier_chauffage">Chauffage</label></th>
        <td>
          <?php echo $form['chauffage']->renderError() ?>
          <?php echo $form['chauffage'] ?>
        </td>
      </tr>
      <tr>
        <th><label for="findossier_difficultes_rencontrees">Difficultes rencontrees</label></th>
        <td>
          <?php echo $form['difficultes_rencontrees']->renderError() ?>
          <?php echo $form['difficultes_rencontrees'] ?>
        </td>
      </tr>
      <tr>
        <th><label for="findossier_categorie_classement">Categorie classement</label></th>
        <td>
          <?php echo $form['categorie_classement']->renderError() ?>
          <?php echo $form['categorie_classement'] ?>

        <?php echo $form['id'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>


