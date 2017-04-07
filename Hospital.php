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
		


<style>

body {
    background-color: #ffffff;
}

.topbar {
	background: #2A3F54;
	border-color: #2A3F54;
	border-radius: 0px;
}

.topbar .navbar-header a {
	color: #ffffff;
}

.wrapper {
    padding-left: 0px;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

.sidebar {
    z-index: 1000;
    position: fixed;
    top: 60px;
    left: -50px;
    width: 50px;
    height: 100%;
    overflow-y: auto;
    background: #2A3F54;
	color: #ffffff;
	-webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

.main {
	width: 100%;
    position: relative;
    padding-bottom:20px;
}

.wrapper.toggled {
	padding-left: 50px;
}

.wrapper.toggled .sidebar {
	left: 0;
}

/* Sidebar Styles */

.sidebar-nav {
    position: absolute;
    top: 52px;
    width: 50px;
    margin: 0;
    padding: 0;
    list-style: none;
}
.sidebar-nav li {
    line-height: 40px;
}
.sidebar-nav li a {
    display: block;
    text-decoration: none;
    color: #e8e8e8;
    padding: 0;
    text-align:center;
}

.sidebar-nav li a:hover, .sidebar-nav li.active a {
    text-decoration: none;
    color: #fff;
    background: #fff;
    background: rgba(255,255,255,0.2);
}

.sidebar-nav li a:active,
.sidebar-nav li a:focus {
    text-decoration: none;
}

.sidebar-nav li span, .subbar li span {
	display : none;
}

nav.subbar {
	position: relative;
	width: 100%;
	border-radius: 0px;
	background: #fff;
	margin: 50px 0 -50px 0;
	padding: 10px 0 0 0;
	z-index: 2;
}
nav.subbar > ul.nav.nav-tabs {
	padding: 0 5px;
}

nav.subbar > ul.nav.nav-tabs > li.active > a {
    background: #dedede;
    border-top: 1px solid #a6a6a6;
    border-left: 1px solid #a6a6a6;
    border-right: 1px solid #a6a6a6;
    border-radius: 0px;
}

.content {
    margin-top: 70px;
    padding: 0 30px;
}

@media(min-width:768px){
	.subbar li span {
		display: inline;
	}
}

@media(min-width:992px) {
    .wrapper {
    	padding-left: 50px;
    }

    .sidebar {
    	left: 0;
    	width: 50px;
	}

	.wrapper.toggled {
		padding-left: 200px;
	}

	.wrapper.toggled .sidebar, .wrapper.toggled .sidebar-nav {
		width: 200px;
	}
	
	.wrapper.toggled .sidebar-nav li a {
		text-align: left;
		padding: 0 0 0 10px;
	}

	.wrapper.toggled .sidebar-nav li span {
		display: inline;
	}

}

.navbar-btn {
    background: none;
    border: none;
    height: 35px;
    min-width: 95px;
    color: #fff;
}
.navbar-text {
  margin-top: 14px;
  margin-bottom: 14px;
}
@media (min-width: 768px) {
  .navbar-text {
    float: left;
    margin-left: 15px;
    margin-right: 15px;
  }
}

		
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

</style>  



<script>
$(document).on("click",".sidebar-toggle",function(){
    $(".wrapper").toggleClass("toggled");
});

</script>

</head>

<body class="w3-content" style="max-width:1360px">
						

				
		
		

    <nav class="navbar navbar-default navbar-top topbar">
		<div class="container-fluid">

			<div class="navbar-header">

				<a href="#" class="navbar-brand">
					<span class="visible-xs">KL</span>
					<span class="hidden-xs"> HOME </span>

				</a>

				<p class="navbar-text">
					<a href="#" class="sidebar-toggle">
                        <i class="fa fa-bars"></i>
                    </a>
				</p>

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
							<img src="img/a11.png" style="height:30px;width:30px" class="img-circle">
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
	
	<article class="wrapper">
	    
	    <aside class="sidebar">
	        <ul class="sidebar-nav">
			    <li class="active"><a href="#"><i class="fa fa-dashboard"></i> <span> Hospital details </span></a></li>
			    <li><a href="#" ><i class="fa fa-cogs"></i> <span> Approve Doctor </span></a></li>
			    <li><a href="#users" data-toggle="tab"><i class="fa fa-users"></i> <span>Users</span></a></li>
			    <li><a href="#mail" data-toggle="tab"><i class="fa fa-envelope"></i> <span>Mail</span></a></li>
		    </ul>
	    </aside>
	    
	   
	    
	</article>

<!-- !PAGE CONTENT! -->

					<div class="w3-main" style="margin-left:50px;margin-top:10px;">


<div id="section">
					<iframe src="Default.php" name="cp" width="1280px" height="570px" style="border:none" ></iframe>
				</div>

</body>
</html>

<a href="Default.php" target="cp" class="w3-bar-item w3-button  w3-text-white w3-hover-text-white w3-padding "><i class="fa fa-home fa-fw w3-margin-right"></i> Home </a>
						<a href="Psearch.php" target="cp" class="w3-bar-item w3-button  w3-text-white w3-hover-text-white w3-padding "><i class="fa fa-outdent fa-fw w3-margin-right"></i> Search</a> 
						<a href="ListDonor.php" target="cp" class="w3-bar-item w3-button  w3-text-white w3-hover-text-white w3-padding "><i class="fa fa-outdent fa-fw w3-margin-right"></i> Dlist </a> 
						<a href="ListReceiver.php" target="cp" class="w3-bar-item w3-button  w3-text-white w3-hover-text-white w3-padding "><i class="fa fa-bars fa-fw w3-margin-right"></i> Rlist </a> 
						<a href="Mreport.php" target="cp" class="w3-bar-item w3-button  w3-text-white w3-hover-text-white w3-padding "><i class="fa fa-user-md fa-fw w3-margin-right"></i> Report </a>
						<a href="MainHomepage.php" class="w3-bar-item w3-button  w3-text-white w3-hover-text-white w3-padding "><i class="fa fa-spinner fa-spin fa-fw w3-margin-right"></i> Logout </a>
						


