
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
  
  
  
<script language="javascript" type="text/javascript">
function getXMLHTTP() { //fuction to return the xml http object
		var xmlhttp=false;	
		try{
			xmlhttp=new XMLHttpRequest();
		}
		catch(e)	{		
			try{			
				xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(e){
				try{
				xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
				}
				catch(e1){
					xmlhttp=false;
				}
			}
		}
		 	
		return xmlhttp;
    }
	



	
			
	}
</script>
  
  
  
  

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
        


   <li><a href="Home_job_provider.php">Home</a></li>  
  
   <li><a href="Add_Job.php">Add Job</a></li> 
   <li><a href="search_people.php">Search Employee</a></li>  






    
</ul>
    </nav>
  </div>
</div>
<div class="wrapper row3">
  <div class="rounded">
    <main class="container clear"> 
      <!-- main body --> 

      <div id="content" > 

        <h1>Add New Job - (Please upload the document file in PDF Format) &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; </h1>
        <div id="comments">

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


</div>

</body>


<script language="JavaScript" type="text/javascript"
    xml:space="preserve">//<![CDATA[
//You should create the validator only after the definition of the HTML form
  var frmvalidator  = new Validator("myform");
  
        
        frmvalidator.addValidation("type","req","Select Paper Type");
   frmvalidator.addValidation("cat","req","Select Publication Category");
  frmvalidator.addValidation("state","req","Select Publication Area"); 
     frmvalidator.addValidation("name","req","Enter name of Publication");
frmvalidator.addValidation("keyword","req","Select Area");

frmvalidator.addValidation("file","req","Select file to upload");

      
//]]></script>
</html>
