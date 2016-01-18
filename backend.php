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
				<div class="table-responsive">
					<table class="table table-hover">
					  <tr>
					    <td>Jill</td>
					    <td>Smith</td> 
					    <td>50</td>
					  </tr>
					  <tr>
					    <td>Jill</td>
					    <td>Smith</td> 
					    <td>50</td>
					  </tr>
					  <tr>
					    <td>Jill</td>
					    <td>Smith</td> 
					    <td>50</td>
					  </tr>
					</table>
				</div>
			</div>
		</div>
	</div>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>