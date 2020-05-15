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
<body>
<?php include ('fre_header.php');?><div class="wrapper row3">
  <div class="rounded">
    <main class="container clear"> 
      <!-- main body --> 

      <div id="content" > 

        <h1>Search Papers</h1>
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
              <label for="">Keyword(Author Name, Title)</label>   
 
<input  name="key"  type="text" size="22"  >
  
	   </div>

  
	   
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
$id3=$_POST['key'];
   
   $result= mysql_query ("select * from library where category= '$id2' or name= '$id3' or Author= '$id3'  and status='0' order by it desc");

echo "<br>";
echo "<table border=5 >";

echo "<tr><th>Publication Type</th><th>Publication Category</th>     <th>Publication Area</th><th>Paper Title</th><th>Upload Date</th><th>Uploaded By</th></tr>";

while($row=mysql_fetch_array($result))
{

   echo "<tr><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td ><a href=  $row[8] target= '_blank' >  $row[6]  </a></td><td> $row[9] </td><td >$row[11]</td></tr>" ;

	}
}
?>
   
   
   
      </div>
 
<div class="wrapper row5">
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
  
        
           
  
  frmvalidator.addValidation("applicant_name","req","Enter Name");
     frmvalidator.addValidation("applicant_mob","req","Enter Mobile");

  frmvalidator.addValidation("applicant_mob","numeric","Enter Correct Mobile Number");
  
          frmvalidator.addValidation("v_no","req","Enter Vehicle Number");
   frmvalidator.addValidation("p_date","req","Select date");
 

   frmvalidator.addValidation("i_date","req","Select date");





//]]></script>

<div id="frame1"> 
<div id="printData">

<div style="height:100%; width:100%;border:0px solid #ccc;font:16px/26px Georgia, Garamond, Serif;overflow:auto;" class="auto-style3"></div>


</body>
</html>