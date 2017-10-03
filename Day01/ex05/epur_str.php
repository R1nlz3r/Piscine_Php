#!/usr/bin/php
<?php
	if ($argc != 2)
		return (NULL);
	$str = preg_replace('/\s\s+/', ' ', $argv[1]);
	$str = ltrim($str);
	$str = rtrim($str);
	if ($str)
		echo  $str . "\n";
?>
