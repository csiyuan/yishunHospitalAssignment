<!-- CHENG SI YUAN 19016011 -->

<!DOCTYPE html>

<?php
session_start();
include("dbFunctions.php");
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="stylesheets/style.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <title>Add An Exercise</title>
        <style>
            .slidecontainer {
                width: 100%;
            }

            .slider {
                -webkit-appearance: none;
                width: 100%;
                height: 15px;
                border-radius: 5px;
                background: #d3d3d3;
                outline: none;
                opacity: 0.7;
                -webkit-transition: .2s;
                transition: opacity .2s;
            }

            .slider:hover {
                opacity: 1;
            }

            .slider::-webkit-slider-thumb {
                -webkit-appearance: none;
                appearance: none;
                width: 25px;
                height: 25px;
                border-radius: 50%;
                background: #4CAF50;
                cursor: pointer;
            }

            .slider::-moz-range-thumb {
                width: 25px;
                height: 25px;
                border-radius: 50%;
                background: #4CAF50;
                cursor: pointer;
            }

            form { 
                width:500px;
                margin-left: 20px;
                padding: 30px;
            }

        </style>
    </head>
    <body>
        <?php
        include 'navbar.php';
        ?>
        <div class="input-group">
            <form action="doExerciseAdd.php" method="POST">
                <label><u>Enter your exercise and the duration of exercise</u></label>
                <br/><br/>
                <select id="eType" name="exercisetype">
                    <option value="Walk">Walk</option>
                    <option value="Cycle">Cycle</option>
                    <option value="Run">Run</option>
                </select>
                <br/><br/>
                <div class="slidecontainer">
                    <input type="range" min="5" max="120" value="5" class="slider" id="dur">
                    <p>Duration: <span id="durV"></span> minutes</p>
                    <script>
                        var slider = document.getElementById("dur");
                        var output = document.getElementById("durV");
                        output.innerHTML = slider.value;

                        slider.oninput = function () {
                            output.innerHTML = this.value;
                        };
                    </script>
                </div>
                <br>
                <br>
                <input type="submit" name="Submit">
            </form>
        </div>
    </body>
</html>
<!-- CHENG SI YUAN 19016011 -->