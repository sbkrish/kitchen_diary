<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
 	 <meta name="viewport" content="width=device-width, initial-scale=1">
 	 <link rel="stylesheet" href="css/bootstrap.min.css">
  	<link rel="stylesheet" href="css/font-awesome.min.css">	
	<title>Assign Incharge</title>
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
  margin-top: 100px;
  text-align: center;
  color: grey;
}
.panel
{
  margin-top: 60px;
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
	margin-top: 0px;

}

.panel-body
{
	margin-top: 10px;
	margin-bottom: 0px;
}

select
{
	border-radius: 5px;
	
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
	<h4>Assign Incharge</h4>
<div class="panel">  

  <div class="panel-body">

<div class="text-center">

<form method="post" action="incharge_created.php">
		

	<select id='view' name="name">
		
			<option value="name" disabled selected>Incharge for this month</option>
			<option>Anbumani P</option>
			<option>Balakrishnan S</option>
			<option>Dineshkumar C</option>
			<option>Ramesh G</option>
			<option>Sathishkumar S</option>

	</select>
<br><hr>
	<button class="btn btn-sm btn-primary" name="entry" onclick="return Validate()" >Submit</button> 
</form></div></div></div></div>
<div class="text-center">
	<a href="admin.php" style="text-decoration:none">Go Back</a>
</div>

<script type="text/javascript">
	
	function Validate()
	{
		var incharge = document.getElementById("view");
		if(incharge.value == "name")
		{
			alert("Please select this month Incharge name!");
			return false;
		}
			return true;

	}

	
	
</script>



</body>
</html>