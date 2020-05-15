<?php
require "authority.php";
	require "connect.php";
	
	$user=$_SESSION['NAME'];
	$id=$_SESSION['ID'];



$table=$_REQUEST['id2'];


?>



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



</head>
<body>

<body><body id="top">
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
        


   






    
</ul></li>
    </nav>
  </div>
</div>


<div class="wrapper row3">
  <div class="rounded">
    <main class="container clear"> 
      <!-- main body --> 

      <div id="content" > 

        




<h1>New registered user Profile </h1>
        &nbsp;&nbsp;<div id="comments">





<form name="myform" id="myform" action="approve.php" method="post">
           <div class="one_third first">
		   
		   
		   
		   
		   
		   
           
			  <?php $propic=mysql_query("SELECT * FROM user WHERE id='$table'");
			$row=mysql_fetch_assoc($propic);
			$pic= $row['Pro_pic'];
			$username1= $row['username'];
 echo "<img width=50 height=50 src=$pic border=2 >"; 
  echo"<br></br>";
  
  $result= mysql_query ("select * from user where username= '$username1' and status= '1' ");


while($row=mysql_fetch_array($result))
{

   	$path= $row['user_id_file'];

	}
  
   echo"<br></br>";
    echo "<a href='$path ' target='_blank'><img width=20 height=20 src='images/pdf.jpg' ></a>"; 
    echo"<br>Uploaded Id by new user";
  
  ?>
  
			  
			  
            </div>
            <div class="one_third">
			
			
			 <label for="email">Name </label>

              <input type="text" name="pass3" id="name2" value='<?php 
				    	mysql_query("SET NAMES'utf8'");
				    
				    $result= mysql_query("select * from user where id= '$table'");
while ($row=mysql_fetch_array($result))
{

$sum4= ($row['name']);
}
echo $sum4;




?>' size="22" disabled="disabled">


			  </br>
			                

 <input type="text" name="email" id="email" value='<?php 
				    	mysql_query("SET NAMES'utf8'");
				    
				    $result= mysql_query("select * from user where id= '$table'");
while ($row=mysql_fetch_array($result))
{

$sum3= ($row['username']);
}
echo $sum3;




?>' size="22" style="display:none;" >	

			  </br>
			                <label for="email">Address</label>

              <input type="text" name="pass3" id="name2" value='<?php 
				    	mysql_query("SET NAMES'utf8'");
				    
				    $result= mysql_query("select * from user where id= '$table'");
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
				    
				    $result= mysql_query("select * from user where id= '$table'");
while ($row=mysql_fetch_array($result))
{

$sum3= ($row['Dob']);
}
echo $sum3;




?>' size="22" disabled="disabled"> </br>
			                <label for="email">Area of Interest</label>

              <input type="text" name="pass3" id="name2" value='<?php 
				    	mysql_query("SET NAMES'utf8'");
				    
				    $result= mysql_query("select * from user where id= '$table'");
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
				    
				    $result= mysql_query("select * from user where id= '$table'");
while ($row=mysql_fetch_array($result))
{

$sum3= ($row['Skills']);
}
echo $sum3;




?>' size="22" disabled="disabled">	
             
	</br></br>	


 <input name="submit" type="submit" value="approve" onclick="return confirm('Are you sure to approve user!!')">
		
			  
            </div>
<div class="one_third">
              <label for="email">Aadhar Number </label>

              <input type="text" name="pass3" id="name2" value='<?php 
				    	mysql_query("SET NAMES'utf8'");
				    
				    $result= mysql_query("select * from user where id= '$table'");
while ($row=mysql_fetch_array($result))
{

$sum3= ($row['Aadhar_no']);
}
echo $sum3;




?>' size="22" disabled="disabled">





			  </br>
			                <label for="email">Contact Number </label>

              <input type="text" name="pass3" id="name2" value='<?php 
				    	mysql_query("SET NAMES'utf8'");
				    
				    $result= mysql_query("select * from user where id= '$table'");
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
				    
				    $result= mysql_query("select * from user where id= '$table'");
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
				    
				    $result= mysql_query("select * from user where id= '$table'");
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
				    
				    $result= mysql_query("select * from user where id= '$table'");
while ($row=mysql_fetch_array($result))
{

$sum3= ($row['Work_exp']);
}
echo $sum3;




?>' size="22" disabled="disabled">

            </div>
			
			
<div class="block clear">
              &nbsp;
            </div>			
 
			  
			   
			   </div>
       </form> 


            
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


<script language="JavaScript" type="text/javascript"
    xml:space="preserve">//<![CDATA[
//You should create the validator only after the definition of the HTML form
  var frmvalidator  = new Validator("myform");
  
        
        frmvalidator.addValidation("message","req","Please write some message");

      
//]]></script>
</body>
</html>
