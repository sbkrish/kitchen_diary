<?php
session_start();
$remove=$_SESSION['remove'];

?>
<!DOCTYPE html>
<html>
<head>
	<title>User Not Exist</title>
	<meta charset="UTF-8">
 	 <meta name="viewport" content="width=device-width, initial-scale=1">
 	 <link rel="stylesheet" href="css/bootstrap.min.css">
  	<link rel="stylesheet" href="css/font-awesome.min.css">	
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
  margin-top: 100px;
  text-align: center;
  color: grey;
}
.panel
{
  margin-top: 60px;
  border-radius: 0px;
}
.text-center
{
  margin-top: 0px;
  margin-bottom: 0px;
}

.fa
{
	font-size: 38px;
	color: orange;
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
	<h4>No User</h4>
<div class="panel">  
	<div class="text-center">
<i class="fa fa-info-circle" aria-hidden="true"></i>
  <div class="panel-body">




<p> You are trying to delete the User <b><?php echo "$remove"; ?></b> is not exist in the DB.  </p>
</div></div></div></div>
<div class="text-center">
<a href='home.php'">Home</a>
</div>
</body>
</html>



