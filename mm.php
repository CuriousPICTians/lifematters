<?php
session_start();

/*
$con = new MongoClient();

$database=$con->organ;
$collection=$database->kresult;

//$collection->insert(array("email"=>$result));
*/


$a=$_SESSION['result'];

$length = count($a);

//echo "Email Is :: ".$a[5];


for($j = 0 ; $j < $length ; $j++)
{
//	echo "Email IS ::" .$result[$j];
echo "</br>";
echo "Email Is :: ".$a[$j];
echo "</br>";

}






/*
echo "</br>";
echo "Email Is :: ".$a[$j];
echo "</br>";
}
*/
//print_r($result[$i]);

//echo "Email Is :: ".$result[$i];

?>