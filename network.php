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

        

 <h1>Search Data in Network</h1>
        &nbsp;&nbsp;<div id="comments">
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>"   method="POST" name="myform" id="myform">
          
            <div class="one_third first">
              <label for="">Area of Interest<span>*</span></label>   
<select name="aoi"  style="width: 200px" >
  <option></option>

<?php
mysql_query("SET NAMES'utf8'");
 $result= mysql_query ("select * from  aio");

while($row=mysql_fetch_array($result))
{
echo '<option>'.$row[1].'</option>';
}
?>
</select>


              
              

<label for="">Study Area<span>*</span></label>   



<select name="area" >
  <option></option>
 <option>West_Himalaya</option>
  <option>Eastern_Himalaya</option>
   <option>North_West_Himalaya</option>
   <option>Central_Himalaya</option>
   <option>Trans_Himalaya</option>
   <option>WH_Kumaun_Himalaya</option>
   <option>WH_Garhwal_Himalaya</option>
   <option>Indian_Himalaya</option>





</select>


</div>




       <div class="one_third">
              <label for="">Title</label>   
 
<input  name="word"  type="text" size="22"  >
  
	   </div>

  
	   
             <div class="one_third">
              <label for="url">.</label>
               <input name="submit" type="submit" value="Search" onclick="return confirm('Are you sure to Search !!')">
                </div>
           
           
            
                      </form>
        </div>
   
   <?php
   
    if(isset($_POST['submit'])) 
{

$id2=$_POST['aoi'];
$id3=$_POST['word'];  
$keyword=$_POST['area'];

if (empty($id2) )
{
$id2=0;

}


if (empty($id2)  And empty($id3)  And empty($keyword))



{

  echo "<script>alert('Please provide some details to search Data on network')</script>";
 
  echo "<script>location.href='network.php'</script>";


}












$result= mysql_query ("select * from library where category= '$id2' and status='0' order by it desc");

echo "<br>";


        echo"<div class='scrollable'>";

echo "<table border=5 >";


 echo "<tr><th>Result based on: Area of Interest</th></tr>";
echo "<tr><th>Publication Type</th><th>Publication Category</th><th>Publication Area</th><th>Paper Title</th><th>Upload Date</th><th>Uploaded By</th></tr>";

while($row=mysql_fetch_array($result))
{

   echo "<tr><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td ><a href=  $row[8] target= '_blank' >  $row[6]  </a></td><td> $row[9] </td><td >   <a href=member_profile.php?id2=$row[11]> $row[11]<a></td></tr</table>" ;

	}





echo "<br>";echo "<br>";










$result= mysql_query ("select * from library where Keywords= '$keyword' And  status='0' order by it desc");

echo "<br>";


        echo"<div class='scrollable'>";

echo "<table border=5 >";

 echo "<tr><th>Result based on: Study Area</th></tr>";

echo "<tr><th>Publication Type</th><th>Publication Category</th><th>Publication Area</th><th>Paper Title</th><th>Upload Date</th><th>Uploaded By</th></tr>";

while($row=mysql_fetch_array($result))
{

   echo "<tr><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td ><a href=  $row[8] target= '_blank' >  $row[6]  </a></td><td> $row[9] </td><td >   <a href=member_profile.php?id2=$row[11]> $row[11]<a></td></tr</table>" ;

	}

echo "<br>";echo "<br>";








$result= mysql_query ("select * from library where name= '$id3' and status='0' order by it desc");

echo "<br>";


        echo"<div class='scrollable'>";

echo "<table border=5 >";


 echo "<tr><th>Result based on: Title</th></tr>";
echo "<tr><th>Publication Type</th><th>Publication Category</th><th>Publication Area</th><th>Paper Title</th><th>Upload Date</th><th>Uploaded By</th></tr>";

while($row=mysql_fetch_array($result))
{

   echo "<tr><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td ><a href=  $row[8] target= '_blank' >  $row[6]  </a></td><td> $row[9] </td><td >   <a href=member_profile.php?id2=$row[11]> $row[11]<a></td></tr</table>" ;

	}


echo "<br>";










}

?>
   
   
    <div class="clear"></div>
    </div>
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
