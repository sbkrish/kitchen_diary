
<?php

include("../database/db_connection.php");

	$m_id =mysqli_real_escape_string($con, $_GET['messenger_user_id']);
	$date =mysqli_real_escape_string($con, $_GET['date']);
	$fn = mysqli_real_escape_string($con,$_GET['first_name']);
	$ln = mysqli_real_escape_string($con,$_GET['last_name']);
	$gender =mysqli_real_escape_string($con, $_GET['gender']);

	
	$sql=mysqli_query($con,"INSERT INTO `json_test` (`messenger_id`, `date`, `first_name`, `last_name`, `gender`) VALUES ('$m_id', '$date', '$fn', '$ln', '$gender')");
	
	if($sql===TRUE) 	
			{
				echo "success";
				echo "<br>";
				echo "INSERT INTO `json_test` (`messenger_id`, `date`, `firs_tname`, `last_name`, `gender`) VALUES ('$m_id', '$date', '$fn', '$ln', '$gender')";
			}
		
			else
			{
				echo "Error".$sql."<br>".$con->error;
				echo "<br>";
				
			}


	
?>
