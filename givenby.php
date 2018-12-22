<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
	
	<title>Add Rent</title>
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
	color: white;
}

.panel-heading
{
	font-weight: bold;
	text-align: center;
}
.panel
{
	margin-top: 40px;
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
    margin-top: 10px;
    margin-bottom: 0px;
    margin-left: ;
    overflow-y: hidden;
    overflow-x: auto;
    -ms-overflow-style: -ms-autohiding-scrollbar;
    border: 0px solid #dddddd;
    -webkit-overflow-scrolling: touch;
  }
}

th
{
	text-align: center;

}

th.text-center
{
	color: brown;
}

p.total
{
	text-align: right;
}



.special
{
	text-align: center;
	border: 0px;
	margin-bottom: 10px;
	margin-top: 5px;
}

.rent
{
	border: 1px solid grey;
	border-radius: 2px;
	background-color: #ededea;
	text-align: center;
	font-weight: bold;
	width: 100%;
}

select
{
	border:0px solid blue;
	font-weight: bold;
	text-align-last:right;
    padding-right: 29px;
   font-size: 20px;
}


.amount
{	
	margin-top: 40px;
	border-top: 0px;
	text-align: center;
	border-right: 0px;
	border-left: 0px;
	border-bottom: 1px solid grey;
	font-size: 20px;
	font-weight: bold;
}

.cl
{
	margin-top: 40px;
}
</style>
</head>
<body>
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

<h4>Add Rent</h4>
<div class="container">

<div class="panel panel-primary">  
<div class="panel-heading">
	<p>Who gave the Rent today</p></div>
	<div class="panel-body">
<div class="text-center">


<form name="rentgivenby" method="post" action="rentadded.php">

<table class="fine">
	
<tr>
<td>
<SELECT name="renter" id="renter"> 
	<option id="Who" value="Who" disabled selected> Select here </option>
			<option>Anbumani</option>
			<option>Balakrishnan</option>
			<option>Dineshkumar</option>
			<option>Ramesh</option>
			<option>Sathishkumar</option>
</SELECT>
</td></tr>
<tr>
	<td>
		<input class="amount" type="number" name="rentamount" placeholder="Enter Amount" required="">

	</td>
</tr>
</table>

<br><br>
<div class="panel-footer">
<button class="btn btn-primary" name="entry" onclick="return Validate()">Submit</button></div>
</form></div></div></div></div>
<div class="text-center">
	<div class="cl">
<a href="roomrent.php" style="text-decoration:none; color: #d794e0;"><u>Go Back</u></a>
</div></div>

<script type="text/javascript">
	
	function Validate()
	{
		var userselect = document.getElementById("renter");
		if(userselect.value == "Who")
		{
			alert("Must Need One Of Our Friend Name");
			return false;
		}
			return true;

	}

	
		
	</script>
</body>
</html>