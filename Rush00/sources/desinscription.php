<?php
session_start();
$file = file_get_contents("../data/users");
if ($file != "") {
	$users = unserialize($file);
} else {
	header('Location: index.php');
}
foreach ($users as $key => $value) {
	if ($value[0] == $_POST['pseudo']) {
		array_splice($users, $key, 1);
		unset($_SESSION['pseudo']);
		file_put_contents("../data/users",serialize($users));
		header('Location: index.php');
	}
}
header('Location: index.php');
?>
