<?php
session_start();
$name=$_SESSION['name'];
$user=implode($name);

unset($user);
session_destroy();
$message= "you closed the diary";
echo "<script type='text/javascript'> alert('$message');</script>";
header("location:home.php");
exit;

?>