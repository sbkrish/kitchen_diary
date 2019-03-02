<?php
include("../database/db_connection.php");
date_default_timezone_set('Asia/Kolkata');

$messenger_id = $_GET['messenger_id'];
$received_date = $_GET['date'];
$item_name = $_GET['item_name'];
$quantity = $_GET['quantity'];
$price = $_GET['item_price'];
$today = date('d-M-y');
$yesteday = date('d-M-y', strtotime('-1 days'));


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
}

if($received_date == 'Today') {
	$date = $today;
	$month =strtoupper(date('M'));
	$year = date('Y');
} elseif ($received_date == 'Yesterday') {
	$date = $yesteday;
	$month = strtoupper(date('M', strtotime('-1 days')));
	$year = date('Y', strtotime('-1 days'));
}

if ($received_date != null || $received_date !="") {
	$sql = mysqli_query($con,"INSERT INTO `save_item_temp` (`Date`, `Item`, `Quantity`, `Price`, `Buyer`, `Month`, `Year`) VALUES ('$date', '$item_name', '$quantity', '$price', '$user', '$month', '$year')");
}

/*if(!$sql) {
	echo "INSERT INTO `save_item_temp` (`Date`, `Item`, `Quantity`, `Price`, `Buyer`, `Month`, `Year`) VALUES ('$date', '$item_name', '$quantity', '$price', '$user', '$month', '$year')";
} else {
	echo "success";
}*/
?>
