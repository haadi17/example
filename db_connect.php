<?php
$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "skilll_ex";

//db connection
$connect = new mysqli($localhost, $username, $password, $dbname);
//check connection
if($connect->connect_error) {
	die("connection failed: " . $connect->connect_error);
}else{
	echo "Succesfully Connected";
}

?>