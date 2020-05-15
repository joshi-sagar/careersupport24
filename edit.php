<?php
require "authority.php";
	require "connect.php";
	
	$user=$_SESSION['NAME'];
	$id=$_SESSION['ID'];
?>
<!DOCTYPE html>
<html>
<head>
<title>Application Management System</title>
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
<?php include ('header.php');?>
<?php
$mykey1=$_REQUEST['key1'];



echo "<form action='update.php?key1=" . $mykey1 .  "'method='POST'>";
?>
<?php
	mysql_query("SET NAMES'utf8'");
$result= mysql_query ("select * from application_detail where id='$mykey1'  ");

while($row=mysql_fetch_array($result))
{

$mykey1=$row[0];
$mykey2=$row[1];
$mykey3=$row[2];
$mykey4=$row[3];
$mykey5=$row[4];
$mykey6=$row[5];
$mykey7=$row[6];
$mykey8=$row[7];
$mykey9=$row[8];
$mykey10=$row[9];
$mykey11=$row[10];
$mykey12=$row[11];
$mykey13=$row[12];
$mykey14=$row[13];


}
?>




<div class="wrapper row3">
  <div class="rounded">
    <main class="container clear"> 
      <!-- main body --> 

      <div id="content" class="two_third first"> 

        <h1>Fill Form to Enter New Record</h1>
        &nbsp;&nbsp;<div id="comments">
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" method="POST" name="myform1" id="myform1">
            <div class="one_third first">
              <label for="name">Application No. <span>*</span></label>
              
              
                       <?php echo  "<INPUT TYPE=text name='id2' value='$mykey1' size='22' disabled='disabled'/>";
?> 


            </div>
         
            
     <div class="one_third">
              <label for="">Application for<span>*</span></label>       
  <select name="search"  style="width: 200px">
  <option></option>
<option>Vehicle Tax Payment</option>
<option>Vehicle Insurance Payment</option>

<option>Driving Insurance (Learning)</option>
<option>Permit (All India)</option>
<option>Permit (State)</option>
<option>Others</option>
</select>
</div>


   <div class="one_third">
              <label for="">Applicant Name <span>*</span></label>
             <?php echo  "<INPUT TYPE=text name='applicant_name' value='$mykey2' size='22'/>";
?>      </div>



 <div class="block clear">
              &nbsp;
            </div>


             <div class="one_third first">
              <label for="url">Fathers Name<span>*</span></label>
    <?php echo  "<INPUT TYPE=text name='applicant_fname' value='$mykey3' size='22'/>";
?> 
            </div>


<div class="one_third">
              <label for="">Mobile Number <span>*</span></label>
                  <?php echo  "<INPUT TYPE=text name='applicant_mob' value='$mykey4' size='22'/>";
?> 

            </div>

<div class="one_third">
              <label for="name">Vehicle No. </label>
              
                             <?php echo  "<INPUT TYPE=text name='v_no' value='$mykey8' size='22'/>";
?> 





            </div>

           
            <div class="block clear">
              &nbsp;
            </div>
            
            
             <div class="one_third first">
              <label for="">Fitness Renew Date  <span>*</span></label>
              <?php echo  " <input type='date' name='fit_date' id='datepicker' value='$mykey12' size='22'>"; ?>
            </div>
            
            
             <div class="one_third">
              <label for="url">Pollution Renew Date<span>*</span></label>
              <?php echo  " <input type='date' name='pol_date' id='datepicker1' value='$mykey13' size='22'>"; ?>
            </div>

<div class="one_third">
              <label for="url">Permit Renew Date<span>*</span></label>
              <?php echo  " <input type='date' name='per_date' id='datepicker2' value='$mykey14' size='22'>"; ?>
            </div>

       
             
 <div class="block clear">
              &nbsp;
            </div>



            <div class="one_third first">
              <label for="">Tax payment Date <span>*</span></label>
              <?php echo  " <input type='date' name='p_date' id='datepicker' value='$mykey9' size='22'>"; ?>
            </div>
            
            
             <div class="one_third">
              <label for="url">Insurace Renew Date<span>*</span></label>
              <?php echo  " <input type='date' name='i_date' id='datepicker1' value='$mykey10' size='22'>"; ?>
            </div>

<div class="one_third">
              <label for="url">Licence Renew Date<span>*</span></label>
              <?php echo  " <input type='date' name='lic_date' id='datepicker2' value='$mykey11' size='22'>"; ?>
            </div>

       
             
 <div class="block clear">
              &nbsp;
            </div>

           
            
            <div>
              <input name="submit" type="submit" value="Update" onclick="return confirm('Are you sure to update !!')">
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



    


</body>
</html>