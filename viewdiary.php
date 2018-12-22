<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
	<title>Select View</title>
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
h4
{
  margin-top: 100px;
  text-align: center;
  color: white;
}
.panel
{
  margin-top: 0px;
  font-size: ;
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

th
{
	text-align: center;
	background-color: #284887;
	color: white;
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
	width: 40%;
	border: 0.5px solid grey;
}


}
.amount
{
	color: white;
	margin-bottom: -20px;
	font-size: 20px;
	font-weight: bold;
	margin-top: -20px;
}

.table
{
	background-color: white;
}
.fa
{
	color: orange;
	font-size: 38px;
}
.date
{
	text-align: center;

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


<?php
session_start();

include("./database/db_connection.php");
$viewdate=mysqli_real_escape_string($con,$_POST['viewdate']);
$sql=mysqli_query($con, "SELECT Item,Quantity,Price,Buyer FROM `daily_purchase` WHERE `Date`='$viewdate' AND Price>0 AND Quantity>0");
if(!($sql))
	{

		echo "Error".$sql."<br>".$con->error;
	}
	else
	{


			if(mysqli_num_rows($sql)==0)
			{
				if(isset($_POST['viewdiary']))
				{
					?>
					<div class="container">
<h4>Today's Purchase</h4>
<div class="panel">  

  <div class="panel-body">

<div class="text-center">
	
					 <i class="fa fa-shopping-cart" aria-hidden="true"></i><hr><p style="font-size: 16px; font-weight: bold;"> Nothing has been bought Today!!!</p>
				<?php
				}
				else
				{
					?>
					<div class="container">
<h4>Purchase Detail</h4>
<div class="panel">  

  <div class="panel-body">

<div class="text-center">
<?php
					echo "<p>Hey Dude, I don't have any data for the selected Date.</p>";
				}
			}
			else
			{


?>
<div class="container">
<h4>Purchase Details</h4>
<div class="panel">  

  <div class="panel-body">

<div class="text-center">
<table border="1" class="fine">
	<thead>		
		<tr>
			<th>Item</th>
			<th>Quantity</th>
			<th>Price</th>
			<th>Purchased By</th>
		</tr>
	</thead>
	<tbody>
<?php
				
				while ($row=mysqli_fetch_assoc($sql)) 
				{


					echo "<tr><td>{$row['Item']}</td><td>{$row['Quantity']}</td><td>{$row['Price']}</td><td>{$row['Buyer']}</td></tr>\n";

				}

				$total=mysqli_query($con, "SELECT SUM(Price) AS `total_amount` FROM `daily_purchase` WHERE `Date`='$viewdate' AND `Quantity`>0 AND `Price`>0");
				$row=mysqli_fetch_assoc($total);
				$total_amount=$row['total_amount'];
			
					?>
					<p class="date">Date: <?php echo "$viewdate";?></p>
				</tbody>

</table>
			<p class="total">Total amount: <b> Rs. <?php echo "$total_amount";?></b></p>

				<?php
			}
		


	}


?>
		




	
</div></div></div></div>
<div class="text-center">

<a href='dateselectviewdiary.php'"><u>View another Date Purchase</u></a><br><br>
<a href='selectview.php'">Go Back</a></div>

</body></html>

