<?php
$hostname ="localhost";
$username ="root";
$password ="";
$db ="shop_db";

$con =mysqli_connect($hostname,$username,$password,$db);
if($con){
	echo "";
}
else{
	die("No".mysqli_connect_error());
}
?>