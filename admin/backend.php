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
	$result = mysql_query('SELECT * FROM `company`', $connection);
	
	if (!$result) {
	    echo "DB Error, could not query the database\n";
	    echo 'MySQL Error: ' . mysql_error();
	    exit;
	}

// while ($row = mysql_fetch_assoc($result)) {
//     echo $row['name'];
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CE Smart Career - Backend</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	<!-- Custom styles for this template -->
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
			<div class="alert alert-info" role="alert">
		 		<a href="https://www.facebook.com/mrnonz" target="_blank" class="alert-link">แจ้งปัญหาการใช้งาน https://www.facebook.com/MrNonz</a>
			</div>
				<a href="./addcompany.php" target="_blank"><button type="button" class="btn btn-primary center-block">เพิ่มบริษัท</button></a>
				<a href="./logout.php" target="_blank"><button type="button" class="btn btn-danger center-block">ออกจากระบบ</button></a>
				<div class="table-responsive">
					<table class="table table-hover">
					<tr>
						<th>ID</th>
					    <th>ชื่อบริษัท</th>
					    <th>ชื่อผู้ประสานงาน</th>
					    <th>อีเมล์</th>
					    <th>แก้ไข</th>
					</tr>
					<?php 
						while ($row = mysql_fetch_assoc($result)) {
							if ($row['soft_delete'] == 1) {
								continue;
							}
							echo "<tr>";
							echo "<td>".$row['ID']."</td>";
     						echo "<td>".$row['name']."</td>";
     						echo "<td>".$row['officer']."</td>";
     						echo "<td>".$row['email']."</td>";
     						echo "<td>
     							<div class='btn-group inline pull-left' data-toggle='buttons-checkbox'> 
      								<a href='./editcompany.php?id=".$row['ID']."' target='_blank' class='btn btn-warning center-block'>แก้ไข</a>
      								<a href='./delete.php?id=".$row['ID']."' class='btn btn-danger center-block'>ลบ</a>
    							</div> 
    							</td>";
     						echo "</tr>";
						}
					?>

					</table>
				</div>
			</div>
		</div>
	</div>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>