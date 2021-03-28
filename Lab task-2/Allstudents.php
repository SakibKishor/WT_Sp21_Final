<?php
	require_once "db_config.php";
	$uname= "";
	$pass= "";
	if ($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$uname= $_POST["uname"];
		$pass= $_POST["pass"];
		$query= "select * from user where username='$uname' and password='$pass' ";
		$result= get($query);
		
		if(count($result)>0)
		{
			session_start();
			$_SESSION["loggedin"]= $uname;
			header("Location: dashboard.php");
		}
		else
		{
			echo "Username or password is invalid";
		}
	}
?>
	
<html>
	<head></head>
	<body>
		<form action="" method="POST">
			Username: <input type="text" name ="uname">    <br>
			Password: <input type="password" name="pass"> <br>
			<input type ="submit" name= "submit" value= "login">
		</form>
	</body>
</html>

