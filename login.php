<?php
error_reporting(0);
session_start();
$name=$_SESSION['name'];
$user=implode($name);


if($user)
{
	include("./database/db_connection.php");
	$sql=mysqli_query($con, "SELECT Password FROM user WHERE uname='$user'");
		
		if(mysqli_num_rows($sql)==1)
			{
				header('location:enter_password.php');
			}
	
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<style type="text/css">

		body{
			/*background-color: #1b4c7c;*/
			background-color: #7d1a9b;	
  background-image: linear-gradient(to right, rgba(43, 40, 50, 0.8) 0%, rgba(83, 86, 99, 0.8) 0%, rgba(69, 77, 91, 0.6) 00%);
   size: 100%;
  width: 100%;
  height: 100%;
  font-size: 12px;
		}
		button{
			display: block;
			height: 150px;
			width: 100px;
			margin-top: 10px;
			margin-left: 20px;
			margin-right: 20px;

			
		}

		
		h4{
			margin-top: 25px;
			color: white;
			font-size: 18px;
		}

.btn1{
	background-image:url(img/mani.png);
	background-size: 90px 135px;
}
.btn2{
	background-image: url(img/krish.png);
	background-size: 90px 140px;
}
.btn3{
	background-image: url(img/dinesh.png);
	background-size: 90px 135px;
}
.btn4{
	background-image: url(img/ramesh.png);
	background-size: 85px 137px;
}
.btn5{
	background-image: url(img/sathish.png);
	background-size: 90px 135px;
}

.btn{
	font-weight: bold;
	font-size: 16px;
	background-color: transparent;	
	/*height: 50px;*/
	/*border-top-right-radius: 30px;
	border-bottom-left-radius: 30px;
	*/
	/*box-shadow: 10px 10px 5px grey;*/
	/*background-size: 90px 135px;*/
	background-color: transparent;
	background-repeat: no-repeat;
	background-position: center;
	border: 2px solid;

}




.btn:hover {
  border: 1px solid;
  
  outline-color: grey;
  outline-offset: 15px;
 border-top-right-radius: 30px;
	border-bottom-left-radius: 30px;
   background-color: #8082a3;
   border-width: 0px;
   color: white;
}
	
button:focus { outline:0 !important; }


.pane{
		background-color: ;
		margin-top: -15px;
}

hr
{

border: 0.5px solid grey;
}

	</style>


</head>
<body>
<div class="container text-center">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
  <div class="row">
  	
  	<!-- <h3><i class="fa fa-user-o" aria-hidden="true"></i></h3> -->
  	<h4>I am..</h4>
    <div class="pane">

  <div class="panel-body">
<form method="post" action="user_exist.php" >
	<button class="btn btn1 " name="name" value="Anbumani"></button>
	<button class="btn btn2" name="name" value="Balakrishnan"></button>
	<button class="btn btn3 " name="name" value="Dineshkumar"></button>
	<button class="btn btn4" name="name" value="Ramesh"></button>
	<button class="btn btn5" name="name" value="Sathishkumar"></button>
</form>
<br><br>
	<a href="home.php" style="text-decoration: none; color: #bf85c6;"> Home</a>
</div></div></div></div></div></div>
</body>
</html>