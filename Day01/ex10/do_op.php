#!/usr/bin/php
<?php
	if ($argc != 4)
	{
		echo "Incorrect Parameters\n";
		return (NULL);
	}
	$i = 1;
	while ($i < 3)
	{
		$argv[$i] = trim($argv[$i]);
		++$i;
	}
	if ($argv[2] == "+")
	 	echo $argv[1] + $argv[3] . "\n";
	else if ($argv[2] == "-")
		echo $argv[1] - $argv[3] . "\n";
	else if ($argv[2] == "*")
		echo $argv[1] * $argv[3] . "\n";
	else if ($argv[2] == "/" && ((int)$argv[3]))
		echo $argv[1] / $argv[3] . "\n";
	else if ($argv[2] == "%" && ((int)$argv[3]))
		echo $argv[1] % $argv[3] . "\n";
?>
