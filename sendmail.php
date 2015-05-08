<?php


include 'connection.php';
$tablename = '`steersafe_subscribe`';


if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message']) && isset($_POST['subject']))
{
	
	if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		
		
		$response =array();
		
		$response['success'] = false;
		$response['message'] = "notvalidemail";
	}
	
$Name = clean_inputPOST($_POST['name']);
$Email = $_POST['email'];
$message = clean_inputPOST($_POST['message']);
$subject  = clean_inputPOST($_POST['subject']);

date_default_timezone_set("Asia/Kolk ata");

$today =  date('Y-m-d H:i:s');



$check_email ="select email from $tablename where email='$Email'";

$check_email_res = mysql_query($check_email);

//if(mysql_num_rows($check_email_res)<=0)
//{
$query="INSERT INTO $tablename (`id`,`name`,`email`,`subject`, `message`, `date`)
VALUES
('','$Name',  '$Email', '$subject', '$message', '$today')";

$result = mysql_query($query);

$link_id= mysql_insert_id();


if($result)
{
	
	
	include 'class.phpmailer.php';
	
	
	$mail = new PHPMailer;
	
	/*
	// Set mailer to use SMTP
	$mail->Host = 'smtp.mandrillapp.com';                 // Specify main and backup server
	$mail->Port = 587;                                    // Set the SMTP port
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'admin@steersafeapp.com';                // SMTP username
	$mail->Password = 'vjI-KzHopE3br5JG9SeP5Q';              // SMTP password
	$mail->SMTPSecure = 'tls'; 	                          // Enable encryption, 'ssl' also accepted
		
	$mail->From = 'notification@steersafeapp.com';
	$mail->FromName = 'SteerSafe';
	*/
	$mail->IsSMTP();
    $mail->SMTPAuth   = true; // SMTP authentication
	$mail->Host       = "smtp.gmail.com"; // SMTP server
	$mail->Port       = 465; // SMTP Port
	$mail->SMTPSecure ='ssl';
	$mail->Username   = "admin@steersafeapp.com"; // SMTP account username
	$mail->Password   = "admin@steersafe";        // SMTP account password
	$mail->IsHTML(true);
	
	$mail->From = 'notification@steersafeapp.com';
	$mail->FromName = 'SteerSafe';
	
	$mail->AddAddress($Email,"");  // Add a recipient
	// Name is optional
		
	$mail->Subject = "Your message has been sent to SteerSafeApp.com";
	$favcy_balance = 0;
	
	if($subject=="Partner")
	{
		$body = pmessage($Name, $subject, $message);
	
	}else if($subject=="Developer")
	{
		$body = dmessage($Name, $subject, $message);
	
	}else {
	
	
		$body = umessage($Name);
	}
	
	//$body = pmessage($name, $subject, $message);
	$mail->MsgHTML($body);
	
	
	if(!$mail->Send()) {
	
	//	echo 'Mailer Error: ' . $mail->ErrorInfo;
	
		$response =array();
		
		$response['success'] = false;
		$response['message'] = mysql_error();
		
		
		echo json_encode($response);
		exit();
		}
			
	else
	{
	
		$response =array();
		
		$response['success'] = true;
		
		$response['message'] = "done";
		
		echo json_encode($response);
		exit();
	
	}
	
	
	
	
	
	
	
	
	
	
}else
{
	
	$response =array();
	
	$response['success'] = false;
	$response['message'] = mysql_error();
	
	
	echo json_encode($response);
	exit();
}

}

else {
	
	$response =array();
	
	$response['success'] = false;
	$response['message'] = "notcomplete";
	
	
	echo json_encode($response);
	exit();
	
}


function clean_inputPOST($data)
{
	$data = addslashes($data);
	$data = stripslashes($data);
	$data = trim($data);
	$data = preg_quote($data);


	$data = str_replace("'", "\'", $data);
	// // 	$data = htmlspecialchars($data);


	return $data;
}


