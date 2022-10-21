<?php
//including the database connection file
include_once("travelcon.php");



if(isset($_POST["submit"])){
    $flightname=$_POST["flightname"];
	$from=$_POST["from"];
	$to=$_POST["to"];
      $triptype=$_POST["triptype"];
      $classtype=$_POST["classtype"];
      $price=$_POST["price"];
      
	 // print_r($_FILES);
	
	 // move_uploaded_file($_FILES["image"]["name"],"photo/".$image);
	
	$result=mysqli_query($con,"INSERT INTO `flight_tb`( `flightname`,`from`,`to`,`triptype`,`classtype`,`price`) VALUES (' $flightname','$from','$to','$triptype','$classtype','$price')");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Add stays</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Cab Booking Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->

<!-- css files -->
<link href="css/style_add.css" rel="stylesheet" type="text/css" media="all">
<link href="css/wickedpicker.css" rel="stylesheet" type='text/css' media="all" />
<link rel="stylesheet" href="css/jquery-ui.css" />
<!-- //css files -->

<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Amaranth:400,400i,700,700i" rel="stylesheet">
<!--//online-fonts -->
</head>
<body> <class="breadcrumb-item"><a align="left" href="dashboard.php">Home</a>


<div class="w3-main">
	<!-- Main -->
	<div class="about-bottom">
		<div class="w3l_about_bottom_right two">
			<h2 class="tittle"><img src="images/cab.jpg" alt=""><span>flight</span></h2>
			<div class="book-form">

			    <form action="#" method="post">
					<div class="form-date-w3-agileits">
						
					<div class="form-date-w3-agileits">
						<div class="form-agileits">
							<label> flight :</label>
						</div>
						<div class="form-agileits-2">
							<input type="text" name="flightname" placeholder="where from" required="">
						</div>
						<div class="clear"> </div>
					</div>
					<div class="form-date-w3-agileits">
						<div class="form-agileits">
							<label> from :</label>
						</div>
						
						<div class="form-agileits-2">
							<input type="text" name="from" placeholder="Enter a type" required="">
						</div>
						<div class="clear"> </div>
					</div>
                           <div class="clear"> </div>
					</div>
					<div class="form-date-w3-agileits">
						<div class="form-agileits">
							<label> To :</label>
						</div>
						
						<div class="form-agileits-2">
							<input type="text" name="to" placeholder="where" required="">
						</div>
                           <div class="form-date-w3-agileits">
						<div class="form-agileits">
							<label> Triptype :</label>
						</div>
						
						<div class="form-agileits-2">
							<input type="text" name="triptype" placeholder="Enter a triptype" required="">
						</div>
                              <div class="form-date-w3-agileits">
						<div class="form-agileits">
							<label> class type:</label>
						</div>
						
						<div class="form-agileits-2">
							<input type="text" name="classtype" placeholder="type" required="">
						</div>
						<div class="clear"> </div>
					</div>		                              <div class="form-date-w3-agileits">
						<div class="form-agileits">
							<label> Price:</label>
						</div>
						
						<div class="form-agileits-2">
							<input type="text" name="price" placeholder="type" required="">
						</div>
						<div class="clear"> </div>
					</div>								
					
					<div class="make">
						  <input type="submit" name="submit" value="Add place">
					</div>
				</form>
			</div>
		</div>
		<div class="clear"> </div>
	</div>
</div>
<!-- //Main -->



	<!-- js-scripts-->
		<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
		
		<!-- Time -->
		<script type="text/javascript" src="js/wickedpicker.js"></script>
			<script type="text/javascript">
				$('.timepicker').wickedpicker({twentyFour: false});
			</script>
		
	
</body>
</html>