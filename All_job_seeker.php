<?php
require "authority.php";
	require "connect.php";
	
	$user=$_SESSION['NAME'];
	$id=$_SESSION['ID'];
?>



<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">


   <script type="text/javascript">
function printF(printData)
{
	var a = window.open ('',  '',"status=1,scrollbars=1, width=1200,height=800");
	a.document.write(document.getElementById(printData).innerHTML.replace(/<a\/?[^>]+>/gi, ''));
	a.document.close();
	a.focus();
	a.print();
	a.close();
}
</script>



</head>
<body id="top">
<div class="wrapper row0">
  <div id="topbar" class="clear"> 

    <nav>
      <ul>
         <li><a href="#">Welcome - <?php echo $user ?></a></li>
         
        <li><a href="logout.php">Logout</a></li>
        

      </ul>
  
    </nav>
 
  </div>
</div>
<div class="wrapper row1">
  <header id="header" class="clear"> 

    <div id="logo" class="fl_left"> <img src="images/3.png" style="width: 10; height: 10">
     
    </div>
    <div class="fl_right">
      
    </div>

  </header>
</div>
<div class="wrapper row2">
  <div class="rounded">
    <nav id="mainav" class="clear"> 

      <ul class="clear">
        
	  
  <li><a href="main.php">Home</a></li>  
   <li><a href="pending.php">Pending Verification</a></li> 
   <li><a href="All_job_provider.php">Volunteers</a></li>  
  
   <li><a href="All_job_seeker.php">Help Needy</a></li>
    <li><a href="deleted_user.php">Deleted Users</a></li>

    <li><a href="inbox_admin.php">Help Requests</a></li>
<li><a href="search_job_seeker.php">Search job</a></li> 



</ul></li>
    </nav>
  </div>
</div>
<div class="wrapper row3">
  <div class="rounded">
    <main class="container clear"> 
      <!-- main body --> 

      <div id="content" > 
	  
	  
	  
   
   <?php
   if(isset($_POST['submit'])) 
{


$id2=$_POST['search'];

$id3=$_POST['work_exp'];  

$result = mysql_query("SELECT * FROM user where Area_of_interest= '$id2' and Work_exp= '$id3' order by reg_date desc");



  
echo "<br />";
while($row = mysql_fetch_array($result))
  {
  echo '<table width="80"  border="0" cellspacing="0" cellpadding="0" align="center">';
   echo"<div class='scrollable'>";
  echo '<tr>';
  echo '<td width="80px" colspan="0" rowspan="0" align="left" valign="top">';
  echo "<img width=80 height=80 alt='Unable to View' src='" . $row["Pro_pic"] . "'>";
  echo '</td>';
 
  echo '</tr>';
  echo '<tr>';
  echo '<td >';
  echo '<div align="left">';
 
  echo 'Name-  ' . $row['name'] . '';


echo'</br>';
  echo 'Field-  ' . $row['Area_of_interest'] . '';
  
echo'</br>';
  echo 'Highest Qualification-  ' . $row['Higher_qualification'] . '';
  echo'</br>';
  echo 'Work Experience-  ' . $row['Work_exp'] . '';

echo'</br>';
  echo '' . ' </br> <a href=member_profile_for_job.php?id2=' . $row["id"] . '> View Full Profile</a> '; 
  echo '</div>';
  echo '</td>';
  echo '</tr>';
  echo '<tr>';
  echo ' </tr>';
  echo '</table>';
  echo '<br>';		
}}



 
?> 
   
   
   
      </div>
	  
	  
	  
	  
	  
	  
	  

        <h1>All Registered Needy</h1>
        &nbsp;&nbsp;<div id="comments">
          <?php


$result= mysql_query ("select * from user where User_type='Help_needy' AND status= '0' order by reg_date desc");

echo "<br>";
echo "<table border=5 >";

echo "<tr><th>Reg._Date</th><th>District</th><th>Name</th><th>Phone No</th><th>Email-ID</th><th>Disability Type</th><th colspan=2 width=10%>Action</th></tr>";

while($row=mysql_fetch_array($result))
{

   echo "<tr><td width=5%> $row[13] </td><td width=10%> $row[4] </td><td width=10%> $row[5] </td><td width=20%> $row[14] </td><td width=20%> $row[1] </td><td width=10%> $row[18] </td><td width=4% align = 'left' > <a href='pending2.php?id2=". $row[1] ."'><img src='images/Delete.png'  alt='delete'></a></td></tr>" ;

}

?>       





<div class="wrapper row5">


</div>
<!-- JAVASCRIPTS --> 
<script src="layout/scripts/jquery.min.js"></script> 
<script src="layout/scripts/jquery.fitvids.min.js"></script> 
<script src="layout/scripts/jquery.mobilemenu.js"></script> 
<script src="layout/scripts/tabslet/jquery.tabslet.min.js"></script>
</body>
</html>