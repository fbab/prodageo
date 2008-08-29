<?php 
// require ('/var/www/cllajinet/lib/model/Findossier.php'); 
      require (sfConfig::get('sf_root_dir').'/lib/model/Findossier.php');
      $findossier=new Findossier();
      echo $_POST['typeparc'];
      $findossier->setVarTypeParc($_POST['typeparc']);
?>
<a href="<?php echo url_for('findossier/create/index')?>">Poursuivre Clôture</a>
