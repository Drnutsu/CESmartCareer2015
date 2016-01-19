<?php 
	session_start();
	if (!isset($_SESSION['username'])) {
		header('Location: admin.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Add Company</title>
	<meta charset="UTF-8">
	<title>CE Smart Career - Backend</title>
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
					เพิ่มบริษัท
				</div>
				<div class="panel-body">
					<form class="form" method="post" action="add.php">
						<label>student_ref</label>
						  <div><input class="form-control" name="student_ref" /></div>
						<label>status</label>
						  <div><input class="form-control" name="status" /></div>
						<label>name</label>
						  <div><input class="form-control" name="name" /></div>
						<label>tel</label>
						  <div><input class="form-control" name="tel" /></div>
						<label>tel_company</label>
						  <div><input class="form-control" name="tel_company" /></div>
						<label>mobile</label>
						  <div><input class="form-control" name="mobile" /></div>
						<label>join_date</label>
						  <div><input class="form-control" name="join_date" /></div>
						<label>donate</label>
						  <div><input class="form-control" name="donate" /></div>
						<label>transaction_ref</label>
						  <div><input class="form-control" name="transaction_ref" /></div>
						<label>officer</label>
						  <div><input class="form-control" name="officer" /></div>
						<label>email</label>
						  <div><input class="form-control" name="email" /></div>
						<label>contact_date</label>
						  <div><input class="form-control" name="contact_date" /></div>
						<label>booth_date</label>
						  <div><input class="form-control" name="booth_date" /></div>
						<label>booth</label>
						  <div><input class="form-control" name="booth" /></div>
						<label>seminar</label>
						  <div><input class="form-control" name="seminar" /></div>
						<label>logo</label>
						  <div><input class="form-control" name="logo" /></div>
						<label>address</label>
						  <div><input class="form-control" name="address" /></div>
						<label>note</label>
						  <div><input class="form-control" name="note" /></div>
						<label>taxpayer</label>
						  <div><input class="form-control" name="taxpayer" /></div>
						<label>fullname_document</label>
						  <div><input class="form-control" name="fullname_document" /></div>
						<label>fullname_web</label>
						  <div><input class="form-control" name="fullname_web" /></div>
						<br />
						<div class="text-center"> 
							<div class="col-md-4 col-md-offset-4"><input class="btn btn-success btn-block" type="submit"/></div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>