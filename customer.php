<div id='accgeg'>
<?php
if (!isset($_SESSION['position']))
{
echo "niet ingelogd!";
}
if (isset($_SESSION['position']))
{
if (($_SESSION['position'] != "customer") && ($_SESSION['position'] != "admin"))
{
echo "geen bevoegdheid";
}
if (($_SESSION['position'] == "customer") || ($_SESSION['position'] == "customer"))
{
	$user = $_SESSION['accuser'];
	mysql_connect("localhost", "root", "", "am1b") or die("1");
	mysql_query("use am1b") or die ("2");
	$result = mysql_query("SELECT * FROM users WHERE user_name = '$user'") or die ("3");
			while ($row = mysql_fetch_array($result)) {
			$naam = $row['firstname'];
			$tussenvoegsel = $row['infix'];
			$achternaam = $row['surname'];
			$stad = $row['city'];
			$postcode = $row['postalcode'];
			$straat = $row['street'];
			$huisnummer = $row['house_number'];
			$geboortedatum = $row['dob'];
			$geslacht = $row['sex'];
			$email = $row['email'];
			$username = $row['user_name'];
			$burgerlijkestaat = $row['marital_status'];
			$game_type = $row['game_type'];
			$favo_game = $row['favo_game'];
			}
			if ($burgerlijkestaat == 0)
			{
			$burgerlijkestaat = "Getrouwd";
			}
			if ($burgerlijkestaat == 1)
			{
			$burgerlijkestaat = "Niet getrouwd";
			}
			if ($geslacht == 0)
			{
			$geslacht = "man";
			}
			if ($geslacht == 1)
			{
			$geslacht = "vrouw";
			}
	echo "Account gegevens: <br><br>";
	echo "Voornaam: $naam<br>";
	echo "Tussenvoegsel: $tussenvoegsel<br>";
	echo "Achternaam: $achternaam<br>";
	echo "Stad/dorp: $stad<br>";
	echo "Postcode: $postcode<br>";
	echo "Straat: $straat<br>";
	echo "Huisnummer: $huisnummer<br>";
	echo "Geboorte datum: $geboortedatum<br>";
	echo "Geslacht: $geslacht<br>";
	echo "Email: $email<br>";
	echo "Gebruikers naam: $username<br>";
	echo "Favorite genre: $game_type<br>";
	echo "Favorite game: $favo_game<br>";
	echo "Burgerlijke staat: $burgerlijkestaat<br><br>";
}
}
?>
</div>