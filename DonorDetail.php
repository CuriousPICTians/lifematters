  

  <!DOCTYPE html>

  <?php

  session_start();
  ?>
  
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


<!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

    
  <!-- W3.CSS is a modern CSS framework -->   
    <link rel="stylesheet" href="w3.css">

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

<script type="text/javascript">

function formvalidate(signup1)
{
  var username=signup1.firstname.value;
  var letters = /^[A-Za-z]+$/;
  var numbers= /^[0-9]+$/;
  var mailformat=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  
  var f1= signup1.firstname.value;
  if(f1.match(letters))
  {}
  else
  {
    alert("First Name must include characters only..!!");
    signup1.firstname.focus();
    return false;
  }

var f2= signup1.middlename.value;
  if(f2.match(letters))
  {}
  else
  {
    alert("Middle Name must include characters only..!!");
    signup1.middlename.focus();
    return false;
  }

var f3= signup1.lastname.value;
  if(f3.match(letters))
  {}
  else
  {
    alert("Last Name must include characters only..!!");
    signup1.lastname.focus();
    return false;
  }

var f4= signup1.city.value;
  if(f4.match(letters))
  {}
  else
  {
    alert("City Name must include characters only..!!");
    signup1.city.focus();
    return false;
  }

var f5= signup1.state.value;
  if(f5.match(letters))
  {}
  else
  {
    alert("State Name must include characters only..!!");
    signup1.state.focus();
    return false;
  }

var f6= signup1.nati.value;
  if(f6.match(letters))
  {}
  else
  {
    alert("Nationality Name must include characters only..!!");
    signup1.nati.focus();
    return false;
  }

  var mob= signup1.mobileno.value;
  if(mob.match(numbers))
  {
    if(mob.length>10)
    {
      alert("Mobile no. must be 10 digit");
      signup1.mobileno.focus();
      return false;
    }
    if(mob.length<10)
    {
      alert("Mobile no. must be 10 digit");
      signup1.mobileno.focus();
      return false;
    }
  }
  else
  {
    alert("Mobile no. must include Numeric only");
    signup1.mobileno.focus();
    return false;
  }

var adno= signup1.adharno.value;
  if(adno.match(numbers))
  {
    if(adno.length>12)
    {
      alert("Adhar No. must be 12 digit");
      signup1.adharno.focus();
      return false;
    }
    if(adno.length<12)
    {
      alert("Adhar No must be 12 digit");
      signup1.adharno.focus();
      return false;
    }
  }
  else
  {
    alert("Adhar No. must include Numeric only");
    signup1.adharno.focus();
    return false;
  }


var zc= signup1.zipcode.value;
  if(zc.match(numbers))
  {
    if(zc.length>6)
    {
      alert("PIN No must be 6 digit");
      signup1.zipcode.focus();
      return false;
    }
    if(zc.length<6)
    {
      alert("PIN No. must be 6 digit");
      signup1.zipcode.focus();
      return false;
    }
  }
  else
  {
    alert("PIN No. must include Numeric only");
    signup1.zipcode.focus();
    return false;
  }


  var uemail=signup1.email.value;
  if(uemail.match(mailformat))
  {}
  else
  {
    alert("You hav entered an invalid email address!!");
    signup1.email.focus();
    return false;
  }
  
    //If all conditions satisfied.........
}

</script>

  <body class="w3-theme-l5">
    
  
