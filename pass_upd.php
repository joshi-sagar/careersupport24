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
<?php include ('header.php');?>
<div class="wrapper row3">
  <div class="rounded">
    <main class="container clear"> 
      <!-- main body --> 

      <div id="content" class="two_third first"> 

        <h1>Update Password</h1>
        &nbsp;&nbsp;<div id="comments">





<form action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" method="POST" name="myform" id="myform">
           <div class="one_third first">
              <label for="name">Old Password <span>*</span></label>
              <input type="password" name="pass1" id="name" value="" size="22">
            </div>
            <div class="one_third">
              <label for="email">New Password <span>*</span></label>
              <input type="password" name="pass2" id="name1" value="" size="22">
            </div>
<div class="one_third">
              <label for="email">Retype New Password <span>*</span></label>
              <input type="password" name="pass3" id="name2" value="" size="22">
            </div>


            <div class="block clear">
              &nbsp;
            </div>
            <div>
              <input name="submit" type="submit" value="Update Password" onclick="return confirm('Are you sure to update Password and noted New Password !!')">
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



<?php

if(isset($_POST['submit'])) 
{

		$old_pass = $_POST['pass1'];			
		$new_pass = $_POST['pass2'];
                $new_pass2 = $_POST['pass3'];

if ($new_pass != $new_pass2)

{



echo "<script>alert('Enter New Password Correctly')</script>";


echo "<script>setTimeout(\"location.href = 'pass_upd.php';\",100);</script>";

  
}

else
{	
		$result = mysql_query("update admin set password='$new_pass' where password='$old_pass'") ;
				
			

		

echo "<script>alert('Password updated Succesfully')</script>";


echo "<script>setTimeout(\"location.href = 'main.php';\",100);</script>";
			
}}				
				
?>



</body>
</html>