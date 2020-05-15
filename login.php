<?php
	session_start();
require ("connect.php");
?>
<?php
		$username = $_POST['email'];			
		$pass = $_POST['pass'];
	
if (empty($username ) || empty($pass) )

{
  echo "<script>alert('Empty fields not allowed')</script>";
  echo "<script>location.href='index.php'</script>";
  die();
}

	
		$result = mysql_query("SELECT * FROM user WHERE username='$username' AND password='$pass' and status='0'") ;
				
			if(mysql_num_rows($result) > 0) {
		session_regenerate_id();
			$member = mysql_fetch_assoc($result);
			$_SESSION['ID'] = $member['id'];
			$_SESSION['NAME'] = $member['username'];
			session_write_close();
$type= $member['User_type'];

echo "<script>alert('Welcome to our Network')</script>";

//if ($username == "info@careersupport24.com" || $username == "operator")
	
if ($type == "Admin" )
{

echo "<script>setTimeout(\"location.href = 'main.php';\",100);</script>";

}
else if ($type == "Volunteer" )
{

echo "<script>setTimeout(\"location.href = 'Home_job_provider.php';\",100);</script>";

}
else
	

{
echo "<script>setTimeout(\"location.href = 'Home_job_seeker.php';\",100);</script>";

}
			
				}
				else
				{
			  echo "<script>alert('Incorrect Login Details. Please Check or Enter Correctly')</script>";


echo "<script>setTimeout(\"location.href = 'index.php';\",100);</script>";




		
			}
?>