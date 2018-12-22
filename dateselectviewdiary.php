<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
<title>Select Date to View Diary</title>
</head>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

<script>
$(function() {
               $("#datepicker").datepicker({ dateFormat: "dd-M-y", maxDate: 0}).val()
       });
</script>
<body>
	<style type="text/css">
    @font-face{
    font-family: 'Varela Round', sans-serif;
    src: url(VarelaRound-Regular.ttf);
      }

body {
  background:
linear-gradient(27deg, #151515 5px, transparent 5px) 0 5px,
linear-gradient(207deg, #151515 5px, transparent 5px) 10px 0px,
linear-gradient(27deg, #222 5px, transparent 5px) 0px 10px,
linear-gradient(207deg, #222 5px, transparent 5px) 10px 5px,
linear-gradient(90deg, #1b1b1b 10px, transparent 10px),
linear-gradient(#1d1d1d 25%, #1a1a1a 25%, #1a1a1a 50%, transparent 50%, transparent 75%, #242424 75%, #242424);
background-color: #131313;
background-size: 20px 20px;
}
h4
{
  margin-top: 160px;
  text-align: center;
  color: grey;
}
.panel
{
  margin-top: 20px;
  font-size: 16px;
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
	margin-top: 0px;
}

.Prior {
  font-family: 'Varela Round', sans-serif;
  background-color: #33568e;
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
}

.panel-heading
{
  text-align: center;
  font-weight: bold;
}

.total
{
	color: white;
	margin-bottom:  -20px;

}
.amount
{
	color: white;
	margin-bottom: -20px;
	font-size: 20px;
	font-weight: bold;
	margin-top: -20px;
}

.table
{
	background-color: white;
}

.in
{
		text-align: center;
		border-color: red;
		font-weight: bold;
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
<h4>Purchase Detail</h4>
<div class="panel panel-primary">  
<div class="panel-heading"><p>For which Date</p>
</div>
  <div class="panel-body">

<div class="text-center">


<form action="viewdiary.php" method="post" >
	<i class="fa fa-calendar" aria-hidden="true"></i> <input id="datepicker" type="text" name="viewdate" readonly="" class="in" placeholder="Click here" required="">
  <hr>
	<button name="viewdiarydate" class="btn btn-primary">Submit</button>
		</div></div></div>
<div class="text-center">

	<a href='selectview.php' style="text-decoration: none"><< Back</a></form></div>
</body>
</html>