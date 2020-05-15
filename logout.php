<?php
	session_start();
	unset($_SESSION['ID']);
	unset($_SESSION['NAME']);
	 echo "<script>alert('Successfully Logged Out')</script>";
	 echo "<script>location.href='index.php'</script>";
?>