<?php
//insert new staff scedule data into ayubo database

//import the database connection php code
include 'config.php';


// Retrieve data from the room form
$S_Schedule_ID = $_POST["S_Schedule_ID"];
$S_ID = $_POST["S_ID"];
$date = $_POST["date"];
$Stime = $_POST["Stime"];
$Etime = $_POST["Etime"];
$department=$_POST["department"];
$note=$_POST["note"];


//Insert ward scedule data into database- Query 

$sql = "insert into staff_schedule( S_S_ID, staff_ID, Date, S_time,E_time, Department,Special_Note)  values('$S_Schedule_ID', '$S_ID', '$date','$Stime','$Etime', '$department','$note'  )";


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

