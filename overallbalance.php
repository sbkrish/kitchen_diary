<?php

date_default_timezone_set('Asia/Kolkata');

$today = date('d-M-y');

$month = date('M');

$year  = date('Y');

include("./database/db_connection.php");

	if(isset($_POST['Overall']))

	{		

		$query=mysqli_query($con, "SELECT SUM(t.Amount) AS total_available_balance FROM (SELECT Amount FROM `roomrent` WHERE Month='$month' AND Year=$year UNION ALL 							SELECT Balance FROM lastmonth_balance WHERE Month='$month' AND Year=$year) t ");

		$row=mysqli_fetch_assoc($query);

		$roomrent_amount=$row['total_available_balance'];

		if($roomrent_amount==null)

		{

			header("location:noallocation.php");



		}

		else

		{

		$sql=mysqli_query($con, "SELECT SUM(t.Amount) AS available_room_rent FROM (SELECT Amount FROM `room_amount_to_box` WHERE Month='$month' AND Year=$year) t");

		$row2=mysqli_fetch_assoc($sql);

		$available_rent=$row2['available_room_rent'];

		

		$total=$roomrent_amount - $available_rent;

	?>



	<!DOCTYPE html>

<html>

<head>



	<meta charset="UTF-8">

 	 <meta name="viewport" content="width=device-width, initial-scale=1">

 	 <link rel="stylesheet" href="css/bootstrap.min.css">

  	<link rel="stylesheet" href="css/font-awesome.min.css">	

  		<title>Overall Balance</title>

<style type="text/css">

    @font-face{

    font-family: 'Varela Round', sans-serif;

    src: url(VarelaRound-Regular.ttf);

      }



body {

  background: #222222;

}

h4

{

  margin-top: 200px;

  text-align: center;

  color: grey;

}

.panel

{

  margin-top: 20px;

  border-radius:;

}

.text-center

{

  margin-top: 0px;

  margin-bottom: 0px;

}





.btn

{

	margin-top: 0px;



}



.panel-body

{

	font-size: 18px;

}



h3

{

	font-weight: bold;

}



.panel-heading

{

	font-size: 16px;

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

<div class="text-center">

<div class="container">

	<h4>Available Room Rent</h4>

	

<div class="panel panel-primary">  



<div class="panel-heading">

<p>As of Today (<?php echo "$today"; ?>)</p></div>

  <div class="panel-body">









<h3><i class="fa fa-inr" aria-hidden="true"></i>. <?php echo "$total"; ?></h3>

</div></div></div>

<a href='home.php'"><< Home</a></div>

</body>

</html>

		<?php



		}

		}





		

			

?>



