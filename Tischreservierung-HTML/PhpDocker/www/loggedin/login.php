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
									<a class="nav-link" href="index.html">Home</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="reservations.html">Reservierungen</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="aboutus.html">Team</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="rating.html">Bewertung</a>
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
                                        $servername = "192.168.99.100";
                                        $username = "root";
                                        $password = "passme";
                                        $dbschema = "tischreservierung";
                                        $conn = new mysqli($servername, $username, $password,$dbschema);
    
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        }
        
        
                                        $un = $_POST["form-username"];
                                        $pw = $_POST["form-password"];
                                        if(strcasecmp($un,"admin") == 0 && strcasecmp($pw,"root") == 0){
                                            echo '<script language="javascript" type="text/javascript">';
                                            echo 'document.location="http://192.168.99.100/adminpage.html";';
                                            echo '</script>';
                                            exit();
                                        }
        
                                        $sql = "select * from guest where username = '".$un."' AND password = '".$pw."'";
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                            echo '<section>';
                                            echo '<div class="container">';
                                            echo '<center><h3>'. htmlspecialchars($_POST["form-username"]) .'</h3></center>';
                                            echo '</div>';
                                            echo '</section>';
                                        } else {
                                            echo '<section>';
                                            echo '<div class="container">';
                                            echo '<center><h1>Falsche Logindaten.</h1></center>';
                                            echo '<center><h1>Bitte versuchen Sie es erneut!</h1></center>';
                                            echo '</div>';
                                            echo '</section>';
                                        }
                                        $_SESSION['un'] = $un;
                                        $conn->close();
        
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
	<!--===============================
=            Hero Area            =
================================-->
<a href="reservations.html">
		<section class="hero-area bg-1 text-center overly">
			<!-- Container Start -->
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<!-- Header Contetnt -->
						<div class="content-block">
							<h1>Jetzt Reservieren...</h1>
							<p>Holen Sie sich einen unserer begehrtesten Plätze</p>
	
							
	
						</div>
					</div>
				</div>
			</div>
			<!-- Container End -->
		</section>
	</a>

	<!--===================================
=            Client Slider            =
====================================-->


	<!--===========================================
=            Popular deals section            =
============================================-->

	<section class="popular-deals section bg-gray">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h2>Unsere Plätze</h2>
						<p>Hier finden Sie einen Überblick über vorhandene Tischkombinationen</p>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- offer 01 -->
				<div class="col-sm-12 col-lg-4">
					<!-- product card -->
					<div class="product-item bg-light">
						<div class="card">
							<div class="thumb-content">
								<!-- <div class="price">$200</div> -->
								<a href="">
									<img class="card-img-top img-fluid" src="images/products/products-1.jpg" alt="Card image cap">
								</a>
							</div>
							<div class="card-body">
								<h4 class="card-title">
									<a href="">4er Tisch</a>
								</h4>
								<ul class="list-inline product-meta">
									<li class="list-inline-item">
										<a href="">
											<i class="fa fa-child"></i>Kindersitz dabei</a>
									</li>
									
								</ul>
								<p class="card-text"></p>
								<div class="product-ratings">
									<ul class="list-inline">
										<li class="list-inline-item selected">
											<i class="fa fa-star"></i>
										</li>
										<li class="list-inline-item selected">
											<i class="fa fa-star"></i>
										</li>
										<li class="list-inline-item selected">
											<i class="fa fa-star"></i>
										</li>
										<li class="list-inline-item selected">
											<i class="fa fa-star"></i>
										</li>
										<li class="list-inline-item">
											<i class="fa fa-star"></i>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>


				</div>
				<div class="col-sm-12 col-lg-4">
					<!-- product card -->
					<div class="product-item bg-light">
						<div class="card">
							<div class="thumb-content">
								<!-- <div class="price">$200</div> -->
								<a href="">
									<img class="card-img-top img-fluid" src="images/products/products-2.jpg" alt="Card image cap">
								</a>
							</div>
							<div class="card-body">
								<h4 class="card-title">
									<a href="">Unser Gastgarten</a>
								</h4>
								<ul class="list-inline product-meta">
									<li class="list-inline-item">
										<a href="">
											<i class="fa fa-sun-o">Raucherbereich</i></a>
									</li>
									<li class="list-inline-item">
										<a href="">
											<i class="fa fa-calendar"></i>1. Mai</a>
									</li>
								</ul>
								<p class="card-text">Für heiße Sommertage bieten wir Ihnen unseren Gastgarten an.</p>
								<div class="product-ratings">
									<ul class="list-inline">
										<li class="list-inline-item selected">
											<i class="fa fa-star"></i>
										</li>
										<li class="list-inline-item selected">
											<i class="fa fa-star"></i>
										</li>
										<li class="list-inline-item selected">
											<i class="fa fa-star"></i>
										</li>
										<li class="list-inline-item selected">
											<i class="fa fa-star"></i>
										</li>
										<li class="list-inline-item selected">
											<i class="fa fa-star"></i>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>



				</div>
				<div class="col-sm-12 col-lg-4">
					<!-- product card -->
					<div class="product-item bg-light">
						<div class="card">
							<div class="thumb-content">
								<!-- <div class="price">$200</div> -->
								<a href="">
									<img class="card-img-top img-fluid" src="images/products/products-3.jpg" alt="Card image cap">
								</a>
							</div>
							<div class="card-body">
								<h4 class="card-title">
									<a href="">2er Tisch</a>
								</h4>
								<ul class="list-inline product-meta">
									<li class="list-inline-item">
										<a href="">
											<i class="fa fa-glass"></i>Gratis Wein</a>
									</li>
									<li class="list-inline-item">
										<a href="">
											<i class="fa fa-calendar"></i>Samstag</a>
									</li>
								</ul>
								<p class="card-text">Optimal für ein Essen mit ihrem Liebsten. Zu jeder Reservierung, an einem Samstag,bekommen Sie einen Amarone della Valpolicella gratis dazu.</p>
								<div class="product-ratings">
									<ul class="list-inline">
										<li class="list-inline-item selected">
											<i class="fa fa-star"></i>
										</li>
										<li class="list-inline-item selected">
											<i class="fa fa-star"></i>
										</li>
										<li class="list-inline-item selected">
											<i class="fa fa-star"></i>
										</li>
										<li class="list-inline-item selected">
											<i class="fa fa-star"></i>
										</li>
										<li class="list-inline-item">
											<i class="fa fa-star"></i>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>



				</div>


			</div>
		</div>
	</section>

	

	</div>


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
						<p class="alt-color"></p>
					</div>
				</div>
				<!-- Link list -->
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