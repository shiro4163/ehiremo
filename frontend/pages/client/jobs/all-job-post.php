<!DOCTYPE html>
<html lang="en">

<head>
    <title>All Job Postings</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--css-->
    <link rel="stylesheet" type="text/css" href="assets/css/all-job-post.css">
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
            <?php include 'client-job-header.php'; ?>

            <h2 class="title" style="">All Job Postings</h2>



            <div class="row" id="job-lists">

                <!-- search 
                <div class="col-2 col-2-22">
                    
                    <div class="col-2-2">
                        <p style="color:#555;font-size: 14px;">10,000 Jobs found.</p>
                        <label style="color:#555;font-size: 16px;
                        margin-right: 10px;
                        margin-top: 3px;">Filter by: </label>
                        <select id="select-sort">
                            <option>Services</option>
                            <option>Age</option>
                            <option>Project Scope</option>
                            <option>Budget</option>
                            <option>Location</option>
                        </select>
                    </div>

                    <div style="flex-basis: 50%;">
                        <div class="wrapper">
                            <img class="search-icon" src="../../../assets/images/index/search.png">
                            <input placeholder="Search" type="text" class="search">
                        </div>
                    </div>
                </div> -->

                <!-- <div class="col-2" style="border-bottom: 1px solid rgb(214, 214, 214);
                display: flex;padding-top: 30px;">

                    <div style="width: 70%;height: 100%;">
                    </div>

                    
                    
                </div> -->

                
                
                
                

            </div>

        </div>
    </div>
    <!--end header-->



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
    <script src="./assets/js/all_job_post.js"></script>
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