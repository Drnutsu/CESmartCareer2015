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
	<link rel="stylesheet" href="./admin.css">	
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
						<label>ผู้ติดต่อ</label>
						  <div><input class="form-control" name="student_ref" /></div>
						<label>สถานะ</label>
						  <div><input class="form-control" name="status" /></div>
						<label>ชื่อบริษัท </label>
						  <div><input class="form-control" name="name" /></div>
						<label>เบอร์โทร</label>
						  <div><input class="form-control" name="tel" /></div>
						<label>เบอร์บริษัท</label>
						  <div><input class="form-control" name="tel_company" /></div>
						<label>เบอร์มอืถือ</label>
						  <div><input class="form-control" name="mobile" /></div>
						<label>วันเวลาเข้าร่วม</label>
						  <div><input class="form-control" name="join_date" /></div>
						<label>บริจาคจำนวน</label>
						  <div><input class="form-control" name="donate" /></div>
						<label>หลักฐานการชำระ</label>
						  <div><input class="form-control" name="transaction_ref" /></div>
						<label>ชื่อผู้ประสานงาน บริษัท</label>
						  <div><input class="form-control" name="officer" /></div>
						<label>email</label>
						  <div><input class="form-control" name="email" /></div>
						<label>วันติดต่อ และ ส่งเอกสาร</label>
						  <div><input class="form-control" name="contact_date" /></div>
						<label>วันที่าจัดบูท</label>
						  <div><input class="form-control" name="company_details" /></div>
						<label>บูท</label>
						  <div><input class="form-control" name="booth" /></div>
						<label>สัมมนา</label>
						  <div><input class="form-control" name="seminar" /></div>
						<label>โลโก้</label>
						  <div><input class="form-control" name="logo" /></div>
						<label>ที่อยู่บริษัท</label>
						  <div><input class="form-control" name="address" /></div>
						<label>เพิ่มเติม</label>
						  <div><input class="form-control" name="note" /></div>
						<label>เลขที่เสียภาษี</label>
						  <div><input class="form-control" name="taxpayer" /></div>
						<label>ชื่อเต็มบริษัท(ใบเสร์จ เอกสาร)</label>
						  <div><input class="form-control" name="fullname_document" /></div>
						<label>ชื่อเต็มบริษัท(web-PR)</label>
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