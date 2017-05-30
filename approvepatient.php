<?php
session_start();
//$email = $_SESSION['email'];

$con = new MongoClient();

    if($con)
    {
      //connecting to database
      $database=$con->organ;

      //connect to specific collection
      $collection1=$database->donorinfo;
      $collection2=$database->receiverinfo;

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
  	$temp = $collection1 -> find(array('_id' => new MongoId($_GET['order'])));
  	
		foreach($temp as $venue)
		{
			$collection1 -> remove(array('_id' => new MongoId($_GET['order'])));
			?>
			<script>alert("patient Has Been Deleted Successfully.");</script>
			<?php
		
		}
  } 



/* ------------------------ Donor ---------------------- */

if(isset($_GET['key']))
  {
  	$temp = $collection1 -> find(array('_id' => new MongoId($_GET['key'])));
  	
		foreach($temp as $venue)
		{


	 echo "
	

<table class='table table-responsive table-hover custab table-condensed'>
      <caption> <h4 style='text-align:center;'> <b> Patient Details</b> </h4> </caption>
      <tr>
        <th> Name </th>
        <th> gender</th>
        <th> blood group </th>
        <th> hospital</th>
        <th> organ</th>
        <th> Action </th>
      </tr>
      <tr>
        <td>".$venue['firstname']. " " .$venue['middlename']. " " .$venue['lastname']."</td>
        <td>".$venue['gender']."</td>       
			 	<td>".$venue['blood']."</td>
        <td>".$venue['hospital']."</td>
        <td>".$venue['organ']."</td>
				<td>

				<button class='w3-btn w3-green w3-round w3-margin-left w3-small' data-title='Confirm' data-toggle='modal' data-target='#confirm' ><span class='glyphicon glyphicon-ok'> Confirm</span></button>
				<button class='btn btn-danger btn-xs ' data-title='Delete' data-toggle='modal' data-target='#delete' ><span class='glyphicon glyphicon-trash'></span> Delete </button>
				</td	>
      </tr>
      </table>

";


}
}


/* Update pending status to confirm in Database  */

  if(isset($_GET['process']))
  {
		$temp = $collection1 -> find(array('_id' => new MongoId($_GET['process'])));
  	
		foreach($temp as $venue)
		{
		if($venue['status'] == "confirmed" )
		{
			?>
			<script>alert("patient confirmed already!");</script>
			<?php
		}	
		else
		{
		$collection1 -> update(array('_id' => new MongoId($_GET['process'])), array('$set' => array('status' => 'confirmed')));

		?>
		<script>alert("patient has been confirmed.");</script>


		<?php
  		}
  		}
  }


/* ----------------- Receiver --------------------- */

if(isset($_GET['key']))
  {
  	$temp = $collection2 -> find(array('_id' => new MongoId($_GET['key'])));
  	
		foreach($temp as $venue)
		{


	 echo "
	

<table class='table table-responsive table-hover custab table-condensed'>
      <caption> <h4 style='text-align:center;'> <b> Patient Details</b> </h4> </caption>
      <tr>
        <th> Name </th>
        <th> gender</th>
        <th> blood group </th>
        <th> hospital</th>
        <th> organ</th>
        <th> Action </th>
      </tr>
      <tr>
        <td>".$venue['firstname']. " " .$venue['middlename']. " " .$venue['lastname']."</td>
        <td>".$venue['gender']."</td>       
			 	<td>".$venue['blood']."</td>
        <td>".$venue['hospital']."</td>
        <td>".$venue['organ']."</td>
				<td>

				<button class='w3-btn w3-green w3-round w3-margin-left w3-small' data-title='Confirm' data-toggle='modal' data-target='#confirm' ><span class='glyphicon glyphicon-ok'> Confirm</span></button>
				<button class='btn btn-danger btn-xs ' data-title='Delete' data-toggle='modal' data-target='#delete' ><span class='glyphicon glyphicon-trash'></span> Delete </button>
				</td	>
      </tr>
      </table>

";


}
}


/* Update pending status to confirm in Database  */

  if(isset($_GET['process']))
  {
		$temp = $collection2 -> find(array('_id' => new MongoId($_GET['process'])));
  	
		foreach($temp as $venue)
		{
		if($venue['status'] == "confirmed" )
		{
			?>
			<script>alert("patient confirmed already!");</script>
			<?php
		}	
		else
		{
		$collection2 -> update(array('_id' => new MongoId($_GET['process'])), array('$set' => array('status' => 'confirmed')));

		?>
		<script>alert("patient has been confirmed.");</script>


		<?php
  		}
  		}
  }

 
}

