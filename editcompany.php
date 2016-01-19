<?php

	session_start();
	if (!isset($_SESSION['username'])) {
		header('Location: admin.php');
	}

	require('connectDB.php');
	if (!$connection) {
    	die('Not connected : ' . mysql_error());
	}
	$id = $_GET['id'];
	mysql_set_charset('utf8',$connection);
	$db = mysql_select_db('cesc', $connection);
	$result = mysql_query('SELECT * FROM `company` WHERE `ID` = '.$id.' LIMIT 1', $connection);
	
	if (!$result) {
	    echo "DB Error, could not query the database\n";
	    echo 'MySQL Error: ' . mysql_error();
	    exit;
	}

	$row =  mysql_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Add Company</title>
	<meta charset="UTF-8">
	<title>แก้ไขบริษัท <? echo $row['name'] ?></title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">	
</head>
<body>
	<div class="container">
		<div class="col-sm-10 col-sm-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">
					แก้ไขบริษัท <? echo $row['name'] ?>
				</div>
				<div class="panel-body">
					<form class="form" method="POST" action="edit.php">
						<input type="hidden" value="<? echo $row['ID'] ?>" name="id">
						<label>student_ref</label>
						  <div><input class="form-control" name="student_ref" value="<? echo $row['student_ref'] ?>" /></div>
						<label>status</label>
						  <div><input class="form-control" name="status" value="<? echo $row['status'] ?>" /></div>
						<label>name</label>
						  <div><input class="form-control" name="name" value="<? echo $row['name'] ?>" /></div>
						<label>tel</label>
						  <div><input class="form-control" name="tel" value="<? echo $row['tel'] ?>" /></div>
						<label>tel_company</label>
						  <div><input class="form-control" name="tel_company" value="<? echo $row['tel_company'] ?>" /></div>
						<label>mobile</label>
						  <div><input class="form-control" name="mobile" value="<? echo $row['mobile'] ?>" /></div>
						<label>join_date</label>
						  <div><input class="form-control" name="join_date" value="<? echo $row['join_date'] ?>" /></div>
						<label>donate</label>
						  <div><input class="form-control" name="donate" value="<? echo $row['donate'] ?>" /></div>
						<label>transaction_ref</label>
						  <div><input class="form-control" name="transaction_ref" value="<? echo $row['transaction_ref'] ?>" /></div>
						<label>officer</label>
						  <div><input class="form-control" name="officer" value="<? echo $row['officer'] ?>" /></div>
						<label>email</label>
						  <div><input class="form-control" name="email" value="<? echo $row['email'] ?>" /></div>
						<label>contact_date</label>
						  <div><input class="form-control" name="contact_date" value="<? echo $row['contact_date'] ?>" /></div>
						<label>booth_date</label>
						  <div><input class="form-control" name="booth_date" value="<? echo $row['booth_date'] ?>" /></div>
						<label>booth</label>
						  <div><input class="form-control" name="booth" value="<? echo $row['booth'] ?>" /></div>
						<label>seminar</label>
						  <div><input class="form-control" name="seminar" value="<? echo $row['seminar'] ?>" /></div>
						<label>logo</label>
						  <div><input class="form-control" name="logo" value="<? echo $row['logo'] ?>" /></div>
						<label>address</label>
						  <div><input class="form-control" name="address" value="<? echo $row['address'] ?>" /></div>
						<label>note</label>
						  <div><input class="form-control" name="note" value="<? echo $row['note'] ?>" /></div>
						<label>taxpayer</label>
						  <div><input class="form-control" name="taxpayer" value="<? echo $row['taxpayer'] ?>" /></div>
						<label>fullname_document</label>
						  <div><input class="form-control" name="fullname_document" value="<? echo $row['fullname_document'] ?>" /></div>
						<label>fullname_web</label>
						  <div><input class="form-control" name="fullname_web" value="<? echo $row['fullname_web'] ?>" /></div>
						<br />
						<div class="text-center"> 
							<div class="col-md-4 col-md-offset-4"><input class="btn btn-warning btn-block" type="submit" value="แก้ไข" /></div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>