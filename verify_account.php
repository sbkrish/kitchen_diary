<?php
$email = $_GET['email'];
$token = $_GET['token'];
date_default_timezone_set('Asia/Kolkata');
$verified_date = date('Y-m-d H:i:s');

include('database/db_connection.php');
if( $email != "" && $token != "" && strlen($token) == 20 ) {
	$check_user = mysqli_query($con, "SELECT * FROM `user` WHERE `email` = '$email'");
	$row = mysqli_fetch_assoc($check_user);
	if(mysqli_num_rows($check_user)>0 && $row['token'] == $token) {
		if($row['verified'] == 0) {
	$insert = mysqli_query($con, "UPDATE `user` SET `verified` = 1, `dov` = '$verified_date' WHERE `email` = '$email'");
	if($insert) {
		$msg = "Account verified successfully <p class='login'><a href='login.php' id = 'close-window'>Login</a> here</p>";
	} else {
		$msg = "check update query";
		
	}
	} else {
		$msg = "Account already registered <p class='login'><a href='login.php' id = 'close-window'>Login</a> here</p>";
	
	}
	} elseif($row['token'] != $token) {
		$msg = "Invalid Link";
	} else {
		$msg = "Account not yet registered";
	}
} else {
	$msg = "This link is not valid";
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Account Verification</title>
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
		.msg {
			margin: auto;
			margin-top: 200px;
			text-align: center;
			color: #ffffff;
		}
		.login {
			background-color: transparent;
			color: #ffffff;
			text-align: center;
			width: 80px;
			margin: auto;
			line-height: 70px;
		}
		.login a {
			color: orange;
			text-decoration: underline;
		}
		.water {
			
			text-align: center;
			background-color: pink;
			color: #434343;
			width: 50%;
			margin: auto;
			margin-top: 100px;
			font-weight: bold;
		}
	</style>
</head>
<body>

<p class="msg"><?php echo $msg; ?></p>
<p class="water">Save Water </p>
</body>
</html>