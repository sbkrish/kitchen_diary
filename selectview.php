<?php
session_start();
date_default_timezone_set('Asia/Kolkata');
$today=date('d-M-y');
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
	<title>Select View</title>
	<style type="text/css">
    @font-face{
    font-family: 'Varela Round', sans-serif;
    src: url(VarelaRound-Regular.ttf);
      }

body {
  background:
linear-gradient(27deg, #151515 5px, transparent 5px) 0 5px,
linear-gradient(207deg, #151515 5px, transparent 5px) 10px 0px,
linear-gradient(27deg, #222 5px, transparent 5px) 0px 10px,
linear-gradient(207deg, #222 5px, transparent 5px) 10px 5px,
linear-gradient(90deg, #1b1b1b 10px, transparent 10px),
linear-gradient(#1d1d1d 25%, #1a1a1a 25%, #1a1a1a 50%, transparent 50%, transparent 75%, #242424 75%, #242424);
background-color: #131313;
background-size: 20px 20px;
}
img[src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"]
{
  display: none;
}

.pane
{
  margin-top: 80px;
}
.text-center
{
  margin-top: 0px;
  margin-bottom: 0px;
}

.fa
{
	font-size: 30px;
	color: orange;
}

.btn
{
	margin-top: 20px;
}

.Prior {
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
  }

.second {
  font-family: 'Varela Round', sans-serif;
  background-color: #a00c3b;
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
<!--<h4>View Diary</h4>-->
<div class="pane">  

  <div class="panel-body">

<div class="text-center">
	
<form method="post" action="viewdiary.php">
	<input type="hidden" name="viewdate" value="<?php echo $today; ?>">
	<button name="viewdiary" class="second" >Today's Purchase</button><br>

</form>

<form method="post" action="view_givenrent.php" >

	<button name="givenrent" class="Prior">Given Rent</button><br></form>
	<button class="Prior" onclick="location.href='selectallocatedrent.php'" style="text-decoration:none; color: white" >Allocated Rent</a></button>

<br>

	<button class="Prior" onclick="location.href='select_contribution.php'" style="text-decoration:none; color: white">Contribution</a></button><br>



<br>
<div class="back">
<a href='home.php' style="text-decoration:none" ><< Back</a></div></div></div></div></div>

</body>
</html>


