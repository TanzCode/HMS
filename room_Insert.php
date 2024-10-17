<?php
//insert new room data into ayubo database

//import the database connection php code
include 'config.php';


// Retrieve data from the room form
$R_ID = $_POST["R_ID"];
$Name = $_POST["Name"];
$TP = $_POST["TP"];
$facility = $_POST["facility"];
$department=$_POST["department"];


//Insert Room data into database- Query 

$sql = "insert into room( room_ID, Name, TP, facility, Department)  values('$R_ID', '$Name', '$TP', '$facility', '$department')";


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

