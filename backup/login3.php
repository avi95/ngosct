<html>
	<head>
	        <meta name="viewport" content="width=device-width, initial-scale=1">
	        <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
                <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
                <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
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

     <div data-role="main" class="ui-content">
    <a href="#myPopup" data-rel="popup" class="ui-btn ui-btn-inline">Login</a>

    <div data-role="popup" id="myPopup" class="ui-content" style="min-width:250px;">
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <div>

	
		Username: <input type="text" name="username" /><br />
		Password: <input type="password" name="password" /><br />
 
		<input type="submit" name="submit" value="Login" />
	 </div>
      </form>
    </div>
  </div>
	
	
	
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
		echo "<script type= 'text/javascript'>alert('Logged  successfully');</script>";
		
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