<?php
session_start();
$name = $_SESSION['name'];
$user = implode($name);
if (!($user)) {
	echo '<script> window.location.href="home.php?nu"</script>';
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Registration</title>
		<link rel="shortcut icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="img/favicon/android-icon-192x192.png">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

		<style type="text/css">
			@font-face {
		font-family: 'Varela Round';
		src: url(VarelaRound-Regular.ttf);
		}
		body {
		background-color: #7d1a9b;
		font-size: 12px;
		background-image: linear-gradient(to right, rgba(43, 40, 50, 0.8) 0%, rgba(83, 86, 99, 0.8) 0%, rgba(69, 77, 91, 0.6) 100%);
		size: 100%;
		width: 100%;
		height: 100%;
		overflow: hidden;
		}
		img[src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"]
		{
		display: none;
		}
		nav {
			display: none;
		}
		.panel
		{
		margin: auto;
		margin-top: 15%;
		text-align: center;
		width: 70%;
		}
		.hr
		{
		display: none;
		border: 0;
		width: 80%;
		height: 1px;
		background-image: linear-gradient(to right,  rgba(0, 0, 0, 0), #ccc, rgba(0, 0, 0, 0));
		}
		.fine {
			margin: auto;
		}

		.fine input
		{
		border-radius: 2px;
		width: 100%;
		height: 30px;
		background-color:;
		border: 1px solid #c3c3c3;
		margin-top: 5px;
		margin-bottom: 5px;
		color: #434343;
		margin-left: 20px;
		}
		.fine td {
			text-align: right;
			color: grey;
			margin: auto;
			/*letter-spacing: 0.2px;*/
		}
		input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
}
input[type=number] {
    -moz-appearance:textfield;
}
	label {
		display: none;
	}
		.btn
		{
		margin-top: 30px;
		/*background-color: purple;
		color: #fff;*/
		}
		.note
		{
		font-size: 12px;
		color: white;
		margin-left: 20px;
		}

		.panel-footer {
			background-color: transparent;
		}

		.info {
			color: red;
			text-align: right;
			margin: auto;
			width: 100%;
		}
		.field-icon {
  float: right;
  margin-left: 25px;
  margin-top: -25px;
  margin-right: -15px;
  position: relative;
  z-index: 3;
}
.mail-success {
	color: #ffffff;
	text-align: center;
	margin: auto;
	margin-top: 250px;
	font-size: 16px;
	line-height: 2em;
	display: none;
}
a.home-link {
	text-decoration: underline;
	color: orange;

}
		@media screen and (max-width: 767px) {
		.panel
		{
		margin-top: 35%;
		width: auto;
		}
		.fine {
		width: 100%;
		margin-top: 10px;
		margin-bottom: 20px;
		margin-left: 0px;
		overflow-y: hidden;
		overflow-x: auto;
		-ms-overflow-style: -ms-autohiding-scrollbar;
		border: 0px solid #dddddd;
		-webkit-overflow-scrolling: touch;
		}
		label {
			display: inline;
		}
		.fine input {
			width: 80%;
			margin-left: auto;
		}
		input[type=number] {
    -moz-appearance:textfield;
    width: 70%;
    margin-left: auto;
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
		.btn {
			margin-top: 10px;
		}
		.field-icon {
  float: right;
  margin-left: -20px;
  margin-top: 15px;
  position: absolute;
  z-index: 2;
}
.mail-success {
	margin: auto;
	margin-top: 250px;
	line-height: 2.5em;
	font-size: 14px;
	letter-spacing: 0.3px;
	display: none;
}
.home-link {
	display: none;

}
		}

	</style>

				</script>
	</head>
	<body>

		<!-- <div class="container">
				<h4 align="center">Create Password</h4>
		</div> -->
		<div class="container">
			<div class="mail-success" id="mail-success"></div>
			<div class="panel panel-success">
				<div class="panel-heading">
					<!-- <b><?php echo "$user"; ?></b> -->
					<h4>Register</h4>
				</div>
				<div class="panel-body">

					<form name="reg-form" method="post" onsubmit="return check()">
						<table class="fine">
							<tr>
								<td>Email</td>
								<td><input type="email" class="border" id="email" name="email"  title="Enter correct email address" required=""></td>
							</tr>
								<tr>
									<td>Mobile</td>
									<td><label>+91</label><input type="number" class="border" id="mobile" onfocus="return border()" name="mobile" title="Enter 10 digit number" required=""></td>
								</tr>
								<tr><td></td><td><div class="info-msg" id="info"></div></td></tr>
								<tr>
									<td>Password</td>
									<td><input type="password" class="border" id="pass" onfocus="return border()" title="Minimum 4 characters" name="password" required="" autocomplete="none"><span toggle="#pass" class="fa fa-fw fa-eye field-icon toggle-password"></span></td>
								</tr>
								<tr><td></td><td><div class="info-msg" id="info"></div></td></tr>
								<tr>
									<td>Confirm Password</td>
									<td><input type="password" id="conpass" class="border" name="conpassword" onfocus="border()" required=""></td>
								</tr>
								<tr><td></td><td><div class="info-msg" id="info"></div></td></tr>
							</table>
							<!-- <hr class="first_ruler"> -->

							<button class="btn btn-success btn-md" type="submit" name="submit">Submit</button>
							</form>

						</div>
					</div>
				</div>

					<p id='result'></p>
					<hr class="hr">
				</div>
				<nav class="navbar navbar-fixed-bottom">
					<div class="container">
						<ul>
							<li><a href="home.php"><img src="https://img.icons8.com/material-rounded/24/000000/home.png"></a></li>
							<li><a href="login.php"><img src="https://img.icons8.com/material/24/000000/user-group-man-man.png"></a></li>
						</ul>
					</div>
				</nav>
				<script type="text/javascript">
					function check() {
						// body...
						// document.getElementsByClassName("panel-footer")[0].style.display = "inline";
						var mail = document.getElementById("email").value;
						var mobile = document.getElementById("mobile").value;
						var pass= document.getElementById("pass").value;
						var cpass = document.getElementById("conpass").value;
						if (mobile.length != 10) {
							document.getElementById("mobile").style.border = "1px solid red";
							document.getElementsByClassName("info-msg")[0].textContent = "Mobile number invalid"
							return false;
						}
						if (pass.length < 4) {
							// alert("Minimum four characters");
							document.getElementById("pass").style.border = "1px solid red";
							document.getElementsByClassName("info-msg")[1].textContent = "Minimum 4 characters";
							return false;
						}
						if (pass != cpass) {
							// alert("mispatch");
							document.getElementById("conpass").style.border = "1px solid red";
							document.getElementsByClassName("info-msg")[2].textContent = "Password's do not match";
							return false;
						}

	var dataString = 'email=' + mail + '&mobile=' + mobile + '&password=' + pass + '&submit=true';

	$.ajax({
		type : "POST",
		url : "user_created.php",
		data : dataString,
		cache : false,
		success : function(html) {
			// alert(html);
			$(".panel").hide();
			$(".mail-success").show();
			$(".mail-success").html("You have been registered succesfully. <br>Please check your email to verify your account <br><a href='home.php' class='home-link'>Home</a>");
		}

	});
		return false;
					}

					function border() {

						var totalInputBox = document.getElementsByClassName("border").length;
						var totalInfoBox = document.getElementsByClassName("info-msg").length;
					 	for (var i = 0; i < totalInputBox; i++) {

						document.getElementsByClassName("border")[i].style.border = "1px solid #CCC";

					}
						for ( var j = 0; j < totalInfoBox; j++) {
							document.getElementsByClassName("info-msg")[j].textContent = "";
						}

						return false;


					}

					$(".toggle-password").click(function() {

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