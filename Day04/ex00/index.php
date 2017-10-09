<?php
	session_start();
	if ($_GET['submit'] !== "OK" && $_GET['login'] !== "" && $_GET['passwd'] !== "")
	{
		$SESSION['login'] = $_GET['login'];
		$SESSION['passwd'] = $_GET['passwd'];
	}

?>
<html><body>
<form method="get">
Identifiant: <input type="text" name="login" value="<?php echo $SESSION['login']?>" />
<br />
Mot de passe: <input type="text" name="passwd" value="<?php echo $SESSION['passwd']?>" />
<input type="submit" name="OK" />
</form>
</body></html>
