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

<link rel="stylesheet" href="w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	
	<style>
			
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}

/* edit profile css*/

.hve-pro {    background-color:rgb(255, 102, 0);padding: 5px; width:100%; height:auto;float:left;}
.hve-pro p {float: left;color:#fff;font-size: 15px;text-transform: capitalize;padding: 5px 20px;font-family: 'Noto Sans', sans-serif;}
h2.register { padding:10px 25px; text-transform:capitalize;font-size: 25px;color: rgb(255, 102, 0);}
.fom-main { overflow:hidden;}

legend {font-family: 'Bitter', serif;color:#ff3200;border-bottom:0px solid;}
.main_form {background-color: #;}
label.control-label {font-family: 'Noto Sans', sans-serif;font-weight: 100; margin-bottom:5px !important; 
text-align:left !important; text-transform:uppercase; color:#798288;}
.submit-button {color: #fff;background-color:rgb(255, 102, 0);width:190px;border: 0px solid;border-radius: 0px; transition:all ease 0.3s;margin: 5px;
float:left;}
.submit-button:hover, .submit-button:focus {color: #fff;background-color:rgb(0, 4, 51);}
.hint_icon {color:#ff3200;}
.form-control:focus {border-color: #ff3200;}
select.selectpicker { color:#99999c;}
select.selectpicker option { color:#000 !important;}
select.selectpicker option:first-child { color:#99999c;}
.input-group { width:100%;}
.uplod-picture {width: 100%; background-color:#;color: #fff; padding:20px 10px;margin-bottom:10px;}
.uplod-file {position: relative;overflow: hidden;color: #fff;background-color: rgb(0, 4, 51);border: 0px solid #a02e09;border-radius: 0px;
 transition:all ease 0.3s;margin: 5px;}
.uplod-file input[type=file] {position: absolute;top: 0;right: 0;min-width: 100%;min-height: 100%;font-size: 100px;text-align: right;
filter: alpha(opacity=0);opacity: 0;outline: none;background: white;cursor: inherit;display: block;}
.uplod-file:hover, .uplod-file:focus {color: #fff;background-color:rgb(255, 102, 0);}
h4.pro-title { font-size:24px; color:rgba(0, 4, 51, 0.96); text-transform:capitalize; text-align:justify;padding: 10px 15px;font-family: 'Bitter', serif;}
.bio-table { width:75%;border:0px solid;}
.bio-table td {text-transform: capitalize;text-align: left;font-size: 15px;}
.bio-table>tbody>tr>td { border:0px solid;text-transform: capitalize;color: rgb(0, 4, 51); font-size:15px;}
.responsiv-table { border:0px solid;}
.nav-menu li a {margin: 5px 5px 5px 5px;position: relative;display: block;padding: 10px 50px;border: 0px solid !important;box-shadow: none !important;
background-color: rgb(0, 4, 51) !important;color: #fff !important;    white-space: nowrap;}
.nav-menu li.active a {background-color: rgb(255, 102, 0) !important;}
.stick{position:fixed !important;top:0;z-index:999 !important;width:100%;background:#ffffff !important;height:auto; transition:all ease 0.8s;
-webkit-box-shadow: 0px 2px 7px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 2px 7px 0px rgba(0,0,0,0.75);
box-shadow: 0px 2px 7px 0px rgba(0,0,0,0.75);}
.stick a { line-height:20px !important;}
.stick img { margin:0 !important;}


}

	</style>
	
	</head>

	<body class="w3-theme-l5">
		
	
<?php

session_start();

  $con = new MongoClient();
  if($con)
  {
    $database=$con->organ;
    $collection=$database->docinfo;
    $cursor = $collection->find(array("email"=>$_SESSION['email']));
    $cursor_count = $cursor->count();
    foreach ($cursor as $venue)
    {
?>

<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:20px">    
  <!-- The Grid -->
  <div class="w3-row">

<div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card-2 w3-round w3-white">
            <div class="w3-container w3-padding">
              <h6 class="w3-opacity "> Wel-Come </h6>
              
            </div>
          </div>
        </div>
      </div>
<hr>
    <!-- Left Column -->
    <div class="w3-col m4">      

							

      <div class="w3-card-2 w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center"> Doctor Details </h4>
         <p class="w3-center"><img src="img/q1.png" class="" style="height:80px;width:80px" alt="Avatar"></p>
         <hr>
			<?php echo"<p> <i class='fa fa-hospital-o fa-fw w3-margin-right w3-text-theme'></i> Doctor Name :-"  .$venue ['fname']. "  " .$venue ['mname']. " " .$venue ['lname'] ."</p>"; ?>        
 			<?php echo"<p> <i class='fa fa-gratipay fa-fw w3-margin-right w3-text-theme'></i> G.R.NO :-" .$venue ['grno'] . "</p>"; ?>        
			<?php	echo"<p><i class='fa fa-btc fa-fw w3-margin-right w3-text-theme'></i> Contact Number :- " .$venue ['docphno'] ." </p>"; ?>																					
			<?php	echo"<p><i class='fa fa-odnoklassniki fa-fw w3-margin-right w3-text-theme'></i> Email-ID :-" .$venue ['docemail'] ." </p>"; ?>
			<?php	echo"<p><i class='fa fa-odnoklassniki fa-fw w3-margin-right w3-text-theme'></i> work at :-" .$venue ['dochospital'] ." </p>"; ?>
        </div>
      </div> 
				
				<!-- End Left Column -->
    </div>

    
    <!-- Middle Column -->
    <div class="w3-col m7">

    <div class="w3-row-padding">
    <div class="w3-col m12">

<div class="w3-card-2 w3-round w3-white">
        <div class="w3-container">
      <h4 class="w3-center"> <img src="img/q1.png" class="w3-circle" style="height:50px;width:50px" alt="Avatar">   Director / Medical Superintendent of Hospital </h4>

         <hr>
								<?php echo"<p> <i class='fa fa-hospital-o fa-fw w3-margin-right w3-text-theme'></i>  Name :-"  .$venue ['diname'] ."</p>"; ?>        
 							<?php echo"<p> <i class='fa fa-gratipay fa-fw w3-margin-right w3-text-theme'></i> phone No :-" .$venue ['diph'] . "</p>"; ?>        
									<?php	echo"<p><i class='fa fa-odnoklassniki fa-fw w3-margin-right w3-text-theme'></i> Email-ID :-" .$venue ['diemail'] ." </p>"; ?>
        </div>
      </div> 
<hr>	

<div class="w3-card-2 w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center"> <img src="img/z1.jpg" class="w3-circle" style="height:50px;width:50px" alt="Avatar"> Types of transplant being done in your hospital </h4>
         <p class="w3-center"> </p>
         <hr>
								<?php echo"<p> <i class='fa fa-hospital-o fa-fw w3-margin-right w3-text-theme'></i> License For :-".$venue['KidneyLicense'].$venue['LiverLicense'].$venue['HeartLicense'].$venue['LungsLicense']."</p>"; ?>
        </div>
      </div>
 
</div>
</div> 

          
  <!-- End Middle Column -->
    </div>
    
    
    
  <!-- End Grid -->
  </div>
  
<!-- End Page Container -->
</div>

<?php


}
}
?>
    
   
</body>
</html>
