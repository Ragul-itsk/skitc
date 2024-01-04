
<?php

require 'php_mail222/class/class.phpmailer.php';

$email = $_GET['email'];

$mail = new PHPMailer;

$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtpout.secureserver.net';  // Specify main and backup SMTP servers
//$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'info@blackholesolution.com';                 // SMTP username
$mail->Password = '!@#abc123';                           // SMTP password
$mail->SMTPAuth = true;
// $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 80;                                    // TCP port to connect to

$mail->From = "support@itsk.in";
$mail->FromName = "SKIT SUPPORT";
$mail->addAddress($email, 'User');     // Add a recipient

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Overseas Software - Free Demo';

$msg = "Overseas Management Software Demo Login Details<br>\n";
$msg .= "Username: skitmanagement@gmail.com<br>\n";
$msg .= "Password: 123456<br>\n";
$msg .= "<a href='http://omsdemo.itsk.in/'>Login</a><br>\n";

$mail->Body    = $msg;
$mail->AltBody = $msg;



	if(!$mail->send()) {
    echo 'Message could not be sent.';

     exit();
} else {
    echo "<script>alert('Send successfully');</script>";

     exit();
    header("Location:https://itsk.in/register.php");
}

	