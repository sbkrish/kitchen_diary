<?php
session_start();
$name=$_SESSION['name'];
$user=implode($name);
if(!($user))
	{
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

		<style type="text/css">
			@font-face {
		font-family: 'Varela Round';
		src: url(VarelaRound-Regular.ttf);
		}
		body {
		background-color: #7d1a9b;
		font-size: 12px;
		background-image: linear-gradient(to right, rgba(43, 40, 50, 0.8) 0%, rgba(83, 86, 99, 0.8) 0%, rgba(69, 77, 91, 0.6) 00%);
		size: 100%;
		width: 100%;
		height: 100%;
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
		width: 120%;
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
		.fine input {
			width: 80%;
			margin-left: auto;
		}
		nav {
			display: inline-block;
			text-align: center;
		}
		.navbar {
			background-color: #DEEAED;
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
			
		}
		.btn {
			margin-top: 10px;
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
			<div class="panel panel-success">
				<div class="panel-heading">
					<!-- <b><?php echo "$user" ?></b> -->
					<h4>Register</h4>
				</div>
				<div class="panel-body">
					<form name="reg-form" method="post" action="" onsubmit="return check()">
						<table class="fine">
							<tr>
								<td>Email</td>
								<td><input type="text" class="border" id="email" name="email"  title="Enter correct email address" required=""></td>
							</tr>
								<tr>
									<td>Mobile</td>
									<td><input type="text" class="border" id="mobile" onfocus="return border()" name="mobile" title="Enter 10 digit number" required=""></td>
								</tr>
								<tr>
									<td>Password</td>
									<td><input type="text" class="border" id="pass" onfocus="return border()" title="Minimum 4 characters" name="password" required="" autocomplete="none"></td>
								</tr>
								<tr>
									<td>Confirm Password</td>
									<td><input type="password" id="conpass" class="border" name="conpassword" onfocus="(this.value='')" required=""></td>
								</tr>
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
							<li><a href="home.php"><img src="https://img.icons8.com/ultraviolet/28/000000/home-page.png"></a></li>
							<li><a href="logout.php"><img src="https://img.icons8.com/ultraviolet/28/000000/groups.png"></a></li>
						</ul>
					</div>
				</nav>
				<script type="text/javascript">
					function check() {
						// body...
						var mail = document.getElementById("email").value;
						var mobile = document.getElementById("mobile").value;
						var pass= document.getElementById("pass").value;
						var cpass = document.getElementById("conpass").value;
						if(mail == "" ) {
							alert("give Email");
							return false;
						}
						if (mobile.length != 10) {
							document.getElementById("mobile").style.border = "1px solid red";
							return false;
						}
						if (pass.length < 4) {
							// alert("Minimum four characters");
							document.getElementById("pass").style.border = "1px solid red";
							return false;
						}
						if (pass != cpass) {
							// alert("mispatch");
							document.getElementById("conpass").style.border = "1px solid red";
							return false;
						}

					}

					function border() {
						var totalInputBox = document.getElementsByClassName("border").length;
					 	for (var i = 0; i < totalInputBox; i++) {

						document.getElementsByClassName("border")[i].style.border = "1px solid #CCC";
					}
						return false;
					
						
					}
				</script>
			</body>
		</html>