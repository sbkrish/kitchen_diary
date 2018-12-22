<?php
if(isset($_POST['entry']))
{
if($_POST['date' === "selectdate"])
{
	echo "you are missed to select the date";
	
}
else
{
	header("location:verifydailypurchase.php");
}
}

?>