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
		
	
		<!-- W3.CSS is a modern CSS framework -->		
		<link rel="stylesheet" href="w3.css">

<link rel="stylesheet" href="w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
<style>

</style>

</head>

<body class="w3-theme-l5">
															

<div class="w3-container w3-content" style="max-width:1400px;margin-top:5px">    
 <div class="w3-col m8 ">
      <div class="w3-row-padding ">
        <div class="w3-col m12">
          <div class="w3-card-2 w3-round w3-white">
            <div class="w3-container w3-padding">
  
															<form method="post" action="">
		
															<div  class="col-xs-5">
																				
																			<label> <h6> Enter Patient's Name/E-mail-ID :- </h6></label>
															</div>																			

															
																<div  class="col-xs-3">
																				
																			<input type="text"  class="form-control" placeholder="Enter Organ" name="email">

															</div>

																<input type="submit" class="btn btn-default" name="submit" value="Search"/>
															


						</form>
 </div>
          </div>
        </div>
      </div>
</div>


<br>
<br>


<br>
<br>

</body>
</head>
</html>




<?php
session_start();

if(isset($_POST['submit']))
{
   
    $email = $_POST['email'];
    
  $con = new MongoClient();


    $database=$con->organ;

    $collection=$database->receiverinfo;

    $collectionD=$database->donorinfo;

 $cursor = $collection->find(array("email" => $email));
 $cursor_count = $cursor->count();
 if($cursor_count)
    ;
 else
    $cursor = $collectionD->find(array("email" => $email));

  foreach ($cursor as $venue) 
{
    echo "<table table width='50%' class='table-hover table-bordered table-condensed'>";

    echo "<tr>";
    //echo "<td> Name :  </td>";
    echo "<td>First Name :- </td>"; 
    echo "<td>".$venue ['info']['firstname'] . "</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td>Middle Name :- </td>"; 
    echo "<td>" .$venue ['info'] ['middlename'] . "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>Last Name :- </td>"; 
    echo "<td>" .$venue ['info'] ['lastname'] . "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>Gender :- </td>"; 
    echo "<td>" .$venue ['info'] ['gender'] . "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>Birth Date :- </td>"; 
    echo "<td>" .$venue ['info'] ['day'] 
    .$venue ['info'] ['month']
    .$venue ['info'] ['year']. "</td>";
    echo "</tr>";
    echo "<tr>";

    echo "<tr>";
    echo "<td>Blood Group :- </td>"; 
    echo "<td>" .$venue ['info'] ['blood'] . "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>Birth Place :- </td>"; 
    echo "<td>" .$venue ['info'] ['dobplace'] . "</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td>Mobile No :- </td>"; 
    echo "<td>" .$venue ['info'] ['mobileno'] . "</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td>Address :- </td>"; 
    echo "<td>" .$venue ['info'] ['address'] . "</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td>city :- </td>"; 
    echo "<td>" .$venue ['info'] ['city'] . "</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td>State :- </td>"; 
    echo "<td>" .$venue ['info'] ['state'] . "</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td>Nationality :- </td>"; 
    echo "<td>" .$venue ['info'] ['nati'] . "</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td>Zip Code :- </td>"; 
    echo "<td>" .$venue ['info'] ['zipcode'] . "</td>";
    echo "</tr>";
    

    echo "<td>Hospital1 :- </td>";
    echo "<td>".$venue ['hospital']['hospital'] . "</td>";
    echo "</tr>";

  	 echo "<tc>";
    echo "<td> Organ of Patient :- </td>";
    echo "</tc>";

				echo "<tc>";
    echo "<td>" .$venue ['info']['donor'] . "</td>";
    echo "</tc>";
 
    echo "<tr>";
    echo "<td>Organ1 :- </td>";
    echo "<td>".$venue ['organ']['kidney'] . "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>Organ. 2 :- </td>";
    echo "<td>".$venue ['organ']['heart'] . "</td>";
    echo "</tr>";

    echo "<td>Organ. 3 :- </td>";
    echo "<td>".$venue ['organ']['liver'] . "</td>";
    echo "</tr>";    

    echo "<td>Organ. 4 :- </td>";
    echo "<td>".$venue ['organ']['lportion'] . "</td>";
    echo "</tr>";   

    echo "<tr>";
    echo "<td>Organ. 5 :- </td>";
    echo "<td>".$venue ['organ']['pancreas'] . "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>Organ. 6 :- </td>";
    echo "<td>".$venue ['organ']['eyes'] . "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>Organ. 7 :- </td>";
    echo "<td>".$venue ['organ']['bones'] . "</td>";
    echo "</tr>";
    echo "<tr>";

    echo "<tr>";
    echo "<td>";
?>

<script type="text/javascript">
    function showokidney(kidneycheck) {
        kidney.style.display = kidneycheck.checked ? "block" : "none";
    }

</script>

<script type="text/javascript">
    function showliver(livercheck) {
        liver.style.display = livercheck.checked ? "block" : "none";
    }

</script>

<?php
        echo "Medical Details :";
        echo "</br>";
        echo "</br>";
        echo "<input type='checkbox' id='kidneycheck' onclick=showokidney(this) value= ".$venue ['organ']['kidney'].">Kidney";
        echo "</br>";
        echo "</br>";
?>      
        <div id="kidney" style="display: none">

         <input type = "file" name = "image" value="Select Report File"/>
         <input type = "submit"/>
         </br>
        </br>
     </div>
    

<?php       echo "<input type='checkbox' id='livercheck' onclick=showliver(this) value= ".$venue ['organ']['liver'].">Liver";
echo "</br>";
        echo "</br>";
?>


    <div id="liver" style="display: none">

         <input type = "file" name = "image" />
         <input type = "submit"/>
         </br>
        </br>
     </div>
    
         
        <button type="reset" class="btn btn-default" onclick="location.href='mdetails.php'"> NEXT </button>
<?php
    }


    }






?>
