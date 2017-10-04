#!/usr/bin/php
<?php
	if ($argc <= 1)
		return (NULL);
	preg_match_all("/[\S]{1,}/", $argv[1], $double_array);
	if (!$double_array[0]);
		return (NULL);
	echo implode(" ", $double_array[0]) . "\n";
?>
