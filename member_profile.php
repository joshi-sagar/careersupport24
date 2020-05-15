<?php
require "authority.php";
	require "connect.php";
	
	$user=$_SESSION['NAME'];
	$id=$_SESSION['ID'];



$table=$_REQUEST['id2'];



$result= mysql_query ("select * from user where id= '$table' ");


while($row=mysql_fetch_array($result))
{

   $r1= $row['name'];
 $r2= $row['Address'];
 $r3= $row['Skills'];

	}




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
        


  
   <li><a href="search_people.php">Search People</a></li>  






    
   
   <li><a href="contact.php">Contact Us</a></li> 
</ul></li>
    </nav>
  </div>
</div>
<div class="wrapper row3">
  <div class="rounded">
    <main class="container clear"> 
      <!-- main body --> 

      <div id="content" > 

        




<h1><?php echo $r1; echo '</br>'; echo $r2; echo '</br>'; echo $r3; ?> </h1>
        &nbsp;&nbsp;<div id="comments">




<h2>Send Message to : <?php echo $r1; ?></h2>

<form action="send_message.php" enctype="multipart/form-data" method="POST" name="myform" id="myform">
          
            
			
			
			 <div class="one_third first">
              
                      
			 <label for="">Message</label> 
                <textarea name="message" id="" cols="25" rows="5"></textarea>
         

			  </div>
           
            
			
			
			
		
			
			
			
	 <div class="one_third">
              <label for="url">.<input  name="id3"  type="hidden" size="22"  value='<?php
				  echo $table;

?>'></label>
               <input name="submit" type="submit" value="Send message" onclick="return confirm('Are you sure to send message!!')">
                </div>   

<div class="block clear">
              &nbsp;
            </div>
			
            
                      </form>
          
        </div>
 
<h2>Uploaded Resume</h2>
<?php

$result= mysql_query ("select * from library where it= '$table' and status= '0' order by it desc");

echo "<br>";

        echo"<div class='scrollable'>";
echo "<table border=5 >";

echo "<tr><th>Uploaded Resume</th><th>Upload Date</th></tr>";

while($row=mysql_fetch_array($result))
{

   echo "<tr><td ><a href=  $row[4] target= '_blank' >  $row[3]  </a></td><td> $row[5] </td></tr>" ;

	}

?>
      </div>


	
			
			
		    </div>	
</div>
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
  


  
     frmvalidator.addValidation("message","req","Write some message");
       
//]]></script>
</body>
</html>
