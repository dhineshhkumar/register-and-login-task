<?php

@include 'code.php';

if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);

    $insert = "insert into login(name,email,password) values('$name','$email','$password')";
         
    $result = mysqli_query($conn, $insert);
    
    if($result){
        header('location:login_form.php');
    }else{
        if($password != $cpassword){
            echo'password not match!';
        }else{
            echo 'user already exists.';
            
        }
    }
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Register Form</title>
</head>
<body>
    <div class="form-container">
        <form action="" method="post">    
            <div class="mb-4">
            <h3 id="head">REGISTRATION</h3>
            </div>
            <div class="mb-3">
            <input type="text" name="name" placeholder="Enter your name" required>
            </div>
            <div class="mb-3">
            <input type="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="mb-3">
            <input type="password" name="password" placeholder="Enter your password" required>
            </div>
            <div class="mb-3">
            <input type="password" name="cpassword" placeholder="confirm password" required>
            </div>
            <div class="mb-3">
            <input type="submit" name="submit" value="Register now" class="btn btn-primary">
            </div>
            <p>Already have an account? <a href="login_form.php">Login</a></p>
        </form>
    </div>
                </div>
            </div>
</body>
</html>