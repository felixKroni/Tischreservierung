<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<!-- SITE TITTLE -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TiRe - Reservations</title>


	<!-- PLUGINS CSS STYLE -->
	<link href="plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet">
	<!-- Bootstrap -->
	<link href="plugins/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- Owl Carousel -->
	<link href="plugins/slick-carousel/slick/slick.css" rel="stylesheet">
	<link href="plugins/slick-carousel/slick/slick-theme.css" rel="stylesheet">
	<!-- Fancy Box -->
	<link href="plugins/fancybox/jquery.fancybox.pack.css" rel="stylesheet">
	<link href="plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">
	<link href="plugins/seiyria-bootstrap-slider/dist/css/bootstrap-slider.min.css" rel="stylesheet">
	<!-- CUSTOM CSS -->
	<link href="css/style.css" rel="stylesheet">

	<!-- FAVICON -->
	<link href="img/favicon.png" rel="shortcut icon">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body class="body-wrapper">


	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<nav class="navbar navbar-expand-lg  navigation">
						<a class="navbar-brand" href="index.html">
							<img src="images/logo.png" alt="">
						</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						 aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav ml-auto main-nav ">
								<li class="nav-item active">
									<a class="nav-link" href="login.php">Home</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="reservations.php">Reservierungen</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="aboutus.php">Team</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="rating.php">Bewertung</a>
								</li>
                                <li class="nav-item">
									<a class="nav-link" href="myreservations.php">Meine Reservierungen</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="logout.php">Logout</a>
								</li>
							</ul>
							<ul class="navbar-nav ml-auto mt-10">
								<li class="nav-item">
                                    
									<a class="nav-link login-button" href="login.html">
                                        <?php
                                        echo '<section>';
                                        echo '<div class="container">';
                                        echo '<center><h3>'. htmlspecialchars($_SESSION["un"]) .'</h3></center>';
                                        echo '</div>';
                                        echo '</section>';
                                        $_SESSION['un'] = $_SESSION["un"];
                                        ?>
                                    </a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</section>


	<section>
		<div class="container">
				<center><h1>Reservierung abschließen</h1></center>
			<br>
			<br>
			<div class="row">
				<div class="col-md-12">
					<form action="redirectPageReservation.php" method="post">

                        <div class="form-group row">
                            <label for="input-name" class="col-md-2 col-form-label-lg">Name: </label>
                            <div class="col-md-2">
								<input class="form-control" type="text" name="input-name">
							</div>
                        </div>
                        
						<div class="form-group row">
							<label for="input-persons" class="col-md-2 col-form-label-lg">Personen: </label>
							<div class="col-md-1">
								<input class="form-control" type="number" name="input-persons">
							</div>
						</div>

						<div class="form-group row">
							<label for="input-fromDate" class="col-md-2 col-form-label-lg">Datum: </label>
							<div class="col-md-2">
								<input class="form-control" type="date" name="input-date">
							</div>
						</div>

						<div class="form-group row">
								<label for="input-fromTime" class="col-md-2 col-form-label-lg">Uhrzeit von: </label>
								<div class="col-md-2">
									<select class="form-control" type="date" name="input-time">
										<option>12:00</option>
										<option>12:15</option>
										<option>12:30</option>
										<option>12:45</option>
										<option>13:00</option>
										<option>13:15</option>
										<option>13:30</option>
										<option>13:45</option>
                                        <option>14:00</option>
                                        <option>14:15</option>
                                        <option>14:30</option>
                                        <option>14:45</option>
                                        <option>15:00</option>
                                        <option>15:15</option>
                                        <option>15:30</option>
                                        <option>15:45</option>
                                        <option>15:00</option>
                                        <option>15:15</option>
                                        <option>15:30</option>
                                        <option>15:45</option>
                                        <option>16:00</option>
                                        <option>16:15</option>
                                        <option>16:30</option>
                                        <option>16:45</option>
                                        <option>17:00</option>
                                        <option>17:15</option>
                                        <option>17:30</option>
                                        <option>17:45</option>
                                        <option>18:00</option>
                                        <option>18:15</option>
                                        <option>18:30</option>
                                        <option>18:45</option>
                                        <option>19:00</option>
                                        <option>19:15</option>
                                        <option>19:30</option>
                                        <option>19:45</option>
                                        <option>20:00</option>
                                        <option>20:15</option>
                                        <option>20:30</option>
                                        <option>20:45</option>
                                        <option>21:00</option>
                                        <option>21:15</option>
                                        <option>21:30</option>
                                        <option>21:45</option>
                                        <option>22:00</option>
									</select>
								</div>
						</div>
						

						<center><button type="submit" class="btn btn-primary">Reservation abschicken</button></center>
						<br>
					</form>

				</div>
			</div>
		</div>
	</section>



	<!--============================