<?php


  $con = new MongoClient();
  if($con)
  {
    $database=$con->organ;
    
    $collection=$database->donorinfo;
    $cursor = $collection->find(array("email"=>$_SESSION['email']));
    $cursor_count = $cursor->count();


    $collection2=$database->docinfo;
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
    <div class="w3-col m5">      

              

      <div class="w3-card-2 w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center"> Profile</h4>
         <p class="w3-center"><img src="img/a1.png" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
         <hr>
        <?php 
              echo" <p style='text-transform:uppercase'> <i class='fa fa-user-circle fa-fw w3-margin-right w3-text-theme'></i> <b> Donor Name :- </b>".$venue ['firstname'] ."  " .$venue ['middlename'] . "  "  .$venue ['lastname'] . " </p>";
              
              if(isset($venue['hospital'])) 
              echo"<p> <i class='fa fa-hospital-o fa-fw w3-margin-right w3-text-theme'></i> Hospital :- "  .$venue ['hospital'] ."</p>"; 
        ?>  

        <?php 

      if($venue['organ']==0)
            echo"<p> <i class='fa fa-gratipay fa-fw w3-margin-right w3-text-theme'></i> Organ :  Kidney </p>";         
          
      if($venue['organ']==1)
            echo"<p> <i class='fa fa-gratipay fa-fw w3-margin-right w3-text-theme'></i>Organ : Liver </p>";         
                
       if($venue['organ']==2)
           echo"<p> <i class='fa fa-gratipay fa-fw w3-margin-right w3-text-theme'></i> Organ : Heart </p>";         
                

      if($venue['blood']==0)
            echo"<p><i class='fa fa-btc fa-fw w3-margin-right w3-text-theme'></i> Blood group : A+ </p>";  

      if($venue['blood']==1)
            echo"<p><i class='fa fa-btc fa-fw w3-margin-right w3-text-theme'></i> Blood group : A- </p>"; 

      if($venue['blood']==2)
            echo"<p><i class='fa fa-btc fa-fw w3-margin-right w3-text-theme'></i> Blood group : B+ </p>"; 

      if($venue['blood']==3)
            echo"<p><i class='fa fa-btc fa-fw w3-margin-right w3-text-theme'></i> Blood group : B- </p>"; 

       if($venue['blood']==4)
            echo"<p><i class='fa fa-btc fa-fw w3-margin-right w3-text-theme'></i> Blood group : O+ </p>";                    
                
       if($venue['blood']==5)
            echo"<p><i class='fa fa-btc fa-fw w3-margin-right w3-text-theme'></i> Blood group : O- </p>"; 

      if($venue['blood']==6)
            echo"<p><i class='fa fa-btc fa-fw w3-margin-right w3-text-theme'></i> Blood group : AB+ </p>";       

      if($venue['blood']==7)
            echo"<p><i class='fa fa-btc fa-fw w3-margin-right w3-text-theme'></i> Blood group : AB- </p>"; 
    ?> 

    <?php 
          if(isset($venue['gender']))
            echo"<p><i class='fa fa-odnoklassniki fa-fw w3-margin-right w3-text-theme'></i> Gender :- " .$venue ['gender'] ." </p>";
          
          if(isset($venue['day']))
            echo"<p><i class='fa fa-calendar fa-fw w3-margin-right w3-text-theme'></i> DOB :- " .$venue  ['day'] ."</p>";
    ?>

        </div>
      </div> 
        
        <!-- End Left Column -->
    </div>
    




<!-- Middle Column -->
    <div class="w3-col m5 ">

    <div class="w3-row-padding">
    <div class="w3-col m12">


<div class="w3-card-2 w3-round w3-white">
        <div class="w3-container">
        
         <h4 class="w3-center"> <img src="img/z1.jpg" class="w3-circle" style="height:50px;width:50px" alt="Avatar"> Organ Donation Details</h4>
         <p class="w3-center"> </p>
         <hr>
        
        <?php 
           if(isset($venue['hospital']))
             echo"<p style='text-transform:uppercase'> <i class='fa fa-graduation-cap fa-fw w3-margin-right w3-text-theme'></i> <b> Donation at :- </b>".$venue['hospital']."</p>"; 
         ?>

        <?php 

            if($venue['organ']==0)
            echo"<p> <i class='fa fa-gratipay fa-fw w3-margin-right w3-text-theme'></i>  Donoted Organ :- Kidney  </p>";         
                    
            if($venue['organ']==1)
            echo"<p> <i class='fa fa-gratipay fa-fw w3-margin-right w3-text-theme'></i>  Donoted Organ:-  Liver </p>";         
                    
            if($venue['organ']==2)
            echo"<p> <i class='fa fa-gratipay fa-fw w3-margin-right w3-text-theme'></i>  Donoted Organ :- Heart </p> "; 
        ?>   


        </div>
      </div>
<hr>


<div class="w3-card-2 w3-round w3-white">
        <div class="w3-container">
      <h4 class="w3-center"> <img src="img/re1.png" class="w3-circle" style="height:50px;width:50px" alt="Avatar"> Contact Details</h4>

         <hr>
    
    <?php 

        if(isset($venue['mobileno'])) 
        echo"<p > <i class='fa fa-registered fa-fw w3-margin-right w3-text-theme'></i> Mobile Number :- "  .$venue ['mobileno'] ."</p>";        

        if(isset($venue['address'])) 
        echo"<p> <i class='fa fa-calendar fa-fw w3-margin-right w3-text-theme'></i> Address :- " .$venue ['address'] . "</p>";  


        if(isset($venue['city'])) 
        echo"<p><i class='fa fa-h-square fa-fw w3-margin-right w3-text-theme'></i> City:- " .$venue ['city'] ." </p>"; 

        if(isset($venue['state'])) 
        echo"<p><i class='fa fa-map fa-fw w3-margin-right w3-text-theme'></i> State:- " .$venue ['state'] ." </p>"; 


        if(isset($venue['nati'])) 
        echo"<p><i class='fa fa-flag-o fa-fw w3-margin-right w3-text-theme'></i> Nationality:- " .$venue ['nati'] ." </p>"; 

        if(isset($venue['zipcode'])) 
        echo"<p><i class='fa fa-pinterest-p fa-fw w3-margin-right w3-text-theme'></i> Pin code:-" .$venue ['zipcode'] ." </p>"; 

       ?>

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
                <?php 

                   if(isset($venue['Doc'])) 
                      echo"<p> <b>Doctor </b>:- ".$venue['Doc']."</p>"; 
                
                   if(isset($venue['status'])) 
                     echo"<p> <b>Status </b> :- ".$venue['status']."</p>"; ?>


        </div>
      </div>
      <br>
      
      
      
    <!-- End Right Column -->
    </div>
    



  <!-- End Grid -->
  </div>
  




<div class="modal fade" id="confirm" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading"> Fill Information </h4>
      </div>
          <div class="modal-body custom-height-modal">
       
      <form class="form-horizontal" name="signup1"  method="post"  onSubmit="return formvalidate(signup1)" action="">
         
         <fieldset>
       
          <div id="edit_farmer" style="display:none"></div>
 
         
  <div class="row form-group">
    
    <label class="col-md-2 control-label" for="first_name">First Name:-</label>  
      <div class="col-md-2">
      <?php 

          if(isset($venue['firstname']))
          echo" <input  name='firstname'  class='form-control input-md-2' value=".$venue ['firstname']. " type='text' required> ";
          else
          echo" <input  name='firstname'  class='form-control input-md-2' value='' type='text' required> "; ?>
  
      </div>

      <label class="col-md-2 control-label" for="middle_name">Middle Name:-</label>  
      <div class="col-md-2">
      <?php  

          if(isset($venue['middlename']))
            echo" <input name='middlename' class='form-control input-md' value =" .$venue ['middlename']. " type='text' required> ";                                    
            else      
            echo" <input name='middlename' class='form-control input-md' value ='' type='text' required> "; ?>                                    
           
      </div>

      <label class="col-md-2 control-label" for="last_name">Last Name :-</label>  
      <div class="col-md-2">
      <?php 
            if(isset($venue['lastname']))
              echo "<input name='lastname' class='form-control input-md' value=" .$venue ['lastname']. " type='text' required>"; 
            else
              echo "<input name='lastname' class='form-control input-md' value='' type='text' required>"; ?>
                         
      </div>
      </div>

         
      <div class="row form-group">
       
      <label class="col-md-2 control-label" for="smartphone"> Gender:-  </label>
      <div class="col-md-2">
          
          <input type="radio" name="gender" value="male" tabindex="4" required> Male <br>
          <input type="radio" name="gender" value="male" tabindex="5" required> Female
          

      </div>

     <label class="col-md-2 control-label" for="dochospital"> DOB :-</label>  
     <div class="col-md-2">
     <?php  
          if(isset($venue['day']))
            echo" <input name='day' class='form-control input-md' value=".$venue ['day']. " type='text' required>";
            else
            echo" <input name='day' class='form-control input-md' value='' type='text' required>"; ?>

      </div>

      <label class="col-md-2 control-label" for="smartphone"> Blood group:-  </label>
      <div class="col-md-2">

                     
              <select name="blood" class="textfield2" required>

                <option value=""> </option>
                <option value="0">A+</option>
                <option value="1">A-</option>
                <option value="2">B+</option>
                <option value="3">B-</option>
                <option value="4">O+</option>
                <option value="5">O-</option>
                <option value="6">AB+</option>
                <option value="7">AB-</option>
              </select>
 

      </div>
     </div>

<div class="row form-group">
            
  <label class="col-md-2 control-label" for="smartphone">  Birth Place:-  </label>
  <div class="col-md-2">
  <?php  

        if(isset($venue['dobplace'])) 
          echo" <input name='dobplace' class='form-control input-md' value =" .$venue ['dobplace']. " type='text' required> "; 
        else
          echo" <input name='dobplace' class='form-control input-md' value ='' type='text' required> "; ?>   

  </div>


  <label class="col-md-2 control-label" for="last_name"> Mobile No:-</label>  
  <div class="col-md-2">
  <?php  
          if(isset($venue['mobileno'])) 
          echo" <input maxlength='10' minlength='10' name='mobileno' class='form-control input-md' value=".$venue ['mobileno']. " type='text' required>"; 
          else
          echo" <input maxlength='10' minlength='10' name='mobileno' class='form-control input-md' value='' type='text' required>"; ?>

  </div>

  <label class="col-md-2 control-label" for="smartphone"> Adhar No:-  </label>
  <div class="col-md-2">
  <?php  
            if(isset($venue['adharno'])) 
            echo" <input maxlength='12'minlength='12' name='adharno' class='form-control input-md' value =" .$venue ['adharno']. " type='text' required> ";   
            else
            echo" <input maxlength='12'minlength='12' name='adharno' class='form-control input-md' value ='' type='text' required> "; ?>   

  </div>
  </div>


<div class="row form-group">
            
<label class="col-md-2 control-label" for="smartphone"> Address:-  </label>
<div class="col-md-2">
<?php  
          if(isset($venue['address'])) 
          echo" <input name='address' class='form-control input-md' value =" .$venue ['address']. " type='text' required> ";    
          else
          echo" <input name='address' class='form-control input-md' value ='' type='text' required> "; ?>   

</div>

<label class="col-md-2 control-label" for="last_name"> City:-</label>  
<div class="col-md-2">
<?php  
    if(isset($venue['city'])) 
      echo" <input name='city' class='form-control input-md' value=".$venue ['city']. " type='text' required>" ; 
    else
      echo" <input name='city' class='form-control input-md' value='' type='text' required>" ; ?>
</div>


<label class="col-md-2 control-label" for="last_name"> state:-</label>  
<div class="col-md-2">
<?php  
    if(isset($venue['state'])) 
      echo" <input name='state' class='form-control input-md' value=".$venue ['state']. " type='text' required>"; 
    else
      echo" <input name='state' class='form-control input-md' value='' type='text' required>"; ?>

</div>
</div>


<div class="row form-group">

<label class="col-md-2 control-label" for="last_name"> Nationality :-</label>  
<div class="col-md-2">
<?php  
    if(isset($venue['nati'])) 
      echo" <input name='nati' class='form-control input-md' value=".$venue ['nati']. " type='text' required>"; 
    else
      echo" <input name='nati' class='form-control input-md' value='' type='text' required>"; ?>

</div>
          

<label class="col-md-2 control-label" for="last_name"> Pin code:-</label>  
<div class="col-md-2">
<?php  
      if(isset($venue['zipcode'])) 
        echo" <input maxlength='6' minlength='6' name='zipcode' class='form-control input-md' value=".$venue ['zipcode']. " type='text' required>"; 
      else
        echo" <input maxlength='6' minlength='6' name='zipcode' class='form-control input-md' value='' type='text' required>"; ?>

</div>
          
<hr>

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

       <?php echo "<div class='action'> <a href='RecieverUpdate.php'> 
        
        <button type='button' class='btn btn-success'> <span class='glyphicon glyphicon-ok'></span> YES </button> </a> 
         <button type='button' class='btn btn-default w3-red' data-dismiss='modal'> <span class='glyphicon glyphicon-remove'></span> NO </button> </div>" ; ?>

      </div>
    
        </div>



    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>


<!-- End Page Container -->
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

?>

  <script>
  alert('Successfully '); window.location.href="DonorDetail.php";
  </script>

<?php

}


  


}



?>
    
   
</body>
</html>
