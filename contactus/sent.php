<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Tavano Wedding</title>
	<!--Regular Page CSS -->
	<link rel="stylesheet" type="text/css" href="stylesheets/reset.css" />
	<link rel="stylesheet" type="text/css" href="stylesheets/main.css" />
	<!-- Slider Css -->
	<link rel="stylesheet" type="text/css" media="screen" href="res/css/style.css"/>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400italic,400,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	
	<?php
		$name = $_POST['name'];
		$email = $_POST['email'];
		$comment = $_POST['comment'];

		$to = 'alex@frostnova.ca';
		$subject = 'Insert Subject here';
		$msg = "From: " . $name . "</br>" . $comment;

		mail($to, $subject, $msg, 'From: ' . $email);
	?>

</head>
<body>
	
	<div id="header">

		<div class="container">

		<h1><a href="index.html">Tavano Wedding</a></h1>
		
		<div id="main_menu">
		
			<ul>
				<li class="first_list"><a href="index.html" class="main_menu_first">Home</a></li>
				<li class="first_list"><a href="venue.html" class="main_menu_first">Venue</a></li>
				<li class="first_list"><a href="accommodations.html" class="main_menu_first">Accommodations</a></li>
				<li class="first_list"><a href="contactus.html" class="main_menu_first main_current">contact us</a></li>
			</ul>
		
		</div> 
		<!-- END #main_menu -->
	
		</div> 
		<!-- END .container -->
	
	</div> 
	<!-- END #header -->
	
	<div id="main_content">
			
		<div id="slideshow_area">
		
		<div class="container">
			
			<div id="slideshow_container">
				
				<div class="container">
					<div id="content-slider">
						<div id="slider">
							<div id="mask">
								<ul>
									<li id="first" class="firstanimation">
										<a href="#">
											<img src="images/banner1.jpg" alt="Banner1"/>
										</a>
										<div class="tooltip">
											<h1>Holding Hands</h1>
										</div>
									</li>

									<li id="second" class="secondanimation">
										<a href="#">
											<img src="images/banner2.jpg" alt="Banner2"/>
										</a>
										<div class="tooltip">
											<h1>Hold My Heart</h1>
										</div>
									</li>
									
									<li id="third" class="thirdanimation">
										<a href="#">
											<img src="images/banner3.png" alt="Banner3"/>
										</a>
										<div class="tooltip">
											<h1>Together Forever</h1>
										</div>
									</li>
												
									<li id="fourth" class="fourthanimation">
										<a href="#">
											<img src="images/banner4.jpg" alt="Banner4"/>
										</a>
										<div class="tooltip">
											<h1>Perfect Date</h1>
										</div>
									</li>
												
									<li id="fifth" class="fifthanimation">
										<a href="#">
											<img src="images/banner5.jpg" alt="Banner5"/>
										</a>
										<div class="tooltip">
											<h1>In Perfect Harmony</h1>
										</div>
									</li>
								</ul>
							</div>
						<div class="progress-bar"></div>
					</div>
				</div>
			 </div>

			</div> 
			<!-- END #slideshow_container -->
			
		</div> 
		<!-- END .container -->
	
		</div> 
		<!-- END #slideshow_area -->
			
		<div id="mid_content">
			
			<div class="container">
				<div class="mid_content_info">
					<h1>Your Email Has Been Sent</h1>	
				</div>
			</div><!-- END .container -->
				
		</div> 
		<!-- END #mid_content -->
	
	</div> 
	<!-- END #main_content -->
	
	<div id="footer">
		
		<div class="container">
			
			<div id="footer_about" class="footer_info">
				
				<h4>wedding information</h4>
				<p>The wedding will be located at Eagle Quest golf course in Surrey, British Columbia. The Ceremony will start at 3:00PM, followed by the Reception at 5:00PM. Directions to the golf course will be located on the Venue page. 
				</p>
				
			</div> 
			<!-- END #footer_about -->
			
			<div id="footer_explore" class="footer_info">
				
				<h4>Navigate</h4>
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="venue.html">Venue</a></li>
					<li><a href="contactus.html">Contact Us</a></li>
					<li><a href="accommodations.html">Accommodations</a></li>
				</ul>
				
			</div> 
			<!-- END #footer_about -->
			
			<div id="footer_browse" class="footer_info">
								
			</div> 
			<!-- END #footer_about -->
			
			<div id="footer_contact" class="footer_info">
				
				<h4>Contact Us</h4>
				<p><span class="bold_text"></span>
					Unit 209
					<br />
					20062 Fraser Hwy.
					<br />
					British Columbia 
					<br />
					Canada
					<br />
					V3A 0E6
					<br />
					Phone: 1-(780) 722-6523
					<br />
				</p>
				
			</div> 
			<!-- END #footer_about -->
			
			<div id="footer_connect" class="footer_info">
				
				<h4>follow us</h4>
				
				<ul>
					<li><a href="https://www.facebook.com/alexander.tavano" id="facebook" title="Facebook">Facebook</a></li>
					<li><a href="http://www.pinterest.com/baileywhitcher/wedding-ideas/" id="pinterest" title="Pinterest">Pinterest</a></li>
				</ul>
				
			</div> 
			<!-- END #footer_about -->
							   
		</div> 
		<!-- END .container -->
		
	</div> 
	<!-- END #footer -->

	<!-- Website Colors 
	Silver - #C0C0C0    
	Eggplant - #816687
	Lavender - #754C78
	Light Violet - #8F5E99   
	Dark Violet - #4F2F4F
	-->
</body>
</html>