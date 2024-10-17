<?php
include 'config.php';

$S_ID = $_POST["S_ID"];
$Fname = $_POST["Fname"];
$Lname = $_POST["Lname"];
$NIC = $_POST["NIC"];
$Gender=$_POST["Gender"];
$Email = $_POST["Email"];
$phone = $_POST["phone"];
$address = $_POST["address"];
$Department = $_POST["Department"];
$job = $_POST["job"];

//Insert Staff data into database- Query 

$sql = "insert into Staff( Staff_ID, F_Name, L_Name, NIC_no, Gender, Email, Phone, Address, Department, job_title)  values('$S_ID', '$Fname', '$Lname', '$NIC', '$Gender', '$Email', '$phone', '$address', '$Department', '$job')";

if(mysqli_query($conn, $sql)){
	echo "<h3>data stored in the database successfully.</h3>";

}
else
{
	echo( "ERROR : Hush! SORRY $sql. ".mysqli_error($conn));

}
mysqli_close($conn);

?>

