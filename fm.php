<!DOCTYPE html>
<html>
<head>
<title>
  Door-Step Services
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
  
  <style>
  .btn {
    cursor: default;
    background-color: #FFF;
    border-radius: 4px;
    text-align: left;
}

.caret {
    position: absolute;
    right: 16px;
    top: 16px;
}

.btn-default:hover, .btn-default:focus, .btn-default:active, .btn-default.active, .open .dropdown-toggle.btn-default {
    background-color: #FFF;    
}

.btn-group.open .dropdown-toggle {
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset, 0 0 8px rgba(102, 175, 233, 0.6)
}

.btn-group {width: 100%}
.dropdown-menu {width: 100%;}
  
  
  </style>
  
  
</head>
<body background="dsp.jpg">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Cybernetics Resolution</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#"></a></li>
      <li><a href="#"></a></li>
      <li><a href="#"></a></li>
    </ul>
  </div>
</nav>


<div class="container">
  <h2>Please fill out the following details</h2>
  
<br>
<br>  
  
  <form action="e2.php" method="post" class="form-horizontal" role="form">
  
  
  
    
	
	
	 <div class="form-group">
      <label class="control-label col-sm-2" for="email">Name:</label>
      <div class="col-sm-10">
        <input type="name" name="name" class="form-control" id="name" placeholder="Enter your Name ">
      </div>
    </div>
	
	
	
	
	
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Phone no:</label>
      <div class="col-sm-10">          
        <input type="number" name="phone" class="form-control" id="number" placeholder="Enter your Mobile number ">
      </div>
    </div>
	
	 
	
	 
	
	
	  <div class="form-group">
	
	   <label class="control-label col-sm-2" for="city">Select City:</label>
      
	  <div class="col-sm-10"> 
	
	
   <select id="city" name="city" class="form-control">
   
   
   <option value="None">--None Selected--</option>
    <option value="Delhi">Delhi</option>
    <option value="Ghaziabad">Ghaziabad</option>
    <option value="Noida">Noida</option>
    <option value="Gurgaon">Gurgaon</option>
	  <option value="Faridabad">Faridabad</option>
	    <option value="Gautam Budh Nagar">Gautam Budh Nagar</option>
   
</select>
</div>
</div>



 <div class="form-group">
	
	   <label class="control-label col-sm-2" for="email">Select Area:</label>
      
	  <div class="col-sm-10"> 
	
	
   <select name="area" id="area" class="form-control">
   
   
   <option value="None">--None Selected--</option>
    
   
</select>

<script>
document.getElementById( 'submit' ).addEventListener( 'click', function () {
    // check for and report errors here
    for( var index = 0; index < document.forms.length; index++ ) {
        document.forms[index].submit();
    };
} );
</script>



<script>
$(document).ready(function () {
    $("#city").change(function () {
        var val = $(this).val();
        if (val == "Delhi") {
            $("#area").html("<option value='test'>Laxmi Nagar</option><option value='Mayur Vihar Phase II'>item1: test 2</option>");
        } else if (val == "item2") {
            $("#area").html("<option value='test'>item2: test 1</option><option value='test2'>item2: test 2</option>");
        } else if (val == "item3") {
            $("#area").html("<option value='test'>item3: test 1</option><option value='test2'>item3: test 2</option>");
        }
    });
});
</script>

</div>
</div>


 <div class="form-group">
      <label class="control-label col-sm-2" for="street">Street address:</label>
      <div class="col-sm-10">
        <input type="street" name="street" class="form-control" id="street" placeholder="Enter your Street Address(Sectors/House number/Street) ">
      </div>
    </div>
	
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="problem">Specify problem:</label>
      <div class="col-sm-10">
        <input type="problem" name="problem" class="form-control" id="problem" placeholder="(Optional) ">
      </div>
    </div>

	
	





	
	
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button name="submit" type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>

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
?>
    
</body>
</html>