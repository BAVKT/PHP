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

function calc($a, $b, $o)
{
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
	return ($res);
}

function errorz($nb)
{
	if ($nb == 1)
		echo "Incorrect Parameters\n";
	else if ($nb == 2)
		echo "Syntax Error\n";
	exit (-1);
}

if ($argc != 2)
	errorz(1);
$i = -1;
$line = $argv[1];
$line = str_replace(' ', '', $line);
while ($line[++$i])
	if (ctype_alpha($line[$i]) || (!is_numeric($line[$i]) && !is_oper($line[$i])))
		errorz(2);
$i = 0;
$nb1 = "";
$nb2 = "";
while ($line[$i])
{
	while (is_numeric($line[$i]))
		$nb1 .= $line[$i++];
	if (!($op = is_oper($line[$i])))
		errorz(2);
	$i++;
	while (is_numeric($line[$i]))
		$nb2 .= $line[$i++];
}
if ($nb2 == 0 || ($nb2 == 0 || $nb1 == 0) && ($op == 5 || $op == 4))
	;
else
	echo calc($nb1, $nb2, $op)."\n";
?>
