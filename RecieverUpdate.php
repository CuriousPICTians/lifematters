<!DOCTYPE html>
<html lang="en">

<head>

<title> Registration </title>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.min.css">


<!--  jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

<!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

	
		<!-- W3.CSS is a modern CSS framework -->		
		<link rel="stylesheet" href="w3.css">

<link rel="stylesheet" href="w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>   

   li:hover {
    background-color: #C8C8C8 ;
}
 .blue {
    color: green;
}
      form {
          padding-left: 20px;
          padding-right: 10px;
      }
.b
{
    margin-bottom:30px;

}


</style>  
</head>

<script>
    $(document).ready(function(){
      var date_input=$('input[name="day"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'dd-MM-yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
    })
</script>


<body >


<?php

session_start();

  $con = new MongoClient();


    $database=$con->organ;

    $collection=$database->receiverinfo;


 $cursor = $collection->find(array("email" => $_SESSION['email']));

 $cursor_count = $cursor->count();

 if($cursor_count)

  foreach ($cursor as $venue) 
{
?>

<div class="container-fluid" style="margin-top:50px;max-width:1100px">
        <form class="form-horizontal" method="post" action="">
         
				 <fieldset>
       
          <div id="edit_farmer" style="display:none"></div>
 
         <div class="row">
            <div class="col-md-4 panel panel-heading"><h4><b> Personal Information </b></h4></div>
            <div class="col-md-4 panel panel-heading" style="display:none; color:red" id="contact_error"></div>
          </div>

          <div class="row form-group">
		
            <label class="col-md-2 control-label" for="first_name">First Name :-</label>  
							            <div class="col-md-2">
																	<?php						echo" <input  name='firstname'  class='form-control input-md-2' value=".$venue ['firstname']. " type='text'> "; ?>
																		</div>

            <label class="col-md-2 control-label" for="middle_name">Middle Name :-</label>  
            							<div class="col-md-2">
																							<?php  echo" <input name='middlename' class='form-control input-md' value =" .$venue ['middlename']. " type='text'> "; ?>           												 
																			</div>

            <label class="col-md-2 control-label" for="last_name">Last Name :-</label>  
							            <div class="col-md-2">
																							<?php echo "<input name='lastname' class='form-control input-md' value=" .$venue ['lastname']. " type='text' >"; ?>
           							</div>
          </div>

         
          <div class="row form-group">
						
												<label class="col-md-2 control-label" for="smartphone"> Gender:-  </label>
           									 <div class="col-md-2">
																										 <?php  echo" <input name='gender' class='form-control input-md' value =" .$venue ['gender']. " type='text'> "; ?>   
            									</div>

           <!-- <label class="col-md-2 control-label" for="smartphone"> Gender:-  </label>
           									 <div class="col-md-2">
		
																										 <select name="gender" class="form-control" >

																										<?php				echo"	<option value='Select'>" .$venue ['gender']. "</option> "; ?>
																															<option value="male"> Male </option>
																															<option value="femalw">Female </option>
																															<option value="other">Other </option>
																											</select>
																									</select>
            									</div>-->

													<label class="col-md-2 control-label" for="last_name"> Birth Date :-</label>  
							            <div class="col-md-2">
																							<?php  echo" <input name='day' class='form-control input-md' value=".$venue  ['day'].$venue  ['month'].$venue  ['year']. " type='text'>"; ?>
           							</div>

												<label class="col-md-2 control-label" for="smartphone"> Blood Group :-  </label>
           									 <div class="col-md-2">
																										 <?php  echo" <input name='blood' class='form-control input-md' value =" .$venue ['blood']. " type='text'> "; ?>   
            									</div>
													<!-- <label class="col-md-2 control-label" for="smartphone"> Blood Group:-  </label>
           									 <div class="col-md-2">
		
																										 <select name="blood" class="form-control">

																															<?php echo"<option value='Select'>" .$venue ['blood']. "</option>"; ?>
																															<option value="A+">A+</option>
																															<option value="A-">A-</option>
																															<option value="B+">B+</option>
																															<option value="B-">B-</option>
																															<option value="O+">O+</option>
																															<option value="O-">O-</option>
																															<option value="AB+">AB+</option>
																															<option value="AB-">AB-</option>
																											</select>
																									</select>
            									</div>-->

																												

          </div>

 <div class="row form-group">
		
            <label class="col-md-2 control-label" for="first_name"> Birth Place :-</label>  
							            <div class="col-md-2">
																							 <?php echo"<input name='dobplace'  class='form-control input-md-2' value=" .$venue ['dobplace']. " type='text'>"; ?>
																		</div>

            <label class="col-md-2 control-label" for="mobile">Contact No :-</label>
            					<div class="col-md-2">
   								 										
              							<?php echo"	<input  maxlength='10' name='mobileno' class='form-control input-md ac_mobile' value=" .$venue ['mobileno']. " type='text'  >"; ?>
		
            					</div>

            <label class="col-md-2 control-label" for="last_name"> Adhar Number :-</label>  
							            <div class="col-md-2">
																							<?php echo" <input name='adharno' class='form-control input-md'  value=" .$venue  ['adharno']. " type='text'>"; ?>
           							</div>
          </div>
										
       

		
          <div class="row">
            <div class="col-md-4 panel panel-heading"><h4><b>Address Information</b> </h4>   </div>
            <div class="col-md-4 panel panel-heading" style="display:none; color:red" id="address_error"></div>
          </div>

          <div class="row form-group">
          
																		
																
								        <label class="col-md-2 control-label" for="street_address">Address:- </label>
								        <div class="col-md-2	">
																				 <?php echo"<textarea class='form-control' name='address'>" .$venue ['address']. " </textarea>"; ?>
					       				 </div>

										       

																	<label class="col-md-2 control-label" for="district"> City / District:- </label>
												       <div class="col-md-2">

										        <?php  echo"<input name='city' class='form-control input-md ac_district' value=" .$venue ['city']. " type='text'>"; ?>
										       </div>

          </div>

          <div class="row form-group">

									        <label class="col-md-2 control-label" for="taluka">State:- </label>  
								        <div class="col-md-2">
								          <?php echo"<input name='state' class='form-control input-md ac_taluka'  value=" .$venue ['state']. " type='text'>"; ?>
								        </div>

								       
								        <label class="col-md-2 control-label" for="PinCode">Pin Code:- </label>  
								        <div class="col-md-2">
								         <?php echo "<input name='zipcode' class='form-control input-md' value=".$venue ['zipcode']. " type='text'>"; ?>
								        </div>

																	<label class="col-md-2 control-label" for="pin_code">  Nationality:-  </label>  
								        <div class="col-md-2">
								         <?php echo "<input name='nati' class='form-control input-md' value=" .$venue ['nati']. " type='text'>"; ?>
								        </div>
	
          </div>


          <div class="row form-group">

          </div>

<?php 
 }


    if(isset($_POST['submit']))
{

    $firstname=$_POST['firstname'];
    $middlename=$_POST['middlename'];
    $lastname=$_POST['lastname'];
    $gender=$_POST['gender'];   
    $bdate=$_POST['day'];
    $blood=$_POST['blood'];
    $dobplace=$_POST['dobplace'];
    $mobileno=$_POST['mobileno'];
    $adharno=$_POST['adharno'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $nati=$_POST['nati'];
    $zipcode=$_POST['zipcode'];


$data=array('firstname'=>$firstname,'middlename'=>$middlename,'lastname'=>$lastname,'gender'=>$gender,
          'day'=>$bdate,'blood'=>$blood,'dobplace'=>$dobplace,'mobileno'=>$mobileno,'adharno'=>$adharno,
          'address'=>$address,'city'=>$city,'state'=>$state,'nati'=>$nati,'zipcode'=>$zipcode);

$cursor=$collection->update(array("email" => $_SESSION['email']),array('$set' => $data));

}
?>
<p> ------------------------------------------------------------------------------------------
				------------------------------------------------------------------------------------------ </p>
          <div class="form-group row">
           
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
