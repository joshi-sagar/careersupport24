<?php


require "authority.php";
	require "connect.php";


	$user=$_SESSION['NAME'];
	$id=$_SESSION['ID'];

$table=$_REQUEST['country'];




$result= mysql_query("UPDATE species_bank set status= '1' WHERE id= '$table' and uploaded_by= '$user' ");

echo "<script>alert('Data Successfully removed')</script>";


echo "<script>setTimeout(\"location.href = 'fra_main.php';\",100);</script>";






?>
