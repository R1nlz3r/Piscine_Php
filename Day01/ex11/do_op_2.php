#!/usr/bin/php
<?php
	if ($argc != 2)
	{
		echo "Incorrect Parameters\n";
		return (NULL);
	}
	preg_match_all("/[\S]+/", $argv[1], $double_array);
	$str = implode("", $double_array[0]);
	preg_match("/^([-+]?[0-9]+)([-|+|*|\/|%])([-+]?[0-9]+)$/", $str, $array);
	if (!($array[0]) || (!(int)$array[3] && ($array[2] === "/" || $array[2] === "%")))
	{
		echo "Syntax Error\n";
		return (NULL);
	}
	if ($array[2] == "+")
	 	echo $array[1] + $array[3] . "\n";
	else if ($array[2] == "-")
		echo $array[1] - $array[3] . "\n";
	else if ($array[2] == "*")
		echo $array[1] * $array[3] . "\n";
	else if ($array[2] == "/")
		echo $array[1] / $array[3] . "\n";
	else if ($array[2] == "%")
		echo $array[1] % $array[3] . "\n";
?>
