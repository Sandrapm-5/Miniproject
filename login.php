<?php
include('travelcon.php');
session_start();
$error = "Invalid Email or Password";

if(isset($_POST['submit']))
{
  $email=$_POST["email"];
  $password=($_POST["password"]);
  $sql="SELECT * from login_tb where email='".$email."' AND password='".$password."'";
  $res=mysqli_query($con, $sql);
  if(mysqli_num_rows($res)>0)
  {
    $res_fetch=mysqli_fetch_assoc($res);
    $email=$res_fetch['email'];
    $password=$res_fetch['password'];
    $role=$res_fetch['role'];
    $_SESSION['role']="$role";
    $_SESSION['email']="$email";
  
    
      if($_SESSION['role']=='user')
      {
        
        
        $_SESSION['email']="$email";
        $_SESSION['login_id']=$res_fetch['login_id'];
        echo "<script>window.alert('welcome user');
        </script>";
  
        header("location:home.php");
        exit(0);
      }
      
     
      elseif($_SESSION['role']=='admin')
      {
        $_SESSION['message']="Welcome";
        echo "<script>
        window.alert('welcome admin');
        </script>";
        header("location:dashboard.php");
        
        exit(0);
      }
    
    else
    {
      echo "<script> alert('Please verify the email'); </script>";
    }
  }
  else
  {
    $_SESSION["error"] = $error;
    header("location:login.php");
    exit(0);
  }
}

?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>login</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <!-- //Meta tag Keywords -->
    <link href="//fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <!--/Style-CSS -->
    <link rel="stylesheet" href="css/style_login.css" type="text/css" media="all" />
    <!--//Style-CSS -->
    <link rel="stylesheet" href="css/font-awesomel.min.css" type="text/css" media="all">

</head>

<body>
    <div class="w3l-signinform">
        <!-- container -->
        <div class="wrapper">
            <!-- main content -->
            <div class="w3l-form-info">
                <div class="w3_info">
                    <h1>Welcome </h1>
                    <p class="sub-para">Explore the world</p>
                    <h2>Log In</h2>
                    <form action="login.php" method="post">
                    <?php
                           if (isset($_SESSION["error"])) {
                              $error = $_SESSION["error"];
                             }
                        ?>  
                        <div class="input-group">
                            <span><i class="fa fa-user" aria-hidden="true"></i></span>
                            <input type="email" placeholder="Email or Username" name="email" required="">
                        </div>
                        <div class="input-group two-groop">
                            <span><i class="fa fa-key" aria-hidden="true"></i></span>
                            <input type="Password" placeholder="Password" name="password" required="">
                        </div>
                    <div>
                            <a  href="forgotpass.php" class="forgot">Forgot password?</a>
                            
                        </div>
                       
                        <button class="btn btn-primary btn-block" type="submit" name="submit">Log In</button>
                    </form>
                </div>
                    <p class="account">Don't have an account? <a href="register.php">Register</a></p>
                </div>
            </div>
            <!-- //main content -->
        </div>
        </div>
        <?php
        unset($_SESSION["error"]);
        ini_set('display_errors', 1);
         ?>

        <!-- //container -->
        <!-- footer -->
        

</body>

</html>