
<h1>Findossier List</h1>
<table class="traitsVisibles">
  <thead>
    <tr>
      <th class="traitsVisibles">Id</th>
      <th class="traitsVisibles">Dossier</th>
      <th class="traitsVisibles">Type parc</th>
      <th class="traitsVisibles">Type proprietaire bailleur</th>
      <th class="traitsVisibles">Nom proprietaire bailleur</th>
      <th class="traitsVisibles">Type condition acces</th>
      <th class="traitsVisibles">Nom condition acces</th>
      <th class="traitsVisibles">Ville logement</th>
      <th class="traitsVisibles">Departement logement</th>
      <th class="traitsVisibles">Type logement</th>
      <th class="traitsVisibles">Superficie logement</th>
      <th class="traitsVisibles">Loyer</th>
      <th class="traitsVisibles">Edf gdf</th>
      <th class="traitsVisibles">Chauffage</th>
      <th class="traitsVisibles">Difficultes rencontrees</th>
      <th class="traitsVisibles">Categorie classement</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($findossierList as $findossier): ?>

    <?php $typeParc = TypeparcPeer::retrieveByPk($findossier->getTypeparc());?>
    <?php $typeProprietaireHLM = TypeproprietairehlmPeer::retrieveByPk($findossier->getTypeProprietaireBailleur());?>
    <?php $typeProprietairePrive = TypeproprietaireprivePeer::retrieveByPk($findossier->getTypeProprietaireBailleur()+1);?>
    <?php $typeProprietaireHebTemp = TypeproprietairehebtempPeer::retrieveByPk($findossier->getTypeProprietaireBailleur()+1);?>
    <?php $nomFJT = NomfjtPeer::retrieveByPk($findossier->getNomProprietaireBailleur());?>
    <?php $nomCHRS = NomchrsPeer::retrieveByPk($findossier->getNomProprietaireBailleur());?>
    <?php $nomBailleursHLM = NombailleurshlmPeer::retrieveByPk($findossier->getNomProprietaireBailleur());?>
    <?php $conditionsAcces = ConditionsaccesPeer::retrieveByPk($findossier->getTypeConditionAcces());?>
    <?php $nomLocaPass = NomlocapassPeer::retrieveByPk($findossier->getNomConditionAcces());?>
    <?php $villeLogement = VillePeer::retrieveByPk($findossier->getVilleLogement());?>
    <?php $typeLogement = TypelogementPeer::retrieveByPk($findossier->getTypeLogement());?>
 
    <tr>
      <td class="traitsVisibles"><a href="<?php echo url_for('findossier/show?id='.$findossier->getId()) ?>"><?php echo $findossier->getId() ?></a></td>
      <td class="traitsVisibles"><?php echo $findossier->getDossierId() ?></td>
      <td class="traitsVisibles"><?php if($typeParc != null){echo $typeParc->getListtypeparc();}else{echo 'inconnu';}?></td>
      <td class="traitsVisibles"><?php
	if($typeParc != null){
           if($typeParc->getListtypeparc()=='HLM'){ 
	     if($typeProprietaireHLM != null){
	        echo $typeProprietaireHLM->getListtypeproprietairehlm();
	     }
	     else{echo 'inconnu';}
	   }
	   elseif($typeParc->getListtypeparc()=='Privé'){
             if($typeProprietairePrive != null){
	        echo $typeProprietairePrive->getListtypeproprietaireprive();
	     }
	     else{echo 'inconnu';}
	   }
	   else{
             if($typeProprietaireHebTemp != null){
	        echo $typeProprietaireHebTemp->getListtypeproprietairehebtemp();
	     }
	     else{echo 'inconnu';}
	   }
       }
       else{echo 'inconnu';}      
      ?></td>
 
      <td class="traitsVisibles"><?php 
      if($typeParc != null){
           if($typeParc->getListtypeparc()=='HLM'){ 
	     if($nomBailleursHLM != null){
	        echo $nomBailleursHLM->getListnombailleurshlm();
	     }
	     else{echo 'inconnu';}
	   }
	   elseif($typeParc->getListtypeparc()=='Privé'){
             echo '';
	   }
	   else{
             if($nomFJT != null){
	        echo $nomFJT->getListnomfjt();
	     }
	     else{echo 'inconnu';}
	   }
       }
       else{echo 'inconnu';}   

      ?></td>
      <td class="traitsVisibles"><?php if($conditionAcces != null){echo $conditionAcces->getListconditionsacces();}else{echo 'inconnu';}?></td>
      <td class="traitsVisibles"><?php if($nomLocaPass != null){echo $nomLocaPass->getListnomlocapass();}else{echo 'inconnu';} ?></td>
      <td class="traitsVisibles"><?php if($villeLogement != null){echo $villeLogement->getListville();}else{echo 'inconnu';}?></td>
      <td class="traitsVisibles"><?php echo $findossier->getDepartementLogement() ?></td>
      <td class="traitsVisibles"><?php if($typeLogement != null){echo $typeLogement->getListtypelogement();}else{echo 'inconnu';} ?></td>
      <td class="traitsVisibles"><?php echo $findossier->getSuperficieLogement() ?></td>
      <td class="traitsVisibles"><?php echo $findossier->getLoyer() ?></td>
      <td class="traitsVisibles"><?php echo $findossier->getEdfGdf() ?></td>
      <td class="traitsVisibles"><?php echo $findossier->getChauffage() ?></td>
      <td class="traitsVisibles"><?php echo $findossier->getDifficultesRencontrees() ?></td>
      <td class="traitsVisibles"><?php echo $findossier->getCategorieClassement() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a href="<?php echo url_for('findossier/create') ?>">Create</a>
