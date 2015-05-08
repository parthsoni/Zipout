<!DOCTYPE html>
<html lang="uk">
	<head>
		<title>ZipOut - Contact</title>
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
		
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=true"></script>
		<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="js/jquery.selectric.min.js"></script>
		<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
	</head>
<body class="contact">
	<header id="header" class="clear">
		<?php 
			require('main_menu.php');
		
		?>
	</header>
	<section class="container">
		<div class="pageHeader" style="background-image: url(images/content/bg-parallax2.jpg);">
			<h1>you are welcome</h1>
		</div>
		<div class="ourContact">
			<div class="wrapper clear">
				<div class="contactGallery">
					<ul>
						<li><img src="images/content/gallery-1.jpg" alt=""></li>
						<li><img src="images/content/gallery.jpg" alt=""></li>
					</ul>
					
				</div>
				<div class="contactInfo">
					<h3>Contact</h3>
					<p><i class="contactPhone"></i>91-9871495690</p>
					<p><i class="contactEmail"></i> runjhun.gupta@zipout.co.in</p>
					<p><i class="contactLocation"></i> ZipOut<br> 
					Sec 50, Noida</p>
				</div>
			</div>
		</div>
		<div class="locationMap">
			
			<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden;height:400px;width:100%;"><div id="gmap_canvas" style="height:400px;width:100%;"></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style><a class="google-map-code" href="http://premium-wordpress-themes.org" id="get-map-data">wordpress themes</a></div><script type="text/javascript"> function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(28.606418,77.365276),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(28.606418, 77.365276)});infowindow = new google.maps.InfoWindow({content:"<b>ZIPOUT</b><br/>Sec 50, Noida<br/> DELHI NCR" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
            
		</div>
	</section>
	
	<?php
		require('main_footer.php');
	
	?>
</body>
</html>

<?php include 'widget.php'?>
<?php include 'google_analytics.php'?>
