<?php
//incluse database connection  value
include_once'connection.php';
    
//connect to database
$db=mysqli_connect($servername,$username,$password,$dbname);

//check connection 
if($db->connect_error){
	die("connection failed:".$db);
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Quick Post</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="homestyle.css">
	
</head>
<body>
    <div class="container">
		<div class="nav_data">
			<div class="nav_link">
        		<a href="sign_in.php">Sign In</a>
        		<a href="#">/</a>
        		<a href="sign_up.php">Sign Up</a>
			</div>
			<br>	
			<div class="nav_data1" style="text-align:right;">
				<a href="forgetpass.php">Forgot Password ?</a>
			</div>
        </div>
        <div class="nava1">
            <h1>Quick Post</h1>
        </div>
        
</body>
</html>