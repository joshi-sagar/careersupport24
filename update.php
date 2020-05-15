<?php
require "authority.php";
	require "connect.php";
	
	$user=$_SESSION['NAME'];
	$id=$_SESSION['ID'];
?>
     <?php
if(isset($_POST['submit'])) 
{


$date = date("Y-m-d");

$applicant_name = $_POST['applicant_name'];

$key1 = $_REQUEST['key1'];

$applicant_fname = $_POST['applicant_fname'];
$applicant_mob = $_POST['applicant_mob'];
$applicant_for = $_POST['search'];

$v_no= $_POST['v_no'];
$p_date= $_POST['p_date'];
$i_date= $_POST['i_date'];
$li_date= $_POST['lic_date'];

$fit_date= $_POST['fit_date'];
$pol_date= $_POST['pol_date'];
$per_date= $_POST['per_date'];


$result= mysql_query("update application_detail set Applicant_name ='$applicant_name', fname='$applicant_fname', Applicant_mob= '$applicant_mob', Application_for= '$applicant_for', update_date= '$date', tax_date= '$p_date', insurance_date= '$i_date', license_date= '$li_date', Fitness_date= '$fit_date', Pollution_date= '$pol_date', Permit_date= '$per_date', vehicle_no= '$v_no' where id = '$key1'");






echo "<script>alert('Application Successfully Updated')</script>";


echo "<script>setTimeout(\"location.href = 'main.php';\",100);</script>";






}	


 
 
?>


