<!--#include virtual="/includes/header.shtml"-->

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
		
	
<!--#include virtual="/includes/footer.shtml"-->