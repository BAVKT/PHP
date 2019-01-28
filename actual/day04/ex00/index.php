<?php
	session_start();
	if ($_GET['submit'] == "OK")
	{
		if (isset($_GET['login']))
			$_SESSION['login'] = $_GET['login'];
		else
			$_SESSION['login'] = "";
		if (isset($_GET['passwd']))
			$_SESSION['passwd'] = $_GET['passwd'];
		else
			$_SESSION['passwd'] = "";
	}
?>
<!DOCTYPE html>
<html>
	<body>
		<form action="index.php" method="get">
		  Login:
		  <br>
		  <input type="text" name="login" value="<?php echo $_SESSION['login']?>">
		  <br>
		  Password:
		  <br>
		  <input type="password" name="passwd" value="<?php echo $_SESSION['passwd']?>">
		  <br>
		  <br>
		  <input type="submit" value="OK" name="submit">
		</form>
	</body>
</html>