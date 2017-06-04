<?php

session_start();
$con = new MongoClient();
$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
/***********Proxy*********************/								//comment out if not using proxy
<<<<<<< HEAD
<<<<<<< HEAD
curl_setopt($ch, CURLOPT_PROXY, "192.168.16.253");
curl_setopt($ch, CURLOPT_PROXYPORT, 3128);
=======
//curl_setopt($ch, CURLOPT_PROXY, "192.168.8.253");
//curl_setopt($ch, CURLOPT_PROXYPORT, 3128);
>>>>>>> upstream/master
=======
curl_setopt($ch, CURLOPT_PROXY, "192.168.16.253");
curl_setopt($ch, CURLOPT_PROXYPORT, 3128);
>>>>>>> upstream/master
/*************************************/
$database = $con->organ;


$collection = $database->donorinfo;
$cursor = $collection->find();


$i = $j = 1;														//remove or modify

foreach ($cursor as $venue)

{
if($i > 10) break;													//remove or modify


	$var1 = $venue['hospital'];
	echo "Donor Name: ".$venue['firstname']." ".$venue['lastname']."<br>";
	echo "Donor Hospital Address: ".$var1."<br>";
  
	$collection = $database->receiverinfo;
	$cursor2 = $collection->find();

	
foreach ($cursor as $venue2)

	{
if($j > 1) {$j = 1; break;}											//remove or modify

		$var2 = $venue2['hospital'];
		echo "Receiver Name: ".$venue2['firstname']." ".$venue2['lastname']."<br>";
		echo "Receiver Hospital Address: ".$var2."<br>";


	  	$url = 'https://maps.googleapis.com/maps/api/distancematrix/json?origins='.$var1.'&destinations='.$var2;
		$url = str_replace(" ", '%20', $url);	

	  	curl_setopt($ch, CURLOPT_URL, $url);
		$result = json_decode(curl_exec($ch), $assoc = true);

		print $result['rows'][0]['elements'][0]['duration']['value'];
		echo "<br>";
$j++;																//remove or modify
	}
	echo "----------------------------------------------------"."<br>";
$i++;																//remove or modify
}

curl_close($ch);
?>
