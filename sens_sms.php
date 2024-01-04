<?php
$client_phone = $_POST['mobile_number'];
// $client_phone = "123";
$sw_n = $_POST['sw_n'];
$phone = "8072787919";
// $phone = "9087428914";
// $phone = "9894883951";
// print_r($client_phone);
// print_r($phone);
if ($client_phone == NULL) {
    # code...





} else {

    $sms = "Enquiry for " . $sw_n . " from Website " . $client_phone . "";
    require("send_sms.php");

    // 	require_once("db-config/config.php");
    // 	$c_date=date("Y/m/d");

    // 	$sql = "INSERT INTO overseas_number_enq (m_number,c_date) VALUES ('$client_phone','$c_date')";
    // 	$res = mysqli_query($conn,$sql);

    // 	$sms = urlencode(htmlspecialchars("Enquiry for ".$sw_n." software from Website ".$client_phone.""));


}
