<?php
	header("WWW-Authenticate: Basic realm='Espace membre'");
	if ($_SERVER['PHP_AUTH_USER'] != 'zaz' || $_SERVER['PHP_AUTH_PW'] != 'jaimelespetitsponeys')
	{
		header('HTTP/1.0 401 Unauthorized');
		echo "<html><body>Cette zone est accessible uniquement aux membres du site</body></html>\n";
	}
	else
	{
		$content = file_get_contents("../img/42.png");
		$cipher = base64_encode($content);
	echo "<html><body>\nBonjour Zaz<br/ >\n<img src=\"data:image/png;base64,$cipher\"/>\n</body></html>";
	}
?>
