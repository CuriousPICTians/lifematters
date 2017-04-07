<?php

session_start();
session_destroy();

//header("windows.parent || window.Location: index.php");
?>
<script>
  alert('Successfully Logout...');
                  //window.location.href="Admin.php";
                  (window.parent || window).location.href="index.php";
               </script>
//header(("window.parent || window).location.href: index.php");
<?php
exit();
?>
