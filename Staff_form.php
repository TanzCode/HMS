<!--Staff infomation form-->
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale="1">
	<link href="css/bootstrap.min.css" rel="stylesheet">


    <style type="text/css">
        /* CSS styles for screens with a minimum width of 992px */
        @media (min-width: 996px) {
            /* Modify the navbar and navbar-collapse to have a column layout */
            .navbar,
            .navbar-collapse {
                flex-direction: column;
            }
            .navbar-expand-lg .navbar-nav {
                flex-direction: column;
            }
            .navbar {
                width: 100%;
                height: 100%;
                
            }
            

      
    </style>
  
	<script src="js/bootstrap.min.js"></script>
</head>
<body style="background-image: url('bg.png');  background-attachment: fixed;
  background-size: 100% 100%;">
	
<div class="row justify-content-start">
    <div class="col-2">
      <nav class="navbar navbar-expand-lg navbar-light bs-side-navbar" style="background-color: #469597">
    <div >
    <a class="navbar-brand" href="Home.html">
        <img src="log.png" alt="" width="100%" height="100%" ">
    </a>
    </div>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse " id="navbarNav">
        <ul class="nav nav-tabs navbar-nav ms-auto"   >
            <!-- Home link -->
            <li class="nav-item active">
                <a style="color:#ffffff; font-family: verdana; font-size: 18px;"class="nav-link" href="Home.html">Home <span class="sr-only"></span></a>
            </li>
            <!-- Services link -->
            <li class="nav-item">
                <a style="color:#ffffff; font-family: verdana; font-size: 18px;" class="nav-link" href="#">Services</a>
            </li>
            <!-- Contact Us link -->
            <li class="nav-item">
                <a style="color:#ffffff; font-family: verdana; font-size: 18px;" class="nav-link"  href="#">Contact Us</a>
            </li>
            <!-- About Us link -->
            <li class="nav-item">
                <a style="color:#ffffff; font-family: verdana; font-size: 18px;" class="nav-link" href="#">About Us</a>
            </li>



            <!-- Patient dropdown -->
            <li class="nav-item dropdown">
                <a style="color:#ffffff; font-family: verdana;  font-size: 18px;" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Patient
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <!-- Register link -->
                    <li><a class="dropdown-item" href="patient_registration.html">Register</a></li>
                    <!-- View patient link -->
                    <li><a class="dropdown-item" href="patient_search.php">View patient</a></li>
                    <!-- View patient history link -->
                    <li><a class="dropdown-item" href="patient_history_search.php">View patient History</a></li>
                    <!-- Manage link -->
                    <li><a class="dropdown-item" href="#">Manage</a></li>
                </ul>
            </li>
            <!-- Room dropdown -->
            <li class="nav-item dropdown">
                <a style="color:#ffffff; font-family: verdana;  font-size: 18px;" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Room
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <!-- Add new room link -->
                    <li><a class="dropdown-item" href="room.html">Add new room</a></li>
                    <!-- View Rooms link -->
                    <li><a class="dropdown-item" href="Room_Search.php">View Rooms</a></li>
                    <!-- Manage Room schedule link -->
                    <li><a class="dropdown-item" href="room_schedule_search.php">Manage Room schedule</a></li>
                    <!-- Enter new Room schedule link -->
                    <li><a class="dropdown-item" href="room_schedule_search.php">Enter new Room schedule</a></li>
                </ul>
            </li>
            <!-- ward dropdown -->
            <li class="nav-item dropdown">
                <a style="color:#ffffff; font-family: verdana;  font-size: 18px;" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Ward
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <!-- Add new Staff member link -->
                    <li><a class="dropdown-item" href="ward.html">Add new ward</a></li>
                    <!-- View Staff link -->
                    <li><a class="dropdown-item" href="ward_search.php">View wards</a></li>
                    <!-- View staff schedule link -->
                    <li><a class="dropdown-item" href="ward_schedule_search.php">View ward schedule</a></li>
                    <!-- Add new OT schedule link -->
                    <li><a class="dropdown-item" href="ward_schedule_form.html">Add ward schedule</a></li>
                </ul>
            </li>

            <!-- Operation Theater dropdown -->
            <li class="nav-item dropdown">
                <a style="color:#ffffff; font-family: verdana;  font-size: 18px;" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Operation Theater
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <!-- Add new operation theater link -->
                    <li><a class="dropdown-item" href="room.html">Add new operation theater</a></li>
                    <!-- View operation theater link -->
                    <li><a class="dropdown-item" href="_Search.php">View operation theater</a></li>
                    <!-- View operation theater schedule link -->
                    <li><a class="dropdown-item" href="OT_schedule_search.php">View operation theater schedule</a></li>
                    <!-- Add new OT schedule link -->
                    <li><a class="dropdown-item" href="OT_schedule_form.html">Add new OT schedule</a></li>
                </ul>
            </li>

            <!-- Staff dropdown -->
            <li class="nav-item dropdown">
                <a style="color:#ffffff; font-family: verdana;  font-size: 18px;" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Staff
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <!-- Add new Staff member link -->
                    <li><a class="dropdown-item" href="Staff_form.html">Add new Staff member</a></li>
                    <!-- View Staff link -->
                    <li><a class="dropdown-item" href="Staff_search.php">View staff members</a></li>
                    <!-- View staff schedule link -->
                    <li><a class="dropdown-item" href="Staff_schedule_search.php">View Staff schedule</a></li>
                    <!-- Add new OT schedule link -->
                    <li><a class="dropdown-item" href="Staff_schedule.html">Add staff schedule</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a style="color:#ffffff; font-family: verdana; font-size: 18px;" class="nav-link" href="#">Log-out</a>
            </li>
        </ul>
    </div>
</nav>

    </div>



















 <div class="col-10">
      
        <!-- Main Content Area -->
         
     
	<div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-lg-7 col-md-6 col-sm-6">
        <div class="card shadow">
          <div class="card-title text-center border-bottom" style="background-color: #469597; color:#ffffff"">
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
       </div>
  </div>
</body>
</html>