#!/usr/bin/php
<?php
	function ft_is_sort($array)
	{
		if (!($array))
			return (true);
		$sort = $array;
		sort($sort, SORT_STRING);
		return (($array === $sort));
	}
?>
