<?php 
include_once 'config.php';
$result = mysqli_query($conn, "select * from room where room_ID='".$_GET['R_ID'] ."'");
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
            <h2 class="p-3">Add a new Room</h2>
          </div>
          <div class="card-body">
          	<form action="room.php" method="POST">
            
          <div class="mb-3">
            <label for="R_ID" class="form-label">Room ID</label>
            <input type="text" class="form-control" name="R_ID">
          </div>
        
        
        <div class="mb-3">
            <label for="Name" class="form-label">Room Name</label>
            <input type="text" class="form-control" name="Name">  
        </div>

        <div class="mb-3">
            <label for="TP" class="form-label">Phone number</label>
            <input type="text" class="form-control" name="TP">
        </div>
          

        <div class="mb-3">
          <label for="facility" class="form-label">Facilities </label>
          <input type="text" class="form-control" name="address">
        </div>
          
       <div class="mb-3">
          <label for="department" class="form-label">Department</label>
          <input type="text" class="form-control" name="department">
        </div>

        
      <div>
        <button type="submit" class="btn btn-outline-info" style="background-color: #469597; color:#ffffff"> Update Room</button>
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