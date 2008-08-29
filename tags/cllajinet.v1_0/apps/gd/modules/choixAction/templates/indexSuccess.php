<a href="<?php echo url_for('dossier/create/index') ?>">Nouveau Dossier</a><br/><br/><br/><br/>

<?php 
// require ('/var/www/cllajinet/lib/model/Personne.php');
require (sfConfig::get('sf_root_dir').'/lib/model/Personne.php');
     $personne= new Personne();   
?>

<form method="post" action="<?php echo url_for('personne/search ')?>">
 
<p>
    <label>rechrecher dossier de : </label><br/>
    <label> Nom </label><input type="text" name="nom" /><br/> 
    <label> Prenom </label><input type="text" name="prenom"/><input type="submit" value="Lancer la recherche" name="recherche"/>
</p> 
</form>

