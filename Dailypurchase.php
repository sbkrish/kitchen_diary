<?php
session_start();
error_reporting(0);
$name=$_SESSION['name'];
	$user=implode($name);
	$interval=30;
if(!($user))
	{
		header('location:home.php?st');
	}

if(isset($_SESSION['timeout']) && (time() - $_SESSION['timeout'] > 600))
{
	session_unset();
	session_destroy();
	header('location:home.php?st');
}
$_SESSION['timeout']=time();
?>

<!DOCTYPE html>
<html>
<head>
	 <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
	<title>Daily Purchase Entry</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" ></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" ></script>
        <script type="text/javascript">
         $(document).ready(function(){
         	$("#no-of-items").hide();

         	$("#dateselect").change(function() 
         	{
         	// body...     	
     
         	if ($("#today").is(":selected"))
         	{
         	$("#no-of-items").show();
         	}
         	else
         	{

         		$("#no-of-items").show();
         	}
         	
         	});
         });
</script>
 <script type="text/javascript">
         $(document).ready(function(){

   $("#products").change(function(){

    var products=this.value;
    
    if(products>=1)
    {
        $(".row").remove();
        $(".total").remove();
        $(".btn").remove();
        $(".ruler").remove();
        $("br").remove();
        $("#total").remove();
         $("#settle").append(
         	// '<INPUT type="button" value="Add Row" onclick=addRow(\'dataTable\') />'+
        '<p class="total">'+'Total Amount: '+'<i class="fa fa-inr" aria-hidden="true">'+'</i>'+' <input type="text" id="total" name="total" readonly >'+'</p>'+'<hr class="ruler">'+
        '<div class=text-center>'+
'<button name="entry" onclick="return Validate()" class="btn btn-primary btn-sm">'+'Submit'+'</button>'+'</div>'+'<br>');


        $("#product_details").append(
        '<tr class="row">'+
		'<th class="text-center1">'+'Item name'+'</th>'+
		'<th title="in kilo gram" class="text-center1">'+'Wght/Qty'+'</th>'+
		'<th class="text-center1">'+'Price'+'</th>'+
	'</tr>');
        for(var i=1; i<=products;i++){
         
          $("#product_details").append(
          '<tr class="row">'+
		'<td>'+'<input type="text" name="Item[]" required pattern="^[a-zA-Z\s]+$" title="Do not include Numbers in Item name" >'+'</td>'+
		'<td>'+'<input type="number" name="Quantity[]" required="" id=Quantity>'+'</td>'+
		'<td>'+'<input id="Price'+i+'" type="number" name="Price[]" required="" onkeyup="sum();">'+'</td>'+

	'</tr>');

    }

        $(".row").show();
        $(".total").show();
         $(".btn").show();
           $(".ruler").show();
             $(".br").show();
             $("#total").show();
    }
    else{
        $(".row").hide();
        $(".total").hide();
        $(".btn").hide();
        $(".ruler").hide();
        $(".br").hide();
         $("#total").hide();
        }


   });

 });
</script>

  <style type="text/css">
		@font-face{
		font-family: 'Varela Round', sans-serif;
		src: url(VarelaRound-Regular.ttf);
			}

		@font-face{
		font-family: 'Pavanam', sans-serif;
		src: url(Pavanam-Regular.ttf);
			}
	
body {
  background-color: #7d1a9b;	
  background-image: linear-gradient(to right, rgba(43, 40, 50, 0.8) 0%, rgba(83, 86, 99, 0.8) 0%, rgba(69, 77, 91, 0.6) 00%);
   size: 100%;
  width: 100%;
  height: 100%
}
h4
{
	margin-top: 20px;
	text-align: center;
	color: #ccc;
	font-size: 14px;
}
.panel
{
	margin-top: 20px;
}

table.date 
{
    width: 20%;
    margin: 0px auto;
    margin-left: 2px;
    float: none;


}

.date select
{
	background-color: white;
	color: black;
	border-radius: 2px;
	font-weight: normal;
	font-size: 12px;

}


