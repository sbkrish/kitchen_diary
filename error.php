<?php
session_start();

$name=$_SESSION['name'];
$user=implode($name);
$incharge=$_SESSION['incharge'];


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
 	 <link rel="stylesheet" href="css/bootstrap.min.css">
  	<link rel="stylesheet" href="css/font-awesome.min.css">	
	<title>Error</title>
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
  margin-top: 160px;
  text-align: center;
  color: grey;
}
.panel
{
  margin-top: 30px;
  margin-bottom: ;
  font-size: 16px;
  font-weight: bold;
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

.panel-body
{
	margin-top: 10px;
	margin-bottom: -30px;
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
	<h4>Restricted</h4>
<div class="panel">  

  <div class="panel-body">

<div class="text-center">

	<i class="fa fa-ban" aria-hidden="true"></i><hr>
<?php

if($user==$incharge)

{

?>

<?php
echo "Hi $user.";
echo " <p>Rent already allocated for this month.</p><p>You can try next month</p>";

}

else

{

  echo "Sorry $user, <p>You are not allowed to access this page.</p><p> This month Inchargeable person only can access</p>";

}

?>
<br>
<br>
</div></div></div></div>
<div class="text-center">
<a href='roomrent.php'"><< Back</a>
</div>
</body>
</html>

