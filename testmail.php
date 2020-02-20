<?php
	ini_set("mbstring.internal_encoding","UTF-8");
	ini_set("mbstring.func_overload",7);

	require_once ("swiftmailer/vendor/autoload.php");
	ini_set('max_execution_time', 300);
	require_once ("PHPMailer-master/PHPMailerAutoload.php");

	echo 'Test email';
	// '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">'
	// .'<link rel="stylesheet" href="assets/css/style.css">'

	$mBody = 
	'<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">'
	.'<link rel="stylesheet" href="assets/css/style.css">'
	.'<div class="chat-not-body mt-5 mr-auto ml-auto">'
		.'<div class="d-flex align-items-center justify-content-center mail-header">'
			.'<img src="http://178.128.204.206/images/logo.jpg">'
			.'<h1 class="text-light header-font mb-0"><b>FADOU.com</b></h1>'
		.'</div>'
		.'<div class="d-flex align-items-center justify-content-center mt-5 mb-5">'
			.'<img src="http://178.128.204.206/upload/images/5e476cf562989_panda11.png" class="profile-picture">'
		.'</div>'
		.'<div class="d-flex align-items-center justify-content-center rounded-bottom">'
			.'<h4 class="text-danger">'
				.'XXX sent you a message'
			.'</h4>'
		.'</div>'

		.'<div class="d-flex align-items-center justify-content-center rounded-bottom pt-5 pb-5">'
			.'<a class="btn btn-primary pr-5 pl-5 pt-2 pb-2" href="http://178.128.204.206">'
				.'Login'
			.'</a>'
		.'</div>'
	.'</div>';
	// print_r($mBody); exit;
	  
	
	// $transport = (new Swift_SmtpTransport('mail.traxverifier.com', 465))
	// ->setUsername('traxprint@traxverifier.com')
	// ->setPassword('Kmw9Ql7%)8J5')
	// ->setEncryption('ssl');

	$transport = (new Swift_SmtpTransport('stmp.gmail.com', 465))
	->setUsername('webmailtest2018@gmail.com')
	->setPassword('testpass1234')
	->setEncryption('ssl');

	$mailer = new Swift_Mailer($transport);

	$message = (new Swift_Message('TraxPrint Subject'))
	->setFrom(['traxprint@traxverifier.com' => 'TraxPrint'])
	->setTo(['veerhunter127@gmail.com'])
	->setBody('asflsuefliasuehfliasuhel', 'text/html');


	$result = $mailer->send($message);

	print_r($result);

	

	// $mail = new PHPMailer;

	// $mail->IsSMTP();                                      
	// $mail->Host = 'mail.traxverifier.com';                 
	// $mail->Port = 465;                                   
	// $mail->SMTPAuth = true;                            
	// $mail->Username = 'traxprint@traxverifier.com';         
	// $mail->Password = 'Kmw9Ql7%)8J5';               
	// $mail->SMTPSecure = 'ssl';  

	// $mail->From = "traxprint@traxverifier.com";
	// $mail->FromName = "Test email";

	// //To address and name
	// $mail->addAddress('veerhunter127@gmail.com');

	// //Send HTML or Plain Text email
	// $mail->isHTML(true);
	// $mail->Subject = "Test Email";
	// $mail->Body = $mBody;

	// print_r($mail);
	// if(!$mail->send())
	// {
	// }
	// else
	// {
	// }

	echo '<br>Test email End';


?>
