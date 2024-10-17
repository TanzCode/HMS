<?php
include 'config.php';


$P_H_ID=$_POST["P_H_ID"];
$P_ID = $_POST["P_ID"];
$Ailment = $_POST["Ailment"];
$date = $_POST["date"];
$time = $_POST["time"];
$Report = $_POST["Report"];
$Prescription=$_POST["Prescription"];
$Discription = $_POST["Discription"];


//Insert Patient data into database- Query 

$sql = "insert into patient_history( Patient_history_ID, patient_ID, Ailment, Date, Time, Report_type, Prescription, Description)  values('$P_H_ID','$P_ID', '$Ailment', '$date', '$time', '$Report', '$Prescription', '$Discription')";

if(mysqli_query($conn, $sql)){
	echo "<h3>data stored in the database successfully.</h3>";

}
else
{
	echo( "ERROR : Hush! SORRY $sql. ".mysqli_error($conn));

}
mysqli_close($conn);

?>

