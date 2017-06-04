<!DOCTYPE html>
<html lang="en">

<head>

<title> Registration </title>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.min.css">


<!--  jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

<!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>


    <!-- W3.CSS is a modern CSS framework -->   
    <link rel="stylesheet" href="w3.css">

<link rel="stylesheet" href="w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>   

   li:hover {
    background-color: #C8C8C8 ;
}
 .blue {
    color: green;
}
      form {
          padding-left: 20px;
          padding-right: 10px;
      }
.b
{
    margin-bottom:30px;

}


</style>  
</head>

<script>
    $(document).ready(function(){
      var date_input=$('input[name="day"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'dd-MM-yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
    })
</script>


<body>


<?php

session_start();

  $con = new MongoClient();


    $database=$con->organ;

    $collection1=$database->docinfo;


 $cursor1 = $collection1->find();

 $cursor_count1 = $cursor1->count();

 if($cursor_count1)

  //foreach ($cursor as $venue) 
{
?>

<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1100px;margin-top:20px">    

<form class="form-horizontal" method="post" action="">

  <!-- The Grid -->
  <div class="w3-row">
  
  

<!-- Left Column -->
    <div class="w3-col m5">      

              

      <div class="w3-card-2 w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center"> ADD or Change Doctor </h4>
         <p class="w3-center"><img src="img/doc.png" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
         <hr>
        
<div class="form-inline">

    <label for="ex2"> <b>Select Doctor :- </b> </label> &nbsp;&nbsp;&nbsp;&nbsp;
                     
 <select name="Doc" class="form-control" style="width:220px;">

       <?php foreach ($cursor1 as $venue) 
        {
       ?>
    
            <?php 
             if($venue['status']==Confirmed)    

            echo  "<option value= " .$venue['email']. " >" .$venue['email']. "</option>"; ?>\
        <?php
         }
        ?>
      </select>       
    

</div>

<hr>

          <div class="form-group row">
           
                       <div class="col-md-8 text-center">
              <button type="submit" name="submit" value="submit" class="btn btn-large btn-success"> Select </button>
              <button class="btn btn-large btn-danger" type="button" onclick=history.go(-1)> Cancel </button>
            </div>
          </div>



        </div>
      </div> 
        
        <!-- End Left Column -->
    </div>


          <?php } ?>

<!-- End Grid -->
</div>


</form>


<!-- End Page Container -->
</div>



<?php

//session_start();

  $con = new MongoClient();
  $database=$con->organ;
  $collection=$database->receiverinfo;

  $cursor = $collection->find(array("email" => $_SESSION['email']));

  $cursor_count = $cursor->count();

  if($cursor_count)

  foreach ($cursor as $venue) 
{

    if(isset($_POST['submit']))
{

    $Doc=$_POST['Doc'];
    $data=array('Doc'=>$Doc,"status"=>"pending");
    $cursor=$collection->update(array("email" => $_SESSION['email']),array('$set' => $data));


    ?>

  <script>
  alert('Successfully ');
                  window.location.href="RecieverDetail.php";
               </script>

<?php
  }

}



?>

</body>
</html>
