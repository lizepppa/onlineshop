<?php include('connect_to_database.php') ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/bootstrap-grid.css">
    <title>Registration system PHP and MySQL</title>
</head>
<body>
    <div class="register">


        <form method="post" action="login.php">
            <?php include('errors.php'); ?>
            <div class="input-group">
                <label>Email</label>
                <input type="email" name="email" >
            </div>
            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password">
            </div>
            <div class="input-group">
                <button type="submit" class="btn" name="login_user">Login</button>
            </div>
            <p>
                Not yet a member? <a href="registration.php">Sign up</a>
            </p>
        </form>
    </div>
</body>
</html>