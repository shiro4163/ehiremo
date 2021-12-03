<!DOCTYPE html>
<html>

<head>
	<title>Find Work</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!--css-->
	<link rel="stylesheet" type="text/css" href="assets/css/find-work.css">
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
					<h1> <a href="index.php" style="text-decoration: none;color:white"> e<span style="font-weight: bold;">H</span>ire<span style="font-weight: bold;">M</span>o </a></h1>
				</div>

				<nav>
					<ul id="menuItems">
						<li><a href="find-talent.php">Find Freelancers</a></li>
						<li><a href="find-work.php">Find Work</a></li>
						<li><a href="career-advice.php">Career Advice</a></li>
					</ul>
				</nav>

                <div class="menuItemsRight">
                    <ul>
                        <li><a href="login.php">Login</a></li>
                        <li>
                            <a href="sign-up-details.php" id="sign-up" style="border-left: 1px solid #fff;" >Sign Up</a>
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
					<h1>Find your freelance jobs</h1><br />
					<p>Find the right freelance job for your next work
                         opportunity on this platform
                          connecting savvy clients and professional freelancers. 
					</p>
				</div>

				<div class="col-2">
					
				</div>

			</div>

		</div>
	</div>
	<!--end header-->

	<!----- categories ------>
	<div class="categories" id="my-categories">
		<div class="small-container">
            <div class="row" style="margin-bottom: 30px; margin-top: 20px; margin-left: 30px;">
				<img src="assets/images/index/logo.png" class="this-image" width="300px">
			</div>

			<h2 class="title">Top Job offer</h2>

			<div class="row">
				<div class="col-3">
					<h1><i class="fa fa-info-circle" aria-hidden="true"></i> Delivery Rider</h1>
					<h3><i class="fa fa-map-marker" aria-hidden="true"></i> Pulilan Bulacan</h3>
					<div class="categories-small">
						<small>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit.
							Quae delectus consequatur ipsam similique ut vero ea dolore non.
						</small>
					</div>


					<div class="categories-p2">
                        <p ><span> Php 150.00 </span> per hour </p>
						<p>Posted 3 days ago</p>
						<p class="arrow-right"><i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i></p>
					</div>

					<div class="categories-img">
						<img style="border-radius: 50%;" src="./pages/client/assets/images/people.png" />
					</div>
				</div>
				<div class="col-3">
					<h1><i class="fa fa-info-circle" aria-hidden="true"></i> Cashier</h1>
					<h3><i class="fa fa-map-marker" aria-hidden="true"></i> Pulilan Bulacan</h3>
					<div class="categories-small">
						<small>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit.
							Quae delectus consequatur ipsam similique ut vero ea dolore non.
						</small>
					</div>

					<div class="categories-p2">
                        <p ><span> Php 150.00 </span> per hour </p>
						<p>Posted 3 days ago</p>
						<p class="arrow-right"><i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i></p>
					</div>

					<div class="categories-img">
						<img style="border-radius: 50%;" src="./pages/client/assets/images/people.png" />
					</div>
				</div>
				<div class="col-3">
					<h1><i class="fa fa-info-circle" aria-hidden="true"></i> Web Developer</h1>
					<h3><i class="fa fa-map-marker" aria-hidden="true"></i> Pulilan Bulacan</h3>
					<div class="categories-small">
						<small>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit.
							Quae delectus consequatur ipsam similique ut vero ea dolore non.
						</small>
					</div>

					<div class="categories-p2">
                        <p ><span> Php 150.00 </span> per hour </p>
						<p>Posted 3 days ago</p>
						<p class="arrow-right"><i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i></p>
					</div>

					<div class="categories-img">
						<img style="border-radius: 50%;" src="./pages/client/assets/images/people.png" />
					</div>
				</div>
			</div>

            <div class="row">
				<div class="col-3">
					<h1> <i class="fa fa-info-circle" aria-hidden="true"></i> Video Editor</h1>
					<h3><i class="fa fa-map-marker" aria-hidden="true"></i> Pulilan Bulacan</h3>
					<div class="categories-small">
						<small>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit.
							Quae delectus consequatur ipsam similique ut vero ea dolore non.
						</small>
					</div>


					<div class="categories-p2">
                        <p ><span> Php 150.00 </span> per hour </p>
						<p>Posted 3 days ago</p>
						<p class="arrow-right"><i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i></p>
					</div>

					<div class="categories-img">
						<img style="border-radius: 50%;" src="./pages/client/assets/images/people.png" />
					</div>
				</div>
				<div class="col-3">
					<h1><i class="fa fa-info-circle" aria-hidden="true"></i> Cleaners</h1>
					<h3><i class="fa fa-map-marker" aria-hidden="true"></i> Pulilan Bulacan</h3>
					<div class="categories-small">
						<small>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit.
							Quae delectus consequatur ipsam similique ut vero ea dolore non.
						</small>
					</div>

					<div class="categories-p2">
                        <p ><span> Php 150.00 </span> per hour </p>
						<p>Posted 3 days ago</p>
						<p class="arrow-right"><i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i></p>
					</div>

					<div class="categories-img">
						<img style="border-radius: 50%;" src="./pages/client/assets/images/people.png" />
					</div>
				</div>
				<div class="col-3">
					<h1><i class="fa fa-info-circle" aria-hidden="true"></i> Home Service</h1>
					<h3><i class="fa fa-map-marker" aria-hidden="true"></i> Pulilan Bulacan</h3>
					<div class="categories-small">
						<small>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit.
							Quae delectus consequatur ipsam similique ut vero ea dolore non.
						</small>
					</div>

					<div class="categories-p2">
                        <p ><span> Php 150.00 </span> per hour </p>
						<p>Posted 3 days ago</p>
						<p class="arrow-right"><i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i></p>
					</div>

					<div class="categories-img">
						<img style="border-radius: 50%;" src="./pages/client/assets/images/people.png" />
					</div>
				</div>
			</div>

            <div class="row">
				<div class="col-3">
					<h1><i class="fa fa-info-circle" aria-hidden="true"></i> Sales Agent</h1>
					<h3><i class="fa fa-map-marker" aria-hidden="true"></i> Pulilan Bulacan</h3>
					<div class="categories-small">
						<small>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit.
							Quae delectus consequatur ipsam similique ut vero ea dolore non.
						</small>
					</div>


					<div class="categories-p2">
                        <p ><span> Php 150.00 </span> per hour </p>
						<p>Posted 3 days ago</p>
						<p class="arrow-right"><i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i></p>
					</div>

					<div class="categories-img">
						<img style="border-radius: 50%;" src="./pages/client/assets/images/people.png" />
					</div>
				</div>
				<div class="col-3">
					<h1><i class="fa fa-info-circle" aria-hidden="true"></i> Repair</h1>
					<h3><i class="fa fa-map-marker" aria-hidden="true"></i> Pulilan Bulacan</h3>
					<div class="categories-small">
						<small>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit.
							Quae delectus consequatur ipsam similique ut vero ea dolore non.
						</small>
					</div>

					<div class="categories-p2">
                        <p ><span> Php 150.00 </span> per hour </p>
						<p>Posted 3 days ago</p>
						<p class="arrow-right"><i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i></p>
					</div>

					<div class="categories-img">
						<img style="border-radius: 50%;" src="./pages/client/assets/images/people.png" />
					</div>
				</div>
				<div class="col-3">
					<h1><i class="fa fa-info-circle" aria-hidden="true"></i> Online Tutor</h1>
					<h3><i class="fa fa-map-marker" aria-hidden="true"></i> Pulilan Bulacan</h3>
					<div class="categories-small">
						<small>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit.
							Quae delectus consequatur ipsam similique ut vero ea dolore non.
						</small>
					</div>

					<div class="categories-p2">
                        <p ><span> Php 150.00 </span> per hour </p>
						<p>Posted 3 days ago</p>
						<p class="arrow-right"><i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i></p>
					</div>

					<div class="categories-img">
						<img style="border-radius: 50%;" src="./pages/client/assets/images/people.png" />
					</div>
				</div>
			</div>

            <div class="row">
				<div class="col-3">
					<h1><i class="fa fa-info-circle" aria-hidden="true"></i> Make Up Artist</h1>
					<h3><i class="fa fa-map-marker" aria-hidden="true"></i> Pulilan Bulacan</h3>
					<div class="categories-small">
						<small>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit.
							Quae delectus consequatur ipsam similique ut vero ea dolore non.
						</small>
					</div>


					<div class="categories-p2">
                        <p ><span> Php 150.00 </span> per hour </p>
						<p>Posted 3 days ago</p>
						<p class="arrow-right"><i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i></p>
					</div>

					<div class="categories-img">
						<img style="border-radius: 50%;" src="./pages/client/assets/images/people.png" />
					</div>
				</div>
				<div class="col-3">
					<h1><i class="fa fa-info-circle" aria-hidden="true"></i> Plumbing</h1>
					<h3><i class="fa fa-map-marker" aria-hidden="true"></i> Pulilan Bulacan</h3>
					<div class="categories-small">
						<small>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit.
							Quae delectus consequatur ipsam similique ut vero ea dolore non.
						</small>
					</div>

					<div class="categories-p2">
                        <p ><span> Php 150.00 </span> per hour </p>
						<p>Posted 3 days ago</p>
						<p class="arrow-right"><i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i></p>
					</div>

					<div class="categories-img">
						<img style="border-radius: 50%;" src="./pages/client/assets/images/people.png" />
					</div>
				</div>
				<div class="col-3">
					<h1><i class="fa fa-info-circle" aria-hidden="true"></i> Graphic Designer</h1>
					<h3><i class="fa fa-map-marker" aria-hidden="true"></i> Pulilan Bulacan</h3>
					<div class="categories-small">
						<small>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit.
							Quae delectus consequatur ipsam similique ut vero ea dolore non.
						</small>
					</div>

					<div class="categories-p2">
                        <p ><span> Php 150.00 </span> per hour </p>
						<p>Posted 3 days ago</p>
						<p class="arrow-right"><i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i></p>
					</div>

					<div class="categories-img">
						<img style="border-radius: 50%;" src="./pages/client/assets/images/people.png" />
					</div>
				</div>
			</div>


		</div>
	</div>
	<!----- end categories ------>


	<!----- footer ------>
	<div class="footer">
		<div class="container">
			<div class="row">

				<div class="col-4">
					<h3>Freelancers</h3>
					<ul>
						<li><a href="">Jobs by Specialization</a></li>
						<li><a href="">Career Resources</a></li>
						<li><a href="">Testimonials</a></li>
					</ul>
				</div>

				<div class="col-4">
					<h3>Clients</h3>
					<ul>
						<li><a href="" >Post a job Ad</a></li>
						<li><a href="" >Post a classified Job</a></li>
						<li><a href="">Advertise with us</a></li>
					</ul>
				</div>

				<div class="col-4">
					<h3>Social media </h3>
					<ul>
						<li><a href="" >Facebook</a></li>
						<li><a href="" >Instagram</a></li>
						<li><a href="" >Twitter</a></li>
					</ul>
				</div>

				<div class="col-4">
					<h3>Download Our App</h3>
					<img src="assets/images/index/store-1.png">
				</div>

			</div>
		</div>
	</div>


	<!----- script ------>
	<script src="assets/js/jquery-3.5.1.min.js"></script>
    <script>
		
		$(document).on('click', '.logo-mobile', function() {
			window.location = "index.php";
		});

		$(document).on('click', '#login-mobile', function() {
			window.location = "login.php";
		});

		$(document).on('click', '#signup-mobile', function() {
			window.location = "sign-up-details.php";
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