<?php
// include the connection php code
include 'config.php';

$P_ID = $_POST["P_ID"];
$Fname = $_POST["Fname"];
$Lname = $_POST["Lname"];
$DOB = $_POST["DOB"];
$Gender = $_POST["Gender"];
$NIC = $_POST["NIC"];
$phone = $_POST["phone"];
$address = $_POST["address"];
$Username = $_POST["Username"];
$pwd = $_POST["pwd"];
$resetpwd = $_POST["resetpwd"];

// Check if Password and Reset Password fields are the same
if ($pwd !== $resetpwd) {
    echo "<h3>Error: Password and Re-enterd Passwords are not match.</h3>";
    exit;
}

// Insert Patient data into database - Query
$sql = "INSERT INTO patient (patient_ID, First_Name, Last_Name, DOB, Gender, NIC_No, Phone_Number, Address, User_Name, Password) 
        VALUES ('$P_ID', '$Fname', '$Lname', '$DOB', '$Gender', '$NIC', '$phone', '$address', '$Username', '$pwd')";

if (mysqli_query($conn, $sql)) {
    echo "<h3>Data stored in the database successfully.</h3>";
} else {
    echo "ERROR: Failed to store data in the database. " . mysqli_error($conn);
}

mysqli_close($conn);
?>