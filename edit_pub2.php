<?php
require "authority.php";
	require "connect.php";
	
	$user=$_SESSION['NAME'];
	$id=$_SESSION['ID'];


?>


<?php

if(isset($_POST['submit'])) 
{



$id3=$_POST['id3'];
$type=$_POST['type'];
$cat=$_POST['cat'];
$area=$_POST['state'];
$key=$_POST['keyword'];
$name=$_POST['name'];



$result= mysql_query("update library set P_type = '$type' , category= '$cat', Area = '$area', Keywords= '$key', name ='$name'where it='$id3' and uploaded_by= '$user'");
echo "<script>alert('Paper Successfully updated.')</script>";

echo "<script>location.href='fra_main.php'</script>";



 }?>


