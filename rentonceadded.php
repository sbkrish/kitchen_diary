<?php
session_start();
date_default_timezone_set('Asia/Kolkata');
$today = date('d-M-y');
$month = date('M');
$year  = date('Y');

if(!empty($_POST))
{



	if(isset($_POST['entry']))
	{
			
						include("./database/db_connection.php");

			$Mani=mysqli_real_escape_string($con,$_SESSION["Anbumani"]);
			$Bala=mysqli_real_escape_string($con,$_SESSION["Balakrishnan"]);
			$Dinesh=mysqli_real_escape_string($con,$_SESSION["Dineshkumar"]);
			$Ramesh=mysqli_real_escape_string($con,$_SESSION["Ramesh"]);
			$Sathish=mysqli_real_escape_string($con,$_SESSION["Sathishkumar"]);
			
			
			
			
			

			$rent1=mysqli_real_escape_string($con,$_SESSION["rent1"]);
			$rent2=mysqli_real_escape_string($con,$_SESSION["rent2"]);
			$rent3=mysqli_real_escape_string($con,$_SESSION["rent3"]);
			$rent4=mysqli_real_escape_string($con,$_SESSION["rent4"]);
			$rent5=mysqli_real_escape_string($con,$_SESSION["rent5"]);
			
			$user=mysqli_real_escape_string($con,$_SESSION["name"]);

						
			$sql="INSERT INTO `roomrent_once` (`Date`, `Month`, `Year`, `Name`, `Amount`, `Incharge` ) VALUES ('$today', '$month', '$year', '$Mani', '$rent5', '$user'), ('$today', '$month', '$year', '$Bala', '$rent1', '$user'), ('$today', '$month', '$year', '$Dinesh', '$rent2', '$user'), ('$today', '$month', '$year', '$Ramesh', '$rent3', '$user'), ('$today', '$month', '$year', '$Sathish', '$rent4', '$user')";
			
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



