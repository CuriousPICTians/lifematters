<?php
session_start();
?>

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

<body class="w3-theme-l5">
															

<div class="w3-container w3-content" style="max-width:1400px;margin-top:5px">    
 <div class="w3-col m8 ">
      <div class="w3-row-padding ">
        <div class="w3-col m12">
          <div class="w3-card-2 w3-round w3-white">
            <div class="w3-container w3-padding">
  
															<form method="post" action="">
		
															<div  class="col-xs-5">
																				
																			<label> <h6> Enter Patient's Name/E-mail-ID :- </h6></label>
															</div>																			

															
																<div  class="col-xs-3">
																				
																			<input type="text"  class="form-control" placeholder="Enter Organ" name="email">

															</div>

																<input type="submit" class="btn btn-large btn-success" name="submit" value="Search"/>
															


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

</body>
</head>
</html>




<?php

if(isset($_POST['submit']))
{
   
    $email = $_POST['email'];
				$_SESSION['email']=$email;
    
  $con = new MongoClient();


    $database=$con->organ;
    $collection=$database->receiverinfo;
				$collectionD=$database->donorinfo;

 if($cursor = $collection->find(array("email" => $email,"approved" => "0")))
{
 $cursor_count = $cursor->count();
 if($cursor_count)
    ;
 else
    $cursor = $collectionD->find(array("email" => $email,"approved" => "0"));

  //foreach ($cursor as $venue) 
{
?>

<!-- Middle Column -->
    <div class="w3-col m12">
 
      <div class="w3-container w3-card-2 w3-white w3-round w3-margin"><br>
        <img src="img-1/ab.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:100px">
        <span class="w3-right w3-opacity">  </span>
        <h4> Patient information </h4><br>
       <hr>

<table class="table table-responsive bio-table table-bordered table-hover table-condensed" >
														<thead>
																<tr>
																		<th>First Name</th>
																		<th>Middle Name</th>
																		<th>Last Name</th>
																		<th>Gender</th>
																		<th>Birth Date</th>
																		<th>Birth Group</th>
																		<th>Birth Place</th>
																		<th>Mobile NO</th>
																		<th>Address</th>
																		<th>City</th>
																		<th>State</th>
																		<th>Nationality</th>
																		<th>Hospital</th>
																		<th> Donated Organ</th>
																</tr>
														</thead>
														<tbody>
								
																			<?php

																			foreach ($cursor as $venue) 
																						{
																							echo "
																							<tr>
																												<td>{$venue  ['firstname']} </td>
																												<td>{$venue  ['middlename']}</td>
																												<td>{$venue  ['lastname']}</td>
																												<td>{$venue  ['gender']}</td>
																												<td>{$venue  ['day']}  </td>
																												<td>{$venue  ['blood']}</td>
																												<td>{$venue  ['dobplace']}</td>
																												<td>{$venue  ['mobileno']}</td>
																												<td>{$venue  ['address']}</td>
																												<td>{$venue  ['city']}</td>
																												<td>{$venue  ['state']}</td>
																												<td>{$venue  ['nati']}</td>
																												<td>{$venue  ['hospital']}</td>
																												<td>{$venue  ['organ']}</td>
						
																												</tr>
																							";  
																				}
																			?>
  
													</tbody>
					</table>	      
       
        <button type="reset" class="btn btn-large btn-success" onclick="location.href='mdetails.php'"> NEXT </button>
</div>
<?php
    }

    }
else
?>

	<script>
	alert('Successfully ..');
               		
               </script>

<?php
}



?>
