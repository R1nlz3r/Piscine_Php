#!/usr/bin/php
<?php
	function ft_split($str)
	{
		if (!$str)
			return (NULL);
		$array = explode(" ", $str);
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
	foreach ($array as $tmp)
	{
		if (ctype_alpha($tmp))
			$alpha[] = $tmp;
		else if (is_numeric($tmp))
			$nb[] = $tmp;
		else
			$rest[] = $tmp;
	}
	sort($alpha, SORT_FLAG_CASE | SORT_STRING);
	foreach ($alpha as $tmp)
		echo $tmp . "\n";
	sort($nb, SORT_STRING);
	foreach ($nb as $tmp)
		echo $tmp . "\n";
	sort($rest, SORT_STRING);
	foreach ($rest as $tmp)
		echo $tmp . "\n";
?>
