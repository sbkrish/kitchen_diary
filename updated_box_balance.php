
<!DOCTYPE html>
<html>
<head>
		<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
<title>Current Box Balance</title>
<style type="text/css">
    @font-face{
    font-family: 'Varela Round', sans-serif;
    src: url(VarelaRound-Regular.ttf);
      }

body {
  background: #222222;
}
img[src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"]
{
  display: none;
}
h4
{
  margin-top: 100px;
  text-align: center;
  color: white;
}
.panel
{
  margin-top: 40px;
}
.text-center
{
  margin-top: 20px;
  margin-bottom: 20px;
}

.fa
{
	font-size: 21px;
	
}

.btn
{
	margin-top: 20px;
}

.update
{
	text-align: center;
	color: #9b9996
}

hr
{
	width: 40%;
}



.fa-clock-o
{
	font-size:16px; 
	color: #3d767c;
}

.fa-user
{
	font-size: 16px;
	color: #3d767c;
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
<div class="container">

	<h4>Box Balance</h4>
<div class="panel">  

  <div class="panel-body">

<div class="text-center">
<?php
session_start();
include("./database/db_connection.php");
$sql=mysqli_query($con, "SELECT Amount, last_updated, Addedby FROM `current_boxbalance`");
		if(mysqli_num_rows($sql)==0)
			{


?>


<p><i class="fa fa-inr" aria-hidden="true">.0</i></p>

<p>Insufficient Box Balance</p>

<?php
	}
	else {


		$row=mysqli_fetch_assoc($sql);
		$amount=$row['Amount'];
		$last_updated=$row['last_updated'];
		$addedby=$row['Addedby'];
?>

	<h3><b><i class="fa fa-inr" aria-hidden="true"></i>. <?php echo "$amount"; ?></b></h3></div></div></div></div>
	<div class="update"><hr>
	<p class="last_update">Last update</p><p><i class="fa fa-clock-o" aria-hidden="true"></i>&emsp;<?php echo "$last_updated"; ?></p> <p><i class="fa fa-user" aria-hidden="true"></i>&emsp;<b><?php echo "$addedby"; ?></b></p><hr>

	<?php

}
		?>




<a href='home.php'><< Back</a></div>

</body>
</html>