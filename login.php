<!-- CHENG SI YUAN 19016011 -->

<!DOCTYPE html>

<?php
session_start();
include("dbFunctions.php");
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="stylesheets/loginstyle.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <title>Yishun Community Hospital - Login</title>
    </head>
    <body>
        <?php
        include 'navbar.php';
        ?>
        <h1>Sign in to your YCH account.</h1>
        <div class="input-group">
            <form action="doLogin.php" method="POST">
                <label>Username:*</label>
                <input type="text" name="username" placeholder="Username" class="form-control" required>
                <label>Password:*</label>
                <input type="password" name="password" placeholder="password" class="form-control" required>
                <br/>
                <input type="submit" name="submit" class="form-control">
                <p>Don't have an <a href="register.php">account</a>?</p>
            </form>
        </div>
    </body>
</html>
<!-- CHENG SI YUAN 19016011 -->