function umessage($fname)
{

	$message = "<html xmlns=\"http://www.w3.org/1999/xhtml\">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
        <title>*|MC:SUBJECT|*</title>

    <style type=\"text/css\">
		#outlook a{
			padding:0;
		}
		body{
			width:100% !important;
		}
		.ReadMsgBody{
			width:100%;
		}
		.ExternalClass{
			width:100%;
		}
		body{
			-webkit-text-size-adjust:none;
		}
		body{
			margin:0;
			padding:0;
		}
		img{
			border:0;
			height:auto;
			line-height:100%;
			outline:none;
			text-decoration:none;
		}
		table td{
			border-collapse:collapse;
		}
		#bodyTable{
			height:100% !important;
			margin:0;
			padding:0;
			width:100% !important;
		}
	/*
	@tab Page
	@section background color
	@tip Set the background color for your email. You may want to choose one that matches your company\'s branding.
	@theme page
	*/
		body,#bodyTable{
			/*@editable*/background-color:#DEE0E2;
		}
	/*
	@tab Page
	@section email border
	@tip Set the border for your email.
	*/
		#templateContainer{
			/*@editable*/border:0;
		}
	/*
	@tab Page
	@section heading 1
	@tip Set the styling for all first-level headings in your emails. These should be the largest of your headings.
	@style heading 1
	*/
		h1,h1 a:link,h1 a:visited,h1 a .yshortcuts {
			/*@editable*/color:#D83826;
			display:block;
			/*@editable*/font-family:Helvetica;
			/*@editable*/font-size:38px;
			/*@editable*/font-style:normal;
			/*@editable*/font-weight:bold;
			/*@editable*/line-height:100%;
			/*@editable*/letter-spacing:normal;
			margin-top:0;
			margin-right:0;
			margin-bottom:10px;
			margin-left:0;
			/*@editable*/text-align:left;
			/*@editable*/text-decoration:none;
		}
	/*
	@tab Page
	@section heading 2
	@tip Set the styling for all second-level headings in your emails.
	@style heading 2
	*/
		h2,h2 a:link,h2 a:visited,h2 a .yshortcuts {
			/*@editable*/color:#404040;
			display:block;
			/*@editable*/font-family:Helvetica;
			/*@editable*/font-size:20px;
			/*@editable*/font-style:normal;
			/*@editable*/font-weight:bold;
			/*@editable*/line-height:100%;
			/*@editable*/letter-spacing:normal;
			margin-top:0;
			margin-right:0;
			margin-bottom:10px;
			margin-left:0;
			/*@editable*/text-align:left;
			/*@editable*/text-decoration:none;
		}
	/*
	@tab Page
	@section heading 3
	@tip Set the styling for all third-level headings in your emails.
	@style heading 3
	*/
		h3,h3 a:link,h3 a:visited,h3 a .yshortcuts {
			/*@editable*/color:#606060;
			display:block;
			/*@editable*/font-family:Helvetica;
			/*@editable*/font-size:14px;
			/*@editable*/font-style:normal;
			/*@editable*/font-weight:bold;
			/*@editable*/line-height:100%;
			/*@editable*/letter-spacing:normal;
			margin-top:0;
			margin-right:0;
			margin-bottom:10px;
			margin-left:0;
			/*@editable*/text-align:left;
			/*@editable*/text-decoration:none;
		}
	/*
	@tab Page
	@section heading 4
	@tip Set the styling for all fourth-level headings in your emails. These should be the smallest of your headings.
	@style heading 4
	*/
		h4,h4 a:link,h4 a:visited,h4 a .yshortcuts {
			/*@editable*/color:#808080;
			display:block;
			/*@editable*/font-family:Helvetica;
			/*@editable*/font-size:12px;
			/*@editable*/font-style:normal;
			/*@editable*/font-weight:bold;
			/*@editable*/line-height:100%;
			/*@editable*/letter-spacing:normal;
			margin-top:0;
			margin-right:0;
			margin-bottom:10px;
			margin-left:0;
			/*@editable*/text-align:left;
			/*@editable*/text-decoration:none;
		}
	/*
	@tab Header
	@section preheader style
	@tip Set the background color and bottom border for your email\'s preheader area.
	@theme page
	*/
		#templatePreheader{
			/*@editable*/background-color:#DEE0E2;
			/*@editable*/border-bottom:1px solid #CCCCCC;
		}
	/*
	@tab Header
	@section preheader text
	@tip Set the styling for your email\'s preheader text. Choose a size and color that is easy to read.
	*/
		.preheaderContent{
			/*@editable*/color:#808080;
			/*@editable*/font-family:Helvetica;
			/*@editable*/font-size:10px;
			/*@editable*/line-height:125%;
			/*@editable*/text-align:left;
		}
	/*
	@tab Header
	@section preheader link
	@tip Set the styling for your email\'s preheader links. Choose a color that helps them stand out from your text.
	*/
		.preheaderContent a:link,.preheaderContent a:visited,.preheaderContent a .yshortcuts {
			/*@editable*/color:#606060;
			/*@editable*/font-weight:normal;
			/*@editable*/text-decoration:underline;
		}
	/*
	@tab Header
	@section header style
	@tip Set the background color and borders for your email\'s header area.
	@theme header
	*/
		#templateHeader{
			/*@editable*/background-color:#DEE0E2;
			/*@editable*/border-top:0;
			/*@editable*/border-bottom:0;
		}
	/*
	@tab Header
	@section header text
	@tip Set the styling for your email\'s header text. Choose a size and color that is easy to read.
	*/
		.headerContent{
			/*@editable*/color:#505050;
			/*@editable*/font-family:Helvetica;
			/*@editable*/font-size:20px;
			/*@editable*/font-weight:bold;
			/*@editable*/line-height:100%;
			/*@editable*/padding-top:40px;
			/*@editable*/padding-right:0;
			/*@editable*/padding-bottom:0;
			/*@editable*/padding-left:0;
			/*@editable*/text-align:center;
			/*@editable*/vertical-align:middle;
		}
	/*
	@tab Header
	@section header link
	@tip Set the styling for your email\'s header links. Choose a color that helps them stand out from your text.
	*/
		.headerContent a:link,.headerContent a:visited,.headerContent a .yshortcuts {
			/*@editable*/color:#D83826;
			/*@editable*/font-weight:normal;
			/*@editable*/text-decoration:underline;
		}
		#headerImage{
			display:block;
			height:auto;
			max-width:600px !important;
		}
	/*
	@tab Body
	@section body style
	@tip Set the background color and borders for your email\'s body area.
	*/
		.templateBackground{
			/*@editable*/background-color:#F4F4F4;
		}
		.blockImage{
			display:block;
		}
	/*
	@tab Body
	@section body text
	@tip Set the styling for your email\'s main content text. Choose a size and color that is easy to read.
	@theme main
	*/
		.bodyContent{
			/*@editable*/color:#505050;
			/*@editable*/font-family:Helvetica;
			/*@editable*/font-size:17px;
			/*@editable*/line-height:150%;
			/*@editable*/text-align:left;
		}
	/*
	@tab Body
	@section body link
	@tip Set the styling for your email\'s main content links. Choose a color that helps them stand out from your text.
	*/
		.bodyContent a:link,.bodyContent a:visited,.bodyContent a .yshortcuts {
			/*@editable*/color:#D83826;
			/*@editable*/font-weight:normal;
			/*@editable*/text-decoration:underline;
		}
	/*
	@tab Body
	@section button style
	@tip Set the styling for your email\'s buttons. Choose a style that draws attention.
	*/
		.templateButton{
			/*@tab Body
@section button style
@tip Set the styling for your email\'s buttons. Choose a style that draws attention.*/-moz-border-radius:4px;
			-webkit-border-radius:4px;
			/*@editable*/background-color:#BBBBBB;
			border-radius:4px;
		}
	/*
	@tab Body
	@section button style
	@tip Set the styling for your email\'s buttons. Choose a style that draws attention.
	*/
		.templateButtonContent,.templateButtonContent a:link,.templateButtonContent a:visited,.templateButtonContent a .yshortcuts {
			/*@editable*/color:#FFFFFF;
			/*@editable*/font-family:Helvetica;
			/*@editable*/font-size:15px;
			/*@editable*/font-weight:bold;
			/*@editable*/letter-spacing:normal;
			text-align:center;
			text-decoration:none;
			vertical-align:middle;
		}
		.bodyContent img{
			display:inline;
			height:auto;
			max-width:260px !important;
		}
	/*
	@tab Footer
	@section footer style
	@tip Set the background color and borders for your email\'s footer area.
	@theme footer
	*/
		#templateFooter{
			/*@editable*/background-color:#D83826;
			/*@editable*/border-top:1px solid #841719;
		}
	/*
	@tab Footer
	@section footer text
	@tip Set the styling for your email\'s footer text. Choose a size and color that is easy to read.
	@theme footer
	*/
		.footerContent{
			/*@editable*/color:#EEEEEE;
			/*@editable*/font-family:Helvetica;
			/*@editable*/font-size:10px;
			/*@editable*/line-height:150%;
			/*@editable*/text-align:left;
		}
	/*
	@tab Footer
	@section footer link
	@tip Set the styling for your email\'s footer links. Choose a color that helps them stand out from your text.
	*/
		.footerContent a:link,.footerContent a:visited,.footerContent a .yshortcuts {
			/*@editable*/color:#FFFFFF;
			/*@editable*/font-weight:normal;
			/*@editable*/text-decoration:underline;
		}
		.footerContent img{
			display:inline;
		}
		#monkeyRewards img{
			max-width:190px;
		}
