<?php
	//Met var_dump kun je zien welke variabelen namen en waarden
	//er verstuurd worden.
	
	//var_dump($_POST);
	
	//Maak contact met de mysql-server.
	$con = mysql_connect("localhost", "root", "", am1b);
	$user = $_SESSION['accuser'];
	//Selecteer een database op de mysql-server
	mysql_select_db("am1b", $db) or die("Database niet gevonden");
	if (!isset ($_POST['firstname']))
	{ 
	mysql_query($con,"UPDATE users SET firstname='$_POST['firstname']' WHERE user_name='$user'");
	}
		if (!isset ($_POST['infix']))
	{ 
	mysql_query($con,"UPDATE users SET infix=$_POST['infix'] WHERE user_name='$user'");
	}
		if (!isset ($_POST['surname']))
	{ 
	mysql_query($con,"UPDATE users SET surname=$_POST['surname'] WHERE user_name='$user'");
	}
		if (!isset ($_POST['street']))
	{ 
	mysql_query($con,"UPDATE users SET street=$_POST['street'] WHERE user_name='$user'");
	}
		if (!isset ($_POST['city']))
	{ 
	mysql_query($con,"UPDATE users SET city=$_POST['city'] WHERE user_name='$user'");
	}
		if (!isset ($_POST['zip_code']))
	{ 
	mysql_query($con,"UPDATE users SET postalcode=$_POST['zip_code'] WHERE user_name='$user'");
	}
		if (!isset ($_POST['birthday']))
	{ 
	mysql_query($con,"UPDATE users SET dob=$_POST['birthday'] WHERE user_name='$user'");
	}
		if (!isset ($_POST['sex']))
	{ 
	mysql_query($con,"UPDATE users SET sex=$_POST['sex'] WHERE user_name='$user'");
	}
		if (!isset ($_POST['marital_state']))
	{ 
	mysql_query($con,"UPDATE users SET marital_state=$_POST['marital_state'] WHERE user_name='$user'");
	}
		if (!isset ($_POST['marital_state']))
	{ 
	mysql_query($con,"UPDATE users SET marital_state=$_POST['marital_state'] WHERE user_name='$user'");
	}	if (!isset ($_POST['email']))
	{ 
	mysql_query($con,"UPDATE users SET email=$_POST['email'] WHERE user_name='$user'");
	}
		if (!isset ($_POST['game_type']))
	{ 
	mysql_query($con,"UPDATE users SET game_type=$_POST['game_type'] WHERE user_name='$user'");
	}
		if (!isset ($_POST['favo_game']))
	{ 
	mysql_query($con,"UPDATE users SET favo_game=$_POST['favo_game'] WHERE user_name='$user'");
	}
	echo "Uw gegevens zijn opgeslagen in de database. U wordt doorgestuurd naar
		  de vorige pagina";	
	header("refresh:4; url=register_form.php");	
?>