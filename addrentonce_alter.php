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
	<title>Add rent once Alter</title>
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
	margin-top: 20px;
	text-align: center;
	color: white;
}
h6
{
	margin-top: 10px;
	text-align: center;
	color: white;
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
    margin-top: 10px;
    margin-bottom: 0px;
    margin-left: -35px;
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
	margin-bottom: -10px;
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

p.total input
{
	width: 20%;
	text-align: center;
	border-radius: none;
	border: 0px;
	background-color: #d2dde0;
	font-weight: bold;
	margin-right: 20px;
}

.btn
{
	margin-bottom: 250px;
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
<?php
date_default_timezone_set('Asia/Kolkata');
$today = date('d-M-y');

?>

<p align="right" style="color: #c4c4c0; margin-top: 70px;">Today: <?php echo $today ?></p>


<h4>Monthly Allocation</h4>
<h6>Modify</h6>
<div class="containe">

<div class="panel">  

	<div class="panel-body">
<div class="text-center">
<form action="verifyrentonce.php" method="post">

<table class="fine">
	<tr>
		<th>Name</th>
		<th>Amount</th>
	</tr>
	<tr>
		<td><input class="special" type="text" name="Anbumani" required="" value="Anbumani" readonly=""></td>
		<td><input class="rent" type="number" onmouseenter="sum()" id="Price" name="rent5" required="" value= <?php if(isset($_SESSION["rent5"])) { echo $_SESSION["rent5"]; } ?> ></td>
	</tr>
	<tr>
		<td><input class="special" type="text" name="Balakrishnan" required="" value="Balakrishnan" readonly=""></td>
		<td><input class="rent" type="number" onmouseenter="sum()" id="Price1" name="rent1" required="" value= <?php if(isset($_SESSION["rent1"])) { echo $_SESSION["rent1"]; } ?> ></td>
	</tr>
	<tr>
		<td><input class="special" type="text" name="Dineshkumar" required="" value="Dineshkumar" readonly=""></td>
		<td><input class="rent" type="number" onmouseenter="sum()" id="Price2" name="rent2" required="" value= <?php if(isset($_SESSION["rent2"])) { echo $_SESSION["rent2"]; } ?> ></td>
	</tr>
	<tr>
		<td><input class="special" type="text" name="Ramesh" required="" value="Ramesh" readonly=""></td>
		<td><input class="rent" type="number"onmouseenter="sum()" id="Price3" name="rent3" required="" value= <?php if(isset($_SESSION["rent3"])) { echo $_SESSION["rent3"]; } ?> ></td>
	</tr>
	<tr>
		<td><input class="special" type="text" name="Sathishkumar" required="" value="Sathishkumar" readonly=""></td>
		<td><input class="rent" type="number"onmouseenter="sum()" id="Price4" name="rent4" required="" value= <?php if(isset($_SESSION["rent4"])) { echo $_SESSION["rent4"]; } ?> ></td>
	</tr>
	
	</table>
	
	<p class="total">Total Amount: <i class="fa fa-inr" aria-hidden="true"></i> <input type="text" id="total" name="total" readonly ></p><br>
	</div></div></div></div>
	<div class="text-center">
<button class="btn btn-sm btn-primary" name="entry">Submit</button> 
</div> 
</form>
<script type="text/javascript">
	

	function sum()
	{
		var Price = document.getElementById("Price").value;
		var Price1 = document.getElementById("Price1").value;
		var Price2 = document.getElementById("Price2").value;
		var Price3 = document.getElementById("Price3").value;
		var Price4 = document.getElementById("Price4").value;
		


		if (Price == "") 
			Price = 0;
		if (Price1 == "") 
			Price1 = 0;
		if (Price2 == "") 
			Price2 = 0;
		if (Price3 == "") 
			Price3 = 0;
		if (Price4 == "") 
			Price4 = 0;
		
		

		var result = parseInt(Price) + parseInt(Price1) + parseInt(Price2) + parseInt(Price3) + parseInt(Price4) ;
		if (! isNaN(result))
		 {
			document.getElementById("total").value = result;
		}
		
	}
	
	
</script>


</body>
</html>
