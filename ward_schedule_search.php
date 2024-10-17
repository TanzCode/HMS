<!--OT schedile search-->
<!Doctype html>
<html>
<head>
<title> Form Example PHP </title>
<style type="text/css">
	table{
		margin: 0 auto;
		font-size: large;
		border:1px solid black;
	}
	h1{
		text-align: center;
		color: #006677;
		font-size: xx-large;
		font-family: 'gill Sans', 'Gill Sans Nt', 'Calibri';


	}
	td{
		background-color: #E4f5d4;
		border:1px solid black;

	}
	th,td{
		font-weight: bold;
		border:1px solid black;
		padding:10px;
		text-align: center;

	}
	td{
		font-weight: lighter;

	}
	
</style>
</head>
<body>
<?php 
include 'config.php';
?>

<h1>Ward Schedule Records</h1>

<?php
$sql= "select * from ward_schedule ";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result)>0){


?>

<table border="1">
	<tr>
		<th>ward Schedule ID</th>
		<th>ward ID</th>
		<th>Patient ID</th>
		<th>Staff ID</th>
		<th>Date</th>
		<th>Time</th>
		<th>Department</th>
		<th>Update</th>
		<th>Delete</th>
		

	</tr>

	<?php
	$i=0;
	while($row=mysqli_fetch_array($result)){
		


	?>
	<tr>
		<td><?php echo $row["w_s_ID"];?></td>
		<td><?php echo $row["ward_ID"];?></td>
		<td><?php echo $row["patient_ID"];?></td>
		<td><?php echo $row["Staff_ID"];?></td>
		<td><?php echo $row["Date"];?></td>
		<td><?php echo $row["Time"];?></td>
		<td><?php echo $row["Department"];?></td>
		
		

		<td>
			<!--Re-Correct Update-->
			<a href="ward_schedule_update.php?W_Schedule_ID=<?php echo $row["w_s_ID"];?>">Update</a>
		</td>
		<td>
			<a href="ward_schedule_delete.php?W_Schedule_ID=<?php echo $row["w_s_ID"];?>">Delete</a>
		</td>
	</tr>
	<?php
		$i++;
		}
	?>
</table>



<?php
	}

else{
		echo "There is no any record";
	}
?>


<?php 
?>

</body>
</html>