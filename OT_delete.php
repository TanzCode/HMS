<?php 
include_once 'config.php';
$sql = "delete from ot where OT_ID='".$_GET["OT_ID"]."'"; 

if (mysqli_query($conn,$sql)){
	echo"<br> Record delete successfully";
}
else
{
echo"<br> Record delete error: ".mysql_error($conn);	
}
mysqli_close($conn);
?>