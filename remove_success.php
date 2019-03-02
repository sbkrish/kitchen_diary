<?php
session_start();
$remove=$_SESSION['remove'];

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
 	 <meta name="viewport" content="width=device-width, initial-scale=1">
 	 <link rel="stylesheet" href="css/bootstrap.min.css">
  	<link rel="stylesheet" href="css/font-awesome.min.css">	
  	<title>Success</title>
<style type="text/css">
    @font-face{
    font-family: 'Varela Round', sans-serif;
    src: url(VarelaRound-Regular.ttf);
      }

body {
  background: #222222;
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
.pane
{
  margin-top: 200px;
  border-radius: 150px;
}
.text-center
{
  margin-top: 0px;
  margin-bottom: 0px;
}

.fa
{
	font-size: 58px;
	color: orange;
}

.btn
{
	margin-top: 0px;

}
.data
{
	color: white;
	font-weight: bold;
}
hr
{
	width: 100%;
	border: 0.5px solid grey;
}

.cl
{
	margin-top: 40px;
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
	
<div class="pane">  

  <div class="panel-body">

<div class="text-center">

<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>

<p class="data"> User <u><?php echo "$remove"; ?></u> removed successfully from the DB.  </p>
</body></div></div></div></div>
<div class="text-center">
<a href='home.php'">Home</a></div>
</body>
</html>
