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
		?>
		<nav>
			<a href="index.php"><img class="icon" src="../resources/icon.ico" alt=""/></a>
			<form method="get">
				<div class="links" style="border-top: 4px solid #004D40;"><input type="submit" name="Cuisine" value="Cuisine" /></div>
				<div class="links"><input type="submit" name="Terrasse - Jardin" value="Terrasse - Jardin" /></div>
				<div class="links"><input type="submit" name="Salle à manger" value="Salle à manger" /></div>
				<div class="links"><input type="submit" name="Bureau" value="Bureau" /></div>
				<div class="links"><input type="submit" name="Bar - Restaurant" value="Bar - Restaurant" /></div>
			</form>
		</nav>
		<header>
			<div class="titre1">110° Chaises pliantes</div>
			<div class="titre2">Les chaises qui se plieront à toutes vos envies</div>
		</header>
		<div class="body">
			<form method="get">
				<label for="Pseudo">Pseudo</label><br />
				<input type="text" id="Pseudo" name="pseudo"/><br />
				<label for="Password">Mot de passe</label><br />
				<input type="password" id="Password" name="password"/><br />
				<input type="submit" name="submit" value="OK"/>
			</form>
		</div>
	</body>
</html>
