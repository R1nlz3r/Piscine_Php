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

	$i = 1;
	while ($i < $argc)
	{
		if ($array)
			$array = array_merge($array, ft_split($argv[$i]));
		else
			$array = ft_split($argv[$i]);
		++$i;
	}
	if (!$array)
		return (NULL);
	sort($array, SORT_STRING);
	$array = array_filter($array);
	foreach ($array as $tmp)
		echo $tmp . "\n";
?>
