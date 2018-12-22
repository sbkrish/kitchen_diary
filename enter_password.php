<?php
session_start();
$name=$_SESSION['name'];
$user=implode($name);
if(!($user))
{
	header('location:home.php');
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

.panel{
	margin-top: 180px;
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
input{
	display: block;
	text-align: center;
	margin-left: 15%;

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
	font-size: 12px;
}

</style>
</head>
<body>
	
	<div class="container text-center">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
  <div class="row">
    <div class="panel">

  <div class="panel-body">

<form method="post" action="password_exist.php">
	
	<p>Hi <?php echo $user; ?>,</p>
	<input type="password" class="form-control input-sm" name="password" placeholder="Give me your Password" required="" autofocus="">
	<button class="btn btn-primary btn-sm">Sign in</button><br><hr>
	<a  href="home.php" style="text-decoration: none;"><< Back</a>
	<a class="col-sm-6" href="logout.php" style="text-decoration: none;">Refresh</a>
</form>	
	</div></div></div></div></div></div>
</body>
</html>