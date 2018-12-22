<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
	<title>Enter correct Password</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
 <style type="text/css">
  	body {
	background-color: #7d1a9b;	
}

.panel{
	margin-top: 160px;
	font-size: 16px;
	font-weight: bold;
}

.fa
{

	font-size: 38px;
	color: orange;

}

.forget
{
	color: #cebec9;
}

</style>
	</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
        <h3 align="center">Kitchen diary</h3>
    </div>
  </div>
</nav>

<div class="containe">

<div class="pane">  
	<div class="panel-body">



<?php
session_start();

$name=$_SESSION['name'];
$user=implode($name);

if(isset($_POST['password']))
{
	include("./database/db_connection.php");
	$password=mysqli_real_escape_string($con,$_POST["password"]);
	$decrypt=sha1($password);

	$query=mysqli_query($con, "SELECT password FROM user WHERE password='$decrypt' AND uname='$user'");
	if(mysqli_num_rows($query)>=1)
	{
		header("location:enterpurchase.php");
	}
	else
	{
		?>
		<div class="panel">
			<div class="text-center">
			<i class="fa fa-ban" aria-hidden="true"></i>
			<div class="panel-body">

		<p>Sorry,You entered an Incorrect Password</p>
</div>
		</div></div></div>
<?php
	}
}

$con->close();
?>

<div class="text-center">
<button class="btn btn-info" onclick="location.href='enter_password.php'">Try Again</button><br><br>
<a class="forget" href='forgetpwd.php'">Forget Password!</a>
</div>
</body>
</html>