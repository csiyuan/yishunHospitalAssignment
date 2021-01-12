<!-- CHENG SI YUAN 19016011 -->
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            .dropdown-content {
                background-color: #111;
                color: white;
                padding: 16px;
                font-size: 16px;
                border: none;
            }

            .dropdown {
                position: relative;
                display: inline-block;
            }

            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #111;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
            }

            .dropdown-content a {
                color: #111;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
            }

            .dropdown-content a:hover {background-color: dimgrey;}

            .dropdown:hover .dropdown-content {display: block;}

            .dropdown:hover .dropbtn {background-color: #3e8e41;}
        </style>
    </head>
    <body>
        <div id="menu">
            <nav class="navbar navbar-expand-lg navbar-light bg-danger">
                <a class="navbar-brand" href="index.php"><b>Yishun Community Hospital</b></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto ">
                        <?php if (isset($_SESSION['username'])) { ?>
                            <li> <a href="index.php">Home</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#exercise" id="navbardrop" data-toggle="dropdown">
                                    Exercise
                                </a>
                                <div class="dropdown-content">
                                    <a href="exerciseAdd.php">Add Exercise Entry</a>
                                    <a href="exerciseSummary.php">Exercise Summary</a>
                                </div>
                            </li>

                            <li><a href='https://www.yishuncommunityhospital.com.sg/contactus/Pages/Contact-Us-Directions.aspx'>Contact Us</a></li>
                            <li><a href='https://www.ktph.sg/feedback/home/index/3'>Feedbacks</a></li>
                            <li> <a href="logout.php">Log out</a></li>

                        <?php } else { ?>
                            <li><a href="login.php">Login</a></li>
                            <li><a href="register.php">Register</a></li>
                        <?php } ?>

                    </ul>
                </div>
            </nav>
        </div>
        <!-- CHENG SI YUAN 19016011 -->