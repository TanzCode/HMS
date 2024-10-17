<!Doctype html>
<html>
<head>
<title> staff  </title>
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

<h1>Staff table</h1>

<?php
$sql= "select * from staff ";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result)>0){


?>

<table border="1">
	<tr>
		<th>Staff_ID</th>
		<th>First_Name</th>
		<th>Last_Name</th>
		<th>NIC_No</th>
		<th>Gender</th>
		<th>Email Address</th>
		<th>Phone_Number</th>
		<th>Address</th>
		<th>Department</th>
		<th>Job Title</th>
		<th>Update</th>
		<th>Delete</th>

	</tr>

	<?php
	$i=0;
	while($row=mysqli_fetch_array($result)){
		


	?>
	<tr>
		<td><?php echo $row["Staff_ID"];?></td>
		<td><?php echo $row["F_Name"];?></td>
		<td><?php echo $row["L_Name"];?></td>
		<td><?php echo $row["NIC_no"];?></td>
		<td><?php echo $row["Gender"];?></td>
		<td><?php echo $row["Email"];?></td>
		<td><?php echo $row["Phone"];?></td>
		<td><?php echo $row["Address"];?></td>
		<td><?php echo $row["Department"];?></td>
		<td><?php echo $row["job_title"];?></td>

		<td>
			<a href="Staff_update.php?S_ID=<?php echo $row["Staff_ID"];?>">Update</a>
		</td>
		<td>
			<a href="Staff_delete.php?S_ID=<?php echo $row["Staff_ID"];?>">Delete</a>
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