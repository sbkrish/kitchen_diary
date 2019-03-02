<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <script type="text/javascript" src="js/jquery.js"></script>

<script type="text/javascript">
$(window).load(function() {
	$(".loader").fadeOut("slow");
})
</script>
	<title>view allocated rent</title>
<style type="text/css">
    @font-face{
    font-family: 'Varela Round', sans-serif;
    src: url(VarelaRound-Regular.ttf);
      }

body {
  background: #600735;
}
img[src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"]
{
  display: none;
}
h3
{
	margin-top: 20px;
	font-weight: bold;
	font-size: 30px;
}
h4
{
  margin-top: 40px;
  text-align: center;
  color: white;
}
.panel
{
  margin-top: 20px;
  margin-bottom:;
}
.text-center
{
  margin-top: 0px;
  margin-bottom: 0px;
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

th
{
	text-align: center;
}
.back
{
	color: #d686b0;
}
.verify
{
	margin-top: 40px;
}
.verify_date
{
	margin-bottom: -10px;
}

.table
{
	font-size: 16px;
}

.total
{
	font-size: 16px;
}

.fa
{
	font-size: 28px;
	color: ;
}

.data
{
	font-size: 16px;
	font-weight: bold;
}

.fa-smile-o
{
	color: orange;
	font-size: 48px;

}

.loader 
{
 position: fixed;
 left: 0px;
 top: 0px;
 width: 100%;
 height: 100%;
 z-index: 9999;
 background: url('img/lemon.gif') 50% 50% no-repeat rgb(249,249,249);
}

</style>
</head>
<body>
	<!--<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
     <a class="navbar-brand" style="text-align: right;"><font color="#134756"><b>Kitchen Diary</b></font></a> 
       <ul class="nav navbar-nav">
        <li class=""><a href="home.php" style="text-align: right;" class="navibar">Home</a></li>
    
      </ul>
    
    </div>
  </div>
</nav>-->
<div class="loader"></div>
<div class="container">




<?php
//session_start();
date_default_timezone_set('Asia/Kolkata');
$mon=date('M');
$yr=date('Y');
$next_mon=date('M',strtotime('+1 month'));
include("./database/db_connection.php");
if(isset($_POST['entry']))
{
?>
<h4>Allocated Rent</h4>
<div class="panel panel-primary">  

  <div class="panel-body">

<div class="text-center">
<?php
$month=mysqli_real_escape_string($con,$_POST['view_allocatedrent']);
$year=mysqli_real_escape_string($con,$_POST['select_year']);
$sql=mysqli_query($con, "SELECT Name,Amount,Incharge FROM `roomrent_once` WHERE Month='$month' AND Year='$year'");
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
				if ($month==$next_mon && $year==$yr ) {
						# code...
						echo "Dude! We will allocate the rent Next Month.";
					}
					else

				if($month==$mon)
				{
				echo '<p class="data">oops! The Amount is not yet allocated for this month. Just ask your Incharge</p>';
				
				}
				else
					if (in_array($month, array("Jan","Feb","Mar","Apr","May","Jun","Jul" )) && $year==2018) {
						# code...

						echo "<i class='fa fa-smile-o' aria-hidden='true'></i><p class=data>Dude! I born in August 2018 only. And I do not have the old records. If you really want, Please check the hand written diary.</p>";
					}
	
					else
				{
					echo "<i class='fa fa-hand-paper-o' aria-hidden=true></i><p class=data>Dude just wait! The month is not yet come.</p>";
				}		
			}
			else
			{

				?>
<div class="panel-heading">
<p><b><?php echo $month, - $year?> </b></p></div>
<table class="table">
	<thead>		
		<tr>
			<th>Name</th>
			<th>Amount</th>
		</tr>
	</thead>
	<tbody>

	<?php
				while ($row=mysqli_fetch_assoc($sql)) 
				{

								echo "<tr><td>{$row['Name']}</td><td>{$row['Amount']}</td></tr>\n";
				}

				$total=mysqli_query($con, "SELECT SUM(Amount) AS `total_amount` FROM `roomrent_once` WHERE Month='$month'");
				$row=mysqli_fetch_assoc($total);
				$total_amount=$row['total_amount'];
				?>

				<p class="total">Total Rent: <b>Rs.<?php echo "$total_amount";?></b></p>
				</tbody>

			<?php
			}

	}

}

	?>
	</table></div></div></div></div>

<div class="text-center">
<a href='selectview.php'" class="back"><u>Go Back</u></a></div>
		
</body>
</html>
