

<?php 

$country=$_GET['country'];
require "connect.php";


				    	mysql_query("SET NAMES'utf8'");


$query="SELECT * FROM district WHERE d_code='$country'";
$result=mysql_query($query);

?>
<select name="state" class="ed" style="width: 125px">
<?php while($row=mysql_fetch_array($result)) { ?>
<option value="<?php echo $row['code']?>"><?php echo $row['code']?></option>
<?php } ?>
</select>
