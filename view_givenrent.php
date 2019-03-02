<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
<title>Given Rent</title>
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
  color: white;
}
.panel
{
  margin-top: 20px;
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
.total
{
	color: white;
	margin-bottom:  -20px;

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
	width:140%;
}

.in
{
		text-align: center;
		border-color: red;
		font-weight: bold;
}

th
{
	text-align: center;
	background-color: #284887;
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
<div class="containe">
<h4>Received Rent</h4>
<div class="panel">  

  <div class="panel-body">

<div class="text-center">


<?php
//session_start();
date_default_timezone_set('Asia/Kolkata');
$month=date('M');
$yr=date('Y');
include("./database/db_connection.php");
if(isset($_POST['givenrent']))
{

$sql=mysqli_query($con, "SELECT Name,Amount,Date,Addedby FROM `roomrent` WHERE Month='$month'");

if(!($sql))
	{

		echo "Error".$sql."<br>".$con->error;
	}
	else
	{


		?>

		<?php 

			if(mysqli_num_rows($sql)==0)
				{
				
				echo 'Rent is not yet received from anyone as of now.';
				
				}
				
			else
			{

				?>
			
				<p>Month: <b><?php echo "$month".'-'."$yr";?></b></p>



				<table border="1" class="fine">
	<thead>		
		<tr>
			<th>Name</th>
			<th>Amount</th>
			<th>Date</th>
			<th>Received By</th>
		</tr>
	</thead>
	<tbody>

	<?php
				while ($row=mysqli_fetch_assoc($sql)) 
				{

								echo "<tr><td>{$row['Name']}</td><td>{$row['Amount']}</td><td>{$row['Date']}</td><td>{$row['Addedby']}</td></tr>\n";
				}

				$total=mysqli_query($con, "SELECT SUM(Amount) AS `total_amount` FROM `roomrent` WHERE Month='$month'");
				$row2=mysqli_fetch_assoc($total);
				$total_amount=$row2['total_amount'];
			
				?>

				<p>Received Room Rent till date: Rs.<b><?php echo "$total_amount";?></b></p>
				
			<?php
			}

	}

}
?>





	</tbody>

</table>

</div></div></div></div>
<div class="text-center">
<a href='selectview.php'"><< Back</a></div>

</body></html>