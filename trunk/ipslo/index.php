<?php
// extrait de http://www.commentcamarche.net/forum/affich-2656528-php-script-de-login-et-password

$LOGIN="badger";  //le login
$PASSWD="yiff";   //le mot de passe

if	($_POST['logintext']==$LOGIN && $_POST['passwdtext']==$PASSWD) { ?>
<html>
<body>
<p>Youpi, tu as trouvé/p>
</body>
</html>

<?php } else { ?>
<html>
<body>
<p>Perdu! Essaie encore!</p>
<form name="connexion" action="password.php" method="post">
	<p>Login :<br><input type="text" name="logintext"></p>
	<p>Password :<br><input type="text" name="passwdtext"></p>
	<input name="envoi" type="submit" value="connect">
</form>
</body>
</html>
<?php } ?>

