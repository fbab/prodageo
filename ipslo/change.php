<?php
// extrait de http://www.commentcamarche.net/forum/affich-2656528-php-script-de-login-et-password

$alias = $_POST['alias'] ;
$redirection = $_POST['redirection'] ;

?>
<html>
<body>
<?
if ( $alias <> '' )
{
echo "<p>Les courriels adresses a $alias seront rediriges vers $redirection.</p>" ;
} ?>

<form name="connexion" action="change.php" method="post">
        <p>Alias :<br><input type="text" name="alias"></p>
        <p>Redirection :<br><input type="text" name="redirection"></p>
        <input name="envoi" type="submit" value="connect">
</form>
</body>
</html>


</html>

