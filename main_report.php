<?php
require "authority.php";
	require "connect.php";
	
	$user=$_SESSION['NAME'];
	$id=$_SESSION['ID'];

	$city=$_SESSION['city'];
	$city_code=$_SESSION['city_code'];
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
<?php include ('header.php');?>
<div class="wrapper row3">
  <div class="rounded">
    <main class="container clear"> 
      <!-- main body --> 

      <div id="content" class="two_third first"> 

        <h1>Account Summary-</h1>
        &nbsp;&nbsp;<div id="comments">

<form action="report1.php" enctype="multipart/form-data" method="POST" name="myform" id="myform">
          
            <div class="one_third first">
              <label for="">Select City Code<span>*</span></label>   



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
               <input name="submit" type="submit" value="Submit Form" onclick="return confirm('Are you sure to Search !!')">
                </div>
           
            <div class="block clear">
              &nbsp;
            </div>
            
                      </form>




          
        </div>
 

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
  
        
           
  
  frmvalidator.addValidation("pass1","req","Enter Old Password");
     frmvalidator.addValidation("pass2","req","Enter New Password");
          frmvalidator.addValidation("pass3","req","Re enter New Password");





//]]></script>






</body>
</html>