</style></head>
    <body leftmargin=\"0\" marginwidth=\"0\" topmargin=\"0\" marginheight=\"0\" offset=\"0\">
    	<center>
        	<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" height=\"100%\" width=\"100%\" id=\"bodyTable\">
            	<tr>
                	<td align=\"center\" valign=\"top\" style=\"padding-bottom:40px;\">
                    	<!-- // BEGIN CONTAINER -->
                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"600\" id=\"templateContainer\">
                        	<tr>
                            	<td align=\"center\" valign=\"top\">
                                    <!-- // BEGIN PREHEADER -->
                                    <table border=\"0\" cellpadding=\"10\" cellspacing=\"0\" width=\"600\" id=\"templatePreheader\">
                                        <tr>
                                            <td align=\"center\" valign=\"top\" style=\"padding-right:20px; padding-left:20px;\">
                                                <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
                                                    <tr>
                                                        <td valign=\"top\" class=\"preheaderContent\" mc:edit=\"preheader_content\">Thank you for subscribing with SteerSafe App. We welcome you to the world of Driving Rewards.</td>
                                                        <!-- *|IFNOT:ARCHIVE_PAGE|* -->
                                                        <td width=\"20\">
                                                            <br>
                                                        </td>
                                                        <td valign=\"top\" width=\"200\" class=\"preheaderContent\" mc:edit=\"preheader_links\">
                                                            Email not displaying correctly?<br><a href=\"*|ARCHIVE|*\" target=\"_blank\">View it in your browser</a>.
                                                        </td>
                                                        <!-- *|END:IF|* -->
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- END PREHEADER \\ -->
                                </td>
                            </tr>
                        	<tr>
                            	<td align=\"center\" valign=\"top\">
                                	<!-- // BEGIN HEADER -->
                                	<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"600\" id=\"templateHeader\">
                                    	<tr>
                                        	<td align=\"center\" valign=\"top\">
                                            	<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
                                                	<tr>
                                                        <td class=\"headerContent\">
                                                            <img src=\"https://gallery.mailchimp.com/c35e092fc33aafa5aabfdac40/images/6b425b04-75b3-4017-b07a-7d0e6ac57e6b.png\" style=\"max-width:600px;\" id=\"headerImage\" mc:label=\"header_image\" mc:edit=\"header_image\" mc:allowdesigner mc:allowtext>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- END HEADER \\ -->
                                </td>
                            </tr>
                        	<tr>
                            	<td align=\"center\" valign=\"top\">
                                	<!-- // BEGIN BODY -->
                                	<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"600\" class=\"templateBackground\">
                                    	<tr>
                                            <td align=\"left\" valign=\"top\" width=\"400\" class=\"templateBackground\">
                                                <table border=\"0\" cellpadding=\"20\" cellspacing=\"0\" width=\"100%\">
                                                    <tr>
                                                        <td valign=\"top\" class=\"bodyContent\" mc:edit=\"body_content00\"><h2>SteerSafe</h2>

<h3>Welcomes<br>
<br>
<span style=\"color:rgb(216, 56, 38); font-size:38px; line-height:38px\">You to&nbsp;Driving Rewards&nbsp;</span></h3>
<br><br/>
Hi&nbsp;<br>
Thank you for showing your interest in our product. We promise you that we would keep you updated with the development of SteerSafe App and would make sure that you get to use the SteerSafe App&#39;s Beta Version.<br>
<br>
The concept is simple and our alpha tells us that it is effective too.<br>
<br>
Download the app. Start the trip and if you drive within the speed limits and do not use your phone while driving, we will pass you &#39;Good Drive&#39; Reward Coins or &#39;Steer Safe&#39; Reward Coins.&nbsp;<br>
<br>
Keep accumulating the coins and then redeem at partner merchant outlets for some freebies and discounts.&nbsp;<br>
<br>
Don&#39;t Over Speed and Don&#39;t Use your Mobile while Driving.&nbsp;<br>
<br>
We will Reward You.<br>
<br>
Spread the word<br>
<br>
Thank You<br>
<br>
SteerSafe Team.</td>
                                                    </tr>
                                                </table>
                                            </td>
                                        	<td valign=\"top\" width=\"200\">
                                            	<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"200\">
                                                    <tr>
                                                    	<td valign=\"top\">
                                                        	<img src=\"https://gallery.mailchimp.com/c35e092fc33aafa5aabfdac40/images/3cedd7f5-e072-48b4-b564-0cdb7a017993.jpg\" class=\"blockImage\" style=\"max-width:200px;\" id=\"campaign-icon\" mc:label=\"image\" mc:edit=\"body_image00\">
                                                        </td>
                                                    </tr>
                                                	<tr>
                                                    	<td valign=\"top\">
                                            				<img src=\"https://gallery.mailchimp.com/c35e092fc33aafa5aabfdac40/images/642d18d4-ab15-415a-8f1c-bcc2db49c7eb.jpg\" class=\"blockImage\" style=\"max-width:200px;\" mc:label=\"image\" mc:edit=\"body_image01\">
                                                		</td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    	<tr>
                                        	<td align=\"right\" colspan=\"2\" valign=\"top\" class=\"templateBackground\">
                                            	<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
                                                	<tr>
                                                        <td align=\"right\" valign=\"bottom\">
                                                        	<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
                                                            	<tr mc:repeatable>
                                                                	<td valign=\"bottom\">
			                                                            <img src=\"https://gallery.mailchimp.com/c35e092fc33aafa5aabfdac40/images/3cedd7f5-e072-48b4-b564-0cdb7a017993.jpg\" class=\"blockImage\" style=\"max-width:200px;\" mc:label=\"image\" mc:edit=\"body_image03\">
                                                            		</td>
                                                            	</tr>
                                                            </table>
                                                        </td>
                                                    	<td align=\"right\" valign=\"top\" class=\"templateBackground\">
                                                            <table border=\"0\" cellpadding=\"20\" cellspacing=\"0\" width=\"100%\">
                                                                <tr>
                                                                    <td valign=\"top\" class=\"bodyContent\" mc:edit=\"body_content01\"></td>
                                                                </tr>
                                                                <tr mc:hideable>
                                                                    <td align=\"left\" valign=\"top\" style=\"padding-top:0;\">
                                                                        <table border=\"0\" cellpadding=\"15\" cellspacing=\"0\" class=\"templateButton\">
                                                                            <tr>
                                                                                <td align=\"center\" valign=\"middle\" class=\"templateButtonContent\" mc:edit=\"template_button_content\"><a href=\"http://steersafeapp.com\" target=\"_blank\">Launching Soon</a><a href=\"http://www.mailchimp.com/\" target=\"_blank\">&nbsp;&raquo;</a></td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                        	<td colspan=\"2\" valign=\"top\" class=\"templateBackground\">
                                            	<a href='https://www.youtube.com/watch?feature=player_embedded&v=HsMFp51PW_g'><img src=\"https://gallery.mailchimp.com/c35e092fc33aafa5aabfdac40/images/fe2e59e4-5fed-4f14-9a1a-a57a7b7c8309.png\" style=\"max-width:600px;\" mc:label=\"image\" mc:edit=\"body_image04\">
                                           </a>
			 </td>
                                        </tr>
                                    </table>
                                    <!-- END BODY \\ -->
                                </td>
                            </tr>
                        	<tr>
                            	<td align=\"center\" valign=\"top\">
                                	<!-- // BEGIN FOOTER -->
                                	<table border=\"0\" cellpadding=\"20\" cellspacing=\"0\" width=\"600\" id=\"templateFooter\">
                                    	<tr>
                                        	<td align=\"center\" valign=\"top\">
                                            	<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
                                                    <tr>
                                                    	<td colspan=\"3\" valign=\"top\" class=\"footerContent\" style=\"padding-bottom:20px;\" mc:edit=\"footer_social\">(C) SteerSafe App.&nbsp;<br>
