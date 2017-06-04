<?php
session_start();

if(isset($_POST['submit']))
{
    $firstname=$_POST['firstname'];
    $middlename=$_POST['middlename'];
    $lastname=$_POST['lastname'];
    $gender=$_POST['gender'];   
    $day=$_POST['day'];
    $blood=$_POST['blood'];
    $dobplace=$_POST['dobplace'];
    $mobileno=$_POST['mobileno'];
    //$email=$_POST['email'];
    $adharno=$_POST['adharno'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $nati=$_POST['nati'];
    $zipcode=$_POST['zipcode'];


  $con = new MongoClient();

  if($con)
  {
    

    $database=$con->organ;
    $collection=$database->receiverinfo;
    
        $data=array('firstname'=>$firstname,'middlename'=>$middlename,'lastname'=>$lastname,'gender'=>$gender,
          'day'=>$day,'blood'=>$blood,'dobplace'=>$dobplace,'mobileno'=>$mobileno,'adharno'=>$adharno,
          'address'=>$address,'city'=>$city,'state'=>$state,'nati'=>$nati,'zipcode'=>$zipcode);


           $collection->update(array("email" => $_SESSION['email']),array('$set' =>  $data));
         

?>
                <script>alert('Successfully!!!');
                </script>

<?php
 
    }
    else
      die("Database could not not connected");
}
?>

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

<body>
<form method="post" action="RecieverRegComplete.php">





<div class="container" style="max-width:700px;margin-top:50px>

<div class="w3-col m7">
    
      <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card-2 w3-round w3-white">
            <div class="w3-container w3-padding">
              <br>
              <h6 class="w3-center"> <b>Please Select Organ and Hospital </b></h6>
														<hr>
              <div class="form-inline">
																		<label for="ex2"> <b>Select Which Organs You want to Donate :- </b> </label>	&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;&nbsp;										
																		<select name="organ" class="form-control" style="width:220px;">

																						<option value="1">Kidney</option>
																						<option value="2"> Liver</option>
																						<option value="3">Heart</option>
									
																	</select>
														</div>

												<br>
												
<?php

   
	$con = new MongoClient();

  if($con)
  {
    

    $database=$con->organ;
    $collection=$database->hospitalinfo;


    $cursor = $collection->find();
    $cursor_count = $cursor->count();
	}


?>
			<div class="form-inline">
  	<label><b>Select Nearest Hospital For Primary Checkup:- </b> </label>	&nbsp;&nbsp;					
 			<select name="hospital"  class="form-control" style="width:220px;">

									
<?php 

foreach ($cursor as $venue) 
{

?>
						<?php echo	"<option value= " .$venue['hospital_name']. " >" .$venue['hospital_name']. "</option>"; ?>\


<?php
}
?>				
				</select>
</div>

<br>
       
<?php

   
	$con = new MongoClient();

  if($con)
  {
    

    $database=$con->organ;
    $collection=$database->docinfo;


    $cursor = $collection->find();
    $cursor_count = $cursor->count();
	}


?>

<div class="form-inline">

		<label for="ex2"> <b>Select Doctor :- </b> </label>	&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;											
		<select name="Doc" class="form-control" style="width:220px;">

<?php 

foreach ($cursor as $venue) 
{

?>
						<?php echo	"<option value= " .$venue['email']. " >" .$venue['email']. "</option>"; ?>\


<?php
}
?>									
		</select>

</div>


<hr>
												<input type="submit" name="submit" class="btn btn-large btn-success" value="submit"/>
            </div>
          </div>
        </div>
      </div>




</div>
</form>
</body>
</html>



