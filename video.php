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
	</head>
    <?php 
			   	
		$videonum = $_GET['video_id'];		   
			   
			   
			   
	?> 
<body class="single-post">
	<header id="header" class="clear">
		<?php 
			require('main_menu.php');
		
		?>
        
        <style>
			#header .logo { background:url(images/zipout-black.png) !important; }
		</style>
	</header>
    <script>
	$(function(){
	  $('#video').css({ width: $('#wrapper1').innerWidth() + 'px', height: $('#wrapper1').innerHeight() + 'px' });
	
	  $(window).resize(function(){
		$('#video').css({ width: $('#wrapper1').innerWidth() + 'px', height: $('#wrapper1').innerHeight() + 'px' });
	  });
	});
	</script>
	<section class="container"  style="max-height:100%;">
		<div class="wrapper" id="wrapper1" style="max-height:550px; min-height:500px;">
			
			<div class="singlePostWrap clear" style="max-height:500px;">
            
               <?php 
			   	
					switch($videonum)
					{
							
						case "":
						default :
						?>
                        
                       		<h3 style="text-align:center; margin:0px auto; margin-bottom:30px; margin-top:-30px;">Bolly Bhangra Fitness</h3>
                
                			<iframe id="video" src="https://www.youtube.com/embed/skvonm8P62g" frameborder="0" allowfullscreen></iframe>
                        
                        <?php
						break;
						
						case "1":
						
						?>
							<h3 style="text-align:center; margin:0px auto; margin-bottom:30px; margin-top:-30px;">Zee TV Covers ZipOut</h3>
                
                			<iframe id="video" src="https://www.youtube.com/embed/rczY4iIZt2Y" frameborder="0" allowfullscreen></iframe>
						<?php						
						break;
						
						
						case "2":						
						?>
							<h3 style="text-align:center; margin:0px auto; margin-bottom:30px; margin-top:-30px;">Bolly Bhangra Fitness</h3>
                
                			<iframe id="video" src="https://www.youtube.com/embed/skvonm8P62g" frameborder="0" allowfullscreen></iframe>
						<?php
						break;
						
						case "3":						
						?>
							<h3 style="text-align:center; margin:0px auto; margin-bottom:30px; margin-top:-30px;">Dance Again (Jennifer Lopez)</h3>
                
                			<iframe id="video" src="https://www.youtube.com/embed/vZPUsJ_Szog" frameborder="0" allowfullscreen></iframe>
						<?php
						break;
						
						case "4":						
						?>
							<h3 style="text-align:center; margin:0px auto; margin-bottom:30px; margin-top:-30px;">Bollywood Choreography</h3>
                
                			<iframe id="video" src="https://www.youtube.com/embed/x3jU5FVnocY" frameborder="0" allowfullscreen></iframe>
						<?php
						break;
						
						case "5":						
						?>
							<h3 style="text-align:center; margin:0px auto; margin-bottom:30px; margin-top:-30px;">ZipOut Horror Dance Production</h3>
                
                			<iframe id="video" src="https://www.youtube.com/embed/CFKeQMWPfQM" frameborder="0" allowfullscreen></iframe>
						<?php
						break;
						
						case "6":						
						?>
							<h3 style="text-align:center; margin:0px auto; margin-bottom:30px; margin-top:-30px;">Zee TV Covers ZipOut</h3>
                
                			<iframe id="video" src="https://www.youtube.com/embed/Ko0AlAuMgkk" frameborder="0" allowfullscreen></iframe>
						<?php
						break;
						
						case "7":						
						?>
							<h3 style="text-align:center; margin:0px auto; margin-bottom:30px; margin-top:-30px;">ZipOut Corporate Workshop</h3>
                
                			<iframe id="video" src="https://www.youtube.com/embed/owRAh6RFfVo" frameborder="0" allowfullscreen></iframe>
						<?php
						break;
						
						case "8":						
						?>
							<h3 style="text-align:center; margin:0px auto; margin-bottom:30px; margin-top:-30px;">ZipOut Belly Fusion</h3>
                
                			<iframe id="video" src="https://www.youtube.com/embed/IKcCd0Yps90" frameborder="0" allowfullscreen></iframe>
						<?php
						break;				
				
					}
					
			   ?> 
                
                
                
                
                
                
				<p>&nbsp;</p>
				
			</div>
			
		</div>
        
		<div class="relatedPosts" style="margin-top:100px;">
		</div>
		<div class='col-lg-12 col-sm-12'>
		<center>
		<div class="fb-comments" data-href="http://www.zipout.in/video.php" data-numposts="8" data-colorscheme="light"></div>
		
		</center>
		</div>
	</section>
    
	<?php
		require('main_footer.php');
	
	?>
</body>
</html>
<?php include 'widget.php'?>
<?php include 'google_analytics.php'?>