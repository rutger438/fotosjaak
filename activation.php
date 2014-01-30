<?php
require_once("class/LoginClass.php");
 if(LoginClass::check_if_emailaddress_exists($_GET['email'], $_GET['password']))
 {
 	?>
 	<p>
 		Welcome text
 </p>
	
<?php
 }
 else
 {	
	echo "U heeft geen rechten voor deze pagina!";
	
 }
?>