



<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">


<script language="JavaScript" src="layout/gen_validatorv4.js"
    type="text/javascript" xml:space="preserve"></script>
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

</head>
<body>
<?php include ('fre_header.php');



$result= mysql_query ("select * from user where username='$user'");

while($row=mysql_fetch_array($result))
{
	$m00=$row['name'];
	$m0=$row['Area_of_interest'];
	$m1=$row['Address'];
	$m2=$row['User_type'];
	$m4=$row['mobile'];
	$m5=$row['Skills'];
	$m6=$row['Aadhar_no'];
	$m7=$row['mobile'];
	$m8=$row['Dob'];      
	$m9=$row['Gender'];
	$m10=$row['Higher_qualification'];
	$m11=$row['mobile'];
	$m12=$row['father'];    
	$m13=$row['mnumber'];
	$m14=$row['disability_type'];
	$m15=$row['Work_exp'];
}


?>
<div class="wrapper row3">
  <div class="rounded">
    <main class="container clear"> 
      <!-- main body --> 

      <div id="content" > 

        




<h1>My Profile</h1>
        &nbsp;&nbsp;<div id="comments">





<form name="myform2" action="pro_pic_upload.php" method= "post" enctype="multipart/form-data">
           <div class="one_third first">
		   
		   
		   
		   
		                                                              
		   
           
			  <?php $propic=mysql_query("SELECT * FROM user WHERE id='$id'");
			$row=mysql_fetch_assoc($propic);
			$pic= $row['Pro_pic'];
 echo "<img width=50 height=50 src=$pic border=2 >"; ?>

 <label for="email">Edit profile picture- </label>
 <input name="file" type="file"/>

</br>
 <input name="submit2" type="submit" value="Upload " onclick="return confirm('Are you sure to Update Picture !!')">
  </form>
			  
			  
            </div>


<form name="myform" id="myform" action="<?php echo $_SERVER['PHP_SELF']; ?>" method= "post">
            <div class="one_third">
			
			
			 <label for="email">Name </label>

              <input type="text" name="name1"  value='<?php echo $m00;  ?>' size="22" disabled="disabled" >
			  
			  </br>
			                <label >Address<span>*</span></label>

              <input type="text" name="address1"  value='<?php echo $m1;  ?>' size="22" >
			  
			  
			    </br>
			                <label for="">Date of Birth<span>*</span></label>
							     <input type="date" name="dob" id="datepicker" value='<?php echo $m8;  ?>' size="22">
            
                              </br>
							  
							  <label for="">Medical no.<span>*</span></label>
							     <input type="numeric" name="mnumber" value='<?php echo $m13;  ?>' size="20">
            
                              </br>
							  
							  <label for="">Father's name<span>*</span></label>
							     <input type="numeric" name="father" value='<?php echo $m12;  ?>' size="20">
            
                              </br>
							 
							  
							  
			               <label for="url">Area of Interest<span>*</span></label>
<select name="interest"?>' size="20" >
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

						

	
			   
			  
			   </br>
			                <label for="">Disabilty type<span>*</span></label>
               	
             <select name="disability"  ?>' >
							<option></option>
  <option>Visual_Disability</option>
  <option>Hearing_Disability</option>
  <option>Physical_Disability</option>
    <option>Mental_Health_Disability</option>
  <option>Others</option>
</select>
            
			  
	
            
			  </br>
			  
			  
			                <label for="">My Additional Skills<span>*</span></label>
              <input type="text" name="skills"  value='<?php echo $m5;  ?>' size="22" >		  	 
			  
            </div>
<div class="one_third">
              <label for="email">User Type </label>

              <input type="text" name="aadhar" value='<?php echo $m2;  ?>' size="22" disabled="disabled">
			  
			  
			  
 </br>
			           
			                <label for="email">Contact Number<span>*</span></label>

              <input type="text" name="mob" value='<?php echo $m4;  ?>' size="22" >
			  
			  
			  
			   </br>
			                <label for="" value='<?php echo $m9;  ?>' size="22"  >Gender<span>*</span></label>
							<select name="gender" >
							<option></option>
  <option>Male</option>
  <option>Female</option>
  <option>Other</option>
