#!/usr/bin/php
<?php
$i = 0;
if ($argc == 1)
	exit (-1);
$line = trim($argv[1]);
while ($line[$i])
{
	if ($line[$i] === ' ' && $line[$i + 1] === ' ')
		$line[$i] = '';
	else if ($line[$i] === '\t')
		$line[$i] = ' ';
	$i++;
}
echo $line."\n";
?>
