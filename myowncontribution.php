<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <title>Money Added From My Pocket</title>
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
	margin-top: 160px;
	text-align: center;
	color: #c4bec4;
}
.panel
{
	margin-top: 20px;
	font-size: 16px;
	font-weight: ;
}

.fa
{
	color: white;
	font-size: 20px;
}
input[type="number"]
{
	border-radius: 2px;
	border: 1px;
	height: 40px;
	font-weight: bold;
	text-align: center;
	box-shadow: inset 1px 1px 2px 0 #707070;
	 transition: box-shadow 0.3s;
	 background-color: #e5e2dc;
}

.btn
{
	margin-top: 30px; 
}
.back
{
	margin-top: 20px;
}

.sub
{
	margin-top: 0px;
}
.sel select
{
	text-align: center;
	margin-left: 60px;
	border-radius: 2px;
	border: 2px solid grey;
	font-weight: bold;
}

.back
{
	color: white;
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
<h4>Reason?</h4>
<div class="container">

<div class="panel">  

	<div class="panel-body">

<form method="post" action="reverify_own.php" onsubmit="return Validate()">
	<div class="text-center">
	<p>Why are you adding your own money?</p>
	<table class="sel">
<tr><td>

<SELECT name="reason" id="select"  >
<option id="your reason" value="your reason" disabled selected >   Give a valid Reason   </option>
<option id="No Amount" value="No Amount in Box"> No Amount in Box </option>

<option id="not enough" value="Box amount is not enough"> Box amount is not enough </option>
<option id="Outside" value="You was in Outside"> I was in Outside </option>
<option id="Coins" value="All are Coins in Box"> All are Coins in Box </option>
</SELECT></td></tr><hr>
</table>
<div class="sub">
<button type="submit" name="submit" class="btn btn-primary">Submit</button></div>
</div></div></div>
</form>
<div class="text-center">
<a class="back" href="whoseamount.php"><< Back</a></div></div></div></div>





<script type="text/javascript">
	
	function Validate()
	{
		var reason = document.getElementById("select");
		if(reason.value == "your reason")
		{
			alert("Please select valid Reason");
			return false;
		}


		return true;
		

	}

</script>

<!--<script type = "text/javascript" language = "javascript">
 jQuery(document).ready(function() {
    jQuery("#select").change(function() {
         if(this.options[this.selectedIndex].value == "No Amount in Box") {
            window.location = "contribution_check.php";

         }
    });
 });
</script>-->

</body>
</html>