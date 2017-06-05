	<!DOCTYPE html>
	
	<?php

  session_start();
?>
	<html lang="en">
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


<!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="bootstrap-datepicker/css/bootstrap-datepicker3.css"/>


<link rel="stylesheet" href="w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	
	<style>
			
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}

/* edit profile css*/

.hve-pro {    background-color:rgb(255, 102, 0);padding: 5px; width:100%; height:auto;float:left;}
.hve-pro p {float: left;color:#fff;font-size: 15px;text-transform: capitalize;padding: 5px 20px;font-family: 'Noto Sans', sans-serif;}
h2.register { padding:10px 25px; text-transform:capitalize;font-size: 25px;color: rgb(255, 102, 0);}
.fom-main { overflow:hidden;}

legend {font-family: 'Bitter', serif;color:#ff3200;border-bottom:0px solid;}
.main_form {background-color: #;}
label.control-label {font-family: 'Noto Sans', sans-serif;font-weight: 100; margin-bottom:5px !important; 
text-align:left !important; text-transform:uppercase; color:#798288;}
.submit-button {color: #fff;background-color:rgb(255, 102, 0);width:190px;border: 0px solid;border-radius: 0px; transition:all ease 0.3s;margin: 5px;
float:left;}
.submit-button:hover, .submit-button:focus {color: #fff;background-color:rgb(0, 4, 51);}
.hint_icon {color:#ff3200;}
.form-control:focus {border-color: #ff3200;}
select.selectpicker { color:#99999c;}
select.selectpicker option { color:#000 !important;}
select.selectpicker option:first-child { color:#99999c;}
.input-group { width:100%;}
.uplod-picture {width: 100%; background-color:#;color: #fff; padding:20px 10px;margin-bottom:10px;}
.uplod-file {position: relative;overflow: hidden;color: #fff;background-color: rgb(0, 4, 51);border: 0px solid #a02e09;border-radius: 0px;
 transition:all ease 0.3s;margin: 5px;}
.uplod-file input[type=file] {position: absolute;top: 0;right: 0;min-width: 100%;min-height: 100%;font-size: 100px;text-align: right;
filter: alpha(opacity=0);opacity: 0;outline: none;background: white;cursor: inherit;display: block;}
.uplod-file:hover, .uplod-file:focus {color: #fff;background-color:rgb(255, 102, 0);}
h4.pro-title { font-size:24px; color:rgba(0, 4, 51, 0.96); text-transform:capitalize; text-align:justify;padding: 10px 15px;font-family: 'Bitter', serif;}
.bio-table { width:75%;border:0px solid;}
.bio-table td {text-transform: capitalize;text-align: left;font-size: 15px;}
.bio-table>tbody>tr>td { border:0px solid;text-transform: capitalize;color: rgb(0, 4, 51); font-size:15px;}
.responsiv-table { border:0px solid;}
.nav-menu li a {margin: 5px 5px 5px 5px;position: relative;display: block;padding: 10px 50px;border: 0px solid !important;box-shadow: none !important;
background-color: rgb(0, 4, 51) !important;color: #fff !important;    white-space: nowrap;}
.nav-menu li.active a {background-color: rgb(255, 102, 0) !important;}
.stick{position:fixed !important;top:0;z-index:999 !important;width:100%;background:#ffffff !important;height:auto; transition:all ease 0.8s;
-webkit-box-shadow: 0px 2px 7px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 2px 7px 0px rgba(0,0,0,0.75);
box-shadow: 0px 2px 7px 0px rgba(0,0,0,0.75);}
.stick a { line-height:20px !important;}
.stick img { margin:0 !important;}

}

.custom-height-modal {
  height: 1100px;
}




.custab{
    border: 1px solid #ccc;
    padding: 5px;
    margin: 5% 0;
    box-shadow: 3px 3px 2px #ccc;
    transition: 0.5s;
    }
.custab:hover{
    box-shadow: 3px 3px 0px transparent;
    transition: 0.5s;
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

	<body class="w3-theme-l5">
		
	

<?php

  $con = new MongoClient();
  if($con)
  {
    $database=$con->organ;
    
    $collection=$database->docinfo;
    $cursor = $collection->find(array("email"=>$_SESSION['email']));
    $cursor_count = $cursor->count();


    $collection2=$database->hospitalinfo;
    $cursor2 = $collection2->find();
    $cursor_count = $cursor2->count();


    foreach ($cursor as $venue)
    {
?>


<!-- Page Container -->


<div class="w3-container w3-content" style="max-width:1400px;margin-top:20px">    


  <!-- The Grid -->
  <div class="w3-row">

<div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card-2 w3-round w3-white">
            <div class="w3-container w3-padding">


          <span class="w3-right "> <label class="w3-right">
          <button type="button" class="btn btn-info btn-s w3-right w3-purple" data-title='Confirm' data-toggle='modal' data-target='#link' > 
          <span class="glyphicon glyphicon-eye-open"></span> Add / Change Hospital </button> </label> </span>

								
          <span class="w3-right "> <label class="w3-right">
          <button type="button" class="btn btn-info btn-s w3-right w3-red" data-title='Confirm' data-toggle='modal' data-target='#confirm' > 
          <span class="glyphicon glyphicon-eye-open"></span> Edit Profile </button> </label> </span>
															
                <h6 class=" "> Wel-Come </h6>
																


            </div>
          </div>
        </div>
      </div>


<hr>




    <!-- Left Column -->
    <div class="w3-col m5	">      

							

      <div class="w3-card-2 w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center"> Doctor Details </h4>
         <p class="w3-center"><img src="img/doc.png" class="" style="height:80px;width:80px" alt="Avatar"></p>
         <hr>

			<?php 
      echo"<p style='text-transform:uppercase'> <i class='fa fa-user-md fa-fw w3-margin-right w3-text-theme'></i> Doctor Name :- "  .$venue ['fname']. "  " .$venue ['mname']. " " .$venue ['lname'] ."</p>";        
			
      echo"<p><i class='fa fa-btc fa-fw w3-margin-right w3-text-theme'></i> Contact Number :- " .$venue ['docphno'] ." </p>"; 																					
				echo"<p><i class='fa fa-at fa-fw w3-margin-right w3-text-theme'></i> Email-ID :- " .$venue ['email'] ." </p>"; 
  		if(isset($venue['Hos'])) 
          echo"<p><i class='fa fa-briefcase fa-fw w3-margin-right w3-text-theme'></i> work at :- " .$venue ['Hos'] ." </p>"; 

			echo"<p><i class='fa fa-address-book fa-fw w3-margin-right w3-text-theme'></i> Permanent Address	 :- " .$venue ['paddress'] ." </p>"; ?>

        </div>
      </div> 
				
				<!-- End Left Column -->
    </div>





    
    <!-- Middle Column -->
    <div class="w3-col m5">

    <div class="w3-row-padding">
    <div class="w3-col m12">

<div class="w3-card-2 w3-round w3-white">
        <div class="w3-container">
          

      <h4 class="w3-center"> <img src="img/re1.png" class="w3-circle" style="height:50px;width:50px" alt="Avatar"> Registration Details </h4>

         <hr>
								<?php echo"<p style='text-transform:uppercase'> <i class='fa fa-registered fa-fw w3-margin-right w3-text-theme'></i> <b> Registration Number :- </b>"  .$venue ['grno'] ."</p>"; ?>        
 							<?php echo"<p> <i class='fa fa-calendar fa-fw w3-margin-right w3-text-theme'></i> <b> Date of Registration :- </b> " .$venue ['day'] . "</p>"; ?>        
									<?php	echo"<p><i class='fa fa-h-square fa-fw w3-margin-right w3-text-theme'></i> <b> State Medical Council :- </b>" .$venue ['medicalcouncil'] ." </p>"; ?>
        </div>
      </div> 
<hr>	

<div class="w3-card-2 w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center"> <img src="img/qu1.png" class="w3-circle" style="height:50px;width:50px" alt="Avatar"> Qualification Details </h4>
         <p class="w3-center"> </p>
         <hr>
								<?php echo"<p style='text-transform:uppercase'> <i class='fa fa-graduation-cap fa-fw w3-margin-right w3-text-theme'></i> <b> Qualification :- </b> ".$venue['qualifi']."</p>"; ?>
								<?php echo"<p> <i class='fa fa-calendar fa-fw w3-margin-right w3-text-theme'></i> <b> Qualification Year :- </b>".$venue['day1']."</p>"; ?>
								<?php echo"<p> <i class='fa fa-university fa-fw w3-margin-right w3-text-theme'></i> <b> University Name	 :- </b>".$venue['univername']."</p>"; ?>
        </div>
      </div>
 
</div>
</div> 

          
  <!-- End Middle Column -->
    </div>
    



 <!-- Right Column -->
    <div class="w3-col m2">
      <div class="w3-card-2 w3-round w3-white w3-center">
        <div class="w3-container">

 <h4 class="w3-center"> <img src="img/re1.png" class="w3-circle" style="height:50px;width:50px" alt="Avatar"> Status </h4>

         <hr>
                <?php echo"<p> <b> Hospital </b>:- ".$venue['Hos']."</p>"; ?>
                <?php echo"<p> <b>Status </b> :- ".$venue['status']."</p>"; ?>


        </div>
      </div>
      <br>
      
                                
<!-------------------------  modal for edit profile ------------------------------------>

                <div class="modal fade" id="confirm" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                <h4 class="modal-title custom_align" id="Heading"> Fill Information </h4>
                </div>
          <div class="modal-body custom-height-modal">
       
      <form class="form-horizontal" method="post" action="">
         
         <fieldset>
       
          <div id="edit_farmer" style="display:none"></div>
 
         
          <div class="row form-group">
    
            <label class="col-md-2 control-label" for="first_name">First Name:-</label>  
            <div class="col-md-2">
            <?php echo" <input  name='fname'  class='form-control input-md-2' value=".$venue ['fname']. " type='text'> "; ?>
            </div>

            <label class="col-md-2 control-label" for="middle_name">Middle Name:-</label>  
            <div class="col-md-2">
            <?php  echo" <input name='mname' class='form-control input-md' value =" .$venue ['mname']. " type='text'> "; ?>                                    
            </div>

            <label class="col-md-2 control-label" for="last_name">Last Name :-</label>  
                          <div class="col-md-2">
                                              <?php echo "<input name='lname' class='form-control input-md' value=" .$venue ['lname']. " type='text' >"; ?>
                        </div>
          </div>

         
          <div class="row form-group">
            
                        <label class="col-md-2 control-label" for="smartphone"> phone No.:-  </label>
                             <div class="col-md-2">
                                                     <?php  echo" <input name='docphno' class='form-control input-md' value =" .$venue ['docphno']. " type='text'> "; ?>   
                              </div>


                        <label class="col-md-2 control-label" for="smartphone"> Registration No :-  </label>
                             <div class="col-md-2">
                                                     <?php  echo" <input name='grno' class='form-control input-md' value =" .$venue ['grno']. " type='text'> "; ?>   
                              </div>
          </div>

<div class="row form-group">
            
                        <label class="col-md-2 control-label" for="smartphone">  Date of Registration:-  </label>
                             <div class="col-md-2">
                                                     <?php  echo" <input name='day' class='form-control input-md' value =" .$venue ['day']. " type='text'> "; ?>   
                              </div>


                          <label class="col-md-2 control-label" for="last_name"> State Medical Council :-</label>  
                          <div class="col-md-2">
                                              <?php  echo" <input name='medicalcouncil' class='form-control input-md' value=".$venue ['medicalcouncil']. " type='text'>"; ?>
                        </div>

                        <label class="col-md-2 control-label" for="smartphone"> QUALIFICATION:-  </label>
                             <div class="col-md-2">
                                                     <?php  echo" <input name='qualifi' class='form-control input-md' value =" .$venue ['qualifi']. " type='text'> "; ?>   
                              </div>
          </div>


<div class="row form-group">
            
                        <label class="col-md-2 control-label" for="smartphone">  qualification Year:-  </label>
                             <div class="col-md-2">
                                                     <?php  echo" <input name='day1' class='form-control input-md' value =" .$venue ['day1']. " type='text'> "; ?>   
                              </div>


                          <label class="col-md-2 control-label" for="last_name"> University :-</label>  
                          <div class="col-md-2">
                                              <?php  echo" <input name='univername' class='form-control input-md' value=".$venue ['univername']. " type='text'>"; ?>
                        </div>

<label class="col-md-2 control-label" for="last_name"> perment Address :-</label>  
                          <div class="col-md-2">
                                              <?php  echo" <input name='paddress' class='form-control input-md' value=".$venue ['paddress']. " type='text'>"; ?>
                        </div>
          </div>

 
          <div class="form-group row">
           
                       <div class="col-md-8 text-center">
              <button type="submit" name="submit" value="submit" class="btn btn-large btn-success"> Save Information</button>
              <button class="btn btn-large btn-danger" type="button" data-dismiss="modal" > Cancel </button>

            </div>
          </div>
          </fieldset>
        </form>
      </div>
        </div>


    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>



<div class="modal fade" id="link" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading"> Add Doctor to Profile </h4>
      </div>
          <div class="modal-body">

       <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure...?</div>
       
      </div>
      <div class="modal-footer ">

       <?php echo "<div class='action'> <a href='DoctorUpdate.php'> 
        
        <button type='button' class='btn btn-success'> <span class='glyphicon glyphicon-ok'></span> YES </button> </a> 
         <button type='button' class='btn btn-default w3-red' data-dismiss='modal'> <span class='glyphicon glyphicon-remove'></span> NO </button> </div>" ; ?>

      </div>
    
        </div>
<?php


}

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
    $_SESSION['status']="Pending";

$data=array('fname'=>$fname,'mname'=>$mname,'lname'=>$lname,'docphno'=>$docphno,'dochospital'=>$dochospital,'grno'=>$grno,
'day'=>$day,'medicalcouncil'=>$medicalcouncil,'qualifi'=>$qualifi,'day1'=>$day1,'univername'=>$univername,'paddress'=>$paddress);

$collection->update(array("email" => $_SESSION['email']),array('$set' => $data));
}


  }
?>

    
   
</body>
</html>
