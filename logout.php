<?php
require_once("class/SessionClass");
$session->logout();
header("location:index.php?content=homepage");
?>