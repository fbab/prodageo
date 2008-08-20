<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

<?php include_http_metas() ?>
<?php include_metas() ?>

<?php include_title() ?>

<link rel="shortcut icon" href="/favicon.ico" />

</head>
<body>

<div id="container" style="width:600px;margin:0 auto;border:1px solid grey;padding:10px">
  <div id="navigation" style="display:inline;float:right">
    <ul>
      <li><?php echo link_to('Liste des Personnes', 'personne/index') ?></li>
      <li><?php echo link_to('Liste des Dossiers', 'dossier/index') ?></li>
      <li><?php echo link_to('Liste des fins de dossiers', 'findossier/index') ?></li>
    </ul>
    <ul>
      <li><?php echo link_to('retour au menu choix action', 'choixAction/index') ?></li>
    </ul>
    <ul>
      <li><?php echo link_to('statistiques', 'statistiques/create') ?></li>
    </ul>
    <ul>
      <li><?php echo link_to('zone admin', 'zoneAdmin/index') ?></li>
    </ul>
  </div>
  <div id="title">
    <!--<h1><?php echo link_to('Cllajinet', '@homepage') ?></h1>-->
    <h1>Projet Cllajinet</h1>
  </div>
 
  <div id="content" style="clear:right">
    <?php echo $sf_data->getRaw('sf_content') ?>
  </div>
</div>

</body>
</html>
