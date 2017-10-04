#!/usr/bin/php
<?php
	if ($argc != 2)
		return (NULL);
	preg_match("/^([Ll]undi|[Mm]ardi|[Mm]ercredi|[Jj]eudi|[V-v]endredi|[Ss]amedi|[Dd]imanche) ([3][0-1]|[1-2][0-9]|0?[1-9]) ([Jj]anvier|[Ff]evrier|[Ma]rs|[Aa]vril|[Ma]ai|[Jj]uin|[Jj]uillet|[Aa]out|[Ss]eptembre|[Oo]ctobre|[Nn]ovembre|[Dd]ecembre) ([1][0][7-9][0-9]|[2][0][0-6][0-9]) ([2][0-3]|[0-1][0-9]):([0-5][0-9]):([0-5][0-9])$/", $argv[1], $array);
	if (!$array[0]
		|| ((int)$array[2] > 29 && ($array[3] === "Fevrier" || $array[3] === "fevrier"))
		|| ((int)$array[2] == 29 && ($array[3] === "Fevrier" || $array[3] === "fevrier") && ((int)$array[4] % 4))
		|| ((int)$array[2] == 31 && ($array[3] === "Avril" || $array[3] === "avril"
		|| $array[3] === "Juin" || $array[3] === "juin" || $array[3] === "Septembre"
		|| $array[3] === "septembre" || $array[3] === "Novembre" || $array[3] === "novembre")))
		echo "Wrong Format\n";
	else
	{
		if ($array[3] === "Janvier" || $array[3] === "janvier")
			$array[3] = 1;
		else if ($array[3] === "Fevrier" || $array[3] === "fevrier")
			$array[3] = 2;
		else if ($array[3] === "Mars" || $array[3] === "mars")
			$array[3] = 3;
		else if ($array[3] === "Avril" || $array[3] === "avril")
			$array[3] = 4;
		else if ($array[3] === "Mai" || $array[3] === "mai")
			$array[3] = 5;
		else if ($array[3] === "Juin" || $array[3] === "juin")
			$array[3] = 6;
		else if ($array[3] === "Juillet" || $array[3] === "juillet")
			$array[3] = 7;
		else if ($array[3] === "Aout" || $array[3] === "aout")
			$array[3] = 8;
		else if ($array[3] === "Septembre" || $array[3] === "Septembre")
			$array[3] = 9;
		else if ($array[3] === "Octobre" || $array[3] === "octobre")
			$array[3] = 10;
		else if ($array[3] === "Novembre" || $array[3] === "novembre")
			$array[3] = 11;
		else
			$array[3] = 12;
		date_default_timezone_set("Europe/Paris");
		$time = mktime($array[5], $array[6], $array[7], $array[3], $array[2], $array[4]);
		if ($time)
			echo $time . "\n";
		else
			echo "Wrong Format\n";
	}
?>
