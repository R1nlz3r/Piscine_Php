#!/usr/bin/php
<?php
	function ft_split($str)
	{
		$array = explode(" ", $str);
		$array = array_filter($array, 'strlen');
		sort($array, SORT_STRING);
		return ($array);
	}
?>