<br>
All Rights Reserved. SteerSafe App uses the Favcy Architecture for Management of Reward Coins.</td>
                                                    </tr>
                                                	<tr>
                                                        <td valign=\"top\" class=\"footerContent\" mc:edit=\"footer_content\"></td>
                                                        <td width=\"20\">
                                                        	<br>
                                                        </td>
                                                        <td valign=\"top\" width=\"200\" id=\"monkeyRewards\" class=\"footerContent\" mc:edit=\"monkeyrewards\"></td>
                                                    </tr>
                                                    <tr>
                                                    	<td colspan=\"3\" valign=\"top\" class=\"footerContent\" style=\"padding-top:20px;\" mc:edit=\"footer_utility\"></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- END FOOTER \\ -->
                                </td>
                            </tr>
                        </table>
                        <!-- END CONTAINER \\ -->
                    </td>
                </tr>
            </table>
        </center>
    </body>
</html>";

	return $message;

}
function dmessage($name, $subject, $message)
{

	$message = "<html xmlns=\"http://www.w3.org/1999/xhtml\">
	<head>
	<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
	<title>*|MC:SUBJECT|*</title>

	<style type=\"text/css\">
	#outlook a{
	padding:0;
}
body{
width:100% !important;
}
.ReadMsgBody{
width:100%;
}
.ExternalClass{
width:100%;
}
body{
-webkit-text-size-adjust:none;
}
body{
margin:0;
padding:0;
}
img{
border:0;
height:auto;
line-height:100%;
outline:none;
text-decoration:none;
}
table td{
border-collapse:collapse;
}
#bodyTable{
height:100% !important;
margin:0;
padding:0;
width:100% !important;
}
/*
@tab Page
@section background color
@tip Set the background color for your email. You may want to choose one that matches your company\'s branding.
@theme page
*/
body,#bodyTable{
/*@editable*/background-color:#DEE0E2;
}
/*
@tab Page
@section email border
@tip Set the border for your email.
*/
#templateContainer{
/*@editable*/border:0;
}
/*
@tab Page
@section heading 1
@tip Set the styling for all first-level headings in your emails. These should be the largest of your headings.
@style heading 1
*/
h1,h1 a:link,h1 a:visited,h1 a .yshortcuts {
/*@editable*/color:#D83826;
display:block;
/*@editable*/font-family:Helvetica;
/*@editable*/font-size:38px;
/*@editable*/font-style:normal;
/*@editable*/font-weight:bold;
/*@editable*/line-height:100%;
/*@editable*/letter-spacing:normal;
margin-top:0;
margin-right:0;
margin-bottom:10px;
margin-left:0;
/*@editable*/text-align:left;
/*@editable*/text-decoration:none;
}
/*
@tab Page
@section heading 2
@tip Set the styling for all second-level headings in your emails.
@style heading 2
*/
h2,h2 a:link,h2 a:visited,h2 a .yshortcuts {
/*@editable*/color:#404040;
display:block;
/*@editable*/font-family:Helvetica;
/*@editable*/font-size:20px;
/*@editable*/font-style:normal;
/*@editable*/font-weight:bold;
/*@editable*/line-height:100%;
/*@editable*/letter-spacing:normal;
margin-top:0;
margin-right:0;
margin-bottom:10px;
margin-left:0;
/*@editable*/text-align:left;
/*@editable*/text-decoration:none;
}
/*
@tab Page
@section heading 3
@tip Set the styling for all third-level headings in your emails.
@style heading 3
*/
h3,h3 a:link,h3 a:visited,h3 a .yshortcuts {
/*@editable*/color:#606060;
display:block;
/*@editable*/font-family:Helvetica;
/*@editable*/font-size:14px;
/*@editable*/font-style:normal;
/*@editable*/font-weight:bold;
/*@editable*/line-height:100%;
/*@editable*/letter-spacing:normal;
margin-top:0;
margin-right:0;
margin-bottom:10px;
margin-left:0;
/*@editable*/text-align:left;
/*@editable*/text-decoration:none;
}
/*
@tab Page
@section heading 4
@tip Set the styling for all fourth-level headings in your emails. These should be the smallest of your headings.
@style heading 4
*/
h4,h4 a:link,h4 a:visited,h4 a .yshortcuts {
/*@editable*/color:#808080;
display:block;
/*@editable*/font-family:Helvetica;
/*@editable*/font-size:12px;
/*@editable*/font-style:normal;
/*@editable*/font-weight:bold;
/*@editable*/line-height:100%;
/*@editable*/letter-spacing:normal;
margin-top:0;
margin-right:0;
margin-bottom:10px;
margin-left:0;
/*@editable*/text-align:left;
/*@editable*/text-decoration:none;
}
/*
@tab Header
@section preheader style
@tip Set the background color and bottom border for your email\'s preheader area.
@theme page
*/
#templatePreheader{
/*@editable*/background-color:#DEE0E2;
/*@editable*/border-bottom:1px solid #CCCCCC;
}
/*
@tab Header
@section preheader text
@tip Set the styling for your email\'s preheader text. Choose a size and color that is easy to read.
*/
.preheaderContent{
/*@editable*/color:#808080;
/*@editable*/font-family:Helvetica;
/*@editable*/font-size:10px;
/*@editable*/line-height:125%;
/*@editable*/text-align:left;
}
/*
@tab Header
@section preheader link
@tip Set the styling for your email\'s preheader links. Choose a color that helps them stand out from your text.
*/
.preheaderContent a:link,.preheaderContent a:visited,.preheaderContent a .yshortcuts {
/*@editable*/color:#606060;
/*@editable*/font-weight:normal;
/*@editable*/text-decoration:underline;
}
/*
@tab Header
@section header style
@tip Set the background color and borders for your email\'s header area.
@theme header
*/
#templateHeader{
/*@editable*/background-color:#DEE0E2;
/*@editable*/border-top:0;
/*@editable*/border-bottom:0;
}
/*
@tab Header
@section header text
@tip Set the styling for your email\'s header text. Choose a size and color that is easy to read.
*/
.headerContent{
/*@editable*/color:#505050;
/*@editable*/font-family:Helvetica;
/*@editable*/font-size:20px;
/*@editable*/font-weight:bold;
/*@editable*/line-height:100%;
/*@editable*/padding-top:40px;
/*@editable*/padding-right:0;
/*@editable*/padding-bottom:0;
/*@editable*/padding-left:0;
/*@editable*/text-align:center;
/*@editable*/vertical-align:middle;
}
/*
@tab Header
@section header link
@tip Set the styling for your email\'s header links. Choose a color that helps them stand out from your text.
*/
.headerContent a:link,.headerContent a:visited,.headerContent a .yshortcuts {
/*@editable*/color:#D83826;
/*@editable*/font-weight:normal;
/*@editable*/text-decoration:underline;
}
#headerImage{
display:block;
height:auto;
max-width:600px !important;
}
/*
@tab Body
@section body style
@tip Set the background color and borders for your email\'s body area.
*/
.templateBackground{
/*@editable*/background-color:#F4F4F4;
}
.blockImage{
display:block;
}
/*
@tab Body
@section body text
@tip Set the styling for your email\'s main content text. Choose a size and color that is easy to read.
@theme main
*/
.bodyContent{
/*@editable*/color:#505050;
/*@editable*/font-family:Helvetica;
/*@editable*/font-size:17px;
/*@editable*/line-height:150%;
/*@editable*/text-align:left;
}
/*
@tab Body
@section body link
@tip Set the styling for your email\'s main content links. Choose a color that helps them stand out from your text.
*/
.bodyContent a:link,.bodyContent a:visited,.bodyContent a .yshortcuts {
/*@editable*/color:#D83826;
/*@editable*/font-weight:normal;
/*@editable*/text-decoration:underline;
}
/*
@tab Body
@section button style
@tip Set the styling for your email\'s buttons. Choose a style that draws attention.
*/
.templateButton{
/*@tab Body
@section button style
@tip Set the styling for your email\'s buttons. Choose a style that draws attention.*/-moz-border-radius:4px;
-webkit-border-radius:4px;
/*@editable*/background-color:#BBBBBB;
border-radius:4px;
}
/*
@tab Body
@section button style
@tip Set the styling for your email\'s buttons. Choose a style that draws attention.
*/
.templateButtonContent,.templateButtonContent a:link,.templateButtonContent a:visited,.templateButtonContent a .yshortcuts {
/*@editable*/color:#FFFFFF;
/*@editable*/font-family:Helvetica;
/*@editable*/font-size:15px;
/*@editable*/font-weight:bold;
/*@editable*/letter-spacing:normal;
text-align:center;
text-decoration:none;
vertical-align:middle;
}
.bodyContent img{
display:inline;
height:auto;
max-width:260px !important;
}
/*
@tab Footer
@section footer style
@tip Set the background color and borders for your email\'s footer area.
@theme footer
*/
#templateFooter{
/*@editable*/background-color:#D83826;
/*@editable*/border-top:1px solid #841719;
}
/*
@tab Footer
@section footer text
@tip Set the styling for your email\'s footer text. Choose a size and color that is easy to read.
@theme footer
*/
.footerContent{
/*@editable*/color:#EEEEEE;
/*@editable*/font-family:Helvetica;
/*@editable*/font-size:10px;
/*@editable*/line-height:150%;
/*@editable*/text-align:left;
}
/*
@tab Footer
@section footer link
@tip Set the styling for your email\'s footer links. Choose a color that helps them stand out from your text.
*/
.footerContent a:link,.footerContent a:visited,.footerContent a .yshortcuts {
/*@editable*/color:#FFFFFF;
/*@editable*/font-weight:normal;
/*@editable*/text-decoration:underline;
}
.footerContent img{
display:inline;
}
#monkeyRewards img{
max-width:190px;
}
</style></head>
<body leftmargin=\"0\" marginwidth=\"0\" topmargin=\"0\" marginheight=\"0\" offset=\"0\">
<center>
<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" height=\"100%\" width=\"100%\" id=\"bodyTable\">
<tr>
<td align=\"center\" valign=\"top\" style=\"padding-bottom:40px;\">
<!-- // BEGIN CONTAINER -->
<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"600\" id=\"templateContainer\">
<tr>
<td align=\"center\" valign=\"top\">
<!-- // BEGIN PREHEADER -->
<table border=\"0\" cellpadding=\"10\" cellspacing=\"0\" width=\"600\" id=\"templatePreheader\">
<tr>
<td align=\"center\" valign=\"top\" style=\"padding-right:20px; padding-left:20px;\">
<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
<tr>
<td valign=\"top\" class=\"preheaderContent\" mc:edit=\"preheader_content\">

