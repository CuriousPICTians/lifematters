<?php
session_start();

echo $_SESSION['email'];


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
	<html>

	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<!-- Latest compiled JavaScript -->
		<script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
		
<head>	

<style>
  	
		
	#section {
    		width:550px;
    		float:left;
    		padding:10px;	
 	 
		}

		
</style>  
</head>


<body>
<form method="post" action="RecieverRegComplete.php">

<div class="container">

				<b><h4>Select which Organ you want ?</h4></b>
							</br>

															&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
															<input type="checkbox" name="kidney" value="kidney"> Kidney 
															&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
															&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
															&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
															&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
															
															<input type="checkbox" name="heart" value="heart"> Heart</br></br>
															&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

															<input type="checkbox" name="eyes" value="eyes"> Eyes
															&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
															&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
															&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
															&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
															&nbsp;&nbsp;
															<input type="checkbox" name="bones" value="bones"> Bones</br></br>
															&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

															<input type="checkbox" name="lportion" value="PortionofLiver"> A Portion of the Liver
															&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
															&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;			

															<input type="checkbox" name="pancreas" value="PancreasIntestine"> Pancreas or Intestine</br></br>
															&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


				<b>	Select Nearest Hospital For Primary Checkup :- </b> &nbsp;&nbsp;&nbsp;&nbsp; 
									
															<select name="hospital">
																				<option value="Sahyadri Hospital Pune">Sahyadri Hospital Pune</option>
																				<option value="Sankriti Hospital Pune"> Sankriti Hospital Pune</option>
																				<option value="Aditya Birla Hospital Pune">Aditya Birla Hospital Pune</option>
																				<option value="Sahyadri Hospital Nashik">Sahyadri Hospital Nashik</option>
																				<option value="KEM Hospital Pune">KEM Hospital Pune</option>
																				<option value="KEM Hospital Mumbai">KEM Hospital Mumbai</option>
															</select>
													<br>
					
						<p>----------------------------------------------------------------------
									-------------------------------------------------</p>

					<input type="submit" name="submit" class="btn btn-default" value="submit"/>

</div>
</form>
</body>
</html>



