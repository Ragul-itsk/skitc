

<?php

$name = $_POST['name'];
$email = $_POST['email'];
$contact_number = $_POST['phone'];
$watsapp_number = $_POST['whatsapp_number'];

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\Exception;

//require 'PHPmailer/Exception.php';
//require 'PHPmailer/PHPMailer.php';
//require 'PHPmailer/SMTP.php';

require_once("mailer/PHPMailerAutoload.php");
$mail = new PHPMailer;                              // Passing `true` enables exceptions


//Server settings
$mail->isSMTP();                             // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
//$mail->SMTPDebug=3;
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'careeritsk@gmail.com';
$mail->Password = "skit@12345";                        // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to
//Recipients
$mail->setFrom('careeritsk@gmail.com');
// $mail->addAddress('support@itsk.in');     // Add a recipient
$mail->addAddress('info@itsk.in');
//Content
$mail->isHTML(true);                                  // Set email format to HTML
$mail->Subject = 'Registration Mail';

$mailContent = '
	
	<p>New User Has Registered In Our Website. <strong>' . $name . '</strong></p>

	<p>User Email : <strong>' . $email . '</strong></p>

	<p>User Mobile Number : <strong>' . $contact_number . '</strong></p>

	<p>User Watstapp Number : <strong>' . $watsapp_number . '</strong></p>

';

$mail->Body    = $mailContent;
// $mail->send();

if (!$mail->send()) {
    echo "<script type=\"text/javascript\">
		alert('Something went wrong. Please try again..!');
		window.location = 'register.php';
		</script>";
} else {
    echo "<script type=\"text/javascript\">
		alert('Registered Successfully...!. Thank you for registering at SKITC.');
		window.location = 'register.php';
		</script>";
    // header("Location: register.php");
    // exit();
}

?>

