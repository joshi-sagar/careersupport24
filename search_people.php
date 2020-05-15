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

<script language="JavaScript" src="layout/gen_validatorv4.js"
    type="text/javascript" xml:space="preserve"></script>
    
    <link rel="stylesheet" href="date_picker/a.css">
<link rel="stylesheet" href="date_picker/b.css">
  <script src="date_picker/jq.js"></script>
  
  <script src="date_picker/jq1.js"></script>

  <script src="date_picker/ui.js"></script>
    <script src="date_picker/ui1.js"></script>
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>
<script>
  $(function() {
    $( "#datepicker1" ).datepicker1();
  });
  </script>

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
<body><body id="top">
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
        


   <li><a href="Home_job_provider.php">Home</a></li>  
  
   <li><a href="Add_Job.php">Add Job</a></li> 
   <li><a href="search_people.php">Search Employee</a></li>  






    
</ul></li>
    </nav>
  </div>
</div>




<div class="wrapper row3">
  <div class="rounded">
    <main class="container clear"> 
      <!-- main body --> 

      <div id="content"> 

        <h1>Search Employee as per your requirement</h1>
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

<!-- JAVASCRIPTS --> 
<script src="layout/scripts/jquery.min.js"></script> 
<script src="layout/scripts/jquery.fitvids.min.js"></script> 
<script src="layout/scripts/jquery.mobilemenu.js"></script> 
<script src="layout/scripts/tabslet/jquery.tabslet.min.js"></script>



<script language="JavaScript" type="text/javascript"
    xml:space="preserve">//<![CDATA[
//You should create the validator only after the definition of the HTML form
  var frmvalidator  = new Validator("myform");
  
        
           
  
  frmvalidator.addValidation("search","req","Select area of Interest");

  frmvalidator.addValidation("work_exp","req","Select work experience");




//]]></script>

<div id="frame1"> 
<div id="printData">

<div style="height:100%; width:100%;border:0px solid #ccc;font:16px/26px Georgia, Garamond, Serif;overflow:auto;" class="auto-style3"></div>


</body>
</html>
