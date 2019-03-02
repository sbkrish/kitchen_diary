<?php
include("../database/db_connection.php");
$messenger_id = $_GET['messenger_id'];
if ($messenger_id != "" || $messenger_id != null) {

	if ($messenger_id == 2596033687081021) {
		
		$user = 'Balakrishnan';
	} elseif ($messenger_id == 22) {
		
		$user = 'Anbumani';
	} elseif ($messenger_id == 2222389234457996) {
		
		$user = 'Dineshkumar';
	} elseif ($messenger_id == 2920505901300307) {
		
		$user = 'Ramesh';
	} elseif ($messenger_id == 2179510055426408) {
		
		$user = 'Sathishkumar';
	}
	$sql = mysqli_query($con, "DELETE FROM `save_item_temp` WHERE `Buyer` = '$user'");
}

?>