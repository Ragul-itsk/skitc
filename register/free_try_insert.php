<?php
//vars
require_once("../db-config/config.php");

$subject = 'Whatsapp Request Demo';

$to = "skitservices2013@gmail.com";

$from = $_POST['email'];

$name = $_POST['name'];
$mob_number = $_POST['phone'];
$send_date=date("d/m/Y");

//data
$msg = "Name: " .$_POST['name'] ."<br>\n";
$msg .= "EMAIL: " .$_POST['email'] ."<br>\n";
$msg .= "Phone No: " .$_POST['phone'] ."<br>\n";

//Headers
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";
$headers .= "From: <".$from. ">" ;

// insert with your SMTP

mail ($to, $subject,$msg, $headers);
// echo "<script>alert('Send successfully');</script>";



$list_sql = "INSERT INTO demo_request (to_address,subject,from_address,name,mob_number,send_date) 			
				VALUES ('$to','$subject','$from','$name','$mob_number','$send_date')";
			
				$res = mysqli_query($conn,$list_sql);






require_once("download.php");



?>