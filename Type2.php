<!DOCTYPE html>
<html lang="en">

<head>

<title> Registration </title>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<!-- Latest compiled JavaScript -->
		<script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>

<style>
    #nav {
        line-height:20px;
        background-color:#eeeeee;
        height:470px;
        width:190px;
        float:left;
        padding:5px;        
    }
    
  #section {
        width:550px;
        float:left;
        padding:10px; 
   
    }
  #footer {
        background-color:black;
        color:white;
        clear:both;
        text-align:center;
        padding:1px;     
    }
    
  .jumbotron{
      height:10px;
      display: flex;
      align-items: center;
    }
    
</style>  
</head>
<body>

<form method="post" action="DeadDonor.php">

					<b>After Death You Donote :-</b>
							<br><br>
								
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
									<input type="checkbox" name="Select Organs" value="on" id="sorgans" onclick="showselect_organs(this)"> Selected Organs
									<br/>
									</br></br>
									
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
													<p>-----------------------------------------------------------------------------------------------------<p>
	
														<input type="submit" name="submit" class="btn btn-default" value="submit"/>
									</div>

									<div id="selectedorgans" style="display: none">
												<input type="checkbox" name="kidney" value="kidney"> Kidney &nbsp;&nbsp;&nbsp;
												<input type="checkbox" name="liver" value="liver"> Liver &nbsp;&nbsp;&nbsp;
												<input type="checkbox" name="heart" value="heart"> Heart &nbsp;&nbsp;&nbsp;
												<input type="checkbox" name="eyes" value="eyes"> Eyes &nbsp;&nbsp;&nbsp;
												<input type="checkbox" name="bones" value="bones"> Bones&nbsp;&nbsp;&nbsp;
												<input type="checkbox" name="lportion" value="lportion"> A Portion of the Liver &nbsp;&nbsp;&nbsp;
												<input type="checkbox" name="pancreas" value="pancreas"> Pancreas or Intestine</br></br>
												<p>-----------------------------------------------------------------------------------------------------
															---------------------------------------------<p>
										
												<input type="submit" name="submit" class="btn btn-default" value="submit"/>
				
									</div>


</form>
</body>
</html>

