
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

	<body class="w3-theme-l5">
		  
<?php

    //session_start();
   
  $con = new MongoClient();

  if($con)
  {
    

    $database=$con->organ;
    $collection=$database->docinfo;


    $cursor = $collection->find();
    $cursor_count = $cursor->count();
  }


?>



<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1100px;margin-top:20px">    

          <form class="form-horizontal" method="post" action="">

  <!-- The Grid -->
  <div class="w3-row">


<div class="w3-row-padding">
        <div class="w3-col m11">
          <div class="w3-card-2 w3-round w3-white">
            <div class="w3-container w3-padding">

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
         <h4 class="w3-center"> Docotrs </h4>
         <p class="w3-center"><img src="img/doc.png" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
         <hr>
        
<div class="form-inline">

    <label for="ex2"> <b>Select Doctor :- </b> </label> &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;
                     
    <select name="Doc" class="form-control" style="width:220px;">


<?php foreach ($cursor as $venue) 
{
?>

            <?php echo  "<option value= " .$venue['email']. " >" .$venue['email']. "</option>"; ?>\

<?php
}
?>


    </select>

    

</div>


<hr>

<div class="form-group row">
           
            <div class="col-md-8 text-center">
              <button type="submit" name="submit" value="submit" class="btn btn-large btn-success"> Select </button>
              <button class="btn btn-large btn-danger" type="button" data-dismiss="modal" > Cancel </button>

            </div>
          </div>
        </div>
      </div> 
        
        <!-- End Left Column -->
    </div>

   

  <!-- End Grid -->
  </div>
  


  <?php 
 


    if(isset($_POST['submit']))
{

    $Doc=$_POST['Doc'];


$data=array('Doc'=>$Doc);

$cursor=$collection->update(array("email" => $_SESSION['email']),array('$set' => $data));

}
?>


  </form>

</div>

</body>
</html>
