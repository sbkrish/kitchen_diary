<?php
session_start();
$name=$_SESSION['name'];
$user=implode($name);
if(!($user))
{
echo '<script> window.location.href="home.php?st"</script>';
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Enter your PIN</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="shortcut icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="img/favicon/android-icon-192x192.png">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<style type="text/css">
			body {
			background-color: #7d1a9b;
			background-image: linear-gradient(to right, rgba(43, 40, 50, 0.8) 0%, rgba(83, 86, 99, 0.8) 0%, rgba(69, 77, 91, 0.6) 00%);
		size: 100%;
		width: 100%;
			height: 100%;
		overflow: hidden;
		}
		nav {
			display: none;
		}
		img[src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"]
		{
		display: none;
		}
		.user-image {
				width: 	90px;
			height: 140px;
			shadow: 2px 2px 10px grey;
			opacity: 1;
			transition: 500ms;
			margin:auto;

		}
		/*.user-image:hover {
			opacity: 1.0;
			width: 90px;
			height: 135px;
		}*/
		button{
			display: block;
			margin-top: 10px;
		}
		.form-wrapper {
		max-width: 30%;
		min-width: 300px;
		padding: 20px 30px 20px 30px;
		margin: 10% auto;
		background-color: #ffffff;
		border-radius: 5px;
		box-shadow: 0 15px 35px rgba(50,50,93,.1),0 5px 15px rgba(0,0,0,.07);
		}
		.form-group {
		position:relative;
		margin-top: 40px;
		}
		.form-label {
		position: absolute;
		left: 0;
		top: 0px;
		color: #999;
		background-color: #fff;
		z-index: 10;
		transition: transform 100ms ease-out, font-size 100ms ease-out;
		}
		.focused .form-label {
		transform: translateY(-125%);
		font-size: .75em;
		}
		.form-input {
		position: relative;
		padding: 12px 0px 5px 0;
		width: 100%;
		outline: 0;
		border: 0;
		box-shadow: 0 1px 0 0 #e5e5e5;
		transition: box-shadow .25s ease-out;
		}
		.form-input:focus {
		box-shadow: 0 2px 0 0 blue;
		}
		.form-input.filled {
		box-shadow: 0 2px 0 0 lightgreen;
		}
		.btn {
			width: 120px;
			margin: auto;

		}
		.forgot-password {
			margin-top: 30px;
		}
		.forgot-password a {
			margin-right: 10em;
			font-size: 12px;
		}
		@media only screen and (max-width: 768px) {
			.form-wrapper {
				margin-top: 20%;
			}
			.forgot-password {
				margin: auto;
				margin-top: 20px;
				margin-right: 5px;
			}
			.forgot-password a {
			margin-right: 4em;
			font-size: 12px;
		}
			.btn {

				width: auto;
				margin: auto;
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
			font-size: 18px;
			font-weight: normal;
			display: inline-block;

			
		}
		nav ul li i {
			margin-right: 5px;
			border: 0px solid grey;
			border-radius: 2px;
			padding: 6px;
			color: #0A4F8C;
			background-color: #c3c3c3;
			cursor: pointer;
		}
		li.another-user {
			position: absolute;
			margin-left: 19em;
			text-align: right;
			/*background-color: #0af;*/
			border-radius: 5px;
			padding: 4px;
			font-size: 12px;
		}
		.another-user a {
			color: #c3c3c3;
			text-decoration: underline;
			cursor: pointer;
		}
		li a:active .fa  {
			color: maroon;
			background-color: grey;
    }
    	.btm-img {
    		text-align: center;
    		margin: auto;
    		margin-top: 18%;
    		opacity: ;
    		background-color: transparent;
    		
    	}
    	.btm-img img {
    		width: 100%;
    		height: 50%;

    	}
		}


		

		</style>
	</head>
	<body>
		<nav>
			<ul>
				<li><a href="home.php"><i class="fa fa-arrow-left"></i></a></li>
				<li class="another-user"><a href="logout.php">Not me</a></li>
			</ul>
		</nav>
		<input type="hidden" id="current-user" value="<?php echo($user) ?>">
		<div class="form-wrapper">
			<div class="text-center">
			<img src="img/1.png" class="user-image" id="1">
			<img src="img/2.png" class="user-image" id="2">
			<img src="img/3.png" class="user-image" id="3">
			<img src="img/4.png" class="user-image" id="4">
			<img src="img/5.png" class="user-image" id="5">
		</div>
			<form action="password_exist.php" class="form">
				<div class="form-group">
					<label class="form-label" for="first">Enter Password</label>
					<input id="first" class="form-input" type="password"  required="" />
					<label class="forgot-password"><a  href="logout.php" style="text-decoration: none;">Forgot password?</a></label>
					<!-- <div class="btn-align"> -->
					<button class="btn btn-md btn-success">SIGN IN</button>
				<!-- </div> -->
					<!--   <label><a  href="home.php" style="text-decoration: none;">Home</a></label> -->
					
				</div>
			
		</form>
		</div>
		<div class="btm-img">
			<img src="img/bg-img/2.png" id="btm-img">
		</div>
<script type="text/javascript" src="js/jquery.js"></script>
<script>
	$('input').focus(function(){
$(this).parents('.form-group').addClass('focused');
});
$('input').blur(function(){
var inputValue = $(this).val();
if ( inputValue == "" ) {
$(this).removeClass('filled');
$(this).parents('.form-group').removeClass('focused');
} else {
$(this).addClass('filled');
}
});

$("img").hide();
var value = document.getElementById("current-user").value;
document.getElementById(value).style.display = "inline";
document.getElementById("btm-img").style.display = "inline";
</script>
</body>
</html>