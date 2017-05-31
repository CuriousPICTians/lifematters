<?php

session_start();
$con = new MongoClient();
$ch = curl_init();

$database=$con->organ;

$collection=$database->donorinfo;
$cursor = $collection->find();
foreach ($cursor as $venue)
{
	$var1 = $venue['info'] ['address'];
	echo "Donor Name: ".$venue['info'] ['firstname']."<br>";
	echo "Donor Address: ".$var1."<br>";
  
	$collection=$database->receiverinfo;
	$cursor2 = $collection->find();
	foreach ($cursor2 as $venue2)
	{
  	
		$var2 = $venue2['info'] ['address'];
		echo "Receiver Name: ".$venue2['info'] ['firstname']."<br>";
		echo "Receiver Address: ".$var2."<br>";
  
	  	$url = 'https://maps.googleapis.com/maps/api/distancematrix/json?origins='.$var1.'&destinations='.$var2;

	  	curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$result = json_decode(curl_exec($ch), $assoc = true);
	
		print $result['rows'][0]['elements'][0]['duration']['text'];
		echo "<br>";
	}
	echo "----------------------------------------------------"."<br>";
}

?>
