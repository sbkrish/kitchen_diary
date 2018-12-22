<?php
session_start();
date_default_timezone_set('Asia/Kolkata');
$today = date('d-M-y');
$month = date('M');
$year  = date('Y');

$name=$_SESSION['name'];
$user=implode($name);
$incharge=$_SESSION['incharge'];

if(!empty($_POST))
{



	if(isset($_POST['addrent']))
	{
					
		if($user==$incharge && $user!="")

		{
			include("./database/db_connection.php");
				$sql=mysqli_query($con, "SELECT Name FROM roomrent_once WHERE Month='$month' AND Year='$year'");
				if(!(mysqli_num_rows($sql)>=5))
				{
					header("location:addrentonce.php");
				}
				else
				{
					header("location:error.php");
				}
		}
		else
			{
			  echo "<br><br><br>";
			  echo "Sorry $user, <p>You are not allowed to access this page.</p><p> This month inchargeable person only can access</p>";

			  echo "<a href=roomrent.php>Go Back</a>";
			}
	
	}

		else
		{
			header("location:error.php");
		}

}


?>