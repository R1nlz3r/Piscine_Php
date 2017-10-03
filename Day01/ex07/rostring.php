#!/usr/bin/php
<?php
	if (!($argc > 1) || !$argv[1])
		return (NULL);
	$array = explode(" ", $argv[1]);
	$array = array_filter($array);
	$str = array_shift($array);
	foreach ($array as $tmp)
		echo $tmp . " ";
	$str = trim($str);
	if ($str)
		echo $str . "\n";
?>
