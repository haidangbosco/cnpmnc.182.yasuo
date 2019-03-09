<?php 
include('./action.php');

$email= $password = $fullname = $phone= $address= "";
$emailErr = $passwordErr=$re_passwordErr = $fullnameErr = $phoneErr= $addressErr = "";
if(isset($_POST["signup"])){
    
    
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

    if($_POST['password']  != $_POST['re_password']){
        $re_passwordErr= 'Password confirm not match';
      }

    if(empty($_POST['fullname'])){
      $fullnameErr="Full name is required";
    }else{
      $fullname = $_POST['fullname'];
    }

    if(empty($_POST['phone'])){
      $phoneErr = 'Phone is required';
    }else{
      if(strlen($_POST['phone']) > 10){
        $phoneErr = "Invalid phone number";
      }else{
        $phone = $_POST['phone'];
      }
    }

    if(empty($_POST['address'])){
      $addressErr = 'Address is required';
    }else{
      $address = $_POST['address'];
    }

    if (empty($emailErr) && empty($passwordErr) && empty($re_passwordErr) && empty($fullnameErr) && empty($phoneErr) && empty($addressErr)){
      
      $user_arr = array("id"=>"null",
                        "email"=> $email,
                        "password" =>	$password,
                        "fullname" => $fullname,
                        "phone" =>$phone,
                        "address" => $address
                    );
     // echo $user_arr;
      if($obj->insert_record("users",$user_arr)){
          header("location:./signin.php");
          // header('location:..View/index.php?msg=Record Inserted');
      }
    }else{
        // echo $emailErr.'<br>';
        // echo $fullnameErr.'<br>';
        // echo $passwordErr.'<br>';
        // echo $re_passwordErr.'<br>';
        // echo $phoneErr.'<br>';
        // echo $addressErr.'<br>';
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

<section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="fullname" id="name" placeholder="Full Name" value="<?php echo $fullname; ?>"/>
                            </div>
                            <div><small style="color:red;"><?php echo $fullnameErr; ?></small></div>
                            

                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" value="<?php echo $email ?>"/>
                            </div>
                            <div><small style="color:red;"><?php echo $emailErr; ?></small></div>

                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="pass" placeholder="Password"/>
                            </div>
                            <div><small style="color:red;"><?php echo $passwordErr; ?></small></div>

                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_password" id="re_pass" placeholder="Repeat your password"/>
                            </div>
                            <div><small style="color:red;"><?php echo $re_passwordErr; ?></small></div>

                            <div class="form-group">
                                <label for="phone"><i class="zmdi zmdi-phone"></i></label>
                                <input type="text" name="phone" id="phone" placeholder="Phone" value="<?php echo $phone; ?>"/>
                            </div>
                            <div><small style="color:red;"><?php echo $phoneErr; ?></small></div>

                            <div class="form-group">
                                <label for="local"><i class="zmdi zmdi-home"></i></label>
                                <input type="text" name="address" id="address" placeholder="Address" value="<?php echo $address; ?>"/>
                            </div>
                            <div><small style="color:red;"><?php echo $addressErr; ?></small></div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div><a href="signin.php" class="signup-image-link">I am already have an account</a></div>

                            <div align="center" class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register" disabled/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img style="margin:auto ; padding: 0; position: relative; top: 50%;" src="images/signup-image.jpg" alt="sing up image"></figure>
                        
                    </div>
                </div>
            </div>
        </section>
<!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>