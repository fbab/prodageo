<form action="<?php echo url_for('main/login') ?>" method="post">
<table>
<tr><td colspan="2" align="center">Veuillez vous identifier</td></tr>
<?php echo $login_form->render() ?>
<tr><td colspan="2" align="center">
<input type="submit" name="submit" value="ok" />
</td></tr>
</table>
