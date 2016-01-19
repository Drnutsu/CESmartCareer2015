<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		body {
			background-color: black;
			color: #2ecc71;
		}
	</style>
</head>
<body>
	<?php
		session_start();
		if (!isset($_SESSION['username'])) {
			header('Location: ../admin/admin.php');
		}

		require('../admin/connectDB.php');
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

		$json_arr['companyList'] = array();
		// array for store description apart from name lists forming.
		$description_arr = array();

		while ($row = mysql_fetch_assoc($result)) {
			// push name array
			$name = $row['name'];
			array_push($json_arr['companyList'], $row['name']);
			// push description array
			$description_arr[$name] =  $row['address'];
		}

		$output = json_encode($json_arr);

		// write json file
		file_put_contents (	"../2016/lists.json", $output);

		// iterate to make companies dir.
		foreach ($json_arr['companyList'] as $company) {
			echo "check {$company} <br />";
			if(!file_exists($company)){
				mkdir("../2016/".$company, 0777);
				echo "dir {$company} successful created <br />";
			}else{
				echo "dir {$company} already existed <br />";
			}

		}

		// create description.html inside each companies folder
		foreach ($json_arr['companyList'] as $company) {
			echo "create description for {$company} <br />";
			echo '<p>'.$description_arr[$company].'</p>';
			// TODO: write companies discription here
			file_put_contents("../2016/{$company}/description.html", '<p>'.$description_arr[$company].'</p>');
		}

		// showing error
		ini_set('display_errors', 1);
		ini_set('display_startup_errors', 1);
		error_reporting(E_ALL); 
	?>
</body>
</html>
