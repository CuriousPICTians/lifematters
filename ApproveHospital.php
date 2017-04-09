

<?php
session_start();
$email = $_SESSION['email'];

$con = new MongoClient();

    if($con)
    {
      //connecting to database
      $database=$con->organ;

      //connect to specific collection
      $collection=$database->hospitalinfo;
    }

 if ($_SERVER['REQUEST_METHOD'] == 'POST')
{

  if(isset($_POST['complaint']))
        header("Location: complaint.php");
}

if ($_SERVER['REQUEST_METHOD'] == 'GET')
{

  if(isset($_GET['order']))
  {
  	$temp = $collection -> find(array('_id' => new MongoId($_GET['order'])));
  	
		foreach($temp as $obj)
		{
		if($obj['complaint']['status'] == "Confirmed" )
		{
			?>
			<script>alert("Sorry. Can not delete. Order has been confirmed already.");</script>
			<?php
		}	
		else
		{
			$collection -> remove(array('_id' => new MongoId($_GET['order'])));
			?>
			<script>alert("Your order has been deleted successfully.");</script>
			<?php
		}
		}
  }
  
  if(isset($_GET['process']))
  {
		$temp = $collection -> find(array('_id' => new MongoId($_GET['process'])));
  	
		foreach($temp as $obj)
		{
		if($obj['complaint']['status'] == "Confirmed" )
		{
			?>
			<script>alert("Order confirmed already!");</script>
			<?php
		}	
		else
		{
		$collection -> update(array('_id' => new MongoId($_GET['process'])), array('$set' => array('complaint.status' => 'Confirmed')));
		?>
		<script>alert("Order has been confirmed.");</script>
		<?php
  		}
  		}
  }
}

?>

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

  </head>
  <body>
    <header>
      
    <section>
    <h2 style="color:#000">Hello
          <?php

            if(isset($_SESSION['email']))
             echo $_SESSION['email']."!";?>
     </h2>

<?php

    if($email != 'admin')
    {
    	echo '<form id="register_complaint" action="" method="post">
     			<input type="submit" name="complaint" value="Register Complaint">
    		  </form>';
    }
?>          
          <?php
          	echo"<div id='complaints'>";
          	if($email == 'admin')
          		echo "<h3 style='text-align:center;'>User Orders</h3><br>";
          	else
          		echo "<h3 style='text-align:center;'> List Of Hospitals </h3>";
          ?>
      <table class="table table-responsive bio-table table-bordered table-hover table-condensed" >

      <tr>
        <?php
        	 if($email == 'admin')
        	 	echo '<th>Name</th>';
        ?>
 <th>Hospital Name</th>
<th>Hospital Address</th>
<th>Hospital Email</th>
<th>Hospital Phone </th>
<th>Hospital Director</th>
<th>Director Phone</th>
<th>Organs Transplant</th>
<th>Status</th>
<th>Action</th>
<th>View</th>
      </tr>

        <?php
            if($email == 'admin')
            	$result=$collection -> find(array("complaint"=> array('$exists' => true)));
            else
      	      $result=$collection->find(array('complaint.email'=>$email));
            foreach($result as $obj)
            {

                echo "<tr>";
              //  if($uemail == 'admin')
echo "<td>".$obj['hospital_name']. "</td>";
echo"<td>".$obj['address']."</td>";
echo"<td>".$obj['email']."</td>";
echo"<td>".$obj['phno']."</td>";
echo"<td>".$obj['diname']. "</td>";
echo"<td>".$obj['diph']."</td>";
echo"<td>".$obj['KidneyLicense'].$obj['LiverLicense'].$obj['HeartLicense'].$obj['LungsLicense']. "</td>";
 
     echo "<td style='font-weight:bold;";

				 	if($obj ['status'] == 'Confirmed')
			    		
			    		echo "color:green'>";
			    	else
				    	echo "color:red'>";
                
                echo $obj['status']."</td>";
/*                echo "<td><a href='profile.php?order=".$obj['_id']."'>Delete</a>";
                if($uemail == 'repair@gmail.com')                
	              	echo "<a href='profile.php?process=".$obj['_id']."'>Confirm</a>";
	            echo "<td><a href='orderSummary.php?key=".$obj['_id']."'>Summary</a>";
*/
	               echo "<td><div class='action'><a href='pro.php?order=".$obj['_id']."'>Delete</a></div>";
                if($email == 'admin')                
	              
	              	echo "<div class='action'><a href='profile.php?process=".$obj['_id']."'>Confirm</a></div>";
	                echo "<td><div class='action'><a href='orderSummary.php?key=".$obj['_id']."'>Summary</a></div>";

                echo "</td></tr>";
            }
            echo "</div>";
          ?>
    </table>
    
    </section >
    
<!--
    <script>
      $('.delete').click(function(){
        alert("hellooooooo");
        if(confirm("You sure??")){
          alert("conf");
        }
      });
    </script>
-->
  </body>
</html>
