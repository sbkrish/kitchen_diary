<?php
session_start();
include("./database/db_connection.php");
$sql=mysqli_query($con, "SELECT Amount, last_updated, Addedby FROM `current_boxbalance`");
		$row=mysqli_fetch_assoc($sql);
		$amount=$row['Amount'];
		$last_updated=$row['last_updated'];
		$addedby=$row['Addedby'];


?>


<!DOCTYPE html>
<html>
<head>
		<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">

	<title>You have to Recheck your Entry</title>
	<style type="text/css">
		@font-face{
		font-family: 'Varela Round', sans-serif;
		src: url(VarelaRound-Regular.ttf);
			}

body {
  background: #af050d;
}
img[src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"]
{
  display: none;
}
h4
{
	margin-top: 100px;
	text-align: center;
	color: white;
}

.reverify
{

	color: #f77613;
}
.panel
{
	margin-top: 20px;
	font-size: 16px;
	font-weight: bold;
}
.text-center
{
	margin-top: 30px;
}
.fa
{
	color: #d10823;
	font-size: 90px;
	font-weight: bold;
	margin-top: 10px;
}

.back
{
	color: white;
}

</style>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
     <a class="navbar-brand" style="text-align: right;"><font color="#134756"><b>Kitchen Diary</b></font></a> 
       <ul class="nav navbar-nav">
        <li class=""><a href="home.php" style="text-align: right;" class="navibar">Home</a></li>
    
      </ul>
    
    </div>
  </div>
</nav>
<h4>Please Recheck</h4>
<div class="container">
<div class="text-center">
<div class="panel">
	<i class="fa fa-ban" aria-hidden="true"></i>
	<div class="panel-body">
	<div class="rent">

<p class="reverify"><u>Please RECHECK with box.</u></p> <p>Current Box Balance : </p><p> <b>Rs. <?php echo "$amount"; ?></b></p>
<p>Last update: <b><?php echo "$last_updated"; ?></b></p>by<p><?php echo "$addedby"; ?></p></div></div></div></div>
<div class="text-center">
<a class="back" href='myowncontribution.php'"><< Back</a></div></div>
</body>
</html>