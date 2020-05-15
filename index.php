<!DOCTYPE html>
<html>
<head>
<title>Scrab</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">

<script language="JavaScript" src="layout/gen_validatorv4.js"
    type="text/javascript" xml:space="preserve"></script>
	<link rel="icon" href="images/logo.png" > 

</head>
<body id="top">
<div class="wrapper row0">
  <div id="topbar" class="clear"> 

    <nav>
      <ul>
        <li><a href="http://careersupport24.com">Home</a></li>

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


<div class="wrapper">
</div>
<div class="wrapper row3">
  <div class="rounded">
    <main class="container clear"> 
      <!-- main body --> 

      <div id="content" class="two_third first"> 
        
        <h1>System Login</h1>
        &nbsp;&nbsp;<div id="comments">
          <form action="login.php" method="post" name="myform">
            <div class="one_third first">
              <label for="name">Email Id<span>*</span></label>
              <input type="text" name="email" id="name" value="" size="22">
            </div>
            <div class="one_third">
              <label for="">Password <span>*</span></label>
              <input type="password" name="pass" id="email" value="" size="22">
            </div>
            <div class="block clear">
              &nbsp;
            </div>
            <div>



              <label for=""><a href="pass_forget.php">Forgot Password?</a></label>
              <input name="submit" type="submit" value="Login">
              &nbsp;
              <input name="reset" type="reset" value="Reset Form">
            </div>
          </form>
        </div>
		<br>
<h3><a href="Add_user.php">Sign in (New Member)</a></h3>
System Developed by career-support24 

<?php 
$handle = fopen("counter.txt", "r");
if(!$handle){
 echo "could not open the file" ;
}
else {
	$counter = ( int ) fread ($handle,20) ;
	fclose ($handle) ;
	$counter++ ;
	echo" you are visitor no ".  $counter . "  " ;
$handle =  fopen("counter.txt", "w" ) ;
fwrite($handle,$counter) ;
fclose ($handle) ;
	}
?>

      </div>
 <div class="sidebar one_third"> 

        <h6>Support</h6>

<div>Please use registered Username & Password to login to your account.</div>
<br>
<div>For More details or query Please mail us on<br>E-Mail: info@careersupport24.com <br></div>
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
  
  frmvalidator.addValidation("pass","req","Please enter password");
//]]></script>



</body>
</html>
