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
										
										<label> For More Information:- </label> <input type="button" value="Login"  class="btn btn-default" onclick="window.location.href='DonorLogin.php'">

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
    $collection=$database->donorinfo;
    
    //$data=array('session'=>array('colg'=>$colg,'class'=>$class));

    $data=array('hospital'=>$hospital,'status'=>'pending');

   // $collection->update (array("email" => $_SESSION['email'] ), array ('$set' => array('organ' => $data)));
    
    if($kidney)
    $collection->update(array("email" => $_SESSION['email']), array('$set' => array('kidney'=>$kidney)));
 /* if($heart)
    $collection->update(array("email" => $_SESSION['email']), array('$set' => array('organ.heart'=>$heart)));
if($bones)
    $collection->update(array("email" => $_SESSION['email']), array('$set' => array('organ.bones'=>$bones)));
if($eyes)
    $collection->update(array("email" => $_SESSION['email']), array('$set' => array('organ.eyes'=>$eyes)));
  if($lportion)
    $collection->update(array("email" => $_SESSION['email']), array('$set' => array('organ.lportion'=>$lportion)));
  if($pancreas)
    $collection->update(array("email" => $_SESSION['email']), array('$set' => array('organ.pancreas'=>$pancreas)));
*/

  $collection->update (array("email" => $_SESSION['email'] ), array ('$set' =>  $data));
    //$collection->insert($data);
    //echo $_SESSION['email'];


$cursor = $collection->find(array("email" => $_SESSION['email']));

$cursor_count = $cursor->count();

  foreach ($cursor as $venue) {
    echo "<table width='50%' class='table-hover table-bordered table-condensed'>";

    echo "<tr>";
    //echo "<td> Name :  </td>";
    echo "<td>First Name :- </td>"; 
    echo "<td>".$venue ['firstname'] . "</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td>Middle Name :- </td>"; 
    echo "<td>" .$venue  ['middlename'] . "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>Last Name :- </td>"; 
    echo "<td>" .$venue  ['lastname'] . "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>Gender :- </td>"; 
    echo "<td>" .$venue  ['gender'] . "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>Birth Date :- </td>"; 
    echo "<td>" .$venue  ['day'] 
    .$venue  ['month']
    .$venue  ['year']. "</td>";
    echo "</tr>";
    echo "<tr>";

    echo "<tr>";
    echo "<td>Blood Group :- </td>"; 
    echo "<td>" .$venue  ['blood'] . "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>Birth Place :- </td>"; 
    echo "<td>" .$venue  ['dobplace'] . "</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td>Mobile No :- </td>"; 
    echo "<td>" .$venue  ['mobileno'] . "</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td>Address :- </td>"; 
    echo "<td>" .$venue  ['address'] . "</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td>city :- </td>"; 
    echo "<td>" .$venue  ['city'] . "</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td>State :- </td>"; 
    echo "<td>" .$venue  ['state'] . "</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td>Nationality :- </td>"; 
    echo "<td>" .$venue  ['nati'] . "</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td>Zip Code :- </td>"; 
    echo "<td>" .$venue  ['zipcode'] . "</td>";
    echo "</tr>";
    

    echo "<td>Hospital1 :- </td>";
    echo "<td>".$venue ['hospital'] . "</td>";

    echo "</tr>";
  /*
    echo "<tr>";
    echo "<td>Class :- </td>";
    echo "<td>".$venue ['collage']['class'] . "</td>";
    echo "</tr>";
    */
   echo "<tc>";
    echo "<td> Organ to be Donated . </td>";
    echo "</tc>";
    echo "<tr>";
    echo "<td>Organ1 :- </td>";
    echo "<td>".$venue ['kidney'] . "</td>";
    echo "</tr>";
    
  /*  echo "<tr>";
    echo "<td>Organ. 2 :- </td>";
    echo "<td>".$venue ['heart'] . "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>Organ. 3 :- </td>";
    echo "<td>".$venue ['eyes'] . "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>Organ. 4 :- </td>";
    echo "<td>".$venue ['bones'] . "</td>";
    echo "</tr>";
    echo "<tr>";

    echo "<td>Organ. 5 :- </td>";
    echo "<td>".$venue ['lportion'] . "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>Organ. 6 :- </td>";
    echo "<td>".$venue ['pancreas'] . "</td>";
    echo "</tr>";*/
    echo "</table>";
  }



  }


}

session_destroy();

?>
