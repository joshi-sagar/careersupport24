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
<body>
<?php include ('fre_header.php');?>
<div class="wrapper row3">
  <div class="rounded">
    <main class="container clear"> 
      <!-- main body --> 

      <div id="content" > 

        




<h1>My Summary: </h1>
        &nbsp;&nbsp;<div id="comments">





<form name="myform" id="myform">
           <div class="one_third first">
              <label for="name">Total Paper submitted</label>
              <input name="id1" value= '<?php 
				    	mysql_query("SET NAMES'utf8'");
				
$result = mysql_query("select * from library where uploaded_by= '$user' and status= '0'");
$num_rows = mysql_num_rows($result);

echo "$num_rows \n";





?>' type="text" tabindex="4" size="22" disabled="disabled" />
            </div>
            <div class="one_third">
              <label for="email">Total Species submitted</label>
              <input name="id2" value= '<?php 
				    	mysql_query("SET NAMES'utf8'");
				    
				    $result= mysql_query("select * from species_bank where uploaded_by= '$user' and status= '0'"); 
$num_rows = mysql_num_rows($result);

echo "$num_rows \n";




?>' type="text" tabindex="4" size="22" disabled="disabled" />
            </div>



            
			
			
			
			
			
			
			
			
                      </form>
          
        </div>
 

      </div>
<div class="block clear">
              &nbsp;
            </div>




                      </form>


   

<?php
$result= mysql_query ("select * from library where uploaded_by= '$user' and status= '0' order by it desc");


        echo"<div class='scrollable'>";

echo "<table border=5 >";

echo "<H1>PUBLICATIONS</H1>";

echo "<tr><th>Publication Type</th><th>Publication Category</th>     <th>Publication Area</th><th>Paper Title</th><th>Upload Date</th><th>Edit</th></tr>";

while($row=mysql_fetch_array($result))
{

   echo "<tr><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td ><a href=  $row[8] target= '_blank' >  $row[6]  </a></td><td> $row[9]</td><td ><a href=  'delete_pub.php?country=$row[0]'  >  Delete  </a><a href=  'edit_pub.php?country1=$row[0]'  >  Edit </a></td>" ;

	}
?>



           
            <br>
			
  
			<?php





$result= mysql_query ("select * from species_bank where uploaded_by= '$user' and status= '0' order by id desc");

        
echo "<table border=5 >";
echo "<br>";echo "<br>";
echo "<H1>SPECIES BANK</H1>";


echo "<tr><th>Category</th><th>Species Name</th><th>Lat/Long</th><th>Accession No</th>     <th>Species Locality</th><th>Species Elevation</th><th>Digital Herbarium</th><th>Upload Date</th><th>Edit</th></tr>";

while($row=mysql_fetch_array($result))
{

   echo "<tr><td>$row[1]</td><td>$row[2]</td><td>$row[4]</td><td>$row[6]</td><td>$row[3]</td><td>$row[7]</td><td ><a href=  $row[8] target= '_blank' >  $row[2]  </a></td><td> $row[11] </td><td ><a href=  'delete_spe.php?country=$row[0]'  >  Delete  </a><a href=  'edit_spe.php?country=$row[0]'  >  Edit </a></td>" ;

	}

?>
			
			
			
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
