<?php

	
	$user=$_SESSION['NAME'];
	$id=$_SESSION['ID'];
	$city=$_SESSION['city'];
	$city_code=$_SESSION['city_code'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Go-9 Cabs | Partner Portal</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<div class="wrapper row0">
  <div id="topbar" class="clear"> 

    <nav>
      <ul>
        <li><a href="#">Welcome User- <?php echo $city_code ?></a></li>
        <li><a href="logout.php">Logout</a></li>
        

      </ul>
    </nav>
 
  </div>
</div>
<div class="wrapper row1">
  <header id="header" class="clear"> 

    <div id="logo" class="fl_left">
      <img src="http://go9cabs.in/go9_portal/new/images/2.png" style="width: 10; height: 10"> 
      
      <!--<h1>Go-9 Cabs | Admin Panel</h1>
      <p>Partner Portal</p>-->
    </div>
    <div class="fl_right">
     
<form class="clear" method="post" action="#">
        <fieldset>
          <legend>Search:</legend>
          <input type="text" value="" placeholder="Search Here">
          <button class="fa fa-search" type="submit" title="Search"><em>Search</em></button>
        </fieldset>
      </form>
    </div>

  </header>
</div>
<div class="wrapper row2">
  <div class="rounded">
    <nav id="mainav" class="clear"> 

      <ul class="clear">
        
       <li><a href="main.php">Dashboard</a></li>
 <li ><a class="drop" href="#">Entry</a>
          <ul>
   

            <li><a href="Add_vehicle.php">Add Vehicle</a></li> 

        
 <li><a href="commision_update.php">Add Booking</a></li> 



 <li><a href="payment_by_hq.php">Add Payment To Franchisee</a></li> 




          </ul>
        </li>

   <li ><a class="drop" href="#">Search</a>
          <ul>     

 <li><a href="5.php">Search Payment by- City</a></li>
 <li><a href="3.php">Search Payment by- Vehicle No.</a></li>

    <li><a href="today_rec_amount.php">Today Received Payments</a></li>
 

 <li><a href="vehicle_balance_find.php">Search Vehicle Balance</a></li> 

<li><a href="search_booking.php">Search Bookings</a></li> 

<li><a href="marketing_data_download.php">Marketing Data Download</a></li> 


<li><a href="city_vehicle_balance_find1.php">City Vehicle Balance</a></li> 

<li><a href="search_fra_collected.php">Search Total Collection Received</a></li> 

 </ul>
        </li>

 
<li><a href="main_report.php">BALANCE REPORT</a>



        

 <li><a href="rate_calculate.php">Rate Calculate</a></li>
 

 </li> 


<li><a href="pass_upd.php">Update Password</a></li> 
   
   <li><a href="logout.php">Logout</a></li>   
        
       
              </ul>

    </nav>
  </div>
</div>

      <!-- main body --> 

     
<!-- JAVASCRIPTS --> 
</body>
</html>