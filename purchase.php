<?php
session_start();
$name=$_SESSION['name'];
$user=implode($name);
if(!($user))
{
	echo '<script> window.location.href="home.php"</script>';
}

include("./database/db_connection.php");
$sql=mysqli_query($con, "SELECT Amount FROM `current_boxbalance`");
   $row=mysqli_fetch_assoc($sql);
   if ($row['Amount']!=0) 
   {
    $amount=$row['Amount'];
  }
  else
  {
    $amount=0;
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
img[src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"]
{
  display: none;
}
h4
{
  margin-top: 100px;
  text-align: center;
  color: grey;
}

p
{
  
  margin-bottom: 20px;
  color: white;
  font-weight: bold;
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

.special
{
	margin-top: 100px;
	color: #5e5e56;
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
	<h4>Note in Diary</h4>
<div class="pane">  

  <div class="panel-body">

<div class="text-center">
  <p>Box Balance: Rs.<?php echo "$amount" ?></p>
	<button class="prior" name="Daily" onclick="location.href='Dailypurchase.php'"><span>Daily Purchase</span></button>
	<button class="prior" name="Daily" onclick="location.href='whoseamount.php'"><span>Add Money to Box</span></button>
	<button class="incharge" name="Daily" onclick="location.href='roomrent.php'"><span>Room Rent *</span></button>
<br></div></div></div></div>
<div class="text-center">
<a href="home.php"><< Back</a>
<p class="special">* Special Permission only for Room Incharge</p>
</div>
</body>
</html>