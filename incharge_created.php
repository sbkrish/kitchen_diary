<?php
session_start();
date_default_timezone_set('Asia/Kolkata');
$month=date('M');
$year=date('Y');
$incharge=$_POST['name'];
$_SESSION['incharge']=$_POST['name'];

if(!empty($_POST))
{

	if(isset($_POST['entry']))
	{
			
		include("./database/db_connection.php");

			$sql="INSERT INTO `incharge` (`Month`, `Year`, `Incharge`) VALUES ('$month', '$year', '$incharge')";
			if($con->Query($sql)===TRUE) 	
			{
				echo '<script> window.location.href="incharge_success.php"</script>';

			}
		
			else
			{
				echo "Error".$sql."<br>".$con->error;
			}

}
}
?>