<?php
//insert new room data into ayubo database

//import the database connection php code
include 'config.php';


// Retrieve data from the room form
$OT_Schedule_ID = $_POST["OT_Schedule_ID"];
$OT_ID = $_POST["OT_ID"];
$S_ID = $_POST["S_ID"];
$P_ID = $_POST["P_ID"];
$date = $_POST["date"];
$time = $_POST["time"];
$department=$_POST["department"];


//Insert Operation T data into database- Query 

$sql = "insert into ot_schedule( OT_Schedule_ID , OT_ID, Staff_ID, patient_ID, Date, Time, Department)  values('$OT_Schedule_ID', '$OT_ID', '$S_ID','$P_ID','$date', '$time', '$department')";


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

