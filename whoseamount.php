<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
	<title>Whose Amount</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">
		@font-face{
		font-family: 'Varela Round', sans-serif;
		src: url(VarelaRound-Regular.ttf);
			}

body {
  background: #7d1a9b;
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
.text-center
{
	margin-top: 30px;
}
.fa
{
	color: white;
	font-size: 20px;
}
input[type="number"]
{
	border-radius: 2px;
	border: 2px solid grey;
	height: 40px;
	width: 80%;
	font-weight:bold;
	text-align: center;
	
	 transition: box-shadow 0.3s;
	 
}

.btn
{
	margin-top: 0px; 
	margin-bottom: 20p;
}


.rent
{
	margin-top: 20px;
	text-align:left;
	margin-left: 60px;

}


.contain {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 18px;
    cursor: pointer;
    font-size: 15px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* Hide the browser's default radio button */
.contain input {
    position: absolute;
    opacity: 0;
}

/* Create a custom radio button */
.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #eee;
    border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.contain:hover input ~ .checkmark {
    background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.contain input:checked ~ .checkmark {
    background-color: orange;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

/* Show the indicator (dot/circle) when checked */
.contain input:checked ~ .checkmark:after {
    display: block;
}

/* Style the indicator (dot/circle) */
.contain .checkmark:after {
 	top: 9px;
	left: 9px;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background: white;
}


</style>
</head>
<body>
<h4>Add Amount to Box</h4>
<div class="container">


<form method="post" action="whoseamount_check.php">
	<div class="text-center">
	<i class="fa fa-inr" aria-hidden="true"></i> <input type="number" name="boxamount" required="" placeholder="How Much?"><br>
	<div class="panel panel-primary">  
<div class="panel-heading">
	<p><b>Whose amount is this?</b></p></div>

	<div class="panel-body">
	<div class="rent">

	
	<label class="contain">Room Rent Amount
  <input type="radio" checked="checked" name="whoseamount" value="Room Rent Amount">
  <span class="checkmark"></span>
</label>
<label class="contain">My Own Money
  <input type="radio" name="whoseamount" value="My Own Money">
  <span class="checkmark"></span>
</label></div>

	<hr>
	<button type="submit" name="submit" class="btn btn-primary">Submit</button><br>
</div></div></div>

	<div class="text-center"><a href="enterpurchase.php" style="color: white"><< Back</a></div>
</form>


</body>
</html>