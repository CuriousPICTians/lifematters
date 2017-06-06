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

	echo "Donor Name: ".$venue['firstname']." ".$venue['lastname']."<br>Email: ".$venue['email']."<br>";
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

//print_r(array_keys($sorted));

$collection->update(array("email"=>$_SESSION['pemail']),array('$set'=>array("matchlist"=>array())));
//$collection->update(array("email"=>'avinash@gmail.com'),array('$set'=>array("matchlist"=>array())));

$c=$collection->update(array("email"=>$_SESSION['pemail']),array('$push'=>array("matchlist"=>array('$each'=>array_keys($sorted)))));
//$collection->update(array("email"=>'avinash@gmail.com'),array('$push'=>array("matchlist"=>array('$each'=>array_keys($sorted)))));





}
//if(isset($obj['matchlist']))
//		{
			echo "<b> Patients Matched : </b>"."</br>";
?>

		 <table class="table table-responsive bio-table table-bordered table-hover table-condensed" >
		<thead>
		<tr>
		<th>Patient's Email-ID </th>
		<th>First Name </th>
		<th>Last Name</th>
		<th>Gender</th>
		<th>Birth Date</th>
		<th>Blood Group</th>
		<th>Birth Place</th>
		<th>Mobile NO</th>
		<th>Address</th>
		<th>City</th>
		<th>State</th>
		
		<th>Hospital</th>
		<th> Donated Organ</th>
		</tr>
		</thead>

		<tbody>

<?php	
		
		
			//$c=count($obj['matchlist']);
		echo $c;
		
		for($list = 0 ; $list< $c ; $list++)
		{
			$r=$collection->findOne(array("email"=>$obj['matchlist'][$list]));

			
			echo "<tr>";
			if(isset($r['email']))echo"<td>".$r['email']."</td>";
			else
				echo"<td>NA</td>";
			if(isset($r['firstname']))echo "<td>{$r['firstname']}</td>";
			else
				echo"<td>NA</td>";
			if(isset($r['lastname']))echo"<td>{$r['lastname']}</td>";
			else
				echo"<td>NA</td>";
			if(isset($r['gender']))echo"<td>{$r['gender']}</td>";
			else
				echo"<td>NA</td>";
			if(isset($r['day']))echo"<td>{$r['day']} </td>";
			else
				echo"<td>NA</td>";	
			if(isset($r['blood']))echo"<td>".bloodgroup($r['blood'])."</td>";
			else
				echo"<td>NA</td>";
			if(isset($r['dobplace']))echo"<td>{$r['dobplace']}</td>";
			else
				echo"<td>NA</td>";

			if(isset($r['mobileno']))echo"<td>{$r['mobileno']}</td>";
			else
				echo"<td>NA</td>";
			if(isset($r['address']))echo"<td>{$r['address']}</td>";
			else
				echo"<td>NA</td>";
			if(isset($r['city']))echo"<td>{$r['city']}</td>";
			else
				echo"<td>NA</td>";
			if(isset($r['state']))echo"<td>{$r['state']}</td>";
			else
				echo"<td>NA</td>";
		

			/*if(isset($obj  ['nati']))echo"<td>{$obj  ['nati']}</td>";
			else
				echo"<td>NA</td>";  
			*/

			if(isset($r['hospital']))echo"<td>{$r['hospital']}</td>";
			else
				echo"<td>NA</td>";
			if(isset($r['organ']))echo"<td>".organtype($r['organ'])."</td>";
			else
				echo"<td>NA</td>";
			echo"</tr>";
		}
			echo"</tbody>";
			echo"</table>";

		//}
			echo "<hr>";
			echo "-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------";
			echo "</br>";


?>
</body>
</html>
<?php
function bloodgroup($a)
{
	switch($a)
	{
		case 0:
            $b = "A+";
            break;
		case 1:
            $b = "A-";
   	 		break;
   	 	case 2:
            $b = "B+";
			break;
		case 3:
            $b = "B-";
            break;
		case 4:
           $b = "O+";
           break;
    	case 5:
            $b = "O-";
            break;
    	case 6:
           	$b = "AB+";
           	break;
		case 7:
            $b = "AB-";
            break;
        default:
        	print("Unknown bloodgroup\n");
        	echo $a;
   	}
      return $b;
}

function organtype($a)
{
	switch($a)
	{
		case 0:
            $b = "Kidney";
            break;
		case 1:
            $b = "Liver";
            break;
   	 	case 2:
            $b = "Heart";
            break;
        default:
        	
        	print("Unknown bloodgroup\n");
   			echo $a;
   	}
      return $b;
}

curl_close($ch);
?>
