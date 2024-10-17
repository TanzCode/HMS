<?php 
include_once 'config.php';
$sql = "delete from patient_history where Patient_ID='".$_GET["P_ID"]."'"; 

if (mysqli_query($conn,$sql)){
	echo"<br> Record delete successfully";
}
else
{
echo"<br> Record delete error: ".mysql_error($conn);	
}
mysqli_close($conn);
?>
