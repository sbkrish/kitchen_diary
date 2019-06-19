<?php 
error_reporting();
extract($_POST);
date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d H:i:s');
include('database/db_connection.php');

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Password Reset Success</title>
	<link rel="shortcut icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="img/favicon/android-icon-192x192.png">
		<link rel="stylesheet" href="css/bootstrap.min.css">
	<style type="text/css">
		* {
			margin: 0;
			padding: 0;
		}
		body {
			background-color: #7d1a9b;
		font-size: 16px;
		background-image: linear-gradient(to right, rgba(43, 40, 50, 0.8) 0%, rgba(83, 86, 99, 0.8) 0%, rgba(69, 77, 91, 0.6) 00%);
		size: 100%;
		width: 100%;
		height: 100%;
		overflow: hidden;
		}
		.container {
    margin: auto;
    margin-top: 15%;
    }
    .container .panel {
    margin: auto;
    width: 50%;
    background-color: #ccc;
    text-align: center;
    }
    p {
    	color: maroon;
    	margin: auto;
    }
		a {
			text-decoration: underline;
		}
		nav {
			display: none;
		}
		@media only screen and (max-width: 768px) {
			.container .panel {
    margin: auto;
    width: 80%;
    background-color: #ccc;
    text-align: center;
    margin-top: 50%;
    }
			nav {
			display: inline-block;
			text-align: center;
		}
		.navbar {
			background-color: #DEEAED;
			/*background-color: #232f42;*/
			/*background-color: #0e336d;*/
			 /*box-shadow: 0 8px 6px -6px #999;*/
			 /*box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);*/
		}
		ul {
			margin-top: 10px;
		}
		ul li {
			display: inline;
			list-style: none;
			margin-right: 60px;
			margin-left: 20px;
			
		}
		li a {
			margin-top: 0px;
			
			padding: 15px;
			
		}
		li a:hover {
			opacity: 0.5;
			
		}
		li img{
			margin-top: 0px;
			filter: contrast(40%);
			 /*box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);*/
		}
		}
	</style>
</head>
<body>
<div class="container">
	<div class="panel">
		<div class="panel-body">
			<?php
		if(isset($_POST['submit'])) {
	$password = sha1($_POST['password']);
	$check_user = mysqli_query($con, "SELECT * FROM `user` WHERE `email` = '$email'");
	$row = mysqli_fetch_assoc($check_user);
	$count = $row['pwd_rc'];
	if(mysqli_num_rows($check_user) > 0) {
		$pwd_reset = mysqli_query($con, "UPDATE `user` SET `password` = '$password', `token` = null, `dolpr` = '$date', `pwd_rc` = $count+1  WHERE `email` = '$email'");
		if($pwd_reset) {
			echo "<p>Password reset success</p><a href='login.php'>Login</a><p class='water'>Save Electricity</p>";
		} else {
			echo "<p>update error</p>";
		}
	}else {
		echo "<p>Account does not exist</p>";
	}
} else {
	echo "<p>Restricted Entry</p>";
}
?>
</div>
</div>
</div>
<nav class="navbar navbar-fixed-bottom">
						<ul>
							<li><a href="home.php"><img src="https://img.icons8.com/material-rounded/24/000000/home.png"></a></li>
							<li><a href="login.php"><img src="https://img.icons8.com/material/24/000000/user-group-man-man.png"></a></li>
						</ul>
				</nav>
</body>
</html>