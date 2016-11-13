<?php
  $nameErr = "";
  $emailErr = "";
  $name = "";
  $email = "";
  if(isset($_POST['submit'])) 
  {
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
     if(empty($_POST["name"]))
    {
      $nameErr = "Name is required";
    }
    else
    {
      $name = test_input($_POST["name"]);
	 if(!preg_match("/^[a-zA-Z]*$/",$name))
	 {
	   $nameErr = "Only letters and white space allowed";
	  }
    }
   if(empty($_POST["email"]))
   {
    $emailErr = "Email is required";
   }
   else
   {
    $email = test_input($_POST["email"]);
    if(!filter_var($email,FILTER_VALIDATE_EMAIL))
    {
      $emailErr = "Invalid email format";
    }
   }
  }
//Making a connection
  $servername = "localhost";
  $username = "mydata1995";
  $password = "@qNGbnI{+lh*";
  $dbname = "myloli";

// Create connection
  $conn = new mysqli($servername, $username,$password,$dbname);
// Check connection
  if ($conn->connect_error) 
  {
    die("Connection failed: " . $conn->connect_error);
  }
//Inserting Data
  $sql = "INSERT INTO Sub_scribe (Name, Email)
  VALUES ('$name','$email')";

  if ($conn->query($sql) === TRUE)
   {
     echo "Table SUB created successfully";
   }
  else 
   {
    echo "Error creating table: " . $conn->error;
   }
}
function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>