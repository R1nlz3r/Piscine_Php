<?php
session_start();
include("header.php");
$count = 0;
while (($data = fgetcsv($fd, 0, ";")) !== FALSE) {
 	if ($count !== 0 && ($data[1] == $_GET['id'] || $cat_nb === 0))  { ?>
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
