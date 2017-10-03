#!/usr/bin/php
<?php
	while (1)
	{
		echo "Entrez un nombre: ";
		$nb = fgets(STDIN);
		if (!$nb)
			echo "\n";
		if (!$nb)
			break ;
		$nb = str_replace("\n", "", "$nb");
		if (is_numeric($nb) && strlen($nb) <= 10)
		{
			if ($nb % 2)
				echo "Le chiffre " . $nb . " est Impair\n";
			else
				echo "Le chiffre " . $nb . " est Pair\n";
		}
		else
			echo "'" . $nb . "' est pas un chiffre\n";
	}
?>
