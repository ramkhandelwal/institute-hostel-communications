<?php
	require '../includes/config.inc.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>   Projects  </title>

	 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Intrend Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link rel="stylesheet" href="../web_home/css_home/swipebox.css">
	<link rel="stylesheet" href="../web_home/css_home/bootstrap.css">  
	<link rel="stylesheet" href="../web_home/css_home/style.css" type="text/css" media="all" />  
	<link rel="stylesheet" href="../web_home/css_home/fontawesome-all.css">   
	<link href="//fonts.googleapis.com/css?family=Poiret+One&amp;subset=cyrillic,latin-ext" rel="stylesheet">
	 

</head>

<body>

 
<div class="inner-page-banner" id="home">
	 
	<header>
		<div class="container agile-banner_nav">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">

				<h1><a class="navbar-brand" href="admin_home.php">In <span class="display"> Trend</span></a></h1>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="admin_home.php">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="admin_about.php">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="admin_services.php">Services</a>
						</li>
						<li class="dropdown nav-item">
							<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">Pages
								<b class="caret"></b>
							</a>
							<ul class="dropdown-menu agile_short_dropdown">
								<li>
									<a href="../error.php">Error Page</a>
								</li>
								<li>
									<a href="../single.php">Single Page</a>
								</li>
							</ul>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="admin_projects.php">Projects</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="../contact.php">Contact</a>
						</li>
					</ul>
				</div>

			</nav>
		</div>
	</header>
	 
</div>
 



 
<footer class="py-5">
	<div class="container py-md-5">
		<div class="footer-logo mb-5 text-center">
			<a class="navbar-brand" href="admin_home.php">In <span class="display"> Trend</span></a>
		</div>
		<div class="footer-grid">
			<div class="social mb-4 text-center">
				<ul class="d-flex justify-content-center">
					<li class="mx-2"><a href="#"><span class="fab fa-facebook-f"></span></a></li>
					<li class="mx-2"><a href="#"><span class="fab fa-twitter"></span></a></li>
					<li class="mx-2"><a href="#"><span class="fas fa-rss"></span></a></li>
					<li class="mx-2"><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
					<li class="mx-2"><a href="#"><span class="fab fa-google-plus"></span></a></li>
				</ul>
			</div>
			<div class="list-footer">
				<ul class="footer-nav text-center">
					<li>
						<a href="admin_home">Home</a>
					</li>
					
					<li>
						<a href="admin_services.php">Services</a>
					</li>
					<li>
						<a href="admin_projects.php">Gallery</a>
					</li>
					<li>
						<a href="../contact.php">Contact</a>
					</li>
				</ul>
			</div>
			<div class="agileits_w3layouts-copyright mt-4 text-center">
			<p class="copyright-agileinfo">  Crafted by Mayank-Mohit-Ram </p>
		</div>
		</div>
	</div>
</footer>
 

 

	 
	<script type="text/javascript" src="../web_home/js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="../web_home/js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap -->
	 

	 
	<script src="../web_home/js/jquery.swipebox.min.js"></script>
	    <script type="text/javascript">
			jQuery(function($) {
				$(".swipebox").swipebox();
			});
	</script>
	 

	 
	<script src="../web_home/js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="../web_home/js/move-top.js"></script>
	<script type="text/javascript" src="../web_home/js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	 
	<script type="text/javascript">
		$(document).ready(function() {
			$().UItoTop({ easingType: 'easeOutQuart' });
			});
	</script>
</body>
</html>
