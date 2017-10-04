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
		if ($i != 1)
			$array = array_merge($array, ft_split($argv[$i]));
		else
			$array = ft_split($argv[$i]);
		++$i;
	}
	if (empty($array))
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

	if (!(empty($alpha)))
	{
		sort($alpha, SORT_FLAG_CASE | SORT_STRING);
		foreach ($alpha as $tmp)
			echo $tmp . "\n";
	}
	if (!(empty($nb)))
	{
		sort($nb, SORT_STRING);
		foreach ($nb as $tmp)
			echo $tmp . "\n";
	}
	if (!(empty($rest)))
	{
		sort($rest, SORT_STRING);
		foreach ($rest as $tmp)
			echo $tmp . "\n";
	}
?>
