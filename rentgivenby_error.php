<?php
session_start();

$name=$_SESSION['name'];
$user=implode($name);
$incharge=$_SESSION['incharge'];
date_default_timezone_set('Asia/Kolkata');
$month=date('M');
$year=date('Y');

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
 	 <meta name="viewport" content="width=device-width, initial-scale=1">
 	 <link rel="stylesheet" href="css/bootstrap.min.css">
  	<link rel="stylesheet" href="css/font-awesome.min.css">	
	
	<title>Error Rent Given By</title>
	<style type="text/css">
    @font-face{
    font-family: 'Varela Round', sans-serif;
    src: url(VarelaRound-Regular.ttf);
      }

body {
  background: #222222;
}
h4
{
  margin-top: 100px;
  text-align: center;
  color: grey;
}
.panel
{
  margin-top: 30px;
  margin-bottom: ;
}
.text-center
{
  margin-top: 0px;
  margin-bottom: 0px;
}

.fa
{
	font-size: 38px;
	color: #8c000e;
}

.btn
{
	margin-top: 20px;

}

.panel-body
{
	margin-top: 10px;
	margin-bottom: 0px;
}
</style>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
     <a class="navbar-brand" style="text-align: right;"><font color="#134756"><b>Kitchen Diary</b></font></a> 
       <ul class="nav navbar-nav">
        <li class=""><a href="home.php" style="text-align: right;" class="navibar">Home</a></li>
    
      </ul>
    
    </div>
  </div>
</nav>
<div class="container">
	<h4>Restricted</h4>
<div class="panel">  

  <div class="panel-body">

<div class="text-center">

	<i class="fa fa-ban" aria-hidden="true"></i><hr>

<?php

if(!empty($_POST))
{



	if(isset($_POST['rentgivenby']))
	{
							
			include("./database/db_connection.php");
			if($user==$incharge && $user!="")
			{
					$sql=mysqli_query($con, "SELECT Name FROM roomrent_once WHERE Month='$month' AND Year='$year'");
					if(mysqli_num_rows($sql)>=5)
					{
						header("location:givenby.php");
					}
					else
					{
						header("location:rentonce_first.php");
					}
			}		
			else
			{
			  echo "Sorry $user, <p>You are not allowed to access this page.</p><p> This month inchargeable person only can access</p>";
			}
	}
}	
?>
</div></div></div></div><div class="text-center">
<a href='roomrent.php'"> Go Back</a>
</div>
</body>
</html>

