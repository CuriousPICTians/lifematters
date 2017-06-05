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

<!--  jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

<!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="bootstrap-datepicker/css/bootstrap-datepicker3.css"/>


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

<script type="text/javascript">

function formvalidate(signup1)
{
	var username=signup1.firstname.value;
	var letters = /^[A-Za-z]+$/;
	var numbers= /^[0-9]+$/;
	var mailformat=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	
	var f1= signup1.firstname.value;
	if(f1.match(letters))
	{}
	else
	{
		alert("First Name must include characters only..!!");
		signup1.firstname.focus();
		return false;
	}

var f2= signup1.middlename.value;
	if(f2.match(letters))
	{}
	else
	{
		alert("Middle Name must include characters only..!!");
		signup1.middlename.focus();
		return false;
	}

var f3= signup1.lastname.value;
	if(f3.match(letters))
	{}
	else
	{
		alert("Last Name must include characters only..!!");
		signup1.lastname.focus();
		return false;
	}

var f4= signup1.city.value;
	if(f4.match(letters))
	{}
	else
	{
		alert("City Name must include characters only..!!");
		signup1.city.focus();
		return false;
	}

var f5= signup1.state.value;
	if(f5.match(letters))
	{}
	else
	{
		alert("State Name must include characters only..!!");
		signup1.state.focus();
		return false;
	}

var f6= signup1.nati.value;
	if(f6.match(letters))
	{}
	else
	{
		alert("Nationality Name must include characters only..!!");
		signup1.nati.focus();
		return false;
	}

	var mob= signup1.mobileno.value;
	if(mob.match(numbers))
	{
		if(mob.length>10)
		{
			alert("Mobile no. must be 10 digit");
			signup1.mobileno.focus();
			return false;
		}
		if(mob.length<10)
		{
			alert("Mobile no. must be 10 digit");
			signup1.mobileno.focus();
			return false;
		}
	}
	else
	{
		alert("Mobile no. must include Numeric characters only");
		signup1.mobileno.focus();
		return false;
	}

var adno= signup1.adharno.value;
	if(adno.match(numbers))
	{
		if(adno.length>12)
		{
			alert("Adhar No. must be 12 digit");
			signup1.adharno.focus();
			return false;
		}
		if(adno.length<12)
		{
			alert("Adhar No must be 12 digit");
			signup1.adharno.focus();
			return false;
		}
	}
	else
	{
		alert("Adhar No. must include Numeric characters only");
		signup1.adharno.focus();
		return false;
	}


var zc= signup1.zipcode.value;
	if(zc.match(numbers))
	{
		if(zc.length>6)
		{
			alert("PIN No must be 6 digit");
			signup1.zipcode.focus();
			return false;
		}
		if(zc.length<6)
		{
			alert("PIN No. must be 6 digit");
			signup1.zipcode.focus();
			return false;
		}
	}
	else
	{
		alert("PIN No. must include Numeric characters only");
		signup1.zipcode.focus();
		return false;
	}


	var uemail=signup1.email.value;
	if(uemail.match(mailformat))
	{}
	else
	{
		alert("You hav entered an invalid email address!!");
		signup1.email.focus();
		return false;
	}
	
	  //If all conditions satisfied.........
}


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
		

						<form method='post' name="signup1" action="RecieverOrganSelect.php" onSubmit="return formvalidate(signup1)">
						<div class="row">
		
<p>	------------------------------------  ----------------------------------  ------------------------------------------------------------------  
	------------------------------------  ----------------------------------  <p>



<!----------------------------------------------------------------- 1 ------------------------------------------------------------------------------->
						
		
			<div class="col-sm-4">
				<div class="form-inline">
					<label for="fname"> First Name :-</label>
						&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="text" class="form-control" name="firstname" placeholder="First Name" style="text-transform:uppercase" tabindex="1" required>
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
				<textarea name="address" class="form-control" rows="3" id="emergency2" placeholder="Enter Address" tabindex="11" required></textarea>
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
					<input type="text" name="middlename" class="form-control"  placeholder="Middle Name" style="text-transform:uppercase" tabindex="2" required>
				</div>	
			
				<br>
				<br>
				

					<div class="form-inline">
					<label for="mno"> Date of Birth :-</label>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input name="day" type="text" class="form-control" placeholder="DD-MM-YY" tabindex="6" required>

				</div>	

				<br>
				<br>
				
				<div class="form-inline">
					<label for="mno"> Mobile Number :-</label>
					&nbsp;
					<input name="mobileno" type="text" class="form-control" minlength="10" maxlength="10" placeholder="Enter Mobile Number" tabindex="9" required>
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
					<label for="zc"> PIN Code :- </label>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="text" class="form-control" minlength="6" maxlength="6" name="zipcode" placeholder="Zip Code" tabindex="15" required>
				</div>	
			
			</div>
		
		
<!----------------------------------------------------------------- 3 --------------------------------------------------------------------------------->
		
		
		
		
			<div class="col-sm-4">
				<div class="form-inline">
					<label for="lname"> Last Name :- </label>
					&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="text" name="lastname" class="form-control" placeholder="Last Name"  style="text-transform:uppercase" tabindex="3" required>
				</div>	
				
				<br>
				<br>
				
				<div id="bg">
			
					<li class="reg_blood">

						<label>Blood Group :- </label>
						&nbsp;&nbsp;								  
							<select name="blood" class="textfield2">

								<option value="Select">Select</option>
								<option value="1">A+</option>
								<option value="2">A-</option>
								<option value="3">B+</option>
								<option value="4">B-</option>
								<option value="5">O+</option>
								<option value="6">O-</option>
								<option value="7">AB+</option>
								<option value="8">AB-</option>
							</select>
								

					</li>
				</div>
				
				<br><br>
				
				<div class="form-inline">
					<label for="aid"> Adhar Number :- </label>					
				<input type="text" class="form-control" name="adharno" minlength="12" maxlength="12" placeholder="Enter Number" tabindex="10" required>
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

		<input type="submit" name="submit" class="btn btn-default" value="submit" tabindex="16"/>
			<button type="reset" class="btn btn-default" tabindex="17" onclick="location.href='DDlogin.php'">Reset</button>
</form>	
</div>

</body>
</html>
