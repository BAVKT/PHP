#!/usr/bin/php
<?php
function ft_split($line)
{
	$i = 0;
	$tab = explode(" ", $line);
	foreach ($tab as $elem)
		if (!strlen($elem))
			unset($tab[$i++]);
	return (array_values($tab));
}
if ($argc < 2)
	exit (-1);
$line = trim($argv[1]);
while ($line[$i])
{
	if ($line[$i] === ' ' && $line[$i + 1] === ' ')
		$line[$i] = '';
	$i++;
}
$tab = ft_split($line);
array_push($tab, $tab[0]);
unset($tab[0]);
echo trim(implode(" ", array_values($tab)))."\n";
?>