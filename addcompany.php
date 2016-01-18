<?php 
	session_start();
	if (!isset($_SESSION['username'])) {
		header('Location: admin.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add Company</title>
</head>
<body>
	
</body>
</html>