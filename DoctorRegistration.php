<!DOCTYPE html>

<?php

session_start();
echo $_SESSION['uname'];

?>

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




</style>


	<body class="w3-content" style="max-width:1000px">


<div class="container-fluid" style="margin-top:50px;">

        <form class="form-horizontal" method="post" action="">
         
				 <fieldset>
       
          <div id="edit_farmer" style=""></div>
 
         <div class="row">
            <div class="col-md-4 panel panel-heading"><h4><b> Personal Information </b></h4></div>
            <div class="col-md-4 panel panel-heading" style="" id="contact_error"></div>
          </div>

          <div class="row form-group">
		
            <label class="col-md-2 control-label" for="first_name">First Name :-</label>  
							            <div class="col-md-2">
																	<input  name="fname"  class="form-control input-md-2" value="" type="text"> 
																		</div>

            <label class="col-md-2 control-label" for="middle_name">Middle Name :-</label>  
            							<div class="col-md-2">
																	<input  name="mname"  class="form-control input-md-2" value="" type="text"> 
																			</div>

            <label class="col-md-2 control-label" for="last_name">Last Name :-</label>  
							            <div class="col-md-2">
																	<input  name="lname"  class="form-control input-md-2" value="" type="text"> 
           							</div>
          </div>

         
          <div class="row form-group">
						
												<label class="col-md-2 control-label" for="smartphone"> Phone Number :-  </label>
           									 <div class="col-md-2">
																	<input  name="docphno"  maxlength="10" minlength="10" class="form-control input-md-2" value="" type="text"> 
            									</div>


													<label class="col-md-2 control-label" for="last_name"> E-mail ID :-</label>  
							            <div class="col-md-2">
																	<input  name="docemail"  class="form-control input-md-2" value="" type="text"> 
           							</div>


										<label class="col-md-2 control-label" > Hospital :- </label>
											<div class="col-md-2">
												<div class="input-group">
																				    <select id="sms" name="dochospital" class="form-control input-md">
																				      <option value="Sahyadri Hospital Pune"> Sahyadri Hospital Pune </option>
																				      <option value="Sankriti Hospital Pune"> Sankriti Hospital Pune </option>
																				      <option value="Aditya Birla Hospital Pune"> Aditya Birla Hospital Pune </option>
																				      <option value="Sahyadri Hospital Nashik"> Sahyadri Hospital Nashik </option>
																				      <option value="KEM Hospital Pune"> KEM Hospital Pune </option>
																				      <option value="KEM Hospital Mumbai"> KEM Hospital Mumbai </option>
																				    </select>
														</div>
												</div>
<br>
<br>

<div class="row ">
		
            <label class="col-md-2 control-label" for="first_name"> G.R.NO :-</label>  
							            <div class="col-md-2">
																	<input  name="grno"  class="form-control input-md-2" maxlength="5" minlength="5"  value="" type="text"> 
																		</div>
</div>

<br>
<br>

<hr>

												<div class="col-md-8 text-center">
              <button type="submit" name="submit" value="submit" class="btn btn-large btn-success"> Save Information</button>
              <button class="btn btn-large btn-danger" type="button" onclick=history.go(-1)> Cancel </button>
            </div>
          </div>

          </fieldset>
        </form>
      </div>

   
</body>
</html>

<?php

if(isset($_POST['submit']))
{
    $fname=$_POST['fname'];
				$mname=$_POST['mname'];
				$lname=$_POST['lname'];
    $docphno=$_POST['docphno'];
    $docemail=$_POST['docemail'];
    $dochospital=$_POST['dochospital'];   
    $_SESSION['status']="Pending";
    $grno=$_POST['grno'];
  
$con = new MongoClient();

  if($con)
  {
    

    $database=$con->organ;
    $collection=$database->docinfo;
    
    //$data=array('session'=>array('colg'=>$colg,'class'=>$class));
        $data=array('fname'=>$fname,'mname'=>$mname,'lname'=>$lname,'docphno'=>$docphno,'docemail'=>$docemail,'dochospital'=>$dochospital,'grno'=>$grno,'status'=>$_SESSION['status']);


       $collection->update(array("email" => $_SESSION['email']),array('$set' =>$data));
       //$collection->update('$set' => $data);
         
 //$collection->update (array("name" => $_SESSION['name'] ), array ('$set' => array(collage=> $data)));

?>
                <script>alert('Successfully..!! Please Login '); window.location.href="DoctorLogin.php";
                </script>

<?php
 
    }
    else
      die("Database could not not connected");
}
?>
