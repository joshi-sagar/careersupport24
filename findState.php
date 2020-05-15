

<?php 

$country=$_GET['country'];
require "connect.php";


				    	mysql_query("SET NAMES'utf8'");


$query="SELECT * FROM pub_area WHERE pub_cat='$country'";
$result=mysql_query($query);

?>
<select name="state" class="ed" style="width: 125px">
<?php while($row=mysql_fetch_array($result)) { ?>
<option value="<?php echo $row['pub_area']?>"><?php echo $row['pub_area']?></option>
<?php } ?>
</select>
