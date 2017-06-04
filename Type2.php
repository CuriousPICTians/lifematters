<!DOCTYPE html>
<html lang="en">
<head>
<title>Organ Donation</title>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
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

</head>

<style>

html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}

</style>
 
</head>
<body>

<form method="post" action="DeadDonor.php">


<div class="w3-col m7">
    
      <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card-2 w3-round w3-white">
            <div class="w3-container w3-padding">
              <h6 class=""> After Death you can Donote : </h6>
<hr>
<ol>
									<li>Full Body :-</li>
									<ul><li>Full Body Goes to Mediacl Collage For Students Practicing perpose.</li> </ul>
										  <br>
									<li>Selected Organs :- </li>
									<ul><li>Both Kidneys.</li>
										<li>Liver.</li>
										<li>Heart.</li>
										<li>Bones.</li>
										<li>Skin.</li>
										<li>Eyes.</li>
										<li>A Portion of the Liver.</li>
										<li>Pancreas or Intestine.</li> 
								
								</ol> 
									<br>
									
									<b> Select your Type :- </b></br></br>
									
									<input type="checkbox" name="full body" value="on" id="fbody" onclick="showfull_body(this)"> Full Body &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<!input type="checkbox" name="Select Organs" value="on" id="sorgans" onclick="showselect_organs(this)"> 
										
										 Donate Selected Organs :-
									
									<select name="organ"  style="width:100px;">
																	<option value="0">Kidney</option>
																	<option value="1"> Liver</option>
																<option value="2">Heart</option>
									</select>
								<br/><br/><br/>
	
								<script type="text/javascript">
										function showfull_body(fbody) 
										{
											fullbody.style.display = fbody.checked ? "block" : "none";
										}

									</script>

									<script type="text/javascript">
										function showselect_organs(sorgans) 
										{
											
											selectedorgans.style.display = sorgans.checked ? "block" : "none";
										}
									</script>

									<div id="fullbody" style="display: none">	
													You Select Full Body Donation....!!</br>
													Full Body Goes to Mediacal Collage For Students Practicing purpose.</br></br>

														<!input type="submit" name="submit" class="btn btn-default" value="submit"/>
									</div>

				<hr>

<?php
  /*$con = new MongoClient();

    $database=$con->organ;
    $collection=$database->donorinfo;
    


		


if($kidney)
$collection->update(array("email" => $_SESSION['email']), array('$set' => array('kidney'=>$kidney)));
if($heart)
$collection->update(array("email" => $_SESSION['email']), array('$set' => array('heart'=>$heart)));
if($liver)
$collection->update(array("email" => $_SESSION['email']), array('$set' => array('liver'=>$liver)));
*/?>

												<input type="submit" name="submit" class="btn btn-large btn-success" value="submit"/>
				

              
            </div>
          </div>
        </div>
      </div>
</div>



</form>
</body>
</html>

