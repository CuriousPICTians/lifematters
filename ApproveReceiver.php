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
  	
		foreach($temp as $venue)
		{
			//$collection -> remove(array('_id' => new MongoId($_GET['order'])));
		$collection -> update(array('_id' => new MongoId($_GET['order'])), array('$set' => array('status' => 'pending','Doc' => 'unlink')));
			?>
			<script>alert("Patient has been Deleted Successfully..!!");</script>
			<?php
		
		}
  } 

if(isset($_GET['key']))
  {
  	$cursor = $collection -> find(array('_id' => new MongoId($_GET['key'])));
  	
		foreach($cursor as $venue)
		{


	 echo "<table class='table table-bordred table-striped custab'>
      <caption> <h4 style='text-align:center;'> <b> Receiver Details</b> </h4> </caption>
      <tr>
        <th> Name </th>
        <th> Gender</th>
        <th> Blood Group </th>
        <th> Organ</th>
        <th> Hospital</th>
        <th> Action</th>

      </tr>
      <tr>
        <td>".$venue['firstname']. " " .$venue['middlename']. " " .$venue['lastname']."</td>
        <td>".$venue['gender']."</td>  ";

if($venue['blood']==1)
echo "<td> A+ </td>";

if($venue['blood']==2)
echo "<td> A- </td>";

if($venue['blood']==3)
echo "<td> B+ </td>";

if($venue['blood']==4)
echo "<td> B- </td>";

if($venue['blood']==5)
echo "<td> O+ </td>";

if($venue['blood']==6)
echo "<td> O- </td>";

if($venue['blood']==7)
echo "<td> AB+ </td>";

if($venue['blood']==8)
echo "<td> AB- </td>";


if($venue['organ']==1)
echo"<td> Kidney </td>";

if($venue['organ']==2)
echo"<td> Liver </td>";

if($venue['organ']==3)
echo"<td> Heart</td>";  


echo"  <td>".$venue['hospital']."</td>

				<td> 
						<button class='btn btn-success btn-xs w3-teal' data-title='Confirm' data-toggle='modal' data-target='#confirm' ><span class=''> Confirm</span></button>
						<button class='btn btn-danger btn-xs' data-title='Delete' data-toggle='modal' data-target='#delete' ><span class='glyphicon glyphicon-trash'></span> Delete </button>
				</td>
      </tr>
      </table>";
		     


}
}

	
  /* Update pending status to confirm in Database  */

  if(isset($_GET['process']))
  {
		$temp = $collection -> find(array('_id' => new MongoId($_GET['process'])));
  	
		foreach($temp as $venue)
		{
		if($venue['status'] == "Confirmed" )
		{
			?>
			<script>alert("Patient confirmed already..!!");</script>
			<?php
		}	
		else
		{
		$collection -> update(array('_id' => new MongoId($_GET['process'])), array('$set' => array('status' => 'Confirmed')));
		?>
		<script>alert("Patient has been Confirmed..!!");</script>
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

<body class="w3-content" style="max-width:1000px">

<div class="w3-container-fluid ">

<?php
   		echo "<h3 style='text-align:left;'> List Of Receiver:- </h3>";
?>

<table class="table table-responsive table-bordered table-hover custab table-condensed" >

	<tr>
		<th> Receiver Name</th>
		<th> Status </th>
		<th> Action</th>
  </tr>

<?php
    if($email == $_SESSION['email'])
   	$result=$collection -> find(array("Doc"=> $_SESSION['email']  ));
    else
    $result=$collection->find(array('complaint.email'=>$email));
    foreach($result as $venue)
    {
    	echo "<tr>";
			echo "<td>".$venue['firstname']." ".$venue['middlename']. " " .$venue['lastname']. "</td>";

	    echo "<td style='font-weight:bold;";

				 	if($venue ['status'] == 'Confirmed')
				 		echo "color:green'>";
			    	else
			    	echo "color:red'>";
            echo $venue  ['status']."</td>";

			echo "<td>
								<div class='action'><a href='ApproveReceiver.php?key=".$venue['_id']."'> 
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

				<?php echo "<div class='action'> <a href='ApproveReceiver.php?order=".$venue['_id']."'> 

      						<button type='button' class='btn btn-success'> <span class='glyphicon glyphicon-ok'></span> YES </button> </a> 
                  <button type='button' class='btn btn-default w3-red' data-dismiss='modal'> <span class='glyphicon glyphicon-remove'></span> NO </button> </div>";  ?>

              </div>
        </div>


    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>


<div class="modal fade" id="confirm" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
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

       <?php echo "<div class='action'> <a href='ApproveReceiver.php?process=".$venue['_id']."'> 
								
                	<button type='button' class='btn btn-success'> <span class='glyphicon glyphicon-ok'></span> YES </button> </a> 
                  <button type='button' class='btn btn-default w3-red' data-dismiss='modal'> <span class='glyphicon glyphicon-remove'></span> NO </button> </div>";  ?>

      </div>
        </div>


    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>


   </div>
  </body>
</html>