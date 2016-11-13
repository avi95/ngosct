<html>
	<head>
		<title>Signup</title>
		<style>
		</style>
		
	<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	</head>	
	</head>
	
	<style>
	body
			{
				background-color:#E6E6FA;
			}
			
	.jumbotron
		{
			background-image:url('2.jpg');
			color:white;
		}
		
			
	</style>		
	
	<body>
	
<!.. Jumbotron ..>
		<div class="jumbotron">
			<div class="container text-center fixed-top">
				<h1>Sorry! This web page is under construction</h1>
				<!--<p><b>"Registration Page"</b></p>-->
			</div>	<!.. End Container ..>	
		</div>	<!.. End Jumbotron ..>
		
		
		<!--<section>
			<div class="well">
				<div class="container text-center">
		<div class="col-lg-8">-->
					
	<!-- The HTML registration form -->
	<!--<form role="form" action="<?=$_SERVER['PHP_SELF']?>" method="post">
	<div class="form-group">
		<label for="username">Username:</label>
			<input type="text" name="username" class="form-control"/><br />
		<label for="password">Password:</label>
			<input type="password" name="password" class="form-control" id="pwd"/><br />
		<label for="first_name"><First name:</label>
			<input type="text" name="first_name" /><br />
		<label for="last_name">Last name:</label> 
			<input type="text" name="last_name" /><br />
		<label for="email">Email:</label> 
			<input type="type" name="email" /><br />
 	</div>
		<input type="submit" name="submit" value="Register" />
	</form>-->
	</div>
		</div>
		
		</section>
		</div>
		<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

		<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-login-button" data-max-rows="1" data-size="medium" data-show-faces="false" data-auto-logout-link="false"></div>
	</body>
<?php
require_once("db_const.php");
if (!isset($_POST['submit'])) {} else {
## connect mysql server
	$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	# check connection
	if ($mysqli->connect_errno) {
		echo "<p>MySQL error no {$mysqli->connect_errno} : {$mysqli->connect_error}</p>";
		exit();
	}
## query database
	# prepare data for insertion
	$username	= $_POST['username'];
	$password	= $_POST['password'];
	$first_name	= $_POST['first_name'];
	$last_name	= $_POST['last_name'];
	$email		= $_POST['email'];
 
	# check if username and email exist else insert
	$exists = 0;
	$result = $mysqli->query("SELECT username from users WHERE username = '{$username}' LIMIT 1");
	if ($result->num_rows == 1) {
		$exists = 1;
		$result = $mysqli->query("SELECT email from users WHERE email = '{$email}' LIMIT 1");
		if ($result->num_rows == 1) $exists = 2;	
	} else {
		$result = $mysqli->query("SELECT email from users WHERE email = '{$email}' LIMIT 1");
		if ($result->num_rows == 1) $exists = 3;
	}
 
	if ($exists == 1) echo "<p>Username already exists!</p>";
	else if ($exists == 2) echo "<p>Username and Email already exists!</p>";
	else if ($exists == 3) echo "<p>Email already exists!</p>";
	else {
		# insert data into mysql database
		$sql = "INSERT  INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`, `email`) 
				VALUES (NULL, '{$username}', '{$password}', '{$first_name}', '{$last_name}', '{$email}')";
 
		if ($mysqli->query($sql)) {
			//echo "New Record has id ".$mysqli->insert_id;
			echo "<p>Registred successfully!</p>";
		} else {
			echo "<p>MySQL error no {$mysqli->errno} : {$mysqli->error}</p>";
			exit();
		}
	}
}
?>		
						
		
</html>