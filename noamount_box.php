
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">

	<title>No Amount in Kitchen</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
		@font-face{
		font-family: 'Varela Round', sans-serif;
		src: url(VarelaRound-Regular.ttf);
			}

body {
  background-color: #7d1a9b;  
}
h4
{
	margin-top: 100px;
	text-align: center;
	color: #c4bec4;
}
.panel
{
	margin-top: 20px;
}

.fa
{
	font-size: 38px;
	color: orange;
}

.btn
{
	margin-top: 10px;
	border-radius: 2px;
}

.insuff
{
	color: red;
	font-weight: bold;
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
<h4>Verify Purchase</h4>

<?php
session_start();
$total=$_SESSION['total'];
include("./database/db_connection.php");
$sql=mysqli_query($con, "SELECT Amount, last_updated FROM `current_boxbalance`");
		if(mysqli_num_rows($sql)==0)
			{


?>


<div class="container">

<div class="panel">  
	<div class="text-center">
<i class="fa fa-meh-o" aria-hidden="true"></i>
	<div class="panel-body">


<p>Your Purchase Value is <b>Rs.<?php echo "$total"; ?></b> only</p>

<p>But, Box amount is <b>Rs.0</b></p>
<p class="insuff">Insufficient Box Balance</p>

<?php
	}
	else {


		$row=mysqli_fetch_assoc($sql);
		$amount=$row['Amount'];
		$last_updated=$row['last_updated'];

		?>
		<div class="container">

<div class="panel">  
	<div class="text-center">
<i class="fa fa-meh-o" aria-hidden="true"></i>
	<div class="panel-body">
			<p>Your Purchase Value is <b>Rs.<?php echo "$total"; ?></b></p>
		<p>But, Box amount is <b>Rs.<?php echo $amount; ?></b> only</p>

<p class="insuff">Insufficient Box Balance</p>
<?php
	}
?>




<hr>
<button class="btn btn-primary" onclick="location.href='whoseamount.php'">Add Amount to Box</button>
</div></div></div></div>
</body>
</html>