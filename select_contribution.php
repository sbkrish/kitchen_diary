<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">	
	<title>Select Contribution</title><style type="text/css">
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
img[src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"]
{
  display: none;
}
h4
{
  margin-top: 200px;
  text-align: center;
  color: white;
}
.panel
{
  margin-top: 20px;
}
.text-center
{
  margin-top: 0px;
  margin-bottom: 0px;
}

.fa
{
	font-size: 18px;
	color: white;
}

.btn
{
	margin-top: 20px;

}

.in
{
		text-align: center;
		border-color: red;
		font-weight: bold;
		border-radius: 2px;
		border: 2px;
		font-size: 20px;

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
hr
{
	width: 100%;
	border: 0.5px solid #d1d1d1;
	margin-bottom: -30px;
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
<h4>Individual Contribution</h4>
<div class="panel">  

  <div class="panel-body">

<div class="text-center">


<form method="post" action="view_contribution.php">
		
	

	<select class="in" id='view_contribution' name="view_contribution">
		
			<option value="month" disabled selected>Select Month</option>
			<option>This Month</option>
			<option>Last Month</option>
			
	</select><hr>
<br>
	<button class="btn btn-primary" name="contribution" onclick="return Validate()" >Submit</button>
	</div></div></div></div>
	<div class="text-center">

	<br><a href="selectview.php" style="text-decoration:none">Go Back</a></br>
</div>

</form>


<script type="text/javascript">
	
	function Validate()
	{
		var dateselect = document.getElementById("view_allocatedrent");
		if(dateselect.value == "month")
		{
			alert("Please select appropriate Month");
			return false;
		}
			return true;

	}

	
	
</script>



</body>
</html>