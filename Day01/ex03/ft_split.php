#!/usr/bin/php
<?php
	function ft_split($str)
	{
		if (!$str)
			return (NULL);
		$array = explode(" ", $str);
		sort($array, SORT_STRING);
		$array = array_filter($array);
		return ($array);
	}
?>
