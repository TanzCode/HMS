<?php
//insert new ward data into ayubo database

//import the database connection php code
include 'config.php';


// Retrieve data from the ward form
$w_ID = $_POST["w_ID"];
$Name = $_POST["Name"];
$TP=$_POST["TP"]
$N_Bed=$_POST["N_Bed"]
$facility = $_POST["facility"];
$department=$_POST["department"];


//Insert ward data into database- Query 

$sql = "insert into ward(ward_ID, Name, phone,Bed_no, facility, department)  values('$w_ID', '$Name','$TP','$N_Bed', '$facility', '$department')";


// Execute the query and check if it was successful
if(mysqli_query($conn, $sql)){
	echo "<h3>data stored in the database successfully.</h3>";

}
else
{
	echo( "ERROR : Hush! SORRY $sql. ".mysqli_error($conn));

}
// Close the database connection
mysqli_close($conn);

?>

