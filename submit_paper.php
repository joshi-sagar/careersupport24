<?php
require "authority.php";
	require "connect.php";
	
	$user=$_SESSION['NAME'];
	$id=$_SESSION['ID'];
?>

<?php
require "connect.php";


	
$file=$_POST['file'];
$date = date("d-m-Y");
$interest= $_POST['interest'];
	
				    	mysql_query("SET NAMES'utf8'");
				    
				    $result= mysql_query("select * from user where id= '$id'");
while ($row=mysql_fetch_array($result))
{

$uname= ($row['name']);
}










$target_dir = "library/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


// Allow certain file formats
if($imageFileType != "pdf") 
{
     echo "<script>alert('Sorry, only PDF files are allowed.')</script>";

 echo "<script>location.href='pub_upload.php'</script>";
    
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
     if (file_exists("library/" . $_FILES["file"]["tmp_name"]))
       {
       echo " already exists. ";
       }
     else
       {


$fileName1 = str_replace(" ","_",$_FILES['file']['name']);
move_uploaded_file($_FILES["file"]["tmp_name"],"library/" . $user .'_' . $fileName1);

$location="library/" . $user.'_' . $fileName1;




$result1 = mysql_query("SELECT * FROM library WHERE username='$user'") ;
				
if(mysql_num_rows($result1) > 0) 

{
	
	

$result1= mysql_query("update library set path='$location', date='$date' where username= '$user'");
echo "<script>alert('Resume updated.')</script>";

echo "<script>location.href='profile.php'</script>";

}

else
{








$result1=mysql_query("insert into library (username, category, u_name, path, date)values('$user', '$interest','$uname','$location', '$date')");
echo "<script>alert('Resume added')</script>";  




 echo "<script>location.href='pub_upload2.php'</script>";

	   }}
}

 ?>
