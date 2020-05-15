<?php
require "authority.php";
	require "connect.php";
	
	$user=$_SESSION['NAME'];
	$id=$_SESSION['ID'];
?>

<?php



$name=$_POST['name'];



$result1 = mysql_query("SELECT * FROM library WHERE name='$name'") ;
				
if(mysql_num_rows($result1) > 0) 

{

  echo "<script>alert('Paper already register. Please Submit new Paper')</script>";
  echo "<script>location.href='pub_upload.php'</script>";

}


else
{
	
	
	
echo "<script>alert('Please process for next step')</script>";
echo "<script>location.href='pub_upload2.php?country=$name'</script>";




	}

 ?>
