<?php 
//include the database connection 
include_once 'config.php';
// Retrieve the patient information based on the provided patient_ID
$result = mysqli_query($conn, "select * from patient where patient_ID='".$_GET['P_ID'] ."'");
$row=mysqli_fetch_array($result);


?>


<!--patient update form-->
<!DOCTYPE html>
<html>
<head>
	<title>update patient</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale="1">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
	

<div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-lg-7 col-md-6 col-sm-6">
        <div class="card shadow">
          <div class="card-title text-center border-bottom">
            <h2 class="p-3">Update patient</h2>
          </div>
          <div class="card-body">
  <!--Patient details form-->
          	<form action="updateP.php" method="POST">
           

              <div class="mb-3">
                <label  class="form-label">Patient No</label>
                <input type="" class="form-control" name="P_ID" value="<?php echo $row["patient_ID"];?>"> <?php echo $row["patient_ID"];?></label>
              </div>

              <table class="mb-3" width=100%>
                <tr>
                  <td>
                    
                    <label for="Fname" class="form-label">Fiest Name</label>
                    <input type="text" class="form-control" name="Fname" value="<?php echo $row["First_Name"];?>">
    
                  </td>
                  <td>
                   
                   <label for="name" class="form-label">Last Name</label>
                   <input type="text" class="form-control" name="Lname" value="<?php echo $row["Last_Name"];?>">
   
                  </td>
                </tr>
              </table>

              <div class="mb-3">
                <label for="DOB" class="form-label">Date of Birth</label>
                <input type="Date" class="form-control" name="DOB" value="<?php echo $row["DOB"];?>">
              </div>

    <!--Radio buttons for input gender-->
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="Gender" id="Male" value="Male">
                <label class="form-check-label" for="Male">Male</label>
              </div>

              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="Gender" id="Female" value="Female">
                <label class="form-check-label" for="Female">Female</label>
              </div>

              <div class="mb-3">
                <label for="NIC" class="form-label">NIC No</label>
                <input type="text" class="form-control" name="NIC" value="<?php echo $row["NIC_No"];?>">
              </div>

              <div class="mb-3">
                <label for="phone" class="form-label">Phone number</label>
                <input type="text" class="form-control" name="phone" value="<?php echo $row["Phone_Number"];?>">
              </div> 	      

              <div class="mb-3">
                <label for="Address" class="form-label">Address</label>
                <input type="text" class="form-control" name="address" value="<?php echo $row["Address"];?>">
              </div>
           
              <div class="mb-3">
                <label for="Username" class="form-label">User Name</label>
                <input type="text" class="form-control" name="Username" value="<?php echo $row["User_Name"];?>">
              </div>

            <div class="mb-3">
              <label for="pwd" class="form-label">Password</label>
              <input type="password" class="form-control" name="pwd" value="<?php echo $row["Password"];?>">
            </div>

                   
            <div>
              <!--button for update fields-->
              <button type="update" class="btn btn-outline-info" style="background-color: #469597; color:#ffffff" name="update_patient"> Update patient </button>

            </div>

            


            <br><br>

            

          </form>
        </div>
      </div>
    </div>
  </div>
</div>
      
</body>
</html>