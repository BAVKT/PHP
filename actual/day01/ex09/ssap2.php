#!/usr/bin/php
<?php
function ft_split($line)
{
	$i = 0;
	$tab = explode(" ", $line);
	sort($tab);
	foreach ($tab as $elem)
		if (!strlen($elem))
			unset($tab[$i++]);
	return (array_values($tab));
}

foreach ($argv as $elem)
{
	if ($elem === $argv[0])
		$tab = array("");
	else
		$tab = array_merge($tab, ft_split($elem));
}
unset($tab[0]);
$taba = array("");
$tab1 = array("");
$tabx = array("");
foreach ($tab as $elem)
{
	if (ctype_alpha($elem))
		array_push($taba, $elem);
	else if (is_numeric($elem))
		array_push($tab1, $elem);
	else
		array_push($tabx, $elem);
}
unset($taba[0]);
unset($tab1[0]);
unset($tabx[0]);
array_values($taba);
array_values($tab1);
array_values($tabx);
natcasesort($taba);
foreach ($taba as $elem)
	echo $elem."\n";
$i = 0;
foreach ($tab1 as $elem)
{
	$tab1[$i++] = strval($elem);
}
$i = 0;
while ($tab1[$i + 1])
{
	if (strcmp($tab1[$i], $tab1[$i + 1]) > 0)
	{
		$tmp = $tab1[$i];
		$tab1[$i] = $tab1[$i + 1];
		$tab1[$i + 1] = $tmp;
		$i = 0;
	}
	else
		$i++;
}
foreach ($tab1 as $elem)
	echo $elem."\n";
sort($tabx);
foreach ($tabx as $elem)
	echo $elem."\n";
?>