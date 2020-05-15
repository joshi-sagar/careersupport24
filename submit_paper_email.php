<?php
require "authority.php";
	require "connect.php";
	
	$user=$_SESSION['NAME'];
	$id=$_SESSION['ID'];


$name= "ram";


	
$subject= "New Publication Added in HBCC Network: Notification";


	 
$result1= mysql_query ("select * from user where status= '1' order by id desc ");




while($row1=mysql_fetch_array($result1))
{


	  echo "<script>alert('$row1[1]')</script>";


$body = "Subject: $subject \n Dear Member, \n Please check out recently added Paper entitled: \n $name\n";

	
	mail($row1[1], $subject, $body);


	  echo "<script>alert('Email Send Successfully')</script>";


	}






 ?>
