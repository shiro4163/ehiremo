<!DOCTYPE html>
<html lang="en">
<head>
    <title>Saved Freelancers</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--css-->
    <link rel="stylesheet" type="text/css" href="assets/css/browse-talents.css">
    </link>
    <link rel="stylesheet" type="text/css" href="assets/css/saved-talents.css">
    </link>
    <link rel="stylesheet" type="text/css" href="../../../assets/css/jquery-rateyo.css">
    </link>

    <!-- icon -->
    <link rel="shortcut icon" href="../../../assets/images/index/my-icon.ico">

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
            <?php include 'client-talent-header.php'; ?>

            <h2 class="title" style="">My Saved Freelancers</h2>

            <div class="row" id="freelancer-lists">
                
            
            </div>
            

            

        </div>
    </div>
    <!--end header-->



    <!--modal pop up saved success -->
    <div id="id01" class="modal" style="display: none;">
        <div class="modal-content">
            <div class="container">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
                </br>
                <p style="color:#555;font-size:16px;">Freelancer removed successfully.</p>
                </br>
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="okaybtn">Okay</button>
            </div>
        </div>
    </div>
    <!--end modal pop up saved success -->

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
    <script src="../../../assets/js/jquery-3.5.1.min.js"></script>
    <script src="../../../assets/js/jquery-rateyo.js"></script>
    <script src="./assets/js/saved_talents.js"></script>
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