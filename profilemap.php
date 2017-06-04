<?php

session_start();
$con = new MongoClient();
/*$ch = curl_init();

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
/***********Proxy*********************								//comment out if not using proxy
curl_setopt($ch, CURLOPT_PROXY, "192.168.16.253");
curl_setopt($ch, CURLOPT_PROXYPORT, 3128);
/*************************************/
$database = $con->organ;

$collection = $database->donorinfo;
$cursor = $collection->find();

$i = 1;														//remove or modify
foreach ($cursor as $venue)
{
if($i > 10) break;													//remove or modify
	$var1 = $venue['hospital'];
	echo "Donor Name: ".$venue['firstname']." ".$venue['lastname']."<br>";
	echo "Donor Hospital Address: ".$var1."<br>";

	$url = 'https://maps.googleapis.com/maps/api/staticmap?size=640x640&markers='.$var1;
	$url = str_replace(" ", '%20', $url);

	print '<img src="'.$url.'"></img>';
//	curl_setopt($ch, CURLOPT_URL, $url);

	echo "<br>";
	echo "----------------------------------------------------"."<br>";
$i++;																//remove or modify
}

//curl_close($ch);
?>
