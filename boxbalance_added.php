<?php
session_start();
date_default_timezone_set('Asia/Kolkata');
$today=date('d-M-y');
$updated_time= date('d-M-y h:i a', time());
$month=date('M');
$year=date('Y');

$name=$_SESSION['name'];
$user=implode($name);
$entered_amount = $_SESSION['boxamount'];

include("./database/db_connection.php");

if(!empty($_POST))
{

	if(isset($_POST['correct']))
	{
		//$sql="INSERT INTO `room_amount_to_box` (`Date`, `Month`, `Year`, `Amount`, `Added By`) VALUES ('$today', '$month', '$year', '$entered_amount', '$user')";
		
		
			$check=mysqli_query($con, "SELECT `id`, `Amount`, `last_updated` FROM `current_boxbalance`");
			$row=mysqli_fetch_assoc($check);
			$available_box_amount=$row['Amount'];

			$check2=mysqli_query($con, "SELECT SUM(Amount) AS `amount_spent` FROM `room_amount_to_box` WHERE `Year`=$year AND `Month`='$month'");
			$row2=mysqli_fetch_assoc($check2);
			$total_room_amount_spent=$row2['amount_spent'];


			//$total_amount=$available_box_amount+$entered_amount;
			$total_amount=$total_room_amount_spent+$entered_amount;
	/*echo "total_room_amount_spent=$total_room_amount_spent <br>";
			echo "total_amount=$total_amount <br>";
			echo "entered_amount=$entered_amount <br>";*/
			
			


			if(mysqli_num_rows($check)>=1)
				{

					#total available balance in room
					$retrive=mysqli_query($con, "SELECT SUM(t.Amount) AS total_available_balance FROM (SELECT Amount FROM `roomrent` WHERE Month='$month' AND Year=$year UNION ALL 							SELECT Balance FROM lastmonth_balance WHERE Month='$month' AND Year=$year) t ");
					$row3=mysqli_fetch_assoc($retrive);
					$roomrent_amount=$row3['total_available_balance'];//this amount always constant

			//echo "roomrent_amount=$roomrent_amount";

				if($total_amount>$roomrent_amount)
						{

						echo '<script> window.location.href="noamount.php"</script>';
							//echo "check";
						}
					else
					{
						$sql="INSERT INTO `room_amount_to_box` (`Date`, `Month`, `Year`, `Amount`, `Added By`) VALUES ('$today', '$month', '$year', '$entered_amount', '$user')";
			
					if ($con->query($sql)===TRUE) {
						# code...
					
					$query1="UPDATE `current_boxbalance` SET `Amount`=Amount+$entered_amount, `last_updated`='$updated_time', `Addedby`='$user'";

					if($con->query($query1)===TRUE) 	
							{

								
								
								echo '<script> window.location.href="boxbalance_success.php"</script>';

							}
						}
					}}

				else
				{

					$sql="INSERT INTO `room_amount_to_box` (`Date`, `Month`, `Year`, `Amount`, `Added By`) VALUES ('$today', '$month', '$year', '$entered_amount', '$user')";
			if ($con->query($sql)===TRUE) {
						# code...
					$insert="INSERT INTO `current_boxbalance` (`Amount`, `last_updated`, `Addedby`) VALUES ('$entered_amount', '$updated_time', '$user')";
					if($con->query($insert)===TRUE) 	
				{
				echo '<script> window.location.href="boxbalance_success.php"</script>';

				}

				}}
				
				
	
			
			
	

}
}

?>