<?php

@include 'code.php';

session_start();

if(isset($_POST['submit'])){
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $password = md5($_POST['password']);

    $select = "select * from  login where email = '$email' && password = '$password'";

    $result = mysqli_query($conn, $select);
    
    if(mysqli_num_rows($result)>0){
        $row = mysqli_fetch_array($result);

        if(isset($_POST['submit'])){
            $_SESSION['f_name'] = $row['name'];
            header('location:page.php');
        }else{
                echo 'incorrect email or password';
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
    <title>login Form</title>

</head>
<body>
    <div class="form-container">
        <form action="" method="post">
            <div class="mb-4">
            <h3 id="head">LOGIN</h3>
            </div>
            <div class="mb-3">
            <input type="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="mb-3">
            <input type="password" name="password" placeholder="Enter your password" required>
            </div>
            <div class="mb-3">
            <input type="submit" name="submit" value="login" class="btn btn-primary">
            </div>
            <p>Don't have an account? <a href="reg_form.php">Register</a></p>
        </form>
    </div>
</body>
</html>