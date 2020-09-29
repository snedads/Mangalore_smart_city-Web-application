<?php
	session_start();
	$u_name=$_SESSION['username'];
	if(!(isset($u_name)))
	{
		header('location:index.php');
	}
?>