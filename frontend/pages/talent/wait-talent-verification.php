<?php
session_start();
// session_destroy();
if (isset($_SESSION['user_id'])) {
} else {
    header("Location: ../../sign-up-details.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Verification Request</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--css-->
    <link rel="stylesheet" type="text/css" href="assets/css/wait-talent-verification.css">
    </link>

    <!-- icon -->
    <link rel="shortcut icon" href="../../assets/images/index/my-icon.ico">

    <!--fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>

<body>
    <!--start header-->
    <div class="header" id="my-header">
        <div class="container">

            <!--start navbar-->
            <div class="navbar">

                <div class="logo">
                    <h1> <a href="../../index.php" style="text-decoration: none;color:white"> e<span style="font-weight: bold;">H</span>ire<span style="font-weight: bold;">M</span>o </a>
                    </h1>
                </div>

                <nav>

                </nav>

                <div class="menuItemsRight">
                    <ul>
                        <li>
                            <div class="dropdown-jobs">
                                <a href="">Jobs</a>
                                <div class="dropdown-content-jobs">
                                    <a style="color:#555;font-size: 14px;padding: 8px 10px;
                                    text-decoration: none;
                                    display: block;" href="">Browse Jobs</a>
                                    <a style="color:#555;font-size: 14px;padding: 8px 10px;
                                    text-decoration: none;
                                    display: block;" href="">Saved Jobs</a>
                                    <a style="color:#555;font-size: 14px;padding: 8px 10px;
                                    text-decoration: none;
                                    display: block;" href="">Applied Jobs</a>
                                    <a style="color:#555;font-size: 14px;padding: 8px 10px;
                                    text-decoration: none;
                                    display: block;" href="">My Jobs</a>
                                </div>
                            </div>
                        </li>



                        <li>
                            <div class="dropdown-talent">
                                <a href="">Freelancers</a>
                                <div class="dropdown-content-talent">
                                    <a style="color:#555;font-size: 14px;padding: 8px 10px;
                                    text-decoration: none;
                                    display: block;" href="">Browse Freelancers</a>
                                </div>
                            </div>
                        </li>
                        <li><a href="">Messages</a></li>
                        <li>
                            <a href="">
                                <img alt="" src="assets/images/bell.png" width="22" style="margin-bottom: -4px;" />
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img alt="" src="assets/images/help.png" width="22" style="margin-bottom: -4px;" />
                            </a>
                        </li>
                        <li>
                            <div class="dropdown-profile">
                                <a href="">
                                    <img alt="" src="assets/images/people.png" width="32" style="margin-bottom: -10px;" />
                                </a>
                                <div class="dropdown-content-profile">
                                    <div style="padding-top: 8px;padding-left: 8px;">
                                        <img alt="" src="assets/images/people.png" width="32" height="32" />
                                        <p style="font-size: 13px;color:#555;
                                        margin-top: -30px;padding-left: 40px;">Freelancer
                                        </p>
                                        <p id="web-name" style="font-size: 13px;color:#555;padding: 8px 0"></p>
                                    </div>
                                    <a style="color:#555;font-size: 14px;padding: 8px 10px;
                                    text-decoration: none;
                                    display: block;" href="">Profile</a>
                                    <a style="color:#555;font-size: 14px;padding: 8px 10px;
                                    text-decoration: none;
                                    display: block;" href="">Settings</a>
                                    <a style="color:#555;font-size: 14px;padding: 8px 10px;
                                    text-decoration: none;
                                    display: block;" href="../../index.php">Logout</a>
                                </div>
                            </div>


                        </li>
                    </ul>
                </div>

                <img alt="" src="../../assets/images/menu.png" id="menu-icon" onclick="openNav()">
            </div>
            <!--end navbar-->

            <div id="mySidenav" class="sidenav">
                <div style="text-align: left;">
                    <h1 class="logo-mobile">e<span style="font-weight: bold;">H</span>ire<span style="font-weight: bold;">M</span>o</h1>
                </div>

                <div style="padding-top: 30px;">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <div style="display:flex;flex-direction: row;
                    padding-left: 30px;padding-bottom: 20px;">
                        <img alt="" src="assets/images/people.png" width="52" />
                        <div style="display:flex;flex-direction: column;margin-left: 10px;">
                        <p id="mobile-name" style="font-size: 15px;color:#29e411;margin-top: 8px;">John Benedict T Regore
                        </p>
                        <p style="font-size: 13px;color:#fff;">Freelancer</p>
                        </div>
                    </div>

                    <p id="drop-jobs" style="font-size: 16px;margin-bottom: 25px;
                    padding-left: 32px;padding-right: 32px;">Jobs
                        <img alt="" src="assets/images/dropdown-icon.png" width="24" style="float:right" />
                    <div id="jobs-mobile-dropdown">
                        <a href="">Browse Jobs</a>
                        <a href="">Saved Jobs </a>
                        <a href="">Applied Jobs </a>
                        <a href="">My Jobs </a>
                    </div>
                    </p>
                    <p id="drop-talent" style="font-size: 16px;margin-bottom: 16px;
                    padding-left: 32px;padding-right: 32px;">Freelancers
                        <img alt="" src="assets/images/dropdown-icon.png" width="24" style="float:right" />
                    <div id="talent-mobile-dropdown">
                        <a href="" style="margin-top: 10px;">Browse Freelancers</a>
                    </div>
                    </p>



                    <a href="">Messages
                        <img alt="" src="assets/images/message.png" width="24" style="float:right" />
                    </a>
                    <a href="">Notifications
                        <img alt="" src="assets/images/bell.png" width="24" style="float:right" />
                    </a>
                    <a href="">Help
                        <img alt="" src="assets/images/help.png" width="24" style="float:right" />
                    </a>
                    <a href="">Profile
                        <img alt="" src="assets/images/profile.png" width="24" style="float:right" />
                    </a>
                    <a href="">Settings
                        <img alt="" src="assets/images/settings.png" width="24" style="float:right" />
                    </a>
                    <a href="../../index.php">Logout
                        <img alt="" src="assets/images/logout.png" width="24" style="float:right" />
                    </a>
                </div>

            </div>

            <h2 class="title" style="">Verification Request</h2>

            <div class="row">

                <div class="col-2" style="align-items: center;padding-bottom: 50px;
                padding-top:80px;">
                    <center>
                        <img alt="" src="assets/images/44621-keito-frontpage-animation.gif" width="280" />
                    </center>
                    <p style="font-size: 16px;color:#333;margin-top:15px;text-align:center;padding: 0 40px;">
                        Our team has already been adviced and will soon authorize your access to the website, this will take a few minutes.
                        You will receive an confirmation e-mail when the process is complete. </p>
                </div>


            </div>


        </div>
    </div>
    <!--end header  -->

    <!----- footer ------>
    <div class="footer">
        <div class="container">
            <div class="row">

                <div class="col-4">
                    <ul>
                        <li><a href="">About us</a></li>
                        <li><a href="">Feedback</a></li>
                        <li><a href="">Community</a></li>
                    </ul>
                </div>

                <div class="col-4">
                    <ul>
                        <li><a href="">Trust, Safety and Security</a></li>
                        <li><a href="">Help & Support</a></li>
                        <li><a href="">Upwork Foundation</a></li>
                    </ul>
                </div>

                <div class="col-4">
                    <ul>
                        <li><a href="">Terms of Service</a></li>
                        <li><a href="">Privacy Policy</a></li>
                        <li><a href="">Accessibility</a></li>
                    </ul>
                </div>

                <div class="col-4">
                    <ul>
                        <li><a href="">Desktop App</a></li>
                        <li><a href="">Cookie Policy</a></li>
                        <li><a href="">Enterprise Solution</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <!----- script ------>
    <script src="../../assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/wait_talent_verification.js"></script>
    <script>
        $(document).on('click', '#drop-talent', function() {
            if ($("#talent-mobile-dropdown").css("height") == '20px') {
                $("#talent-mobile-dropdown").css({
                    height: "125px",
                    display: "block"
                });
            } else {
                $("#talent-mobile-dropdown").css({
                    height: "20px",
                    display: "none",
                });
            }
        });

        $(document).on('click', '#drop-jobs', function() {
            if ($("#jobs-mobile-dropdown").css("height") == '20px') {
                $("#jobs-mobile-dropdown").css({
                    height: "125px",
                    display: "block",
                });
            } else {
                $("#jobs-mobile-dropdown").css({
                    height: "20px",
                    display: "none",
                });
            }
        });

        // $(document).on('click', '#next', function() {
        //     window.location = "jobs/all-job-post.html";
        // });

        function openNav() {
            document.getElementById("mySidenav").style.width = "100%";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>

</body>

</html>