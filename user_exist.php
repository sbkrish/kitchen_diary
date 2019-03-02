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
		
		$sql=mysqli_query($con, "SELECT uname FROM user WHERE alias='$user'");
		
		if(mysqli_num_rows($sql)>=1)
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