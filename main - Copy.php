<?php
require "authority.php";
	require "connect.php";
	
	$user=$_SESSION['NAME'];
	$id=$_SESSION['ID'];
?>



<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">


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



</head>
<body>
<?php include ('header.php');?>
<div class="wrapper row3">
  <div class="rounded">
    <main class="container clear"> 
      <!-- main body --> 

      <div id="content" > 

        <h1>Welcome to Go-9 Cabs Partner Portal Admin Area</h1>
        &nbsp;&nbsp;<div id="comments">
          <form action="login.php" method="post">
            <div class="one_third first">
             <a href="Add_franchise.php"> <img class="img borderedbox"src="images/to_work.jpg" height="102" width="110"/><label for="name">Add Franchisee</label>
</a>              
            </div>
            <div class="one_third">
                 <a href="payment_by_hq.php"><img class="img borderedbox" src="images/add11.jpg" height="102" width="110"/> <label for="name">Payment to Franchisee</label>
</a> 
             
            </div>


<div class="one_third">
                 <a href="main_report.php"> <img class="img borderedbox" src="images/search.jpg" height="102" width="110"/><label for="name">Summary of Franchisee</label>
</a> 
             
            </div>





<div class="one_third">
                <a href="#"> <label for="name">.</label>
             
            </div>

<div class="one_third">
                 <a href="#"> <label for="name">.</label>
</a> 
             
            </div>





            <div class="block clear">
              &nbsp;
            </div>
            
          </form>
       





<div class="wrapper row5">


</div>
<!-- JAVASCRIPTS --> 
<script src="layout/scripts/jquery.min.js"></script> 
<script src="layout/scripts/jquery.fitvids.min.js"></script> 
<script src="layout/scripts/jquery.mobilemenu.js"></script> 
<script src="layout/scripts/tabslet/jquery.tabslet.min.js"></script>
</body>
</html>