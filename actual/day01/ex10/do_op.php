#!/usr/bin/php
<?php

function is_oper($o)
{
	$o = trim($o);
	if(!strcmp("+", $o))
		return (1);
	else if (!strcmp("-", $o))
		return (2);
	else if (!strcmp("*", $o))
		return (3);
	else if (!strcmp("/", $o))
		return (4);
	else if (!strcmp("%", $o))
		return (5);
	return (0);
}

if ($argc != 4 || !is_numeric($argv[1]) ||
	!is_numeric($argv[3]) || !is_oper($argv[2]))
{
	echo "Incorrect Parameters";
	exit (-1);
}

$o = is_oper($argv[2]);
$a = intval($argv[1]);
$b = intval($argv[3]);
if ($a == 0 || ($a == 0 || $b == 0) && ($o == 5 || $o == 4))
	exit (-1);
if ($o == 1)
	$res = $a + $b;
else if ($o == 2)
	$res = $a - $b;
else if ($o == 3)
	$res = $a * $b;
else if ($o == 4)
	$res = $a / $b;
else if ($o == 5)
	$res = $a % $b;
echo $res."\n";
?>