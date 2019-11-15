<?php

$servername = "161.117.122.252";
$dbusername = "p5_7";
$dbpassword = "Q2Zp6mlCeq";
$dbname = "p5_7";

$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

if (!$conn){
	die("Connection Failed: " .mysqli_connect_error());
}
echo "Connected successfully";

?>