<?php
require "authority.php";
	require "connect.php";
	
	$user=$_SESSION['NAME'];
	$id=$_SESSION['ID'];
?>

<?php
require "connect.php";

$cat=$_POST['cat'];

$ele=$_POST['ele'];
$name=$_POST['name'];
$lok= $_POST['loc'];
$lat= $_POST['point'];
$aut= $_POST['authority'];
$acc=$_POST['access'];
    
$file=$_POST['file'];
$date = date("d-m-Y");


$target_dir = "species_database/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


// Allow certain file formats
if($imageFileType != "pdf" && $imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png" && $imageFileType != "doc" && $imageFileType != "docx" && $imageFileType != "xls" && $imageFileType != "pptx") 
{
     echo "<script>alert('Sorry, only document files PDF, Doc, JPG, JPEG, PNG files are allowed.')</script>";

 echo "<script>location.href='spe_upload.php'</script>";
    
}

else
{


 if ($_FILES["file"]["error"] > 0)
   {
   echo "Error: " . $_FILES["file"]["error"] . "<br />";
   }
 else
   {
   }
     if (file_exists("species_database/" . $_FILES["file"]["tmp_name"]))
       {
       echo " already exists. ";
       }
     else
       {



$fileName1 = str_replace(" ","_",$_FILES['file']['name']);


       move_uploaded_file($_FILES["file"]["tmp_name"],"species_database/" . $fileName1);
       $location="species_database/" . $fileName1;
    $result=mysql_query("insert into species_bank (category, spe_name, spe_locality, spe_lat, spe_auth, spe_acces, Elevation, file, date, uploaded_by)values('$cat', '$name', '$lok', '$lat', '$aut', '$acc', '$ele'  ,'$location', '$date', '$user')");
      echo "<script>alert('Successfully added')</script>";  


 echo "<script>location.href='spe_upload.php'</script>";

	}  }


 ?>
