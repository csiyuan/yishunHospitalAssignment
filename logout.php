<!DOCTYPE html>
<!-- CHENG SI YUAN 19016011 -->
<?php
session_start();
include("dbFunctions.php");
session_destroy();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="stylesheets/style.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <title>You have been logged out.</title>
    </head>
    <body>
        <?php
        echo 'You have been logged out. You will now be redirected back to the main page.';
        header('Refresh: 2; url=index.php');
        ?>
    </body>
</html>


<!-- CHENG SI YUAN 19016011 -->