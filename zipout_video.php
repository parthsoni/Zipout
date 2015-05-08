<!DOCTYPE html>
<html lang="uk">
	<head>
		<title>ZIPOUT : Video Gallery</title>
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

(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=625178694184501&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));




</script>
		
		<style>
		
		.vpanel
		{
		height:500px;
		margin-left:40px;
		margin-right:40px;
		}
		.fpanel 
		{
		
		height:340px;
		width:100%
		}
		
		.ffpanel
		{
		height:340px;
		width:100%
		
		}
		
		.mtxt
		{
		
		text-align:center !important; 
		margin:0px auto !important;
		margin-bottom:20px !important; 
		margin-top:-20px !important;
		
		}
		
		
		@media screen and (max-width: 550px) {
		
		
		.vpanel
		{
		margin-left:0;
		margin-right:0;
		height:400px;
		
		}
		
		.fpanel
		{
		
		height:320px;
		width:100%
		}
		
		
		.ffpanel
		{
		
		height:300px;
		width:100%;
		}
		
		
		.mtxt
		{
		font-size: 25px !important;
		line-height: 30px !important;
		margin-top:5px !important;
		text-align:center !important; 
		margin:0px auto !important;
		margin-bottom:10px !important; 
		}
		}
		</style>
	</head>
    <?php 
			   	
		//;$videonum = $_GET['video_id'];		   
			   
			   
			   
	?> 
<body class="events">
	<header id="header" class="clear">
		<?php 
			require('main_menu.php');
		
		?>
	</header>
        <?php include 'widget.php'?>
        
        <style>
			#header .logo { background:url(images/zipout-black.png) !important; }
		</style>
	</header>
    <script>
	/*$(function(){
	  $('#video').css({ width: $('#wrapper1').innerWidth() + 'px', height: $('#wrapper1').innerHeight() + 'px' });
	
	  $(window).resize(function(){
		$('#video').css({ width: $('#wrapper1').innerWidth() + 'px', height: $('#wrapper1').innerHeight() + 'px' });
	  });
	});*/
	</script>
	<section class="container">
	
	<div class="pageHeader" style="background-image: url(images/content/events.jpg);">
			<h1>HT-ZipOut Danceathon at Raahgiri on 26th. Learn Steps.</h1>
		</div>
		<div class="wrapper" id="wrapper1" style="min-height:500px;margin-top:50px;">
			
			<div class="singlePostWrap clear vpanel">
            
             
                        
                       		<h3 class='mtxt' >Learn ZipOut Fitfest (salsa inspired) for Raahgiri</h3>
                
                			<iframe class='ffpanel' id="video" src="https://www.youtube.com/embed/M1DR3EWpFgo" frameborder="0" allowfullscreen></iframe>
                        
                        
                        </div>
                        
                        
                        <div class="singlePostWrap clear vpanel">
                       
							<h3 class='mtxt'>Learn ZipOut Fitfest (chittiya kalaiyaa) for Raahgiri</h3>
                
                			<iframe class='fpanel' id="video" src="https://www.youtube.com/embed/sdeh_oJ3s-I" frameborder="0" allowfullscreen  ></iframe>
                			  <p>&nbsp;</p>
						</div>
						
						
						     <div class="singlePostWrap clear vpanel">
						
							<h3  class='mtxt' >Learn ZipOut Fitfest for Raahgiri</h3>
                
                			<iframe class='fpanel' id="video" src="https://www.youtube.com/embed/7VXE0ilMH7k" frameborder="0" allowfullscreen  > </iframe>
						  <p>&nbsp;</p>
						</div>
							
							 <div class="singlePostWrap clear vpanel">
							
							<h3  class='mtxt' >Learn ZipOut Fitfest (belly dance) for Raahgiri </h3>
                
                			<iframe class='fpanel' id="video" src="https://www.youtube.com/embed/Do4IM92VMVk" frameborder="0" allowfullscreen  ></iframe>
						  <p>&nbsp;</p>
						
						</div>
						       
			
			
		</div>
        <div class="relatedPosts" style="margin-top:100px;">
		</div>
		<div class='col-lg-12 col-sm-12'>
		<center>
		<div class="fb-comments" data-href="http://www.zipout.in/zipout_video.php" data-numposts="8" data-colorscheme="light"></div>
		
		</center>
		</div>
	
		
	</section>
   
	<?php
		require('main_footer.php');
	
	?>
</body>
</html>
<?php include 'google_analytics.php'?>