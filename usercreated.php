<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User Created</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<style type="text/css">
		@font-face{
		font-family: 'Varela Round';
		src: url(VarelaRound-Regular.ttf);
			}



body {
  background-color: #7d1a9b;  
}
img[src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"]
{
  display: none;
}

.panel
{	
	margin-top: 30px;
	padding-top: 0px;
}

.panel-body
{
	margin-top: -15px;
}

.fa
{
	font-size: 38px;
	color: #e3a5e5;
}

h4
{
	margin-top: 120px;
	text-align: center;
}

	</style>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
        <h3 align="center">Kitchen diary</h3>
    </div>
  </div>
</nav>


<div class="container">
							<h4><i class="fa fa-smile-o" aria-hidden="true"></i></h4>
							
							<div class="panel panel-primary">  
							



<?php
//session_start();
$name=$_SESSION['name'];
$user=implode($name);


include("./database/db_connection.php");
if(isset($_POST['submit']))
{

$password=mysqli_real_escape_string($con,$_POST["password"]);
$encrypt=sha1($password);
$sql=mysqli_query($con, "SELECT password FROM user WHERE uname='$user'");
		
		if(mysqli_num_rows($sql)>=1)
		{
			
			echo "Strictly Not allowed and your system will be hacked soon";

		}

		else
		{
			$query="INSERT INTO `user` ( `uname`, `password`) VALUES ('$user', '$encrypt')";
			$result=mysqli_query($con,$query);
				if($result)
					{
						?>	<div class="panel-heading deep-orange lighten-1 white-text" align="center">Welcome</div>
							<div class="panel-body">

							<div id="center_button">
							<br>

							<p align=center>Hi</p> <b>
							<?php echo"<p align=center>$user</p></b>"; ?>
							<p align=center>Your account has been created Successfully</p>
							<p align=center>Welcome to Kitchen Diary</p>
							<?php
					}
				
		}
	

}
$con->close();

?>
<div class="text-center">
	
	<br><button onclick="location.href='home.php'" class="btn btn-success"> Access Diary </button>
	

</div></div></div></div>
</div>
</body>
</html>