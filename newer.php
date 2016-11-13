
<html>
<body>
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
	
	<br>
	<br>
	<br>
	<br>
	<br>

	<div class="container">
	
<form role="form">
    <div class="form-group">
      <label for="number">Name</label>
      <input type="name" name="name" class="form-control"  placeholder="Enter your full Name">
    </div>
    
    
    <button type="submit" name="submit" class="btn btn-default">Submit</button>
  </form>
<?php
if(isset($_POST["submit"])){
$servername = "us-cdbr-azure-west-c.cloudapp.net";
$username = "b8e78756f0c692";
$password = "a11b2002";
$dbname = "database_cy";

$name = $_POST['name'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT  name FROM GRADES ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo  " - Name: " . $row["name"]. " " .  "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
}
?>

</div>
</body>
</html>