<?php
error_reporting(0);
session_start();
$name=$_SESSION['name'];
$user=implode($name);
include("./database/db_connection.php");
extract($_POST);
if(!($user))
	{
echo '<script> window.location.href="home.php?nu"</script>';
}
use PHPMailer\PHPMailer\PHPMailer;
$token = "qwertyuiopasdfghjklmnbvcxzQWERTYUIOPASDFGHJKLMNBVCXZ1234567890*/=";
$token = str_shuffle($token);
$token = substr($token, 0, 20);

if(isset($_POST['submit']))
{
	$check_email = mysqli_query($con, "SELECT * FROM `user` WHERE `email` = '$email'");
	$row = mysqli_fetch_assoc($check_email);

	if(mysqli_num_rows($check_email) != 0 && $row['verified'] == 1) {
		$update_token = mysqli_query($con, "UPDATE `user` SET `token` = '$token' WHERE `email` = '$email'");
		if($update_token) {

		require 'PHPMailer/Exception.php';
		require 'PHPMailer/PHPMailer.php';
		require 'PHPMailer/SMTP.php';
		$mail = new PHPMailer();
		$mail->isSMTP();
		$mail->Host = 'smtp.gmail.com';
		$mail->SMTPAuth = true;
		$mail->Username = 'sbkrish91@gmail.com';
		$mail->Password = 'rani1122';
		$mail->SMTPSecure = 'tls';
		$mail->Port = 587;
		$mail->setFrom('sbkrish91@gmail.com', 'Kitchen Diary');
		$mail->addAddress('ranimaniyan@gmail.com');
		$mail->isHTML();
		$mail->Subject = "Password Reset";
		$mail->Body = "Hi $row[uname], <br><br>You are requested to reset the password. Please find the link below. <br><br> <a href='http://localhost/kitchen_diary/password-reset.php?email=$email&token=$token'>Reset Passowrd</a> <br><br>Regards,<br>Balakrishnan S | Kitchen Diary";
		if($mail->send()) {
			$msg =  "Password reset link sent successfully.";
		} else {
			$msg =  "Error occured. Please try again later !";
		}
	} else {
		$msg = "update failed";
	}
	} elseif(mysqli_num_rows($check_email) != 0 && $row['verified'] == 0) {
		$msg = "Account not yet verified. Please verify your account !";
	} else {
		$msg = "Account does not exist !";
	}
}
?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="shortcut icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="img/favicon/android-icon-192x192.png">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
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
    nav {
			display: none;
		}
    .container {
    margin: auto;
    margin-top: 15%;
    }
    .container .panel {
    margin: auto;
    width: 50%;
    background-color: #494949;
    text-align: center;
    }
    .container .panel-heading {
    text-align: center;
    font-size: 40px;
    color: #E7C217;
    }
    button {
    	margin-top: 20px;
    	width: 50%;
    }
    .btn-5 {
    	margin-bottom: 20px;
    }
    .suc-msg {
    	margin: auto;
    	/*margin-top: 20px;*/
    	color: #ccc;
    	width: 80%;
    }
    input[type=email] {
    	width:50%;
    	display: block;
    	margin: auto;
    	margin-top: 20px;
    	font-size: 16px;
    	box-sizing: border-box;
    	background-color: transparent;
    	border-top: none;
    	border-left: none;
    	border-right: none;
    }
    input[type=email]:focus {
    	background-color:;
    	color: #fff;
    	outline: none;
    }
    @media only screen and (max-width: 768px) {
    .container {
    margin: auto;
    margin-top: 50%;
    }
    .container .panel {
    width: auto;
    }
    input[type=email] {
    	width: 80%;
    }
    .btn-5 {
    margin-bottom: 20px;
    letter-spacing: 0.3px;
    width: 80%;
    }
    nav {
			display: inline-block;
			text-align: center;
		}
		.navbar {
			background-color: #DEEAED;
			/*background-color: #232f42;*/
			/*background-color: #0e336d;*/
			 /*box-shadow: 0 8px 6px -6px #999;*/
			 /*box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);*/
		}
		ul {
			margin-top: 10px;
		}
		ul li {
			display: inline;
			list-style: none;
			margin-right: 60px;
			margin-left: 20px;
			
		}
		li a {
			margin-top: 0px;
			
			padding: 15px;
			
		}
		li a:hover {
			opacity: 0.5;
			
		}
		li img{
			margin-top: 0px;
			filter: contrast(40%);
			 /*box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);*/
		}
   }
    </style>
  </head>
  <body>
    <div class="loader"></div>
    <div class="container">
      <div class="panel">
        <div class="panel-heading">
          <h4>Forgot Password</h4>
        </div>
        <div class="panel-body">
        	<form method="post" action="#">
          <input type="email" name="email" id="email" placeholder="Enter your email" required="" autocomplete="off">
          <button class="btn btn-5 btn-md" type="submit" name="submit">Send link</button>
      </form>
      <div class="suc-msg" id="suc-msg"><?php echo "$msg"; ?></div>
        </div>
      </div>
    </div>
    <nav class="navbar navbar-fixed-bottom">
						<ul>
							<li><a href="home.php"><img src="https://img.icons8.com/material-rounded/24/000000/home.png"></a></li>
							<li><a href="login.php"><img src="https://img.icons8.com/material/24/000000/user-group-man-man.png"></a></li>
						</ul>
				</nav>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
    $(".loader").fadeOut("slow");
    });

    $('#email').focus(function() {
    	$('#suc-msg').hide();
    });

    </script>
  </body>
</html>