Thank you for your interest. Hold on with your enthusiasm and we will get back to you shortly.</td>
<!-- *|IFNOT:ARCHIVE_PAGE|* -->
<td width=\"20\">
<br>
</td>
<td valign=\"top\" width=\"200\" class=\"preheaderContent\" mc:edit=\"preheader_links\">
Email not displaying correctly?<br><a href=\"*|ARCHIVE|*\" target=\"_blank\">View it in your browser</a>.
</td>
<!-- *|END:IF|* -->
</tr>
</table>
</td>
</tr>
</table>
<!-- END PREHEADER \\ -->
</td>
</tr>
<tr>
<td align=\"center\" valign=\"top\">
<!-- // BEGIN HEADER -->
<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"600\" id=\"templateHeader\">
<tr>
<td align=\"center\" valign=\"top\">
<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
<tr>
<td class=\"headerContent\">
<img src=\"https://gallery.mailchimp.com/c35e092fc33aafa5aabfdac40/images/6b425b04-75b3-4017-b07a-7d0e6ac57e6b.png\" style=\"max-width:600px;\" id=\"headerImage\" mc:label=\"header_image\" mc:edit=\"header_image\" mc:allowdesigner mc:allowtext>
</td>
</tr>
</table>
</td>
</tr>
</table>
<!-- END HEADER \\ -->
</td>
</tr>
<tr>
<td align=\"center\" valign=\"top\">
<!-- // BEGIN BODY -->
<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"600\" class=\"templateBackground\">
<tr>
<td align=\"left\" valign=\"top\" width=\"400\" class=\"templateBackground\">
<table border=\"0\" cellpadding=\"20\" cellspacing=\"0\" width=\"100%\">
<tr>
<td valign=\"top\" class=\"bodyContent\" mc:edit=\"body_content00\"><h2>SteerSafe loves Developers</h2>


