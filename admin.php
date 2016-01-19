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
    <link href="./assets/signin.css" rel="stylesheet">
</head>
<body>
	<div class="container">

	    <form class="form-signin" action="./login.php" method="POST">
	    	<h2 class="form-signin-heading">Please sign in</h2>
	        <label for="inputUsername" class="sr-only">Username</label>
	        <input type="text" name="username" class="form-control" placeholder="username" required autofocus>
	        <label for="inputPassword" class="sr-only">Password</label>
	        <input type="password" name="password" class="form-control" placeholder="Password" required>
	        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
	    </form>
	    

    </div> <!-- /container -->

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>