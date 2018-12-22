<?php
	session_start();
	$name=$_SESSION['name'];
	$user=implode($name);
	extract($_POST);
	if(!($user))
	{
		header('location:home.php?st');
	}
?>

<!DOCTYPE html>
<html>

<?php

	
		$_SESSION["date"]=$date;
		$_SESSION["products"]=$products;
		$_SESSION["Item"]=$Item;
		$_SESSION["Quantity"]=$Quantity;
		$_SESSION["Price"]=$Price;

	
	?>

<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">

	<title>Verify Daily Purchase Entry</title>
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

table.date 
{
    width: 20%;
    margin: 0px auto;
    float: none;

}

.date select
{
	background-color: #31849b;
	color: white;
	border-radius: 2px;

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

.fine td
{
	text-align: center;
}

.fine tr.first_row
{
	color: white;
	background-color: #e87889;
	font-size: ;
}

p.total
{
	text-align: right;
}

p.total input
{
	width: 20%;
	text-align: center;
	border-radius: none;
	border: 0px;
	background-color: #d2dde0;
	font-weight: bold;
}

.btn
{
	margin-top: 10px;
	border-radius: 2px;
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
<div class="container">

<div class="panel">  

	<div class="panel-body">


<form action="add.php" method="post">
<div class="text-center">
<p>Date: <b><?php echo $_POST["date"]; ?> </b></p></div>
<table class="fine">
	<tr class="first_row">
		<th class="text-center">Item name</th>
		<th title="in kilo gram" class="text-center">Weight/Quantity</th>
		<th class="text-center">Price</th>
	</tr>
<?php 
	for($i=0;$i<$products;$i++)

	{
?>
	<tr>
		<td><?php echo $Item[$i];?></td>
		<td><?php echo $Quantity[$i];?></td>
		<td><?php echo $Price[$i];?></td>

	</tr>
<?php

}

?>
</table>
<p class="total">Total Amount: <i class="fa fa-inr" aria-hidden="true"></i> <b><?php echo $_POST['total']; ?></b></p><hr>
<div class="text-center">
<button name="entry" class="btn btn-success">Confirm</button>
<br><button class="btn btn-default"><a href="Dailypurchase_alter.php" style="text-decoration:none">Add/Modify</a></button>
<button class="btn btn-error"><a href="enterpurchase.php" style="text-decoration:none">Cancel</a></button></div>

</form></div></div></div>
</body>
</html>	