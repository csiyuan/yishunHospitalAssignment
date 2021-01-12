<!DOCTYPE html>
<!-- CHENG SI YUAN 19016011 -->

<!-- Login Details:

        Username: Testing
        Password: Testing1234
-->


<?php
session_start();
include("dbFunctions.php");
include 'navbar.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="stylesheets/style.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <style>
            body{
                background-image: url(./images/ychB.jpg);
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size:cover;
            }
            title{
                color: mediumslateblue
            }
        </style>
        <title>Yishun Community Hospital</title>
    </head>
    <body>
        <div id="CarouselControl" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#CarouselControl" data-slide-to="0" class="active"></li>
                <li data-target="#CarouselControl" data-slide-to="1"></li>
                <li data-target="#CarouselControl" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <img src="images/covid.jpg">
                    <div>
                        <div class="carousel-caption d-none d-md-block">
                            <h3 style='color: darkcyan'>COVID'19 UPDATES</h3>
                            <p style='font-size: large'>Click <a style='color:deepskyblue' href='https://www.moh.gov.sg/covid-19' target="_blank">here</a> to receive the latest updates on the pandemic!</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/ychSlide.png">
                    <div>
                        <div class="carousel-caption d-none d-md-block">
                            <h2 style='color: darkcyan'>About Us</h2>
                            <p style='font-size: large'>Click <a href='https://www.facebook.com/YishunCommunityHospital/' target="_blank">here</a> to find out more!</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/ychPond.jpg">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#CarouselControl" data-slide="prev" >
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#CarouselControl" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
    </body>
</html>

<!-- CHENG SI YUAN 19016011 -->