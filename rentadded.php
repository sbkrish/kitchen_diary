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

	<title>Rent Added Error</title>
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
  margin-top: 160px;
  border-radius: 2px;
}

.panel_add
{
  margin-top: 10px;
  border-radius: 2px;
}

.text-center
{
  margin-top: 0px;
  margin-bottom: 0px;
}

.fa
{
	font-size: 58px;
	color: red;
}

.btn
{
	margin-top: 0px;
 
  font-weight: bold;

}
.data
{
	color: brown;
	font-weight: bold;
	
}
hr
{
	width: 100%;
	border: 0.5px solid grey;
}

.cl
{
	margin-top: 40px;
}

.remain
{
	color: white;
	font-weight: bold;
	margin-top: 160px;
	text-align: center;
}

</style>
</head>
<body>


<?php
//session_start();

$name=$_SESSION['name'];
$user=implode($name);
date_default_timezone_set('Asia/Kolkata');
$today = date('d-M-y');
$month = date('M');
$year  = date('Y');

if(!empty($_POST))
{



	if(isset($_POST['entry']))
	{
			
		include("./database/db_connection.php");

			$renter=mysqli_real_escape_string($con,$_POST["renter"]);
			$rent=mysqli_real_escape_string($con,$_POST["rentamount"]);

			$que=mysqli_query($con,"SELECT SUM(Amount) AS total_rent FROM `roomrent` WHERE Month='$month' AND Year=$year AND Name='$renter'");
			$row=mysqli_fetch_assoc($que);
			$total_rent=$row['total_rent'];

			$que2=mysqli_query($con,"SELECT Amount FROM `roomrent_once` WHERE Name='$renter' AND Month='$month' AND Year=$year");
			$row2=mysqli_fetch_assoc($que2);
			$allocated_rent=$row2['Amount'];

			$entire_amount=$total_rent+$rent;

			$remaining_amount=$allocated_rent-$total_rent;

			if($remaining_amount==0)
			{
	?>
				<div class="container">
	
	<!-- <p class="remain"><?php echo "$renter gave the full rent amount of Rs. $allocated_rent for this month";?></p>    -->


<div class="panel">  

  <div class="panel-body">

<div class="text-center">

<i class="fa fa-ban" aria-hidden="true"></i>

<p class="data"><?php echo "$renter gave the full rent amount of Rs. $allocated_rent for this month";?></p>

</div></div></div></div>
<div class="text-center">
<div class="cl">
<a  href="roomrent.php" style="text-decoration: none">Go to Room Rent</a>
</div>
</div>

<?php
			}

			else if ($entire_amount>$allocated_rent)
			 {
				# code...
	?>

			<div class="container">
	
	<p class="remain">Balance Rent Amount for <?php echo"$renter : Rs.$remaining_amount"; ?></p>   


<div class="panel panel_add">  

  <div class="panel-body">

<div class="text-center">

<i class="fa fa-ban" aria-hidden="true"></i>

<p class="data">You are entering more than the rent amount</p>

</div></div></div></div>
<div class="text-center">
<button class="btn btn-error" onclick="location.href='givenby.php'">Modify Rent Amount</button>
<div class="cl">
<a  href="roomrent.php" style="text-decoration: none">Go to Room Rent</a>
</div>
</div>




	<?php			
			}

			else
			{
						
			$sql="INSERT INTO `roomrent` (`Date`, `Month`, `Year`, `Name`, `Amount`, `Addedby` ) VALUES ('$today', '$month', '$year', '$renter', '$rent', '$user')";
			
			if($con->Query($sql)===TRUE) 	
			{
				echo '<script> window.location.href="rentadded_success.php"</script>';

			}
		
			else
			{
				echo "Error".$sql."<br>".$con->error;
			}


			} 
			
	}
}

?>


</body>
</html>
