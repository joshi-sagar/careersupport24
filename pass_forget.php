<?php
	require "connect.php";
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
  
  
     

</head>
<body id="top">
<div class="wrapper row0">
  <div id="topbar" class="clear"> 

    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>

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


      <div id="content" > 

        <h1>You can recovery your password here</h1>
        &nbsp;&nbsp;<div id="comments">

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" method="POST" name="myform" id="myform">
          
            
			
			
			 <div class="one_third first">
              
              <label for="">Enter Registered Email Id</label>   
 
<input  name="email"  type="text" size="22"  >
  
	   </div>
            
            
			
			
			
		
			
			
			
	 <div class="one_third">
              <label for="url">.</label>
               <input name="submit" type="submit" value="Submit" onclick="return confirm('Are you sure to recover password!!')">
                </div>   

<div class="block clear">
              &nbsp;
            </div>
			
            
                      </form>




          
        </div>
 

      </div>


 
<div class="wrapper row5">
</div>

<script language="JavaScript" type="text/javascript"
    xml:space="preserve">//<![CDATA[
//You should create the validator only after the definition of the HTML form
  var frmvalidator  = new Validator("myform");
  
frmvalidator.addValidation("email","maxlen=50");
  frmvalidator.addValidation("email","req");
  frmvalidator.addValidation("email","email"); 
       
//]]></script>

</body>
</html>


 <?php 


if(isset($_POST['submit'])) 
{

$email = $_POST['email'];




$result1 = mysql_query("SELECT * FROM user WHERE username='$email'") ;
				
if(mysql_num_rows($result1) > 0) 

{



while($row=mysql_fetch_array($result1))
{



$a1= $row['password'];

}


$subject= "password Recovery Email from HBCC-KN Website";
$body = "Dear user: $email \n \n Your Last Password: $a1   \n";

	
	mail($email, $subject, $body);


	  echo "<script>alert('Please check your Email for password')</script>";
 echo "<script>location.href='index.php'</script>";

}

else
{

  echo "<script>alert('Email not register. Please provide registered Email Id')</script>";
  die();
  echo "<script>location.href='index.php'</script>";

}


  }

?>


