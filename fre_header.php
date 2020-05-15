<?php
require "authority.php";
	require "connect.php";
	
	$user=$_SESSION['NAME'];
	$id=$_SESSION['ID'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>careersupport24</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<div class="wrapper row0">
  <div id="topbar" class="clear"> 

    <nav>
      <ul>
         <li><a href="#">Welcome - <?php echo $user ?></a></li>
         
        <li><a href="logout.php">Logout</a></li>
        

      </ul>
  
    </nav>
 
  </div>
</div>
<div class="wrapper row1">
  <header id="header" class="clear"> 

    <div id="logo" class="fl_left"> <img src="images/3.png" style="width: 10; height: 10">
     
    </div>
    <div class="fl_right">
      
    </div>

  </header>
</div>
<div class="wrapper row2">
  <div class="rounded">
    <nav id="mainav" class="clear"> 

      <ul class="clear">
        
	  
 <li ><a  href="Home_job_seeker.php">Home</a></li>
 <li ><a  href="profile.php">My Profile</a></li>
   
   <li><a href="contact.php">Request Help</a></li> 

     <li> <a href="edit_profile.php">Update Profile</a> </li>
   <li ><a  href="pub_upload2.php">My Resume</a>  </li>
   <li ><a  href="search_job_seeker2.php">Search jobs</a>  </li>
			 <li>  <a href="inbox.php">Message Inbox</a> </li>

  <li>  <a href="fre_pass_upd.php">Update Password</a></li>

</ul></li>
    </nav>
  </div>
</div>

      <!-- main body --> 

     
<!-- JAVASCRIPTS --> 
</body>
</html>
