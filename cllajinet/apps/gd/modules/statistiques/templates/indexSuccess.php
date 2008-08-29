<h1>Statistiques List</h1>

<table class="traitsVisibles">
  <thead>
    <tr class="traitsVisibles">
      <tr class="traitsVisibles">Id</tr>
      <tr class="traitsVisibles">Datestat</tr>
      <tr class="traitsVisibles">Nbmenagesrecu</tr>
      <tr class="traitsVisibles">Nbadultesrecu</tr>
      <tr class="traitsVisibles">Nbenfantsrecu</tr>
      <tr class="traitsVisibles">Nbloges</tr>
      <tr class="traitsVisibles">Nblogesadultes</tr>
      <tr class="traitsVisibles">Nblogesenfants</tr>
      <tr class="traitsVisibles">Nblogesdirect</tr>
      <tr class="traitsVisibles">Nblogesdirectadultes</tr>
      <tr class="traitsVisibles">Nblogesdirectenfants</tr>
      <tr class="traitsVisibles">Nblogesindirect</tr>
      <tr class="traitsVisibles">Nblogesindirectadultes</tr>
      <tr class="traitsVisibles">Nblogesindirectenfants</tr>
      <tr class="traitsVisibles">Nbalt</tr>
      <tr class="traitsVisibles">Nbaltadultes</tr>
      <tr class="traitsVisibles">Nbaltenfants</tr>
      <tr class="traitsVisibles">Nbsousloc</tr>
      <tr class="traitsVisibles">Nbsouslocadultes</tr>
      <tr class="traitsVisibles">Nbsouslocenfants</tr>
      <tr class="traitsVisibles">Nbencours</tr>
      <tr class="traitsVisibles">Nbencoursadultes</tr>
      <tr class="traitsVisibles">Nbencoursenfants</tr>
      <tr class="traitsVisibles">Nbabandon</tr>
      <tr class="traitsVisibles">Nbabandonadultes</tr>
      <tr class="traitsVisibles">Nbabandonenfants</tr>
      <tr class="traitsVisibles">Sexe</tr>
      <tr class="traitsVisibles">Trancheage</tr>
      <tr class="traitsVisibles">Nationalite</tr>
      <tr class="traitsVisibles">Situationfamiliale</tr>
      <tr class="traitsVisibles">Originedemande</tr>
      <tr class="traitsVisibles">Villeresidence</tr>
      <tr class="traitsVisibles">Modehebergement</tr>
      <tr class="traitsVisibles">Lieutravail</tr>
      <tr class="traitsVisibles">Typecontrat</tr>
      <tr class="traitsVisibles">Revenus</tr>
      <tr class="traitsVisibles">Sexeloges</tr>
      <tr class="traitsVisibles">Trancheageloges</tr>
      <tr class="traitsVisibles">Nationaliteloges</tr>
      <tr class="traitsVisibles">Situationfamilialeloges</tr>
      <tr class="traitsVisibles">Originedemandeloges</tr>
      <tr class="traitsVisibles">Villeresidenceloges</tr>
      <tr class="traitsVisibles">Modehebergementloges</tr>
      <tr class="traitsVisibles">Lieutravailloges</tr>
      <tr class="traitsVisibles">Typecontratloges</tr>
      <tr class="traitsVisibles">Revenusloges</tr>
      <tr class="traitsVisibles">Typelogementtrouveloges</tr>
      <tr class="traitsVisibles">Typeproprietaireloges</tr>
      <tr class="traitsVisibles">Villelogementtrouveloges</tr>
      <tr class="traitsVisibles">Nbrecu</tr>
      <tr class="traitsVisibles">Nbabandons</tr>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($statistiquesList as $statistiques): ?>
    <tr>
      <td class="traitsVisibles"><a href="<?php echo url_for('statistiques/show?id='.$statistiques->getId()) ?>"><?php echo $statistiques->getId() ?></a></td>
      <tr class="traitsVisibles"><?php echo $statistiques->getDatestat() ?></tr>
      <tr class="traitsVisibles"><?php echo $statistiques->getNbmenagesrecu() ?></tr>
      <tr class="traitsVisibles"><?php echo $statistiques->getNbadultesrecu() ?></tr>
      <tr class="traitsVisibles"><?php echo $statistiques->getNbenfantsrecu() ?></tr>
      <tr class="traitsVisibles"><?php echo $statistiques->getNbloges() ?></tr>
      <tr class="traitsVisibles"><?php echo $statistiques->getNblogesadultes() ?></tr>
      <tr class="traitsVisibles"><?php echo $statistiques->getNblogesenfants() ?></tr>
      <tr class="traitsVisibles"><?php echo $statistiques->getNblogesdirect() ?></tr>
      <tr class="traitsVisibles"><?php echo $statistiques->getNblogesdirectadultes() ?></tr>
      <tr class="traitsVisibles"><?php echo $statistiques->getNblogesdirectenfants() ?></tr>
      <tr class="traitsVisibles"><?php echo $statistiques->getNblogesindirect() ?></tr>
      <tr class="traitsVisibles"><?php echo $statistiques->getNblogesindirectadultes() ?></tr>
      <tr class="traitsVisibles"><?php echo $statistiques->getNbalt() ?></tr>
      <tr class="traitsVisibles"><?php echo $statistiques->getNbaltadultes() ?></tr>
      <tr class="traitsVisibles"><?php echo $statistiques->getNbaltenfants() ?></tr>
      <tr class="traitsVisibles"><?php echo $statistiques->getNbsousloc() ?></tr>
      <tr class="traitsVisibles"><?php echo $statistiques->getNbsouslocadultes() ?></tr>
      <tr class="traitsVisibles"><?php echo $statistiques->getNbsouslocenfants() ?></tr>
      <tr class="traitsVisibles"><?php echo $statistiques->getNbencours() ?></tr>
      <tr class="traitsVisibles"><?php echo $statistiques->getNbencoursadultes() ?></tr>
      <tr class="traitsVisibles"><?php echo $statistiques->getNbencoursenfants() ?></tr>
      <tr class="traitsVisibles"><?php echo $statistiques->getNbabandon() ?></tr>
      <tr class="traitsVisibles"><?php echo $statistiques->getNbabandonadultes() ?></tr>
      <tr class="traitsVisibles"><?php echo $statistiques->getNbabandonenfants() ?></tr>
      <tr class="traitsVisibles"><?php echo $statistiques->getSexe() ?></tr>
      <tr class="traitsVisibles"><?php echo $statistiques->getTrancheage() ?></tr>
      <tr class="traitsVisibles"><?php echo $statistiques->getNationalite() ?></tr>
      <tr class="traitsVisibles"><?php echo $statistiques->getSituationfamiliale() ?></tr>
      <tr class="traitsVisibles"><?php echo $statistiques->getOriginedemande() ?></tr>
      <tr class="traitsVisibles"><?php echo $statistiques->getVilleresidence() ?></tr>
      <tr class="traitsVisibles"><?php echo $statistiques->getModehebergement() ?></tr>
      <tr class="traitsVisibles"><?php echo $statistiques->getLieutravail() ?></tr>
      <tr class="traitsVisibles"><?php echo $statistiques->getTypecontrat() ?></tr>
      <tr class="traitsVisibles"><?php echo $statistiques->getRevenus() ?></tr>
      <tr class="traitsVisibles"><?php echo $statistiques->getSexeloges() ?></tr>
      <tr class="traitsVisibles"><?php echo $statistiques->getTrancheageloges() ?></tr>
      <tr class="traitsVisibles"><?php echo $statistiques->getNationaliteloges() ?></tr>
      <tr class="traitsVisibles"><?php echo $statistiques->getSituationfamilialeloges() ?></tr>
      <tr class="traitsVisibles"><?php echo $statistiques->getOriginedemandeloges() ?></tr>
      <tr class="traitsVisibles"><?php echo $statistiques->getVilleresidenceloges() ?></tr>
      <tr class="traitsVisibles"><?php echo $statistiques->getModehebergementloges() ?></tr>
      <tr class="traitsVisibles"><?php echo $statistiques->getLieutravailloges() ?></tr>
      <tr class="traitsVisibles"><?php echo $statistiques->getTypecontratloges() ?></tr>
      <tr class="traitsVisibles"><?php echo $statistiques->getRevenusloges() ?></tr>
      <tr class="traitsVisibles"><?php echo $statistiques->getTypelogementtrouveloges() ?></tr>
      <tr class="traitsVisibles"><?php echo $statistiques->getTypeproprietaireloges() ?></tr>
      <tr class="traitsVisibles"><?php echo $statistiques->getVillelogementtrouveloges() ?></tr>
      <tr class="traitsVisibles"><?php echo $statistiques->getNbrecu() ?></tr>
      <tr class="traitsVisibles"><?php echo $statistiques->getNbabandons() ?></tr>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a href="<?php echo url_for('statistiques/create') ?>">Create</a>