?>



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


<!-- Page Container -->


<div class="w3-container w3-content" style="max-width:1400px;margin-top:20px">    


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

 

<!-- left Column -->
    <div class="w3-col m5">      

							

      <div class="w3-card-2 w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center"> Donor List  </h4>
         <p class="w3-center"><img src="img/doc.png" class="" style="height:80px;width:80px" alt="Avatar"></p>
         <hr>
			
<?php

		session_start();
   
	$con = new MongoClient();

  if($con)
  {
    

    $database=$con->organ;
    $collection1=$database->donorinfo;


		$qry = array("Doc" => $_SESSION['email'] 	);


   $cursor = $collection1->find($qry);

		
		//$result = $collection1->findOne($qry);	

		}


	if($cursor)
	{
?>

	<table class="table table-responsive table-hover custab table-condensed" >
			<thead>
					<tr>
						<th> Donor Name</th>
						<th> status </th>
						<th> View </th>
					</tr>
			</thead>
			<tbody>
			<?php
					foreach ($cursor as $venue) 
					{
						echo "
								<tr>
								<td>{$venue  ['firstname']} {$venue  ['middlename']}  {$venue  ['middlename']} </td>
								<td>{$venue  ['status']} </td>
								<td>  

								


								<div class='action'><a href='approvepatient.php?key=".$venue['_id']."'>
 
								<button type='button' class='w3-btn w3-green w3-round w3-margin-bottom w3-medium' data-title='Confirm1' data-toggle='modal' data-target='' > 

								<span class='glyphicon glyphicon-eye-open'></span> View </button> </label>


								</td>
								</tr>
								";  
					}
	}	
	?>  
		</tbody>
		</table>	      
     




 </div>
      </div> 
				
	
	<!-- End left Column -->
    </div>    

    




<!-- Right Column -->
    <div class="w3-col m5">      

							

      <div class="w3-card-2 w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center"> Receiver List  </h4>
         <p class="w3-center"><img src="img/doc.png" class="" style="height:80px;width:80px" alt="Avatar"></p>
         <hr>
			
<?php

		session_start();
   
	$con = new MongoClient();

  if($con)
  {
    

    $database=$con->organ;
    $collection2=$database->receiverinfo;


		$qry = array("Doc" => $_SESSION['email'] 	);


   $cursor = $collection2->find($qry);

		
		//$result = $collection1->findOne($qry);	

		}


	if($cursor)
	{
?>

	<table class="table table-responsive table-hover custab table-condensed" >
			<thead>
					<tr>
						<th> Receiver Name</th>
						<th> status </th>
						<th> View </th>
					</tr>
			</thead>
			<tbody>
			<?php
					foreach ($cursor as $venue) 
					{
						echo "
								<tr>
								<td>{$venue  ['firstname']} {$venue  ['middlename']}  {$venue  ['middlename']} </td>
								<td>{$venue  ['status']} </td>
								<td>  

								


								<div class='action'><a href='approvepatient.php?key=".$venue['_id']."'>
 
								<button type='button' class='w3-btn w3-green w3-round w3-margin-bottom w3-medium' data-title='Confirm1' data-toggle='modal' data-target='' > 

								<span class='glyphicon glyphicon-eye-open'></span> View </button> </label>


								</td>
								</tr>
								";  
					}
	}	
	?>  
		</tbody>
		</table>	      
     




 </div>
      </div> 
				
	
	<!-- End Right	 Column -->
    </div>    



    
 <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
      </div>
          <div class="modal-body">
       
       <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>
       
      </div>
        <div class="modal-footer ">

				<?php echo "<div class='action'> <a href='approvepatient.php?order=".$venue['_id']."'> 
										<button type='button' class='btn btn-success'> <span class='glyphicon glyphicon-ok'></span> Delete </button> </a> </div>";  ?>

        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No </button>
      </div>
        </div>


    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>


<div class="modal fade" id="confirm" tabindex="-1" role="dialog" aria-labelledby="confirm" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading"> Confirm this entry</h4>
      </div>
          <div class="modal-body">
       
       <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to confirm this Record?</div>
       
      </div>
        <div class="modal-footer ">

       <?php echo "<div class='action'> <a href='approvepatient.php?process=".$venue['_id']."'> 
										<button type='button' class='btn btn-success'> <span class='glyphicon glyphicon-ok'></span> Confirm </button> </a> </div>";  ?>

        <div> <button type="button" class="btn btn-default" data-dismiss="modal"> <span class="glyphicon glyphicon-remove"></span> No </button> </div>
      </div>
        </div>


    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>



    </div>

  </body>
</html>

