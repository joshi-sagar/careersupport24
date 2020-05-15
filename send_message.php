<?php
require "authority.php";
	require "connect.php";
	
	$user=$_SESSION['NAME'];
	$id=$_SESSION['ID'];


?>



<?php 


if(isset($_POST['submit'])) 
{


$msg = $_POST['message'];

$id3 = $_POST['id3'];

$date = date("d-m-Y");

$subject= "Personal Message from Job Hub URU Innovators Website";
$body = "Message By: $user \n  Message: $msg  \n";

	
	mail($id3, $subject, $body);




$result= mysql_query("insert into message (date, sender, reciver, message)values ('$date', '$user','$id3','$msg')");


	  echo "<script>alert('Message Send Successfully')</script>";

echo "<script>location.href='#'</script>";



   }

?>







