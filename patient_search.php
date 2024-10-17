<!DOCTYPE html>
<html>
<head>
	<title>Patient details view</title>
	<!--Make the CSS code-->
	<style type="text/css">
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
		}

		h1 {
			text-align: center;
			color: #006677;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans Nt', 'Calibri';
		}

		td {
			background-color: #E4F5D4;
			border: 1px solid black;
		}

		th, td {
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}

		td {
			font-weight: lighter;
		}
	</style>
</head>
<body>
<?php 
//include the connection php
include 'config.php';
?>

<h1>Patient table</h1>

<?php
// Retrieve patient records from the database
$sql = "SELECT * FROM patient";
$result = mysqli_query($conn, $sql);

// Check if there are any rows returned from the query
if (mysqli_num_rows($result) > 0) {
?>

<table border="1">
	<tr>
		<th>patient_ID</th>
		<th>First_Name</th>
		<th>Last_Name</th>
		<th>DOB</th>
		<th>Gender</th>
		<th>NIC_No</th>
		<th>Phone_Number</th>
		<th>Address</th>
		<th>Username</th>
		<th>password</th>
		<th>Update</th>
		<th>Delete</th>
	</tr>

	<?php
	// Loop through each row of the result set
	$i = 0;
	while ($row = mysqli_fetch_array($result)) {
	?>
	<tr>
		<td><?php echo $row["patient_ID"]; ?></td>
		<td><?php echo $row["First_Name"]; ?></td>
		<td><?php echo $row["Last_Name"]; ?></td>
		<td><?php echo $row["DOB"]; ?></td>
		<td><?php echo $row["Gender"]; ?></td>
		<td><?php echo $row["NIC_No"]; ?></td>
		<td><?php echo $row["Phone_Number"]; ?></td>
		<td><?php echo $row["Address"]; ?></td>
		<td><?php echo $row["User_Name"]; ?></td>
		<td><?php echo $row["Password"]; ?></td>
		<td>
			<!-- Link for updating a patient record -->
			<a href="patient_update.php?P_ID=<?php echo $row["patient_ID"]; ?>">Update</a>
		</td>
		<td>
			<!-- Link for deleting a patient record -->
			<a href="patient_delete.php?P_ID=<?php echo $row["patient_ID"]; ?>">Delete</a>
		</td>
	</tr>
	<?php
		//increace i by one
		$i++;
	}
	?>
</table>

<?php
} else {
	// If no records found, display a message
	echo "There is no record.";
}
?>

</body>
</html>
