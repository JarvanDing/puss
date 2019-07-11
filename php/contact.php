<?php

if(isset($_POST['message'])){

	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
    
	
	$to      = 'read@pussr.com';
	$subject = 'Pussr.com留言板';

	$headers = 'From: '. $email . "\r\n" .
    'Reply-To: '. $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

	$status = mail($to, $subject, $message, $headers);

	if($status == TRUE){	
		$res['sendstatus'] = 'done';
	
		//Edit your message here
		$res['message'] = '留言提交成功';
    }
	else{
		$res['message'] = '无法发送邮件。 请发邮件至 read@pussr.com';
	}
	
	
	echo json_encode($res);
}

?>