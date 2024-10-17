<!--Room schedule search-->
<!DOCTYPE html>
<html>
<head>
<title>Check Room Availability</title>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale="1">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/bootstrap.min.js"></script>
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
<body style="background-image: url('bg.png');  background-attachment: fixed;
  background-size: 100% 100%;">
<?php 
include 'config.php';
?>
<div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-lg-7 col-md-6 col-sm-6">
        <div class="card shadow">
          <div class="card-title text-center border-bottom" style="background-color: #469597; color:#ffffff">
            <h1>Check Room Availability</h1>
          </div>
          <div class="card-body">



<form method="POST" action="">
	<div class="mb-3">
	<label for="date">Enter Date:</label>
	<input type="date" name="date" id="date" required>
	</div>

<div class="mb-3">
	<label for="date">Enter Room ID:</label>
	<input type="text" name="R_ID" id="R_ID" required>
</div>
	<input type="submit" value="Check Availability">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$date = $_POST['date'];
	$sql = "SELECT * FROM room_schedule WHERE Date = '$date' and room_ID='$R_ID' ";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
?>

<table border="1">
	<tr>
		<th>Room Schedule ID</th>
		<th>Room ID</th>
		<th>Date</th>
		<th>Time</th>
		<th>Staff ID</th>
		<th>Department</th>
		<th>Update</th>
		<th>Delete</th>
	</tr>

	<?php
		while ($row = mysqli_fetch_array($result)) {
	?>
	<tr>
		<td><?php echo $row["room_schedule_ID"]; ?></td>
		<td><?php echo $row["room_ID"]; ?></td>
		<td><?php echo $row["Date"]; ?></td>
		<td><?php echo $row["Time"]; ?></td>
		<td><?php echo $row["Staff_ID"]; ?></td>
		<td><?php echo $row["Department"]; ?></td>
		<td>
			<a href="room_schedule_update.php?R_Schedule_ID=<?php echo $row["room_schedule_ID"]; ?>">Update</a>
		</td>
		<td>
			<a href="room_schedule_delete.php?R_Schedule_ID=<?php echo $row["room_schedule_ID"]; ?>">Delete</a>
		</td>
	</tr>
	<?php
		}
	?>
</table>

<?php
	} else {
		echo "No room schedules found for the given date.";
	}
}
?>

</body>
</html>