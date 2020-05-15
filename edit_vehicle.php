<?php
require "authority.php";
	require "connect.php";
	
	$user=$_SESSION['NAME'];
	$id=$_SESSION['ID'];
	$city=$_SESSION['city'];
	$city_code=$_SESSION['city_code'];
	
	
	
?>

<?php
if(isset($_POST['submit'])) 
{
$applicant_city = $_POST['city'];

$v_no1= $_POST['state'];

} 
?>





<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<html>
<head>
<title>Application Management System</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">



<script language="javascript" type="text/javascript">
function getXMLHTTP() { //fuction to return the xml http object
		var xmlhttp=false;	
		try{
			xmlhttp=new XMLHttpRequest();
		}
		catch(e)	{		
			try{			
				xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(e){
				try{
				xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
				}
				catch(e1){
					xmlhttp=false;
				}
			}
		}
		 	
		return xmlhttp;
    }
	
	function getState(countryId) {		
		
		var strURL="findState2.php?country="+countryId;
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('statediv').innerHTML=req.responseText;						
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}



	
			
	}
</script>






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
<script>
  $(function() {
    $( "#datepicker2" ).datepicker2();
  });
  </script>
    <script>
  $(function() {
    $( "#datepicker" ).datepicker3();
  });
  </script>
<script>
  $(function() {
    $( "#datepicker1" ).datepicker4();
  });
  </script>
<script>
  $(function() {
    $( "#datepicker2" ).datepicker5();
  });
  </script>  
    

</head>
<body>
<?php include ('header.php');

mysql_query("SET NAMES'utf8'");
$result= mysql_query ("select * from departments where vehicle='$v_no1'");

while($row=mysql_fetch_array($result))
{
	$m00=$row['last_update_date'];
	$m0=$row['driver_name'];
	$m1=$row['fname'];
	$m2=$row['o_age'];
	$m3=$row['o_address'];
	$m4=$row['v_make'];
	
	
	$m5=$row['v_model'];
	$m6=$row['driver_no'];
	$m7=$row['v_eng'];
	$m8=$row['v_chassis'];
	$m9=$row['rc_exp_date'];
	$m10=$row['permit_exp_date'];
	$m11=$row['ins_exp_date'];
	
	
	$m12=$row['o_id_proof'];
	$m13=$row['d_id_proof'];
	$m14=$row['audit_proof'];
	
	$m15=$row['rc'];
	$m16=$row['permit'];
	$m17=$row['insurance'];
	
}


?>


<div class="wrapper row3">
  <div class="rounded">
    <main class="container clear"> 
      <!-- main body --> 

      <div id="content" class=""> 

        <h1>Edit Registered Vehicle &nbsp;&nbsp;    (Last Updated on- <?php echo $m00; ?> )</h1>
        &nbsp;&nbsp;
		
		<div id="comments">
          <form action="v.php" enctype="multipart/form-data" method="POST" name="myform" id="myform">
            


       
      

             <div class="one_third first">
              
<label for="">Owner Name<span>*</span></label>
      

              <input type="text" name="name" id="url" value=' <?php echo $m0;  ?>' size="22">
            </div>


<div class="one_third">
              <label for="">Owner Fathers name <span>*</span></label>
              <input type="text" name="fname" id="" value=' <?php echo $m1;  ?>' size="22">
            </div>


<div class="one_third">
              <label for="">Owners Age<span>*</span></label>
              <input type="text" name="age" id="" value=' <?php echo $m2;  ?>' size="22">
            </div>





           
            <div class="block clear">
              &nbsp;
            </div>
            

<div class="one_third first">
              
<label for="">Owner Address<span>*</span></label>
      

              <input type="text" name="address" id="url" value=' <?php echo $m3;  ?>' size="22">
            </div>


<div class="one_third">
              <label for="">Vehicle Make <span>*</span></label>
              <input type="text" name="v_make" id="" value=' <?php echo $m4;  ?>' size="22">
            </div>


<div class="one_third">
              <label for="">Vehicle Model<span>*</span></label>
              <input type="text" name="v_model" id="" value=' <?php echo $m5;  ?>' size="22">
            </div>





           
            <div class="block clear">
              &nbsp;
            </div>


