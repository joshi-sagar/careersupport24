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
        
	  
 

 
 
   <li><a href="main.php">Home</a></li>  
   <li><a href="pending.php">Pending Verification</a></li> 
   <li><a href="All_job_provider.php">Volunteers</a></li>  
  
   <li><a href="All_job_seeker.php">Help Needy</a></li>
    <li><a href="deleted_user.php">Deleted Users</a></li>

    <li><a href="inbox_admin.php">Help Requests</a></li>
<li><a href="search_job_seeker.php">Search job</a></li> 



</ul></li>
    </nav>
  </div>
</div>
<div class="wrapper row3">
  <div class="rounded">
    <main class="container clear"> 
      <!-- main body --> 

      <div id="content" > 

        <h1>Welcome to  Admin Area</h1>
        &nbsp;&nbsp;<div id="comments">
          <form action="login.php" method="post">
            <div class="one_third first">
             <a href="All_job_provider.php"> <img class="img borderedbox"src="images/to_work.jpg" height="102" width="110"/><label for="name">All Job Provider</label>
</a>              
            </div>
            <div class="one_third">
                 <a href="All_job_seeker.php"><img class="img borderedbox" src="images/add11.jpg" height="102" width="110"/> <label for="name">All Job Seeker</label>
</a> 
             
            </div>


<div class="one_third">
                 <a href="pending.php"> <img class="img borderedbox" src="images/search.jpg" height="102" width="110"/><label for="name">Pending Verification</label>
</a> 
             
            </div>

<div class="one_third first">
                 <a href="deleted_user.php"> <img class="img borderedbox" src="images/search.jpg" height="102" width="110"/><label for="name">Deleted users</label>
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
       
 <h1>Add New Job - (Please upload the document file in PDF Format) &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; </h1>
        <div id="comments">

<div class="block clear">
              &nbsp;
            </div>


<form action="submit_job.php" enctype="multipart/form-data" method="POST" name="myform" id="myform">


          
				
           
<div class="one_third first">
              <label for="">Office Name</label>  
			  <input type="text" name="office" id="name2" value='' size="22" >
            
			 </br>
			                <label for="">Last Date<span>*</span></label>
							     <input type="date" name="l_date" id="datepicker" value="" size="22"></div>
<div class="one_third">


 
			               <label for="url">Area of Interest<span>*</span></label>
<select name="interest" >
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
</br></br>

              <label for="">Upload Notification</label>   
 <input name="file" type="file" cols="22"/></div>
 
  <div class="one_third">
  
  
   <label for="">Job Location</label>  
			  <input type="text" name="location" id="" value='' size="22" >
            
			 </br>
  
  
  
              <label for="url">.</label>
               <input name="submit" type="submit" value="Add Job" onclick="return confirm('Are you sure to upload !!')">
                </div>   

           
            <div class="block clear">
              &nbsp;
            </div>
			
			
	

<div class="block clear">
              &nbsp;
            </div>

<div class="block clear">
              &nbsp;
            </div>
			
            
                      </form>




          
        </div>
 

      </div>


 
<div class="wrapper row5">
</div>


<h2>My Uploded Advertizements</h2>
<?php
$date = date("Y-m-d");

$result= mysql_query ("select * from new_job where Submitted_by= '$user' and status= '0' order by Last_date desc");

echo "<br>";

        echo"<div class='scrollable'>";
echo "<table border=5 >";

echo "<tr><th>Office Name</th><th>Job_Field</th><th>Job Location</th><th>Last Date</th></tr>";

while($row=mysql_fetch_array($result))
{

   echo "<tr><td ><a href=  $row[4] target= '_blank' >  $row[1]  </a></td><td> $row[2] </td><td> $row[3] </td><td> $row[5] </td></tr>" ;

	}

?>




<div class="wrapper row5">


</div>
<!-- JAVASCRIPTS --> 
<script src="layout/scripts/jquery.min.js"></script> 
<script src="layout/scripts/jquery.fitvids.min.js"></script> 
<script src="layout/scripts/jquery.mobilemenu.js"></script> 
<script src="layout/scripts/tabslet/jquery.tabslet.min.js"></script>
</body>
</html>