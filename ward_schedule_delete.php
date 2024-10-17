<?php 
include_once 'config.php';
$sql = "delete from ward_schedule where w_s_ID='".$_GET["W_Schedule_ID"]."'"; 

if (mysqli_query($conn,$sql)){
	echo"<br> Record delete successfully";
}
else
{
echo"<br> Record delete error: ".mysql_error($conn);	
}
mysqli_close($conn);
?>