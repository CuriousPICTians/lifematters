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

<!-- Latest compiled JavaScript -->
		<script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>

<!--  jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

<!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>


<style>
	#list1
	{
		list-style-type:none;

	}
	
	#bg
	{
		list-style-type:none;

	}
	
</style>

		
</head>

<script>
    $(document).ready(function(){
      var date_input=$('input[name="day"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'dd-MM-yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
    })
</script>


<body>

<label> <h3>Personal Information :- </h3></label> 


&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<?php

	session_start();
	echo $_SESSION['email'];

?>
<label> :-</label>
<button type="submit" class="btn btn-default" onclick="location.href='logout.php'"> Logout </button>



	<div class="container-fluid">
		

						<form method='post' action="organselect.php">
						<div class="row">
		
<p>	------------------------------------  ----------------------------------  ------------------------------------------------------------------  
	------------------------------------  ----------------------------------  <p>



<!----------------------------------------------------------------- 1 ------------------------------------------------------------------------------->
						
		
			<div class="col-sm-4">
				<div class="form-inline">
					<label for="fname"> First Name :-</label>
						&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="text" class="form-control" name="firstname" placeholder="Enter Name" tabindex="1" required>
				</div>	
			
				<label ><br><br>
					Gender :- </label>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="radio" name="gender" value="male" tabindex="4" > Male
					<input type="radio" name="gender" value="male" tabindex="5" > Female
				
				
				<br>
				<br>
				
				<div class="form-inline">
					<label for="bplace"> Birth Place :-</label>
					&nbsp;&nbsp;&nbsp;&nbsp;					
				<input type="text" name="dobplace" class="form-control" placeholder="Enter Birth Place" tabindex="8" required>
				</div>	
				
				<br>
				
				<div class="form-inline">
					<label for="comment"> Address :- </label>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;					
				<textarea name="address" class="form-control" rows="3" id="emergency2" placeholder="Enter Address" tabindex="11"></textarea>
				</div>
				
				<br><br>
				
				<div class="form-inline">
					<label for="nl"> Nationality :- </label>
					&nbsp;&nbsp;&nbsp;&nbsp;
					<input name="nati" type="text" class="form-control" placeholder="Nationality" tabindex="14" required>
				</div>	
				
				
			</div>			
				
				
				
				
<!----------------------------------------------------------------- 2 --------------------------------------------------------------------------------->
		
		
			<div class="col-sm-4">
				<div class="form-inline">
					<label for="mname"> Middle Name :- </label>
					&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="text" name="middlename" class="form-control"  placeholder="Enter Name" tabindex="2" required>
				</div>	
			
				<br>
				<br>
				
	
		<div class="form-inline">
					<label for="mno"> Date of Birth :-</label>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input name="day" type="text" class="form-control" placeholder="DD-MM-YY" tabindex="6">
				</div>	
				<br>
				<br>
				
								
				<div class="form-inline">
					<label for="mno"> Mobile Number :-</label>
					&nbsp;
					<input name="mobileno" type="text" class="form-control" placeholder="Enter Mobile Number" tabindex="9" required>
				</div>	
				
				<br>
				<br>
				
				<div class="form-inline">
					<label for="city"> City Name :- </label>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="text" class="form-control" name="city" placeholder="Enter City Name" tabindex="12" required>
				</div>	
				
				<br>
				<br>
				
				<div class="form-inline">
					<label for="zc"> Zip Code :- </label>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="text" class="form-control" name="zipcode" placeholder="Zip Code" tabindex="15">
				</div>	
			
			</div>
		
		
<!----------------------------------------------------------------- 3 --------------------------------------------------------------------------------->
		
		
		
		
			<div class="col-sm-4">
				<div class="form-inline">
					<label for="lname"> Last Name :- </label>
					&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="text" name="lastname" class="form-control" placeholder="Enter Name" tabindex="3" required>
				</div>	
				
				<br>
				<br>
				
				<div id="bg">
			
					<li class="reg_blood">

						<label>Blood Group :- </label>
						&nbsp;&nbsp;								  
							<select name="blood" class="textfield2">

								<option value="Select">Select</option>
								<option value="A+">A+</option>
								<option value="A-">A-</option>
								<option value="B+">B+</option>
								<option value="B-">B-</option>
								<option value="O+">O+</option>
								<option value="O-">O-</option>
								<option value="AB+">AB+</option>
								<option value="AB-">AB-</option>
							</select>
								

					</li>
				</div>
				
				<br><br>
				
				<div class="form-inline">
					<label for="aid"> Adhar Number :- </label>					
				<input type="text" class="form-control" name="adharno" placeholder="Enter Number" tabindex="10" required>
				</div>	
				
				<br>
				<br>
				<div class="form-inline">
					<label for="state"> State Name :- </label>
					&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="text" class="form-control" name="state" placeholder="Enter State Name" tabindex="13" required>
				</div>	
		
			</div>		
			</div>

		</div>
		<br>
		<p>	------------------------------------  ----------------------------------  ------------------------------------------------------------------  
			------------------------------------  ----------------------------------  <p>


		<input type="submit" name="submit" class="btn btn-default"  value="submit" tabindex="16"/>
			<button type="reset" class="btn btn-default" tabindex="17" onclick="location.href='DDlogin.php'">Reset</button>
</form>	
</div>

</body>
</html>
