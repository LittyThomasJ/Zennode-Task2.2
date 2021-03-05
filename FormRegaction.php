<?php
include_once('connection.php');

    $con = new DbFunctions();
    if(isset($_POST['register'])){
        $emailid = $_POST['Email'];
        echo $emailid;
        $password = $_POST['Password'];
        echo $password;
        $confirmPassword = $_POST['conPassword'];
        echo $confirmPassword;
        if($password == $confirmPassword){
          echo "Success";
            $email = $con->isUserExist($emailid);
            if(!$email){
              echo "Success";
                $register = $con->UserRegister($emailid, $password);
                if($register){
                     // echo "<script>alert('Registration Successful')</script>";
                     $message="Registration Successful";
            				 $con->redirect($message);
                }else{
                    // echo "<script>alert('Registration Not Successful')</script>";
                    $message="Registration Not Successful";
                    $con->redirect($message);
                }
            } else {
                //echo "Success";
                // echo "<script>alert('Email Already Exist')</script>";
                $message="Email Already Exist";
                $con->redirect($message);
            }
        } else {
          $message="Password Not Match";
          $con->redirect($message);
            // echo "<script>alert('Password Not Match')</script>";

        }
    }
    if(isset($_POST['login'])){
        $emailid = $_POST['Email'];
        $password = $_POST['Password'];
        $user = $con->Login($emailid, $password);
        if ($user) {
            // Registration Success
           header("location:home.php");
        } else {
            // Registration Failed
            // echo "<script>alert('Emailid / Password Not Match')</script>";
            $message="Emailid / Password Not Match'";
            $con->redirect($message);
        }
    }
?>