@media screen and (max-width: 767px) {
  .fine {
    width: 100%;
    margin-top: 30px;
    margin-bottom: 20px;
    margin-left: -1px;
    overflow-y: hidden;
    overflow-x: auto;
    -ms-overflow-style: -ms-autohiding-scrollbar;
    border: 0px solid #dddddd;
    -webkit-overflow-scrolling: touch;
  }
}

.fine {
    width: 100%;
    margin-top: 20px;
    margin-bottom: 0px;
    margin-left: -1px;
    overflow-y: hidden;
    overflow-x: auto;
    -ms-overflow-style: -ms-autohiding-scrollbar;
    border: 0px solid #dddddd;
    -webkit-overflow-scrolling: touch;
  }

.fine input 
{
	border-radius: 2px;
	width: 80%;
	background-color:;
	border: 1px solid grey;
	margin-top: 5px;
	margin-bottom: 5px;

}

 input
{
	font-size: 12px;
}

th.text-center
{
	color: brown;
	text-align: left;
	font-weight: normal;

}



th.text-center1
{
	color: brown;
	text-align: center;
	font-weight: normal;
	font-size: 12px;

}

p.total
{
	text-align: right;
	margin-right: 15px;
	font-size: 12px;
}

p.total input
{
	width: 20%;
	text-align: center;
	border-radius: none;
	border: 0px;
	background-color: #d2dde0;
	font-weight: bold;
}

.back
{
	margin-bottom: 200px;
}

.time
{
	border: 2px;
	
	margin-top: 70px;
	color: white; 
	 font-size: 12px;
	 border:none;
	 width: 28%;
	 border-left: 0px;
	 background-color: black;
	 border-top-right-radius: 10px;
	 border-bottom-right-radius: 10px;

}

.time2
{
	margin-bottom: -2px;
}

.mod
{
	font-weight: normal;
	padding-left: 150px;
	padding-right: 0px;
	margin-top: -20px;
	margin-bottom: -20px;	
	font-size: 12px;
	text-align: right;
	

}


input 
{
	border-radius: 2px;
	width: 90%;
	background-color:;
	border: 1px solid grey;
	margin-top: 5px;
	margin-bottom: 5px;
}
.no-of-items
{
	margin-top: -10px;
	margin-bottom: -5px;
	font-weight: normal;
}

label
{
	font-weight: normal;
	font-size: 12px;
}
.no-of-items input
{
	border-radius: 2px;
	width: 20%;
	border: 1px solid grey;
	margin-top: 5px;
	margin-bottom: 5px;
	text-align: center;
	font-weight: bold;
}

.btn
{
	font-size: 12px;
	background-color: orange;
	border: none;
}
a.eng
{
	color: #7a345e;
}

.addrow
{
	text-align: right;
}
.first_ruler
{
	margin-top: 40px;
}

@media screen and (max-width: 767px) {
  .trans {
    width: 100%;
    margin-top: 0px;
    margin-bottom: 20px;
    text-align: center;
    overflow-y: hidden;
    overflow-x: auto;
    -ms-overflow-style: -ms-autohiding-scrollbar;
    border: 0.5px solid #dddddd;
    -webkit-overflow-scrolling: touch;
    font-size: 12px;
  }

  .trans th
  {
  	text-align: center;
  	color: white;
  	background-color: orange;
  }
}


</style>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
  	 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
         	<span class="icon-bar"></span>
      <span class="icon-bar"></span>
     </button>
     <a class="navbar-brand" style="text-align: right;"><font color="#134756"><b>Kitchen Diary</b></font></a>
        <!--<header align="center">Kitchen diary</header>-->
        
        

        <div class="navbar-collapse collapse">

      <ul class="nav navbar-nav navbar-right">
        <li class=""><a href="home.php" style="text-align: right" >Home</a></li>
        <li><a href="logout.php" style="text-align: right">Log out</a></li>
    
      </ul>
    
    </div>
  </div>
</nav>
<?php
date_default_timezone_set('Asia/Kolkata');
$today = date('d-M-y');

?>
<div class="time">
	<p align="left" class="time2">Today: <?php echo $today ?></p>
