<?php
session_start();
?>

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
				<label> <h6> Enter Patient's E-mail-ID :- </h6></label>
				</div>																			
	
				<div  class="col-xs-3">
				<input type="text"  class="form-control" placeholder="Enter Organ" name="pemail">
				</div>
	
				<input type="submit" class="btn btn-large btn-success" name="submit" value="Search"/>

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






<?php

if(isset($_POST['submit']))
{
   
    $pemail = $_POST['pemail'];
	$_SESSION['pemail']=$pemail;
    
  	$con = new MongoClient();


    $database=$con->organ;
    $collection=$database->receiverinfo;
				$collectionD=$database->donorinfo;

	if($cursor = $collection->find(array("email" => $pemail)))
	{
 		$cursor_count = $cursor->count();
 		if($cursor_count);
 		else
    	$cursor = $collectionD->find(array("email" => $pemail));

  //foreach ($cursor as $venue) 
	{
	?>

<!-- Middle Column -->
 <div class="w3-col m12">
 	<div class="w3-container w3-card-2 w3-white w3-round w3-margin"><br>
    	
    	<img src="img-1/ab.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:100px">
        <span class="w3-right w3-opacity">  </span>
        
        <h4> Patient information </h4><br>
       	
       	<hr>

		<table class="table table-responsive bio-table table-bordered table-hover table-condensed" >
		<thead>
			<tr>
				<th>First Name</th>
				<th>Middle Name</th>
				<th>Last Name</th>
				<th>Gender</th>
				<th>Birth Date</th>
				<th>Birth Group</th>
				<th>Birth Place</th>
				<th>Mobile NO</th>
				<th>Address</th>
				<th>City</th>
				<th>State</th>
				<th>Nationality</th>
				<th>Hospital</th>
				<th> Donated Organ</th>
			</tr>
		</thead>

		<tbody>
		<?php
		

	
	
		foreach ($cursor as $venue) 
		{
		echo "<tr>";


        if(isset($venue['firstname']))
            echo" <td>".$venue['firstname']."</td>";
        else 
            echo" <td> NA </td>";

        if(isset($venue['middlename']))
            echo" <td>".$venue['middlename']."</td>";
        else 
            echo" <td> NA </td>";

        if(isset($venue['lastname']))
            echo" <td>".$venue['lastname']."</td>";
        else 
            echo" <td> NA </td>";

        if(isset($venue['gender']))
            echo" <td>".$venue['gender']."</td>";
        else 
            echo" <td> NA </td>";

        if(isset($venue['day']))
            echo" <td>".$venue['day']."</td>";
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


        if(isset($venue['dobplace']))
            echo" <td>".$venue['dobplace']."</td>";
        else 
            echo" <td> NA </td>";

        if(isset($venue['mobileno']))
            echo" <td>".$venue['mobileno']."</td>";
        else 
            echo" <td> NA </td>";

        if(isset($venue['address']))
            echo" <td>".$venue['address']."</td>";
        else 
            echo" <td> NA </td>";

        if(isset($venue['city']))
            echo" <td>".$venue['city']."</td>";
        else 
            echo" <td> NA </td>";

        if(isset($venue['state']))
            echo" <td>".$venue['state']."</td>";
        else 
            echo" <td> NA </td>";

        if(isset($venue['nati']))
            echo" <td>".$venue['nati']."</td>";
        else 
            echo" <td> NA </td>";

        if(isset($venue['hospital']))
            echo" <td>".$venue['hospital']."</td>";
        else 
            echo" <td> NA </td>";


			if($venue['organ']==0)
        	echo"<td> Kidney </td>";

        	if($venue['organ']==1)
        	echo"<td> Liver </td>";

        	if($venue['organ']==2)
        	echo"<td> Heart</td>";
			
			echo"</tr>";  
		}
		?>
  
		</tbody>
		</table>	      
       
        <button type="reset" class="btn btn-large btn-success" onclick="location.href='mdetails.php'"> NEXT </button>
    


</div>
</div>

<?php
    
   }

  }

}

?>


</body>
</head>
</html>