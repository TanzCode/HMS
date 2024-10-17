<?php 
include_once 'config.php';
$sql = "delete from staff_schedule where S_S_ID='".$_GET["S_Schedule_ID"]."'"; 

if (mysqli_query($conn,$sql)){
	echo"<br> Record delete successfully";
}
else
{
echo"<br> Record delete error: ".mysql_error($conn);	
}
mysqli_close($conn);
?>