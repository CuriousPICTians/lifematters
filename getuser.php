<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php
if(isset($_GET['q']))
{

  echo $_GET['q'];
    $organ = $_GET['q'];
    $con = new MongoClient();
    
if (!$con)
    die('Could not connect: ');

   $database = $con->organ;
   $collection = $database->hospitalinfo;



if (organ==0)
{
    $cursor = $collection->find(array("LiverLicense"=>$organ));
}

if (organ==1) 
{
    $cursor = $collection->find(array("KidneyLicense"=>$organ));
} 

if(organ==2) 
{
    $cursor = $collection->find(array("HeartLicense"=>$organ));
}
    



    echo "<option value=''>Select Hospital:</option>"; 
    foreach ($cursor as $venue)
    {
        echo "<option value=".$venue['email'].">".$venue['fname']." ".$venue['lname']. "</option>";
    }


}

?>



</body>
</html>