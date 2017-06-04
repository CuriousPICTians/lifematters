<?php
session_start();
//$_SESSION['report1'];
?>
<html>
<head>
	</head>
	<form action="" method="POST">

	</form>
</html>



<?php

$m = new MongoClient();

$gridfs = $m->selectDB('organ')->getGridFS();




//$gridfs->storeUpload('pic', array('report1' => $_POST['report1']));


$a=$gridfs->findOne(array('report1' => $_SESSION['report1']));
echo $_SESSION['report1'];

print_r($a); 


header('Content-Length: ' .$a->getsize());
header('Content-type:' .$a->file['Content-type']);
header("Content-disposition: attachment; filename=".$a->file['filename']);
ob_clean();
echo ($a->getBytes());

?>