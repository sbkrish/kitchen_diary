<?php
session_start();
date_default_timezone_set('Asia/Kolkata');
$today = date('d-M-y');
$month = date('M');
$year  = date('Y');
$entered_amount=$_POST['boxamount'];
$_SESSION['boxamount']=$_POST['boxamount'];
$roomrent='Room Rent Amount';
$ownmoney='My Own Money';

$name=$_SESSION['name'];
$user=implode($name);
$incharge='Murugaiyan';

include("./database/db_connection.php");


if(!empty($_POST))
{

	if(isset($_POST['submit']))
	{
		if($_POST['whoseamount']==$roomrent)
		{
		
		$query=mysqli_query($con, "SELECT SUM(t.Amount) AS total_available_balance FROM (SELECT Amount FROM `roomrent` WHERE Month='$month' AND Year=$year UNION ALL 							SELECT Balance FROM lastmonth_balance WHERE Month='$month' AND Year=$year) t ");
		$row=mysqli_fetch_assoc($query);
		$roomrent_amount=$row['total_available_balance'];

		/*$sql=mysqli_query($con, "SELECT SUM(t.Price) AS total_of_daily_purchase FROM (SELECT Price FROM `daily_purchase` WHERE Month='$month' AND Year=$year) t");
		$row2=mysqli_fetch_assoc($sql);
		$daily_purchase_amount=$row2['total_of_daily_purchase'];

		$analyse=mysqli_query($con, "SELECT SUM(`Contribution Amount`) AS total_contribution FROM `individual_contribute` WHERE Year=$year AND Month='$month'");
		$row3=mysqli_fetch_assoc($analyse);
		$total_contribution=$row3['total_contribution'];*/

		$sql=mysqli_query($con, "SELECT SUM(Amount) AS roomrent_spent FROM `room_amount_to_box` WHERE Month='$month' AND Year=$year");
		$row2=mysqli_fetch_assoc($sql);
		$total_roomrent_spent=$row2['roomrent_spent'];

		$total=$roomrent_amount - $total_roomrent_spent;
		//$total=$roomrent_amount + $total_contribution - $daily_purchase_amount;



		/*echo "total_available_balance=$roomrent_amount <br>";
		echo "total_of_daily_purchase=$daily_purchase_amount <br>";
		echo "total_contribution=$total_contribution <br>";
		echo "total=$total"; */

		if($entered_amount > $total)
		{

			
			header("location:noamount.php");

		}
	
	else
	{
		header("location:reverify.php");
	}

}
else

			if($_POST['whoseamount']==$ownmoney)
			{
				header("location:myowncontribution.php"); 
			}
		
}
}
?>