<div class="one_third first">
              <label for="">Owner Phone Number<span>*</span></label>
              <input type="text" name="mob" id="" value=' <?php echo $m6;  ?>' size="22">
            </div>




<div class="one_third">
              <label for="">Vehicle Engine Number<span>*</span></label>
              <input type="text" name="v_eng" id="" value=' <?php echo $m7;  ?>' size="22">
            </div>


<div class="one_third">
              <label for="">Vehicle Chassis Number<span>*</span></label>
              <input type="text" name="v_chs" id="" value=' <?php echo $m8;  ?>' size="22">
            </div>





           
            <div class="block clear">
              &nbsp;
            </div>

			
			<div class="one_third first">
              
<label for="">Vehicle RC Expiry- <span><?php echo $m9;  ?></span></label>
      

          <input type="date" name="rc_exp" value="" size="22">
            </div>


<div class="one_third">
              <label for="">Vehicle Permit Expiry- <span><?php echo $m10;  ?></span></label>
   <input type="date" name="p_exp" id="datepicker" value="" size="22">
            </div>


<div class="one_third">
              <label for="">Vehicle Insurance Expiry- <span><?php echo $m11;  ?></span></label>
               <input type="date" name="ins_exp" id="datepicker" value="" size="22">
            </div>





           
            <div class="block clear">
              &nbsp;
            </div>
			
			
             

<div class="one_third first">
              
<label for="">Vehicle Owner ID Proof- <span><?php echo "<a href= '$m12', target='_blank'>Uploaded Doc </a>";  ?></span></label>
      

              <input type="file" name="o_id" id="" value="" size="22">
            </div>


<div class="one_third">
              <label for="">Vehicle Driver ID Proof- <span><?php echo "<a href= '$m13', target='_blank'>Uploaded Doc  </a>";  ?></span></label>
              <input type="file" name="d_id" id="" value="" size="22">
            </div>


<div class="one_third">
              <label for="">Vehicle Audit Report- <span><?php echo "<a href= '$m14', target='_blank'>Uploaded Doc  </a>";  ?></span></label>
              <input type="file" name="v_audit" id="" value="" size="22">
            </div>





           
            <div class="block clear">
              &nbsp;
            </div>


            
           <div class="one_third first">
              
<label for="">Vehicle Registration Certificate- <span><?php echo "<a href= '$m15', target='_blank'>Uploaded Doc  </a>";  ?></span></label>
      

              <input type="file" name="v_rc" id="" value="" size="22">
            </div>


<div class="one_third">
              <label for="">Vehicle Permit Certificate- <span><?php echo "<a href= '$m16', target='_blank'>Uploaded Doc  </a>";  ?></span></label>
              <input type="file" name="v_p_c" id="" value="" size="22">
            </div>


<div class="one_third">
              <label for="">Vehicle Insurance Certificate- <span><?php echo "<a href= '$m17', target='_blank'>Uploaded Doc  </a>";  ?></span></label>
              <input type="file" name="v_i_c" id="" value="" size="22">
            </div>





           
            <div class="block clear">
              &nbsp;
            </div>

            

             <div class="block clear">
              &nbsp;
            </div>

            
            <div>
              <input name="submit" type="submit" value="Update Vehicle" onclick="return confirm('Are you sure to Update !!')">
              &nbsp;
              <input name="reset" type="reset" value="Reset Form">
            </div>
          </form>
        </div>
 
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


 frmvalidator.addValidation("state1","req","Enter City State"); 
 frmvalidator.addValidation("state","req","Enter City Code"); 
 frmvalidator.addValidation("mob","req","Enter Mobile No");         
 frmvalidator.addValidation("name","req","Enter Name");
 frmvalidator.addValidation("fname","req","Enter Fathers Name");
 frmvalidator.addValidation("age","req","Enter Correct Age");

 frmvalidator.addValidation("address","req","Enter Address");
 frmvalidator.addValidation("v_make","req","Enter Vehicle Make");
 frmvalidator.addValidation("v_model","req","Enter Vehicle Model Name");

 frmvalidator.addValidation("v_no","req","Enter Vehicle Registration No");
 frmvalidator.addValidation("v_eng","req","Enter Vehicle Engine Number");
 frmvalidator.addValidation("v_chs","req","Enter Vehicle Chassis Number");


  
       





//]]></script>
     


</body>
</html>