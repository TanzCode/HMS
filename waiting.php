<?php
//insert new patient waiting data into ayubo database

//import the database connection php code
include 'config.php';

// Retrieve data from the ward form
$waiting_ID = $_POST["waiting_ID"];
$P_ID = $_POST["P_ID"];
$S_ID=$_POST["S_ID"];
$reason=$_POST["Reason"];
$date = $_POST["date"];
$time=$_POST["time"];


//Insert waiting list data into database- Query 

$sql = "insert into waiting_List(waiting_ID, Patient_ID ,	Staff_ID, 	Reason ,	Date ,	Time)  values('$waiting_ID', '$P_ID','$S_ID','$reason', '$date', '$time')";

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

