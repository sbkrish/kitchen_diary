<?php
error_reporting(0);
session_start();
$name = $_SESSION['name'];
$user = implode($name);
if ($user) {
	include "./database/db_connection.php";
	$sql = mysqli_query($con, "SELECT Password FROM user WHERE alias='$user'");
	// echo mysqli_num_rows($sql);
	$query = mysqli_fetch_assoc($sql);
	if ($query[0] != null || $query[0] != "") {
		echo '<script> window.location.href="enter_password.php"</script>';
	}
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Login</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="shortcut icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="img/favicon/android-icon-192x192.png">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
		<style type="text/css">
		body {
		background-color: #7d1a9b;
		background-image: linear-gradient(to right, rgba(43, 40, 50, 0.8) 0%, rgba(83, 86, 99, 0.8) 0%, rgba(69, 77, 91, 0.6) 00%);
		size: 100%;
		width: 100%;
		height: 100%;
		font-size: 12px;
		overflow: hidden;
		font-family: 'Montserrat', sans-serif;
		}
		img[src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] {
		display: none;
		}
		nav {
			display: none;
		}
		button {
		display: block;
		height: 150px;
		width: 100px;
		margin-top: 10px;
		margin-left: 20px;
		margin-right: 20px;
		}
		button:focus {
		outline:0 !important;
		}
		.btn1 {
		background-image:url(img/1.png);
		background-size: 90px 135px;
		}
		.btn2 {
		background-image: url(img/2.png);
		background-size: 90px 140px;
		}
		.btn3 {
		background-image: url(img/3.png);
		background-size: 90px 135px;
		}
		/*.btn4 {
		background-image: url(img/4.png);
		background-size: 85px 137px;
		}*/
		.btn5 {
		background-image: url(img/5.png);
		background-size: 90px 135px;
		}
		.btn {
		font-weight: bold;
		font-size: 16px;
		background-color: transparent;
		/*background-color: #8082a3;*/

		background-repeat: no-repeat;
		background-position: center;
		border: 2px solid;
		margin-bottom: 20px;
		}
		.btn:hover {
		border: 1px solid;
		outline-color: grey;
		outline-offset: 15px;
		border-top-right-radius: 30px;
		border-bottom-left-radius: 30px;
		background-color: #8082a3;
		transition: 300ms;
		border-width: 0px;
		color: transparent;
		}
		.panel {
		background-color: transparent;
		margin-top: 25%;
		}
		.panel-heading {
			background-color: #dcdcdc;
			color: #555555;
			font-size: 18px;
			font-weight: bold;
			letter-spacing: 0px;
		}
		a {
			font-size: 16px;
			letter-spacing: 0.5px;
			color: #bf85c6;
		}
		a:hover {
			color: orange;
		}
		@media only screen and (max-width: 768px)  {
			.panel {
				width: auto;
				margin: auto;
				margin-top: 15%;
			}
			.panel-heading {
				display: none;
			}
			.btn {
				margin: 10px;
				margin-bottom: 5px;
			}
			a {
				font-size: 14px;
			}
			nav {
			display: inline;
			background-color: transparent;
			margin: auto;
			height: 60px;
			text-align: left;
			box-shadow: 10px 2px solid white;
		}
		nav ul {
			padding: 0px;
			margin-left: 25px;
		}
		nav ul li {
			list-style: none;
			margin-top: 25px;
			margin-left: 0px;
			/*margin-right: 25%;*/
			font-size: 16px;
			font-weight: normal;
			display: inline-block;


		}
		nav ul li i {
			margin-right: 5px;
			border: 0px solid grey;
			border-radius: 0px;
			padding: 7px;
			color: #c3c3c3;
			/*color: #0A4F8C;*/
			background-color: transparent;
			cursor: pointer;
		}
		li.another-user {
			margin-left: 30%;
			color: #c3c3c3;
			font-weight: normal;

		}
		li a:active .left-arrow  {
			filter: contrast(160%);
			background-color: transparent;

    }
		}
		</style>
	</head>
	<body>

		<nav>
			<ul>
				<!-- <li><a href="home.php"><i class="fa fa-arrow-left"></i></a></li> -->
				<li><a href="home.php"><img src="img/left-arrow_24.png" class="left-arrow" ></a></li>
				<li class="another-user">Login</li>
			</ul>
		</nav>
		<div class="container text-center">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-4">
					<div class="panel">
						<div class="panel-heading">
							<span>Login</span>
						</div>
						<div class="panel-body">
							<form method="post" action="user_exist.php" >
								<button class="btn btn1" name="name" value="1"></button>
								<button class="btn btn2" name="name" value="2"></button>
								<button class="btn btn3" name="name" value="3"></button>
								<!-- <button class="btn btn4" name="name" value="4"></button> -->
								<button class="btn btn5" name="name" value="5"></button>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- <a href="home.php">Home</a> -->
		</div>
	</body>
</html>