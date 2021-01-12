<!-- CHENG SI YUAN 19016011 -->
<!DOCTYPE html>
<?php
session_start();
include("dbFunctions.php");
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="stylesheets/registerstyle.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="js/additional-methods.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <style>
            form .error {
                color: #ff0000;
            }
        </style>
        <script>
            $(document).ready(function () {
                $('input[type=password]').focus(function () {
                    $('#message').show();
                });
                $('input[type=password]').blur(function () {
                    $('#message').hide();
                });
                $("form").validate({
                    rules: {
                        username: {
                            required: true
                        },
                        password: {
                            required: true,
                            pattern: /^[0-9a-zA-Z]{8,}$/
                        },
                        birthday: {
                            required: true
                        }
                        weight: {
                            required: true,
                            minlength: 2,
                            pattern: /^[0-9]{1,3}$/
                        },
                        height: {
                            required: true,
                            minlength: 2,
                            pattern: /^[0-9]{1,3}$/
                        },
                        
                        
                    },
                    messages: {
                        username: {
                            required: "Please enter your username"
                        },
                        password: {
                            required: "Please enter a password",
                            pattern: "Password must contain at least lowercase, uppercase letters, numbers and minimum 8 characters!"
                        },
                        birthday: {
                            required: "Enter your birthdate!"
                        }
                        weight: {
                            required: "Please enter your weight",
                            minlength: "Enter a valid weight!",
                            pattern: "Weight can only be less than 4 digits!"
                        },
                        height: {
                            required: "Please enter your height",
                            minlength: "Enter a valid height!",
                            pattern: "Height can only be less than 4 digits!"
                        },
                    },
                    submitHandler: function () {
                        return true;
                    }
                });
            });

            function showPass() {
                var pass = document.getElementById("pw");
                if (pass.type === "password") {
                    pass.type = "text";
                } else {
                    pass.type = "password";
                }
            }
        </script>
        <title>YCH - Register</title>
    </head>
    <body>
        <?php
        include 'navbar.php';
        ?>
        <h1 style="text-align: center;">Register for an YCH account</h1>
        <div class="container">
            <form id="defaultForm" method="post" action="doRegister.php">
                <div class="form-group">
                    <label>Username:*</label>
                    <input type="text" name="username" placeholder="Username" class="form-control" >
                </div>
                <div class="form-group">
                    <label>Password:*</label>
                    <input type="checkbox" onclick="showPass()"> Show Password
                    <input type="password" id="pw" name="password" placeholder="password" class="form-control">
                    
                </div>
                <div id="message" style="display: none;">
                    <h3>Password must contain the following:</h3>
                    <p id="letter" class="invalid"><b>Lowercase</b> letters</p>
                    <p id="capital" class="invalid"><b>uppercase</b> letter</p>
                    <p id="number" class="invalid">At least an <b>number</b></p>
                    <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                </div>
                <div class="form-group">
                    <label>Weight(in kg):*</label>
                    <input type="text" name="weight" placeholder="Weight" class="form-control" >
                </div>
                <div class="form-group">
                    <label>Height(in m):*</label>
                    <input type="text" name="height" placeholder="Height" class="form-control" >
                </div>
                <div class="form-group">
                    <label>Date of Birth</label>
                    <input type="date" name="birthday" class="form-control" >
                </div>
                <div class="form-group">
                    <label id="level">Active level:</label><br>
                    <label class="block" id="sedentary"><input type="radio" name="activetype" value="sedentary" checked>Sedentary</label><br>
                    <label class="block" id="moderate"><input type="radio" name="activetype" value="moderate">Moderate</label><br>
                    <label class="block" id="active"><input type="radio" name="activetype" value="active">Active</label><br>
                </div>
                <a href="login.php" style="margin: 0 auto;">Already have an account? Login here.</a>
                <input type="submit" class="btn btn-primary" value="Sign up"/>
            </form>
        </div>
    </body>
</html>

<!-- CHENG SI YUAN 19016011 -->