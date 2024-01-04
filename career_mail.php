<?php
//sending mail using phpmailer.Download zip file from github(5.2 stable)
require_once("mailer/PHPMailerAutoload.php");

$move = 'uploads/' . $_FILES['resume']['name'];
move_uploaded_file($_FILES['resume']['tmp_name'], $move);
copy($_FILES['resume']['tmp_name'], $move);


$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
//$mail->SMTPDebug=3;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
$mail->Username = 'careeritsk@gmail.com';
$mail->Password = "skit@12345";

$mail->setFrom('careeritsk@gmail.com');
$mail->addAddress('careeritsk@gmail.com');
$mail->isHTML(true);
$mail->Subject = 'Resume from website:' . $_POST['subject'];
$mail->Body = '<h1 align=center>Name :' . $_POST['name'] . '<br>Email :' . $_POST['email'] . '<br>Contact :' . $_POST['contact'] . '<br>Message:' . $_POST['message'] . '<a href=http://itsk.in/uploads/' . $_FILES['resume']['name'] . '>Download Resume</a>' . '</h1>';


if (!$mail->send()) {
	echo "<script type=\"text/javascript\">
		alert('Something went wrong. Please try again..!');
		window.location = 'career.php';
		</script>";
} else {
	echo "<script type=\"text/javascript\">
		alert('Mail Sent Successfully...!. Thank you for registering at SKITC. We reach you as soon as possible.');
		window.location = 'career.php';
		</script>";
}
