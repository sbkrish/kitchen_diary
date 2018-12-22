<?php
session_start();
$remove=$_POST['holiday_hungers'];
$_SESSION['remove']=$_POST['holiday_hungers'];

if(!empty($_POST))
{

	if(isset($_POST['holiday_hungers']))
	{
			
		include("./database/db_connection.php");
		$query=mysqli_query($con, "SELECT uname FROM user WHERE uname='$remove'");
		if(mysqli_num_rows($query)>=1)
			{

			$sql="DELETE FROM `user` WHERE `user`.`uname`='$remove'";
			if($con->Query($sql)===TRUE) 	
			{
				header("location:remove_success.php");

			}
		
		}
			else
			{
				header('location:nouser.php');
			}

}
}
?>