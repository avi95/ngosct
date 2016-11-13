<?php
if(isset($_POST["submit"])){
$servername = "us-cdbr-azure-west-c.cloudapp.net";
$username = "b8e78756f0c692";
$password = "a11b2002";
$dbname = "database_cy";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO CS_DOORSTEP (name, phone, city, area, street, problem)
VALUES ('".$_POST["name"]."','".$_POST["phone"]."','".$_POST["city"]."','".$_POST["area"]."','".$_POST["street"]."','".$_POST["problem"]."')";

if ($conn->query($sql) === TRUE) {
echo "<script type= 'text/javascript'>alert('New record created successfully');</script>";
} else {
echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
}

$conn->close();
}

$name = $_POST['name'];
$phone = $_POST['phone'];
$area = $_POST['area'];
$street = $_POST['street'];
$city = $_POST['city'];



//Validate first
if(empty($name)||empty($phone)||empty($city)||empty($area)||empty($street)) 
{
    echo "These all fields are mandatory";
    exit;
}

if(IsInjected($password))
{
    echo "Bad email value!";
    exit;
}

$email_from = 'aviral.aggarwal03@gmail.com';//<== update the email address
$email_subject = "User requested for Door Step Services";
$email_body = "You have received a new message from the user $name.
                Phone number:-$phone
                Address:- $street $area $city\n".
    
    
$to = "aviral.aggarwal03@gmail.com" ;//<== update the email address






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