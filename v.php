<?php
require "authority.php";
	require "connect.php";
	
	$user=$_SESSION['NAME'];
	$id=$_SESSION['ID'];
	$city=$_SESSION['city'];
	$city_code=$_SESSION['city_code'];
?>

<?php

	require "connect.php";
	

if(isset($_POST['submit'])) 
{


if ($user!=='admin')
	
	{
		echo "<script>alert('You are not permited')</script>";
		echo "<script>setTimeout(\"location.href = 'logout.php';\",100);</script>";
		}
else
	
	{

$date = date("Y-m-d");
$company= $_POST['company'];
$v_state= $_POST['state1'];
$city = $_POST['city'];
$city_co1 = $_POST['state'];

$mob = $_POST['mob'];
$name = $_POST['name'];
$fname = $_POST['fname'];
$age = $_POST['age'];


$address = $_POST['address'];
$v_make = $_POST['v_make'];
$v_model = $_POST['v_model'];
$v = $_POST['v_no'];
$v_eng = $_POST['v_eng'];
$v_chs = $_POST['v_chs'];
$fee = $_POST['fee'];
$bank = $_POST['bank'];
$bank_no = $_POST['bank_no'];

$rc_exp = $_POST['rc_exp'];
$p_exp = $_POST['p_exp'];
$ins_exp = $_POST['ins_exp'];

$dir= 'vehicle_documents/'.$v;

mkdir($dir);

$rc= "RC_";
if ($_FILES["v_rc"]["error"] > 0)
   {
   echo "Error: " . $_FILES["v_rc"]["error"] . "<br />";
   }
 else
   {
   }
     if (file_exists($dir. "/" . $_FILES["v_rc"]["tmp_name"]))
       {
       echo " already exists. ";
       }
     else
       {
       move_uploaded_file($_FILES["v_rc"]["tmp_name"],
       $dir. "/"  . $rc . $v . $_FILES["v_rc"]["name"]);
       $location1= $dir. "/"  . $rc . $v . $_FILES["v_rc"]["name"];

	   
	   }
	

$p= "Permit_";
if ($_FILES["v_p_c"]["error"] > 0)
   {
   echo "Error: " . $_FILES["v_p_c"]["error"] . "<br />";
   }
 else
   {
   }
     if (file_exists($dir. "/"  . $_FILES["v_p_c"]["tmp_name"]))
       {
       echo " already exists. ";
       }
     else
       {
       move_uploaded_file($_FILES["v_p_c"]["tmp_name"],
      $dir. "/"  . $p . $v . $_FILES["v_p_c"]["name"]);
       $location2=$dir. "/"  . $p . $v . $_FILES["v_p_c"]["name"];

	   
	   }


$i="Insurance_certificate_";
if ($_FILES["v_i_c"]["error"] > 0)
   {
   echo "Error: " . $_FILES["v_i_c"]["error"] . "<br />";
   }
 else
   {
   }
     if (file_exists($dir. "/"  . $_FILES["v_i_c"]["tmp_name"]))
       {
       echo " already exists. ";
       }
     else
       {
       move_uploaded_file($_FILES["v_i_c"]["tmp_name"],
       $dir. "/"  . $i . $v . $_FILES["v_i_c"]["name"]);
       $location3=$dir. "/" . $i . $v . $_FILES["v_i_c"]["name"];
	   }	   
	   
	   
	   
	   
	   
	   
	   $oi="Owner_ID_";
if ($_FILES["o_id"]["error"] > 0)
   {
   echo "Error: " . $_FILES["o_id"]["error"] . "<br />";
   }
 else
   {
   }
     if (file_exists($dir. "/"  . $_FILES["o_id"]["tmp_name"]))
       {
       echo " already exists. ";
       }
     else
       {
       move_uploaded_file($_FILES["o_id"]["tmp_name"],
       $dir. "/" . $oi . $v . $_FILES["o_id"]["name"]);
       $location4=$dir. "/"  . $oi . $v . $_FILES["o_id"]["name"];

	   
	   }	
	   
	   
	   
	   
	   
	   $di="Driver_ID_";
if ($_FILES["d_id"]["error"] > 0)
   {
   echo "Error: " . $_FILES["d_id"]["error"] . "<br />";
   }
 else
   {
   }
     if (file_exists($dir. "/"  . $_FILES["d_id"]["tmp_name"]))
       {
       echo " already exists. ";
       }
     else
       {
       move_uploaded_file($_FILES["d_id"]["tmp_name"],
       $dir. "/" . $di . $v . $_FILES["d_id"]["name"]);
       $location5=$dir. "/"  . $di . $v . $_FILES["d_id"]["name"];

	   
	   }		
	   
	   
	   
	   
	    $ai="Audit_Report_";
if ($_FILES["v_audit"]["error"] > 0)
   {
   echo "Error: " . $_FILES["v_audit"]["error"] . "<br />";
   }
 else
   {
   }
     if (file_exists($dir. "/"  . $_FILES["v_audit"]["tmp_name"]))
       {
       echo " already exists. ";
       }
     else
       {
       move_uploaded_file($_FILES["v_audit"]["tmp_name"],
       $dir. "/" . $ai . $v . $_FILES["v_audit"]["name"]);
       $location6=$dir. "/"  . $ai . $v . $_FILES["v_audit"]["name"];

	   
	   }	
	   
	  


 $bi="Bank_Passbook_";
if ($_FILES["bank_passbook"]["error"] > 0)
   {
   echo "Error: " . $_FILES["bank_passbook"]["error"] . "<br />";
   }
 else
   {
   }
     if (file_exists($dir. "/"  . $_FILES["bank_passbook"]["tmp_name"]))
       {
       echo " already exists. ";
       }
     else
       {
       move_uploaded_file($_FILES["bank_passbook"]["tmp_name"],
       $dir. "/"  . $bi . $v . $_FILES["bank_passbook"]["name"]);
       $location7=$dir. "/"  . $bi . $v . $_FILES["bank_passbook"]["name"];

	   
	   }
	  
	   



$result= mysql_query("insert into departments (vehicle, city, city_code, driver_name, driver_no, date, registration_fee, state, Company_Name, status, fname, o_age, o_address, owner_bank_name, owner_account_no, v_make, v_model, v_eng, v_chassis, rc, permit, insurance, o_id_proof, d_id_proof, audit_proof, bank_passbook, rc_exp_date, permit_exp_date, ins_exp_date, last_update_date)values
('$v','$city','$city_co1','$name','$mob','$date','$fee','$v_state','$company', '1','$fname','$age','$address', '$bank', '$bank_no', '$v_make','$v_model','$v_eng','$v_chs', '$location1', '$location2', '$location3', '$location4', '$location5', '$location6', '$location7', '$rc_exp', '$p_exp', '$ins_exp' ,'$date')");

echo "<script>alert('Vehicle Successfully Added')</script>";


echo "<script>setTimeout(\"location.href = 'main.php';\",100);</script>";


	   }
}



 
 
?>