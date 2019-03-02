<?php
header('Content-type:application/json;charset=utf-8');
$messenger_id = $_GET['messenger_id'];
include("../database/db_connection.php");
if ($messenger_id != "" || $messenger_id != null) {
	$sql = mysqli_query($con,"INSERT INTO `daily_purchase` (`Date`, `Item`, `Quantity`, `Price`, `Buyer`, `Month`, `Year`, `Messenger_flag`) SELECT `Date`, `Item`, `Quantity`, `Price`, `Buyer`, `Month`, `Year`, 1 FROM `save_item_temp`");

    if ($sql) {
	# code...
if ($sql) {
	# code...
		
	$message = "success";
		$response = array();
		$post  = array('reply' => $message);
		$response['messages'] = $post;
		$fp = fopen('results.php', 'w');
fwrite($fp, json_encode($response));
fclose($fp);

}

}
}
?>