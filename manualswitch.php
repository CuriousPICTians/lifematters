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
				<label> <h6> Enter Patient's E-mail-ID :- </h6></label>
				</div>																			
	
				<div  class="col-xs-3">
				<input type="text"  class="form-control" placeholder="Enter Organ" name="pemail">
				</div>
	
				<button type="reset" class="btn btn-large btn-success" onclick="location.href='kmeansformanual.php'"> NEXT </button>

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

if(isset($_POST['submit']))
{
   
    $pemail = $_POST['pemail'];
	$_SESSION['pemail']=$pemail;
    
  	$con = new MongoClient();


    $database=$con->organ;
    $collection=$database->receiverinfo;
				$collectionD=$database->donorinfo;

	if($cursor = $collection->find(array("email" => $pemail)))
	{
 		$cursor_count = $cursor->count();
 		if($cursor_count);
 		else
    	$cursor = $collectionD->find(array("email" => $pemail));

  //foreach ($cursor as $venue) 
	{
	?>

<!-- Middle Column -->
 

<?php
    
   }

  }

}

?>


</body>
</head>
</html>