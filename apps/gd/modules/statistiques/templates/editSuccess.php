
<?php $requete = new Listerequetes(); ?>
<?php $chapitre = new Chapitre(); ?>

<?php $statistiques = $form->getObject() ?>
<h1><?php echo $statistiques->isNew() ? 'New' : 'Edit' ?> Statistiques</h1>

<form action="<?php echo url_for('statistiques/update'.(!$statistiques->isNew() ? '?id='.$statistiques->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          &nbsp;<a href="<?php echo url_for('statistiques/index') ?>">Cancel</a>
          <?php if (!$statistiques->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'statistiques/delete?id='.$statistiques->getId(), array('post' => true, 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><label for="statistiques_datestat">datestat</label></th>
        <td>
          <?php echo $form['datestat']->renderError() ?>
          <?php echo $form['datestat'] ?>        
        </td>
      </tr>
      <tr>
        <?php $requete = ListerequetesPeer::retrieveByPk('1') ?>
        <?php $chapitre = ChapitrePeer::retrieveByPk($requete->getChapitreId()) ?>
        <th><label for="statistiques_nbmenagesrecu">Nbmenagesrecu</label></th>
        <td class=<?php echo $chapitre->getTitrechapitre() ?>>
          <?php echo $form['nbmenagesrecu']->renderError() ?>
          <?php echo $form['nbmenagesrecu'] ?>
          <?php echo $statistiques->statExecRequete($requete->getListrequetes(),$requete->getTitrerequetes()) ?>          
        </td>
      </tr>
      <tr>
        <th><label for="statistiques_nbadultesrecu">Nbadultesrecu</label></th>
        <td>
          <?php echo $form['nbadultesrecu']->renderError() ?>
          <?php echo $form['nbadultesrecu'] ?>
          <?php echo $statistiques->statNbAdultesrecu() ?>          
        </td>
      </tr>
      <tr>
        <th><label for="statistiques_nbenfantsrecu">Nbenfantsrecu</label></th>
        <td>
          <?php echo $form['nbenfantsrecu']->renderError() ?>
          <?php echo $form['nbenfantsrecu'] ?>
          <?php echo $statistiques->statNbEnfantsrecu() ?>          
        </td>
      </tr>
      <tr>
        <?php $requete = ListerequetesPeer::retrieveByPk('2') ?>
        <?php $chapitre = ChapitrePeer::retrieveByPk($requete->getChapitreId()) ?>
        <th><label for="statistiques_nbloges">Nbloges</label></th>
        <td class=<?php echo $chapitre->getTitrechapitre()?>>
          <?php echo $form['nbloges']->renderError() ?>
          <?php echo $form['nbloges'] ?>
          <?php $requete = ListerequetesPeer::retrieveByPk('2') ?>
          <?php echo $statistiques->statExecRequete($requete->getListrequetes(),$requete->getTitrerequetes()) ?>                   
        </td>
      </tr>
      <tr>
        <th><label for="statistiques_nblogesadultes">Nblogesadultes</label></th>
        <td>
          <?php echo $form['nblogesadultes']->renderError() ?>
          <?php echo $form['nblogesadultes'] ?>
          <?php echo $statistiques->statNbLogesAdultes() ?>          
        </td>
      </tr>
      <tr>
        <th><label for="statistiques_nblogesenfants">Nblogesenfants</label></th>
        <td>
          <?php echo $form['nblogesenfants']->renderError() ?>
          <?php echo $form['nblogesenfants'] ?>
          <?php echo $statistiques->statNbLogesEnfants() ?>          
        </td>
      </tr>
      <tr>
        <th><label for="statistiques_nblogesdirect">Nblogesdirect</label></th>
        <td>
          <?php echo $form['nblogesdirect']->renderError() ?>
          <?php echo $form['nblogesdirect'] ?>
          <?php echo $statistiques->statNbLogesDirect() ?>          
        </td>
      </tr>
      <tr>
        <th><label for="statistiques_nblogesdirectadultes">Nblogesdirectadultes</label></th>
        <td>
          <?php echo $form['nblogesdirectadultes']->renderError() ?>
          <?php echo $form['nblogesdirectadultes'] ?>
          <?php echo $statistiques->statNbLogesDirectAdultes() ?>          
        </td>
      </tr>
      <tr>
        <th><label for="statistiques_nblogesdirectenfants">Nblogesdirectenfants</label></th>
        <td>
          <?php echo $form['nblogesdirectenfants']->renderError() ?>
          <?php echo $form['nblogesdirectenfants'] ?>
          <?php echo $statistiques->statNbLogesDirectEnfants() ?>          
        </td>
      </tr>
      <tr>
        <th><label for="statistiques_nblogesindirect">Nblogesindirect</label></th>
        <td>
          <?php echo $form['nblogesindirect']->renderError() ?>
          <?php echo $form['nblogesindirect'] ?>
          <?php echo $statistiques->statNbLogesIndirect() ?>          
        </td>
      </tr>
      <tr>
        <th><label for="statistiques_nblogesindirectadultes">Nblogesindirectadultes</label></th>
        <td>
          <?php echo $form['nblogesindirectadultes']->renderError() ?>
          <?php echo $form['nblogesindirectadultes'] ?>
          <?php echo $statistiques->statNbLogesIndirectAdultes() ?>          
        </td>
      </tr>
      <tr>
        <th><label for="statistiques_nblogesindirectenfants">Nblogesindirectenfants</label></th>
        <td>
          <?php echo $form['nblogesindirectenfants']->renderError() ?>
          <?php echo $form['nblogesindirectenfants'] ?>
          <?php echo $statistiques->statNbLogesIndirectEnfants()?>          
        </td>
      </tr>
      <tr>
        <th><label for="statistiques_nbalt">Nbalt</label></th>
        <td>
          <?php echo $form['nbaltsousloc']->renderError() ?>
          <?php echo $form['nbaltsousloc'] ?>
        </td>
      </tr>
      <tr>
        <th><label for="statistiques_nbaltadultes">Nbaltadultes</label></th>
        <td>
          <?php echo $form['nbaltsouslocadultes']->renderError() ?>
          <?php echo $form['nbaltsouslocadultes'] ?>
        </td>
      </tr>
      <tr>
        <th><label for="statistiques_nbaltenfants">Nbaltenfants</label></th>
        <td>
          <?php echo $form['nbaltsouslocenfants']->renderError() ?>
          <?php echo $form['nbaltsouslocenfants'] ?>
        </td>
      </tr>
      <tr>
        <th><label for="statistiques_nbencours">Nbencours</label></th>
        <td>
          <?php echo $form['nbencours']->renderError() ?>
          <?php echo $form['nbencours'] ?>
          <?php echo $statistiques->statNbEnCours()?>          
        </td>
      </tr>
      <tr>
        <th><label for="statistiques_nbencoursadultes">Nbencoursadultes</label></th>
        <td>
          <?php echo $form['nbencoursadultes']->renderError() ?>
          <?php echo $form['nbencoursadultes'] ?>
          <?php echo $statistiques->statNbEnCoursAdultes()?>          
        </td>
      </tr>
      <tr>
        <th><label for="statistiques_nbencoursenfants">Nbencoursenfants</label></th>
        <td>
          <?php echo $form['nbencoursenfants']->renderError() ?>
          <?php echo $form['nbencoursenfants'] ?>
          <?php echo $statistiques->statNbEnCoursEnfants()?>          
        </td>
      </tr>
      <tr>

        <th><label for="statistiques_nbabandon">Nbabandon</label></th>
        <td class=<?php echo $chapitre->getTitrechapitre() ?>>
          <?php echo $form['nbabandon']->renderError() ?>
          <?php echo $form['nbabandon'] ?>
          <?php echo $statistiques->statNbAbandons()?>          
          
        </td>
      </tr>
      <tr>
        <th><label for="statistiques_nbabandonadultes">Nbabandonadultes</label></th>
        <td class=<?php echo $chapitre->getTitrechapitre() ?>>
          <?php echo $form['nbabandonadultes']->renderError() ?>
          <?php echo $form['nbabandonadultes'] ?>
          <?php echo $statistiques->statNbAbandonsAdultes()?>          
        </td>
      </tr>
      <tr>
        <th><label for="statistiques_nbabandonenfants">Nbabandonenfants</label></th>
        <td class=<?php echo $chapitre->getTitrechapitre() ?>>
          <?php echo $form['nbabandonenfants']->renderError() ?>
          <?php echo $form['nbabandonenfants'] ?>
          <?php echo $statistiques->statNbAbandonsEnfants()?>          
        </td>
      </tr>
      <tr>
        <th><label for="statistiques_sexe">Sexe</label></th>
        <td class=<?php echo $chapitre->getTitrechapitre() ?>>
          <?php echo $form['sexe']->renderError() ?>
          <?php echo $form['sexe'] ?>
          <?php echo $statistiques->statSexe()?>          
        </td>
      </tr>
      <tr>
        <th><label for="statistiques_trancheage">Trancheage</label></th>
        <td class=<?php echo $chapitre->getTitrechapitre() ?>>
          <?php echo $form['trancheage']->renderError() ?>
          <?php echo $form['trancheage'] ?>
          <?php echo $statistiques->statTrancheAge()?>          
        </td>
      </tr>
      <tr>
        <th><label for="statistiques_nationalite">Nationalite</label></th>
        <td>
          <?php echo $form['nationalite']->renderError() ?>
          <?php echo $form['nationalite'] ?>
        </td>
      </tr>
      <tr>
        <th><label for="statistiques_situationfamiliale">Situationfamiliale</label></th>
        <td>
          <?php echo $form['situationfamiliale']->renderError() ?>
          <?php echo $form['situationfamiliale'] ?>
        </td>
      </tr>
      <tr>
        <th><label for="statistiques_originedemande">Originedemande</label></th>
        <td>
          <?php echo $form['originedemande']->renderError() ?>
          <?php echo $form['originedemande'] ?>
        </td>
      </tr>
      <tr>
        <th><label for="statistiques_villeresidence">Villeresidence</label></th>
        <td>
          <?php echo $form['villeresidence']->renderError() ?>
          <?php echo $form['villeresidence'] ?>
        </td>
      </tr>
      <tr>
        <th><label for="statistiques_modehebergement">Modehebergement</label></th>
        <td>
          <?php echo $form['modehebergement']->renderError() ?>
          <?php echo $form['modehebergement'] ?>
        </td>
      </tr>
      <tr>
        <th><label for="statistiques_lieutravail">Lieutravail</label></th>
        <td>
          <?php echo $form['lieutravail']->renderError() ?>
          <?php echo $form['lieutravail'] ?>
        </td>
      </tr>
      <tr>
        <th><label for="statistiques_typecontrat">Typecontrat</label></th>
        <td>
          <?php echo $form['typecontrat']->renderError() ?>
          <?php echo $form['typecontrat'] ?>
        </td>
      </tr>
      <tr>
        <th><label for="statistiques_revenus">Revenus</label></th>
        <td>
          <?php echo $form['revenus']->renderError() ?>
          <?php echo $form['revenus'] ?>
        </td>
      </tr>
      <tr>
        <th><label for="statistiques_sexeloges">Sexeloges</label></th>
        <td>
          <?php echo $form['sexeloges']->renderError() ?>
          <?php echo $form['sexeloges'] ?>
        </td>
      </tr>
      <tr>
        <th><label for="statistiques_trancheageloges">Trancheageloges</label></th>
        <td>
          <?php echo $form['trancheageloges']->renderError() ?>
          <?php echo $form['trancheageloges'] ?>
        </td>
      </tr>
      <tr>
        <th><label for="statistiques_nationaliteloges">Nationaliteloges</label></th>
        <td>
          <?php echo $form['nationaliteloges']->renderError() ?>
          <?php echo $form['nationaliteloges'] ?>
        </td>
      </tr>
      <tr>
        <th><label for="statistiques_situationfamilialeloges">Situationfamilialeloges</label></th>
        <td>
          <?php echo $form['situationfamilialeloges']->renderError() ?>
          <?php echo $form['situationfamilialeloges'] ?>
        </td>
      </tr>
      <tr>
        <th><label for="statistiques_originedemandeloges">Originedemandeloges</label></th>
        <td>
          <?php echo $form['originedemandeloges']->renderError() ?>
          <?php echo $form['originedemandeloges'] ?>
        </td>
      </tr>
      <tr>
        <th><label for="statistiques_villeresidenceloges">Villeresidenceloges</label></th>
        <td>
          <?php echo $form['villeresidenceloges']->renderError() ?>
          <?php echo $form['villeresidenceloges'] ?>
        </td>
      </tr>
      <tr>
        <th><label for="statistiques_modehebergementloges">Modehebergementloges</label></th>
        <td>
          <?php echo $form['modehebergementloges']->renderError() ?>
          <?php echo $form['modehebergementloges'] ?>
        </td>
      </tr>
      <tr>
        <th><label for="statistiques_lieutravailloges">Lieutravailloges</label></th>
        <td>
          <?php echo $form['lieutravailloges']->renderError() ?>
          <?php echo $form['lieutravailloges'] ?>
        </td>
      </tr>
      <tr>
        <th><label for="statistiques_typecontratloges">Typecontratloges</label></th>
        <td>
          <?php echo $form['typecontratloges']->renderError() ?>
          <?php echo $form['typecontratloges'] ?>
        </td>
      </tr>
      <tr>
        <th><label for="statistiques_revenusloges">Revenusloges</label></th>
        <td>
          <?php echo $form['revenusloges']->renderError() ?>
          <?php echo $form['revenusloges'] ?>
        </td>
      </tr>
      <tr>
        <th><label for="statistiques_typelogementtrouveloges">Typelogementtrouveloges</label></th>
        <td>
          <?php echo $form['typelogementtrouveloges']->renderError() ?>
          <?php echo $form['typelogementtrouveloges'] ?>
        </td>
      </tr>
      <tr>
        <th><label for="statistiques_typeproprietaireloges">Typeproprietaireloges</label></th>
        <td>
          <?php echo $form['typeproprietaireloges']->renderError() ?>
          <?php echo $form['typeproprietaireloges'] ?>
        </td>
      </tr>
      <tr>
        <th><label for="statistiques_villelogementtrouveloges">Villelogementtrouveloges</label></th>
        <td>
          <?php echo $form['villelogementtrouveloges']->renderError() ?>
          <?php echo $form['villelogementtrouveloges'] ?>
        </td>
      </tr>
      <tr>
        <th><label for="statistiques_nbrecu">Nbrecu</label></th>
        <td>
          <?php echo $form['nbrecu']->renderError() ?>
          <?php echo $form['nbrecu'] ?>
        </td>
      </tr>
      <tr>
        <th><label for="statistiques_nbabandons">Nbabandons</label></th>
        <td>
          <?php echo $form['nbabandons']->renderError() ?>
          <?php echo $form['nbabandons'] ?>

        <?php echo $form['id'] ?>
        </td>
      </tr>
    </tbody>
  </table>
          <?php echo $tab=$statistiques->statExecRequeteTableau() ?>
          <?php foreach($tab as $valeur){
                foreach( $valeur as $key => $value ){
                        echo 'Cet élément a pour clé "' . $key . '" et pour valeur "' . $value . '"<br />';
                }
          }   
          ?>   
</form>








