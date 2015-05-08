<!DOCTYPE html>
<html lang="uk">
	<head>
		<title>ZipOut-RSVP Event</title>
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
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
   <script src="js/alertify.js"></script>
<link rel="stylesheet" type="text/css" href="css/alertify.core.css"  media="all" />
<link rel="stylesheet" type="text/css" href="css/alertify.default.css"  media="all" />
		
		<script>

$(function()
		{

	function isValidEmailAddress(emailAddress) {
	    var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);


  	    return pattern.test(emailAddress);
	};
	


    
	
	
		

		 $('#sendemail').on('click', function(event) {

			 if($("#email").val()=='')
		        {
		              alertify.error("Please complete all information requested on this form.");
		              return false;
				}


		     if($("#email").val()!='')
             {
	               if(!isValidEmailAddress($("#email").val()))
			          {
		
                      alertify.error("Please Enter valid Email Address");
                      return false;
			           }
             }

			 var data =$("#contact_form").serialize();

				$.ajax({
					  type: "POST",
					  url: "subscribe.php",
					  dataType: "json",
					  data: data,
						  
						  success: function(msg) {


							  if(msg['success']==true)
							  {
							  
							  alertify.success("Thank You For subscribing. We will be contacting you shortly");
							  $("#email").val("");
							  }
							  else if(msg['success']==false)
							  {

								  if(msg['message']=="already")
								  {
								  alertify.error("Email Address is already with Us.");
								  }
								  else if(msg['message']=="notvalidemail")
								  {
									  alertify.error("Please enter valid email address.");

								  }else 
								  {
									  alertify.error("Opps! Error Please try again after sometime.");
								  }
							  }

						  }

				});

				
				

		 });











		});



</script>
	</head>
<body class="cart">
	<header id="header" class="clear">
		<?php 
			require('main_menu.php');
		?>
	</header>
		</p>
			<section class="container">
		<div class="pageHeader" style="background-image: url(images/content/events.jpg);">
			<h1>RSVP for Our Events</h1>
		</div>
			<div class="checkoutPage clear">
			<form name='contact_form' id='contact_form'>
				<div class="mcell" style='width:100%;'>
					<p class="form-row form-row-first">
						<label>First Name</label>
						<input class="input-text " type="text" value="" placeholder="" name="fname" id='fname'>
					</p>
					<p class="form-row form-row-last">
						<label>Last Name</label>
						<input  class="input-text " type="text" value="" placeholder="" name="lname" id='lname' >
					</p>
					<div class="clear"></div>
					<p class="form-row form-row-wide">
						<label class="" for="billing_email">Email Address</label>
						<input  class="input-text " type="text" value="" placeholder="" name="email" id='email' >
					</p>
					<p class="form-row form-row-wide">
						<label class="" for="billing_phone">Phone</label>
						<input  class="input-text " type="text" value="" placeholder="" name="phone" id='phone'>
						<a class="checkoutBtn" id='sendemail' >Submit</a>
				</div>
				
				</form>
		</div>
		
	</section>
	<?php
		require('main_footer.php');
	?>
</body>
</html>
<?php include 'widget.php'?>
<?php include 'google_analytics.php'?>