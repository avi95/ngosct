<html>
	<head>
	        <meta name="viewport" content="width=device-width, initial-scale=1">
	       <link href="login2.css" rel="stylesheet" type="text/css">
		<title>Login</title>
	</head>	
	
	
	<style>
	body
			{
				background-color:;
			}
	</style>		
	
	<body>
		<div class="container left">
		<h1>Cybernetics Re-Solution Co.</h1>
		<h3>Login Page</h3>
		<section>
			
		
		
		
		
 <?php
if (!isset($_POST['submit'])){
?>
<!-- The HTML login form -->
	<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
		Username: <input type="text" name="username" /><br />
		Password: <input type="password" name="password" /><br />
 
		<input type="submit" name="submit" value="Login" />
	</form>
<?php
} else {
	require_once("db_const.php");
	$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	# check connection
	if ($mysqli->connect_errno) {
		echo "<p>MySQL error no {$mysqli->connect_errno} : {$mysqli->connect_error}</p>";
		exit();
	}
 
	$username = $_POST['username'];
	$password = $_POST['password'];
 
	$sql = "SELECT * from users WHERE username LIKE '{$username}' AND password LIKE '{$password}' LIMIT 1";
	$result = $mysqli->query($sql);
	if (!$result->num_rows == 1) {
		echo "<p>Invalid username/password combination</p>";
	} else {
		echo "<p>Logged in successfully</p>";
		// do stuffs
	}
}
?>		
			
			
			
			
			
			
			
			
			
			
			
			
			
			
		</section>
		</div>
		<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	</body>
</html>