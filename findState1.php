

<?php 

$countryId1=$_GET['countryId1'];
require "connect.php";


				    	mysql_query("SET NAMES'utf8'");


$query="SELECT * FROM departments WHERE vehicle='$countryId1'";
$result=mysql_query($query);


?>
<input type="text" name="state1" class="ed" style="width: 125px">
<?php while($row=mysql_fetch_array($result)) { ?>
<input value="<?php echo $row['driver_name']?>"/><?php echo $row['driver_name']?>
</input><?php } ?>