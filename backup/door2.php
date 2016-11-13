<html>
	<head>
	        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Door Step Servive</title>
		<style>
		</style>
		
	<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
		<style>
      #map {
        width: 1200px;
        height: 600px;
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
      function initialize() {
        var mapCanvas = document.getElementById('map');
        var mapOptions = {
          center: new google.maps.LatLng(22,77),
          zoom: 5,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions)
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
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
		<h3>"Door Step Service"</h3>
<h5>Dear customers,we also provide door step service. Door step services are exclusively for those customers whose problems are not actually solved by any of the problem 
solving modes in our website ,or if they have any hardware related issue.You must have a account in our website to request grant for doorstep service.!!!<br><br>
Door step servive will cost you 250Rs., if your problem will be solved.Our agents will take up to maximum of 12 hours of time after the request is granted.</h5><br>
<h5>Currently,our services are available only to selected cities.You can dowload the list from below.<br><h5><br>

<div id="map"></div>

<a href="cities.docx" download="Cities">Cities.docx</a>


<?php
// define variables and set to empty values
$nameErr = $addressErr = $phonenoErr = $passwordErr = "";
$name = $address = $phoneno = $email = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["name"])) {
     $nameErr = "Name is required";
   } else
    {
     $name = test_input($_POST["name"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
     {
       $nameErr = "Only letters and white space allowed";
     }
   }
  
   
    
   if (empty($_POST["name"])) 
   {
     $nameErr = "Name is required";
   } else
    {
     $name = test_input($_POST["name"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
     {
       $nameErr = "Only letters and white space allowed";
     }
   }

   if (empty($_POST["name"])) {
     $nameErr = "Name is required";
   } else {
     $name = test_input($_POST["name"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
       $nameErr = "Only letters and white space allowed";
     }
   }


   if (empty($_POST["email"])) {
     $emailErr = "Email is required";
   } else 
   {
     $email = test_input($_POST["email"]);
     // check if e-mail address is well-formed
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
     {
       $emailErr = "Invalid email format";
     }
   }
   
   
   if (empty($_POST["name"])) {
     $nameErr = "Name is required";
   } else {
     $name = test_input($_POST["name"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
       $nameErr = "Only letters and white space allowed";
     }
   }
  
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>
<div id="main">
<hr/>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
<label>Name</label>
<input type="text" name="name" id="name" required="required" placeholder="Please Enter Name" value="<?php echo $name;?>" />
<span class="error">* <?php echo $nameErr;?></span>
<br /><br />
<label>Address</label>
<input type="text" name="address" id="address" required="required" placeholder="Please Enter your address"/><br /><br />
<label>Phone no</label>
<input type="text" name="phoneno" id="phone no" required="required" placeholder="Please Enter Your Phone No."/><br /><br />
<label>Email</label>
<input type="text" name="email" id="email" required="required" placeholder="Please Enter Your E-mail"/><br /><br />
<label>Password</label>
<input type="password" name="password" id="password" required="required" placeholder="**********"/><br/><br />
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

if ($conn->connect_error)  
 {
die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO DSTEP (NAME,ADDRESS,PHONENO,EMAIL,PASSWORD)
VALUES ('".$_POST["name"]."','".$_POST["address"]."','".$_POST["phoneno"]."','".$_POST["email"]."','".$_POST["password"]."')";

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


<script type="text/javascript">
  ( function() {
    if (window.CHITIKA === undefined) { window.CHITIKA = { 'units' : [] }; };
    var unit = {"calltype":"async[2]","publisher":"aviral95","width":468,"height":180,"sid":"Chitika Default"};
    var placement_id = window.CHITIKA.units.length;
    window.CHITIKA.units.push(unit);
    document.write('<div id="chitikaAdBlock-' + placement_id + '"></div>');
}());
</script>
<script type="text/javascript" src="//cdn.chitika.net/getads.js" async></script>


	</body>
</html>