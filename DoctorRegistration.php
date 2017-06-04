<!DOCTYPE html>

<?php

session_start();
$_SESSION['email'];

?>


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

<!--  jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

<!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="bootstrap-datepicker/css/bootstrap-datepicker3.css"/>

</head>

<style>




</style>

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

$(document).ready(function(){
      var date_input=$('input[name="day1"]'); //our date input has the name "date"
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

	<body class="w3-content" style="max-width:1000px">


<div class="container-fluid" >

        <form class="form-horizontal" method="post" action="">
         
				 <fieldset>
       
          <div id="edit_farmer" style=""></div>
 
         <div class="row">
            <div class="col-md-4 panel panel-heading"><h4><b> Personal Information :- </b></h4></div>
            <div class="col-md-4 panel panel-heading" style="" id="contact_error"></div>
          </div>

          <div class="row form-group">
		
            <label class="col-md-2 control-label" for="first_name">First Name :-</label>  
							            <div class="col-md-2">
																	<input  name="fname"  class="form-control input-md-2" placeholder="First Name" style="text-transform:uppercase" value="" type="text" required> 
																		</div>

            <label class="col-md-2 control-label" for="middle_name">Middle Name :-</label>  
            							<div class="col-md-2">
																	<input  name="mname"  class="form-control input-md-2" placeholder="Middle Name" style="text-transform:uppercase" value="" type="text" required> 
																			</div>

            <label class="col-md-2 control-label" for="last_name">Last Name :-</label>  
							            <div class="col-md-2">
																	<input  name="lname"  class="form-control input-md-2" placeholder="Last Name" style="text-transform:uppercase" value="" type="text" required> 
           							</div>
          </div>

         
    <div class="row form-group">

						<label class="col-md-2 control-label" for="smartphone"> Phone Number :-  </label>
       				 <div class="col-md-2">
								<input  name="docphno"  maxlength="10" minlength="10" placeholder="phone NO" class="form-control input-md-2" value="" type="text" required> 
						</div>

						
	

<?php

		//session_start();
   
	$con = new MongoClient();

  if($con)
  {
    

    $database=$con->organ;
    $collection2=$database->hospitalinfo;


    $cursor2 = $collection2->find();
    $cursor_count = $cursor2->count();
	}


?>
  	<label class="col-md-2 control-label" ><b> Select Hospital:- </b> </label>
  	<div class="col-md-2">


 		<select name="Hos"  class="form-control" >
			<?php 

				foreach ($cursor2 as $venue) 
				{
				?>
					<?php echo	"<option value= " .$venue['email']. " >" .$venue['email']. "</option>"; ?>\
				
				<?php
				}
				?>				
		</select>
	</div>

<br>

						<!--<label class="col-md-2 control-label" > Hospital :- </label>
							<div class="col-md-2">
								<div class="input-group">
							    <select id="sms" name="dochospital" class="form-control input-md" required>
						      <option value="Sahyadri Hospital Pune"> Sahyadri Hospital Pune </option>
						      <option value="Sankriti Hospital Pune"> Sankriti Hospital Pune </option>
						      <option value="Aditya Birla Hospital Pune"> Aditya Birla Hospital Pune </option>
						      <option value="Sahyadri Hospital Nashik"> Sahyadri Hospital Nashik </option>
						      <option value="KEM Hospital Pune"> KEM Hospital Pune </option>
						      <option value="KEM Hospital Mumbai"> KEM Hospital Mumbai </option>
							    </select>
								</div>
							</div>-->

		<label class="col-md-2 control-label" for="first_name"> Permanent Address:-</label>  
		<div class="col-md-2">
				<textarea name="paddress" class="form-control" rows="3" id="emergency2" placeholder="Address" required></textarea>
		</div>
</div>



<div class="row">
            <div class="col-md-5 panel panel-heading"><h4><b> Registration and Qualification Information :- </b> </h4>   </div>
            <div class="col-md-5 panel panel-heading" style="display:none; color:red" id="address_error"></div>
          </div>

<div class="row form-group">
		
		<label class="col-md-2 control-label" for="first_name"> Registration NO :-</label>  
		<div class="col-md-2">
					<input  name="grno"  class="form-control input-md-2" maxlength="5" minlength="5"  placeholder="Registration NO" value="" type="text" required> 
		</div>

		<label class="col-md-2 control-label" for="first_name"> Date of Reg. :-</label>  
		<div class="col-md-2">
				<input name="day" type="text" class="form-control" placeholder="DD-MM-YY" tabindex="" required>
		</div>

<label class="col-md-2 control-label" > State Medical Council:-</label>
		<div class="col-md-2">
		<div class="input-group">
		 <select id="sms" name="medicalcouncil" class="form-control input-md" required>
		  <option value="maharashtra Medical Council"> maharashtra Medical Council </option>
		 </select>
		</div>
		</div>

</div>

<div class="row form-group">
		
		<label class="col-md-2 control-label" for="first_name"> Qualification :-</label>  
		<div class="col-md-2">
					<input  name="qualifi"  style="text-transform:uppercase" class="form-control input-md-2" placeholder="Qualification" value="" type="text" required> 
		</div>

		<label class="col-md-2 control-label" for="first_name"> Qualification Year :-</label>  
		<div class="col-md-2">
				<input name="day1" type="text" class="form-control" placeholder="Qualification Year"  required>
		</div>


<label class="col-md-2 control-label" for="first_name"> University Name :-</label>  
		<div class="col-md-2">
				<input name="univername" type="text" placeholder="University Name" class="form-control" required>
		</div>

</div>


<div class="row form-group">
		
		

	
</div>

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
    $dochospital=$_POST['dochospital'];   
    $grno=$_POST['grno'];
    $day=$_POST['day'];
    $medicalcouncil=$_POST['medicalcouncil'];
    $qualifi=$_POST['qualifi'];  
    $day1=$_POST['day1'];
    $univername=$_POST['univername'];
    $paddress=$_POST['paddress'];
    $Hos=$_POST['Hos'];
    $_SESSION['status']="Pending";


$con = new MongoClient();

  if($con)
  {
    

    $database=$con->organ;
    $collection=$database->docinfo;
    
    //$data=array('session'=>array('colg'=>$colg,'class'=>$class));
 $data=array('fname'=>$fname,'mname'=>$mname,'lname'=>$lname,'docphno'=>$docphno,'dochospital'=>$dochospital,'grno'=>$grno,
'day'=>$day,'medicalcouncil'=>$medicalcouncil,'qualifi'=>$qualifi,'day1'=>$day1,'univername'=>$univername,'Hos'=>$Hos,'paddress'=>$paddress,'status'=>$_SESSION['status']);


       $collection->update(array("email" => $_SESSION['email']),array('$set' =>$data));
       //$collection->update('$set' => $data);
         
 //$collection->update (array("name" => $_SESSION['name'] ), array ('$set' => array(collage=> $data)));

?>
                <script>alert('Successfully..!! Please Login '); window.location.href="DocLogin.php";
                </script>

<?php
 
    }
    else
      die("Database could not not connected");
}
?>
