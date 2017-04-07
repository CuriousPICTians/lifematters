<?php
session_start();
$uemail = $_SESSION['useremail'];

$con = new MongoClient();

    if($con)
    {
      //connecting to database
      $databse=$con->organ;

      //connect to specific collection
      $collection=$databse->hospitalinfo;
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
<html lang="en-us">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/profile.css">
    <title>Repair Electronics</title>
    <style>
		#profile{
				font-size:20px;
		}
	</style>
  </head>
  <body>
    <header>
      <h1 class="brand">Repair Electronix</h1>
      <navbar>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.html"> About Us </a></li>
          <li><a href="contact.html"> Contact Us </a></li>
          <li><a href="logout.php"> Log Out </a></li>
        </ul>
       </navbar>
    </header>
    <section>
    <h2 style="color:#000">Hello
          <?php

            if(isset($_SESSION['customername']))
             echo $_SESSION['customername']."!";?>
     </h2>

<?php
    if($uemail != 'repair@gmail.com')
    {
    	echo '<form id="register_complaint" action="" method="post">
     			<input type="submit" name="complaint" value="Register Complaint">
    		  </form>';
    }
?>          
          <?php
          	echo"<div id='complaints'>";
          	if($uemail == 'repair@gmail.com')
          		echo "<h3 style='text-align:center;'>User Orders</h3><br>";
          	else
          		echo "<h3 style='text-align:center;'>My Orders</h3>";
          ?>
      <table width="100%" border="2px solid black">

      <tr>
        <?php
        	 if($uemail == 'repair@gmail.com')
        	 	echo '<th>Name</th>';
        ?>
        <th>Date of Register</th>
        <th>Appliances</th>
        <th>Brand</th>
        <th>Warranty</th>
        <th>Status</th>
        <th>Action</th>
        <th>View</th>
      </tr>

        <?php
            if($uemail == 'repair@gmail.com')
            	$result=$collection -> find(array("complaint"=> array('$exists' => true)));
            else
      	      $result=$collection->find(array('complaint.email'=>$uemail));
            foreach($result as $obj)
            {

                echo "<tr>";
                if($uemail == 'repair@gmail.com')
                	echo "<td>".$obj['complaint']['name']."</td>";
                echo "<td>".$obj['complaint']['date']."</td>";
                echo "<td>".$obj['complaint']['appliance']."</td>";
                echo "<td>".$obj['complaint']['brand']."</td>";
                echo "<td>".$obj['complaint']['warranty']."</td>";
                echo "<td style='font-weight:bold;";
				 	if($obj['complaint']['status'] == 'Confirmed')
			    		echo "color:green'>";
			    	else
				    	echo "color:red'>";
                
                echo $obj['complaint']['status']."</td>";
/*                echo "<td><a href='profile.php?order=".$obj['_id']."'>Delete</a>";
                if($uemail == 'repair@gmail.com')                
	              	echo "<a href='profile.php?process=".$obj['_id']."'>Confirm</a>";
	            echo "<td><a href='orderSummary.php?key=".$obj['_id']."'>Summary</a>";
*/
	               echo "<td><div class='action'><a href='profile.php?order=".$obj['_id']."'>Delete</a></div>";
                if($uemail == 'repair@gmail.com')                
	              	echo "<div class='action'><a href='profile.php?process=".$obj['_id']."'>Confirm</a></div>";
	            echo "<td><div class='action'><a href='orderSummary.php?key=".$obj['_id']."'>Summary</a></div>";

                echo "</td></tr>";
            }
            echo "</div>";
          ?>
    </table>
    
    </section >
    <footer>
      &copy;Repair Electronics Inc. 2015
    </footer>
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
