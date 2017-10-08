<?php
	header("Authentication Required");
	header('Content-type: text');
											$_SERVER['PHP_AUTH_USER'] = "admin"; // Pour pouvoir entrer
											$_SERVER['PHP_AUTH_PW'] = "1234"; // Pour pouvoir entrer
	if ($_SERVER['PHP_AUTH_USER'] !== "admin"
		|| $_SERVER['PHP_AUTH_PW'] !== "1234")
		header("Location: index.php");
?>

<html>
	<head>
		<meta charset="utf-8" />
		<title>110° Chaises pliantes</title>
		<link href="index.css" rel="stylesheet" />
		<link href="../resources/icon.ico" rel="icon" />
	</head>
	<body>
		<?php
			$fd = fopen("../data/products.csv", "r");
			$fdc = fopen("../data/categorie.csv", "r");
			$cat = fgetcsv($fdc, 0, ";");
			if (isset($_GET["cat"]))
			{
				if ($_GET["cat"] == "Log")
					$cat_nb = 1;
				else if ($_GET["cat"] == "Comptes")
					$cat_nb = 2;
				else if ($_GET["cat"] == "Produits")
					$cat_nb = 3;
				else
					$cat_nb = 0;
			} else
				$cat_nb = 0;
			fclose($fdc);
		?>
		<nav>
			<a href="index.php"><img class="icon" src="../resources/icon.ico" alt=""/></a>
			<form method="get">
			<div class="links" style="border-top: 4px solid #004D40;"><input class="onglets" type="submit" name="cat" value="Log" /></div>
			<div class="links"><input class="onglets" type="submit" name="cat" value="Comptes" /></div>
			<div class="links"><input class="onglets" type="submit" name="cat" value="Produits" /></div>
		</nav>
		<header>
			<div class="titre1">110° Chaises pliantes</div>
			<div class="titre2">Les chaises qui se plieront à toutes vos envies</div>
		</header>
		<div class="body">

		</div>
	</body>
</html>
