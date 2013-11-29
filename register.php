<?php
	//Met var_dump kun je zien welke variabelen namen en waarden
	//er verstuurd worden.
	
	//var_dump($_POST);
	
	//Maak contact met de mysql-server.
	$db = mysql_connect("localhost", "root", "") 
			or die("Er is geen contact met de mysql-server");
	
	//Selecteer een database op de mysql-server
	mysql_select_db("am1b", $db) or die("Database niet gevonden");
	
	//Een sql opdracht die een record naar de tabel users wegschrijft
	$sql = "INSERT INTO `users` (
								 `firstname` ,
								 `infix`,
								 `surname`,
								 `city`,
								 `postalcode`,
								 `street`,
								 `house_number`,
								 `dob`,
								 `sex`,
								 `email`,
								 `user_name`,
								 `password`,
								 `game_type`,
								 `favo_game`,
								 `marital_status`)
						 VALUES (
								 '".$_POST['firstname']."',
								 '".$_POST['infix']."',
								 '".$_POST['surname']."',
								 '".$_POST['city']."',
								 '".$_POST['zip_code']."',
								 '".$_POST['street']."',
								 '".$_POST['house_number']."',
								 '".$_POST['birthday']."',
								 '".$_POST['sex']."',
								 '".$_POST['email']."',
								 '".$_POST['user_name']."',
								 '".$_POST['password']."',
								 '".$_POST['game_type']."',
								 '".$_POST['favo_game']."',
								 '".$_POST['marital_status']."')";
	//echo $sql;
								 
	mysql_query($sql, $db) or die("nope :P");
	
	echo "Uw gegevens zijn opgeslagen in de database. U wordt doorgestuurd naar
		  de vorige pagina";	
	header("refresh:4; url=index.php");	
?>