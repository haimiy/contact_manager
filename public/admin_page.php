<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin Page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="../resources/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../resources/css/styles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="d-flex" id="wrapper">

    <!-- Start Sidebar -->
    <div class=" border-right" id="sidebar-wrapper" style="background-color: #bebebc;">
	    <div class="sidebar-heading"><h2 style="text-align: center;">Admin</h2></div>
	    <div class="list-group list-group-flush">
	        <a href="#" class="list-group-item list-group-item-action bg-secondary text-white">Dashboard</a>
	        <a href="#" class="list-group-item list-group-item-action" style="background-color: #bebebc">Profile</a>
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
    		<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
    		<li class="breadcrumb-item active" aria-current="page">User view</li>
  		</ul>
	</nav>
    </div>
    <hr><br><br>

<div class="add-button">
	<button type="button" class="btn btn-primary"><a href="#">Add new User</a></button>
</div>
<br>
<div class="table-responsive">  
    <table class="table table-striped table-bordered">  
	    <thead>  
	        <tr>  
	            <th>id</th>  
	            <th>First name</th>  
	            <th>Last name</th>  
	            <th>Email</th>
	            <th>Action</th>    
	        </tr>  
	    </thead>  
        <?php  
        	include "../db/connection.php";

        	$sql = "SELECT id,f_name,l_name,email from users where f_name ='Khairat'and l_name='Issa'and email='Khairat096@gmail.com'";
        	$result = mysqli_query($conn,$sql);

            while($row = mysqli_fetch_array($result))  
            {  
                echo '  
                    <tr>  
                    <td>'.$row["id"].'</td>  
                    <td>'.$row["f_name"].'</td>  
                    <td>'.$row["l_name"].'</td>  
                    <td>'.$row["email"].'</td>
                    <td>
                    <ul class="list-unstyled">
                    	<li>
                    	<a href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                    	<span>
                    	<a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                    	</span>
                    	<!-- <span>
                    	<i class="fa fa-lock" aria-hidden="true">
                    	</span></i> -->
                    </li>
                    </ul>
                    </td>    
                    </tr>  
                    ';  
            }  
        ?>  
    </table>  
    </div>  
    </div>
    <!-- page-content-->
    </div>

</body>
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
	<script src="../resources/bootstrap/js/bootstrap.min.js"></script>
	<script src="../resources/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="../resources/jquery/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	
</html>