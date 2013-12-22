<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<meta name="author" content="Alex Tavano">
	<title>Tavano Wedding</title>
	<link rel="icon" type="image/ico" href="favicon.ico" />

	<link rel="stylesheet" href="/css/normalize.css" media="all">
	<link rel="stylesheet" href="/css/screen.css" media="screen">

	<!-- Close Content CSS -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400italic,400,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>


	<link rel="stylesheet" href="/nivo-slider/themes/default/default.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="/nivo-slider/themes/light/light.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="/nivo-slider/themes/dark/dark.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="/nivo-slider/themes/bar/bar.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="/nivo-slider/nivo-slider.css" type="text/css" media="screen" />
	<!-- Close Slider CSS -->
</head>

<body>
<div class="main">
	<header class="body_header">
		<nav id="main_menu">
			<ul>
				<li class="first_list"><a href="/">HOME</a></li>
                    <li class="first_list"><a href="/venue/">VENUE</a></li>
                    <li class="first_list"><a href="/accommodations/">ACCOMMODATIONS</a></li>
                    <li class="first_list"><a href="/contactus/" class="current_page">CONTACT US</a></li>
			</ul>
		</nav>
	</header>
</div>

<section class="mid_color">
	<div class="slider-wrapper theme-default">
		<div id="slider" class="nivoSlider">
			<img src="/images/banner1.jpg"
				data-thumb="/images/banner1.jpg" 
				alt="" 
				data-transition="slideInLeft">
			
			<img src="/images/banner2.jpg"
				data-thumb="/images/banner2.jpg" 
				alt="" 
				title="This is an example of a caption" 
				data-transition="slideInLeft">

			<img src="/images/banner3.jpg"
				data-thumb="/images/banner3.jpg" 
				alt="" 
				data-transition="slideInLeft">

			<img src="/images/banner4.jpg"
				data-thumb="/images/banner4.jpg" 
				alt="" 
				title="#htmlcaption" 
				data-transition="slideInLeft">

		</div>
	</div>
</section>



<?php
        $name = $_POST['name'];
        $email = $_POST['email'];
        $comment = $_POST['comment'];

        $to = 'alex@frostnova.ca';
        $subject = 'Insert Subject here';
        $msg = "From: " . $name . "</br>" . $comment;

        mail($to, $subject, $msg, 'From: ' . $email);
?>


<div class="main">
	<section class="main_content">		
		<article>
			<header>
				<h1>Contact Information</h1>
			</header>
			
			<address>
				<ul>
					<li>Our Address:<br></li>
					<li>Unit 209 - 20062 Fraser Hwy.<br></li>
					<li>British Columbia, Canada<br></li>
					<li>V3A 0E6<br></li>
					<li>Phone: 1-(780) 722-6523<br><br></li>
					<li>You can also contact us by using the form located to the right which will send an email directly to us.</li>
				</ul>
			<address>
		</article>

		<article class="form_field">
			<p>Your email has been sent</p>
		</article>
	</section>
</div>
			


<div class="horizontal_rule"></div>

<div class="main">
	<footer>
		<section class="main_footer">

			<article>
				<h1>WEDDING INFORMATION</h1>
				<p>The wedding will be located at Eagle Quest golf course in Surrey, British Columbia. The Ceremony will start at 3:00PM, followed by the Reception at 5:00PM. Directions to the golf course will be located on the Venue page.
				</p>
			</article>

			<article>
				<nav class="footer_nav">
					<h1>NAVIGATE</h1>
					<ul>
						<li><a href="index.shtml">Home</a></li>
						<li><a href="venue.shtml">Venue</a></li>
						<li><a href="contactus.shtml">Contact Us</a></li>
						<li><a href="accommodations.shtml">Accommodations</a></li>
					</ul>
				</nav>
			</article>

			<article>
				<h1>CONTACT US</h1>
				<ul>
					<li>Unit 209</li>
					<li>20062 Fraser Hwy.</li>
					<li>British Columbia </li>
					<li>Canada</li>
					<li>V3A 0E6</li>
					<li>Phone: 1-(780) 722-6523</li>
				</ul>
			</article>
			
			<article>
				<nav class="social_media">
					<h1>FOLLOW US</h1>
					<ul>
						<li>
							<figure>
								<a href="https://www.facebook.com/alexander.tavano" id="facebook" title="Facebook"><img src="/images/facebook_icon.png" alt="Facebook"></a>

							</figure>
						</li>
						<li>
							<figure>
								<a href="http://www.pinterest.com/baileywhitcher/wedding-ideas/" id="pinterest" title="Pinterest"><img src="/images/pinterest_icon.png" alt="Pinterest"></a>
							</figure>
						</li>
					</ul>
				</nav>
			</article>
		</section>
		<!-- Close .container -->
	</footer>
</div>


	<script type="text/javascript" src="/js/jquery-1.9.0.min.js"></script>
	<script type="text/javascript" src="/js/jquery.nivo.slider.js"></script>
	<script type="text/javascript">
		$(window).load(function() {
			$('#slider').nivoSlider();
		});
	</script>

</div>

</body>
</html>