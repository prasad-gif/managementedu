<?php

$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "phpproject01";


$con = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

if (!$con) {
	die("connection failed: " .mysqli_connect_error());
}
?>