<br>
<span style=\"color:rgb(216, 56, 38); font-size:38px; line-height:38px\">You will get our API real soon !</span></h3>
<br><br/>
Hi&nbsp;$name<br><br>
Are you planning to create a product which can piggy back on SteerSafe App? <br>
We would love to hear from you. We love Developers and would forward our API so that you can go insane with creativity.
<br>
<br>
We have received your partnership intent mail and one of our reps will be shortly in touch with you to see partnership possibilities, to seek your suggestions and to basically chit chat with you. <br><br>
We love what we do and would want to know what would make this tick for you.<br><br>
Till then spread the word and 'Drive Safe'.<br>
<br>
Thank You<br>
<br>
SteerSafe Team.</td>
</tr>
</table>
</td>
<td valign=\"top\" width=\"200\">
<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"200\">
<tr>
<td valign=\"top\">
<img src=\"https://gallery.mailchimp.com/c35e092fc33aafa5aabfdac40/images/3cedd7f5-e072-48b4-b564-0cdb7a017993.jpg\" class=\"blockImage\" style=\"max-width:200px;\" id=\"campaign-icon\" mc:label=\"image\" mc:edit=\"body_image00\">
</td>
</tr>
<tr>
<td valign=\"top\">
<img src=\"https://gallery.mailchimp.com/c35e092fc33aafa5aabfdac40/images/642d18d4-ab15-415a-8f1c-bcc2db49c7eb.jpg\" class=\"blockImage\" style=\"max-width:200px;\" mc:label=\"image\" mc:edit=\"body_image01\">
</td>
</tr>
</table>
</td>
</tr>
<tr>
<td align=\"right\" colspan=\"2\" valign=\"top\" class=\"templateBackground\">
<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
<tr>
<td align=\"right\" valign=\"bottom\">
<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
<tr mc:repeatable>
<td valign=\"bottom\">
<img src=\"https://gallery.mailchimp.com/c35e092fc33aafa5aabfdac40/images/3cedd7f5-e072-48b4-b564-0cdb7a017993.jpg\" class=\"blockImage\" style=\"max-width:200px;\" mc:label=\"image\" mc:edit=\"body_image03\">
</td>
</tr>
</table>
</td>
<td align=\"right\" valign=\"top\" class=\"templateBackground\">
<table border=\"0\" cellpadding=\"20\" cellspacing=\"0\" width=\"100%\">
<tr>
<td valign=\"top\" class=\"bodyContent\" mc:edit=\"body_content01\"></td>
</tr>
<tr mc:hideable>
<td align=\"left\" valign=\"top\" style=\"padding-top:0;\">
<table border=\"0\" cellpadding=\"15\" cellspacing=\"0\" class=\"templateButton\">
<tr>
<td align=\"center\" valign=\"middle\" class=\"templateButtonContent\" mc:edit=\"template_button_content\"><a href=\"http://steersafeapp.com\" target=\"_blank\">Launching Soon</a><a href=\"http://www.mailchimp.com/\" target=\"_blank\">&nbsp;&raquo;</a></td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
<tr>
<td colspan=\"2\" valign=\"top\" class=\"templateBackground\">
<a href='https://www.youtube.com/watch?feature=player_embedded&v=HsMFp51PW_g'><img src=\"https://gallery.mailchimp.com/c35e092fc33aafa5aabfdac40/images/fe2e59e4-5fed-4f14-9a1a-a57a7b7c8309.png\" style=\"max-width:600px;\" mc:label=\"image\" mc:edit=\"body_image04\">
</a>
</td>
</tr>
</table>
<!-- END BODY \\ -->
</td>
</tr>
<tr>
<td align=\"center\" valign=\"top\">
<!-- // BEGIN FOOTER -->
<table border=\"0\" cellpadding=\"20\" cellspacing=\"0\" width=\"600\" id=\"templateFooter\">
<tr>
<td align=\"center\" valign=\"top\">
<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
<tr>
<td colspan=\"3\" valign=\"top\" class=\"footerContent\" style=\"padding-bottom:20px;\" mc:edit=\"footer_social\">(C) SteerSafe App.&nbsp;<br>
<br>
All Rights Reserved. SteerSafe App uses the Favcy Architecture for Management of Reward Coins.</td>
</tr>
<tr>
<td valign=\"top\" class=\"footerContent\" mc:edit=\"footer_content\"></td>
<td width=\"20\">
<br>
</td>
<td valign=\"top\" width=\"200\" id=\"monkeyRewards\" class=\"footerContent\" mc:edit=\"monkeyrewards\"></td>
</tr>
<tr>
<td colspan=\"3\" valign=\"top\" class=\"footerContent\" style=\"padding-top:20px;\" mc:edit=\"footer_utility\"></td>
</tr>
</table>
</td>
</tr>
</table>
<!-- END FOOTER \\ -->
</td>
</tr>
</table>
<!-- END CONTAINER \\ -->
</td>
</tr>
</table>
</center>
</body>
</html>";

return $message;

}

