<?php $fd = fopen("../data/products.csv", "r"); ?>
<html>
	<head>
		<meta charset="utf-8" />
		<title>110° Chaises pliantes</title>
		<link href="index.css" rel="stylesheet" />
		<link href="../resources/icon.ico" rel="icon" />
	</head>
	<body>
	<nav>
		<a href="index.php"><img class="icon" src="../resources/icon.ico" alt=""/></a>
		<form method="get">
		<div class="links" style="border-top: 4px solid #004D40;"><a href="categories.php?id=1" class="onglets">Cuisine</a></div>
		<div class="links"><a href="categories.php?id=2" class="onglets">Terrasse</a></div>
		<div class="links"><a href="categories.php?id=3" class="onglets">Salle a manger</a></div>
		<div class="links"><a href="categories.php?id=4" class="onglets">Bureau</a></div>
		<div class="links"><a href="categories.php?id=5" class="onglets">Bar - Restaurant</a></div>
		<?php if ($_SESSION['pseudo'] == "") {?>
			<div class="connexion">
				<div class="linksimp" style="border-top: 3px solid #004D40;"><a href="connexion.php" class="onglets">Connexion</a></div>
				<div class="linksimp"><a href="inscription.php" class="onglets">Inscription</a></div>
			</div>
		<?php } else {?>
			<div class="connexion">
				<div class="linksimp" style="border-top: 3px solid #004D40;"><a href="deconnexion.php" class="onglets">Déconnexion</a></div>
			</div>
		<?php }?>
		</form>
	</nav>
	<header>
		<div class="titre1">110° Chaises pliantes</div>
		<div class="titre2">Les chaises qui se plieront à toutes vos envies</div>
	</header>
	<div class="body">
