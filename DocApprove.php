
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



<style>
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

<body>

<?php
session_start();
$email = $_SESSION['email'];

$con = new MongoClient();

    if($con)
    {
      $database=$con->organ;

      $collection=$database->docinfo;
    
    }

    ?>


<div class="w3-container w3-content" style="max-width:1400px;margin-top:20px">    

<div class="w3-container-fluid ">
            <?php
          	
          		echo "<h4 style='text-align:center;'> <b> List Of Doctors:- </b> </h4>";

          ?>

      <table class="table table-responsive table-bordered table-hover custab table-condensed" >

      <tr>

    <th> Doctor Email </th>        
    <th> Doctor Name </th>
    <th> Doctor R.G.NO</th>
    <th> Doctor Hospital </th>
    <th> Status</th>
    <th> Action</th>

    </tr>
    <?php

    $result=$collection -> find(array("Hos"=> $_SESSION['email']  ));
    
    foreach($result as $venue)
    {

      echo "<tr>";

      if(isset($venue['email']))
      echo "<td>".$venue['email']."</td>";
      else
      echo "<td> NA </td>";

      echo "<td>".$venue['fname']." ".$venue['mname']. " " .$venue['lname']. "</td>";

      if(isset($venue['grno']))
      echo "<td>".$venue['grno']."</td>";
      else
      echo "<td> NA </td>";

      if(isset($venue['Hos']))
      echo "<td>".$venue['Hos']."</td>";
      else
      echo "<td> NA </td>";

      if(isset($venue['status']))
      echo "<td >" .$venue ['status']."</td>";
      else
      echo "<td> NA </td>";


      echo "<td>
                <div class='action'><a href='DocList.php?key=".$venue['_id']."'> 
                <button type='button' class='btn btn-info btn-xs w3-purple' > <span class='glyphicon glyphicon-eye-open'></span> View </button>  </a></div>
            </td> ";
      
        }
            
          ?>
    </table>
    

    

<div class="clearfix"></div>
<ul class="pagination pull-right">
  <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
  <li class="active"><a href="#">1</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">4</a></li>
  <li><a href="#">5</a></li>
  <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
</ul>



   </div>
   </div>
  </body>
</html>
