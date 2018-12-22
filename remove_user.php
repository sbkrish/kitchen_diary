<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
 	 <meta name="viewport" content="width=device-width, initial-scale=1">
 	 <link rel="stylesheet" href="css/bootstrap.min.css">
  	<link rel="stylesheet" href="css/font-awesome.min.css">	

	<title>Remove User</title>
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
.panel
{
  margin-top: 60px;
  border-radius: 0px;
}
.text-center
{
  margin-top: 0px;
  margin-bottom: 0px;
}

.fa
{
	font-size: 58px;
	color: orange;
}

.btn
{
	margin-top: 0px;

}
.data
{
	color: white;
	font-weight: bold;
}

.data2
{
	color: white;
	font-weight: bold;
}

.data3
{
	color: brown;
	font-weight: bold;
	margin-top: 10px;
}


.cl
{
	margin-top: 40px;
}

select
{
	border-radius: 5px;
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
	<h4>Forgot Password</h4>
<div class="panel">  

  <div class="panel-body">

<div class="text-center">

<form method="post" action="remove.php">
		
	

	<select id='view' name="holiday_hungers">
		
			<option value="name" disabled selected>Holiday Hungers</option>
			<option>Anbumani</option>
			<option>Balakrishnan</option>
			<option>Dineshkumar</option>
			<option>Ramesh</option>
			<option>Sathishkumar</option>

	</select>
<br>
<hr>
	<button class="btn btn-danger" name="holiday" onclick="return Validate()" >Submit</button> </form></div></div></div></div>

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