<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">	
	<title>Add Last Month Balance</title>
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
  color: white;
}

h6
{
	text-align: center;
	color: grey;
}
.panel
{
  margin-top: 30px;
}
.text-center
{
  margin-top: 0px;
  margin-bottom: 0px;
}

.fa
{
	font-size: 18px;
	color: black;
}

.btn
{
	margin-top: 20px;

}

.in
{
		text-align: center;
		border-color: black;
		font-weight: bold;
		border-radius: 1px;
		border-top: 0px;
		border-right: 0px;
		border-left: 0px;
		

}
@media screen and (max-width: 767px) {
  .fine {
    width: 109%;
    margin-top: 30px;
    margin-bottom: 20px;
    margin-left: -15px;
    overflow-y: hidden;
    overflow-x: auto;
    -ms-overflow-style: -ms-autohiding-scrollbar;
    border: 1px solid #dddddd;
    -webkit-overflow-scrolling: touch;
  }
}


.prior {
  font-family: 'Varela Round', sans-serif;
  background-color: #c67f0d;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: block;
    font-size: 20px;
    margin: 4px 2px;
    margin-left: 0px;
    cursor: pointer;
    width: 14.5em;
    margin-bottom: 20px;
}
hr
{
	width: 100%;
	border: 0.5px solid #d1d1d1;
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
<h4>Room Incharge</h4>
<h6><u>Last Month Balance</u></h6>
<div class="panel">  

  <div class="panel-body">

<div class="text-center">


<form method="post" action="verify_lastmonthbalance.php">
<i class="fa fa-inr" aria-hidden="true"></i> <input class="in" type="number" name="balance" required="" placeholder="How Much?"><hr>
<button class="btn btn-sm btn-primary" name="entry">Submit</button></form></div></div></div></div>
<div class="text-center">
<a href="roomrent.php" style="text-decoration: none"><< Back</a>
</div>

</body>
</html>