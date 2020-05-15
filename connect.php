<?php


/*$con = mysqli_connect('localhost','root','{s*od)!^PWug');
$db = mysqli_select_db($con,'careersu_scrab');

{s*od)!^PWug*/

$db_host		= 'localhost';
$db_user		= 'root';
$db_pass		= '';
$db	= 'careersu_scrab'; 
$con = mysql_connect($db_host,$db_user,$db_pass) or die('Unable to establish a DB connection');
mysql_select_db($db,$con);








$link = mysql_connect("localhost","root","") or die ('Could not select database.');
$db_select = mysql_select_db("careersu_scrab", $link) or die ('Could not select database.');






?>