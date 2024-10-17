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
<body style="background-image: url('bg.png');  background-attachment: fixed;
  background-size: 100% 100%;">
<?php 
include 'config.php';
?>

<h1 style="color: #ffffff">Patient history table</h1>

<?php
$sql= "select * from patient_history ";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result)>0){


?>

<table border="1">
	<tr style="color: #ffffff">
		<th>Patient history ID</th>
		<th>patient ID</th>
		<th>Ailment</th>
		<th>Report</th>
		<th>Prescription</th>
		<th>Discription</th>
		<th>Date</th>
		<th>Time</th>
		<th>Update</th>
		<th>Delete</th>
		<th>View</th>

	</tr>

	<?php
	$i=0;
	while($row=mysqli_fetch_array($result)){
		


	?>
	<tr>
		<td><?php echo $row["Patient_history_ID"];?></td>
		<td><?php echo $row["Patient_ID"];?></td>
		<td><?php echo $row["Ailment"];?></td>
		<td><?php echo $row["Report_type"];?></td>
		<td><?php echo $row["Prescription"];?></td>
		<td><?php echo $row["Description"];?></td>
		<td><?php echo $row["Date"];?></td>
		<td><?php echo $row["Time"];?></td>
		

		<td>
			<!--Re-Correct Update-->
			<a href="patient_update.php?P_H_ID=<?php echo $row["Patient_history_ID"];?>">Update</a>
		</td>
		<td>
			<a href="patient_history_delete.php?P_H_ID=<?php echo $row["Patient_history_ID"];?>">Delete</a>
		</td>
		<td>
			<a href="Patient_personal.php?P_H_ID=<?php echo $row["Patient_history_ID"];?>">View</a>
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