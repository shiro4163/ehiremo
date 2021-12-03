<!DOCTYPE html>
<html>

<head>
    <title>Sign Up Details</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--css-->
    <link rel="stylesheet" type="text/css" href="assets/css/sign-up-details.css">
    </link>

    <!-- icon -->
    <link rel="shortcut icon" href="assets/images/index/my-icon.ico">

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
                    <h1> <a href="index.php" style="text-decoration: none;color:white"> e<span style="font-weight: bold;">H</span>ire<span style="font-weight: bold;">M</span>o </a>
                    </h1>
                </div>

                <div class="menuItemsRight">
                    <ul>
                        <li style="color: #fff"><span id="have">Already have an account ?</span>
                            <a id="login" href="login.php">Login</a>
                        </li>
                    </ul>
                </div>

                <img src="assets/images/menu.png" id="menu-icon" onclick="openNav()">
            </div>
            <!--end navbar-->

            <div id="mySidenav" class="sidenav">
                <div style="text-align: left;">
                    <h1 class="logo-mobile">e<span style="font-weight: bold;">H</span>ire<span style="font-weight: bold;">M</span>o</h1>
                </div>

                <div class="wrapper-mobile">
                    <img class="search-icon-mobile" src="assets/images/index/search.png">
                    <input placeholder="Search" type="text" class="search-mobile">
                    <img class="clear-icon-mobile" src="assets/images/index/close.png">
                </div>

                <div style="padding-top: 30px;">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <a href="find-talent.php">Find Freelancers</a>
                    <a href="find-work.php">Find Work</a>
                    <a href="career-advice.php">Career Advice</a>
                </div>

                <div class="nav-mobile">
                    <button id="login-mobile">Login</button><br>
                    <button id="signup-mobile">Sign Up</button><br>
                </div>
            </div>

            <div class="row">

                <div class="col-2">
                    <h1>Complete your account setup</h1>
                    <div id="validation-display" style="background-color:rgb(255, 186, 186);
                    align-items:center;display:none;">
                        <p id="validation-text" style="color:rgb(216, 0, 12);font-size: 14px;padding-top: 10px;">wrong password </p>
                    </div>
                    <form id="signup-form" enctype="multipart/form-data">
                        <div style="text-align: left;">
                            <p style="font-size: 16px; margin-top: 20px;
                        margin-bottom: 6px;color:#555">Im looking for:</p>
                            <input type="radio" style="cursor: pointer" name="user_pos" value="freelancer" required><label> a
                                client</label><br />
                            <input type="radio" style="cursor: pointer" name="user_pos" value="client" required><label> a freelance
                                service provider</label>
                        </div>

                        <div class="wrapper fl">
                            <input id="input-email" type="text" placeholder="Work Email" name="email" required>

                            <!-- <div id="gender-select"> -->
                                <label style="color:#555;font-size: 16px;
                        margin-right: 10px;
                        margin-top: 3px;margin-left: 10px;text-align:left;">Gender: </label>
                                <select id="select-gender" required>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            <!-- </div> -->
                        </div>

                        <div class="acc-reg-name">
                            <div class="wrapper p-40">
                                <input id="input-firstname" type="text" placeholder="Firstname" required>
                            </div>

                            <div class="wrapper p-40">
                                <input id="input-lastname" type="text" placeholder="Lastname" required>
                            </div>

                            <div class="wrapper p-20">
                                <input id="input-mi" type="text" placeholder="M.I" required maxlength="2">
                            </div>
                        </div>


                        <div class="wrapper">
                            <input id="input-address" type="text" placeholder="Address" required>
                        </div>

                        <div class="wrapper">
                            <input id="input-date" type="text" placeholder="Birthday" onfocus="(this.type='date')" required title="Age must be 18 years old or above.">
                        </div>

                        <div class="wrapper">
                            <input id="input-password" type="password" placeholder="Create password" required title="Username must be 8-10 characters" maxlength="10">
                        </div>

                        <div class="wrapper">
                            <input id="input-password-conf" type="password" placeholder="Confirm password" required title="Username must be 8-10 characters" maxlength="10">
                        </div>

                        <div style="text-align: left;margin-top: 10px;">
                            <input type="checkbox" style="cursor: pointer" required>
                            <label style="font-size: 14px;">Yes, I understand and agree to the
                                <span style="color:#14a800; cursor: pointer;">Terms of Service</span>,
                                including the
                                <span style="color:#14a800; cursor: pointer;">User Agreement</span> and
                                <span style="color:#14a800; cursor: pointer;"> Privacy Policy</span> </label>
                        </div>

                        <button id="continue-email">Create my account</button>
                    </form>
                </div>

            </div>

        </div>
    </div>
    <!--end header-->


    <!----- footer ------>
    <div class="footer">
        <div class="container">
            <div class="row">

                <div style="text-align: center;">
                    <h1 style="padding-bottom: 50;font-size: 18px;font-weight: 500;">© 2021 eHireMo</h1>
                    <br />
                    <ul>
                        <li><a href="">Terms of Service</a></li>
                        <li><a href="">Privacy Policy</a></li>
                        <li><a href="">Accessibility</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <!----- script ------>
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/sign_up_details.js"></script>
    <script>
        $(document).on('click', '.logo-mobile', function() {
            window.location = "index.php";
        });

        // $(document).on('click', '#continue-email', function() {
        //     var ele = document.getElementsByName('user_pos');
        //     var user;

        //     for (i = 0; i < ele.length; i++) {
        //         if (ele[i].checked) {
        //             user = ele[i].value;
        //         }
        //     }

        //     if (user === "client") {
        //         window.location = "pages/client/client-verification.php";
        //     } else if (user === "freelancer") {
        //         window.location = "pages/talent/talent-verification.php";
        //     } else {
        //         alert("Please choose.")
        //     }
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