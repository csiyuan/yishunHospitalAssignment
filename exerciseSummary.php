<!-- CHENG SI YUAN 19016011 -->

<!DOCTYPE html>

<?php
session_start();
include("dbFunctions.php");
$username = $_SESSION['username'];
$querySummary = "SELECT type, duration
                 FROM enter
                 WHERE name = '$username'";

$resultSummary = mysqli_query($link, $querySummary);
?>

<html>
    <head>
        <meta charset="UTF-8">
        <link href="stylesheets/style.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <title>Exercise Summary</title>
        <style>
            .container{
                margin-top: 30px;
            }
            table{
                margin-top: 50px;
            }
            .green {
                background-color: lightgreen;
            }
            .red {
                background-color: coral;
            }
            /* basic positioning */
            .legend { 
                list-style: none; 
            }
            .legend li {
                float: left; 
                margin-right: 10px; 
                margin-top: 5px;
            }
            .legend span { 
                border: 1px solid #ccc; 
                float: left; width: 12px; 
                height: 12px; 
                margin: 2px; 
                margin-top: 7px;
            }
            /* your colors */
            .legend .adequate { 
                background-color: lightgreen; 
            }
            .legend .inadequate { 
                background-color: lightcoral; 
            }
            body{
                background-image: url(./images/exercise.jpg);
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size:cover;
            }

        </style>
        <script>
            $(document).ready(function () {
                $("#eTypes").change(function () {
                    var eType = $(this).val();
                    if (eType == 0) {
                        $('tr').show();
                    } else {
                        $('tr').hide();
                        $('.header').show();
                        $('.' + eType).show();
                    }
                });

            });
        </script>
    </head>
    <body>
        <?php
        include 'navbar.php';
        ?>

        <div class="container">
            <h3 style='text-decoration: underline'>Exercise Summary</h3>
            <br>
            <form>
                <div class="form-group">
                    <label for="eTypes">Select Exercise Types:</label>
                    <select id="eTypes" class="form-control">
                        <option value="0">
                            Show All
                        </option>
                        <option value="Walk">
                            Walk
                        </option>
                        <option value="Cycle">
                            Cycle
                        </option>
                        <option value="Run">
                            Run
                        </option>
                    </select>
                </div>
            </form>

            <div>
                <br>
                <label>Legend:</label>
                <ul class="legend">
                    <li style='font-weight: bold'><span class="adequate"></span> Adequate Exercise</li>
                    <li style='font-weight: bold'><span class="inadequate"></span> Inadequate Exercise</li>
                </ul>
            </div>
            <table id="summaryTable" class="table table-responsive-sm-6 table-responsive-lg-3 table-hover table-bordered bg-dark">
                <tr class="header">
                    <th style='color: floralwhite'>Exercise Type</th>
                    <th style='color: floralwhite'>Duration</th>
                </tr>
                <?php
                while ($row = mysqli_fetch_assoc($resultSummary)) {
                    $type = $row['type'];
                    $duration = $row['duration'];
                    ?>
                    <tr class="<?php echo $type; ?>">
                        <td style='color: greenyellow'>
                            <?php echo $type; ?>
                        </td>
                        <?php
                        $adequate = "<td class='green'>$duration</td>";
                        $inadequate = "<td class='red'>$duration</td>";
                        if ($type == "Walk") {
                            if ($duration < 30) {
                                echo $inadequate;
                            } else {
                                echo $adequate;
                            }
                        }
                        if ($type == "Run") {
                            if ($duration < 10) {
                                echo $inadequate;
                            } else {
                                echo $adequate;
                            }
                        }
                        if ($type == "Cycle") {
                            if ($duration < 20) {
                                echo $inadequate;
                            } else {
                                echo $adequate;
                            }
                        }
                        ?>
                        </td>
                    </tr>
                    <?php
                }
                ?>    
            </table>
        </div>
    </body>
</html>
<!-- CHENG SI YUAN 19016011 -->