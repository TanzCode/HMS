<?php
//insert new Ward scedule data into ayubo database

//import the database connection php code
include 'config.php';


// Retrieve data from the room form
$R_Schedule_ID = $_POST["R_Schedule_ID"];
$R_ID = $_POST["R_ID"];
$date = $_POST["date"];
$time = $_POST["time"];
$S_ID = $_POST["S_ID"];
$department=$_POST["department"];


//Insert room scedule data into database- Query 

$sql = "insert into room_schedule( room_schedule_ID, room_ID, Date,Time, Staff_ID, Department)  values( '$R_Schedule_ID', '$R_ID','$date','$time', '$S_ID', '$department')";


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

