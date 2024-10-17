<?php
//insert new room data into ayubo database

//import the database connection php code
include 'config.php';


// Retrieve data from the operation theater(OT) form
$OT_ID = $_POST["OT_ID"];
$Name = $_POST["Name"];
$facility = $_POST["facility"];
$department=$_POST["department"];


//Insert operation theater(OT) data into database- Query 

$sql = "insert into ot(OT_ID, Name, facility, department)  values('$OT_ID', '$Name', '$facility', '$department')";


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

