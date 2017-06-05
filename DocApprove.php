

<?php
session_start();
$email = $_SESSION['email'];

$con = new MongoClient();

    if($con)
    {
      //connecting to database
      $database=$con->organ;

      //connect to specific collection
      $collection=$database->docinfo;
      //$collection1=$databse->donorinfo;
     //$collection2=$databse->receiverinfo;
    
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
          

        $collection -> update(array('_id' => new MongoId($_GET['order'])), array('$set' => array('status' => 'pending','Hos' => 'unlink')));
	

      ?>
      <script>alert("Doctor Has Been Deleted Successfully..!!");</script>
      <?php
    
    }





  } 

if(isset($_GET['key']))
  {
  	$cursor = $collection -> find(array('_id' => new MongoId($_GET['key'])));
  	
		foreach($cursor as $venue)
		{


	 echo "<table class='table table-bordred table-striped custab'>
      <caption> <h4 style='text-align:center;'> <b> Doctor Details</b> </h4> </caption>
      <tr>
        <th> Full Name </th>
        <th> Hospital </th>
        <th> Registration no. </th>
        <th> State Medical Council </th>
        <th> Contact Number </th>
        <th> Email-ID</th>
        <th> Date of Regi. </th>
        <th> qualification </th>
        <th> qualification year </th>
        <th> University </th>
        <th> Actions </th>

      </tr>
      <tr>
        <td>".$venue['fname']." ".$venue['mname']." ".$venue['lname']."</td>
        <td>".$venue['Hos']."</td>
        <td>".$venue['grno']."</td>
        <td>".$venue['medicalcouncil']."</td>
        <td>".$venue['docphno']."</td>
        <td>".$venue['email']."</td>
        <td>".$venue['day']."</td>
        <td>".$venue['qualifi']."</td>
        <td>".$venue['day1']."</td>
        <td>".$venue['univername']."</td>


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
			<script>alert("Doctor Confirmed Already..!!");</script>
			<?php
		}	
		else
		{
		$collection -> update(array('_id' => new MongoId($_GET['process'])), array('$set' => array('status' => 'confirmed')));
		?>
		<script>alert("Doctor has been Confirmed..!!");</script>
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

<div class="w3-container w3-content" style="max-width:1400px;margin-top:20px">    

<div class="w3-container-fluid ">
            <?php
          	
          		echo "<h4 style='text-align:center;'> <b> List Of Doctors:- </b> </h4>";

          ?>

      <table class="table table-responsive table-bordered table-hover custab table-condensed" >

      <tr>
        
<th> Doctor Name </th>
<th> Doctor R.G.NO</th>
<th> Doctor Email </th>
<th> Doctor Hospital </th>
<th> Status</th>
<th> Action</th>

</tr>
<?php

    //if($email == $_SESSION['email'])
    $result=$collection -> find(array("Hos"=> $_SESSION['email']  ));
    //else
    //$result=$collection->find(array('complaint.email'=>$email));

    foreach($result as $venue)
    {

      echo "<tr>";
      echo "<td>".$venue['fname']." ".$venue['mname']. " " .$venue['lname']. "</td>";
      echo "<td>".$venue['grno']."</td>";
      echo "<td>".$venue['email']."</td>";
      echo "<td>".$venue['Hos']."</td>";
      echo "<td style='font-weight:bold;";

			if($venue ['status'] == 'Confirmed')
			echo "color:green'>";
			else
			echo "color:red'>";
                
      echo $venue  ['status']."</td>";


echo "<td><div class='action'><a href='DocApprove.php?key=".$venue['_id']."'> 
			<button type='button' class='btn btn-info btn-xs' > <span class='glyphicon glyphicon-eye-open'></span> View </button>  </a></div>";
        
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

				<?php echo "<div class='action'> <a href='DocApprove.php?order=".$venue['_id']."'> 
										
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

       <?php echo "<div class='action'> <a href='DocApprove.php?process=".$venue['_id']."'> 
									
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
