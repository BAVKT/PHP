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
?>