function pmessage($name, $subject, $message)
{

	$message = "<html xmlns=\"http://www.w3.org/1999/xhtml\">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
        <title>*|MC:SUBJECT|*</title>
	
    <style type=\"text/css\">
		#outlook a{
			padding:0;
		}
		body{
			width:100% !important;
		}
		.ReadMsgBody{
			width:100%;
		}
		.ExternalClass{
			width:100%;
		}
		body{
			-webkit-text-size-adjust:none;
		}
		body{
			margin:0;
			padding:0;
		}
		img{
			border:0;
			height:auto;
			line-height:100%;
			outline:none;
			text-decoration:none;
		}
		table td{
			border-collapse:collapse;
		}
		#bodyTable{
			height:100% !important;
			margin:0;
			padding:0;
			width:100% !important;
		}
	/*
	@tab Page
	@section background color
	@tip Set the background color for your email. You may want to choose one that matches your company\'s branding.
	@theme page
	*/
		body,#bodyTable{
			/*@editable*/background-color:#DEE0E2;
		}
	/*
	@tab Page
	@section email border
	@tip Set the border for your email.
	*/
		#templateContainer{
			/*@editable*/border:0;
		}
	/*
	@tab Page
	@section heading 1
	@tip Set the styling for all first-level headings in your emails. These should be the largest of your headings.
	@style heading 1
	*/
		h1,h1 a:link,h1 a:visited,h1 a .yshortcuts {
			/*@editable*/color:#D83826;
			display:block;
			/*@editable*/font-family:Helvetica;
			/*@editable*/font-size:38px;
			/*@editable*/font-style:normal;
			/*@editable*/font-weight:bold;
			/*@editable*/line-height:100%;
			/*@editable*/letter-spacing:normal;
			margin-top:0;
			margin-right:0;
			margin-bottom:10px;
			margin-left:0;
			/*@editable*/text-align:left;
			/*@editable*/text-decoration:none;
		}
	/*
	@tab Page
	@section heading 2
	@tip Set the styling for all second-level headings in your emails.
	@style heading 2
	*/
		h2,h2 a:link,h2 a:visited,h2 a .yshortcuts {
			/*@editable*/color:#404040;
			display:block;
			/*@editable*/font-family:Helvetica;
			/*@editable*/font-size:20px;
			/*@editable*/font-style:normal;
			/*@editable*/font-weight:bold;
			/*@editable*/line-height:100%;
			/*@editable*/letter-spacing:normal;
			margin-top:0;
			margin-right:0;
			margin-bottom:10px;
			margin-left:0;
			/*@editable*/text-align:left;
			/*@editable*/text-decoration:none;
		}
	/*
	@tab Page
	@section heading 3
	@tip Set the styling for all third-level headings in your emails.
	@style heading 3
	*/
		h3,h3 a:link,h3 a:visited,h3 a .yshortcuts {
			/*@editable*/color:#606060;
			display:block;
			/*@editable*/font-family:Helvetica;
			/*@editable*/font-size:14px;
			/*@editable*/font-style:normal;
			/*@editable*/font-weight:bold;
			/*@editable*/line-height:100%;
			/*@editable*/letter-spacing:normal;
			margin-top:0;
			margin-right:0;
			margin-bottom:10px;
			margin-left:0;
			/*@editable*/text-align:left;
			/*@editable*/text-decoration:none;
		}
	/*
	@tab Page
	@section heading 4
	@tip Set the styling for all fourth-level headings in your emails. These should be the smallest of your headings.
	@style heading 4
	*/
		h4,h4 a:link,h4 a:visited,h4 a .yshortcuts {
			/*@editable*/color:#808080;
			display:block;
			/*@editable*/font-family:Helvetica;
			/*@editable*/font-size:12px;
			/*@editable*/font-style:normal;
			/*@editable*/font-weight:bold;
			/*@editable*/line-height:100%;
			/*@editable*/letter-spacing:normal;
			margin-top:0;
			margin-right:0;
			margin-bottom:10px;
			margin-left:0;
			/*@editable*/text-align:left;
			/*@editable*/text-decoration:none;
		}
	/*
	@tab Header
	@section preheader style
	@tip Set the background color and bottom border for your email\'s preheader area.
	@theme page
	*/
		#templatePreheader{
			/*@editable*/background-color:#DEE0E2;
			/*@editable*/border-bottom:1px solid #CCCCCC;
		}
	/*
	@tab Header
	@section preheader text
	@tip Set the styling for your email\'s preheader text. Choose a size and color that is easy to read.
	*/
		.preheaderContent{
			/*@editable*/color:#808080;
			/*@editable*/font-family:Helvetica;
			/*@editable*/font-size:10px;
			/*@editable*/line-height:125%;
			/*@editable*/text-align:left;
		}
	/*
	@tab Header
	@section preheader link
	@tip Set the styling for your email\'s preheader links. Choose a color that helps them stand out from your text.
	*/
		.preheaderContent a:link,.preheaderContent a:visited,.preheaderContent a .yshortcuts {
			/*@editable*/color:#606060;
			/*@editable*/font-weight:normal;
			/*@editable*/text-decoration:underline;
		}
	/*
	@tab Header
	@section header style
	@tip Set the background color and borders for your email\'s header area.
	@theme header
	*/
		#templateHeader{
			/*@editable*/background-color:#DEE0E2;
			/*@editable*/border-top:0;
			/*@editable*/border-bottom:0;
		}
	/*
	@tab Header
	@section header text
	@tip Set the styling for your email\'s header text. Choose a size and color that is easy to read.
	*/
		.headerContent{
			/*@editable*/color:#505050;
			/*@editable*/font-family:Helvetica;
			/*@editable*/font-size:20px;
			/*@editable*/font-weight:bold;
			/*@editable*/line-height:100%;
			/*@editable*/padding-top:40px;
			/*@editable*/padding-right:0;
			/*@editable*/padding-bottom:0;
			/*@editable*/padding-left:0;
			/*@editable*/text-align:center;
			/*@editable*/vertical-align:middle;
		}
	/*
	@tab Header
	@section header link
	@tip Set the styling for your email\'s header links. Choose a color that helps them stand out from your text.
	*/
		.headerContent a:link,.headerContent a:visited,.headerContent a .yshortcuts {
			/*@editable*/color:#D83826;
			/*@editable*/font-weight:normal;
			/*@editable*/text-decoration:underline;
		}
		#headerImage{
			display:block;
			height:auto;
			max-width:600px !important;
		}
	/*
	@tab Body
	@section body style
	@tip Set the background color and borders for your email\'s body area.
	*/
		.templateBackground{
			/*@editable*/background-color:#F4F4F4;
		}
		.blockImage{
			display:block;
		}
	/*
	@tab Body
	@section body text
	@tip Set the styling for your email\'s main content text. Choose a size and color that is easy to read.
	@theme main
	*/
		.bodyContent{
			/*@editable*/color:#505050;
			/*@editable*/font-family:Helvetica;
			/*@editable*/font-size:17px;
			/*@editable*/line-height:150%;
			/*@editable*/text-align:left;
		}
	/*
	@tab Body
	@section body link
	@tip Set the styling for your email\'s main content links. Choose a color that helps them stand out from your text.
	*/
		.bodyContent a:link,.bodyContent a:visited,.bodyContent a .yshortcuts {
			/*@editable*/color:#D83826;
			/*@editable*/font-weight:normal;
			/*@editable*/text-decoration:underline;
		}
	/*
	@tab Body
	@section button style
	@tip Set the styling for your email\'s buttons. Choose a style that draws attention.
	*/
		.templateButton{
			/*@tab Body
@section button style
@tip Set the styling for your email\'s buttons. Choose a style that draws attention.*/-moz-border-radius:4px;
			-webkit-border-radius:4px;
			/*@editable*/background-color:#BBBBBB;
			border-radius:4px;
		}
	/*
	@tab Body
	@section button style
	@tip Set the styling for your email\'s buttons. Choose a style that draws attention.
	*/
		.templateButtonContent,.templateButtonContent a:link,.templateButtonContent a:visited,.templateButtonContent a .yshortcuts {
			/*@editable*/color:#FFFFFF;
			/*@editable*/font-family:Helvetica;
			/*@editable*/font-size:15px;
			/*@editable*/font-weight:bold;
			/*@editable*/letter-spacing:normal;
			text-align:center;
			text-decoration:none;
			vertical-align:middle;
		}
		.bodyContent img{
			display:inline;
			height:auto;
			max-width:260px !important;
		}
	/*
	@tab Footer
	@section footer style
	@tip Set the background color and borders for your email\'s footer area.
	@theme footer
	*/
		#templateFooter{
			/*@editable*/background-color:#D83826;
			/*@editable*/border-top:1px solid #841719;
		}
	/*
	@tab Footer
	@section footer text
	@tip Set the styling for your email\'s footer text. Choose a size and color that is easy to read.
	@theme footer
	*/
		.footerContent{
			/*@editable*/color:#EEEEEE;
			/*@editable*/font-family:Helvetica;
			/*@editable*/font-size:10px;
			/*@editable*/line-height:150%;
			/*@editable*/text-align:left;
		}
	/*
	@tab Footer
	@section footer link
	@tip Set the styling for your email\'s footer links. Choose a color that helps them stand out from your text.
	*/
		.footerContent a:link,.footerContent a:visited,.footerContent a .yshortcuts {
			/*@editable*/color:#FFFFFF;
			/*@editable*/font-weight:normal;
			/*@editable*/text-decoration:underline;
		}
		.footerContent img{
			display:inline;
		}
		#monkeyRewards img{
			max-width:190px;
		}
</style></head>
    <body leftmargin=\"0\" marginwidth=\"0\" topmargin=\"0\" marginheight=\"0\" offset=\"0\">
    	<center>
        	<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" height=\"100%\" width=\"100%\" id=\"bodyTable\">
            	<tr>
                	<td align=\"center\" valign=\"top\" style=\"padding-bottom:40px;\">
                    	<!-- // BEGIN CONTAINER -->
                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"600\" id=\"templateContainer\">
                        	<tr>
                            	<td align=\"center\" valign=\"top\">
                                    <!-- // BEGIN PREHEADER -->
                                    <table border=\"0\" cellpadding=\"10\" cellspacing=\"0\" width=\"600\" id=\"templatePreheader\">
                                        <tr>
                                            <td align=\"center\" valign=\"top\" style=\"padding-right:20px; padding-left:20px;\">
                                                <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
                                                    <tr>
                                                        <td valign=\"top\" class=\"preheaderContent\" mc:edit=\"preheader_content\">
