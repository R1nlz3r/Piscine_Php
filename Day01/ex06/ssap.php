#!/usr/bin/php
<?php
	function ft_split($str)
	{
		$array = explode(" ", $str);
		$array = array_filter($array, 'strlen');
		sort($array, SORT_STRING);
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
	if (empty($array))
		return (NULL);
	sort($array, SORT_STRING);
	$array = array_filter($array, 'strlen');
	foreach ($array as $tmp)
		echo $tmp . "\n";
?>
