<?php
session_start();
if(isset($_SESSION['accuser']) && ($_SESSION['accuser'] != ""))
{
echo "Welkom <br>";
echo $_SESSION['accuser'];
$position = $_SESSION['position'];
echo "<div id='accbuttons'>
	<li>
		<button onClick=\"window.location='./index.php?content=logout'\" align='bottom'>log uit</button>
		<button onClick=\"window.location='./index.php?content=$position'\" align='bottom'>Account</button>
	</li>
	</div>";
}
else
{
$username = "niet ingelogd";
echo "$username";
echo "<div id='accbuttons'>
	<li>
		<button onClick=\"window.location='./index.php?content=login'\">log in</button>
	</li>
	<li>
		<button onClick=\"window.location='./index.php?content=register_form'\">registreren</button>
	</li>
	</div>";
}
?>