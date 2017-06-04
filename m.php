<?php

session_start();


//echo "Email Is :: ".$a[1];

$con = new MongoClient();
$database = $con->organ;
$collection = $database->receiverinfo;
$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
/***********Proxy*********************/								//comment out if not using proxy
//curl_setopt($ch, CURLOPT_PROXY, "192.168.8.253");
//curl_setopt($ch, CURLOPT_PROXYPORT, 3128);
/*************************************/
/*
$collection = $database->donorinfo;
//$cursor = $collection->find(array('email'=>$_SESSION['email']));
//$cursor = $collection->find();
$cursor = $collection->find(array('email'=> "bhau@gmail.com" ));


$i = $j = 1;														//remove or modify

foreach ($cursor as $venue)

{
if($i > 10) break;													//remove or modify


	$var1 = $venue['hospital'];
	echo "Donor Name: ".$venue['firstname']." ".$venue['lastname']."<br>";
	echo "Donor Hospital Address: ".$var1."<br>";

*/
echo "----------------------------------------------------"."<br>";
$var1="KEM Hospital Mumbai";

$a=$_SESSION['result'];

$length = count($a);
  
  for($i=0;$i<$length;$i++)
	{	
  
	
	



//$cursor2 = $collection->find(array('email'=> "7119@gmail.com" ));
//$cursor2 = $collection->find();	

//echo "Email Is :: ".$a[$i];

$v= $collection->find(array('email'=> $a[$i]));


foreach ($v as $venue2)

	{

//if($j > 4) {$j = 4; break;}			//remove or modify

		$var2 = $venue2['hospital'];
		echo "Receiver Name: ".$venue2['firstname']." ".$venue2['lastname']. " " .$venue2['email'].  "<br>";
		echo "Receiver Hospital Address: ".$var2."<br>";


	  	$url = 'https://maps.googleapis.com/maps/api/distancematrix/json?origins='.$var1.'&destinations='.$var2;
		$url = str_replace(" ", '%20', $url);

	  	curl_setopt($ch, CURLOPT_URL, $url);
		$result = json_decode(curl_exec($ch), $assoc = true);

echo "Time :: ";		
print $result['rows'][0]['elements'][0]['duration']['value'];
		echo "<br>";
echo "<br>";
//$j++;																//remove or modify
	
	echo "----------------------------------------------------"."<br>";
//$i++;																//remove or modify
}

}
curl_close($ch);
?>
