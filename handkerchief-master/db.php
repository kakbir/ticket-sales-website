<?php

$host = "srvc134.turhost.com";
$user = "kakbirco_pan";
$pass = "616161";
$db = "kakbirco_loginsystem";

$conn = mysqli_connect($host, $user, $pass, $db);

if(mysqli_connect_errno($conn))
{
	echo "Error";
}
?>