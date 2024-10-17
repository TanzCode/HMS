
<?php 
include_once 'config.php';
$result = mysqli_query($conn, "select * from staff where Staff_ID='".$_GET['S_ID'] ."'");
$row=mysqli_fetch_array($result);


?>
<!--Staff infomation form-->
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
            <h2 class="p-3">Staff Information</h2>
          </div>
          <div class="card-body">
          	<form action="Staff_Insert.php" method="POST">
            
          <div class="mb-3">
            <label for="S_ID" class="form-label">Staff ID</label>
            <input type="text" class="form-control" name="S_ID">
          </div>
        <div class="mb-3">
          <table class="mb-3" width=100%>
           <tr>
              <td>
                <label for="Fname" class="form-label">Fiest Name</label>
                <input type="text" class="form-control" name="Fname" ">
              </td>
              <td>
                <label for="Lname" class="form-label">Last Name</label>
                <input type="text" class="form-control" name="Lname">
   
                  </td>
                </tr>
              </table>
	      </div>
        <div class="mb-3">
            <label for="NIC" class="form-label">NIC No</label>
            <input type="text" class="form-control" name="NIC">  
        </div>
        

        
        <div class="mb-3">
          <label for="Gender" class="form-label">Gender</label><br>
          <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="Gender" id="Male" value="Male">
          <label class="form-check-label" for="Gender">Male</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="Gender" id="Female" value="Female">
          <label class="form-check-label" for="Female">Female</label>
        </div>
        </div>
        
        <div class="form-group">
          <label for="Email">Email address</label>
          <input type="email" class="form-control"  aria-describedby="emailHelp" name="Email">
        </div>

        

        <div class="mb-3">
            <label for="phone" class="form-label">Phone number</label>
            <input type="text" class="form-control" name="phone">
        </div>


        <div class="mb-3">
          <label for="address" class="form-label">Address</label>
          <input type="text" class="form-control" name="address">
        </div>
          
        <div class="mb-3">
          <label for="Department" class="form-label">Department</label>
          <input type="text" class="form-control" name="Department">
        </div>

        <div class="mb-3">
          <label for="job" class="form-label">Job Title</label>
          <input type="text" class="form-control" name="job">
        </div>

        <div class="mb-3">        
          <button type="submit" class="btn btn-outline-info" style="background-color: #469597; color:#ffffff"> Add new Staff</button>
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