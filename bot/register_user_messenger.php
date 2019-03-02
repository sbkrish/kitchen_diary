<?php

include("../database/db_connection.php");
date_default_timezone_set('Asia/Kolkata');
$date= date('d-M-y h:i a', time());
$messenger_id = $_GET['messenger_id'];
$first_name = $_GET['first_name'];

if($messenger_id != null || $messenger_id != "") {

$sql=mysqli_query($con,"INSERT INTO `user_messenger` (`name`, `messenger_id`, `date`) VALUES ('$first_name', $messenger_id, '$date')");

}

?>