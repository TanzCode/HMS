<?php
include_once 'config.php';

if (isset($_POST['update_patient'])) {
    // Get the form data
    $patientID = $_POST['P_ID'];
    $firstName = $_POST['Fname'];
    $lastName = $_POST['Lname'];
    $dob = $_POST['DOB'];
    $gender = $_POST['Gender'];
    $nic = $_POST['NIC'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $username = $_POST['Username'];
    $password = $_POST['pwd'];

    // Prepare the update query
    $sql = "UPDATE patient SET First_Name='$firstName', Last_Name='$lastName', DOB='$dob', Gender='$gender', NIC_No='$nic', Phone_Number='$phone', Address='$address', User_Name='$username', Password='$password' WHERE patient_ID='$patientID'";

    // Execute the update query
    if (mysqli_query($conn, $sql)) {
        echo "<br> Patient record updated successfully";
    } else {
        echo "<br> Error updating patient record: " . mysqli_error($conn);
    }

    mysqli_close($conn);
} else {
    echo "Invalid request";
}
?>
