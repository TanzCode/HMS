<!--staff schedile search-->
<!Doctype html>
<html>
<head>
<title> staff schedule </title>
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

<h1>Staff Schedule Records</h1>

<?php
$sql= "select * from staff_schedule ";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result)>0){


?>

<table border="1">
	<tr>
		<th>Staff Schedule ID</th>
		<th>Staff ID</th>
		<th>Date</th>
		<th>Start Time</th>
		<th>End Time</th>
		<th>Department</th>
		<th>Special Note</th>
		<th>Update</th>
		<th>Delete</th>
		

	</tr>

	<?php
	$i=0;
	while($row=mysqli_fetch_array($result)){
		


	?>
	<tr>
		<td><?php echo $row["S_S_ID"];?></td>
		<td><?php echo $row["staff_ID"];?></td>
		<td><?php echo $row["Date"];?></td>
		<td><?php echo $row["S_time"];?></td>
		<td><?php echo $row["E_time"];?></td>
		<td><?php echo $row["Department"];?></td>
		<td><?php echo $row["Special_Note"];?></td>
		
		

		<td>
			<!--Re-Correct Update-->
			<a href="staff_schedule_update.php?S_Schedule_ID=<?php echo $row["S_S_ID"];?>">Update</a>
		</td>
		<td>
			<a href="Staff_schedule_delete.php?S_Schedule_ID=<?php echo $row["S_S_ID"];?>">Delete</a>
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