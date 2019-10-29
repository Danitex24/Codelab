<?php
//include("session.php");
ob_start();
$con="localhost"; 
$dbuser="root";
$dbname="staffpes";
$dbpassword="";
$connection=mysqli_connect($con,$dbuser,$dbpassword,$dbname)or die(mysqli_error());
if ($connection){
	//echo "connection esterblished successfuly!!!";
}

?>


