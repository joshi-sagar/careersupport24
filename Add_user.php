<?php

	require "connect.php";
	
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<html>
<head>
<title></title>
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
<body id="top">
<div class="wrapper row0">
  <div id="topbar" class="clear"> 

    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="#">Contact Us</a></li>

      </ul>
    </nav>
 
  </div>
</div>
<div class="wrapper row1">
  <header id="header" class="clear"> 

    <div id="logo" class="fl_left">
      
    
     <img src="images/3.png" style="width: 10; height: 10">
    
 
    </div>
    <div class="fl_right">
      <form class="clear" method="post" action="#">
        <fieldset>
          <legend>Search:</legend>
          <!--<input type="text" value="" placeholder="Search Here">
          <button class="fa fa-search" type="submit" title="Search"><em>Search</em></button>-->
        </fieldset>
      </form>
    </div>

  </header>
</div>
<div class="wrapper row3">
  <div class="rounded">
    <main class="container clear"> 
      <!-- main body --> 

      <div id="content"> 

        <h1>Register Yourself  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;   
<a href="http://careersupport24.com">Back to Home</a></h1>
        &nbsp;&nbsp;<div id="comments">
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" method="POST" name="myform" id="myform">
            
<div class="one_third first">
              <label for="name">Registration no. <span>*</span></label>
              <input name="id2" value= '<?php 
				    	mysql_query("SET NAMES'utf8'");
				    
				    $result= mysql_query ("SELECT id FROM user ORDER BY id DESC LIMIT 1");

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

			



    

             <div class="one_third first">
              
<label for="">Name<span>*</span></label>
      

              <input type="text" name="name" id="url" value="" size="22">
            </div>


<div class="one_third">
              <label for="">Mobile Number <span>*</span></label>
              <input type="text" name="mob" id="" value="" size="22">
            </div>

	<div class="one_third">
			 <label for="">Date of Birth<span>*</span></label>
							     <input type="date" name="dob" id="datepicker" value="" size="22"> </div>





         
			
			
			
			<div class="one_third first">


             
              <label for="">Father's name <span>* </span></label>
             <input type="text" name="fname" id="" value="" size="22">
            </div>
      

<div class="one_third">
              <label for="">Address<span> (Recent)</span></label>
              <input type="text" name="add" id="" value="" size="22">
            </div>



<div class="one_third">

<label for="">Email<span>* </span></label>
              <input type="email" name="email" id="" value="" size="22">

            </div>




<div class="one_third first">


             
              <label for="">Aadhar_no <span>* </span></label>
             <input type="text" name="aadhar" id="" value="" size="22">
            </div>
      

<div class="one_third">
              <label for="">Login Password<span>* (Must be 7 character)</span></label>
              <input type="password" name="pass" id="" value="" size="22">
            </div>



<div class="one_third">

<label for="">Retype Login Password<span>*</span></label>
              <input type="password" name="pass2" id="" value="" size="22">

            </div>


             
 <div class="block clear">
              &nbsp;
            </div>
            


 <div class="one_third first">
              
<label for="">District</label>
      
<select name="dis" >
  <option></option>
  <option>Almora</option>
  <option>Bageshwar</option>
  <option>Champawat</option>
    <option>Dehradun</option>
  <option>Haridwar</option>
   <option>Nainital</option>
  <option>Pithoragarh</option>
   <option>Pauri</option>
  <option>Srinagar</option>
  <option>Others</option>

</select>
           
            </div>


<div class="one_third">
              <label for="">Gender<span>*</span></label>
			  <select name="gender" >
  <option></option>
  <option>Male</option>
  <option>Female</option>
 <option>Others</option>
</select>
			  
            </div>
		
<div class="one_third">
 <label for="">User Type<span>*</span></label>
							<select name="user_type" >
  <option></option>
  <option>Help_needy</option>
  <option>Volunteer</option>

