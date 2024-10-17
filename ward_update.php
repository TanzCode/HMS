<?php 
include_once 'config.php';
$result = mysqli_query($conn, "select * from ward where ward_ID='".$_GET['w_ID'] ."'");
$row=mysqli_fetch_array($result);


?>

<!-- Add Room  -->
<!DOCTYPE html>
<html>
<head>
	<title></title>
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
            <h2 class="p-3">Add a new ward</h2>
          </div>
          <div class="card-body">
          	<form action="" method="POST">
            
          <div class="mb-3">
            <label for="w_ID" class="form-label">ward ID</label>
            <input type="text" class="form-control" name="w_ID">
          </div>
        
        
        <div class="mb-3">
            <label for="Name" class="form-label">Ward Name</label>
            <input type="text" class="form-control" name="Name">  
        </div>
        <div class="mb-3">
            <label for="TP" class="form-label">Phone number</label>
            <input type="text" class="form-control" name="TP">
        </div>

        <div class="mb-3">
            <label for="N_Bed" class="form-label">Number of beds </label>
            <input type="text" class="form-control" name="N_Bed">  
        </div>

        <div class="mb-3">
          <label for="facility" class="form-label">Facilities </label>
          <input type="text" class="form-control" name="facility">
        </div>
          
       <div class="mb-3">
          <label for="department" class="form-label">Department</label>
          <input type="text" class="form-control" name="department">
        </div>

        
      <div>
        <button type="submit" class="btn btn-outline-info" style="background-color: #469597; color:#ffffff"> Add Room</button>
      </div>
      <br>
       
      </form>
      </div>
      </div>
    </div>
      </div>
      </div>
      </div>
</body>
</html>