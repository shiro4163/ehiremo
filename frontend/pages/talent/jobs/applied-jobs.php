<!DOCTYPE html>
<html lang="en">

<head>
    <title>Applied Jobs</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--css-->
    <link rel="stylesheet" type="text/css" href="assets/css/applied-jobs.css">
    </link>
    <link rel="stylesheet" type="text/css" href="../../client/jobs/assets/css/all-job-post.css">
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
            <?php include 'talent-jobs-header.php'; ?>

            <h2 class="title" style="">Applied Jobs</h2>

            <div class="row" id="job-lists">
            </div>

        </div>
    </div>
    <!--end header-->


    <!--modal pop up apply success -->
    <div id="id01" class="modal" style="display: none;">
        <div class="modal-content">
            <div class="container">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
                </br>
                <p style="color:#555;">Application has been cancelled.</p>
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="okaybtn">Okay</button>
            </div>
        </div>
    </div>
    <!--end modal pop up apply success -->

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
    <script src="../../../assets/js/jquery-3.5.1.min.js"></script>
    <script src="./assets/js/applied_jobs.js"></script>
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