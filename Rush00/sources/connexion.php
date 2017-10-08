<?php
	if ($_POST['submit'] === "OK" && $_POST['pseudo'] !== "" && $_POST['password'] !== "")
	{
		session_set();
		$_SERVER['PHP_AUTH_USER'] = $_POST['pseudo'];
		$_SERVER['PHP_AUTH_PW'] = $_POST['password'];
		$_SESSION['connexion'] = 1;
		header("Location: index.php");
	}
	$_SESSION['connexion'] = 2;
?>
