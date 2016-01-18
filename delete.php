<?php 
	session_start();
	if (!isset($_SESSION['username'])) {
		header('Location: admin.php');
	}

	require('connectDB.php');
	if (!$connection) {
    	die('Not connected : ' . mysql_error());
	}
	mysql_set_charset('utf8',$connection);
	$db = mysql_select_db('cesc', $connection);
	$result = mysql_query('UPDATE `cesc`.`company` SET `soft_delete` = 1 WHERE `company`.`ID` = '.$_GET['id'].';', $connection);
	
	if (!$result) {
	    echo "DB Error, could not query the database\n";
	    echo 'MySQL Error: ' . mysql_error();
	    exit;
	}

	header('Location: backend.php');
?>
