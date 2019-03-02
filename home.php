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
    <title>Home page</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="shortcut icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="img/favicon/android-icon-192x192.png">
    <style type="text/css">
    @font-face {
    font-family: 'Varela Round', sans-serif;
    src: url(VarelaRound-Regular.ttf);
    }
    body {
    background-color: #7d1a9b;
    background-image: linear-gradient(to right, rgba(43, 40, 50, 0.8) 0%, rgba(83, 86, 99, 0.8) 0%, rgba(69, 77, 91, 0.6) 00%);
    overflow: hidden;
    }
    img[src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"]
    {
    display: none;
    }
    .container {
    margin: auto;
    margin-top: 8%;
    }
    .container .panel {
    margin: auto;
    width: 50%;
    background-color: transparent;
    text-align: center;
    }
    .container .panel-heading {
    text-align: center;
    font-size: 40px;
    color: orange;
    }
    .btn-5 {
    border: 0px solid;
    text-shadow: none;
    transition: all 600ms;
    margin-top: 20px;
    margin-bottom: 20px;
    padding: 10px;
    background-color:#fff;
    width: 14.5em;
    font-size: 20px;
    color: #555555;
    font-weight: bold;
    cursor: pointer;
    border-radius: 30px;
    }
    .btn-5:hover {
    border-radius: 5px;
    text-shadow: 1px 1px 2px #427388;
    background-color: #3ad174;
    color: white;
    }
    hr
    {
    border: 0;
    width: 60%;
    height: 1px;
    background-image: linear-gradient(to right,  rgba(0, 0, 0, 0), grey, rgba(0, 0, 0, 0));
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
    color: #dcdcdc;
    margin-top: 40px;
    text-transform: uppercase;
    font-size: 12px;
    letter-spacing: 1px;
    }
    @media only screen and (max-width: 768px) {
    .container {
    margin: auto;
    margin-top: 20%;
    }
    .container .panel {
    width: auto;
    }
    .btn-5 {
    width: 80%;
    margin-bottom: 20px;
    letter-spacing: 0.3px;
    }
    .incharge {
    margin-top: 40px;
    font-size: 11px;
    }
    hr {
    width: 100%;
    }
    /*wave effect*/
    .wrapper {
    width: 500px;
    height: 350px;
    position: absolute;
    left: 50%;
    bottom: -55%;
    transform: translate(-50%, -50%);
    border-radius: 5px;
    background-image: none;
    overflow: hidden;
    }
    .wave {
    width: 1000px;
    height: 1025px;
    position: absolute;
    bottom: -100%;
    left: 50%;
    margin-left: -500px;
    margin-bottom: -420px;
    border-radius: 40%;
    background-color: #accbee;
    animation: wave 8s infinite linear;
    }
    @keyframes wave {
    from { transform: rotate(0deg);}
    from { transform: rotate(360deg);}
    }
    }
    </style>
  </head>
  <body>
    <div class="loader"></div>
    <div class="container">
      <div class="panel">
        <div class="panel-heading">
          <i class="fa fa-home" aria-hidden="true"></i>
        </div>
        <div class="panel-body">
          <button onclick="location.href='login.php'" class="btn-5" >
          <span class="submit-1"> Note in Diary</span>
          </button>
          <button onclick="location.href='selectview.php'" class="btn-5" name="viewdiary">
          <span>View Diary</span>
          </button>
        </div>
      </div>
      <hr>
      <p class="incharge">In-charge - <?php echo $row['Incharge']; ?> </p>
    </div>
    <!-- wave effect -->
    <div class="wrapper">
      <div class="wave"></div>
    </div>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
    $(".loader").fadeOut("slow");
    })
    </script>
  </body>
</html>