<?php 
error_reporting(0);
$email = $_GET['email'];
$token = $_GET['token'];
include('database/db_connection.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Password Reset</title>
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
    margin-top: 15%;
    }
    .container .panel {
    margin: auto;
    width: 50%;
    background-color: #ccc;
    text-align: center;
    }
    .container .panel-heading {
    text-align: center;
    font-size: 40px;
    color: purple;
    }
    input[type=password], input[type=text] {
    	display: block;
    	margin: auto;
    	width: 50%;
    	background-color: transparent;
    	border: 0px;
    	border-bottom: 2px solid #000;
    	outline: none;
    	color: #000;
    	font-size: 16px;
    }
    input[type=password]:focus {

    }
    .field-icon {
  float: right;
  margin-left: -25px;
  margin-top: -25px;
  margin-right: 25%;
  position: relative;
  z-index: 3;
  opacity: 0.8;
}
    .btn-5 {
    	margin-bottom: 20px;
    	margin-top: 20px;
    	width: 50%;
    	background-color:;
    	color: ;
    }
    .msg {
    	font-size: 16px;
    	padding: 15px;
    	font-weight: normal;
    	margin: auto;
    	color: maroon;
    }

    @media only screen and (max-width: 768px) {
   
    .container .panel {
    width: 80%;
    margin-top: 50%;
    }
    input[type=password], input[type=text] {
    	width: 80%;
    }
    .field-icon {
  float: right;
  margin-left: 0px;
  margin-top: -25px;
  margin-right: 10%;
  position: relative;
  z-index: 3;
  opacity: 0.8;
}
    .btn-5 {
    margin-bottom: 20px;
    letter-spacing: 0.3px;
    width: 80%;
    }
   }
</style>
</head>
<body>
	<div class="loader"></div>
    <div class="container">
      <div class="panel">
      	<?php 
      	if( $email != "" && $token != "" && strlen($token) == 20 ) {
	$check_user = mysqli_query($con, "SELECT * FROM `user` WHERE `email` = '$email'");
	$row = mysqli_fetch_assoc($check_user);
      	if(mysqli_num_rows($check_user)>0 && $row['token'] == $token) {
			if($row['verified'] == 1) {
	
      	?>
        <div class="panel-heading">
          <h4>Reset Password</h4>
        </div>
        <div class="panel-body">
        	<form method="post" action="pwd-reset-success.php">
        	<input type="hidden" name="email" value="<?php echo $email; ?>">
          <input type="password" name="password" id="pass" placeholder="New password" autofocus="" required="" autocomplete="off"><span toggle="#pass" class="fa fa-fw fa-eye field-icon toggle-password"></span>
          <button class="btn btn-5 btn-md btn-primary" type="submit" name="submit">Submit</button>
      </form>
      <?php 
  } else {
  	echo "<p class='msg'>Account not yet verified</p>";
  }
  } elseif(mysqli_num_rows($check_user) == 0) {
  	echo "<p class='msg'>Account does not exist</p>";
  } elseif($row['token'] != $token) {
  	echo "<p class='msg'>Session Expired</p>";
  }
} else {
	echo "<p class='msg'>Restricted entry</p>";
}
?>

        </div>
      </div>
    </div>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
    $(".loader").fadeOut("slow");
    });

    $(".toggle-password").click(function() {

  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});
    </script>
</body>
</html>