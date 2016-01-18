<?php
	session_start();
	if ($_POST['username'] == 'admin' && $_POST['password'] == '!To5s0')  {
		$_SESSION['username'] = 'admin'; // Initializing Session
		header("location: backend.php"); // Redirecting To Other Page
	} else {
		header("location: admin.php"); // Redirecting To Other Page
	}
?>