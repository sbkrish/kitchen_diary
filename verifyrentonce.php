<?php
	session_start();

?>

<!DOCTYPE html>
<html>

<?php
	
	$_SESSION['Anbumani']=$_POST['Anbumani'];
	$_SESSION['Balakrishnan']=$_POST['Balakrishnan'];
	$_SESSION['Dineshkumar']=$_POST['Dineshkumar'];
	$_SESSION['Ramesh']=$_POST['Ramesh'];
	$_SESSION['Sathishkumar']=$_POST['Sathishkumar'];
	

	$_SESSION["rent1"]=$_POST["rent1"];
	$_SESSION["rent2"]=$_POST["rent2"];
	$_SESSION["rent3"]=$_POST["rent3"];
	$_SESSION["rent4"]=$_POST["rent4"];
	$_SESSION["rent5"]=$_POST["rent5"];
	
?>

<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
	
	<title>Verify Rent Once</title>
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
img[src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"]
{
  display: none;
}
h4
{
	margin-top: 80px;
	text-align: center;
	color: white;
}
.panel
{
	margin-top: 20px;
	font-size: 16px;
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

.total
{
	margin-right: 60px;
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

<h4>Monthly Allocation</h4>
<div class="container">

<div class="panel">  

	<div class="panel-body">
<div class="text-center">


<form action="rentonceadded.php" method="post">
<table width=auto cellspacing="20px" class="fine">
	<tr>
		<th>Name</th>
		<th>Amount</th>
	</tr>
	<tr>
		<td><div class="special"> Anbumani P</div></td>
		<td><?php echo $_POST['rent5'] ?> </td>
	</tr>
	<tr>
		<td><div class="special">Balakrishnan S</div></td>
		<td><?php echo $_POST['rent1'] ?> </td>
	</tr>
	<tr>
		<td><div class="special">Dineshkumar C</div></td>
		<td><?php echo $_POST['rent2'] ?> </td>
	</tr>
	<tr>
		<td><div class="special">Ramesh G</div></td>
		<td><?php echo $_POST['rent3'] ?> </td>
	</tr>
	<tr>
		<td><div class="special">Sathishkumar S</div></td>
		<td><?php echo $_POST['rent4'] ?> </td>
	</tr>
	
	</table>
	<hr>
	<p class="total">Total Amount: <i class="fa fa-inr" aria-hidden="true"></i> <b><?php echo $_POST['total']; ?></b></p>
	<hr>
<button class="btn btn-primary" name="entry">Submit</button>  <button class="btn btn-default"><a href="addrentonce_alter.php" style="text-decoration:none">Modify</a></button> 


</form>
</body>
</html>