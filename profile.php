



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
<?php include ('fre_header.php');?>
<div class="wrapper row3">
  <div class="rounded">
    <main class="container clear"> 
      <!-- main body --> 

      <div id="content" > 

        




<h1>My Profile </h1>
        &nbsp;&nbsp;<div id="comments">





<form name="myform" id="myform">
           <div class="one_third first">
		   
		   
		   
		   
		   
		   
           
			  <?php $propic=mysql_query("SELECT * FROM user WHERE id='$id'");
			$row=mysql_fetch_assoc($propic);
			$pic= $row['Pro_pic'];
 echo "<img width=50 height=50 src=$pic border=2 >"; 
  echo"<br></br>"; echo $_SESSION['NAME'];?>
  
			  
			  
            </div>
            <div class="one_third">
			
			
			 <label for="email">Name </label>

              <input type="text" name="pass3" id="name2" value='<?php 
				    	mysql_query("SET NAMES'utf8'");
				    
				    $result= mysql_query("select * from user where id= '$id'");
while ($row=mysql_fetch_array($result))
{

$sum3= ($row['name']);
}
echo $sum3;




?>' size="22" disabled="disabled">



			  </br>
			                <label for="email">Address</label>

              <input type="text" name="pass3" id="name2" value='<?php 
				    	mysql_query("SET NAMES'utf8'");
				    
				    $result= mysql_query("select * from user where id= '$id'");
while ($row=mysql_fetch_array($result))
{

$sum3= ($row['Address']);
}
echo $sum3;




?>' size="22" disabled="disabled">
			
		 </br>
			                <label for="email">Date of Birth</label>

              <input type="text" name="pass3" id="name2" value='<?php 
				    	mysql_query("SET NAMES'utf8'");
				    
				    $result= mysql_query("select * from user where id= '$id'");
while ($row=mysql_fetch_array($result))
{

$sum3= ($row['Dob']);
}
echo $sum3;




?>' size="22" disabled="disabled"> </br>
			                <label for="email">Area of Interest</label>

              <input type="text" name="pass3" id="name2" value='<?php 
				    	mysql_query("SET NAMES'utf8'");
				    
				    $result= mysql_query("select * from user where id= '$id'");
while ($row=mysql_fetch_array($result))
{

$sum3= ($row['Area_of_interest']);
}
echo $sum3;




?>' size="22" disabled="disabled">	
</br>
			                <label for="email">My Additional Skills</label>

              <input type="text" name="pass3" id="name2" value='<?php 
				    	mysql_query("SET NAMES'utf8'");
				    
				    $result= mysql_query("select * from user where id= '$id'");
while ($row=mysql_fetch_array($result))
{

$sum3= ($row['Skills']);
}
echo $sum3;




?>' size="22" disabled="disabled">	





</br>
			                <label for="email">Disability Type</label>

              <input type="text" name="pass3" id="name2" value='<?php 
				    	mysql_query("SET NAMES'utf8'");
				    
				    $result= mysql_query("select * from user where id= '$id'");
while ($row=mysql_fetch_array($result))
{

$sum3= ($row['disability_type']);
}
echo $sum3;




?>' size="22" disabled="disabled">	

 <label for="email">Medical no.</label>

              <input type="text" name="pass3" id="name2" value='<?php 
				    	mysql_query("SET NAMES'utf8'");
				    
				    $result= mysql_query("select * from user where id= '$id'");
while ($row=mysql_fetch_array($result))
{

$sum3= ($row['mnumber']);
}
echo $sum3;




?>' size="22" disabled="disabled">	
             



             
			  
			  
            </div>
<div class="one_third">
              <label for="email">User Type </label>

              <input type="text" name="pass3" id="name2" value='<?php 
				    	mysql_query("SET NAMES'utf8'");
				    
				    $result= mysql_query("select * from user where id= '$id'");
while ($row=mysql_fetch_array($result))
{

$sum3= ($row['User_type']);
}
echo $sum3;




?>' size="22" disabled="disabled">





			  </br>
			                <label for="email">Contact Number </label>

              <input type="text" name="pass3" id="name2" value='<?php 
				    	mysql_query("SET NAMES'utf8'");
				    
				    $result= mysql_query("select * from user where id= '$id'");
while ($row=mysql_fetch_array($result))
{

$sum3= ($row['mobile']);
}
echo $sum3;




?>' size="22" disabled="disabled">
 </br>
			                <label for="email">Gender </label>

              <input type="text" name="pass3" id="name2" value='<?php 
				    	mysql_query("SET NAMES'utf8'");
				    
				    $result= mysql_query("select * from user where id= '$id'");
while ($row=mysql_fetch_array($result))
{

$sum3= ($row['Gender']);
}
echo $sum3;




?>' size="22" disabled="disabled">
 </br>
			                <label for="email">Highest Qualification </label>

              <input type="text" name="pass3" id="name2" value='<?php 
				    	mysql_query("SET NAMES'utf8'");
				    
				    $result= mysql_query("select * from user where id= '$id'");
while ($row=mysql_fetch_array($result))
{

$sum3= ($row['Higher_qualification']);
}
echo $sum3;




?>' size="22" disabled="disabled">
 </br>
			                <label for="email">Work Experience </label>

              <input type="text" name="pass3" id="name2" value='<?php 
				    	mysql_query("SET NAMES'utf8'");
				    
				    $result= mysql_query("select * from user where id= '$id'");
while ($row=mysql_fetch_array($result))
{

$sum3= ($row['Work_exp']);
}
echo $sum3;




?>' size="22" disabled="disabled">

            </div>


            
                      </form>
          
        </div>
 

      </div>
<div class="block clear">
              &nbsp;
            </div>

<marquee direction="left" scrollamount="7">
<p><a href="edit_profile.php">Please regularly update your Profile and Resume for better results</a></p>

</marquee>




       
            
            
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
</body>
</html>
