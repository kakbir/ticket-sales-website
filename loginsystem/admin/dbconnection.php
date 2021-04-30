<?php
define('DB_SERVER','srvc134.turhost.com');
define('DB_USER','kakbirco_pan');
define('DB_PASS' ,'616161');
define('DB_NAME', 'kakbirco_loginsystem');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }

?>

