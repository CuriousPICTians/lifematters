<!DOCTYPE html>
	<html lang="en">
	<html>

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
		


<style>
  	
		  	
* {
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  font: 16px Helvetica;
  background: ;
}

section {
  width: 390px;
  background: #ffffff;
  padding: 0 30px 30px 30px;
  margin: 20px auto;
  text-align: center;
  border-radius: 5px;
		color:#000000;

/*  transition Effect */  

		position: ;
		z-index: 999;
		border: 0px solid;
		box-shadow: 0px 2px 7px 0px rgba(0,0,0,0.75);
		transition:all ease 0.8s;
		box-shadow: 0px 2px 7px 0px rgba(0,0,0,0.75);
		box-shadow: 0px 2px 7px 0px rgba(0,0,0,0.75);
}



h1 {
  font-size: 24px;
  font-weight: 100;
  margin-bottom: 30px;
}

input {
  width: 100%;
  background: #000000;
  border: none;
  height: 30px;
  margin-bottom: 15px;
  border-radius: 5px;
  text-align: left;
  font-size: 14px;
  color: #000000;
}

input:focus {
  outline: none;
}

.btn  {
  width: 50%;
  height: 30px;
  border: none;
  background: #008000;
  color:  #ffffff;
  font-weight: 100;
  margin-bottom: 15px;
  border-radius: 5px;
  transition: all ease-in-out .2s;

}

.btn:focus {
  outline: none;
}

.btn:hover {
  background: #ff751a;
}

h2 {
  font-size: .75em;
}

a {
  color: #000000;
  text-decoration: none;
  transition: all ease-in-out .2s;
}

a:hover {
  color: #c0392b;
}

p {
  text-align: left;
font-size: .85em;
  width: 100%;
}

</style>  

<script>
function validateForm() 
{
    var x = document.forms["myForm2"]["email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Please enter Email-ID in Correct Format..!!");
        return false;
    }
}


</script>

</head>

<body>


<div class="container-fluid">

<form method="post" action="" name="myForm2" action="" onsubmit="return validateForm();">

<section>
  <span></span>
  <h1> Create Account </h1>
  <form>




<table>		
      			
      			<tr>
      				<td>		
      				<p> Email-ID :-</p>
					</td>
						<td>
							<input type="text" class="form-control"  name="email" id="email" placeholder="Enter Email-ID" required>
						</td>
    			</tr>
		
    			<tr>			
    			<td>
				
				</br>
				
						<tr>
      				<td>		
      				<p> Confirm Email-ID :-</p>
					</td>
						<td>
							<input type="text" class="form-control"  name="cemail" placeholder="Re-Enter Email-ID" id="confemail" onblur="confirmEmail()"  required>
						</td>
    			</tr>
		
    			<tr>			
    			<td>
				
				</br>
				
				<tr>
      				<td>		
      	<p> Password :-</p>
					</td>
						<td>
							<input type="password" class="form-control"  name="pass" placeholder="**********" id="password" required>
						</td>
    			</tr>
						</br>

<tr>
      				<td>		
      	<p> Confirm Password :-</p>
					</td>
						<td>
							<input type="password" class="form-control"  name="rpass" placeholder="**********" id="rpassword" onblur="confirmPass()"  required>
						</td>
    			</tr>

</table>
		

  </form>
</br>
<input type="submit" name="submit" class="btn btn-default" value="submit"/>
  <h2>
    <a href='DonorLogin.php'> Already Account then Login Here..!! </a>
  </h2>
 
</section>

<script type="text/javascript">

function confirmEmail() 
		{
        var email = document.getElementById("email").value;
        var confemail = document.getElementById("confemail").value;
        if(email != confemail) 
        {
            alert("Email Doesn't Match!");

        document.getElementById("email").value = document.getElementById("confemail").value = '';
        document.getElementById("email").focus();
        }
    }
</script>

<script type="text/javascript">

function confirmPass() 
		{
        var pass = document.getElementById("password").value;
        var confpass = document.getElementById("rpassword").value;
        if(pass != confpass) 
        {
            alert("Password Doesn't Match!");
            
        document.getElementById("password").value = document.getElementById("rpassword").value = '';
        document.getElementById("password").focus();
        }
    }

</script>
								

	</form>
		
</div>


</body>
</html>




<?php
session_start();

	if(isset($_POST['submit']))
	{
		
		$uemail = $_POST['email'];

		$_SESSION['email']=$uemail;
		
		$upass = $_POST['pass'];
		

		$con = new MongoClient();
	
		if($con)
		{
			$databse=$con->organ;
			$collection=$databse->donorinfo;

			$query=array('email'=>$_POST['email']);
			$count=$collection->findOne($query);

			if(!count($count))
			{
				$user_data=array('email'=>$uemail,'password'=>$upass,'approved'=>'0');
				$collection->insert($user_data);
?>
                
                <script>alert('Successfully Registered \n	Please Login.'); window.location.href="Dlogin.php";
                </script>

<?php
			}
			else
			{
?>
				<script>alert('Email already exists. Please register with another Email id.');</script>
<?php
			}
 
		}
		else
			die("Database could not not connected");
	}
?>
