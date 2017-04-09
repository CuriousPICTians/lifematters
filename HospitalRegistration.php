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


<body class="w3-theme-l5">



<!-- Navbar on small screens -->

<div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">My Profile</a>
</div>

<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1300px;margin-top:10px">    
  <!-- The Grid -->
  <div class="w3-row">



    <!-- Left Column -->
    <div class="w3-col m4">
      

							 <div class="w3-card-2 w3-round w3-white">
        <div class="w3-container">

<form method="post" action="">
         
<table class="table table-condensed table-responsive " >
    <thead>
      <tr>
        
												<tr><th class="w3-center" colspan="2">Hospital Details </th></tr>
            <tr>
                <td>
                    <span id="Label1"> Name of the Hospital :- </span><span style="color:Red">*</span>
                </td>
                <td >
                    <input name="hospital_name" type="text"  class="form-control" style="width:250px;" />
                  
                </td>
            </tr>
<tr>
                <td>
                    <span id="Label2">Address </span><span style="color:Red">*</span>
                    </td>
                <td>
                    <input name="address" type="text" class="form-control" style="width:250px;" />
   
                </td>
            </tr>
<tr>
                <td>
                    <span id="Label2"> State </span><span style="color:Red">*</span>
                    </td>
                <td>
                    <input name="state" type="text" class="form-control" style="width:250px;" />
   
                </td>
            </tr>
<tr>
                <td>
                    <span id="Label2"> City </span><span style="color:Red">*</span>
                    </td>
                <td>
                    <input name="city" type="text" class="form-control" style="width:250px;" />
   
                </td>
            </tr>
<tr>
                <td>
                    <span id="Label5">Phone No.</span><span style="color:Red">*</span>
                    </td>
                <td>
   																 <input name="phno" type="text" value="" maxlength="10" class="form-control" style="width:250px;" />
             						 
                </td>
            </tr>
            <tr>
                <td>
                    <span id="Label6"> EMail ID </span><span style="color:Red">*</span>
                    <br />
                    <small>(Mail will be sent to this email id)</small></td>
                <td>
                    <input name="email" type="text" class="form-control" style="width:250px;" />
                    
                </td>
            </tr>
            <tr>
                <td>
                    <span id="Label7"> WebSite Address </span>
                </td>
                <td>
                    <input name="website" type="text" class="form-control" style="width:250px;" />
                </td>
            </tr>



</thead>
</table>


        </div>
      </div> 
      <hr>
    
      
    
    <!-- End Left Column -->
    </div>
    






    <!-- Middle Column -->
    <div class="w3-col m4">
    
      
      
      <div class="w3-container w3-card-2 w3-white w3-round w3-margin"><br>
        


         <table class="table table-condensed table-responsive">
    <thead>
      

            <tr><th class="w3-center" colspan="2">  Doctor's Details :- </th></tr>
            <tr><th class="w3-center" colspan="2" align="left"> Doctor 1</th></tr>
            <tr>
                <td>Name<span style="color:Red">*</span></td>
                <td>
                    <input name="dname1" type="text" class="form-control" style="width:250px;" />
                    
                </td>
            </tr>
            <tr>
                <td>
                    <span id="Label13">E-mail</span><span style="color:Red">*</span>
                    </td>
                <td>
                    <input name="demail1" type="text" class="form-control" style="width:250px;" />
                    
                </td>
            </tr>
            <tr>
                <td>
                    <span id="Label21">Phone Number </span><span style="color:Red">*</span>
                </td>
                <td>
           									 <input name="dphno1" type="text" value="" maxlength="10" class="form-control" style="width:250px;" />
                   
                </td>
            </tr>
</thead>
</table>
</div>


<div class="w3-container w3-card-2 w3-white w3-round w3-margin"><br>
        


         <table class="table table-condensed table-responsive">
    <thead>
            <tr><th class="w3-center" colspan="2" align="left"> Doctor 2</th></tr>
            <tr>
                <td>
                    Name
                </td>
                <td>
                    <input name="dname2" type="text" class="form-control" style="width:250px;" />
                </td>
            </tr>
            <tr>
                <td>
                    <span id="Label25">E-mail</span>
                </td>
                <td>
                    <input name="demail2" type="text" class="form-control" style="width:250px;" />
                </td>
            </tr>
            <tr>
                <td>
                    <span id="Label26"> Phone Number </span>
                </td>
                <td>
             <input name="dphno2" type="text" value="" maxlength="10" class="form-control" style="width:250px;" />
                   
                </td>
            </tr>
</thead>
</table>
</div>
<hr>

    </div>
    <!-- Right Column -->
    

    <div class="w3-col m4">

<div class="w3-card-2 w3-round w3-white">
        <div class="w3-container">

<table class="table table-condensed table-responsive " >
    <thead>

<tr><th class="w3-center" colspan="2"> Director / Medical Superintendent of Hospital</th></tr>
            <tr>
                <td>
                    Name<span style="color:Red">*</span>
                </td>
                <td>
                    <input name="diname" type="text" class="form-control" style="width:250px;" />
                   
                </td>
            </tr>
            <tr>
                <td>
                    <span id="Label8">Phone</span><span style="color:Red">*</span>
                </td>
                <td>
             <input name="diph" type="text" value="" maxlength="10" class="form-control" style="width:250px;" />
                  </td>
            </tr>
            
            <tr>
                <td>
                    <span id="Label9">E-mail </span><span style="color:Red">*</span>
                   </td>
                <td class="style3">
                    <input name="diemail" type="text" class="form-control" style="width:250px;" />
                    
                </td>
            </tr>
