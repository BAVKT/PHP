<?php
function ft_is_sort($tab)
{
	if (empty($tab))
		return (false);
	$i = 0;
	$tab2 = sort($tab);
	foreach ($tab as $elem)
	{
		echo $elem."\n";
		echo $tab2[$i]."\n";
		if (strcmp($elem, $tab2[$i]))
			return (false);
		$i++;
	}
	return (true);
}
?>