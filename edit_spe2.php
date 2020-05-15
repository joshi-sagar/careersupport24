<?php
require "authority.php";
	require "connect.php";
	
	$user=$_SESSION['NAME'];
	$id=$_SESSION['ID'];
?>

<?php
require "connect.php";


$id3=$_POST['id3'];

$ele=$_POST['ele'];
$cat=$_POST['cat'];
$name=$_POST['name'];
$lok= $_POST['loc'];
$lat= $_POST['point'];
$aut= $_POST['authority'];
$acc=$_POST['access'];
    

$result= mysql_query("update species_bank set category = '$cat' , spe_name= '$name', spe_locality = '$lok', spe_lat= '$lat', spe_auth ='$aut', spe_acces = '$acc' , Elevation = '$ele' where id='$id3' and uploaded_by= '$user'");


      echo "<script>alert('Successfully Updated')</script>";  


 echo "<script>location.href='spe_upload.php'</script>";

	


 ?>
