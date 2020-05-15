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
<?php include ('header.php');?><div class="wrapper row3">
  <div class="rounded">
    <main class="container clear"> 
      <!-- main body --> 

      <div id="content" class="two_third first"> 

        <h1>Marketing Data Download</h1>
        &nbsp;&nbsp;<div id="comments">
          <form action="all_marketing_backup.php" enctype="multipart/form-data" method="POST" name="myform" id="myform">
          
            <div class="one_third first">
              <label for="">Select City<span>*</span></label>   



<select name="search"  style="width: 200px" >
  <option></option>

<?php
				    
				    	mysql_query("SET NAMES'utf8'");
 $result= mysql_query ("select * from  district");

while($row=mysql_fetch_array($result))
{
echo '<option>'.$row[2].'</option>';
}
?>
</select>


</div>
       

  
	   
             <div class="one_third">
              <label for="url">Press</label>
               <input name="submit" type="submit" value="Download" onclick="return confirm('Are you sure to Search !!')">
                </div>
           
            <div class="block clear">
              &nbsp;
            </div>
            
                      </form>
        </div>
    <a href="#"  onClick="printF('printData')">

      </div>
 <div class="sidebar one_third"> 

        <h6>Features</h6>

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

<div style="height:100%; width:100%;border:1px solid #ccc;font:16px/26px Georgia, Garamond, Serif;overflow:auto;" class="auto-style3"><?php

if(isset($_POST['submit'])) 
{



$name = $_POST['search'];






if ($name=='' )
{
echo "<script>alert('Enter correct information to Search')</script>";




}
else{

	mysql_query("SET NAMES'utf8'");


$result= mysql_query ("select * from application_detail where v_city= '$name' and status= '0' order by id DESC");

echo   "Total Registered Payments of City- ",$name;
echo "<br>";
echo "<br>";
echo "<table border=1 >";

echo "<tr><th>ID</th><th>Payment For</th><th>Applicant Name</th><th>Mobile No</th><th>Vehicle No</th><th>Amount </th><th>Upload</th></tr>";
while($row=mysql_fetch_array($result))
{

   echo "<tr><td width=5%> $row[id] </td><td width=10%> $row[Application_for] </td><td width=10%> $row[Applicant_name] </td><td width=5%> $row[Applicant_mob] </td><td width=10%> $row[vehicle_no] </td>    <td width=10%> $row[amount] </td>  <td width=10%> <a href=$row[upload] target='_parent'>$row[upload]</a></td></tr>" ;

}
}}

?></div>


</body>
</html>