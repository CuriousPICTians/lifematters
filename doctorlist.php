<html>
<head>
<script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","doctorlist.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>
</head>

<body> 
<?php

$con = new MongoClient();	
	
	if (!$con)
    	die('Could not connect: ');

    $database=$con->organ;
    $collection=$database->hospitalinfo;
  
    $cursor = $collection->find();
    $cursor_count = $cursor->count();

?>
	<div class="form-inline">
  	<label><b>Select Nearest Hospital For Primary Checkup:- </b> </label>	&nbsp;&nbsp;					
 		
<form>
	<select name="hospital"  class="form-control" style="width:220px; onchange="showUser(this.value)">
  			<option value="">Select Hospital:</option>
			<?php 
			foreach ($cursor as $venue)
 				echo "<option value= " .$venue['email']. " >" .$venue['hospital_name']. "</option>";
			?>
	</select>

	<select id="txtHint">
	
	</select>
</form>
</div>


<br>
<div id="txtHint"><b>Person info will be listed here...</b></div>

<?php
if(isset($_GET['q']))
{
	$email = $_GET['q'];
	$con = new MongoClient();
	
if (!$con)
    die('Could not connect: ');

   $database = $con->organ;
   $collection = $database->docinfo;

    $cursor = $collection->find(array("Hos"=>"$email"));
    $cursor_count = $cursor->count();

   	echo '<option value="">Select Doctor:</option>'; 
	foreach ($cursor as $venue)
 		echo "<option value=".$venue['email'].">".$venue['fname']." ".$venue['lname']. "</option>";
}
?>
</body>
</html>
