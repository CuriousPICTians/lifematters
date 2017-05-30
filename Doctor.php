	<!DOCTYPE html>


<?php

session_start();
$_SESSION['email'];

?>

	<html lang="en">
	<html>


	<head>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<!-- Latest compiled JavaScript -->
		<script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
		
	<!-- W3.CSS is a modern CSS framework -->		
		<link rel="stylesheet" href="w3.css">
	
	
	<style>
			
			.w3-container	  
{
background-color: #fafafa;
padding: 5px;
		z-index: 999;
		border: 0px solid;
		box-shadow: 0px 2px 7px 0px rgba(0,0,0,0.75);
		transition:all ease 0.8s;
		box-shadow: 0px 2px 7px 0px rgba(0,0,0,0.75);
		box-shadow: 0px 2px 7px 0px rgba(0,0,0,0.75);
}

		.w3-sidenav 
{
background-color: #404040;
color: #ffffff;
		z-index: 999;
		border: 0px solid;
		box-shadow: 0px 2px 7px 0px rgba(0,0,0,0.75);
		transition:all ease 0.8s;
		box-shadow: 0px 2px 7px 0px rgba(0,0,0,0.75);
		box-shadow: 0px 2px 7px 0px rgba(0,0,0,0.75);
}	

body {
    background-color: #fff;
}

.topbar {
	background: #404040;
	border-color: #2A3F54;
	border-radius: 0px;
}

.topbar .navbar-header a {
	color: #ffffff;
}

.content {
    margin-top: 70px;
    padding: 0 30px;
}

.navbar-btn {
    background: none;
    border: none;
    height: 35px;
    min-width: 35px;
    color: #fff;
}
.navbar-text {
  margin-top: 14px;
  margin-bottom: 14px;
}



		
	</style>
	
	</head>

	<body class="w3-content" style="max-width:1400px">
		
						
<!-- Navigation bar with social media icons -->
<div class="w3-bar w3-black w3-hide-small">
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-facebook-official"></i></a>
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-instagram"></i></a>
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-snapchat"></i></a>
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-flickr"></i></a>
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-twitter"></i></a>
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-linkedin"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-right"><i class="fa fa-search"></i></a>
</div>
		
		
	
		<!-- Sidenav/menu -->

					<nav class="w3-sidenav w3-collapse w3-animate-left" style="z-index:3;width:180px;" id="mySidenav"><br>
						<div class="w3-container-fluid">
							
							<a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding" title="close menu">
								<i class="fa fa-remove"></i>
							</a>
							<img src="img\m.jpg" style="width:35%;" class="w3-circle"><br><br>
							<p> <b>Project by PICT </b></p>
						</div>
	  
						<a href="DoctorDetails.php" target="cp" class="w3-bar-item w3-button  w3-text-white w3-hover-text-white w3-padding "><i class="fa fa-home fa-fw w3-margin-right"></i> Home </a>
						<a href="approvepatient.php" target="cp" class="w3-bar-item w3-button  w3-text-white w3-hover-text-white w3-padding "><i class="fa fa-outdent fa-fw w3-margin-right"></i> Approve Patient </a> 
						<a href="Psearch.php" target="cp" class="w3-bar-item w3-button  w3-text-white w3-hover-text-white w3-padding "><i class="fa fa-outdent fa-fw w3-margin-right"></i> Search Patients</a> 
						<a href="Mreport.php" target="cp" class="w3-bar-item w3-button  w3-text-white w3-hover-text-white w3-padding "><i class="fa fa-user-md fa-fw w3-margin-right"></i> Upload Report </a>
						<a href="Result.php" target="cp" class="w3-bar-item w3-button  w3-text-white w3-hover-text-white w3-padding "><i class="fa fa-user-md fa-fw w3-margin-right"></i> Match List  </a>
						<a href="logout.php" class="w3-bar-item w3-button  w3-text-white w3-hover-text-white w3-padding "><i class="fa fa-spinner fa-spin fa-fw w3-margin-right"></i> Logout </a>
						
					</nav>

		

  <nav class="navbar navbar-default topbar" style="margin-left:190px">
		<div class="container-fliud">

			<div class="navbar-header">

				<p class="navbar-text">		
				  <a class="sidebar-toggle">
            <i class="fa fa-bars"></i>
          </a>
				</p>

				<a class="navbar-brand">
					<span> Doctor </span>
				</a>

		</div>

		<div class="navbar-collapse collapse" id="navbar-collapse-main">

				<ul class="nav navbar-nav navbar-right">
                    
            <li>
                <button class="navbar-btn">
                 <i class="fa fa-bell"></i>
                </button>
           </li>
                    
					<li class="dropdown">
						<button class="navbar-btn" data-toggle="dropdown">
                            <i class="fa fa-user"></i>
						</button>
						<ul class="dropdown-menu">
							<li><a href="#">Account</a></li>
							<li><a href="#">Dashboard</a></li>
							<li class="nav-divider"></li>
							<li><a href="logout.php">Logout</a></li>
						</ul>
					</li>

				</ul>

			</div>
		</div>
	</nav>
			

		<!-- Overlay effect when opening sidenav on small screens -->

					<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>


		<!-- !PAGE CONTENT! -->

					<div class="w3-main" style="margin-left:190px">

				
				
				<div id="section">
					<iframe src="DoctorDetails.php" name="cp" width="1200px" height="560px" style="border:none" ></iframe>
				</div>
</body>
</html>
