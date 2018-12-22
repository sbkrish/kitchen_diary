<?php
session_start();
$name=$_SESSION['name'];
$user=implode($name);
$incharge=$_SESSION['incharge'];

if($user=='Balakrishnan')
{
	header("location:admin.php");
}

		if($incharge==$user && $user!='Balakrishnan')
			{
				header("location:purchase.php");
			}



?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
	<title>Purchase Entry</title>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery.js"></script>

<script type="text/javascript">
$(window).load(function() {
  $(".loader").fadeOut("slow");
})
</script>

	<style type="text/css">
		@font-face{
		font-family: 'Varela Round', sans-serif;
		src: url(VarelaRound-Regular.ttf);
			}



body {
  background-color: #1b4c7c;  
}


.pane
{	
	margin-top: 20px;
	padding-top: 0px;
	border-radius: 1px;
	
	
}


button.btn{
  
  background-color: #a83315;
    border: none;
    color: black;
    padding: 15px 32px;
    text-align: center;
    display: block;
    margin-top: 150px;
    font-size: 20px;
    margin: 4px 2px;
    cursor: pointer;
    width: 14.5em;
    margin-bottom: 20px;
}

hr
{
  width: 40%;
  border: 0.5px solid grey;
  margin-top: 40px;
}


.Prior {
  font-family: 'Varela Round', sans-serif;
  background-color: #ede6e8;
    border: none;
    color: brown;
    padding: 15px 32px;
    text-align: right;
    text-decoration: none;
    display: block;
    font-size: 20px;
    font-weight: bold;
    margin-top: 150px;
    margin-left: 0px;
    cursor: pointer;
    width: 14.5em;
    margin-bottom: 25px;
    height: 80px;
  
}


.fon
{
color: #0bbc17;
text-align: left;
font-size: 36px;
margin-top: -10px;
margin-bottom:;
margin-left: -20px;
margin-bottom: -40px;
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


</style>
</head>
<body>
  <div class="loader"></div>
	<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
  	 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
         	<span class="icon-bar"></span>
      <span class="icon-bar"></span>
     </button>
     <a class="navbar-brand" style="text-align: right;"><font color="#134756"><b>Kitchen Diary</b></font></a>
        <!--<header align="center">Kitchen diary</header>-->
        
        

        <div class="navbar-collapse collapse">

      <ul class="nav navbar-nav navbar-right">
        <li class=""><a href="home.php" style="text-align: right" >Home</a></li>
        <li><a href="logout.php" style="text-align: right">Log out</a></li>
    
      </ul>
    
    </div>
  </div>
</nav>
<!--<h4 align="center">Note in Diary</h4>-->
<div class="container">

<div class="pane">  

	<div class="panel-body">

<!--<form align="right" name="form1" method="post" action="logout.php">
	<label class="logout">
		<input type="submit" name="submit" value="Log Out">
	</label>

</form>-->
  <button name="Daily" onclick="location.href='Dailypurchase.php'" class="Prior"><div class="fon"><i class="fa fa-cart-plus" aria-hidden="true"></i></div> Daily Purchase Entry</button>

	</div></div></div>
<hr>
</body>
</html>