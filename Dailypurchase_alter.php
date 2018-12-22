<?php
	session_start();
	$Item = $_SESSION["Item"];
	$Quantity = $_SESSION["Quantity"];
	$Price = $_SESSION["Price"];
	$products = $_SESSION["products"];

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
	<title>Daily Purchase Entry</title>
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
	margin-bottom: 300px;
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
    border: 0px solid #dddddd;
    -webkit-overflow-scrolling: touch;
  }
}

.fine input 
{
	border-radius: 2px;
	width: 80%;
	background-color:;
	border: 1px solid grey;
	margin-top: 5px;
	margin-bottom: 5px;
}

th.text-center
{
	color: brown;
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
<h4>Daily Purchase Entry</h4>
<div class="containe">

<div class="panel">  

	<div class="panel-body">


<form action="verifydailypurchase.php" method="post">

<?php
date_default_timezone_set('Asia/Kolkata');
$today = date('d-M-y');
$yesteday = date('d-M-y', strtotime('-1 days'));

?>
<table class="date">
<tr><td>

<SELECT name="date" id="dateselect" onmouseenter="sum()">
<option id="selectdate" value="selectdate" disabled selected>--Select Date--</option>
<option id="today"> <?php echo $today; ?> </option>
<option id="yesteday"> <?php echo $yesteday; ?> </option></SELECT></td></tr>
</table>

<div class="text-center">
<table class="fine">
	<tr>
		<th class="text-center">Item name</th>
		<th title="in kilo gram" class="text-center">Weight/Quantity</th>
		<th class="text-center">Price</th>
	</tr>


	<?php
for($i=0;$i<$products;$i++)
{

	?>
	<tr>
		<input type="hidden" name="products" id="products" value=<?php echo "$products"; ?> >
		<td><input type="text" name="Item[]" pattern="^[a-zA-Z\s]+$" title="Don't include Numbers in Item name" value= <?php if(isset($Item[$i])) { echo $Item[$i]; } ?> ></td>
		<td><input type="number" name="Quantity[]" value= <?php if(isset($Quantity[$i])) { echo $Quantity[$i]; } ?> ></td>
		<td><input id=<?php echo "Price[$i]"; ?> type="number" name="Price[]" onmouseenter="sum();" value= <?php if(isset($Price[$i])) { echo $Price[$i]; } ?> ></td>

	</tr>

<?php

}

?>

	</table>
	<p class="total">Total Amount: <i class="fa fa-inr" aria-hidden="true"></i> <input type="text" id="total" name="total" readonly></p><br>
<button name="entry" onclick="return Validate()" class="btn btn-primary">Submit</button>

</form>
<script type="text/javascript">
	
	function Validate()
	{
		var dateselect = document.getElementById("dateselect");
		if(dateselect.value == "selectdate")
		{
			alert("Please select date");
			return false;
		}
			return true;

	}

	function sum()
	{
		

    	var products=document.getElementById("products").value;
		var sum=0;	
		var Price;

		for(var i=0; i<products; i++)
		{
         	
			Price = document.getElementById('Price['+i+']').value;
			if (Price == "")
		 	{ 
				Price = 0;
			}
			sum = parseInt(sum) + parseInt(Price);
		}
		
		var result = sum;
		if (! isNaN(result)) 
		{
			document.getElementById("total").value = result;
		}
		
	}
	
</script>

</body>
</html>
