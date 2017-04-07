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
			


	</style>
	
	</head>

	<body  class="w3-theme-l5">
		
				 

<div class="w3-container w3-content" style="max-width:1400px;margin-top:5px">    
 <div class="w3-col m8 ">
      <div class="w3-row-padding ">
        <div class="w3-col m12">
          <div class="w3-card-2 w3-round w3-white">
            <div class="w3-container  w3-padding ">

              	<form method="post" action="">

															<div  class="col-xs-4">
																				
																			<label> <h6> Enter Organ & City Name :- </h6></label>
															</div>																			

														
															<div  class="col-xs-3">
																				
																			<input type="text"  class="form-control" placeholder="Enter Organ" name="organ_name">
															</div>

																<div class="col-xs-3">
																		
																			<input type="text" class="form-control"  placeholder="Enter City" name="city">
																</div>

																<input type="submit" class="btn btn-default" name="submit" value="Search"/>
															


						</form>

            </div>
          </div>
        </div>
      </div>
</div>



<br>
<br>


<br>
<br>


<?php


session_start();


 if(isset($_POST['submit']))
													{
  	 
													    $organ_name = $_POST  ['organ_name'];
    													$city= $_POST['city'];
   
						
																$con = new MongoClient();

																						if($con)
																						{
								

																								$database=$con->organ;
																								$collection=$database->donorinfo;

																								if($organ_name=="PancreasorIntestine")
																											$cursor = $collection->find(array('info.city'=>$city ,'organ.pancreas'=>$organ_name));

																								if($organ_name=="PortionofLiver")
																											$cursor = $collection->find(array('info.city'=>$city ,'organ.lportion'=>$organ_name));

																								if($organ_name=="Liver")
																											$cursor = $collection->find(array('info.city'=>$city ,'organ.liver'=>$organ_name));

																								if($organ_name=="Kidney")
																											$cursor = $collection->find(array('info.city'=>$city ,'organ.kidney'=>$organ_name));										
																								
																								echo"Search By :-";
																								echo "$organ_name";  
																								$cursor_count = $cursor->count();
					

																						}
												}


    foreach ($cursor as $venue)
    {

echo"<div id='page-wrapper' >";
echo"<div id='page-inner'>";

echo"<div class='row  form-group' > ";
										echo" <div class='col-md-11'>";

																					echo" <div class='panel panel-default'>";
																																echo"<div class='panel-heading'>";
																																										echo"  Patient information  ";
																															echo"</div>";

																															echo"<div class='panel-body'>";
																																								echo"<div class='table-responsive'>";

																																																		echo "<table width='100%' class='table-hover table-responsive table-bordered table-condensed'>";

																																																										echo "<tr>";
	
																																																																				echo"<th>  First Name </th>";
																																																																				echo"<th>  Middle Name </th> "; 
																																																																				echo"<th> 	Last Name </th> "; 
																																																																				echo"<th>  Gender </th> "; 
																																																																				echo"<th>  Birth Date </th> "; 
																																																																				echo"<th>  Blood Group </th> "; 
																																																																				echo"<th>  Birth Place </th> "; 
																																																																				echo"<th>  Mobile Number </th> "; 
																																																																				echo"<th>  Address </th> "; 
																																																																				echo"<th>  City </th> "; 
																																																																				echo"<th>  State </th> "; 
																																																																				echo"<th>  Hospital </th> "; 
																																																																				echo"<th> 	Donated Organ </th> "; 
																																																																				echo"<tr>";
																																																																													echo" <td>".$venue ['info']['firstname'] . "</td>"; 
																																																																													echo" <td>".$venue ['info']['middlename'] . "</td>";
																																																																													echo" <td>".$venue ['info'] ['lastname']. "</td>";
																																																																												 echo"	<td>".$venue ['info'] ['gender'] ." </td>";
																																																																													echo" <td>".$venue ['info'] ['day'] .$venue ['info'] ['month'] .$venue ['info'] ['year']. "</td>";
																																																																													echo" <td>".$venue ['info'] ['blood'] ." </td>";
																																																																													echo"<td>".$venue ['info'] ['dobplace']." </td>";
																																																																													echo"<td>".$venue ['info'] ['mobileno']. "</td>";
																																																																													echo"<td>".$venue ['info'] ['address']. "</td>";
																																																																													echo"<td>".$venue ['info'] ['city']." </td>";
																																																																													echo"<td>".$venue ['info'] ['state']." </td>";
																																																																													echo"<td>".$venue ['hospital'] ['hospital']." </td>";
																																																																													echo"<td>".$venue ['organ'] ['kidney'] .$venue ['organ'] ['liver'] .$venue ['organ'] ['lportion'] .$venue ['organ'] ['pancreas']." </td>";
								
																																																																				echo" </tr>";
																																																																			


																																																										echo "</tr>";
																																																echo"</table>";


																																								echo"</div>";
																																		echo"</div>";
																								echo"</div>";
													echo"</div>";




										
echo"</div>";

echo"</div>";
echo"</div>";



}


?>

		
</body>
</html>   

