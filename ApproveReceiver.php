
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
      //connecting to database
      $database=$con->organ;

      //connect to specific collection
      $collection=$database->receiverinfo;

    }
?>


<div class="w3-container w3-content" style="max-width:1400px;margin-top:20px">    

<div class="w3-container-fluid ">

<?php
   		echo "<h4 style='text-align:center;'> <b> List Of Receivers </b></h4>";
?>

<table class="table table-responsive table-bordered table-hover custab table-condensed" >

  <tr>
    <th> Receiver E-mail</th>
    <th> Receiver Name</th>
    <th> Gender</th>
    <th> Blood Group </th>
    <th> Organ</th>
    <th> Hospital</th>
    <th> Status </th>
    <th> Action</th>
  </tr>

<?php

    $result=$collection -> find(array("Doc"=> $_SESSION['email']  ));
    
    foreach($result as $venue)
    {
      echo "<tr>";

      if(isset($venue['email']))
          echo" <td>".$venue['email']."</td>";
          else 
            echo" <td> NA </td>";


      echo "<td>".$venue['firstname']." ".$venue['middlename']. " " .$venue['lastname']. "</td>";

      if(isset($venue['gender']))
          echo" <td>".$venue['gender']."</td>";
          else 
            echo" <td> NA </td>";


        if($venue['blood']==0)
        echo "<td> A+ </td>";

        if($venue['blood']==1)
        echo "<td> A- </td>";

        if($venue['blood']==2)
        echo "<td> B+ </td>";

        if($venue['blood']==3)
        echo "<td> B- </td>";

        if($venue['blood']==4)
        echo "<td> O+ </td>";

        if($venue['blood']==5)
        echo "<td> O- </td>";

        if($venue['blood']==6)
        echo "<td> AB+ </td>";

        if($venue['blood']==7)
        echo "<td> AB- </td>";


        if($venue['organ']==0)
        echo"<td> Kidney </td>";

        if($venue['organ']==1)
        echo"<td> Liver </td>";

        if($venue['organ']==2)
        echo"<td> Heart</td>";





if(isset($venue['hospital']))
          echo" <td>".$venue['hospital']."</td>";
          else 
            echo" <td> NA </td>";


      if(isset($venue['status']))
      echo "<td >" .$venue ['status']."</td>";
      else
      echo "<td> NA </td>";
    

      echo "<td>
                <div class='action'><a href='ARL.php?key=".$venue['_id']."'> 
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
