<?php
	if (!($_GET['action'] && $_GET['name'])
		|| ($_GET['action'] === "set" && !$_GET['value'])
		|| ($_GET['action'] === "get" && !$_COOKIE[$_GET['name']]))
		return (NULL);
	else if ($_GET['action'] === "set")
		setcookie($_GET['name'], $_GET['value'], time() + 3600);
	else if ($_GET['action'] === "get")
		echo $_COOKIE[$_GET['name']] . "\n";
	else if ($_GET['action'] === "del")
		setcookie($_GET['name'], "", time() - 3600);
?>
