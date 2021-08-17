<!DOCTYPE html>
	<html>
	<head>
	  <title>LIBRARIA</title>
	  <meta charset="UTF-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1"/>
	  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,700,900" rel="stylesheet">
	  <link rel="stylesheet" href="css/owl.carousel.min.css">
	  <link rel="stylesheet" href="css/owl.theme.default.min.css">
	  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"/>
	  <link rel="stylesheet" type="text/css" href="css/animate.min.css"/>
	  <link rel="stylesheet" type="text/css" href="css/style.css"/>
	
	</head>
	<body>
	<!-- ====================Header=======================  -->
	<header class="header-background">
		<div class="header main fix">
			<figure class="logo fix">
				<img src="img/logo.png"/>
			</figure>
				<h2>LIBRARIA</h2>
			<nav class="navbar fix">
				<ul>
					<li><a href="index.php">Home</a><li>
					<li><a href="about.php">About</a><li>
					<li><a href="book_details.php">Books</a><li>
					<li><a href="blog.php">Blog</a><li>
					<li><a href="portfolio.php">Portfolio</a><li>
					<li><a href="contact.php">Conatct</a><li>
				</ul>
			</nav>
			<!--<a href=""><i class="fa fa-lock" aria-hidden="true"></i>Login</a>-->
		</div>
	</header>
	<!-- ===========Scroll button================ -->
				<a href="#" class="scrollToTop"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
	<!-- =========================Banner=================== -->
	<section class="banner-section fix">
		<div class="banner_item3 fix">
			<p class="animated wow slideInLeft">LIBRARIA</p>
			<h2 class="animated wow slideInRight">Contact Us</h2>
			<a href="">SEE MORE</a>
		</div>
	</section>
	<!-- ================Contact Us================ -->
	<section class="contact_back fix">
		<div class="contact main fix">
			<div class="single_contact">
				<ul>
					<li>121 raaj street, sylhet</li>
					<li>Sylhet</li>
					<li>PO Box 16122</li>
				</ul>
				<p><i class="fa fa-map-marker" aria-hidden="true"></i>OFFICE ADDRESS</p>
			</div>
			<div class="single_contact">
				<ul>
					<li>Local: +123-456-7890</li>
					<li>Local: +123-456-7890</li>
					<li>(001)-254-7359</li>
				</ul>
				<p><i class="fa fa-phone" aria-hidden="true"></i>PHONE AND FAX</p>
			</div>
			<div class="single_contact">
				<ul>
					<li>www.libraria.com</li>
					<li>support@libraria.com</li>
					<li>info@libraria.com</li>
				</ul>
				<p><i class="fa fa-envelope" aria-hidden="true"></i>EMAIL ADDRESS</p>
			</div>
		</div>
	</section>
	
	<!-- ================Map================ -->
	<section class="googlemap_back fix">
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d926466.120979235!2d91.87798299757137!3d24.89769902254968!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1512226413496" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
	</section>
				
	<!-- ===================Footer================ -->
		<section class="footer_back fix">
			<div class="footer main fix">
					<article class="footer_col">
						<h3>ABOUT LIBRARIA</h3>
						<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking.</p>
					</article>
					<article class="footer_col">
						<h3>QUICK LINKS</h3>
						<ul>
							<li><a href="">Home</a><li>
							<li><a href="">About</a><li>
							<li><a href="">Books</a><li>
							<li><a href="">Features</a><li>
							<li><a href="">Blog</a><li>
							<li><a href="">Portfolio</a><li>
						</ul>
					</article>
					<article class="footer_col">
						<h3>WEEKLY NEWSLETTER</h3>
						<p>Get our awesome releases and latest updates with exclusive news and offers in your inbox.</p>
						<form action="">
							<input type="text" placeholder="Join our newsletter">						
							<input type="submit" value="Sign up">
						</form>
					</article>
					<article class="footer_col">
						<h3>SOCIAL NETWORK</h3>
						<ul>
							<li><a href=""><i class="fa fa-facebook-official" aria-hidden="true"></i> facebook</a><li>
							<li><a href=""><i class="fa fa-twitter-square" aria-hidden="true"></i> twitter</a><li>
							<li><a href=""><i class="fa fa-envelope" aria-hidden="true"></i> email</a><li>
							<li><a href=""><i class="fa fa-linkedin-square" aria-hidden="true"></i> linkedin</a><li>
							<li><a href=""><i class="fa fa-youtube-play" aria-hidden="true"></i> youtube</a><li>
						</ul>
					</article>
				</div>
			<div class="footer_copyrt main fix">
					<a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
					<a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
					<a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a>
					<a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
					<a href=""><i class="fa fa-github" aria-hidden="true"></i></a>
					<p> &copy; 2020. All Right Reserved. </p>
			</div>
		</section>
	<!-- ==============================Script============================== -->
		<script src="js/wow.min.js"></script>
		<script src="js/jquery.min.js"></script>
		<script>
		wow.init();
		$(document).ready(function(){
				$(window).scroll(function(){
					if ($(this).scrollTop() > 300) {
						$('.scrollToTop').fadeIn();
					} else {
						$('.scrollToTop').fadeOut();
					}
				});
				$('.scrollToTop').click(function(){
					$('html, body').animate({scrollTop : 0},800);
					return false;
				});
				
			});
		</script>
	</body>
</html>