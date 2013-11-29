<?php
if (!isset($_SESSION['position']))
{
echo "niet ingelogd!";
}
if (isset($_SESSION['position']))
{
if ($_SESSION['position'] != "admin")
{
echo "geen bevoegdheid";
}
if ($_SESSION['position'] == "admin")
{
echo "yup";
}
}
?>