</select>


 </br>
			                <label for="" value='<?php echo $m10;  ?>' size="22" >Highest Qualification<span>*</span></label>
							<select name="que" >
							<option></option>
  <option>High School</option>
  <option>Intermediate</option>
  <option>Graduation</option>
    <option>Masters</option>
  <option>P.hd.</option>
  <option>Other</option>
</select>

 </br>
			                <label for="" value='<?php echo $m15;  ?>' size="22" >Work Experience<span>*</span></label>
							<select name="work_exp" >
							<option></option>
  <option>0</option>
  <option>1-2</option>
  <option>2-4</option>
    <option>4-6</option>
  <option>6-10</option>
</select>

   <label for="" >Expectation salary<span>*</span></label>
							<select name="salary" >
							<option></option>
  <option>10,000</option>
  <option>10,000-20,000</option>
  <option>20,000-40,000</option>
    <option>>40,000</option>
  
</select>

<label for="">Percentage of disability<span>*</span></label>
               	
             <select name="Dpercent" >
							<option></option>
  <option>10%</option>
   <option>20%</option>
   <option>30%</option>
   <option>40%</option>
   <option>50%</option>
    <option>60%</option>
	 <option>70%</option>
	  <option>80%</option>
	   <option>90%</option>
	    <option>100%</option>
  <option>Not confirm</option>
</select>

<label for="">Region of disability<span>*</span></label>
               	
             <select name="Rdisability" >
							<option></option>
  <option>By birth</option>
  <option>Middle of age </option>
  <option>By accident</option>
  <option>Others</option>
</select>
       
            
		</br></br></br></br></br></br></br></br></br>	

</br>
</br>
</br>
</br>
 <input name="submit" type="submit" value="Update " onclick="return confirm('Are you sure to Update !!')">
             
</div>

            
                      </form>
          
        </div>
 

      </div>
<div class="block clear">
              &nbsp;
            </div>






       
            
            
          
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
  
        

   frmvalidator.addValidation("address1","req","Enter Your Address");
   
     frmvalidator.addValidation("mob","req","Enter Mobile");
  frmvalidator.addValidation("mob","numeric","Enter Correct Mobile Number");
      frmvalidator.addValidation("dob","req","Enter Date of Birth");
	      frmvalidator.addValidation("gender","req","Select Gender");
	  
  frmvalidator.addValidation("interest","req","Select Area of Interest");
  frmvalidator.addValidation("que","req","Select Your Highest Qualification");
   frmvalidator.addValidation("skills","req","Enter Your some skills Like- Management, Hindi Typing etc. ");
  frmvalidator.addValidation("work_exp","req","Select your Work Experience");
  
  frmvalidator.addValidation("disability","req","Select your disability type");
     
//]]></script>

<?php

if(isset($_POST['submit'])) 
{
$add = $_POST['address1'];
$phone = $_POST['mob'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$phone = $_POST['mob'];
$interest = $_POST['interest'];
$que = $_POST['que'];  
$exp = $_POST['work_exp'];
$skills = $_POST['skills'];
$disability = $_POST['disability'];
$medicalno=$_POST['mnumber'];
$father=$_POST['father'];

$result= mysql_query("update user set Area_of_interest='$interest', Address='$add', Skills='$skills', mobile='$phone'  , Dob='$dob', Gender='$gender', Higher_qualification='$que', Work_exp='$exp', Mnumber='$medicalno' , disability_type='$disability', father='$father' where username= '$user'");
echo "<script>alert('Profile Successfully updated.')</script>";

echo "<script>location.href='profile.php'</script>";



 }?>
</body>
</html>
