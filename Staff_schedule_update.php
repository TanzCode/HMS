<?php 
include_once 'config.php';
$result = mysqli_query($conn, "select * from staff_schedule where S_S_ID ='".$_GET['S_Schedule_ID'] ."'");
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
      <div class="col-lg-7 col-md-8 col-sm-7">
        <div class="card shadow">
          <div class="card-title text-center border-bottom">
            <h2 class="p-3">Add a new Staff schedule</h2>
          </div>
          <div class="card-body">
          	<form action="room_schedule_insert.php" method="POST">
            
          <div class="mb-3">
            <label for="" class="form-label">Staff schedule ID</label>
            <input type="text" class="form-control" name="S_Schedule_ID">
          </div>
        
    

        <div class="mb-3">
            <label for="S_ID" class="form-label">Staff ID</label>
            <input type="text" class="form-control" name="S_ID">
        </div>

                  
        <div class="mb-3">
          <label for="date" class="form-label">Date </label>
          <input type="Date" class="form-control" name="date" >
        </div>

        <div class="mb-3">
            <label for="Stime" class="form-label">Start Time</label>
            <input type="Time" class="form-control" name="Stime" >
        </div>
        <div class="mb-3">
            <label for="Etime" class="form-label">End Time</label>
            <input type="Time" class="form-control" name="Etime" >
        </div>

        
          
       <div class="mb-3">
          <label for="department" class="form-label">Department</label>
          <input type="text" class="form-control" name="department">
        </div>
          
        <div class="mb-3">
            <label for="note" class="form-label">Special Note </label><textarea type="textarea" class="form-control" name="note">
            </textarea>
        </div>
       
        <table>
          <tr>
            <td><div>
        <button type="submit" class="btn btn-outline-info" style="background-color: #469597; color:#ffffff"> Update Staff schedule</button>
      </div></td>
      <td>
        <div>
        <button type="submit" class="btn btn-outline-info" style="background-color: #469597; color:#ffffff" formaction="staff_schedule_search.php"> view Staff schedule </button>
      </div>
      </td>
          </tr>
        </table>
      

      
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