=            Footer            =
=============================-->

	<footer class="footer section section-sm">
		<!-- Container Start -->
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-7 offset-md-1 offset-lg-0">
					<!-- About -->
					<div class="block about">
						<!-- footer logo -->
						<img src="images/logo-footer.png" alt="">
						<!-- description -->
					</div>
				</div>
				<div class="col-lg-2 offset-lg-1 col-md-3">
						<div class="block">
							<h4>Seiten</h4>
							<ul>
								<li>
									<a href="./index.html">Startseite</a>
								</li>
								<li>
									<a href="./reservations.html">Reservation</a>
								</li>
								<li>
									<a href="./registration.html">Registrieren</a>
								</li>
								<li>
									<a href="./aboutus.html">Unser Team</a>
								</li>
								<li>
									<a href="./login.html">Login</a>
								</li>
							</ul>
						</div>
					</div>
					<!-- Link list -->
					<div class="col-lg-2 col-md-3 offset-md-1 offset-lg-0">
						<div class="block">
							<h4>Über Uns</h4>
							<ul>
								<li>
									<p>HTBLA Leonding</p>
								</li>
								<li>
										<p>Limesstraße 12-14</p>
								</li>
								<li>
										<p>4060 Leonding</p>
								</li>
								<li>
										<p>Oberösterreich</p>
								</li>
								<li>
										<p>Österreich</p>
								</li>
							</ul>
						</div>
					</div>
				<!-- Promotion -->
				<div class="col-lg-4 col-md-7">
					<!-- App promotion -->
					<div class="block-2 app-promotion">
						<a href="">
							<!-- Icon -->
							<img src="images/footer/phone-icon.png" alt="mobile-icon">
						</a>
						<p>Get the Dealsy Mobile App and Save more</p>
					</div>
				</div>
			</div>
		</div>
		<!-- Container End -->
	</footer>
	<!-- Footer Bottom -->
	<footer class="footer-bottom">
		<!-- Container Start -->
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-12">
					<!-- Copyright -->
					<div class="copyright">
						<p>Copyright © 2016. All Rights Reserved</p>
					</div>
				</div>
				<div class="col-sm-6 col-12">
					<!-- Social Icons -->
					<ul class="social-media-icons text-right">
						<li>
							<a class="fa fa-facebook" href=""></a>
						</li>
						<li>
							<a class="fa fa-twitter" href=""></a>
						</li>
						<li>
							<a class="fa fa-pinterest-p" href=""></a>
						</li>
						<li>
							<a class="fa fa-vimeo" href=""></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- Container End -->
		<!-- To Top -->
		<div class="top-to">
			<a id="top" class="" href="">
				<i class="fa fa-angle-up"></i>
			</a>
		</div>
	</footer>

	<!-- JAVASCRIPTS -->
	<script src="plugins/jquery/jquery.min.js"></script>
	<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
	<script src="plugins/tether/js/tether.min.js"></script>
	<script src="plugins/raty/jquery.raty-fa.js"></script>
	<script src="plugins/bootstrap/dist/js/popper.min.js"></script>
	<script src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="plugins/seiyria-bootstrap-slider/dist/bootstrap-slider.min.js"></script>
	<script src="plugins/slick-carousel/slick/slick.min.js"></script>
	<script src="plugins/jquery-nice-select/js/jquery.nice-select.min.js"></script>
	<script src="plugins/fancybox/jquery.fancybox.pack.js"></script>
	<script src="plugins/smoothscroll/SmoothScroll.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
	<script src="js/scripts.js"></script>

</body>

</html>