<?php 
include_once 'config.php';
$sql = "delete from room where room_ID='".$_GET["R_ID"]."'"; 

if (mysqli_query($conn,$sql)){
	echo"<br> Record delete successfully";
}
else
{
echo"<br> Record delete error: ".mysql_error($conn);	
}
mysqli_close($conn);
?>