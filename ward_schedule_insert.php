<?php
//insert new ward data into ayubo database

//import the database connection php code
include 'config.php';


// Retrieve data from the ward form
$W_Schedule_ID = $_POST["W_Schedule_ID"];
$W_ID = $_POST["W_ID"];
$P_ID = $_POST["P_ID"];
$S_ID = $_POST["S_ID"];
$date = $_POST["date"];
$time = $_POST["time"];

$department=$_POST["department"];


//Insert Room data into database- Query 

$sql = "insert into ward_schedule( w_s_ID, ward_ID, patient_ID, Staff_ID, Date, Time, Department)  values('$W_Schedule_ID', '$P_ID', '$S_ID', '$date', '$time', '$department')";


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

