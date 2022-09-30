<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>welcome page</title>
</head>
<body>
    <div class="container">
        <div class="content">
            <h3>Hii, <span><?php echo $_SESSION['f_name'] ?></span></h3>
            <h1>Welcome To Our Page</h1>
            <a href="logout.php" class="btn">Logout</a>
        </div>
    </div>
</body>
</html>