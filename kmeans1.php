<h4>Receiver's E-mails Are ::</h4>

<?php

session_start();
unset($out);
unset($result);

$patient =$_SESSION['pemail'];

//echo $_SESSION['pemail'];
//$patient = "avinash@gmail.com"; 

//$_SESSION['patient']=$patient;


$con = new MongoClient();
$database = $con->organ;

$collection = $database->donorinfo;
$collectionD = $database->receiverinfo;

if($cursor=$collection->findOne(array("email"=>$patient)))
{   
	exec("Rscript kmeans.R $patient donor", $out);
	$_SESSION['rs']="donor";
//echo $patient;
}
else if($cursor=$collectionD->findOne(array("email"=>$patient)))
   {
   	echo $patient;
   	exec("Rscript kmeans.R $patient receiver", $out);
	$_SESSION['rs']="receiver";
	echo "123";
	}
	else
		echo "Not Possible";
	

	$length = count($out);

print_r($out);

	for ($i = 0; $i < $length; $i++)
	{


		foreach (explode("\n", $out[$i]) as $row)
		
		{

			if (strpos($row, ']') !== false)

				$numbersAsStr = substr($row, strpos($row, ']') + 1);

			else

				$numbersAsStr = $row;

	
		foreach (explode(' ', $numbersAsStr) as $potentialNumber)

			{

				if ($potentialNumber !== '')

				{

					$potentialNumber = trim($potentialNumber, '"');

					$result[] = $potentialNumber;

					
				}

			}
		}

	}



//echo "Email Is : " .$out[$i];



unset($_SESSION['result']);
$_SESSION['result']=$result;

$length = count($_SESSION['result']);
$length = count($result);

//echo "Email Is :: ".$a[5];


for($j = 0 ; $j < $length ; $j++)
{
//	echo "Email IS ::" .$result[$j];
echo "</br>";
echo "Email Is :: ".$result[$j];
echo "</br>";
}


?>

<script type="text/javascript">
window.location = "mappp.php";
</script>








