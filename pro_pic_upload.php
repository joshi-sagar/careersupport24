<?php
require "authority.php";
	require "connect.php";
	
	$user=$_SESSION['NAME'];
	$id=$_SESSION['ID'];


if(isset($_POST['submit2'])) 
{

 
$target_dir = "upload_photo/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);


$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png"  && $imageFileType != "JPG" && $imageFileType != "JPEG" && $imageFileType != "PNG") 
{
echo "<script>alert('Sorry, only images files JPG, JPEG, PNG are allowed.')</script>";
echo "<script>location.href='profile.php.php'</script>";
    
}


else {


if ($_FILES["file"]["error"] > 0)
   {
   echo "Error: " . $_FILES["file"]["error"] . "<br />";
   }
 else
   {
   }
     if (file_exists('upload_photo/'  . $_FILES["file"]["tmp_name"]))
       {
       echo " already exists. ";
       }
     else
       {

$fileName1 = str_replace(" ","_",$_FILES['file']['name']);
move_uploaded_file($_FILES["file"]["tmp_name"], "upload_photo/" . $user .'_' . $fileName1);
$location1= "upload_photo/" . $user .'_' . $fileName1;
   
	   }
	   }
	   
     $result=mysql_query("update user set Pro_pic ='$location1' where username = '$user'");
     echo "<script>alert('Successfully changed Picture')</script>";     
 echo "<script>location.href='profile.php.php'</script>";

}



 ?>
