<!DOCTYPE html>
<html>
<head>
	<title>Patient Invoice Table</title>
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
			font-family: 'gill Sans', 'Gill Sans Nt', 'Calibri';
		}
		td {
			background-color: #E4f5d4;
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
<body style="background-image: url('bg.png'); background-attachment: fixed; background-size: 100% 100%;">

<?php 
include 'config.php';
?>

<h1 style="color: #ffffff">Patient Invoice Table</h1>

<?php
$sql = "SELECT * FROM invoice";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
?>

<table border="1">
	<tr style="color: #ffffff">
		<th>Invoice Number</th>
		<th>Patient Number</th>
		<th>Staff Name</th>
		<th>Bill Amount</th>
		<th>Date</th>
		<th>Time</th>
		<th>Update</th>
		<th>Delete</th>
		<th>View</th>
	</tr>

	<?php
	$i = 0;
	while ($row = mysqli_fetch_array($result)) {
	?>
	<tr>
		<td><?php echo $row["Invoice_ID"]; ?></td>
		<td><?php echo $row["P_ID"]; ?></td>
<td><?php echo $row["S_ID"]; ?></td>
		<td><?php echo $row["bill_amount"]; ?></td>
		
		<td><?php echo $row["Date"]; ?></td>
		<td><?php echo $row["Time"]; ?></td>
		



		<td>
			<!-- Re-Correct Update -->
			<a href="invoice_update.php?Invoice_no=<?php echo $row["Invoice_ID"]; ?>">Update</a>
		</td>
		<td>
			<a href="invoice_delete.php?Invoice_no=<?php echo $row["Invoice_ID"]; ?>">Delete</a>
		</td>
		<td>
			<a href="invoice_view.php?Invoice_no=<?php echo $row["Invoice_ID"]; ?>">View</a>
		</td>
	</tr>
	<?php
		$i++;
	}
	?>
</table>

<?php
} else {
	echo "There is no record";
}
?>

</body>
</html>
