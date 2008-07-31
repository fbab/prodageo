<a href="<?php echo url_for('dossier/create/index') ?>">Nouveau Dossier</a><br/><br/><br/><br/>

<?php require ('/var/www/cllajinet/lib/model/Personne.php');
     $personne= new Personne();   
?>

<form method="post" action="">
 
<p>
    <label>rechrecher dossier de : </label><br/>
    <label> Nom </label><input type="text" name="nom" /><br/> 
    <label> Prenom </label><input type="text" name="prenom"/><input type="submit" value="Valider" />
</p> 
</form>

<?php
        if (isset($_POST['nom']) && isset($_POST['prenom'])) {
         $num=$personne->getIdPersonne($_POST['nom'],$_POST['prenom']);
        }
        
?>
<a href="<?php echo url_for('personne/edit?id='.$num) ?>">Lancer la recherche</a>
