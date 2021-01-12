<!-- CHENG SI YUAN 19016011 -->
<!DOCTYPE html>
<?php
session_start();
include("dbFunctions.php");

$msg = "";
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $type = $_POST['exercisetype'];
    $duration = $_POST['durationSlideValue'];
    $queryCheck = "SELECT * FROM user WHERE name='$username'";
    $resultCheck = mysqli_query($link, $queryCheck) or die(mysqli_error($link));
    if (mysqli_num_rows($resultCheck) > 0) {
        $queryInsert = "INSERT INTO enter 
                        (name, type, duration)
                        VALUES ('$username','$type' ,$duration)";
        $resultInsert = mysqli_query($link, $queryInsert) or die(mysqli_error($link));
        $msg = "<a style='font-size: 40px'>You have successfully added an entry.</a>";
        $msg .= "<br/> You may now <a href='exerciseAdd.php'>return</a> or <a href='exerciseSummary.php'>view your exercise summary.</a>";
    }
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="stylesheets/style.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <title></title>
    </head>
    <body>
        <?php
        include 'navbar.php';
        echo $msg;
        ?>
    </body>
</html>
<!-- CHENG SI YUAN 19016011 -->