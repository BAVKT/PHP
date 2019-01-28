<?php
if ($_GET['action'] == "set")
{
	if ($_GET['name'])
		setcookie('plat', $_GET['value'], time() + 3600);
}
else if ($_GET['action'] == "get")
{
	if ($_COOKIE)
		echo $_COOKIE['plat'];
}
else if ($_GET['action'] == "del")
	setcookie($_GET['name'], NULL);
?>