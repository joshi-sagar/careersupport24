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
<?php include ('fre_header.php');?>
<div class="wrapper row3">
  <div class="rounded">
    <main class="container clear"> 
      <!-- main body --> 

      <div id="content" > 

        <h1>Add Resume - (Please upload the document file in PDF Format) &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; </h1>
        <div id="comments">

<form action="submit_paper.php" enctype="multipart/form-data" method="POST" name="myform" id="myform">


          
				
           
<div class="one_third first">
              <label for="">Area of Interest</label>  
			  <input type="text" name="interest" id="name2" value='<?php 
				    	mysql_query("SET NAMES'utf8'");
				    
				    $result= mysql_query("select * from user where id= '$id'");
while ($row=mysql_fetch_array($result))
{

$sum3= ($row['Area_of_interest']);
}
echo $sum3;




?>' size="22" disabled="disabled"></div>
            
			
<div class="one_third">
              <label for="">Select Resume</label>   
 <input name="file" type="file" cols="22"/></div>
 
  <div class="one_third">
              <label for="url">.</label>
               <input name="submit" type="submit" value="Upload Resume" onclick="return confirm('Are you sure to upload !!')">
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


<h2>Uploaded Resume</h2>
<?php

$result= mysql_query ("select * from library where username= '$user' and status= '0' order by it desc");

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
