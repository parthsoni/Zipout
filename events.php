<!DOCTYPE html>
<html>
	<head>
		<title>ZIPOUT - Events</title>
		<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
		<!--[if lte IE 8]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<!--[if lt IE 8]>
			<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE8.js"></script>
		<![endif]-->
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
		<link rel="stylesheet" type="text/css" href="css/bxslider.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="css/selectric.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="css/adaptive.css" media="screen" />
		<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="js/jquery.selectric.min.js"></script>
		<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
			<script>

window.twttr = (function(d, s, id) {
	 var js, fjs = d.getElementsByTagName(s)[0],
	   t = window.twttr || {};
	 if (d.getElementById(id)) return;
	 js = d.createElement(s);
	 js.id = id;
	 js.src = "https://platform.twitter.com/widgets.js";
	 fjs.parentNode.insertBefore(js, fjs);

	 t._e = [];
	 t.ready = function(f) {
	   t._e.push(f);
	 };

	 return t;
	}(document, "script", "twitter-wjs"));

</script>
	</head>
<body class="events">
	<header id="header" class="clear">
		<?php 
			require('main_menu.php');
		
		?>
	</header>
	<section class="container">
		<div class="pageHeader" style="background-image: url(images/content/events.jpg);">
			<h1>follow our events</h1>
		</div>
		<div class="contentWrap">
			<div class="pagePanel clear">
				<div class="pageTitle">Events</div>
			</div>
			<div class="eventsWrap">
				<div class="eventItem clear">
					<a href="rsvp-events.php" class="eventItemImg">
						<img src="images/content/eventsItem.jpg" alt="">
					</a>
					<div class="eventItemDesc">
						<time class="eventItemTime" datetime="2015-02-01"> April 26, 2015 09:00 AM</time>
						<h3><a href="rsvp-events.php">ZipOut @ Rahagiri</a></h3>
						<p>Break Free....Celebrate Life....Destress...Embrace yourself...Have fun under the morning sun with ZipOut crew at Raahgiri this sunday!</p>
						<a href="rsvp-events.php" class="eventLearnMore">RSVP 
							<i>
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="38px" height="38px" viewBox="0 0 38 38" enable-background="new 0 0 38 38" xml:space="preserve">
									<path fill="#6BBFAC" d="M16.558 11.5l6.884 6.494l1.059 0.999v0.015L16.558 26.5L15.5 25.486l6.882-6.494L15.5 12.5L16.558 11.5z"/>
								</svg>
							</i>
						</a>
						
						
					</div>					
						<a href="http://www.zipout.in?text=I am going" class="twitter-share-button" data-size="large" data-dnt="true">Tweet</a>
					
				</div>
				<div class="eventItem clear">
					<a href="rsvp-events.php" class="eventItemImg">
						<img src="images/content/eventsItem2.jpg" alt="">
					</a>
					<div class="eventItemDesc">
						<time class="eventItemTime" datetime="2015-02-01"> May 10, 2015 09:00 AM</time>
						<h3><a href="rsvp-events.php">ZipOut @ Rahagiri</a></h3>
						<p>Break Free....Celebrate Life....Destress...Embrace yourself...Have fun under the morning sun with ZipOut crew at Raahgiri this sunday!</p>
						<a href="rsvp-events.php" class="eventLearnMore">RSVP 
							<i>
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="38px" height="38px" viewBox="0 0 38 38" enable-background="new 0 0 38 38" xml:space="preserve">
									<path fill="#6BBFAC" d="M16.558 11.5l6.884 6.494l1.059 0.999v0.015L16.558 26.5L15.5 25.486l6.882-6.494L15.5 12.5L16.558 11.5z"/>
								</svg>
							</i>
							
							
						</a>
						
						
					</div>
					
																	<a href="http://www.zipout.in?text=I will be there" class="twitter-share-button"  data-size="large" data-dnt="true">Tweet</a>
					
				</div>
			</div>
			</div>
		
	</section>
	<?php
		require('main_footer.php');
	
	?>
</body>
</html>

<?php include 'widget.php'?>
<?php include 'google_analytics.php'?>