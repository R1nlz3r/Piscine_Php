<?php
session_start();
if ($_POST['submit'] == "OK" && $_POST['pseudo'] && $_POST['password'] != "")
{
	$file = file_get_contents("../data/users");
	if ($file != "") {
		$users = unserialize($file);
	} else {
		$users = array();
	}

	foreach ($users as $key => $value) {
		if ($value['pseudo'] == $_POST['pseudo'] && $value['password'] == hash("whirlpool", $_POST['password'])) {
			$_SESSION['pseudo'] = $_POST['pseudo'];
			header("Location: index.php");
		}
	}
	$message = "Informations de connexion invalides";
} else if ($_POST['submit'] == "OK") {
	$message = "Veuillez renseigner tous les champs";
}
include("header.php");
?>
<form action="connexion.php" method="post">
	<label for="Pseudo">Pseudo</label><br />
	<input type="text" name="pseudo"/><br />
	<label for="Password">Mot de passe</label><br />
	<input type="password" name="password"/><br />
	<?= $message.'<br />'; ?>
	<input type="submit" name="submit" value="OK"/>
</form>
