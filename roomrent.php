<?php
session_start();

$name=$_SESSION['name'];
$user=implode($name);
if(!($user))
{
  echo '<script> window.location.href="home.php"</script>';
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">	
	<title>Room Rent</title>
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
  margin-top: 160px;
  text-align: center;
  color: grey;
}
.panel
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
	font-size: 18px;
	color: white;
}

.btn
{
	margin-top: 20px;

}

.in
{
		text-align: center;
		border-color: red;
		font-weight: bold;
		border-radius: 2px;
		border: 2px;

}
@media screen and (max-width: 767px) {
  .fine {
    width: 109%;
    margin-top: 30px;
    margin-bottom: 20px;
    margin-left: -15px;
    overflow-y: hidden;
    overflow-x: auto;
    -ms-overflow-style: -ms-autohiding-scrollbar;
    border: 1px solid #dddddd;
    -webkit-overflow-scrolling: touch;
  }
}


.prior {
  font-family: 'Varela Round', sans-serif;
  background-color: #c67f0d;
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
    margin-bottom: 20px;
}
hr
{
	width: 100%;
	border: 0.5px solid #d1d1d1;
	margin-bottom: -30px;
}
td
{
	width: 10%;
}
th
{
	text-align: center;
	background-color: #772b2b;
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
<div class="container">
<h4>Room Rent</h4>
<div class="pane">  

  <div class="panel-body">

<div class="text-center">


<form method="post" action="rentgivenby_error.php">
<button class="prior" name="rentgivenby">Add Given Rent</button>

</form>

<form method="post" action="addrentonce_check.php">

<button class="prior" name="addrent">Do Monthly Allocation</button>

</form>
</div></div></div></div>
<div class="text-center">
<a href='enterpurchase.php' style="text-decoration:none"><< Back</a>

</div>

</body>
</html>