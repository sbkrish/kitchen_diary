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
  <title>Enter your password</title>
 <link rel="stylesheet" href="css/bootstrap.min.css">
 <style type="text/css">
  	body {
	background-color: #7d1a9b;
	background-image: linear-gradient(to right, rgba(43, 40, 50, 0.8) 0%, rgba(83, 86, 99, 0.8) 0%, rgba(69, 77, 91, 0.6) 00%);
   size: 100%;
  width: 100%;
  height: 100%;	
  
}
h4{
	margin-top: 150px;
	color: grey;
}
img[src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"]
{
  display: none;
}

.panel{
	margin-top: 30px;
	font-size: 16px;
}

p{
	font-weight: normal;
	font-size: 14px;
}

button{
	display: block;
	margin-top: 10px;
}

input[type="number"]{
	display: block;
	text-align: center;
	margin-left: 15%;
	margin-top: 5%;
	letter-spacing: 20px ;
	font-size: 24px;

}

input[type="Number"]::-webkit-inner-spin-button,
input[type="Number"]::-webkit-outer-spin-button {
	-webkit-appearance: none;
	-moz-appearance: none;
	appearance: none;
	margin: 0;
}

input[type="password"]{
	display: block;
	text-align: center;
	margin-left: 15%;
	margin-top: 5%;
	letter-spacing: 20px ;
	font-size: 24px;

}
.input-sm{
	border-radius: 3px;
	border: 0px solid grey;
	height: 50px;
	width: 200px;
	
}
.container{
	width: 90%;
}

a
{
	font-size: 14px;
}

</style>
<script>
	/*function changeToPassword() {
    setTimeout(function () {
        document.getElementById("password").setAttribute("type", "password")
    }, 50);
var passLength = document.getElementById("password").value.length;
if (passLength == 4) {
	document.getElementById("myform").submit();
}
}
function changeToNumber() {
	setTimeout(function () {
        document.getElementById("password").setAttribute("type", "number")
    }, 1);
    
}*/

function formSubmit() {
	var passLength = document.getElementById("password").value.length;
	
	if (passLength == 4) {
	document.getElementById("myform").submit();
}
}


</script>
</head>
<body>
	
	<div class="container text-center">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
  <div class="row">
  	<h4>Enter PIN</h4>
    <div class="panel">

  <div class="panel-body">

<form method="post" action="password_exist.php" id="myform">
	
	<p>Hi <?php echo $user; ?>,</p>
	<input type="password" class="form-control input-sm" id="password" name="password" placeholder="" required="" autofocus="" onkeyup="formSubmit();">
	<!-- <button class="btn btn-primary btn-sm">Sign in</button><br><hr> -->
	<hr>
	<a  href="home.php" style="text-decoration: none;"><< Back</a>
	<a class="col-sm-6" href="logout.php" style="text-decoration: none;">Refresh</a>
</form>	
	</div></div></div></div></div></div>
</body>
</html>