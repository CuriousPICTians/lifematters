 <!DOCTYPE html>
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
    $collection=$database->donorinfo;
    
    //$data=array('session'=>array('colg'=>$colg,'class'=>$class));
        $data=array('firstname'=>$firstname,'middlename'=>$middlename,'lastname'=>$lastname,'gender'=>$gender,
          'day'=>$day,'blood'=>$blood,'dobplace'=>$dobplace,'mobileno'=>$mobileno,'adharno'=>$adharno,
          'address'=>$address,'city'=>$city,'state'=>$state,'nati'=>$nati,'zipcode'=>$zipcode);


       $collection->update(array("email" => $_SESSION['email']),array('$set' => array('info' => $data)));
         
 //$collection->update (array("name" => $_SESSION['name'] ), array ('$set' => array(collage=> $data)));

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

<title> Registration </title>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.min.css">


	
	<!-- Latest compiled JavaScript -->
		<script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="w3.css">

<style>
  
    #nav 
    {
      line-height:10px;
      background-color:#eeeeee;
      height:480px;
      width:200px;
      float:left;
      color:red;
      padding:5px;
      padding-top:20px;
      margin-top: 0px;        
  }

  #section 
  {
      width:500px;
      float:left;
      padding:10px; 
   
  }

  #footer 
  {
      background-color:black;
      color:white;
      clear:both;
      text-align:center;
      padding:1px;     
  }

  .jumbotron
  {
    height:20px;
    display: flex;
    align-items: center;

  }
  .right {
    float: right;
    
    margin-right: 50px;
    padding: 30px;
}

</style>  
</head>

<body>


<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:700px;margin-top:20px">    

  <!-- The Grid -->
  <div class="w3-row">
   

    <!-- End Left Column -->
    </div>
          
      <div class="w3-container w3-card-2 w3-white w3-round w3-margin"><br>
         <h4 class="text-center"> <b>Select Donor Type :</b> </h4><br>
														 <hr class="w3-clear">						
							
								<span class="w3-right w3-opacity">  </span>
       

												<div class="w3-row-padding" style="margin:0 -16px">
            <div class="w3-half">
															
              <a href="Type1.php"><img src="img/22.png" alt="Boss" style="width:20%" class="w3-circle w3-hover-opacity"></a>
															<h5> Alive Donor </h5>	
            </div>
            <div class="w3-half">
              <a href="Type2.php"><img src="img/44.png" alt="Boss" style="width:20%" class="w3-circle w3-hover-opacity"></a>
														<h5> Death Donor </h5>
          </div>
        </div>
        
      </div>
      
    
  <!-- End Grid -->
  </div>
  
<!-- End Page Container -->
</div>



<!--
<div class="container-fluid">
			
											<!-- Team Container 
																			<div class="w3-container w3-padding-64" id="team">
																			
																										<h2> <b>Select Donor Type </b></h2>
																								
																										<div class="w3-row"><br>

																																	<div class="w3-quarter w3-padding-64  " >
																																			<a href="Type1.php" > <img src="img/22.png" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
																																			<h4> Alive Donor </h4>
																																	</div>

																																	<div class="w3-quarter w3-padding-64 ">
																																					<a href="Type2.php" ><img src="img/44.png" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
																																				<h4> Death Donor </h4>
																																	</div>

																												</div>

																							</div>


</div>-->

</body>
</html>
