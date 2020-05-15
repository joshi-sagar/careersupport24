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

<!-- / Demo styling - remove before use -->
<style type="text/css">
.container .group{text-align:center;}
.container .group div{padding:8px 0; font-size:16px; font-family:Verdana, Geneva, sans-serif;}
.container .group div:nth-child(odd){color:#FFFFFF; background:#CCCCCC;}
.container .group div:nth-child(even){color:#FFFFFF; background:#979797;}
@media screen and (min-width:180px) and (max-width:900px) {
	.container .group div{margin-bottom:0;}
}
</style>
<!-- / Demo styling -->


</head>
<body>

<?php include ('fre_header.php');?>
<div class="wrapper row3">
  <div class="rounded">
    <main class="container clear"> 
      <!-- main body --> 

      <div id="content" > 



<?php






echo "<h1>All Publication Related to Biodiversity and Climate Change</h1>";

 echo"<div class='scrollable'>";
$result= mysql_query ("select * from library where category = 'Biodiversity_and_Climate_change' and status='0' order by it desc");

echo "<br>";
echo "<table border=5 >";

echo "<tr><th>Paper Title</th><th>Study Area</th><th>Upload Date</th><th>Uploaded By</th></tr>";

while($row=mysql_fetch_array($result))
{

   echo "<tr><td><a href=  $row[8] target= '_blank' >  $row[6]  </a></td><td>$row[7]</td><td >$row[9]</td><td><a href=member_profile.php?id2=$row[11] >$row[11]</a></td></tr>" ;

	}


?>
</div>

</main> 

</div>

</div>

</body>
</html>
