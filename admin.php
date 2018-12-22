<?php
session_start();
$name=$_SESSION['name'];
$user=implode($name);
if(!($user))
	{
		header('location:home.php?st');
	}


	?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
 	 <meta name="viewport" content="width=device-width, initial-scale=1">
 	 <link rel="stylesheet" href="css/bootstrap.min.css">
  	
	<title>Purchase Entry</title>
	<style type="text/css">
    @font-face{
    font-family: 'Varela Round', sans-serif;
    src: url(VarelaRound-Regular.ttf);
      }

body {
  background: #222222;
}
h4
{
  margin-top: 20px;
  text-align: center;
  color: grey;
}

.admin
{
	margin-top: 20px;
  text-align: center;
  color: grey;

}
.pane
{
  margin-top: 30px;
}
.text-center
{
  margin-top: 0px;
  margin-bottom: 0px;
}

.fa
{
	font-size: 38px;
	color: #8c000e;
}

.btn
{
	margin-top: 20px;

}

.prior {
  font-family: 'Varela Round', sans-serif;
  background-color: #33568e;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: block;
    font-size: 20px;
    margin: 4px 2px;
    margin-left: 0px;
    cursor: pointer;
    width: 14.5em;
    margin-bottom: 10px;
}

.incharge {
  font-family: 'Varela Round', sans-serif;
  background-color: #c67c1b;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: block;
    font-size: 20px;
    margin: 4px 2px;
    margin-left: 0px;
    cursor: pointer;
    width: 14.5em;
    margin-bottom: 10px;
}



.special {
  font-family: 'Varela Round', sans-serif;
  background-color: #157027;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: block;
    font-size: 20px;
    margin: 4px 2px;
    margin-left: 0px;
    cursor: pointer;
    width: 14.5em;
    margin-bottom: 10px;
}

hr
{
	border: 0.5px solid grey;
	margin-top: 30px;
	width: 40%;
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
<div class="container">
  <?php
date_default_timezone_set('Asia/Kolkata');
$today = date('d-M-y');

?>

<p align="left" style="color: #c4c4c0; margin-top: 70px; font-size: 12px;">Today: <?php echo $today ?></p>

	<h4 >Note in Diary</h4>
<div class="pane">  

  <div class="panel-body">

<div class="text-center">

<button class="prior" name="Daily" onclick="location.href='Dailypurchase.php'"><span>Daily Purchase</span></button>
<button class="incharge" name="Daily" onclick="location.href='roomrent.php'"><span>Room Rent</span></button>
<hr><h4 class="admin">Admin</h4>
<button class="special" name="Assign" onclick="location.href='assign_incharge.php'"><span>Assign Incharge</span></button>
<button class="special" name="Remove" onclick="location.href='remove_user.php'"><span>Remove User</span></button>

</div></div></div></div>
</body>
</html>