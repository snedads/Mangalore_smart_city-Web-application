<?php 
	$host="localhost";
	$username="root";
	$password="";
	$db="smart_city";

	$con=mysqli_connect($host,$username,$password);
	mysqli_select_db($con,$db);
?>