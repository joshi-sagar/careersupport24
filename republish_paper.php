<?php


require "authority.php";
	require "connect.php";


	$user=$_SESSION['NAME'];
	$id=$_SESSION['ID'];

$table=$_REQUEST['country'];

$result= mysql_query("UPDATE library set status= '0' WHERE it= '$table' and uploaded_by= '$user' ");

echo "<script>alert('Paper Successfully republished')</script>";


echo "<script>setTimeout(\"location.href = 'fra_main.php';\",100);</script>";






?>
