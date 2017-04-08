	<!DOCTYPE html>
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
		z-index: 999;
		border: 0px solid;
		box-shadow: 0px 2px 7px 0px rgba(0,0,0,0.75);
		transition:all ease 0.8s;
		box-shadow: 0px 2px 7px 0px rgba(0,0,0,0.75);
		box-shadow: 0px 2px 7px 0px rgba(0,0,0,0.75);
}
		

		.w3-sidenav 
{
background-color:  #404040;
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

	<body class="w3-content" style="max-width:1360px">
		

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
				
				<div class="w3-container ">
								<div class="text-left">				
									<h3> <b > Organ Donation System </b></h3> 
													<p > Be a Donor & Save Lifes..!! </p> 
								
					 							<!--div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="#"><span class="glyphicon glyphicon-font"></span> About Us</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-heart-empty"></span> Why Choose us</a></li>
                        <li><a href="#"> <span class="glyphicon glyphicon-phone"></span> What We Do</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Contact Us</a></li>  
                        <li><a href="#"><span class="glyphicon glyphicon-search"></span> Search</a></li>                      
                    </ul>
     							</div-->
								</div>
		</div>
				<br>
	
		<!-- Sidenav/menu -->

					<nav class="w3-sidenav w3-collapse  w3-animate-left" style="z-index:3;width:160px;" id="mySidenav"><br>
						<div class="w3-container-fluid ">
							<a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding" title="close menu">
								<i class="fa fa-remove"></i>
							</a>
							<img src="img/m.jpg" style="width:35%;" class="w3-circle"><br><br>
							<p> <b>Project by PICT </b></p>
						</div>
	  
	  
						<a href="FirstRegistration.php" target="cp"   class="w3-bar-item w3-button  w3-text-white w3-hover-text-white w3-padding "><i class="fa fa-list fa-fw w3-margin-right w3-text-white"></i> Registration </a> 
						<a href="#about" onclick="w3_close()" class="w3-bar-item w3-button  w3-text-white w3-hover-text-white w3-padding "><i class="fa fa-users fa-fw w3-margin-right"></i> About </a> 
						<a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button  w3-text-white w3-hover-text-white w3-padding "><i class="fa fa-envelope fa-fw w3-margin-right"></i> Contact </a>
						
					</nav>

		
		
		<!-- Overlay effect when opening sidenav on small screens -->

					<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>


		<!-- !PAGE CONTENT! -->

					<div class="w3-main" style="margin-left:170px">

					
		<!-- Navigation Bar   onclick="location.href='homepage.php'"    -->
					
				<ul class="w3-navbar navbar-default ">
				 <div class="container-fluid ">
					<li><a href="Default.php" class="w3-bar-item w3-button  w3-text-white w3-hover-text-white" target="cp" ><i class="fa fa-home"></i> Home</a></li>
								<li><a href="DonorLogin.php" class="w3-bar-item w3-button  w3-text-white w3-hover-text-white"target ="cp"><i class="fa fa-male"></i> Donor </a></li>
        <li><a href="RecieverLogin.php" class="w3-bar-item w3-button  w3-text-white w3-hover-text-white"target ="cp"><i class="fa fa-child"></i> Reciever </a></li>
        <li><a href="DoctorLogin.php" class="w3-bar-item w3-button  w3-text-white w3-hover-text-white"target ="cp"><i class="fa fa-male"></i> Doctor </a></li> 
								<li><a href="HospitalLogin.php" class="w3-bar-item w3-button  w3-text-white w3-hover-text-white" target ="cp"><i class="fa fa-laptop"></i> Hospital</a></li>    		
								<li><a href="#" class="w3-bar-item w3-button  w3-text-white w3-hover-text-white" target =""><span class="glyphicon glyphicon-heart-empty"></span> Why Choose us</a></li>
       	<li><a href="#" class="w3-bar-item w3-button  w3-text-white w3-hover-text-white" target =""><span class="glyphicon glyphicon-phone"></span> What We Do</a></li>
       	<li><a href="#" class="w3-bar-item w3-button  w3-text-white w3-hover-text-white" target =""><span class="glyphicon glyphicon-user"></span> Contact Us</a></li>  
         <li><a href="AdminLogin.php" class="w3-bar-item w3-button  w3-text-white w3-hover-text-white" target ="cp"><i class="fa fa-laptop"></i>Admin </a></li>  
  
								<ul class="nav navbar-nav navbar-right">		
   			  <li><a href="#" class="w3-text-white" target ="" ><i class="fa fa-sign-in"></i> Login</a></li>
    </ul>
					
				</div>
				</ul> 
				
				<div id="section">
					<iframe src="Default.php" name="cp" width="1190px" height="510px" style="border:none" ></iframe>
				</div>
</body>
</html>
