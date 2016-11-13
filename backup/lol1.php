<html>
<head>
<title>insert data in database using mysqli</title>

</head>
<body>

<div id="main">
<hr/>
<form action="" method="post">
<label>Teamviewer ID</label>
<input type="text" name="rsid" id="name" required="required" placeholder="Please Enter Name"/><br /><br />
<label>Password</label>
<input type="text" name="password" id="name" required="required" placeholder="Obama@gmail.com"/><br/><br />
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
</body>
</html>

