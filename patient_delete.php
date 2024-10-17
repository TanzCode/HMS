<?php 
//Include the connection with database
include_once 'config.php';

// SQL query to delete a patient record based on the provided patient_ID in the URL parameter
$sql = "delete from patient where patient_ID='".$_GET["P_ID"]."'"; 
// Execute the SQL query
if (mysqli_query($conn,$sql)){
	// If the query is successful, display a success message
	echo"<br> Record delete successfully";
}
else
{
	// If there is an error during the query execution, display an error message
	echo"<br> Record delete error: ".mysql_error($conn);	
}
// close the database connection
mysqli_close($conn);
?>