Thank you for your interest. Hold on with your enthusiasm and we will get back to you shortly.</td>
                                                        <!-- *|IFNOT:ARCHIVE_PAGE|* -->
                                                        <td width=\"20\">
                                                            <br>
                                                        </td>
                                                        <td valign=\"top\" width=\"200\" class=\"preheaderContent\" mc:edit=\"preheader_links\">
                                                            Email not displaying correctly?<br><a href=\"*|ARCHIVE|*\" target=\"_blank\">View it in your browser</a>.
                                                        </td>
                                                        <!-- *|END:IF|* -->
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- END PREHEADER \\ -->
                                </td>
                            </tr>
                        	<tr>
                            	<td align=\"center\" valign=\"top\">
                                	<!-- // BEGIN HEADER -->
                                	<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"600\" id=\"templateHeader\">
                                    	<tr>
                                        	<td align=\"center\" valign=\"top\">
                                            	<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
                                                	<tr>
                                                        <td class=\"headerContent\">
                                                            <img src=\"https://gallery.mailchimp.com/c35e092fc33aafa5aabfdac40/images/6b425b04-75b3-4017-b07a-7d0e6ac57e6b.png\" style=\"max-width:600px;\" id=\"headerImage\" mc:label=\"header_image\" mc:edit=\"header_image\" mc:allowdesigner mc:allowtext>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- END HEADER \\ -->
                                </td>
                            </tr>
                        	<tr>
                            	<td align=\"center\" valign=\"top\">
                                	<!-- // BEGIN BODY -->
                                	<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"600\" class=\"templateBackground\">
                                    	<tr>
                                            <td align=\"left\" valign=\"top\" width=\"400\" class=\"templateBackground\">
                                                <table border=\"0\" cellpadding=\"20\" cellspacing=\"0\" width=\"100%\">
                                                    <tr>
                                                        <td valign=\"top\" class=\"bodyContent\" mc:edit=\"body_content00\"><h2>SteerSafe welcomes your Partnership Intent</h2>
	

<br>
<span style=\"color:rgb(216, 56, 38); font-size:38px; line-height:38px\">This is how we can make this work</span></h3>
<br><br>
Hi&nbsp;$name<br><br>
SteerSafe App is looking at partners and merchants where our SteerSafe App coin can be converted for discounts, freebies or both.<br><br>
Our job is to make sure that we keep our teens and young adults safe and we would love to hear from you. <br>
<br>
<br>
We have received your partnership intent mail and one of our reps will be shortly in touch with you to see partnership possibilities, to seek your suggestions and to basically chit chat with you.Don&#39;t Over Speed and Don&#39;t Use your Mobile while Driving.&nbsp;<br>
<br><br>
We love what we do and would want to know what would make this tick for you.<br>
<br>
Till then spread the word and 'Drive Safe'.<br>
<br>
Thank You<br>
<br>
SteerSafe Team.</td>
                                                    </tr>
                                                </table>
                                            </td>
                                        	<td valign=\"top\" width=\"200\">
                                            	<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"200\">
                                                    <tr>
                                                    	<td valign=\"top\">
                                                        	<img src=\"https://gallery.mailchimp.com/c35e092fc33aafa5aabfdac40/images/3cedd7f5-e072-48b4-b564-0cdb7a017993.jpg\" class=\"blockImage\" style=\"max-width:200px;\" id=\"campaign-icon\" mc:label=\"image\" mc:edit=\"body_image00\">
                                                        </td>
                                                    </tr>
                                                	<tr>
                                                    	<td valign=\"top\">
                                            				<img src=\"https://gallery.mailchimp.com/c35e092fc33aafa5aabfdac40/images/642d18d4-ab15-415a-8f1c-bcc2db49c7eb.jpg\" class=\"blockImage\" style=\"max-width:200px;\" mc:label=\"image\" mc:edit=\"body_image01\">
                                                		</td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    	<tr>
                                        	<td align=\"right\" colspan=\"2\" valign=\"top\" class=\"templateBackground\">
                                            	<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
                                                	<tr>
                                                        <td align=\"right\" valign=\"bottom\">
                                                        	<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
                                                            	<tr mc:repeatable>
                                                                	<td valign=\"bottom\">
			                                                            <img src=\"https://gallery.mailchimp.com/c35e092fc33aafa5aabfdac40/images/3cedd7f5-e072-48b4-b564-0cdb7a017993.jpg\" class=\"blockImage\" style=\"max-width:200px;\" mc:label=\"image\" mc:edit=\"body_image03\">
                                                            		</td>
                                                            	</tr>
                                                            </table>
                                                        </td>
                                                    	<td align=\"right\" valign=\"top\" class=\"templateBackground\">
                                                            <table border=\"0\" cellpadding=\"20\" cellspacing=\"0\" width=\"100%\">
                                                                <tr>
                                                                    <td valign=\"top\" class=\"bodyContent\" mc:edit=\"body_content01\"></td>
                                                                </tr>
                                                                <tr mc:hideable>
                                                                    <td align=\"left\" valign=\"top\" style=\"padding-top:0;\">
                                                                        <table border=\"0\" cellpadding=\"15\" cellspacing=\"0\" class=\"templateButton\">
                                                                            <tr>
                                                                                <td align=\"center\" valign=\"middle\" class=\"templateButtonContent\" mc:edit=\"template_button_content\"><a href=\"http://steersafeapp.com\" target=\"_blank\">Launching Soon</a><a href=\"http://www.mailchimp.com/\" target=\"_blank\">&nbsp;&raquo;</a></td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                        	<td colspan=\"2\" valign=\"top\" class=\"templateBackground\">
                                            	<a href='https://www.youtube.com/watch?feature=player_embedded&v=HsMFp51PW_g'><img src=\"https://gallery.mailchimp.com/c35e092fc33aafa5aabfdac40/images/fe2e59e4-5fed-4f14-9a1a-a57a7b7c8309.png\" style=\"max-width:600px;\" mc:label=\"image\" mc:edit=\"body_image04\">
                                           </a>
			 </td>
                                        </tr>
                                    </table>
                                    <!-- END BODY \\ -->
                                </td>
                            </tr>
                        	<tr>
                            	<td align=\"center\" valign=\"top\">
                                	<!-- // BEGIN FOOTER -->
                                	<table border=\"0\" cellpadding=\"20\" cellspacing=\"0\" width=\"600\" id=\"templateFooter\">
                                    	<tr>
                                        	<td align=\"center\" valign=\"top\">
                                            	<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
                                                    <tr>
                                                    	<td colspan=\"3\" valign=\"top\" class=\"footerContent\" style=\"padding-bottom:20px;\" mc:edit=\"footer_social\">(C) SteerSafe App.&nbsp;<br>
<br>
All Rights Reserved. SteerSafe App uses the Favcy Architecture for Management of Reward Coins.</td>
                                                    </tr>
                                                	<tr>
                                                        <td valign=\"top\" class=\"footerContent\" mc:edit=\"footer_content\"></td>
                                                        <td width=\"20\">
                                                        	<br>
                                                        </td>
                                                        <td valign=\"top\" width=\"200\" id=\"monkeyRewards\" class=\"footerContent\" mc:edit=\"monkeyrewards\"></td>
                                                    </tr>
                                                    <tr>
                                                    	<td colspan=\"3\" valign=\"top\" class=\"footerContent\" style=\"padding-top:20px;\" mc:edit=\"footer_utility\"></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- END FOOTER \\ -->
                                </td>
                            </tr>
                        </table>
                        <!-- END CONTAINER \\ -->
                    </td>
                </tr>
            </table>
        </center>
    </body>
</html>";
	
	return $message;

}

?>