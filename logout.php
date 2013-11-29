<?php
unset ($_SESSION['accuser']);
unset ($_SESSION['position']);
echo "bezig met uit loggen...";
header("refresh:2; url=index.php");
?>