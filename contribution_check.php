<?php
error_reporting();
session_start();
$entered_amount=$_SESSION['boxamount'];
date_default_timezone_set('Asia/Kolkata');
$today=date('d-M-y');
$updated_time= date('d-M-y h:i a', time());
$time=date('h:i a', time());
$month=date('M');
$year=date('Y');

$name=$_SESSION['name'];
$user=implode($name);
$reason=$_SESSION['reason'];

$optone='No Amount in Box';


include("./database/db_connection.php");


	/*if(isset($_POST['submit']))
	{*/
		if($reason==$optone)
		{
		
		$query=mysqli_query($con, "SELECT Amount FROM `current_boxbalance`");
		$row=mysqli_fetch_assoc($query);
		$available_amount_in_box=$row['Amount'];
		if(mysqli_num_rows($query)==0)
				{
					$sql="INSERT INTO `individual_contribute` (`Date`, `Time`, `Month`, `Year`, `Contribution Amount`, `Whose Amount`, `Reason`) VALUES ('$today', '$time', '$month', '$year', '$entered_amount', '$user', '$reason')";

					if($con->Query($sql)===TRUE)
					{
						$insert="INSERT INTO `current_boxbalance` (`Amount`, `last_updated`, `Addedby`) VALUES ('$entered_amount', '$updated_time', '$user')";
					if($con->Query($insert)===TRUE) 	
							{
							echo '<script> window.location.href="boxbalance_success.php"</script>';

							}

					} 	
				}

			else		
			if($available_amount_in_box==0)

			{
				$contribute="INSERT INTO `individual_contribute` (`Date`, `Time`, `Month`, `Year`, `Contribution Amount`, `Whose Amount`, `Reason`) VALUES ('$today', '$time', '$month', '$year', '$entered_amount', '$user', '$reason')";

				if($con->Query($contribute)===TRUE)
					{

						$query2="UPDATE `current_boxbalance` SET `Amount`=Amount+$entered_amount, `last_updated`='$updated_time', `Addedby`='$user'";
					if($con->Query($query2)===TRUE) 	
							{
							echo '<script> window.location.href="boxbalance_success.php"</script>';

							}
					}

			}
			
			else
			{
				
				echo '<script> window.location.href="recheck.php"</script>';
			
			}


		}
			
		else
		{
			$que=mysqli_query($con, "SELECT Amount FROM `current_boxbalance`");
			if(mysqli_num_rows($que)==0)
				{
					$sqli="INSERT INTO `individual_contribute` (`Date`, `Time`, `Month`, `Year`, `Contribution Amount`, `Whose Amount`, `Reason`) VALUES ('$today', '$time', '$month', '$year', '$entered_amount', '$user', '$reason')";

					if($con->Query($sqli)===TRUE)
					{
						$ins="INSERT INTO `current_boxbalance` (`Amount`, `last_updated`, `Addedby`) VALUES ('$entered_amount', '$updated_time', '$user')";
					if($con->Query($ins)===TRUE) 	
							{
							echo '<script> window.location.href="boxbalance_success.php"</script>';

							}

					} 	
				}

			else		
			
				{
					$contri="INSERT INTO `individual_contribute` (`Date`, `Time`, `Month`, `Year`, `Contribution Amount`, `Whose Amount`, `Reason`) VALUES ('$today', '$time', '$month', '$year', '$entered_amount', '$user', '$reason')";

					if($con->Query($contri)===TRUE)
					{

						$query3="UPDATE `current_boxbalance` SET `Amount`=Amount+$entered_amount, `last_updated`='$updated_time', `Addedby`='$user'";
					if($con->Query($query3)===TRUE) 	
							{
							echo '<script> window.location.href="boxbalance_success.php"</script>';

							}
					}

				}
			}


	//}


?>