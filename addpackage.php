<?php
//including the database connection file
include_once("travelcon.php");



if(isset($_POST["submit"])){
	$package_name= $_POST["package_name"];
	$discription= $_POST["discription"];
	$price= $_POST["price"];
	
	
	
	
	$result2=mysqli_query($con,"INSERT INTO `package_tb`( `package_name`,`discription`,`price`) VALUES ('$package_name','$discription','$price')");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Add package</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Cab Booking Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->

<!-- css files -->
<link href="css/style_pack.css" rel="stylesheet" type="text/css" media="all">
<link href="css/wickedpicker.css" rel="stylesheet" type='text/css' media="all" />
<link rel="stylesheet" href="css/jquery-ui.css" />
<!-- //css files -->

<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Amaranth:400,400i,700,700i" rel="stylesheet">
<!--//online-fonts -->
</head>
<body>


<div class="w3-main">
	<!-- Main -->
	<div class="about-bottom">
		<div class="w3l_about_bottom_right two">
			<h2 class="tittle"><img src="images/cab.jpg" alt=""><span>Add package</span></h2>
			<div class="book-form">

			    <form action="#" method="post">
					<div class="form-date-w3-agileits">
						
					<div class="form-date-w3-agileits">
						<div class="form-agileits"> 
							<label> package:</label>
						</div>
						<div class="form-agileits-2">
							<input type="text" name="package_name" placeholder="Enter the location" required="">
						</div>
						<div class="clear"> </div>
					</div>
					<div class="form-date-w3-agileits">
						<div class="form-agileits">
							<label> Discription :</label>
						</div>
						
						<div class="form-agileits-2">
							<input type="text" name="discription" placeholder="Enter a discription" required="">
						</div>
						<div class="clear"> </div>
					</div>				
					<div class="form-date-w3-agileits">
						<div class="form-agileits">
							<label> price :</label>
						</div>
						
						<div class="form-agileits-2">
							<input type="text" name="price" placeholder="Enter price" required="">
						</div>
						<div class="clear"> </div>
					</div>	
					
					<div class="make">
						  <input type="submit" name="submit" value="add package">
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