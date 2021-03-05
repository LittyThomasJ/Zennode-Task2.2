<?php
if (isset($_GET['message'])) {
  // code...
  $msg=$_GET['message'];
  echo "<script>alert('$msg')</script>";
}


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <!-- Left portion  -->
        <div class="left-container ">
            <!-- Form for login -->
            <form method="post" action="home.html" class="login-form" id="login">
            <div >
                <h2 id="h2id">Login</h2>
            </div>
            <p class="icon-container">
              <a href="#" class="fa fa-facebook"></a>
              <a href="#" class="fa fa-twitter"></a>
            </p>
            <div class="form-container">
              <p class="account">or use your account</p>
                <input type="text" placeholder="Email" class="inputs" id="login_Email"><br>
                <span id="login_email_error_message" style="color:red" class="em"></span>
                <input type="text" placeholder="Password" class="inputs" id="login_Password"><br>
                <span id="login_password_error_message" style="color:red"></span>
                <p class="reg">New User? <a href="#">Register</a></p>
                <input type="submit" value="Log in" class="button">
            </div>
        </form>
        <!-- Form for Registration -->
        <form method="post" action="FormRegaction.php" class="register-form" id="register" name="register">
            <div >
                <h2 id="h2id">Register</h2>
            </div>
            <p class="icon-container">
              <a href="#" class="fa fa-facebook"></a>
              <a href="#" class="fa fa-twitter"></a>
            </p>
            <div class="form-container">
              <p class="account">or use your account</p>
                <input type="text" placeholder="Email.." name="Email" id="Email" class="inputs"><br>
                <span id="email_error_message" style="color:red"></span>
                <input type="text" placeholder="Password.." class="inputs" name="Password" id="Password"><br>
                <span id="password_error_message" style="color:red"></span>
                <input type="text" placeholder="Confirm Password.." class="inputs" name="conPassword" id="Password"><br>
                <span id="conPassword_error_message" style="color:red"></span>
                <p class="reg">Already have an account? <a href="#">Login</a></p>
                <input type="submit" value="Register" class="button" name="register" id="submit">
            </div>
        </form>
        </div>
        <!-- Right container -->
        <div class="right-container"></div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- <script src="js/validation.js"></script> -->
    <script>
    $('.reg a').click(function(event){
  	    event.preventDefault();
  	    $('form').animate({height:"toggle",opacity:"toggle"},"slow");
  	});
    </script>
</body>
</html>
