
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin Page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="../../resources/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../resources/css/styles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="d-flex" id="wrapper">

    <!-- Start Sidebar -->
    <div class=" border-right" id="sidebar-wrapper" style="background-color: #bebebc;">
	    <div class="sidebar-heading"><h2 style="text-align: center;">Admin</h2></div>
	    <div class="list-group list-group-flush">
	        <a href="#" class="list-group-item list-group-item-action" style="background-color: #bebebc">Dashboard</a>
          <a href="manage_user.php" class="list-group-item list-group-item-action" style="background-color: #bebebc">User</a>
          <!--Dropdown -->
      <div class="dropdown">
	        <a href="admin_profile.php" class="list-group-item list-group-item-action bg-secondary text-white dropdown-toggle" data-toggle="dropdown" id="dropdownMenuLink" aria-haspopup="true" aria-expanded="false">My profile</a>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="background-color: #bebebc;">
            <a class="dropdown-item bg-secondary text-white" href="../../app/admin_info.php">Setting</a>
            <a class="dropdown-item" style="background-color: #bebebc;" href="admin_login.php">Logout</a>
          </div>
      </div>
          
	    </div>
  	</div>
  	<!-- Finish Sidebar -->
	
	<!-- Start page-content-->
	<div id="page-content-wrapper">
	<nav class="navbar navbar-expand-lg navbar-light bg-secondary border-bottom">
        <div class="navbar-nav ml-auto mt-2 mt-lg-0">
           <form class="form-inline my-2 my-lg-0">
      		<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      		<button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
    		</form>
        </div>
    </nav>

    <div class="container-fluid">
    <nav aria-label="breadcrumb">
  		<ul class="breadcrumb list-unstyled" style="background-color: #fff;">
    		<!-- <li class="breadcrumb-item"><a href="#">Dashboard</a></li> -->
    		<li class="breadcrumb-item active" aria-current="page">Profile</li>
  		</ul>
	</nav>
    </div>
    <hr><br>

        <div class="card mx-auto" style="width: 25rem;">
          <div class="card-body">
              <div class="title text-center"><h5>My profile</h5></div>
              <div class="card-text">
                
              </div>
            
          </div>
          
        </div>

    </div>
    <!-- page-content-->
    </div>

</body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
  <script src="../../resources/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="../../resources/bootstrap/js/bootstrap.min.js"></script>
	<script src="../../resources/jquery/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
  
  	
</html>