<?php
require "authority.php";
	require "connect.php";
	
	$user=$_SESSION['NAME'];
	$id=$_SESSION['ID'];
?>
     <?php
if(isset($_POST['submit'])) 
{




$key1=$_POST['email'];




$result= mysql_query("update user set status = '0' where username = '$key1'");






echo "<script>alert('Application Successfully Approved')</script>";

$subject1= "Login approved by careersupport24 Network: ";
$body1 = "Subject: $subject1 \n congrats your account is approved by careersupport24 Team \n  Now you can login with your email and password\n";

	
	mail($key1, $subject1, $body1);
echo "<script>setTimeout(\"location.href = 'main.php';\",100);</script>";






}	


 
 
?>


