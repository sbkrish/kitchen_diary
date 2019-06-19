<?php
session_start();

$_SESSION['name'] = $_POST;
$select=$_POST;
$user=implode($select);



if(!empty($_POST))
{

		include("./database/db_connection.php");
		$review=mysqli_query($con, "SELECT Incharge FROM `incharge` ORDER BY id DESC LIMIT 1");
		$row=mysqli_fetch_assoc($review);
		$incharge=$row['Incharge'];
		$_SESSION['incharge']=$incharge;



	if(isset($_POST['name']))
	{
		
		$sql=mysqli_query($con, "SELECT password FROM user WHERE alias='$user'");
		$query = mysqli_fetch_array($sql);
		if($query[0] != null || $query[0] !="" )
			{
				echo '<script> window.location.href="enter_password.php"</script>';
			}

		else
			{
				echo '<script> window.location.href="createpin.php"</script>';
			}
	}
	
	}
	?>