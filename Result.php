 <!DOCTYPE html>
 
<?php
session_start();
?>

<html lang="en">

<head>

  	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<!-- Latest compiled JavaScript -->
		<script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
		
		
		<!-- W3.CSS is a modern CSS framework -->		
		<link rel="stylesheet" href="w3.css">

<link rel="stylesheet" href="w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
  	
	
	/* edit profile css*/

.hve-pro {    background-color:rgb(255, 102, 0);padding: 5px; width:100%; height:auto;float:left;}
.hve-pro p {float: left;color:#fff;font-size: 15px;padding: 5px 20px;font-family: 'Noto Sans', sans-serif;}
h2.register { padding:10px 25px;font-size: 25px;color: rgb(255, 102, 0);}
.fom-main { overflow:hidden;}

legend {font-family: 'Bitter', serif;color:#ff3200;border-bottom:0px solid;}
.main_form {background-color: #;}
label.control-label {font-family: 'Noto Sans', sans-serif;font-weight: 100; margin-bottom:5px !important; 
text-align:left !important; text-transform:uppercase; color:#798288;}
.submit-button {color: #fff;background-color:rgb(255, 102, 0);width:190px;border: 0px solid;border-radius: 0px; transition:all ease 0.3s;margin: 5px;
float:left;}
.submit-button:hover, .submit-button:focus {color: #fff;background-color:rgb(0, 4, 51);}
.hint_icon {color:#ff3200;}
.form-control:focus {border-color: #ff3200;}
select.selectpicker { color:#99999c;}
select.selectpicker option { color:#000 !important;}
select.selectpicker option:first-child { color:#99999c;}
.input-group { width:100%;}
.uplod-picture {width: 100%; background-color:#;color: #fff; padding:20px 10px;margin-bottom:10px;}
.uplod-file {position: relative;overflow: hidden;color: #fff;background-color: rgb(0, 4, 51);border: 0px solid #a02e09;border-radius: 0px;
 transition:all ease 0.3s;margin: 5px;}
.uplod-file input[type=file] {position: absolute;top: 0;right: 0;min-width: 100%;min-height: 100%;font-size: 100px;text-align: right;

filter: alpha(opacity=0);opacity: 0;outline: none;background: white;cursor: inherit;display: block;}
.uplod-file:hover, .uplod-file:focus {color: #fff;background-color:rgb(255, 102, 0);}
h4.pro-title { font-size:24px; color:rgba(0, 4, 51, 0.96);  text-align:justify;padding: 10px 15px;font-family: 'Bitter', serif;}
.bio-table { width:75%;border:0px solid;}
.bio-table td {text-align: left;font-size: 15px;}
.bio-table>tbody>tr>td { border:0px solid;color: rgb(0, 4, 51); font-size:15px;}
.responsiv-table { border:0px solid;}
.nav-menu li a {margin: 5px 5px 5px 5px;position: relative;display: block;padding: 10px 50px;border: 0px solid !important;box-shadow: none !important;
background-color: rgb(0, 4, 51) !important;color: #fff !important;    white-space: nowrap;}
.nav-menu li.active a {background-color: rgb(255, 102, 0) !important;}
.stick{position:fixed !important;top:0;z-index:999 !important;width:100%;background:#ffffff !important;height:auto; transition:all ease 0.8s;
-webkit-box-shadow: 0px 2px 7px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 2px 7px 0px rgba(0,0,0,0.75);
box-shadow: 0px 2px 7px 0px rgba(0,0,0,0.75);}
.stick a { line-height:20px !important;}
.stick img { margin:0 !important;}

</style>
</head>

<body class="w3-theme-l5">

<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:10px">    
  <!-- The Grid -->
  <div class="w3-row">
    
    <!-- Middle Column -->
    <div class="w3-col m12">
    
      <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card-2 w3-round w3-white">
            <div class="w3-container w3-padding">
              <h6 class="w3-opacity "> Wel-Come </h6>
              
            </div>
          </div>
        </div>
      </div>
      
      <div class="w3-container w3-card-2 w3-white w3-round w3-margin"><br>
        <img src="img-1/ab.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:100px">
        <span class="w3-right w3-opacity">  </span>
        <h4> Patient information </h4><br>
       <hr>
       
        
<?php

		
   
	$con = new MongoClient();

if($con)
{
    $database=$con->organ;
   	$collection=$database->receiverinfo;
		
	for($i = 1;$i <= 2 ; $i++, $collection = $database ->donorinfo)
	{
  		if($i==1)
			$collection2=$database->donorinfo;	
		else
			$collection2=$database->receiverinfo;

  		$cursor = $collection->find(array('Doc'=>$_SESSION['email']));
	
		foreach ($cursor as $obj)
		{
			
			$o = organtype($obj['organ']);
			
			$b = bloodgroup($obj['blood']);
    	
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
		<th>Patient Type</th>
		<th>Status</th>
		</tr>
		</thead>
		<tbody>
		
		
<?php
		echo "<tr>";
		if(isset($obj['email']))echo"<td>".$obj['email']."</td>";
		else
			echo"<td>NA</td>";
		if(isset($obj['firstname']))echo "<td>{$obj  ['firstname']}</td>";
		else
			echo"<td>NA</td>";
		if(isset($obj['lastname']))echo"<td>{$obj  ['lastname']}</td>";
		else
			echo"<td>NA</td>";
		if(isset($obj['gender']))echo"<td>{$obj  ['gender']}</td>";
		else
			echo"<td>NA</td>";
		if(isset($obj['day']))echo"<td>{$obj  ['day']} </td>";
		else
			echo"<td>NA</td>";	
		if(isset($obj['blood']))echo"<td> $b </td>";
		else
			echo"<td>NA</td>";
		if(isset($obj['dobplace']))echo"<td>{$obj  ['dobplace']}</td>";
		else
			echo"<td>NA</td>";

		if(isset($obj['mobileno']))echo"<td>{$obj  ['mobileno']}</td>";
		else
			echo"<td>NA</td>";
		if(isset($obj['address']))echo"<td>{$obj  ['address']}</td>";
		else
			echo"<td>NA</td>";
		if(isset($obj['city']))echo"<td>{$obj  ['city']}</td>";
		else
			echo"<td>NA</td>";
		if(isset($obj['state']))echo"<td>{$obj  ['state']}</td>";
		else
			echo"<td>NA</td>";
		
/*
		if(isset($obj  ['nati']))echo"<td>{$obj  ['nati']}</td>";
		else
			echo"<td>NA</td>";  */
		if(isset($obj['hospital']))echo"<td>{$obj  ['hospital']}</td>";
		else
			echo"<td>NA</td>";
		if(isset($obj['organ']))echo"<td>$o</td>";
		else
			echo"<td>NA</td>";

		if($i==1)
			echo "<td> Receiver </td>";
		else
			echo "<td> Donor </td>";

		if(isset($obj['approved']))
			if($obj['approved']==1)
				echo "<td> Approved </td>";
			else
				echo "<td> Not Approved </td>";
		else
			echo"<td>NA</td>";
		echo"</tr>";

		echo"</tbody>";
		echo"</table>";
		


		if(isset($obj['matchlist']))
		{
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
		
		
			$c=count($obj['matchlist']);
		
		
		for($list = 0 ; $list< $c ; $list++)
		{
			$r=$collection2->findOne(array("email"=>$obj['matchlist'][$list]));

			
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

		}
			echo "<hr>";
			echo "-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------";
			echo "</br>";
	}
}

}
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


?>

