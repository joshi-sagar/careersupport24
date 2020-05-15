<?php

	
	$user=$_SESSION['NAME'];
	$id=$_SESSION['ID'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Himalayan Biodiversity and Climate Change Knowledge Network</title>
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

    <div id="logo" class="fl_left">
      <img src="images/3.png" style="width: 10; height: 10">
      <!--<h1>Go-9 Cabs | Partners</h1>
      <p>Partner Portal</p>-->
    </div>
    <div class="fl_right">
      
    </div>

  </header>
</div>
<div class="wrapper row2">
  <div class="rounded">
    <nav id="mainav" class="clear"> 

      <ul class="clear">
        
       <li><a href="fra_main.php">Dashboard</a></li>
	   <li ><a class="drop" href="#">My Account</a>
	    <ul >
 <li ><a  href="profile.php">My Profile</a></li>

     
   <li ><a  href="pub_upload.php">Add Publication</a>  </li>
   <li ><a  href="spe_upload.php">Add Species</a>  </li>

   <li><a href="search_people.php">Search People</a></li>  
   

    
       
              </ul>  </li>

   <li><a href="#">Home</a>

<ul >
 <li ><a  href="#">About Network</a>

<ul >
 <li ><a  href="genesis.php">Genesis</a></li>

 <li ><a  href="objective.php">Objectives</a></li>

</ul>

</li>







 <li ><a  href="#">Publications</a>



<ul>

<?php
	  
	  $result= mysql_query("select * from pub_area");

while($row=mysql_fetch_array($result))
{


$a=$row[2];

   echo '<li ><a href="net_ser_pub.php?country=' . $a.'">' .$row['pub_area'] .'</a> </li > ' ;

     }
    
?>
              </ul> 





</li>

 <li ><a  href="#">Species Bank</a>


<ul>

<?php
	  
	  $result= mysql_query("select * from sp_bank_category");

while($row=mysql_fetch_array($result))
{


$a=$row[1];

   echo '<li ><a href="net_ser_species.php?country=' . $a.'">' .$row['name'] .'</a> </li > ' ;

     }
    
?>

              </ul> </li>



 <li ><a  href="network.php">Search Data</a></li>

</ul>







    
   
   <li><a href="contact.php">Contact Us</a></li> 
</ul></li>
    </nav>
  </div>
</div>

      <!-- main body --> 

     
<!-- JAVASCRIPTS --> 
</body>
</html>
