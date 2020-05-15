<?php
	session_start();
	if(!isset($_SESSION['ID']) || (trim($_SESSION['NAME']) == ''))
		{
		 echo "<script>alert('Session Expire Login again')</script>";
  echo "<script>location.href='index.php'</script>";
		exit();
	}
?>