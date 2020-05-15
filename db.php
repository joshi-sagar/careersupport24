<?php
require "authority.php";
	require "connect.php";
	
	$user=$_SESSION['NAME'];
	$id=$_SESSION['ID'];

	$city=$_SESSION['city'];
	$city_code=$_SESSION['city_code'];
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

      <div id="content" class="two_third first"> 

        <h1>Database Backup & Restore-</h1>
        &nbsp;&nbsp;<div id="comments">

<form action="db.php" enctype="multipart/form-data" method="POST" name="myform" id="myform">
          
            <div class="one_third first">
              <label for="">Time of Backup<span>*</span></label>   



<input type="date" name="p_date" id="datepicker" value="  <?php echo date('d-m-y/h-i-a'); ?> 
  " size="22"  disabled="disabled">


</div>
       

  
	   
             <div class="one_third">
              <label for="url">.</label>
               <input name="submit" type="submit" value="Backup" onclick="return confirm('Are you sure to backup !!')">
                </div>
           
            <div class="block clear">
              &nbsp;
            </div>
            
                      </form>




          
        </div>
 

      </div>


 
<div class="sidebar one_third"> 

        <h6>Features</h6>

        </div>
<div class="wrapper row5">
</div>


<?php
if(isset($_POST['submit'])) 
{



$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'go9cabsa';

function backup_tables($host,$user,$pass,$name,$tables = '*')
{

    $link = mysql_connect($host,$user,$pass);
    mysql_select_db($name,$link);
    mysql_query("SET NAMES 'utf8'");

    //get all of the tables
    if($tables == '*')
    {
        $tables = array();
        $result = mysql_query('SHOW TABLES');
        while($row = mysql_fetch_row($result))
        {
            $tables[] = $row[0];
        }
    }
    else
    {
        $tables = is_array($tables) ? $tables : explode(',',$tables);
    }
    $return='';
    //cycle through
    foreach($tables as $table)
    {
        $result = mysql_query('SELECT * FROM '.$table);
        $num_fields = mysql_num_fields($result);

        $return.= 'DROP TABLE '.$table.';';
        $row2 = mysql_fetch_row(mysql_query('SHOW CREATE TABLE '.$table));
        $return.= "\n\n".$row2[1].";\n\n";

        for ($i = 0; $i < $num_fields; $i++) 
        {
            while($row = mysql_fetch_row($result))
            {
                $return.= 'INSERT INTO '.$table.' VALUES(';
                for($j=0; $j<$num_fields; $j++) 
                {
                    $row[$j] = addslashes($row[$j]);
                    $row[$j] = str_replace("\n","\\n",$row[$j]);
                    if (isset($row[$j])) { $return.= '"'.$row[$j].'"' ; } else { $return.= '""'; }
                    if ($j<($num_fields-1)) { $return.= ','; }
                }
                $return.= ");\n";
            }
        }
        $return.="\n\n\n";
    }

$d=date('d-m-y_h-i-a');


    //save file
    $handle = fopen('db_backup/backup-'.date('d-m-y_h-i-a').'.sql','w+');


    $file = 'db_backup/backup-'.date('d-m-y_h-i-a').'.sql';


    fwrite($handle,$return);
    fclose($handle);



$result= mysql_query("insert into db_backup  (date, file )values
('$d','$file' )");
echo "<script>alert('Backup Successfully Added.')</script>";





}

backup_tables($dbhost,$dbuser,$dbpass,$dbname);


}


?>




</body>
</html>