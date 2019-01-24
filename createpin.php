<?php

session_start();

$name=$_SESSION['name'];

$user=implode($name);

if(!($user))

	{

		echo '<script> window.location.href="home.php?nu"</script>';

	}





?>

<!DOCTYPE html>

<html>

<head>

	  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Create Password</title>

	<script type="text/javascript" src="js/createpin.js"></script>

	<link rel="stylesheet" href="css/bootstrap.min.css">

	<style type="text/css">

		@font-face {

font-family: 'Varela Round';

src: url(VarelaRound-Regular.ttf);

}







body {

  background-color: #7d1a9b; 

  font-size: 12px; 

  background-image: linear-gradient(to right, rgba(43, 40, 50, 0.8) 0%, rgba(83, 86, 99, 0.8) 0%, rgba(69, 77, 91, 0.6) 00%);

   size: 100%;

  width: 100%;

  height: 100%;

}

img[src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"]

{

  display: none;

}



.panel

{	

	margin-top: 20px;

	padding-top: 0px;

}



h4

{

	margin-top: 120px;

	color: #e3a5e5;

	font-size: 14px;

}

.hr

{

	

	border: 0;

	 width: 80%;

    height: 1px;

    background-image: linear-gradient(to right,  rgba(0, 0, 0, 0), #ccc, rgba(0, 0, 0, 0));

}



@media screen and (max-width: 767px) {

  .fine {

    width: 109%;

    margin-top: 10px;

    margin-bottom: 20px;

    margin-left: 0px;

    overflow-y: hidden;

    overflow-x: auto;

    -ms-overflow-style: -ms-autohiding-scrollbar;

    border: 0px solid #dddddd;

    -webkit-overflow-scrolling: touch;

  }

}



.fine input 

{

	border-radius: 2px;

	width: 60%;

	background-color:;

	border: 1px solid grey;

	margin-top: 5px;

	margin-bottom: 5px;

}





.btn

{



	margin-top: 0px;

}



.note

{

	font-size: 12px;

	color: white;

	margin-left: 20px;

}

a

{

	color: pink;

}

	</style>



</head>

<body>

	<nav class="navbar navbar-default navbar-fixed-top">

  <div class="container">

        <h3 align="center">Kitchen diary</h3>

    </div>

  </div>

</nav>

  <div class="container">

        <h4 align="center">Create Password</h4>

    </div>

  </div>

</nav>

<div class="text-center">	

<div class="container">

<div class="panel panel-default">  

<div class="panel-heading">



<b><?php echo "$user" ?></b></div>

<div class="panel-body">

<form name="createpass" method="post" action="usercreated.php" onsubmit="return validate()">

<table class="fine">

<tr>

	<td>PIN</td>

	<td><input type="number" id="pass" pattern="([0-9]*).{4,}" inputmode="numeric" title="four digit numbers" name="password" required="" onfocus="(this.value='')"></td>

</tr>

<tr>

<td>Confirm PIN</td>

	<td><input type="password" id="conpass" name="conpassword" required="" onfocus="(this.value='')"></td></tr>

	</table>

	<hr class="first_ruler">

<button class="btn btn-primary btn-md" name="submit" >Submit</button>

</div></div></div> <a href="login.php" style="text-decoration: none;"><< Back</a>





</form>



<hr class="hr">

</div>

<div class="note col-sm-4">

<p><u>Note:</u></p>

<p>* PIN should contain only 4 chars</p>

<p>* Numbers only allowed</i></p>

</div>

</body>

</html>





