<?php
require "authority.php";
	require "connect.php";
	
	$user=$_SESSION['NAME'];
	$id=$_SESSION['ID'];


$table=$_REQUEST['country'];

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
	
	function getState(countryId) {		
		
		var strURL="findState.php?country="+countryId;
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('statediv').innerHTML=req.responseText;						
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
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

        <h1>Edit uploaded Species &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; <a href="deleted_spe.php">Deleted Species</a></h1>
        &nbsp;&nbsp;<div id="comments">

<form action="edit_spe2.php" enctype="multipart/form-data" method="POST" name="myform" id="myform">
          
            <div class="one_third first">
              
              <label for="">Species Category <span><?php
				    
				    	mysql_query("SET NAMES'utf8'");
 $result= mysql_query ("select * from  species_bank where id= '$table' and uploaded_by= '$user'");

while($row=mysql_fetch_array($result))
{
echo $row[1];
}
?></span></span></label>   
 <select name="cat"  style="width: 200px" >
  <option></option>

<?php
				    
				    	mysql_query("SET NAMES'utf8'");
 $result= mysql_query ("select * from  sp_bank_category");

while($row=mysql_fetch_array($result))
{
echo '<option>'.$row['name'].'</option>';

}
?>
</select></div>
  
	   
            <div class="one_third">
              <label for="">Species Name<span>*</span></label>   
 
<input  name="name"  type="text" size="22"  value='<?php
				    
				    	mysql_query("SET NAMES'utf8'");
 $result= mysql_query ("select * from  species_bank where id= '$table' and uploaded_by= '$user'");

while($row=mysql_fetch_array($result))
{
echo $row[2];
}
?>
'>
  
	   

  </div>
  
  
  
  <div class="one_third">
              <label for="">Species Locality<span>*</span></label>   
 
<input  name="loc"  type="text" size="22"  value='<?php
				    
				    	mysql_query("SET NAMES'utf8'");
 $result= mysql_query ("select * from  species_bank where id= '$table' and uploaded_by= '$user'");

while($row=mysql_fetch_array($result))
{
echo $row[3];
}
?>
'>
  
	   </div>
           
            <div class="block clear">
              &nbsp;
            </div>
			
			
			
			 <div class="one_third first">
              <label for="">Lat/ Long</label>   



<input  name="point"  type="text" size="22"   value='<?php
				    
				    	mysql_query("SET NAMES'utf8'");
 $result= mysql_query ("select * from  species_bank where id= '$table' and uploaded_by= '$user'");

while($row=mysql_fetch_array($result))
{
echo $row[4];
}
?>
' >


</div>
    


<div class="one_third">
              <label for="">Authority<span>*</span></label>   
 
<input  name="authority"  type="text" size="22"  value='<?php
				    
				    	mysql_query("SET NAMES'utf8'");
 $result= mysql_query ("select * from  species_bank where id= '$table' and uploaded_by= '$user'");

while($row=mysql_fetch_array($result))
{
echo $row[5];
}
?>
' >
  
	   </div>
             <div class="one_third">              
			 <label for="">Accession No</label> 
<input  name="access"  type="text" size="22" value='<?php
				    
				    	mysql_query("SET NAMES'utf8'");
 $result= mysql_query ("select * from  species_bank where id= '$table' and uploaded_by= '$user'");

while($row=mysql_fetch_array($result))
{
echo $row[6];
}
?>
' >
         

			  </div>
           
            <div class="block clear">
              &nbsp;
            </div>
			
			
			
			
			
		
			
			<div class="one_third first">
              <label for="">Elevation</label>   
 
<input  name="ele"  type="text" size="22" value='<?php
				    
				    	mysql_query("SET NAMES'utf8'");
 $result= mysql_query ("select * from  species_bank where id= '$table' and uploaded_by= '$user'");

while($row=mysql_fetch_array($result))
{
echo $row[7];
}
?>
' > 
  
	   </div>
			
			 <div class="one_third">
            
              
              <label for="url">.<input  name="id3"  type="hidden" size="22"  value='<?php
				    
				    	mysql_query("SET NAMES'utf8'");
 $result= mysql_query ("select * from  species_bank where id= '$table' and uploaded_by= '$user'");

while($row=mysql_fetch_array($result))
{
echo $row[0];
}
?>
'></label>
               <input name="submit" type="submit" value="Update" onclick="return confirm('Are you sure to update !!')">
                </div>   

<div class="block clear">
              &nbsp;
            </div>
			
            
                      </form>




          
        </div>
 

      </div>


 
<div class="wrapper row5">
</div>




<script language="JavaScript" type="text/javascript"
    xml:space="preserve">//<![CDATA[
//You should create the validator only after the definition of the HTML form
  var frmvalidator  = new Validator("myform");
  
        
        frmvalidator.addValidation("cat","req","Select Category");
   frmvalidator.addValidation("name","req","Enter Species Name");
  frmvalidator.addValidation("loc","req","Enter Species Locality"); 
frmvalidator.addValidation("authority","req","Enter Authority");

frmvalidator.addValidation("file","req","Select file to upload");

      
//]]></script>


</body>
</html>
