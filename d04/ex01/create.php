<?php
	session_start();
	if ($_POST['submit'] == "OK")
	{
		if (isset($_POST['login']))
			$_POST['login'] = $_POST['login'];
		else
		{
			$_POST['login'] = "";
			echo "ERROR\n";
			exit (0);
		}
		if (isset($_POST['passwd']))
		{
			$_POST['passwd'] = $_POST['passwd'];
			echo "OK\n";
		}
		else
		{
			$_POST['passwd'] = "";
			echo "ERROR\n";
			exit (0);
		}
	}
	if (file_exists("private"))
	{
		$tab = unserialize(file_get_contents("private/passwd"));
		foreach ($tab as $key)
		{
			if ($key == $_POST['login'])
			{
				echo "ERROR\n";
				exit (0);
			}
		}
		$tab[$_POST['login']] = hash($_POST['passwd']);
	}
	else
	{
		mkdir("private", 700);
		$tab = array($_POST['login'] => hash("sha512", $_POST['passwd']));
		file_put_contents("private/passwd", serialize($tab));
	}
?>