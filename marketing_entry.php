<?php
require "authority.php";
	require "connect.php";
	
	$user=$_SESSION['NAME'];
	$id=$_SESSION['ID'];
	$city=$_SESSION['city'];
	$city_code=$_SESSION['city_code'];
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
<?php include ('fre_header.php');?><div class="wrapper row3">
  <div class="rounded">
    <main class="container clear"> 
      <!-- main body --> 

      <div id="content" class="two_third first"> 

        <h1>Add Marketing Data</h1>
        &nbsp;&nbsp;<div id="comments">
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" method="POST" name="myform" id="myform">
            <div class="one_third first">
              <label for="name">City Serial No. <span>*</span></label>
              <input name="id2" value= '<?php 
				    	mysql_query("SET NAMES'utf8'");
				    
				    $result= mysql_query ("SELECT id FROM $city_code ORDER BY id DESC LIMIT 1");

if (mysql_num_rows($result) > 0) {
   $max_public_id = mysql_fetch_row($result);
echo $max_public_id[0]+1;

}
else
{

echo "1";

}


?>' type="text" tabindex="4" size="22" disabled="disabled" />


            </div>
  

<div class="one_third">
              <label for="">Owner Name <span>*</span></label>
              <input type="text" name="owner" id="" size="22">
            </div>


<div class="one_third">
              <label for="">Owner Number <span>*</span></label>
              <input type="text" name="o_no" id="" size="22">
            </div>


 





 <div class="block clear">
              &nbsp;
            </div>


       
            <div class="one_third first">


              <label for="">City<span>*</span></label>
      

              
              <input type="text" name="city" id=""  HQ" size="22">
            </div>


            <div class="one_third">
              <label for="">Driver Name <span>*</span></label>
              <input type="text" name="driver" id="" size="22">
            </div>


<div class="one_third">
              <label for="">Driver Number <span>*</span></label>
              <input type="text" name="d_no" id="" size="22">
            </div>



             
 



           
            <div class="block clear">
              &nbsp;
            </div>
            




<div class="one_third first">


              <label for="">Vehicle Number<span>*</span></label>
      

              
              <input type="text" name="v_no" id=""  HQ" size="22">
            </div>


            <div class="one_third">
              <label for="">Vehicle Make <span>*</span></label>
              <input type="text" name="v_make" id="" size="22">
            </div>


<div class="one_third">
              <label for="">Vehicle Model <span>*</span></label>
              <input type="text" name="v_model" id="" size="22">
            </div>
             



<div class="block clear">
              &nbsp;
            </div>

       
            
     <div class="one_third first">
              <label for="">Lead Type<span>*</span></label>       
  <select name="lead"  style="width: 200px">
  <option></option>

<option>Hot</option>

<option>Warm</option>
<option>Cold</option>

</select>
</div>
            
           
            

             <div class="block clear">
              &nbsp;
            </div>

            
            <div>
              <input name="submit" type="submit" value="Add Record" onclick="return confirm('Are you sure to Add !!')">
              &nbsp;
              <input name="reset" type="reset" value="Reset Form">
            </div>
          </form>
        </div>
 
      </div>



<div class="sidebar one_third"> 

        <h6>Instructions & Download Records</h6>
  <p>Enter your daily marketing data. Fill all the details and submit.</p>
<div class="wrapper row3">

  <?php


echo "<a href ='fra_db_backup.php?country=$city_code'>Click Here to Download Marketing Data</a>";
?>

</div>      </div>
 
<!-- JAVASCRIPTS --> 
<script src="layout/scripts/jquery.min.js"></script> 
<script src="layout/scripts/jquery.fitvids.min.js"></script> 
<script src="layout/scripts/jquery.mobilemenu.js"></script> 
<script src="layout/scripts/tabslet/jquery.tabslet.min.js"></script>



<script language="JavaScript" type="text/javascript"
    xml:space="preserve">//<![CDATA[
//You should create the validator only after the definition of the HTML form
  var frmvalidator  = new Validator("myform");
  
        
           
   frmvalidator.addValidation("owner","req","Enter Owner Name");
  frmvalidator.addValidation("o_no","req","Enter Mobile No");
    

  frmvalidator.addValidation("o_no","numeric","Enter Correct Mobile Number");
  
       
 frmvalidator.addValidation("city","req","Enter city");




//]]></script>
     <?php
if(isset($_POST['submit'])) 
{


$date = date("Y-m-d");
//$upload='2';
//$upload = $_POST['id2'];



$owner= $_POST['owner'];
$o_no= $_POST['o_no'];
$city = $_POST['city'];
$driver = $_POST['driver'];
$d_no = $_POST['d_no'];
$v_no = $_POST['v_no'];
$v_mak = $_POST['v_make'];
$v_mod = $_POST['v_model'];
$lead = $_POST['lead'];

$result= mysql_query("insert into $city_code (Owner_Name, Owner_Phone, Driver_Name, Driver_Phone, Place, Vehicle_no, Vehicle_make, Vehicle_model, Date, lead_type)values
('$owner','$o_no', '$driver', '$d_no','$city', '$v_no', '$v_mak', '$v_mod', '$date', '$lead')");


$mobileNo=$o_no.','.$d_no;




$message = "Go-9 Cabs ????????? ?? ??? ???? ?? ??? ???????|  ??? ???? 8899-068-073";



//$message = "Thanks for joining us in GO9Cabs- Taxi booking Service";
$authKey = "117020AcFqenamJJm5769363a";
$senderId = "GONINE";
$route = "4";









$postData = array(
    'authkey' => $authKey,
    'mobiles' => $mobileNo,
    'message' => $message,
    'sender' => $senderId,
    'route' => $route,
    'country'=>'0',
    'unicode'=>'1'
);





$url="https://control.msg91.com/api/sendhttp.php";


$ch = curl_init();
    curl_setopt_array($ch, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $postData
));


curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$output = curl_exec($ch);
 if(curl_errno($ch))
{
    echo 'error:' . curl_error($ch);
}
curl_close($ch);
echo '<script>alert("Message sent Successfully")</script>';


echo "<script>alert('Data Successfully Added')</script>";


echo "<script>setTimeout(\"location.href = 'fra_main.php';\",100);</script>";





}	


 
 
?>


</body>
</html>