	<!DOCTYPE html>


<?php

session_start();
echo $_SESSION['uname'];

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
position: ;
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

.w3-navbar 
{
background-color: #204060;
color: #ffffff;
		z-index: 999;
		border: 0px solid;
		box-shadow: 0px 2px 7px 0px rgba(0,0,0,0.75);
		transition:all ease 0.8s;
		box-shadow: 0px 2px 7px 0px rgba(0,0,0,0.75);
		box-shadow: 0px 2px 7px 0px rgba(0,0,0,0.75);
}


	</style>
	
	</head>

	<body class="w3-content" style="max-width:1350px">
		
						
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
		
				
		<!-- Header -->		
				
				<div class="w3-container w3-light-grey w3-medium ">
					<h3> <b>Organ Donation System </b></h3> 
					<p> Be a Donor & Save Lifes..!! </p> 
					
					
				</div>
		
				<br>
	
			<!-- Sidenav/menu -->

					<nav class="w3-sidenav w3-collapse w3-animate-left" style="z-index:3;width:160px;" id="mySidenav"><br>
						<div class="w3-container-fluid">
							
							<a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding" title="close menu">
								<i class="fa fa-remove"></i>
							</a>
							<img src="img\m.jpg" style="width:35%;" class="w3-circle"><br><br>
							<p> <b>Project by PICT </b></p>
						</div>
	  
						<a href="HospitalDetail.php" target="cp" class="w3-bar-item w3-button  w3-text-white w3-hover-text-white w3-padding "><i class="fa fa-home fa-fw w3-margin-right"></i> Hospital </a>
						<a href="DocApprove.php" target="cp" class="w3-bar-item w3-button  w3-text-white w3-hover-text-white w3-padding "><i class="fa fa-user-md fa-fw w3-margin-right"></i> Approve Doctor  </a>
						<a href="Result.php" target="cp" class="w3-bar-item w3-button  w3-text-white w3-hover-text-white w3-padding "><i class="fa fa-user-md fa-fw w3-margin-right"></i> match List  </a>
						<a href="logout.php" class="w3-bar-item w3-button  w3-text-white w3-hover-text-white w3-padding "><i class="fa fa-spinner fa-spin fa-fw w3-margin-right"></i> Logout </a>
						
					</nav>

		
		
		
		<!-- Overlay effect when opening sidenav on small screens -->

					<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>


		<!-- !PAGE CONTENT! -->

					<div class="w3-main" style="margin-left:170px">

					
				
				<div id="section">
					<iframe src="HospitalDetail.php" name="cp" width="1180px" height="550px" style="border:none" ></iframe>
				</div>
</body>
</html>
