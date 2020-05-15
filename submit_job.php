<?php
require "authority.php";
	require "connect.php";
	
	$user=$_SESSION['NAME'];
	$id=$_SESSION['ID'];
?>

<?php
require "connect.php";

$office=$_POST['office'];
$l_date=$_POST['l_date'];
$j_location=$_POST['location'];	
$file=$_POST['file'];
$date = date("Y-m-d");
$interest= $_POST['interest'];
	
				    	mysql_query("SET NAMES'utf8'");
				    
				    $result= mysql_query("select * from user where id= '$id'");
while ($row=mysql_fetch_array($result))
{

$uname= ($row['username']);
}

$target_dir = "job_notification/";
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
     if (file_exists("job_notification/" . $_FILES["file"]["tmp_name"]))
       {
       echo " already exists. ";
       }
     else
       {


$fileName1 = str_replace(" ","_",$_FILES['file']['name']);
move_uploaded_file($_FILES["file"]["tmp_name"],"job_notification/" . $user .'_' . $fileName1);

$location="job_notification/" . $user.'_' . $fileName1;


$result1=mysql_query("insert into new_job (Job_office, Job_type, Job_location, Notification, Last_date, Upload_date, Submitted_by, Status)values('$office', '$interest','$j_location','$location', '$l_date', '$date', '$uname', '0')");
echo "<script>alert('Job added')</script>";  




 echo "<script>location.href='Add_Job.php'</script>";

	   }
}

 ?>
