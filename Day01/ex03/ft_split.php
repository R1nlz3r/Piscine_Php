#!/usr/bin/php
<?php
	function ft_split($str)
	{
		if (!$str)
			return (NULL);
		$array = explode(" ", $str);
		$array = array_filter($array);
		sort($array, SORT_STRING);
		return ($array);
	}
?>
