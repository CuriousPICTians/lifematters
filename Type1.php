<!DOCTYPE html>
<html lang="en">
<head>
<title>Organ Donation</title>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
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



<script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","Type1.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>

<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>



<style>

html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}

</style>


</head>
<body>

<?php
  $con = new MongoClient(); 
  
  if (!$con)
      die('Could not connect: ');

    $database=$con->organ;
    $collection=$database->hospitalinfo;
  
    $cursor = $collection->find();
?>


<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:20px">    

  <!-- The Grid -->
  <div class="w3-row">

<!-- Middle Column -->
    <div class="w3-col m6">

    <div class="w3-row-padding">
    <div class="w3-col m12">


		<div class="w3-card-2 w3-round w3-white">
        	<div class="w3-container">

			<form method="post" action="livedonor.php">

       
	       		<h5 class=""> <b>Alive Donoer Can Donote Following Organs Only </b> </h5>
	              
				<hr>

				<ol>
				<li> <img src="img/Kidney.png" class="img-circle" alt="Cinque Terre" width="40" height="40"> 
				<a href="#" title="About Kidney" data-toggle="popover" data-trigger="hover" data-content="Your kidneys filter wastes from your blood and convert them to urine. 
					When your kidneys stop working you can develop kidney failure. Harmful wastes and fluids build up in your body and your blood pressure may rise. 
					You can live healthily with one kidney."> <b>Kidney</b>  </a> </li> 
				<br>
				<li>  <img src="img/Kidney.png" class="img-circle" alt="Cinque Terre" width="40" height="40"> 
				<a href="#" title="About Kidney" data-toggle="popover" data-trigger="hover" data-content="Your kidneys filter wastes from your blood and convert them to urine. 	
					When your kidneys stop working you can develop kidney failure. Harmful wastes and fluids build up in your body and your blood pressure may rise. 											
					You can live healthily with one kidney."><b> Liver </b> </a> </li>
				<br>
				<li>  <img src="img/Liver.png" class="img-circle" alt="Cinque Terre" width="40" height="40"> 
				<a href="#" title="About Liver" data-toggle="popover" data-trigger="hover" data-content="Your liver produces bile to clean out your body. 
					If your liver isn’t working right, you will begin to feel tired, experience nausea, vomiting, decreased appetite, brown urine, 
					or even jaundice - yellowing in the whites of your eyes."><b> A Portion of the Liver </b> </a> </li>
				<br>
				<li>  <img src="img/Pancreas.png" class="img-circle" alt="Cinque Terre" width="40" height="40"> 
				<a href="#" title="About Pancreas" data-toggle="popover" data-trigger="hover" data-content="Your pancreas is in your abdomen. 
					It produces insulin to control your blood sugar levels. If your pancreas is not working correctly your blood sugar level rises, 
					which can lead to  diabetes."> <b>Pancreas or Intestine </b> </a> </li>
				</ol>


				<hr>



				<div class="form-inline">

				  <label for="ex2"> <b>Select Organs:- </b> </label>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

				 <select name="organ" class="form-control" style="width:220px;">


													<option value="0">Kidney</option>
													<option value="1"> Liver</option>
													<option value="2">Heart</option>
													
				</select>
				</div>
	        
	        <br>
				<div class="form-inline">

				  <label for="ex2"> <b>Select Hospital :- </b> </label>	&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;&nbsp;	
			        <select name="hospital" class="form-control" style="width:220px;" onchange="showUser(this.value)">
						<option value="">Select Hospital:</option>
     					 <?php 
      						foreach ($cursor as $venue)
        					echo "<option value=".$venue['email'].">".$venue['hospital_name']."</option>";
      					?>
					</select>

				</div>	

				<br>
				<select id="txtHint"></select>

				<hr>





<?php
if(isset($_GET['q']))
{

  echo $_GET['q'];
    $email1 = $_GET['q'];
    $con = new MongoClient();
    
	if (!$con)
    die('Could not connect: ');

   $database = $con->organ;
   $collection = $database->docinfo;


    $cursor = $collection->find(array("Hos"=>$email1));
    $cursor_count = $cursor->count();


   
?>


<div class="form-inline">

				  <label for="ex2"> <b>Select Doctor :- </b> </label>	&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;&nbsp;	
			        <select name="Doc" class="form-control" style="width:220px;" >
						<option value="">Select Doctor:</option>
     					 <?php 
      						foreach ($cursor as $venue)
        					echo "<option value=".$venue['email'].">".$venue['fname']."</option>";
      					?>
					</select>

				</div>	

<?php
}
?>


<hr>





			<!--<input type="submit" name="submit" class="btn btn-large btn-success" value="submit"/>-->
			<br><br>





			</form>

        	</div>
      </div>


</div>
</div> 

          



  <!-- End Middle Column -->
    </div>

    </div>
    </div>





    

  </body>
</html>

