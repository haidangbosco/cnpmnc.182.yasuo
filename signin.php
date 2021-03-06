<?php 

include('./action.php');

    $email= $password = "";
    $emailErr = $passwordErr = $err= "";
    if(isset($_POST["signin"])){
        
        //var_dump($_POST);
        if(empty($_POST['email'])){
          $emailErr = "Email is required";
        }else{
          if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format"; 
          }else{
            $email = $_POST['email'];            
          }
        }
        
        if(empty($_POST['password'])){
          $passwordErr= 'Password is required';
        }else{
          $password = md5($_POST['password']);
        }
        
        if (empty($emailErr) && empty($passwordErr) ){
           // die('chile');
          // session_start();
          // header("location:./");  
          // exit();
          $kq = $obj->check_account($email,$password);
          if( $kq != false){
             
            session_start();
            $_SESSION['user_data']['id']=$kq['id'];
            $_SESSION['user_data']['fullname']=$kq['fullname'];
            
           
            header("location:./");
          }else{
            $err = "Email or Password invalid";
          }
        }else{
           
            
            echo $emailErr;
            echo $passwordErr; 
            echo $err; 
        }
        
        
    } 

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">
        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signup-image">
                        <figure><img src="images/signin-image.jpg" alt="sing in image"></figure>
                        <a href="signup.php" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign in</h2>
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="email" id="email" placeholder="Email"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password"/>
                            </div>
                           <!--  <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div> -->
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                        <div class="social-login">
                            <span class="social-label">Or</span>
                            <a href="signup.php">Sign Up</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>