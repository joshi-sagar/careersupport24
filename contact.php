

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

        <h1>Request help from Admin</h1>
        &nbsp;&nbsp;<div id="comments">

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" method="POST" name="myform" id="myform">
          
            
			
			
			 <div class="one_third first">
              
              <label for="">Difficulty Type</label>   
 
<select name="phone" >
							<option></option>
  <option>Visual_Disability</option>
  <option>Hearing_Disability</option>
  <option>Physical_Disability</option>
    <option>Mental_Health_Disability</option>
  <option>Others</option>
</select>
  
	   </div>
             <div class="one_third">              
			 <label for="">Detail<span>*</span></label> 
                <textarea name="message" id="" cols="25" rows="5"></textarea>
         

			  </div>
           
            
			
			
			
		
			
			
			
	 <div class="one_third">
              <label for="url">.</label>
               <input name="submit" type="submit" value="Submit" onclick="return confirm('Are you sure to send Help message!!')">
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
  


  
     frmvalidator.addValidation("message","req","Write some message");
       
//]]></script>

</body>
</html>


 <?php 


if(isset($_POST['submit'])) 
{

$phone = $_POST['phone'];
$msg = $_POST['message'];

$to= "uru.innovators@gmail.com, kandpalvineet1@gmail.com";

$subject= "Message from URU Job Portal Website";
$body = "Message By: $user \n Contact No: $phone \n  Message: $msg  \n";

	
	mail($to, $subject, $body);


	  echo "<script>alert('Message Send Successfully')</script>";



   }

?>


