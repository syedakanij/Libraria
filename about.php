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
			<h2 class="animated wow slideInRight">About Us</h2>
			<a href="">SEE MORE</a>
		</div>
	</section>

<!-- ==================About Us=============== -->
		<section class="about_details fix">
			<div class="about_us main fix">
				<article class="single_about">
					<h1>WHAT  WE DO?</h1>
				</article>
				<article class="single_about">
					<h2>A NEW WAY TO LEARN MORE</h2>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis Theme natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
					<a href="">See More</a>
				</article>
				<article class="single_about">
					<ul>
						<li><span class="counter">2700</span><br/>EBOOKS</li>
						<li><span class="counter">2100</span><br/>AUDIOBOOKS</li>
						<li><span class="counter">1700</span><br/>MAGAZINE</li>
					</ul>
				</article>
				<article class="single_about">
					<h1>SKILS</h1>
				</article>
				<article class="single_about">
					<h3>ABOUT US</h3>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis Theme natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
				</article>
				<article class="single_about">
					<h2>A NEW WAY TO LEARN MORE</h2>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis Theme natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
					<a href="">See More</a>
				</article>
			</div>
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
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/waypoints.min.js"></script>
		<script src="js/jquery.counterup.min.js"></script>	
		<script>
			$(document).ready(function(){
			$('.owl-carousel').owlCarousel({
			items:1,
			loop:true,
			nav:true,
			navText:['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
			autoplay:true,
			});
		});
	
			var wow = new WOW(
					{
			boxClass:     'wow',      
			animateClass: 'animated',
			offset:       0,         
			mobile:       true,   
			live:         true,    
			callback:     function(box) {
			},
			scrollContainer: null 
		  }
		);
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
			
			jQuery(document).ready(function( $ ) {
				$('.counter').counterUp({
					delay: 10,
					time: 1000
				});
			});
		</script>
	</body>
</html>