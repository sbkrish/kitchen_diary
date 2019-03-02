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
	<title>My Contribution</title>
	<style type="text/css">
    @font-face{
    font-family: 'Varela Round', sans-serif;
    src: url(VarelaRound-Regular.ttf);
      }

body {
  background:
linear-gradient(27deg, #151515 5px, transparent 5px) 0 5px,
linear-gradient(207deg, #151515 5px, transparent 5px) 10px 0px,
linear-gradient(27deg, #222 5px, transparent 5px) 0px 10px,
linear-gradient(207deg, #222 5px, transparent 5px) 10px 5px,
linear-gradient(90deg, #1b1b1b 10px, transparent 10px),
linear-gradient(#1d1d1d 25%, #1a1a1a 25%, #1a1a1a 50%, transparent 50%, transparent 75%, #242424 75%, #242424);
background-color: #131313;
background-size: 20px 20px;
font-size: 12px;
}
img[src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"]
{
  display: none;
}
h4
{
  margin-top: 100px;
  text-align: center;
  color: grey;
  font-size: 14px;
}
.panel
{
  margin-top: 30px;
}
.text-center
{
  margin-top: 0px;
  margin-bottom: 0px;
}

.fa
{
	font-size: 18px;
	color: white;
}

.btn
{
	margin-top: 20px;

}

.in
{
		text-align: center;
		border-color: red;
		font-weight: bold;
		border-radius: 2px;
		border: 2px;

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
    font-size: 12px;
  }
}


.Prior {
  font-family: 'Varela Round', sans-serif;
  background-color: #33568e;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: block;
    font-size: 20px;
    margin: 4px 2px;
    margin-left: 0px;
    cursor: pointer;
    width: 14.5em;
}
hr
{
	width: 100%;
	border: 0.5px solid #d1d1d1;
	margin-bottom: -30px;
}
td
{
	width: 10%;
}
th
{
	text-align: center;
	background-color:;
	color: black;
}

.detailed
{
	text-align: center;
	font-size: 12px;
	color: white;
}

.back
{
	margin-bottom: 100px;
	text-align: center;
}

.month
{
	font-size: 12px;
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
<div class="containe">
<h4>Overall Contribution</h4>
<div class="panel">  

  <div class="panel-body">

<div class="text-center">




<?php
//session_start();
date_default_timezone_set('Asia/Kolkata');
$year=date('Y');

$which_month=$_POST['view_contribution'];
$_SESSION["which_month"]=$which_month;

include("./database/db_connection.php");
if(isset($_POST['contribution']))
{

if($which_month=='This Month')
{
	$month=date('M');

}
else
{
	$month=date('M', strtotime('-1 Month'));
	if($month=='Dec')
	{
		$year=date('Y',strtotime('-1 year'));
	}
}
$sql=mysqli_query($con, "SELECT `Buyer`, SUM(`Price`) as `Total_Expense` FROM `daily_purchase` WHERE Month='$month' AND Year='$year' GROUP BY `Buyer`");

if(!($sql))
	{

		echo "Error".$sql."<br>".$con->error;
	}
	else
	{


			if(mysqli_num_rows($sql)==0)
				{
				
					echo 'No one bought anything as of now for this month. Is it true?!!';
				
				}
				
			else
			{

				?>
				
				<p class="month">Month: <b><?php echo "$month".'-'."$year";?></b></p>



				<table class="fine" border="">
	<thead>		
		<tr>
			<th>Name</th>
			<th>Amount</th>	
		</tr>
	</thead>
	<tbody>

	<?php

				while ($jack=mysqli_fetch_assoc($sql)) 
				{
								echo "<tr><td class='first'>{$jack['Buyer']}</td><td class='second'>{$jack['Total_Expense']}</td></tr>\n";
				}

				$total=mysqli_query($con, "SELECT SUM(`Price`) AS `total_amount` FROM `daily_purchase` WHERE Month='$month' AND Year='$year'");
				$row=mysqli_fetch_assoc($total);
				$total_amount=$row['total_amount'];
				?>
</tbody></table>
				<p>Total Expenses(as of now): <b>Rs.<?php echo "$total_amount";?></b></p>
			
				
			<?php
			}

	}
}

?>





	
</div></div></div>

<p class="detailed">For Day wise Contribution <a href="day_wise_contribution.php">click here</a></p>
</div>
<div class="back">
<a href='selectview.php'"><< Back</a></div>

</body></html>