</thead>
</table>
</div>
</div>
      
<hr> 

<div class="w3-card-2 w3-round w3-white w3-center">
        <div class="w3-container">
          <table class="table table-condensed table-responsive "  >
    <thead>
      
 <tr><th class="w3-center" colspan="2">  Types of transplant being done in your hospital</th></tr>
        <tr>
            <td>
                <span id="Label38" style="font-weight: 700"> </span>
            </td>
            <td class="style3">
                <span id="Label40" style="font-weight: 700">Transplant License for organs</span>
            </td>
        </tr>
        
        
        <tr>
            <td>
                <span id="Label39">Liver</span>
                <span style="color:Red">*</span></td>
            <td >
                <table id="LiverLicense" border="0">
	<tr>
		<td><input id="LiverLicense_0" type="radio" name="LiverLicense" value="Liver" /><label for="LiverLicense_0">Yes</label>
	</td><td><input id="LiverLicense_1" type="radio" name="LiverLicense" value="" checked="checked" /><label for="LiverLicense_1">No</label></td>
	</tr>
</table>
            </td>
        </tr>
        <tr>
            <td>
                <span id="Label41">Kidney</span>
                <span style="color:Red">*</span></td>
            <td>
                <table id="KidneyLicense" border="0">
	<tr>
		<td><input id="KidneyLicense_0" type="radio" name="KidneyLicense" value="Kidney" checked="checked" /><label for="KidneyLicense_0">Yes</label>
</td><td><input id="KidneyLicense_1" type="radio" name="KidneyLicense" value="" /><label for="KidneyLicense_1">No</label></td>
	</tr>
</table>
            </td>
        </tr>
        <tr>
            <td>
                <span id="Label42">Heart  </span>
                <span style="color:Red">*</span></td>
            <td>
                <table id="HeartLicense" border="0">
	<tr>
		<td><input id="HeartLicense_0" type="radio" name="HeartLicense" value="Heart" /><label for="HeartLicense_0">Yes</label>
</td><td><input id="HeartLicense_1" type="radio" name="HeartLicense" value="" checked="checked" /><label for="HeartLicense_1">No</label></td>
	</tr>
</table>
            </td>
        </tr>
        <tr>
            <td>
                <span id="Label43">Lungs  </span>
                <span style="color:Red">*</span></td>
            <td>
                <table id="LungsLicense" border="0">
	<tr>
		<td><input id="LungsLicense_0" type="radio" name="LungsLicense" value="Lungs" /><label for="LungsLicense_0">Yes</label>
</td><td><input id="LungsLicense_1" type="radio" name="LungsLicense" value="" checked="checked" /><label for="LungsLicense_1">No</label></td>
	</tr>
</table>
            </td>
        </tr>

       <tr><td colspan="2" align="center" style="padding:10px 0 0 0">
         <!input type="submit" name="btn_Confirm" value="Confirm" onclick="" class="ui-button ui-button-text-only ui-widget ui-state-default ui-corner-all" style="width:150px;" />
<input type="submit" name="submit" value="submit"/>

        </td></tr>
        				        
      </tr>

           
</thead>
</table>
</div>
</div>      
<hr>

 
    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
<!-- End Page Container -->
</div>
<br>

</body>
</html>

<?php

if(isset($_POST['submit']))
{
    $hospital_name=$_POST['hospital_name'];
    $address=$_POST['address'];
    $state=$_POST['state'];
    $city=$_POST['city'];   
    $phno=$_POST['phno'];
    $email=$_POST['email'];
    $website=$_POST['website'];
    $dname1=$_POST['dname1'];
    $demail1=$_POST['demail1'];
    $dphno1=$_POST['dphno1'];
    $dname2=$_POST['dname2'];
    $demail2=$_POST['demail2'];
    $dphno2=$_POST['dphno2'];
    $diname=$_POST['diname'];
    $diph=$_POST['diph'];
    $diemail=$_POST['diemail'];
    $LiverLicense=$_POST['LiverLicense'];
    $KidneyLicense=$_POST['KidneyLicense'];
    $HeartLicense=$_POST['HeartLicense'];
    $LungsLicense=$_POST['LungsLicense'];
    $_SESSION['status']="Pending";

  $con = new MongoClient();

  if($con)
  {
    

    $database=$con->organ;
    $collection=$database->hospitalinfo;
    
    //$data=array('session'=>array('colg'=>$colg,'class'=>$class));
        $data=array('flag'=>'0','hospital_name'=>$hospital_name,'address'=>$address,'state'=>$state,'city'=>$city,
          'phno'=>$phno,'email'=>$email,'website'=>$website,'dname1'=>$dname1,'demail1'=>$demail1,'dphno1'=>$dphno1,'dname2'=>$dname2,
          'demail2'=>$demail2,'dphno2'=>$dphno2,'diname'=>$diname,'diph'=>$diph,'diemail'=>$diemail,'LiverLicense'=>$LiverLicense,
										'KidneyLicense'=>$KidneyLicense,'HeartLicense'=>$HeartLicense,'LungsLicense'=>$LungsLicense,'status'=>$_SESSION['status']);


       $collection->insert($data);
         
 //$collection->update (array("name" => $_SESSION['name'] ), array ('$set' => array(collage=> $data)));

?>
                <script>alert('Successfully..!! Please Login '); window.location.href="HospitalLogin.php";
                </script>

<?php
 
    }
    else
      die("Database could not not connected");
}
?>
