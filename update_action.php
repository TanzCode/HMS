<?php
include_once 'config.php';

$result = mysqli_query($conn, "select * from patient where patient_ID='".$_GET['P_ID'] ."'");
$row=mysqli_fetch_array($result);

if (isset($_POST['update_patient'])) {
$P_ID = $_POST["P_ID"];


$Fname = $_POST["Fname"];
$Lname = $_POST["Lname"];
$DOB = $_POST["DOB"];
$Gender=$_POST["Gender"];
$NIC = $_POST["NIC"];
$phone = $_POST["phone"];
$address = $_POST["address"];
$Username = $_POST["Username"];
$pwd = $_POST["pwd"];

$sql = "update patient set First_Name = '$Fname', Last_Name = '$Lname', DOB ='$DOB' , Gender='$Gender', NIC_No ='$NIC' , Phone_Number ='$phone', Address = '$address', User_Name = '$Username', Password = '$pwd' where patient_ID='$P_ID' ";

if(mysqli_query($conn, $sql)){
  echo "<h3>Patient details Updated. </h3>";

}
else
{
  echo( "ERROR : Hush! SORRY $sql. ".mysqli_error($conn));

}
mysqli_close($conn);
}


//Insert Patient data into database- Query 


 

?>


