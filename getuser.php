<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php
if(isset($_GET['q']))
{

  echo $_GET['q'];
    $email = $_GET['q'];
    $con = new MongoClient();
    
if (!$con)
    die('Could not connect: ');

   $database = $con->organ;
   $collection = $database->docinfo;


    $cursor = $collection->find(array("Hos"=>$email));
    $cursor_count = $cursor->count();

    echo '<option value="">Select Doctor:</option>'; 
    foreach ($cursor as $venue)
        echo "<option value=".$venue['email'].">".$venue['fname']." ".$venue['lname']. "</option>";
}
?>
</body>
</html>