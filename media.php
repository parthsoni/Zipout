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
			   	
		$source = $_GET['source'];		   
	   
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
   
	<section class="container"  style="max-height:100%;">
		<div class="wrapper" id="wrapper1" style="">
			
			<div class="singlePostWrap clear" style="">
            
               <?php 
			   	
					switch($source)
					{
							
						case "":
						default :
						?>
                        
                       		<h3 style="text-align:center; margin:0px auto; margin-bottom:30px; margin-top:-30px;">
                            	Hindustan Times
                            </h3>
                            
                            <p>
                            	<img src="images/media-legit/hindustan-times-zipout-1.jpg">
                            </p>
                            
                            <p>
                            	<img src="images/media-legit/hindustan-times-zipout-2.jpg">
                            </p>
                
                			
                            
                        
                        <?php
						break;
						
						case "HINDUSTAN_TIMES":
						
						?>
							<h3 style="text-align:center; margin:0px auto; margin-bottom:30px; margin-top:-30px;">
                            	Hindustan Times
                            </h3>
                            
                            <p>
                            	<img src="images/media-legit/hindustan-times-zipout-1.jpg">
                            </p>
                            
                            <p>
                            	<img src="images/media-legit/hindustan-times-zipout-2.jpg">
                            </p>
                            
						<?php						
						break;
						
						
						case "TIMES_of_INDIA":						
						?>
							<h3 style="text-align:center; margin:0px auto; margin-bottom:30px; margin-top:-30px;">
                            	TIMES of INDIA
                            </h3>
                            
                            <p><img src="images/media-legit/times-of-india-zipout-1.jpg"></p>
                            
                            <p><img src="images/media-legit/times-of-india-zipout-2.jpg"></p>
                            
                            <p><img src="images/media-legit/times-of-india-zipout-3.jpg"></p>
                            
                            <p><img src="images/media-legit/times-of-india-zipout-4.jpg"></p>
                            
                            <p><img src="images/media-legit/times-of-india-zipout-5.jpg"></p>
                            
                            <p><img src="images/media-legit/times-of-india-zipout-6.jpg"></p>
                            
                            <p><img src="images/media-legit/times-of-india-zipout-7.jpg"></p>
                            
						<?php
						break;
						
						case "ECONOMICS_TIMES":						
						?>
							<h3 style="text-align:center; margin:0px auto; margin-bottom:30px; margin-top:-30px;">
                            	ECONOMICS TIMES
                            </h3>
                            
                            <p><img src="images/media-legit/economic-time-zipout.jpg"></p>
                            
						<?php
						break;
						
						case "FEMINA":						
						?>
							<h3 style="text-align:center; margin:0px auto; margin-bottom:30px; margin-top:-30px;">
                            	FEMINA
                            </h3>
                            
                            <p><img src="images/media-legit/femina-zipout.jpg"></p>
						<?php
						break;
						
						case "ASIAN_AGE":						
						?>
							<h3 style="text-align:center; margin:0px auto; margin-bottom:30px; margin-top:-30px;">
                            	THE ASIAN AGE
                            </h3>
                            
                            <p><img src="images/media-legit/asian-age-zipout.jpg"></p>
						<?php
						break;
						
						case "FM_104":						
						?>
							<h3 style="text-align:center; margin:0px auto; margin-bottom:30px; margin-top:-30px;">
                            	FM 104
                            </h3>
                            
                            <p><img src="images/media-legit/104fm-zipout.jpg"></p>
                            
						<?php
						break;
						
						case "NBT":						
						?>
							<h3 style="text-align:center; margin:0px auto; margin-bottom:30px; margin-top:-30px;">
                            	NBT
                            </h3>
                            
                            <p><img src="images/media-legit/nbt-zipout.jpg"></p>
                            
						<?php
						break;
						
						case "FINANCIAL_TIMES":						
						?>
							<h3 style="text-align:center; margin:0px auto; margin-bottom:30px; margin-top:-30px;">
                            	FINANCIAL TIMES
                            </h3>
                            
                            <p><img src="images/media-legit/financial-times-zipout.jpg"></p>
                            
						<?php
						break;
										
						
					}
					
			   ?> 
                
                
                
                
                
            
			</div>
			
		</div>
        <div class='col-lg-12 col-sm-12'>
		<center>
		<div class="fb-comments" data-href="http://www.zipout.in/media.php" data-numposts="8" data-colorscheme="light"></div>
		
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
