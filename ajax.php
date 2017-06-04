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
        xmlhttp.open("GET","getuser.php?q="+str,true);
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
?>

<form>

<select name="users" onchange="showUser(this.value)">
<option value="">Select Hospital:</option>
      <?php 
      foreach ($cursor as $venue)
        echo "<option value=".$venue['email'].">".$venue['hospital_name']."</option>";
      ?>
</select>



<br>
<select id="txtHint"></select>
</form>

</body>
</html>