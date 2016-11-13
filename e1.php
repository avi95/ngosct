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



$rsid = $_POST['rsid'];
$password = $_POST['password'];


//Validate first
if(empty($rsid)||empty($password)) 
{
    echo "Name and email are mandatory!";
    exit;
}

if(IsInjected($password))
{
    echo "Bad email value!";
    exit;
}

$email_from = 'aviral.aggarwal03@gmail.com';//<== update the email address
$email_subject = "New Form submission";
$email_body = "You have received a new message from the user $rsid.\n".
    
    
$to = "aviral.aggarwal03@gmail.com";//<== update the email address

$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
//Send the email!
mail($to,$email_subject,$email_body,$headers);
//done. redirect to thank-you page.
header('Location: thank-you.html');


// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}
   
?> 