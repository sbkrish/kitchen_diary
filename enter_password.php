<?php
session_start();
$name = $_SESSION['name'];
$user = implode($name);
if (!($user)) {
	echo '<script> window.location.href="home.php?st"</script>';
}
include 'database/db_connection.php';
$verify_user_activation = mysqli_query($con, "SELECT `verified` FROM `user` WHERE `alias` = $user[0]");
// echo "SELECT verified FROM `user` WHERE `alias` = '$user[0]'";
$row = mysqli_fetch_assoc($verify_user_activation);
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
		<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
		<style type="text/css">
			body {
			background-color: #7d1a9b;
			background-image: linear-gradient(to right, rgba(43, 40, 50, 0.8) 0%, rgba(83, 86, 99, 0.8) 0%, rgba(69, 77, 91, 0.6) 00%);
		size: 100%;
		width: 100%;
			height: 100%;
		overflow: hidden;
		font-family: 'Montserrat', sans-serif;
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
			display: none;

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
		background-color: transparent;
		border-radius: 15px;
		/*box-shadow: 0 15px 35px rgba(50,50,93,.1),0 5px 15px rgba(0,0,0,.07);*/
		}
		.form-group {
		position:relative;
		margin-top: 40px;
		}
		.form-label {
		position: absolute;
		left: 0;
		top: 0px;
		color: #ddd;
		background-color: transparent;
		z-index: 10;
		transition: transform 100ms ease-out, font-size 100ms ease-out;
		font-weight: normal;
		font-size: 14px;
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
		color: #ffffff;
		font-size: 14px;
		box-shadow: 0 1px 0 0 #e5e5e5;
		transition: box-shadow .25s ease-out;
		background-color: transparent;
		}
		.form-input:focus {
		box-shadow: 0 1px 0 0;
		}
		.form-input.filled {
		box-shadow: 0 2px 0 0 lightgreen;
		}
		.btn {
			width: 100px;
			margin: auto;
			outline: 0;
				font-size: 12px;
				margin-left: 15px;



		}
		.forgot-password {
			margin-top: 30px;

		}
		.forgot-password a {
			margin-right: 10em;
			font-size: 12px;
			color: white;
			font-weight: normal;
		}
		.btm-img {
			display: none;
		}
		.not-activate {
			color: #434343;
			font-size: 16px;
			line-height: 25px;

		}
		.fa-envelope {
			font-size: 36px;
			color: grey;
		}
		#not-activate {
			margin-top: 20%;
		}
		@media only screen and (max-width: 768px){
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
				outline: 0;
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
			font-size: 12px;
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
			float: right;
			margin-right: 10%;
			color: #c3c3c3;
			font-weight: normal;

		}
		li a:active .left-arrow  {

			background-color: darkgrey;
    }
		.another-user a {
			color: #c3c3c3;
			text-decoration: underline;
			cursor: pointer;
		}
		li a:active .left-arrow  {
			filter: contrast(160%);
			background-color: transparent;

    }
    	.btm-img {
    		display: inline-block;
    		text-align: center;
    		margin: auto;
    		position: absolute;
    		margin-top: 10%;
    		opacity: 0.7;
    		background-color: transparent;

    	}
    	.btm-img img {
    		width: 100%;
    		height: 50%;

    	}
		}

		.field-icon {
			display: none;
  float: right;
  margin-left: -30px;
  margin-top: 15px;
  position: absolute;
  opacity: 1;
  color: lightgrey;
  font-size: 18px;
  z-index: 2;
}


		</style>
	</head>
	<body>
		<nav>
			<ul>
				<!-- <li><a href="home.php"><i class="fa fa-arrow-left"></i></a></li> -->
				<li><a href="home.php"><img src="img/left-arrow_24.png" class="left-arrow" ></a></li>
				<li class="another-user"><a href="login.php">Not me</a></li>
			</ul>
		</nav>

		<input type="hidden" id="current-user" value="<?php echo ($user); ?>">
		<div class="form-wrapper">
			<div class="text-center">
				<?php if ($row['verified'] === 1) {?>
			<img src="img/1.png" class="user-image" id="1">
			<img src="img/2.png" class="user-image" id="2">
			<img src="img/3.png" class="user-image" id="3">
			<!-- <img src="img/4.png" class="user-image" id="4"> -->
			<img src="img/5.png" class="user-image" id="5">
		</div>

			<form action="password_exist.php" class="form">
				<div class="form-group">
					<label class="form-label" for="first">Enter Password</label>
					<input id="first" class="form-input" type="password"  required="" /><span toggle="#first" class="fa fa-fw fa-eye field-icon toggle-password"></span>
					<label class="forgot-password"><a  href="forgot-password.php" style="text-decoration: none;">Forgot password?</a></label>
					<!-- <div class="btn-align"> -->
					<button class="btn btn-md btn-success" style="outline: 0">SIGN IN</button>
				<!-- </div> -->
					<!--   <label><a  href="home.php" style="text-decoration: none;">Home</a></label> -->
</div>


		</form>
		</div> <?php } else {
	echo "<div class='panel panel-body' id='not-activate'>
	<p class='not-activate'> Your account is not yet verified. Please check your registered email for activation link. <p><i class='fa fa-envelope'></i></p></div>";}?>

		<!-- <div class="btm-img">
			<img src="img/bg-img/2.png" id="btm-img">
		</div> -->
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

// $("img").hide();
var value = document.getElementById("current-user").value;
document.getElementById(value).style.display = "inline";
// document.getElementById("btm-img").style.display = "inline";

$("input").focusin(function(){
	$(".field-icon").show();
	});
$("input").focusout(function(){
	// console.log($("#first").val());
	if ($("#first").val() == "") {
	$(".field-icon").css('display', 'none');
	}
	});
$(".toggle-password").click(function() {
// $(.field-icon).show();
  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});

</script>
</body>
</html>

