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

</head>

<style>

html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}

</style>


</head>
<body>
<div class="w3-container w3-content" style="max-width:1400px;margin-top:20px">    


<form method="post" action="livedonor.php">

<div class="w3-col m7">
    
      <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card-2 w3-round w3-white">
            <div class="w3-container w3-padding">
              <h6 class=""> Alive Donoer Can Donote Following Orgas Only : </h6>
              
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
<li>  <img src="img/Heart.png" class="img-circle" alt="Cinque Terre" width="40" height="40"> 
<a href="#" title="About Heart" data-toggle="popover" data-trigger="hover" data-content="Your heart is a muscular organ that pumps blood to your body. 
Your heart is at the center of your circulatory system. This system consists of a network of blood vessels, such as arteries, veins, and capillaries. These blood vessels carry blood to and from all areas of your body."><b> Heart </b> </a> </li>

</ol>
<br>
<hr>



<div class="form-inline">
  <label for="ex2"> <b>Select Organs:- </b> </label>	&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;&nbsp;		
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;								
 <select name="organ" class="form-control" style="width:200px;">

									<option value="1">Kidney</option>
									<option value="2"> Liver</option>
									<option value="3">Heart</option>
									
</select>
</div>

</br>				


<div class="form-inline">
  	<label><b>Select Hospital :- </b> </label>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;						
 			<select name="hospital"  class="form-control" style="width:200px;">

									<option value="Sahyadri Hospital Pune"> Sahyadri Hospital Pune </option>
									<option value="Sankriti Hospital Pune"> Sankriti Hospital Pune </option>
									<option value="Aditya Birla Hospital Pune"> Aditya Birla Hospital Pune </option>
									<option value="Sahyadri Hospital Nashik"> Sahyadri Hospital Nashik </option>
									<option value="KEM Hospital Pune"> KEM Hospital Pune </option>
									<option value="KEM Hospital Mumbai"> KEM Hospital Mumbai </option>
				</select>
</div>


<br>

<div  class="col-xs-4">
        
        <label > <h6> <b> Select Docotor :- <b> </h6></label>

    </div>

<div  class="col-xs-5">
        
        <input type="text"  class="form-control" name="Doc">

    </div>


<br>
<br>
<input type="submit" name="submit" class="btn btn-large btn-success" value="submit"/>
</div>
							

            </div>
          </div>
        </div>
      </div>
</div>
<br>
					


</div>
</form>
</div>


<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>

  </body>
</html>

