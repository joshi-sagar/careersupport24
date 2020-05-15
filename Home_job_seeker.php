



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
<body>
<?php include ('fre_header.php');?>
<div class="wrapper row3">
  <div class="rounded">
    <main class="container clear"> 
      <!-- main body --> 

      <div id="content" >
<h2>Latest Advertizements</h2>
<?php
$date = date("Y-m-d");

$result= mysql_query ("select * from new_job where status= '0' order by Last_date desc limit 30 ");


        echo"<div class='scrollable'>";
echo "<table border=5 >";

echo "<tr><th>Office Name</th><th>Job Field</th><th>Job Location</th><th>Last Date</th></tr>";

while($row=mysql_fetch_array($result))
{

   echo "<tr><td ><a href=  $row[4] target= '_blank' >  $row[1]  </a></td><td> $row[2] </td><td> $row[3] </td><td> $row[5] </td></tr>" ;

	}

?>



<marquee direction="left" scrollamount="7">
<p><a href="edit_profile.php">Please complete your form, regularly update your Profile and Resume for better results</a></p>

</marquee>
          
        </div>
 

      </div>


























<div class="wrapper row5">


</div>
<!-- JAVASCRIPTS --> 
<script src="layout/scripts/jquery.min.js"></script> 
<script src="layout/scripts/jquery.fitvids.min.js"></script> 
<script src="layout/scripts/jquery.mobilemenu.js"></script> 
<script src="layout/scripts/tabslet/jquery.tabslet.min.js"></script>
</body>
</html>
