<html>
	<head>
		<meta charset="utf-8" />
		<title>110°</title>
		<link href="index.css" rel="stylesheet" />
		<link href="../resources/icon.ico" rel="icon" />
	</head>
	<body>
		<nav>
			<a href="index.php"><img class="icon" src="../resources/icon.ico" alt=""/></a>
			<div class="links" style="border-top: 4px solid #004D40;"><a href="#">Cuisine</a></div>
			<div class="links"><a href="#">Terrasse - Jardin</a></div>
			<div class="links"><a href="#">Salle à manger</a></div>
			<div class="links"><a href="#">Bureau</a></div>
			<div class="links"><a href="#">Bar - Restaurant</a></div>
		</nav>
		<header>
			<div class="titre1">110° Chaises pliantes</div>
			<div class="titre2">Les chaises qui se plieront à toutes vos envies</div>
		</header>
		<div class="body">
			<?php
				echo file_get_contents("connexion.html");
			?>
		</div>
	</body>
</html>
