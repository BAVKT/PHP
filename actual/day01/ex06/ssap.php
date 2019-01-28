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
	sort($tab);
}
unset($tab[0]);
foreach ($tab as $elem)
	echo $elem."\n";
?>