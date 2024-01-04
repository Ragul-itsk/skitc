<?php 

$move = 'uploads/'.$_FILES['resume']['name'];

move_uploaded_file($_FILES['resume']['tmp_name'], $move);
copy($_FILES['resume']['tmp_name'], $move);
$to = "careeritsk@gmail.com";
// $to = "ganaga@itsk.in";
$subject = $_POST['subject'];
$message = "Name - ".$_POST['name']."<br>";
$message .= "E-mail - ".$_POST['email']."<br>";
$message .= "Contact No. - ".$_POST['contact']."<br>";
$message .= "Description - ".$_POST['message']."<br>";
$message .= '<a href="http://itsk.in/uploads/'.$_FILES['resume']['name'].'">Download Resume</a>';
//echo $message;

 $headers        = "From: ".$_POST['email']." <".$_POST['email'].">\r\n".
                          "MIME-Version: 1.0" . "\r\n" .
                          "Content-type: text/html; charset=UTF-8" . "\r\n";
						  
						// echo $to.$subject.$message.$headers;  


 

//echo $email->Send();

//mail($to,$subject,$message,$headers);
@mail($to,$subject,$message,$headers);
//mail("dharunaashick@gmail.com",$subject,$message,$headers);
//@mail("dharunaashick@gmail.com",$subject,$message,$headers);

//echo "done"; die();
?>


		<script type="text/javascript">
		alert('Mail Sent Successfully...!');
		window.location = "career.php";
		</script>

    <?php
//echo "<script>alert('Mail Sent Successfully...!');</script>";
//header('location:career.php');
?>