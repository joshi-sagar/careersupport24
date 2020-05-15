<?php
require "authority.php";
	require "connect.php";
	
	$user=$_SESSION['NAME'];
	$id=$_SESSION['ID'];

$key1=$_REQUEST['id2'];




$result= mysql_query("update user set status = '2' where username = '$key1'");






echo "<script>alert('Application Successfully Dissapproved')</script>";

$subject1= "Login dissapproved by careersupport24 Network: ";
$body1 = "Subject: $subject1 \n Dear $name, \n Your Application is disapproved by team. Please try by reregister with different Email Id and updated ID proof.\n";

	
	mail($uname, $subject1, $body1);
echo "<script>setTimeout(\"location.href = 'main.php';\",100);</script>";









 
 
?>


