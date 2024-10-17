<?php 
include_once 'config.php';
$sql = "delete from ot_schedule where OT_Schedule_ID='".$_GET["OT_Schedule_ID"]."'"; 

if (mysqli_query($conn,$sql)){
	echo"<br> Record delete successfully";
}
else
{
echo"<br> Record delete error: ".mysql_error($conn);	
}
mysqli_close($conn);
?>