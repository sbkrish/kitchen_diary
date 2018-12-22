<?php
error_reporting(0);
include("./database/db_connection.php");
session_start();
$name=$_SESSION['name'];
$user=implode($name);
if(isset($_GET['st']))
{
	$id=$_GET['st'];
	echo "<div id='$id'>Session Timed out</div>";
}

 

    $review=mysqli_query($con, "SELECT Incharge FROM `incharge` ORDER BY id DESC LIMIT 1");
    $row=mysqli_fetch_assoc($review);


?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>home page</title>
 <link rel="stylesheet" href="css/bootstrap.min.css">
  <!--<link rel="stylesheet" href="home.css">-->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <script type="text/javascript" src="js/jquery.js"></script>

<script type="text/javascript">
$(window).load(function() {
  $(".loader").fadeOut("slow");
})
</script>

  <header>Kitchen Diary</header>
  <style type="text/css">
@font-face {
font-family: 'Varela Round';
src: url(VarelaRound-Regular.ttf);
}



body {
  background-color: #1b4c7c;  
  /*background-color: #7d1a9b;*/
 
}

.wrapper {
    text-align: center;
}

.button {
    position: absolute;
    top: 50%;
}
.Prior {
  font-family: 'Varela Round', sans-serif;
  background-color: #3ad174;
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
    margin-bottom: 15px;
  
}



.btn-5 {
  border: 0 solid;
  box-shadow: inset 0 0 20px rgba(255, 255, 255, 0);
  outline: 1px solid;
  outline-color: rgba(255, 255, 255, .5);
  outline-offset: 0px;
  text-shadow: none;
  transition: all 1250ms cubic-bezier(0.19, 1, 0.22, 1);
  margin-bottom: 30px;
   padding: 15px 32px;
   background-color:#a83315;
   width: 14.5em;
  
   font-size: 20px;
   color: white;
   font-weight: bold;
  
   cursor: pointer;
} 

.btn-5:hover {
  border: 1px solid;
  
  outline-color: rgba(255, 255, 255, 0);
  outline-offset: 15px;
  text-shadow: 1px 1px 2px #427388; 
   background-color: #3ad174;
   color: white;
}

.logout{
    position:fixed;
    right:10px;
    top:5px;

  }


.pane{
	margin-top: 30px;
padding-left: 20px;
}
hr
{
  border: 0;
   width: 80%;
    height: 1px;
    background-image: linear-gradient(to right,  rgba(0, 0, 0, 0), grey, rgba(0, 0, 0, 0));
}


h4
{

  text-align: center;
  color: #cedae5;
  font-size: 30px;
  margin-top: 60px;
}

.time
{
  border: 2px;
  
  margin-top: 50px;
  color: white; 
   font-size: 12px;
   border:2px solid grey;
   width: 28%;
   border-left: 0px;
   background-color: #a39309;
   border-top-right-radius: 10px;
   border-bottom-right-radius: 10px;

}

.time2
{
  margin-bottom: -2px;
}

.fon
{
color: #ffc816;
text-align: left;
font-size: 26px;
margin-bottom: -30px;
margin-left: ;
}


.loader 
{
 position: fixed;
 left: 0px;
 top: 0px;
 width: 100%;
 height: 100%;
 z-index: 9999;
 background: url('img/lemon.gif') 50% 50% no-repeat rgb(249,249,249);
}


.incharge
{
  text-align: center;
  font-weight:;
  color: #dcdde8;
  margin-bottom: 30px;
}
  </style>

</head>
<body>
  <div class="loader"></div>
		<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
        <h3 align="center">Kitchen diary</h3>
    </div>
  </div>
</nav>
<?php
date_default_timezone_set('Asia/Kolkata');
$today = date('d-M-y');

?>
<!-- <div class="time">
<p align="left" class="time2">Today: <?php echo $today ?></p></div>
 --><div class="containe">

<h4><i class="fa fa-home" aria-hidden="true"></i></h4>
<div class="pane">  
	<div class="panel-body">

<button onclick="location.href='login.php'" class="btn-5" ><div class="fon"><i class="fa fa-pencil" aria-hidden="true"></i></div><span> Note in Diary</span></button>
<!-- <button onclick="location.href='updated_box_balance.php'" class="btn-5"><div class="fon"><i class="fa fa-money" aria-hidden="true"></i></div><span> Box Balance</span></button>

<form method="post" action="overallbalance.php">
<button onclick="location.href='overallbalance.php'" class="btn-5" name="Overall"><span>Available Room Rent</span></button>
</form> -->

<button onclick="location.href='selectview.php'" class="btn-5" name="viewdiary"><div class="fon"><i class="fa fa-book" aria-hidden="true"></i></div><span>View Diary</span></button>
</div>
</div>
<hr class="one">
<p class="incharge">Incharge - <?php echo $row['Incharge']; ?> </p>
</div>
</body>
</html>


