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
		<div class="nav">
			<div class=nav__links>
        		<a href="#">Home</a>
        		<a href="#">Make a post</a>
        		<a href="#">Edit Profile</a>
        		<a href="#">Logout</a>
    		</div><!--close navlinks-->
    		<div class="nav__img">
    			<img src="img_avatar2.png" alt="avatar">
    		</div><!--close imag on nav-->
        </div><!--close nav-->
        <div class="main">
                <h2>Welcome you have publication</h2>
               
</body>
</html>
