<?php


include 'connection.php';
$tablename = '`zipout_contact`';


if(isset($_REQUEST['email']))
{
	
	if (!filter_var($_REQUEST['email'], FILTER_VALIDATE_EMAIL)) {
		
		
		$response =array();
		
		$response['success'] = false;
		$response['message'] = "notvalidemail";
	}
	
	
	//var_dump($_REQUEST);
	
$Email = $_REQUEST['email'];

$fname = $_REQUEST['fname'];

$lname = $_REQUEST['lname'];

$name = $fname." ".$lname;

$phone = $_REQUEST['phone'];


if(isset($_REQUEST['company']))
{
	
	$company = $_REQUEST['company'];
}else {
	
	
	$company = "nodata";
	
}

if(isset($_REQUEST['classes']))
{

	 $classes = $_REQUEST['classes'];
}else {


	$classes = "nodata";

}


date_default_timezone_set("Asia/Kolk ata");

$today =  date('Y-m-d H:i:s');


$query="INSERT INTO $tablename (`name`,`email`,`phone`, `company`, `classes`)
VALUES
('$name','$Email', '$today', '$company', '$classes')";

$result = mysql_query($query);

$link_id= mysql_insert_id();


if($result)
{
	
	
	include 'class.phpmailer.php';
	
	
	$mail = new PHPMailer;
	
	/*$mail->IsSMTP();
	// Set mailer to use SMTP
	$mail->Host = 'smtp.mandrillapp.com';                 // Specify main and backup server
	$mail->Port = 587;                                    // Set the SMTP port
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'admin@steersafeapp.com';                // SMTP username
	$mail->Password = 'vjI-KzHopE3br5JG9SeP5Q';              // SMTP password
	$mail->SMTPSecure = 'tls'; 	                          // Enable encryption, 'ssl' also accepted
		
	$mail->From = 'notification@steersafeapp.com';
	$mail->FromName = 'SteerSafe';*/
	
	$mail->IsSMTP();
	$mail->SMTPAuth   = true; // SMTP authentication
	$mail->Host       = "smtp.gmail.com"; // SMTP server
	$mail->Port       = 465; // SMTP Port
	$mail->SMTPSecure ='ssl';
	$mail->Username   = "admin@zipout.co.in"; // SMTP account username
	$mail->Password   = "admin@zipout";        // SMTP account password
	$mail->IsHTML(true);
	
	$mail->From = 'admin@zipout.co.in';
	$mail->FromName = 'Zipout';
	
	
	$mail->AddAddress($Email,"");  // Add a recipient
	$mail->Subject = "Thank you for contacting us";
	$favcy_balance = 0;
	$body = message();
	$mail->MsgHTML($body);
	
	
	if(!$mail->Send()) {
	
		//echo 'Mailer Error: ' . $mail->ErrorInfo;
		

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


function message()
{

	$message = "<p>Hi,<br>
<br>
Thank you for contacting us. One of our representative will be getting in touch with you shortly. 
</p>


Regards, <bR>
ZipOut Team";

return $message;

}
?>