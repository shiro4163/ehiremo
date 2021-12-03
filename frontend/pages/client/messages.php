<?php
session_start();
// session_destroy();
if (isset($_SESSION['user_id'])) {
} else {
    header("Location: ../../index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Messages</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--css-->
    <link rel="stylesheet" type="text/css" href="assets/css/messages.css">
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

            <!----- ***************** header  ***************** ------>
            <?php include 'client-header.php'; ?>

            <h2 class="title" style="">Messages</h2>

            <div class="row">


                <div class="col-2" style="border-bottom: 1px solid rgb(214, 214, 214);
                text-align: center;display: flex;flex-direction: row;">

                    <div class="messages-left" id="messages-left">

                        <div class="messages-header-left">
                            <p style="font-size: 20px;">Chats</p>
                            <button id="new-message">New</button>
                        </div>

                        <div class="wrapper" style="margin-top: 10px;margin-left: -6px;
                        margin-left: 20px;margin-right: 20px;">
                            <img class="search-icon" src="../../assets/images/index/search.png">
                            <input placeholder="Search" type="text" class="search" style="width: 100%;
                            border: 1px solid rgb(214, 214, 214)">
                            <img class="clear-icon" src="../../assets/images/index/close.png">
                        </div>

                        <div id="chatterist">

                        </div>


                    </div>

                    <div class="messages-right" id="messages-right">



                    </div>
                </div>



            </div>

        </div>
    </div>
    <!--end header-->

    <!--modal pop up confirmation style="display: none;"-->
    <div id="id01" class="modall" style="display: none;">
        <div class="modal-content">
            <div class="container">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
                </br>
                <p>Are you sure you want to hire <span id="hire-name"> </span> ? </p>
                <div class="clearfix">
                    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn" id="cancel-appoint">Cancel</button>
                    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="okaybtn" id="okaybtn">Yes</button>
                </div>
            </div>
        </div>
    </div>
    <!--end modal pop up confirmation-->

    <!--modal pop up success -->
    <div id="id02" class="modall" style="display: none;">
        <div class="modal-content">
            <div class="container">
                <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">×</span>
                </br>
                <p>Appointment has been set successfully. </p>
                <div class="clearfix">
                    <button type="button" onclick="document.getElementById('id02').style.display='none'" class="okaybtnn" >Okay</button>
                </div>
            </div>
        </div>
    </div>
    <!--end modal pop up success-->

    <!--modal-->
    <div class="modal-message" id="modal-message" style="display: none;">
        <div class="modal">
            <div class="modal-header">
                <span id="close-message">&times;</span>
            </div>


            <div class="row">

                <div class="col-2">
                    <h1>Set appointment between you and <span id="appoint-name"></span></h1><br />
                    <div class="wrapper">
                        <label>Project Description <span id="span-desc" style="opacity:0;">
                        You do not have any job post.</span>
                        </label><br />
                        <select id="project-desc">
                            <option value="default" selected hidden>Choose in your job post</option>
                        </select>
                    </div>

                    <div class="wrapper">
                        <label>Project Cost <span id="span-cost" style="opacity:0;">
                        </span>
                        </label><br />
                        <input id="project-cost" type="text" placeholder="ex. 5,000" 
                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                    </div>

                    <div class="wrapper">
                        <label>Project Address</label><br />
                        <input id="project-addr" type="text" placeholder="" disabled>
                    </div>

                    <div class="wrapper">
                        <label>Start Date <span id="span-start" style="opacity:0;">
                        </span>
                        </label><br />
                        <input id="start-date" type="text" placeholder="Start Date here..." onfocus="(this.type='date')">
                    </div>

                    <div class="wrapper">
                        <label>End Date <span id="span-end" style="opacity:0;">
                        </span>
                        </label><br />
                        <input id="end-date" type="text" placeholder="End Date here..." onfocus="(this.type='date')">
                    </div>

                    <!-- <div class="wrapper" >
                        <label>Service</label><br/>
						<input id="input-service" type="text" placeholder="Ex. Makeup">
					</div> -->

                    <div class="wrapper">
                        <label>Service</label>
                        <!-- <input id="input-service" type="text" placeholder="" disabled> -->
                        <!-- <button id="add-skill">Add</button> -->
                        <!-- <button id="show-test">Show</button> -->
                            <div id="skills-container" class="skills-button" style="margin-top: 5px;
                             margin-bottom: 5px;max-width:400px;">
                            </div>
                    </div>

                    <button id="hire-btn">Hire <span id="appoint-name2"></span></button>

                </div>

            </div>

        </div>
    </div>
    <!--end modal-->


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
    <script src="./assets/js/messages.js"></script>
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







        $(document).on('click', '.logo-mobile', function() {
            window.location = "index.php";
        });

        // const clearIcon = document.querySelector(".clear-icon");
        // const searchBar = document.querySelector(".search");

        // searchBar.addEventListener("keyup", () => {
        //     if (searchBar.value && clearIcon.style.visibility != "visible") {
        //         clearIcon.style.visibility = "visible";
        //     } else if (!searchBar.value) {
        //         clearIcon.style.visibility = "hidden";
        //     }
        // });

        // clearIcon.addEventListener("click", () => {
        //     searchBar.value = "";
        //     clearIcon.style.visibility = "hidden";
        // })

        function openNav() {
            document.getElementById("mySidenav").style.width = "100%";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }

        function openChat() {
            document.getElementById("messages-left").style.display = "none";
            document.getElementById("messages-right").style.display = "block";
        }
    </script>

</body>

</html>