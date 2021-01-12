<!-- CHENG SI YUAN 19016011 -->

<?php
include "dbFunctions.php";
$userName = $_POST['username'];
$password = $_POST['password'];
$weight = $_POST['weight'];
$height = $_POST['height'];
$dob = $_POST['birthday'];
$activelevel = $_POST['activetype'];

if ($username == "" or $password == "" or $height == ""
        or $weight == "" or $dob == "") {
    $message = "There was an empty field, please refill the form.";
} else {
    $queryCheck = "SELECT * FROM user
                    WHERE name='$userName'";
    $resultCheck = mysqli_query($link, $queryCheck) or die(mysqli_error($link));

    if (mysqli_num_rows($resultCheck) == 1) {
        $message = "Username already exists!";
        $message .= "<br/> Please try to <a href='register.php'>register</a> again.";
    } else {
        $queryInsert = "INSERT INTO user 
                        (name, password, height, weight,birthdate,activelevel)
                        VALUES ('$userName',SHA1('$password'),'$height','$weight',
                        '$dob','$activelevel')";
        $resultInsert = mysqli_query($link, $queryInsert) or die;
        $message = "Congratulations " . $userName . " , you have successfully registered an account with YCH!";
        $message .= "<br/> You can now <a href='login.php'>login.</a>";
    }
}

mysqli_close($link);
?>

<?php 
    session_start();
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>YCH - Register</title>
        <link href="stylesheets/style.css" rel="stylesheet" type="text/css"/>
        <link href="stylesheets/registerstyle.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <style>
            #message{
                text-align: center;
                margin-top: 120px;
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <?php
        include("navbar.php");
        ?>
        <?php
        echo "<h3 id='message'>$message</h3>";
        ?>

    </body>
</html>

<!-- CHENG SI YUAN 19016011 -->