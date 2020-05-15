<?php
require "connect.php";
$mykey1=$_REQUEST['key1'];

echo "<script>alert('Really want to delete')</script>";
$result=mysql_query("update application_detail set status= '1' where id = '$mykey1'");





echo "<script>alert('Record deleted Succesfully')</script>";


echo "<script>setTimeout(\"location.href = 'main.php';\",100);</script>";

?> 