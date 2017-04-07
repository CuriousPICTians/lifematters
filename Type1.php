<!DOCTYPE html>
<html lang="en">

<head>

<title> Registration </title>

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
  
    
</style>  
</head>
<body>

<form method="post" action="livedonor.php">

					<b>Alive Donoer Can Donote Following Orgas Only :-</b>
								
								<br>
								<br>
								<ol>
													<li> Kidney</li>
													<br>
													<li> Liver</li>
													<br>
													<li> A Portion of the Liver</li>
													<br>
													<li> Pancreas or Intestine</li>
								</ol>

					<br>

				<b>Select Which Organs You want to Donate :- </b></br></br>
								
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src="img/Kidney.png" class="img-circle" alt="Cinque Terre" width="40" height="40"> 
									<a href="#" title="About Kidney" data-toggle="popover" data-trigger="hover" data-content="Your kidneys filter wastes from your blood and convert them to urine. 
									When your kidneys stop working you can develop kidney failure. Harmful wastes and fluids build up in your body and your blood pressure may rise. 
									You can live healthily with one kidney.">
								<input type="checkbox" name="kidney" value="Kidney" ></a> Kidney</br></br>

								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;		<img src="img/Liver.png" class="img-circle" alt="Cinque Terre" width="40" height="40"> 
							<a href="#" title="About Liver" data-toggle="popover" data-trigger="hover" data-content="Your liver produces bile to clean out your body. 
							If your liver isn’t working right, you will begin to feel tired, experience nausea, vomiting, decreased appetite, brown urine, 
							or even jaundice - yellowing in the whites of your eyes."> 
							<input type="checkbox" name="liver" value="Liver"></a> Liver</br></br>



								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;		<img src="img/Liver.png" class="img-circle" alt="Cinque Terre" width="40" height="40"> 
							<a href="#" title="About Liver" data-toggle="popover" data-trigger="hover" data-content="You can Donate 25% Portion of Liver and Your liver produces bile to clean out your body. 
							If your liver isn’t working right, you will begin to feel tired, experience nausea, vomiting, decreased appetite, brown urine, 
							or even jaundice - yellowing in the whites of your eyes."> 
							<input type="checkbox" name="lportion" value="PortionofLiver"></a> A Portion of the Liver</br></br>


								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;		<img src="img/Pancreas.png" class="img-circle" alt="Cinque Terre" width="40" height="40"> 
								<a href="#" title="About Pancreas" data-toggle="popover" data-trigger="hover" data-content="Your pancreas is in your abdomen. 
								It produces insulin to control your blood sugar levels. If your pancreas is not working correctly your blood sugar level rises, which can lead to  diabetes.">
								<input type="checkbox" name="pancreas" value="PancreasorIntestine"></a> Pancreas or Intestine</br></br>


						<b>Select Nearest Hospital For Primary Checkup:- </b>&nbsp;&nbsp;&nbsp; 
							
					<select name="hospital"  style="width:200px;">

									<option value="Sahyadri Hospital Pune">Sahyadri Hospital Pune</option>
									<option value="Sankriti Hospital Pune"> Sankriti Hospital Pune</option>
									<option value="Aditya Birla Hospital Pune">Aditya Birla Hospital Pune</option>
									<option value="Sahyadri Hospital Nashik">Sahyadri Hospital Nashik</option>
									<option value="KEM Hospital Pune">KEM Hospital Pune</option>
									<option value="KEM Hospital Mumbai">KEM Hospital Mumbai</option>
				</select>
<br/>
<p>-----------------------------------------------------------------------------------------------------------------</p>

<input type="submit" name="submit" class="btn btn-default" value="submit"/>



</div>
</form>


<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>

  </body>
</html>

