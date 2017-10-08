<?php
session_start();
$message = "";
if ($_POST['submit'] == "OK" && $_POST['pseudo'] != "" && $_POST['password'] != "") {
	$file = file_get_contents("../data/users");
	if ($file != "") {
		$users = unserialize($file);
	} else {
		$users = array();
	}
	foreach ($users as $key => $value) {
		if ($value[0] == $_POST['pseudo']) {
			$message = "Cet utilisateur existe déjà";
		}
	}
	if ($message == "")
	{
		$_SESSION['pseudo'] = $_POST['pseudo'];
		array_push($users, array('pseudo' => $_POST['pseudo'], 'password' => hash("whirlpool", $_POST['password'])));
		file_put_contents("../data/users",serialize($users));
		header("Location: index.php");
	}
}
include('header.php');
?>
<form method="post">
	<label for="Pseudo">Pseudo</label><br />
	<input type="text" name="pseudo"/><br />
	<label for="Password">Mot de passe</label><br />
	<input type="password" name="password"/><br />
	<label for="Password">Confirme ton mot de passe</label><br />
	<input type="password" name="confirmation"/><br />
	<?php echo $message; ?>
	<input type="submit" name="submit" value="OK"/>
</form>
