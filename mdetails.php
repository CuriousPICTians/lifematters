<!DOCTYPE html>

<?php
    session_start();
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
<body>


<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:20px">    

  <!-- The Grid -->
  <div class="w3-row">

<!-- Middle Column -->
    <div class="w3-col m8">

    <div class="w3-row-padding">
        <div class="w3-col m12">
            <div class="w3-card-2 w3-round w3-white">
                <div class="w3-container">

            

    <form method="POST" enctype="multipart/form-data" action="">
    

    <div class="w3-container w3-padding">
              <h5 class="w3-center "> <b> Patient Reports Upload </b> </h5>          
    </div>

<hr>

    <div  class="col-xs-5">
        
        <label for="r1"> <h6> <b> Report 1 :- <b> </h6></label>
        <input type="text"  class="form-control" name="report1" id="report1">

    </div>


    <div  class="col-xs-5">
        
        <label for="pic"> <h6> <b> Upload Report <b> </h6></label>
        <input type="file"  class="form-control" name="pic" id="pic">

    </div>

    <br>
    <br>
    <br>

   <!-- <label for="r1">Report 1:</label>
    <input class="form-control"  type="text" name="report1" id="report1" />
    <label for="pic">Please upload Report:</label>
    <br><br>
    <input type="file" name="pic" id="pic" />
    
    <hr> -->


    <?php
        
    if( $report1=$_POST['report1'])
     echo '<a href="d_test.php?file=picture.jpg">Download</a>';
 
    ?> 


    <div  class="col-xs-5">
        
        <label for="r2"> <h6> <b> Report 2 :- <b> </h6></label>
        <input type="text"  class="form-control" name="report2" id="report2">

    </div>


    <div  class="col-xs-5">

        <label for="pic"> <h6> <b> Upload Report <b> </h6></label>
        <input type="file"  class="form-control" name="pic1" id="pic1">

    </div>

    <hr>


    <!--<label for="r2">Report 2:</label>    
    <input type="text" name="report2" id="report2" />
    <label for="pic">Please upload Report:</label>
    <br><br>
    <input type="file" name="pic1" id="pic1" />-->
    
    
<?php

 if( $report2=$_POST['report2'])
    
        echo '<a href="r2.php?file=picture.jpg">Download</a>';
    
?>


<hr>


<div class="w3-container w3-padding">
              <h5 class="w3-left "> <b> Enter Patient's priority : </b> </h5>          
    </div>

 <br/><br/>

                <input type="radio" name="priority" value="0"> Normal [Stage 1] <br/><br/>
                <input type="radio" name="priority" value="1"> Not Normal [Stage 2] <br/><br/>
                <input type="radio" name="priority" value="2"> Serious     [Stage 3]   <br/><br/>
                <input type="radio" name="priority" value="3"> Very Serious [Stage 4] <br/><br/>
                <input type="radio" name="priority" value="4"> Too Serious  [Stage 5]  <br/><br/>

                <hr>

                <input type="checkbox" name="approved" value="1"> Click To Approve  <br/><br/>

<?php

 $m = new MongoClient();



$report1=$_POST['report1'];
$_SESSION['report1']=$report1;

$report2=$_POST['report2'];
$_SESSION['report2']=$report2;

$priority=$_POST['priority'];
    
$approved=$_POST['approved'];



$gridfs = $m->selectDB('organ')->getGridFS();


    //$m = new Mongoclient();
    $db = $m->organ; //Change to your database
   

        $collection = $db->donorinfo;

        $collectionD= $db->receiverinfo;


if(isset($_POST['submit']))
{
    if(isset($report1))
    {
        $gridfs->storeUpload('pic', array('report1' => $_POST['report1'],'email' => $_SESSION['pemail']));
    }
   //echo '<a href="d_test.php?file=picture.jpg">Download</a>';
    if(isset($report2))
    {
        $gridfs->storeUpload('pic1', array('report2' => $_POST['report2'],'email' => $_SESSION['pemail']));
   // echo '<a href="r2.php?file=picture.jpg">Download</a>';
    }
    
    else
        echo "no";

                    $patient=array("priority"=>$priority);
                   
                    $p=array("approved"=>$approved);
                   
        if($approved == 1)
        {

echo $_SESSION['pemail'];
                
            $collection->update(array("email" => $_SESSION['pemail']),array('$set' => array('priority'=>$priority,'approved' => "1")));
            $collectionD->update(array("email" => $_SESSION['pemail']),array('$set' => array('priority'=>$priority,'approved' => "1")));
}
?>

<!--<!button type="reset" class="btn btn-large btn-success" onclick="location.href='kmeans.php'">  <!/button> -->
<script type="text/javascript">
window.location = "kmeans1.php";
</script>

<?php 
}
?> 


<hr>
<button type="submit" name ="submit" class="btn btn-large btn-success" onclick="location.href='kmeans1.php'" >submit</button>
<br>
<br>
</form>


                </div>
            </div>
        </div>
    </div> 

          
  <!-- End Middle Column -->
    </div>

    </div>
    </div>


</body>
</html>





