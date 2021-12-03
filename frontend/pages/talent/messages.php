<!DOCTYPE html>
<html>

<head>
    <title>Messages</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--css-->
    <link rel="stylesheet" type="text/css" href="assets/css/messages.css">
    </link>
    <link rel="stylesheet" type="text/css" href="../client/assets/css/messages.css">
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
            <?php include 'talent-header.php'; ?>
            
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


    <!--modal-->
    <div class="modal-message" id="modal-message" style="display: none;">
        <div class="modal">
            <div class="modal-header">
                <span id="close-message">&times;</span>
            </div>


            <div class="row">

				<div class="col-2">
					<h1>Set appointment between you and Norma G.</h1><br />

                    <div class="wrapper" >
                        <label>Project Cost</label><br/>
						<input id="project-cost" type="text" placeholder="ex. 5,000">
					</div>

                    <div class="wrapper" >
                        <label>Start Date</label><br/>
						<input id="start-date" type="text" placeholder="Start Date here..."
						onfocus="(this.type='date')">
					</div>

                    <div class="wrapper" >
                        <label>End Date</label><br/>
						<input id="end-date" type="text" placeholder="End Date here..."
						onfocus="(this.type='date')">
					</div>

                    <div class="wrapper" >
                        <label>Service</label><br/>
						<input id="input-service" type="text" placeholder="Ex. Makeup">
					</div>

                    <button id="hire-btn">Hire Norma G.</button>

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
        $(document).on('click', '#drop-talent', function () {
            if ($("#talent-mobile-dropdown").css("height") == '20px') {
                $("#talent-mobile-dropdown").css({
                    height: "50px",
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
                    height: "170px",
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

        $(document).on('click', '#appoint-btn', function() {
            $("#modal-message").fadeIn();
        });

        $(document).on('click', '#close-message', function() {
            $("#modal-message").fadeOut();
        });



        $(document).on('click', '.logo-mobile', function () {
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