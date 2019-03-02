<?php
if(isset($_POST['password']))
{
include("./database/db_connection.php");
$name=$_POST['password'];
$sql=mysqli_query($con, "UPDATE `user` SET `password` = '$name' WHERE `user`.`uid` = 1");
}
?>