</div>
	<h4>Daily Purchase Entry</h4>
<div class="containe">
	<div class="panel">  
		<div class="panel-body">
			<form action="verifydailypurchase.php" method="post">
				<fieldset>
					<?php
					date_default_timezone_set('Asia/Kolkata');
					$today = date('d-M-y');
					$yesteday = date('d-M-y', strtotime('-1 days'));

					?>
					<table class="date">
						<tr>
							<td>	
								<SELECT name="date" id="dateselect">
									<option id="selectdate" value="selectdate" disabled selected>--Select Date--</option>
									<option id="today" > <?php echo $today; ?> </option>
									<option id="yesteday" > <?php echo $yesteday; ?> </option>
								</SELECT>
							</td>
						</tr>
					</table>
						<p class="mod">Item's name in
							<a href="#" data-toggle="modal" data-target="#mymodal" class="eng"><u><b>English?</b></u></a>
						</p>
					<div class="modal" id="mymodal">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-body">
									<button class="close" type="button" data-dismiss="modal">x</button>
						<table class="trans">
							<tr><th>பொருட்கள்</th>				<th>Things</th></tr>
							<tr>										</tr>
							<tr><td>பாகற்காய்</td>    			<td>Bitter Gourd</td></tr>
							<tr><td>அவரைக்காய்</td>			<td>Village Beans</td></tr>
							<tr><td>புடலங்காய்	</td>			<td>Snake Gourd</td></tr>
							<tr><td>கருணைக்கிழங்கு</td>	<td>Yam</td></tr>
							<tr><td>வெண்டைக்காய்</td>		<td>Ladies Finger</td></tr>
							<tr><td>கத்தரிக்காய்</td>			<td>Brinjal</td></tr>
							<tr><td>தக்காளி	</td>				<td>Tomato</td></tr>
							<tr><td>பீன்ஸ்</td>						<td>Beans</td></tr>
							<tr><td>உருளை</td>					<td>Potato</td></tr>
							<tr><td>முட்டைக்கோஸ்</td>		<td>Cabbage</td></tr>
							<tr><td>காலி ஃப்ளவர்</td>			<td>Cauli Flower</td></tr>
							<tr><td>குடை மிளகாய்</td>		<td>Capsicum</td></tr>
							<tr><td>கொத்தவரங்காய்</td>		<td>Cluster Beans</td></tr>
							<tr><td>கோவக்காய்</td>				<td>Gherkins</td></tr>
							<tr><td>சுரைக்காய்	</td>			<td>Bottle Gourd</td></tr>
							<tr><td>பச்சைப் பட்டாணி</td>	<td>Green Peas	</td></tr>
							<tr><td>சௌ சௌ</td>					<td>Chayote</td></tr>
							<tr><td>முள்ளங்கி</td>				<td>Raddish</td></tr>
							<tr><td>முருங்கைக்காய்</td>	<td>Drumstick	</td></tr>			
							<tr><td>பீட்ரூட்</td>					<td>Beet Root</td></tr>
							<tr><td>பீர்க்கங்காய்	</td>		<td>Lined Gourd</td></tr>
							<tr><td>வாழைக்காய்</td>			<td>Green Plantain</td></tr>
							<tr><td>பூசணிக்காய்</td>			<td>Pumkin</td></tr>
							<tr><td>கறிவேப்பிலை</td>			<td>Curry Leaves</td></tr>
							<tr><td>கீரை</td>						<td>Spinach</td></tr>
							<tr><td>கொத்தமல்லி</td>			<td>Coriander Leaves</td></tr>
							<tr><td>புதினா</td>					<td>Mint Leaves</td></tr>
							<tr><td>வல்லாரை	</td>				<td>Centella</td></tr>
							<tr><td>சுண்டைக்காய்</td>		<td>Turkey Berry</td></tr>
							<tr><td>கருவாடு</td>					<td>Dried Fish</td></tr>
							<tr><td>மரவள்ளி கிழங்கு</td>		<td>Tapioca</td></tr>
							<tr><td>கொண்டக்கடலை</td>		<td>Chick Peas</td></tr>
							<tr><td>வேர் கடலை</td>				<td>Peanut</td></tr>
							<tr><td>கடுகு	</td>					<td>Mustard</td></tr>
							<tr><td>வெந்தயம்</td>					<td>Fenugreek</td></tr>
							<tr><td>சேமியா</td>					<td>Vermicelli</td></tr>
							<tr><td>சோம்பு</td>					<td>Fennel Seeds</td></tr>
							<tr><td>சீரகம்	</td>					<td>Cumin</td></tr>
							<tr><td>மஞ்சள்</td>						<td>Turmeric</td></tr>
							<tr><td>மிளகு</td>						<td>Pepper</td></tr>
							<tr><td>புளி</td>						<td>Turmarind </td></tr>
							<tr><td>பெருங்காயம்</td>			<td>Asafoetida </td></tr>
							<tr><td>பூண்டு</td>					<td>Garlic</td></tr>
							<tr><td>ஏலக்காய்</td>					<td>Cardamom</td></tr>
							<tr><td>கிராம்பு</td>					<td>Clove</td></tr>
							<tr><td>உளுந்து</td>					<td>Urid Dhal</td></tr>
							<tr><td>துவரை</td>					<td>Toor Dhal</td></tr>
							<tr><td>பாசி பயறு</td>				<td>Green Gram Dhal	</td></tr>
							<tr><td>கடலை பருப்பு</td>		<td>Gram Dhal</td></tr>
							<tr><td>ஊறுகாய்</td>				<td>Pickle</td></tr>
							<tr><td>நல்லெண்ணெய்</td>		<td>Gingili Oil</td></tr>
							<tr><td>கடலை எண்ணெய்</td>		<td>Gram Oil</td></tr>
							<tr><td>நெய்</td>						<td>Ghee</td></tr>
						</table>
								</div>
							 </div>			
						</div>
					</div>
						<hr class="first_ruler">
					<div class="text-center">
						<div class="no-of-items" id="no-of-items">
					    	<label class="content"> No. of Items: </label>
					     	<input id="products" type="number" name="products" value="" required="" />
					 	</div>
						<div id="product_details" onkeyup="increase()"> 

					        <table class="fine" id="dataTable">
													<!-- <tr>
														<th class="text-center1">Item name</th>
														<th title="in kilo gram" class="text-center">Wght/Qty</th>
														<th class="text-center">Price</th>
													</tr> -->
							</table>
						</div>
					</div>
						<div id="settle">
						<!-- <p class="total">Total Amount: <i class="fa fa-inr" aria-hidden="true"></i> <input type="text" id="total" name="total" readonly ></p><br><hr>
						<button name="entry" onclick="return Validate()" class="btn btn-primary">Submit</button><br><br> -->
						</div>
					
				</fieldset>
			</form>


<script type="text/javascript">

// function addRow(tableID) {

// 			var table = document.getElementById(tableID);

// 			var rowCount = table.rows.length;
// 			var row = table.insertRow(rowCount);
// 			var cell1 = row.insertCell(0);
// 			var element1 = document.getElementById("Quantity");
// 			cell1.appendChild(element1);

			
// 		}
/*Disable form submit while press enter in No.of Items */

	$('#products').on('keypress', function(e) {
    return e.which !== 13;
});


	function Validate()
	{
		var dateselect = document.getElementById("dateselect");
		if(dateselect.value == "selectdate")
		{
			alert("Please select date");
			return false;
		}
			return true;

	}
/*---------------Adding all the prices dynamically----------------------*/	
	function sum()
	{
		

    	var products=document.getElementById("products").value;
		var sum=0;	
		var Price;

		for(var i=1; i<=products;i++)
		{
         	
			Price = document.getElementById('Price'+i).value;
			if (Price == "")
		 	{ 
				Price = 0;
			}
			sum = parseInt(sum) + parseInt(Price);
		}
		
		var result = sum;
		if (! isNaN(result)) 
		{
			document.getElementById("total").value = result;
		}
		
	}
	


</script>

</body>
</html>
