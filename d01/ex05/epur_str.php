#!/usr/bin/php
<?php
$i = 0;
if ($argc != 2)
	exit (-1);
$line = trim($argv[1]);
while ($line[$i])
{
	if ($line[$i] === ' ' && $line[$i + 1] === ' ')
		$line[$i] = '';
	$i++;
}
echo $line."\n";
?>