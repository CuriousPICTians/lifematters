<?php
session_start();

unset($finalarray);
$con = new MongoClient();
$database = $con->organ;
$collectionH=$database->hospitalinfo;

$ch = curl_init();

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

if($_SESSION['rs']=="donor")
$collection = $database->donorinfo;
else if($_SESSION['rs']=="receiver")
$collection = $database->receiverinfo;
else
	echo "not";
if($venue = $collection->findOne(array("email"=>$_SESSION['pemail'])))
//if($venue = $collection->findOne(array("email"=>'avinash@gmail.com')))	
{
   $hoemail = $venue['hospital'];

				$venue3=$collectionH->findOne(array('email'=>$hoemail));
				
				$var1=$venue3['hospital_name'];

	echo "Donor Name: ".$venue['firstname']." ".$venue['lastname']." ".$venue['email']."<br>";
	echo "Donor Hospital Address: ".$var1."<br>";
	echo "Organ name: ".$venue['organ']."<br>";
	echo "priority: ".$venue['priority']. "<br>";


echo "----------------------------------------------------"."<br>";


if($venue['organ']==0)
	$organtime=129600;  //6hrs
else if($venue['organ']==1)
	$organtime=43200;
else if($venue['organ']==2)
	$organtime=21600;

else
	echo "Organ not Found";


$a=$_SESSION['result'];
if($_SESSION['rs']=="donor")
$collection2 = $database->receiverinfo;
else if($_SESSION['rs']=="receiver")
$collection2 = $database->donorinfo;
else
	echo "not";
$length = count($a);
 for($i = 0; $i < $length; $i++)
{	
	$venue2 = $collection2->findOne(array('email'=> $a[$i]));
	 
	$hoemail = $venue2['hospital'];

	$venue3=$collectionH->findOne(array('email'=>$hoemail));
				
	$var2=$venue3['hospital_name'];
				//echo "Receiver Name: ".$venue2['firstname']." ".$venue2['lastname']. " " .$venue2['email'].  "<br>";
				//echo "Receiver Hospital Address: ".$var2."<br>";


	$url = 'https://maps.googleapis.com/maps/api/distancematrix/json?origins='.$var1.'&destinations='.$var2 .'&key=AIzaSyB2ObLV1jRhll-pZjRqv7qZF6ezO-34QIc';
	$url = str_replace(" ", '%20', $url);
	//echo $url;
	curl_setopt($ch, CURLOPT_URL, $url);
	$result = json_decode(curl_exec($ch), $assoc = true);

	//echo "Time :: ";		
	//print $result['rows'][0]['elements'][0]['duration']['value'];
	if ($organtime >= $result['rows'][0]['elements'][0]['duration']['value'])
	{
				
	$finalarray[$a[$i]] = $venue2['priority'];

	}
				
			
				
				/*$venue2['hospital'];
				echo "Receiver Name: ".$venue2['firstname']." ".$venue2['lastname']. " " .$venue2['email'].  "<br>";
				echo "Receiver Hospital Address: ".$var2."<br>";
				echo "priority: ".$venue2['priority']."<br>";

				echo "Time :: ";		
				print $result['rows'][0]['elements'][0]['duration']['value'];
				
				echo "<br>";
				echo "<br>";
																//remove or modify
	
				echo "----------------------------------------------------"."<br>";
															//remove or modify
			*/

		$collection2->update(array('email'=> $a[$i]),array('$push'=>array("matchlist"=>array('$each'=>array($_SESSION['pemail'])))));

	}

$length = count($finalarray);

foreach ($finalarray as $k => $v) {

	//echo "value =".$k.  "Key =" .$v ;

    $groups[$v][] = $k;
}
krsort($groups);

foreach ($groups as $value => $group) {
    foreach ($group as $key) {
        $sorted[$key] = $value;
    }
}

print_r(array_keys($sorted));

$collection->update(array("email"=>$_SESSION['pemail']),array('$set'=>array("matchlist"=>array())));
//$collection->update(array("email"=>'avinash@gmail.com'),array('$set'=>array("matchlist"=>array())));

$collection->update(array("email"=>$_SESSION['pemail']),array('$push'=>array("matchlist"=>array('$each'=>array_keys($sorted)))));
//$collection->update(array("email"=>'avinash@gmail.com'),array('$push'=>array("matchlist"=>array('$each'=>array_keys($sorted)))));




/*
for($j = 0 ; $j < $length ; $j++)
{
//	echo "Email IS ::" .$result[$j];
echo "</br>";
echo "Email Is :: ".$finalarray[$j];
echo "</br>";
}
*/

}



curl_close($ch);
?>
