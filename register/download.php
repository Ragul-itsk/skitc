<?php

// echo "hi";
// echo "<script>alert('download');</script>";
$file_url = 'https://itsk.in/whatsapp_setup/Automation_Setup.msi';
header('Content-Type: application/octet-stream');
header("Content-Transfer-Encoding: Binary"); 
header("Content-disposition: attachment; filename=\"" . basename($file_url) . "\""); 
readfile($file_url);
?>