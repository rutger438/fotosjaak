<?php
$passwordcheck = NULL;
$positioncheck = NULL;
mysql_connect("localhost", "root", "", "am1b") or die("1");
	$user = mysql_real_escape_string($_POST['username']);
	$pass = mysql_real_escape_string($_POST['password']);
	if ($user=="" || $pass=="")
	{
			 echo "Gebruikersnaam of wachtwoord is leeg.";
		 header("refresh:4; url=index.php?content=login");
		 exit();
	}
	mysql_query("use am1b") or die ("2");
	$result = mysql_query("SELECT password, position FROM users WHERE user_name = '$user'") or die ("3");
		while ($row = mysql_fetch_array($result)) {
			$passwordcheck = $row['password'];
			$positioncheck = $row['position'];
			}
		if ($pass==$passwordcheck)
		{
		echo "bezig met inloggen...";
		$_SESSION['accuser'] = $user;
		$_SESSION['position'] = $positioncheck;
		header("refresh:2; url=index.php?content=$positioncheck");
		}
		else
		{
		 echo "Gebruikersnaam of wachtwoord is ongeldig.";
		 header("refresh:4; url=index.php?content=login");
		}
?>