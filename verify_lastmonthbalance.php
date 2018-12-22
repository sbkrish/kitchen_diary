<?php
	session_start();
date_default_timezone_set('Asia/Kolkata');
$today = date('d-M-y');
$month = date('M');
$year  = date('Y');

$name = $_SESSION['name'];
$user = implode($name);

$balance=mysqli_real_escape_string($con,$_POST['balance']);


if(!empty($_POST))
{



	if(isset($_POST['entry']))
	{
			
						include("./database/db_connection.php");
						$balance=mysqli_real_escape_string($con,$_POST['balance']);
		$sql="INSERT INTO lastmonth_balance (`Date`, `Month`, `Year`, `Balance`, `Incharge` ) VALUES ('$today', '$month', '$year', '$balance', '$user')";


		if($con->Query($sql)===TRUE) 	
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



