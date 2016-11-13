<html>
	<head>
	        <meta name="viewport" content="width=device-width, initial-scale=1">
	         <meta name="theme-color" content="orange">
	        <meta name="msapplication-navbutton-color" content="yellow">
                <meta name="apple-mobile-web-app-status-bar-style" content="yellow">
		<title>Remotesupport</title>
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
	</style>		
	
	<body>
		<div class="container left">
		<h1>Cybernetics Re-Solution Co.</h1>
		<h3>"Remote Support Servive"</h3>
<h5>We have also introduced a Remote Support Servive by which we can help you by remotely accesing your PCs and diagosing your problems. This service 
    is intended to help people whose problems are not solved by searching their solution in our available database and even with chatting with 
	our agents.<br>
	The person should have a good internet connection to use this service.</h5>
	
	
	<h5>The person should have teamviewer installed on their PCs.</h5>
	Download link:-<a href="http://filehippo.com/download_teamviewer/">Teamviewer</a><br><br>
	
	<h5>After installing teamviewer,the window will open like this:-</h5><br><br>
	<img src="teamviewer.png" alt="Mountain View"><br><br>

	 <h4>Then you have to paste your ID and password in the fields given below:-   (You can chat with our online agent side by side if you face any problem)<br><br></h4>
	 
	 <div id="main">
<hr/>
<form action="" method="post">
<label>Teamviewer ID</label>
<input type="text" name="rsid" id="name" required="required" placeholder="Please Enter Name"/><br /><br />
<label>Password</label>
<input type="password" name="password" id="password" required="required" placeholder="********"/><br/><br />
<input type="submit" value=" Submit " name="submit"/><br />
</form>
</div>



<?php
if(isset($_POST["submit"])){
$servername = "localhost";
$username = "mydata1995";
$password = "@qNGbnI{+lh*";
$dbname = "myloli";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO RSS (RSID, PASSWORD)
VALUES ('".$_POST["rsid"]."','".$_POST["password"]."')";

if ($conn->query($sql) === TRUE) {
echo "<script type= 'text/javascript'>alert('New record created successfully');</script>";
} else {
echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
}

$conn->close();
}
?>

<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


	</body>
</html>