<?php
require "connect.php";
	$user=$_SESSION['NAME'];
	$id=$_SESSION['ID'];
?>

	  
	  
	  
	  <?php
	  
	  $result= mysql_query("select * from menu where $user = '1' ");
echo "<br>";
while($row=mysql_fetch_array($result))
{
echo "<table border=5 >";

   echo "<tr><td width=5%> <a href=  $row[4]  >  $row[3]  </a></td></tr>" ;

  
}
	  ?>