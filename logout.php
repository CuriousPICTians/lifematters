<?php

session_start();
session_destroy();

//header("windows.parent || window.Location: MainHomepage.php");
?>
<script>
  alert('Successfully Logout...');
                  //window.location.href="Admin.php";
                  (window.parent || window).location.href="MainHomepage.php";
               </script>
//header(("window.parent || window).location.href: MainHomepage.php");
<?php
exit();
?>
