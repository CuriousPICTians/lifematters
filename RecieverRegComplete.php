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
	
</head>
			<body>

										<h4> Thank You for Registration..!! We Contact you as Soon as..!!! </h4>
										<br>
										
										<label> For More Information:- </label> <input type="button" value="Login"  class="btn btn-default" onclick="window.location.href='RecieverLogin.php'">

			</body>
</html>


<?php
session_start();

if(isset($_POST['submit']))
{
   
    $kidney = $_POST['kidney'];
    $heart= $_POST['heart'];
    $eyes= $_POST['eyes'];
    $bones= $_POST['bones'];
    $lportion=$_POST['lportion'];
    $pancreas= $_POST['pancreas'];
    $hospital=$_POST['hospital'];

  $con = new MongoClient();

  if($con)
  {
    

    $database=$con->organ;
    $collection=$database->receiverinfo;
    
    //$data=array('session'=>array('colg'=>$colg,'class'=>$class));

    $data=array('hospital'=>$hospital);

   // $collection->update (array("email" => $_SESSION['email'] ), array ('$set' => array('organ' => $data)));
    
    if($kidney)
    $collection->update(array("email" => $_SESSION['email']), array('$set' => array('organ.kidney'=>$kidney)));
  if($heart)
    $collection->update(array("email" => $_SESSION['email']), array('$set' => array('organ.heart'=>$heart)));
if($bones)
    $collection->update(array("email" => $_SESSION['email']), array('$set' => array('organ.bones'=>$bones)));
if($eyes)
    $collection->update(array("email" => $_SESSION['email']), array('$set' => array('organ.eyes'=>$eyes)));
  if($lportion)
    $collection->update(array("email" => $_SESSION['email']), array('$set' => array('organ.lportion'=>$lportion)));
  if($pancreas)
    $collection->update(array("email" => $_SESSION['email']), array('$set' => array('organ.pancreas'=>$pancreas)));


  $collection->update (array("email" => $_SESSION['email'] ), array ('$set' => array('hospital' => $data)));
    //$collection->insert($data);
    //echo $_SESSION['email'];


$cursor = $collection->find(array("email" => $_SESSION['email']));

$cursor_count = $cursor->count();

  foreach ($cursor as $venue) {
    echo "<table width='50%' class='table-hover table-bordered table-condensed'>";

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
  /*
    echo "<tr>";
    echo "<td>Class :- </td>";
    echo "<td>".$venue ['collage']['class'] . "</td>";
    echo "</tr>";
    */
   echo "<tc>";
    echo "<td> Organ to be Wanted . </td>";
    echo "</tc>";
    echo "<tr>";
    echo "<td>Organ1 :- </td>";
    echo "<td>".$venue ['organ']['kidney'] . "</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td>Organ. 2 :- </td>";
    echo "<td>".$venue ['organ']['heart'] . "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>Organ. 3 :- </td>";
    echo "<td>".$venue ['organ']['eyes'] . "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>Organ. 4 :- </td>";
    echo "<td>".$venue ['organ']['bones'] . "</td>";
    echo "</tr>";
    echo "<tr>";

    echo "<td>Organ. 5 :- </td>";
    echo "<td>".$venue ['organ']['lportion'] . "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>Organ. 6 :- </td>";
    echo "<td>".$venue ['organ']['pancreas'] . "</td>";
    echo "</tr>";
    echo "</table>";
  }



  }


}

session_destroy();

?>
