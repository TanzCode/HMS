<?php
// include the connection php code
include 'config.php';

$Invoice_no = $_POST["Invoice_no"];
$P_ID = $_POST["P_ID"];
$S_ID = $_POST["S_ID"];
$bill_amount = $_POST["bill_amount"];
$date = $_POST["date"];
$time = $_POST["time"];




// Insert Patient data into database - Query
$sql = "INSERT INTO invoice (Invoice_ID, P_ID, S_ID, bill_amount, Date, Time) 
        VALUES ('$Invoice_no', '$P_ID', '$S_ID', '$bill_amount', '$date', '$time')";

if (mysqli_query($conn, $sql)) {
    echo "<h3>Data stored in the database successfully.</h3>";
} else {
    echo "ERROR: Failed to store data in the database. " . mysqli_error($conn);
}

mysqli_close($conn);
?>