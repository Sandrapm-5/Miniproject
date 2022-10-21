<?php
include 'travelcon.php';
if(isset($_POST["submit"]))
{
  $name=$_POST["name"];
  $email=$_POST["email"];
  $phone=$_POST["phone"];
  $password=md5($_POST["password"]);
  $cpassword=md5($_POST["cpassword"]);
  $nameErr = $emailErr = $phoneErr = $passwordErr = $cpasswordErr = "";
  $name = $email = $phone = $password = $cpassword = "";
  global $validate;
  
  if(empty($_POST['name'])){
	$nameErr = "Please Enter Username";
	$validate = false;
  }
  else{
	$name = mysqli_real_escape_string($con,$_POST['name']);
	$validate = true;
  }

  if(empty($_POST['email'])){
	$emailErr = "Please Enter Email";
	$validate = false;
  }
  else{
	$email = mysqli_real_escape_string($con,$_POST['email']);
	$validate = true;
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
	  $emailErr = "Please Enter valid email";
	  $validate = false;
	}
  }
  
  if(empty($_POST['phone'])){
	$phoneErr = "Please Enter Phone Number";
	$validate = false;
  }
  else{
	$phone = mysqli_real_escape_string($con,$_POST['phone']);
	$validate = true;
	if(strlen($phone) > 10 || strlen($phone) < 10 || !preg_match("/[0-9]/",$phone)){
	  $phoneErr = "Please Enter valid Phone Number";
	  $validate = false;
	}
  }


  if(empty($_POST['password'])){
	$passwordErr = "Please Enter Password";
	$validate = false;
  }
  else{
	$password = mysqli_real_escape_string($con,$_POST['password']);
	$validate = true;
  }

  if(empty($_POST['cpassword'])){
	$cpasswordErr = "Please reenter password";
	$validate = false;
  }
  else{
	$cpassword = mysqli_real_escape_string($con,$_POST['cpassword']);
	$validate = true;
	if($password !== $cpassword){
	  $cpasswordErr = "Password and Confirm Password don't match";
	  $validate = false;
	}
  }
  function register($name,$email,$phone,$password,$cpassword,$con){
	
	$hashedPassword = $password;

	

	
	$query = mysqli_query($con,"INSERT INTO register_td( username, email,contact, password, cpassword) VALUES('$name','$email','$phone','$hashedPassword','$cpassword')");
	$query1 = mysqli_query($con,"SELECT reg_id from register_td WHERE username='".$name."'");
	$query3 = mysqli_query($con,"INSERT INTO login_tb(email,password)VALUES('$email','$password')");
	$eid = mysqli_fetch_assoc($query1);
		if($query){
		echo 'Registration successful!!';
		
		$_SESSION['sess_user'] = $name;
		$_SESSION['sess_eid'] = $eid['reg_id'];

		header("Location:login.php");
		exit;
	}
	else{
		echo "Query Error : " . "INSERT INTO register_td( username, email, contact, password, cpassword) VALUES('$name','$email','$phone','$hashedPassword','$cpassword')" . "<br>" . mysqli_error($con);
		echo "<br>";
		echo "Query Error : " . "SELECT reg_id from register_td WHERE username='".$name."'" . "<br>" . mysqli_error($con);
	}

}

  if($validate){
	register($name,$email,$phone,$password,$cpassword,$con);
  }
}


ini_set('display_errors', true);
error_reporting(E_ALL);
?>

 


<!DOCTYPE html>
<html lang="en">
<head>
<title> Register</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Event Registration Form Widget Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!-- //custom-theme -->
<link href="css/styler.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- font-awesome-icons -->
<!-- //font-awesome-icons -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
</head>
<body>
<!-- banner -->
	<div class="center-container">
		<div class="main">
			<h1 class="w3layouts_head"> Registration Form</h1>
				<div class="w3layouts_main_grid">
					<form action="#" method="post" class="w3_form_post">
						<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label>Your Name </label>
								<input type="text"  placeholder="Your Name" name="name" required="">
							</span>
						</div>
						<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label>Your Email </label>
								<input type="text"  placeholder="Your Email" name="email" required="">
							</span>
						</div>
						<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label>Phone Number </label>
								<input type="text"  placeholder="Phone Number" name="phone" maxlength="10" pattern="[0-9]{10}" required="">
								
						</div>
						<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label>password </label>
								<input type="password"  placeholder="password" name="password" required="">
							</span>
						</div>
						<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label>confirm password </label>
								<input type="password"  placeholder="password" name="cpassword" required="">
							</span>
						</div>
						
						
					<div class="content-w3ls">
						<div class="form-w3ls">
							<div class="content-wthree2">
								<div class="grid-w3layouts1">

						<div class="clear"></div>
					</div><div>
					<div class="w3_main_grid">
						<div class="w3_main_grid_right">
							<input type="submit" value="Submit" name="submit">
						</div>
					</div></div>
				</form>
			</div>
		<!-- Calendar -->
			<link rel="stylesheet" href="css/jquery-ui1.css" />
				<script src="js/jquery-ui1.js"></script>
					<script>
						$(function() {
							$( "#datepicker" ).datepicker();
						});
					</script>

</body>
</html>