#!/usr/bin/php
<?php
	if ($argc <= 2 || (!($argv[1]) && $argv[1] != "0"))
		return (NULL);
	$tmp = false;
	$i = 2;
	while ($i < $argc)
	{
		if (strlen($argv[1]) < strlen($argv[$i])
			&& !(strncmp($argv[1], $argv[$i], strlen($argv[1]))))
		{
			$str = substr($argv[$i], strlen($argv[1]));
			if (preg_match("/^:/", $str) && ($str = substr($str, 1)) == true)
				$tmp = $str;
		}
		++$i;
	}
	if ($tmp)
		echo $tmp . "\n";
?>
