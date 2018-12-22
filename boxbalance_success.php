<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
	
	<title>Individual Amount Added Success</title>
	<style type="text/css">
    @font-face{
    font-family: 'Varela Round', sans-serif;
    src: url(VarelaRound-Regular.ttf);
      }

body {
  background:  #7d1a9b;
}

.panel
{
  margin-top: 160px;
  font-size: 16px;
  font-weight: bold;
}
.text-center
{
  margin-top: 20px;
  margin-bottom: 20px;
}

.fa
{
	font-size: 60px;
	color: orange;
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
<div class="panel">  

  <div class="panel-body">

<div class="text-center">
<i class="fa fa-check-circle" aria-hidden="true"></i>
<p>Amount has been Added to the Box Successfully</p>
<button onclick="location.href='updated_box_balance.php'" class="btn btn-success">Check Box Balance</button>
<button onclick="location.href='enterpurchase.php'" class="btn btn-default"><< Go to Entry</button>
</div></div></div></div>
</body>
</html>