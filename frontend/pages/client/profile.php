<!DOCTYPE html>
<html lang="en">

<head>
    <title>My Profile</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--css-->
    <link rel="stylesheet" type="text/css" href="./jobs/assets/css/all-job-post.css">
    </link>
    <link rel="stylesheet" type="text/css" href="assets/css/profile.css">
    </link>
    <link rel="stylesheet" type="text/css" href="../../assets/css/jquery-rateyo.css">
    </link>

    <!-- icon -->
    <link rel="shortcut icon" href="../../assets/images/index/my-icon.ico">

    <!--fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>

<body>
    <!--start header-->
    <div class="header" id="my-header">
        <div class="container">

            <!----- ***************** header  ***************** ------>
            <?php include 'client-header.php'; ?>

            <h2 class="title" style="">Previous Appointments</h2>

            

            <div class="row" style="border: none;margin-bottom: 30px;" id="f-row">

                
                <div class="header-10">
                    <img alt="" id="talent-img-profile" src="assets/images/people.png" class="this-image" width="120px" height="120px" style="border-radius:50%;object-fit:cover;">
                </div>
                <div class="profile-header-info header-80">
                <span style="font-size:20px;font-weight:500;" id="talent-name-profile"></span> <span style="font-weight: 400;font-size:20px;" id="talent-role-profile"></span>
                    <p id="talent-address-profile"></p>
                    <div id="rate-css">
                        <p> Rating : <span id="rateYoNum" style="color:#14a800"> </span></p>
                        <div id="rateYo" style="margin-top:5px;">

                        </div>
                    </div>
                </div>
            </div>
            
            <input type="hidden" id="profile_role"/>
            <!-- if data == 0 -->
             <!-- <div class="row">
                <div class="col-2 less-padding" style="
                padding-top: 30px;text-align: center;">

                    <img src="assets/images/teamwork-illustration.png" width="90" />
                    <h1>No appointments yet</h1>

                </div>

            </div>  -->
            <div id="no-data">

            </div>

            <div id="profile-lists">
            </div> 
            
            

        </div>
    </div>
    <!--end header-->

    <div class="row" style="margin-bottom:20px;"> 
        <div id="list-end">
            <p id="result-end" style="opacity:0;">End of results.</p>
        </div>
    </div>

    <!----- footer ------>
    <div class="footer">
        <div class="container">
            <div class="row">

                <div class="col-4">
                    <ul>
                        <li><a href="#" title="">About us</a></li>
                        <li><a href="#" title="">Feedback</a></li>
                        <li><a href="#" title="">Community</a></li>
                    </ul>
                </div>

                <div class="col-4">
                    <ul>
                        <li><a href="#" title="">Trust, Safety and Security</a></li>
                        <li><a href="#" title="">Help & Support</a></li>
                        <li><a href="#" title="">Upwork Foundation</a></li>
                    </ul>
                </div>

                <div class="col-4">
                    <ul>
                        <li><a href="#" title="">Terms of Service</a></li>
                        <li><a href="#" title="">Privacy Policy</a></li>
                        <li><a href="#" title="">Accessibility</a></li>
                    </ul>
                </div>

                <div class="col-4">
                    <ul>
                        <li><a href="#" title="">Desktop App</a></li>
                        <li><a href="#" title="">Cookie Policy</a></li>
                        <li><a href="#" title="">Enterprise Solution</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    

    <!----- script ------>
    <script src="../../assets/js/jquery-3.5.1.min.js"></script>
    <script src="../../assets/js/jquery-rateyo.js"></script>
    <script src="./assets/js/profile.js"></script>
    <script>
        $(document).on('click', '#drop-talent', function () {
            if ($("#talent-mobile-dropdown").css("height") == '20px') {
                $("#talent-mobile-dropdown").css({
                    height: "125px",
                    display: "block"
                });
            }
            else {
                $("#talent-mobile-dropdown").css({
                    height: "20px",
                    display: "none",
                });
            }
        });

        $(document).on('click', '#drop-jobs', function () {
            if ($("#jobs-mobile-dropdown").css("height") == '20px') {
                $("#jobs-mobile-dropdown").css({
                    height: "125px",
                    display: "block",
                });
            }
            else {
                $("#jobs-mobile-dropdown").css({
                    height: "20px",
                    display: "none",
                });
            }
        });



        $(document).on('click', '.logo-mobile', function () {
            window.location = "index.php";
        });


        function openNav() {
            document.getElementById("mySidenav").style.width = "100%";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }

    </script>

</body>

</html>