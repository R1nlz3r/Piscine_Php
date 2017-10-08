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
				if ($_GET["cat"] == "Cuisine")
					$cat_nb = 1;
				else if ($_GET["cat"] == "Terrasse - Jardin")
					$cat_nb = 2;
				else if ($_GET["cat"] == "Salle à manger")
					$cat_nb = 3;
				else if ($_GET["cat"] == "Bureau")
					$cat_nb = 4;
				else if ($_GET["cat"] == "Bar - Restaurant")
					$cat_nb = 5;
				else
					$cat_nb = 0;
			} else
				$cat_nb = 0;
			fclose($fdc);
		?>
		<nav>
			<a href="index.php"><img class="icon" src="../resources/icon.ico" alt=""/></a>
			<form method="get">
			<div class="links" style="border-top: 4px solid #004D40;"><input type="submit" name="cat" value="Cuisine" /></div>
			<div class="links"><input type="submit" name="cat" value="Terrasse - Jardin" /></div>
			<div class="links"><input type="submit" name="cat" value="Salle à manger" /></div>
			<div class="links"><input type="submit" name="cat" value="Bureau" /></div>
			<div class="links"><input type="submit" name="cat" value="Bar - Restaurant" /></div>
				<div class="connexion">
					<div class="linksimp" style="border-top: 3px solid #004D40;"><input class="onglets" type="submit" name="Connexion" value="Connexion" /></div>
					<div class="linksimp"><input class="onglets" type="submit" name="Inscription" value="Inscription" /></div>
				</div>
			</form>
		</nav>
		<header>
			<div class="titre1">110° Chaises pliantes</div>
			<div class="titre2">Les chaises qui se plieront à toutes vos envies</div>
		</header>
		<div class="body">
			<?php if (!isset($log) /* variables a voir etc*/) {?>
			<form method="past">
				<label for="Pseudo">Pseudo</label><br />
				<input type="text" id="Pseudo" name="pseudo"/><br />
				<label for="Password">Mot de passe</label><br />
				<input type="password" id="Password" name="password"/><br />
				<input type="submit" name="submit" value="OK"/>
			</form>
			<?php }?>
			<div class="catégorie"><?php echo $cat[$cat_nb];?></div>
			<?php
					$count = 0;
					while (($data = fgetcsv($fd, 0, ";")) !== FALSE) {
						 if ($count !== 0 && ($data[1] == $cat_nb || $cat_nb === 0))  { ?>
				<div class="article">
				<img class="articleimg" src="<?php echo $data[4];?>" alt="" />
				<div class="add_cart_button"><div class="add_cart_text">Ajouter au panier</div></div>
 				<div class="price_trick"><div class="price"><?php echo $data[3];?> $</div></div>
				<div class="description_block">
					<div class="description"> <?php echo $data[0];?> :<br /> <?php echo $data[2];?></div>
				</div>
				</div>
			<?php
						}
						$count++;
					}
					fclose($fd);
			?>
		</div>
	</body>
</html>
