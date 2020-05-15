<?php
require "authority.php";
	require "connect.php";
	
	$user=$_SESSION['NAME'];
	$id=$_SESSION['ID'];
	$city=$_SESSION['city'];
	$city_code=$_SESSION['city_code'];
?>


<?php


$table=$_REQUEST['country'];


$result= mysql_query("delete from rate_calcutator where id= $table ");

echo "<script>alert('Deleted Successfully')</script>";


echo "<script>setTimeout(\"location.href = 'main.php';\",100);</script>";

?>

