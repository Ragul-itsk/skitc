<?php
session_start();
/*define ("DB_USER", "root");
define ("DB_PASSWORD", "");
define ("DB_DATABASE", "rgracademy");
define ("DB_HOST", "localhost");
define ("TITLE", "RGR Academy");

  //Do the conntection
    $conn = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);

    //Check if it's valid
    if(!$conn) {

        //Add it up to the session, and redirect
        $errorMsg= "<div style='padding-left: 50px;color:#FF0000'>Cannot connect to mysql server!</div>";
		echo  $errorMsg;
		
        exit();

    } else{
		
		mysqli_select_db($conn,DB_DATABASE);
		
	} */
// define ("DB_USER", "overseas");
// define ("DB_PASSWORD", "Sdx+6$0]{p]7");
// define ("DB_DATABASE", "itskoverseas");
// define ("DB_HOST", "localhost");
define ("DB_USER", "root");
    define ("DB_PASSWORD", "");
    define ("DB_DATABASE", "itskoverseas");
    define ("DB_HOST", "13.127.226.205");
    
define ("TITLE", "overseas");
define ("URL", "/itsk.in/");

  //Do the conntection
    $conn = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);

    //Check if it's valid
    if(!$conn) {

        //Add it up to the session, and redirect
        $errorMsg= "<div style='padding-left: 50px;color:#FF0000'>Cannot connect to mysql server!</div>";
		echo  $errorMsg;
		
        exit();

    } else{
		
		mysqli_select_db($conn,DB_DATABASE);
	
    }
?>
