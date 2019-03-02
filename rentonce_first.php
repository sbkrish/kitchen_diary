<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
 	 <meta name="viewport" content="width=device-width, initial-scale=1">
 	 <link rel="stylesheet" href="css/bootstrap.min.css">
  	<link rel="stylesheet" href="css/font-awesome.min.css">	

	<title>Allocated Rent added or not</title>

<style type="text/css">
    @font-face{
    font-family: 'Varela Round', sans-serif;
    src: url(VarelaRound-Regular.ttf);
      }

body {
  background: #222222;
}
img[src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"]
{
  display: none;
}
h4
{
  margin-top: 160px;
  text-align: center;
  color: white;
}
.panel
{
  margin-top: 30px;
  font-size: 16px;
  font-weight: bold;
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
	<h4>Room Incharge</h4>
<div class="panel">  

  <div class="panel-body">

<div class="text-center">
<form method="post" action="addrentonce_check.php">
	<i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
<p>You have not yet done Rent allocation for this Month.
So kindly complete it fisrt.</p>
</div></div></div></div><hr>
<div class="text-center">
<button class="btn btn-info" name="addrent">Goto Rent Allocation</button>
</div>
</form>
</body>
</html>
