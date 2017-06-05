<?php

$con = new MongoClient();
$database = $con->organ;

$collection = $database->donorinfo;
$collection->update(array("email"=>'4001@ymail.com'),array('$set'=>array("matchlist"=>array())));

$collection->update(array("email"=>'4001@ymail.com'),array('$push'=>array("matchlist"=>array('$each'=>array("Avinash")))));

$v=$collection->findOne(array("email"=>'4001@ymail.com'));
$v['matchlist'];
$c=count($v['matchlist']);
for($i=0;$i<$c;$i++)
	echo $v['matchlist'][$i] ."</br>";

$collection->update(array("email"=>'4001@ymail.com'),array('$push'=>array("matchlist"=>array('$each'=>array("qwer","asd","zxc")))));

$v=$collection->findOne(array("email"=>'4001@ymail.com'));
$v['matchlist'];
$c=count($v['matchlist']);
for($i=0;$i<$c;$i++)
	echo $v['matchlist'][$i]."</br>";

?>