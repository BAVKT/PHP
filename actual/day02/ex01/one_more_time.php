#!/usr/bin/php
<?php
if ($argc < 2)
	exit (-1);
if (preg_match("/[A-Za-z][a-z]{4,7}[ ][0-9]{1,2}[ ][A-Za-z][a-z]{2,8}[ ][0-9]{4}[ ][0-9]{2}:[0-9]{2}:[0-9]{2}/", $argv[1]))
{
	$tab = explode(' ', $argv[1]);
	print_r($tab);
	// echo mktime()."\n";
}
else
	echo "Wrong Format";

?>