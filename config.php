<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "arogya";

//create connection
$conn = new mysqli($servername,$username,$password,$database);

//check connection
if(!$conn) {
	die ("Connection Failed".$conn->connect_error);
}

echo "Connected Successfully";
?>