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
	$result = mysql_query("INSERT INTO `cesc`.`company` (`soft_delete`, `student_ref`, `status`, `name`, `tel`, `tel_company`, `mobile`, `join_date`, `donate`, `transaction_ref`, `officer`, `email`, `contact_date`, `company_details`, `booth`, `seminar`, `logo`, `address`, `note`, `taxpayer`, `fullname_document`, `fullname_web`) VALUES ('{$_POST['soft_delete']}', '{$_POST['student_ref']}', '{$_POST['status']}', '{$_POST['name']}', '{$_POST['tel']}', '{$_POST['tel_company']}', '{$_POST['mobile']}', '{$_POST['join_date']}', '{$_POST['donate']}', '{$_POST['transaction_ref']}', '{$_POST['officer']}', '{$_POST['email']}', '{$_POST['contact_date']}', '{$_POST['booth_date']}', '{$_POST['booth']}', '{$_POST['seminar']}', '{$_POST['logo']}', '{$_POST['address']}', '{$_POST['note']}', '{$_POST['taxpayer']}', '{$_POST['fullname_document']}', '{$_POST['fullname_web']}');");
	if (!$result) {
	    echo "DB Error, could not query the database\n";
	    echo 'MySQL Error: ' . mysql_error();
	    exit;
	}


	header('Location: backend.php');
?>
