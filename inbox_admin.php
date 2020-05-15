

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

        <h1>Messages Inbox</h1>
        <div id="comments">





          
        </div>
 

      </div>


 
<div class="wrapper row5">
</div>


<?php





$result= mysql_query ("select * from message where reciver= '$user' order by id desc");

echo "<br>";

        echo"<div class='scrollable'>";
echo "<table border=5 >";

echo "<tr><th>Sender</th>     <th>Message</th><th>Post Date</th></tr>";

while($row=mysql_fetch_array($result))
{

   echo "<tr><td> <a href=member_profile.php?id2=$row[2]>$row[2]</a></td><td>$row[4]</td><td>$row[1]</td></tr>" ;

	}

?>




</body>



</html>
