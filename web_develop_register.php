<?php
// require_once("db-config/config.php");


$organization = $_POST['organization'];
$email = $_POST['email'];
$reg_phone = $_POST['phone'];
$plan = $_POST['plan'];
$website_name = $_POST['website_name'];
$subdomain = $_POST['subdomain'];

//sms
$phone = "8072787919";

$sms = urlencode(htmlspecialchars("Enquiry for Overseas Management Software from Website " . $reg_phone . ""));
require("send_sms.php");
//end sms


require 'php_mail222/class/class.phpmailer.php';

$mail = new PHPMailer;

$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtpout.secureserver.net';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'info@blackholesolution.com';                 // SMTP username
$mail->Password = '!@#abc123';                           // SMTP password
$mail->SMTPAuth = true;
// $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 80;                                    // TCP port to connect to

$mail->From = $email;
$mail->FromName = $organization;
$mail->addAddress('kamal@itsk.in', 'User');     // Add a recipient
$mail->addAddress('support@itsk.in');               // Name is optional
$mail->addAddress('accountant@itsk.in');               // Name is optional
$mail->addReplyTo('kamal@itsk.in', 'Information');
$mail->addCC('ganaga@itsk.in');
$mail->addCC('narayanan@itsk.in');
$mail->addCC('overseas@itsk.in');

// $mail->addAttachment('');         // Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Web Designing and Development';

$msg = "organization: " . $_POST['organization'] . "<br>\n";
$msg .= "email: " . $_POST['email'] . "<br>\n";
$msg .= "phone: " . $_POST['phone'] . "<br>\n";
$msg .= "plan: " . $_POST['plan'] . "<br>\n";
$msg .= "website_name: " . $_POST['website_name'] . "<br>\n";
$msg .= "subdomain: " . $_POST['subdomain'] . "<br>\n";

$mail->Body    = $msg;
$mail->AltBody = $msg;







if (!$mail->send()) {
    echo 'Message could not be sent.';
} else {
    echo "<script>alert('Send successfully');</script>";
    header("Location:https://itsk.in/register.php");
}