</select> </div>
 <div class="block clear">
              &nbsp;
            </div>
            
            
            
            
      <div class="one_third first">
              <label for="">Upload Document (Medical Certificate for Help_needy and Aadhar card for Volunteer)<span>* Accept in pdf only</span></label>   
 <input name="file" type="file" cols="22"/></div>
 
  <div class="one_third">
              <label for="url">.</label>
              
                </div>   
      
            
            
            
 <div class="block clear">
              &nbsp;
            </div>
            
            
            
            
            
            
          
            <div>

              <label for=""><a href="terms.php" target = "_blank">I accepted all terms and conditions of the system</a>&nbsp; &nbsp; &nbsp;  <a href="library/Article.pdf" target = "_blank">Important Document 1</a>&nbsp; &nbsp; &nbsp;  <a href="library/omguide.pdf" target = "_blank">Important Document 2</a></label>
              <input name="submit" type="submit" value="Register Me" onclick="return confirm('Are you sure to Register and Accept all Term and conditions !!')">
              &nbsp;
              <input name="reset" type="reset" value="Clear All">
            </div>
          </form>
        </div>
 
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
  
        
       
 frmvalidator.addValidation("email","req","Please Enter your Email ID");

  frmvalidator.addValidation("email","maxlen=50");
  frmvalidator.addValidation("email","req");
  frmvalidator.addValidation("email","email"); 

   frmvalidator.addValidation("pass","req","Enter Password");


   frmvalidator.addValidation("pass2","req","Enter Retype Password");

  frmvalidator.addValidation("name","req","Enter Name");

     
     frmvalidator.addValidation("mob","req","Enter your Mobile Number");

  frmvalidator.addValidation("mob","numeric","Enter Correct Mobile Number");
  
     frmvalidator.addValidation("user_type","req"," Select User Type");
       

     frmvalidator.addValidation("aadhar","req","Enter your Aadhar Number");
  frmvalidator.addValidation("aadhar","numeric","Enter Correct Aadhar Number");




//]]></script>
     <?php
if(isset($_POST['submit'])) 
{




$date = date("d-m-Y");

$uname = $_POST['email'];
$pass = $_POST['pass'];
$pass2 = $_POST['pass2'];
$name = $_POST['name'];
$mob = $_POST['mob'];
$dis = $_POST['dis'];
$aadhar = $_POST['aadhar'];
$propic="upload_photo/propic.jpg";
$status='1';
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$u_type = $_POST['user_type'];
$file=$_POST['file'];

$fname = $_POST['fname'];
$add=$_POST['add'];

$result1 = mysql_query("SELECT * FROM user WHERE username='$uname'") ;
				
if(mysql_num_rows($result1) > 0) 

{

  echo "<script>alert('Email already register. Please Reregister with different Email Id')</script>";
  die();
  echo "<script>location.href='index.php'</script>";

}



if (strlen($pass) <= 6)
{



  echo "<script>alert('Paasword sholud be 7 character long. Please reregister')</script>";

die();
  echo "<script>location.href='index.php'</script>";
} 


if ($pass != $pass2)

{
  echo "<script>alert('Please enter same vales in Password Field. Please reregister')</script>";
  die();
  echo "<script>location.href='index.php'</script>";
  
}

else
{
    
    
$target_dir = "user_ids/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


// Allow certain file formats
if($imageFileType != "pdf") 
{
     echo "<script>alert('Sorry, only PDF files are allowed.')</script>";

 echo "<script>location.href='Add_user.php'</script>";
    
}

else
{





 if ($_FILES["file"]["error"] > 0)
   {
   echo "Error: " . $_FILES["file"]["error"] . "<br />";
   }
 else
   {
   }
     if (file_exists("user_ids/" . $_FILES["file"]["tmp_name"]))
       {
       echo " already exists. ";
       }
     else
       {


$fileName1 = str_replace(" ","_",$_FILES['file']['name']);
move_uploaded_file($_FILES["file"]["tmp_name"],"user_ids/" . $uname .'_' . $fileName1);

$userid="user_ids/" . $uname.'_' . $fileName1;

    
    
    
}}
    
    
    
    
    
    


$result= mysql_query("insert into user (username, password, name, reg_date, mobile, Address, Aadhar_no, status, Pro_pic, User_type, Gender, Dob, user_id_file, father, address2 )values ('$uname','$pass', '$name', '$date', '$mob', '$add', '$aadhar', '$status', '$propic', '$u_type', '$gender', '$dob', '$userid', '$fname', '$add')");



$subject1= "Welcome in careersupport24 Network: ";
$body1 = "Subject: $subject1 \n Dear $name, \n Thanks for registration with us. \n Your account will be active after verification by careersupport24 Team\n Thanks";

	
	mail($uname, $subject1, $body1);



$to='info@careersupport24.com';
$subject= "New registration in careersupport24 Network: Notification";
$body = "Subject: $subject \n Dear Admin, \n Please check out recently registered person: $name\n Thanks";

	
	mail($to, $subject, $body);


echo "<script>alert('Welcome in the group. After approval of Admin you can login in System')</script>";






echo "<script>setTimeout(\"location.href = 'index.php';\",100);</script>";

}}	
 
?>


</body>
</html>
