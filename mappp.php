<?php
session_start();

unset($finalarray);
$con = new MongoClient();
$database = $con->organ;

$ch = curl_init();

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

if($_SESSION['rs']=="donor")
$collection = $database->donorinfo;
else if($_SESSION['rs']=="receiver")
$collection = $database->receiverinfo;
else
	echo "not";
if($venue = $collection->findOne(array("email"=>$_SESSION['pemail'])))
//if($venue = $collection->findOne(array("email"=>'1082@hotmail.com')))	
{
   
	$var1 = $venue['hospital'];
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
$collectionD = $database->receiverinfo;
$collection=$database->donorinfo;


$length = count($a);
 echo $length;
print_r($a);

for($i = 0; $i < $length; $i++)
{	
	echo "string";
  $venue2=$collection->findOne(array('email'=> $a[$i]));
  

  $array_count = count($venue2);


	if(!$array_count)
		$venue2 = $collectionD->findOne(array('email'=> $a[$i]));
	 
			

			
				$var2 = $venue2['hospital'];

				
				//echo "Receiver Name: ".$venue2['firstname']." ".$venue2['lastname']. " " .$venue2['email'].  "<br>";
				//echo "Receiver Hospital Address: ".$var2."<br>";


	  			$url = 'https://maps.googleapis.com/maps/api/distancematrix/json?origins='.$var1.'&destinations='.$var2;
				$url = str_replace(" ", '%20', $url);
				//echo $url;
	  			curl_setopt($ch, CURLOPT_URL, $url);
				$result = json_decode(curl_exec($ch), $assoc = true);

				//echo "Time :: ";		
				//print $result['rows'][0]['elements'][0]['duration']['value'];

				echo "Befor";
				if ($organtime >= $result['rows'][0]['elements'][0]['duration']['value'])
				{
				
				echo "Here";
					$finalarray[$a[$i]] = $venue2['priority'];

				}
				
				echo "After";
				
				//$venue2['hospital'];
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

//print_r(array_keys($sorted));

$collection->update(array("email"=>$_SESSION['pemail']),array('$set'=>array("matchlist"=>array())));

$collection->update(array("email"=>$_SESSION['pemail']),array('$push'=>array("matchlist"=>array('$each'=>array_keys($sorted)))));



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
