<?php
session_start();
if(!empty($_POST))
{

	if(isset($_POST['entry']))
	{
			
						include("./database/db_connection.php");
		/*if($con->connect_error)
		{
			die('Connect Error:'.$con->connect_errorno.':'.$con->connect_error);
		}*/
			$item=$_SESSION['Nam'];
			$quantity=$_SESSION['Quan'];
			$price=$_SESSION['Pric'];
			$item2=$_SESSION['Nam2'];
			$quantity2=$_SESSION['Quan2'];
			$price2=$_SESSION['Pric2'];
			$item3=$_SESSION['Nam3'];
			$quantity3=$_SESSION['Quan3'];
			$price3=$_SESSION['Pric3'];
			$sql="INSERT INTO `daily_purchase` (`Item`, `Quantitry`, `Price`) VALUES ('$item', '$quantity', '$price'),('$item2', '$quantity2', '$price2'),('$item3', '$quantity3', '$price3')";
			
			if($con->Query($sql)===TRUE) 	
			{
				echo "Data Successfully Enterd";	
			}
			else
			{
				echo "Error".$sql."<br>".$con->error;
			}

		
			
	}
}

?>