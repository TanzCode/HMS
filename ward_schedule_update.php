
<?php 
include_once 'config.php';
$result = mysqli_query($conn, "select * from ward_schedule where w_s_ID='".$_GET['w_Schedule_ID'] ."'");
$row=mysqli_fetch_array($result);


?>


<!-- Add ward scedule -->


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
            <h2 class="p-3">Add a new ward schedule</h2>
          </div>
          <div class="card-body">
          	<form action="room_schedule_insert.php" method="POST">
            
          <div class="mb-3">
            <label for="W_Schedule_ID" class="form-label">Ward schedule ID</label>
            <input type="text" class="form-control" name="W_Schedule_ID">
          </div>
        
    

        <div class="mb-3">
            <label for="w_ID" class="form-label">Ward ID</label>
            <input type="text" class="form-control" name="W_ID">
        </div>

        <div class="mb-3">
          <label for="P_ID" class="form-label">Patient ID </label>
          <input type="text" class="form-control" name="P_ID">
        </div>

        <div class="mb-3">
          <label for="S_ID" class="form-label">Staff ID </label>
          <input type="text" class="form-control" name="S_ID">
        </div>
          
        <div class="mb-3">
          <label for="date" class="form-label">Date </label>
          <input type="Date" class="form-control" name="date" >
        </div>

        <div class="mb-3">
            <label for="time" class="form-label">Time</label>
            <input type="Time" class="form-control" name="time" >
        </div>

        
          
       <div class="mb-3">
          <label for="department" class="form-label">Department</label>
          <input type="text" class="form-control" name="department">
        </div>
          
       
      <div>
        <button type="submit" class="btn btn-outline-info" style="background-color: #469597; color:#ffffff"> Update Ward schedule</button>
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