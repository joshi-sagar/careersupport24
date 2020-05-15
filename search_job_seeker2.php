

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
	  
	  
	   <h1>Search Registered Job Seekers as per your requirement</h1>
        &nbsp;&nbsp;<div id="comments">
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>"   method="POST" name="myform" id="myform">
          
            <div class="one_third first">
              <label for="">Area of Interest<span>*</span></label>   



<select name="search"  style="width: 200px" >
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


</div>

<div class="one_third">
              <label for="">Work Experience</label>
							<select name="work_exp" >
						
  <option>0</option>
  <option>1-2</option>
  <option>2-4</option>
    <option>4-6</option>
  <option>6-10</option>
</select>  </div>
       

  
	   
             <div class="one_third">
              <label for="url">.</label>
               <input name="submit" type="submit" value="Search" onclick="return confirm('Are you sure to Search !!')">
                </div>
           
            <div class="block clear">
              &nbsp;
            </div>
            
                      </form>
        </div>
   
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
	  
	  
	  
	  
	  
	  
	  

      



<div class="wrapper row5">


</div>
<!-- JAVASCRIPTS --> 
<script src="layout/scripts/jquery.min.js"></script> 
<script src="layout/scripts/jquery.fitvids.min.js"></script> 
<script src="layout/scripts/jquery.mobilemenu.js"></script> 
<script src="layout/scripts/tabslet/jquery.tabslet.min.js"></script>
</body>
</html>


