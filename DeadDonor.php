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

<div class="container-fluid">

<h4> Thank You for Registration..!! We Contact you as Soon as..!! </h4>
<br>
	<label> For More Information:- </label> <input type="button" value="Login"  class="btn btn-default" onclick="window.location.href='DonorLogin.php'">

</div>
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





  }


}

session_destroy();

?>
