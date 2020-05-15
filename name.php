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
		
		var strURL="findState.php?country="+countryId;
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

function getState1(countryId1) {		
		
		var strURL="findState1.php?countryId1="+countryId1;
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('statediv1').innerHTML=req.responseText;						
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
<?php include ('header.php');?><div class="wrapper row3">
  <div class="rounded">
    <main class="container clear"> 
      <!-- main body --> 

      <div id="content" class="two_third first"> 

        <h1>Fill Form to Enter New Record</h1>
        &nbsp;&nbsp;<div id="comments">
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" method="POST" name="myform" id="myform">
            <div class="one_third first">
              <label for="name">Payment Collection No. <span>*</span></label>
              <input name="id2" value= '<?php 
				    	mysql_query("SET NAMES'utf8'");
				    
				    $result= mysql_query ("SELECT id FROM application_detail ORDER BY id DESC LIMIT 1");

if (mysql_num_rows($result) > 0) {
   $max_public_id = mysql_fetch_row($result);
echo $max_public_id[0]+1;

}


?>' type="text" tabindex="4" size="22" disabled="disabled" />


            </div>
  



 <div class="one_third">
              <label for="name">Franchisee Collection No. <span>*</span></label>
              <input name="id3" value= '<?php 
				    	mysql_query("SET NAMES'utf8'");
				    
				    $result= mysql_query ("SELECT fra_id FROM application_detail where city_code = '$city_code' ORDER BY fra_id DESC");

if (mysql_num_rows($result) > 0) {
   $max_public_id = mysql_fetch_row($result);
$v1=$max_public_id[0]+1;


}
echo $v1;

?>' type="text" tabindex="4" size="22" disabled="disabled" />


            </div>







 <div class="block clear">
              &nbsp;
            </div>

       
            
     <div class="one_third first">
              <label for="">Payment for<span>*</span></label>       
  <select name="search"  style="width: 200px">
  <option></option>

<option>Vehical Registration</option>

<option>Vehicle Commission</option>
<option>Other Payments</option>

</select>
</div>


   <div class="one_third">

<label for="url">Vehicle Attachment City<span>*</span></label>

 <select name="city"  style="width: 200px" onChange="getState(this.value)" class="ed">
  <option></option>

<?php
				    
				    	mysql_query("SET NAMES'utf8'");
 $result= mysql_query ("select * from  district");

while($row=mysql_fetch_array($result))
{
echo '<option>'.$row[1].'</option>';

}
?>
</select>
             
            </div>

<div class="one_third">
              <label for="name">Vehicle No. <span>*</span></label>

<div id="statediv">
	<select name="state"  style="width: 160px" tabindex="2" onChange="getState1(this.value)" class="ed"></select>

  </div>

            </div>








<div id="statediv1">

<input type="text" name="state1" style="width: 125px" />


  </div>

            </div>











 <div class="block clear">
              &nbsp;
            </div>



             <div class="one_third first">
              
<label for="">Person Name <span>*</span></label>
      

        <input type="text" name="applicant_name" id="" value="" size="22">
            </div>


<div class="one_third">
              <label for="">Mobile Number <span>*</span></label>
              <input type="text" name="applicant_mob" id="" value="" size="22">
            </div>



<div class="one_third">
 <label for="url">Amount<span>*</span></label>
              <input type="text" name="amount" id="url" value="" size="22">
            </div>

           
            <div class="block clear">
              &nbsp;
            </div>
            





             


<div class="one_third first">


              <label for="comment">Details</label>
              <textarea name="application_details" id="" cols="25" rows="5"></textarea>
            </div>

            
      
             
 <div class="block clear">
              &nbsp;
            </div>

            
           
            

             <div class="block clear">
              &nbsp;
            </div>

            
            <div>
              <input name="submit" type="submit" value="Add Payment" onclick="return confirm('Are you sure to Add Payment !!')">
              &nbsp;
              <input name="reset" type="reset" value="Reset Form">
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
  
        
           
   frmvalidator.addValidation("search","req","Select any type");
  frmvalidator.addValidation("applicant_name","req","Enter Name");
     frmvalidator.addValidation("applicant_mob","req","Enter Mobile");

  frmvalidator.addValidation("applicant_mob","numeric","Enter Correct Mobile Number");
  
       





//]]></script>
     <?php
if(isset($_POST['submit'])) 
{


$date = date("Y-m-d");
//$upload='2';
//$upload = $_POST['id2'];

$applicant_name = $_POST['applicant_name'];
$max1 = $_POST['id3'];


$applicant_city = $_POST['city'];
$applicant_mob = $_POST['applicant_mob'];
$applicant_for = $_POST['search'];
$applicant_details=$_POST['application_details'];
$id= $_POST['id2'];
$v_no= $_POST['v_no'];
echo "<script>alert($v_no)</script>";

$p_date= $_POST['p_date'];
$i_date= $_POST['i_date'];
$li_date= $_POST['lic_date'];
$fit_date= $_POST['fit_date'];
$pol_date= $_POST['pol_date'];
$amount= $_POST['amount'];

$status='0';
if (empty($_FILES["file"]["tmp_name"]))
   {
   
 $location='no document';
 
 
   }
          else
       {
       
       
       move_uploaded_file($_FILES["file"]["tmp_name"],
       'library/r_'.$upload . $_FILES["file"]["name"]);
       $location='library/r_' .$upload . $_FILES["file"]["name"];



}




if (empty($_FILES["file1"]["tmp_name"]))
   {
   
 $location1='no document';
 
 
   }
          else
       {
       
       
       move_uploaded_file($_FILES["file1"]["tmp_name"],
       'library/r_'.$upload . $_FILES["file1"]["name"]);
       $location1='library/r_' .$upload . $_FILES["file1"]["name"];



}

if (empty($_FILES["file2"]["tmp_name"]))
   {
   
 $location2='no document';
 
 
   }
          else
       {
       
       
       move_uploaded_file($_FILES["file2"]["tmp_name"],
       'library/r_'.$upload . $_FILES["file2"]["name"]);
       $location2='library/r_' .$upload . $_FILES["file2"]["name"];



}



$result= mysql_query("insert into application_detail (fra_id, city, city_code, Applicant_name, v_city, Applicant_mob, Application_for, Applicant_details, date,  amount, vehicle_no, status)values
('$v1', '$city', '$city_code','$applicant_name','$applicant_city', '$applicant_mob', '$applicant_for', '$applicant_details', '$date',  '$amount', '$v_no', '$status')");








echo "<script>alert('Application Successfully Added')</script>";


echo "<script>setTimeout(\"location.href = 'main.php';\",100);</script>";





}	


 
 
?>


</body>
</html>