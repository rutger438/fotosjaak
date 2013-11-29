<?php
	if (isset ($_GET['language']))
	{
	if ($_GET['language'] == "Eng")
		include("faqEN.php");
	}
	else
	{
		include("faqNL.php");
	}
?>