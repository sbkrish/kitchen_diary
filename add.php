<?php
session_start();
date_default_timezone_set('Asia/Kolkata');
$updated_time= date('d-M-y h:i a', time());

$name = $_SESSION['name'];
$user = implode($name);
$item=$_SESSION["Item"];
$quantity=$_SESSION["Quantity"];
$price=$_SESSION["Price"];

if(!empty($_POST))
{



	if(isset($_POST['entry']))
	{
			
						include("./database/db_connection.php");
		/*if($con->connect_error)
		{
			die('Connect Error:'.$con->connect_errorno.':'.$con->connect_error);
		}*/

			$date=mysqli_real_escape_string($con,$_SESSION["date"]);
			$m=DateTime::createFromFormat('!d-M-y', $date);
			$month=strtoupper($m->format('M'));
			$year=strtoupper($m->format('Y'));
		

			// $item=mysqli_real_escape_string($con,$_SESSION["Item"]);
			// $quantity=mysqli_real_escape_string($con,$_SESSION["Quantity"]);
			// $price=mysqli_real_escape_string($con,$_SESSION["Price"]);
			$products=mysqli_real_escape_string($con,$_SESSION["products"]);
			
			for($i=0; $i<$products; $i++)
			{
				$sql=mysqli_query($con,"INSERT INTO `daily_purchase` (`Date`, `Item`, `Quantity`, `Price`, `Buyer`, `Month`, `Year`) VALUES ('$date', '$item[$i]', '$quantity[$i]', '$price[$i]', '$user', '$month', '$year')");
			}

			if($sql===TRUE) 	
			{
				header("location:success.php");
			}
		
			else
			{
				echo "Error".$sql."<br>".$con->error;
			}

		}
	}
			


?>



