<?php


$table=$_REQUEST['country'];




$database="go9cabsi_go9cabs-4-5-17";
$mydb="go9cabsi_go9cabs-4-5-17";
mysql_connect("localhost","go9cabsi_go9cab1","hv(]{NbVrqA2");
mysql_select_db("go9cabsi_go9cabs-4-5-17");
mysql_query("SET NAMES 'utf-8' ");
$result=mysql_query("select * from $table");

$out = '';
 
// Get all fields names in table "mytablename" in database "mydb".


$fields = mysql_list_fields($mydb,$table);

 
// Count the table fields and put the value into $columns.


$columns = mysql_num_fields($fields);

 
// Put the name of all fields to $out.


for ($i = 0; $i < $columns; $i++) {
$l=mysql_field_name($fields, $i);
$out .= '"'.$l.'",';
}
$out .="\n";

 
// Add all values in the table to $out.

while ($l = mysql_fetch_array($result)) {
for ($i = 0; $i < $columns; $i++) {
$out .='"'.$l["$i"].'",';
}
$out .="\n";
}
 
// Open file export.csv.
$f = fopen ("export.csv",'w');
 
// Put all values from $out to export.csv.
fputs($f, $out);
fclose($f);
 
//header('Content-type: application/xls');
header("Content-Type:application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
header("Content-Disposition: attachment; filename=$table.csv");
readfile("export.csv");
?>

