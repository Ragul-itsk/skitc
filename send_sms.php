<?php
	

// print_r("sms");
// exit();

 	// $sms_url_test = ("http://dnd.blackholesolution.com/api/sendmsg.php?user=forallin&pass=forallin!@#&sender=FRALIN&phone=**sms_phone**&text=**sms_msg**&priority=ndnd&stype=normal");
 	// $sms_url_test = ("http://dnd.blackholesolution.com/api/sendmsg.php?user=skitoverseas&pass=skitoverseas&sender=OVRSES&phone=**sms_phone**&text=**sms_msg**&priority=ndnd&stype=normal");
 	
//  	$sms_url_test = ("http://sms.itsk.in/vendorsms/pushsms.aspx?apikey=c224ff61-a0a1-4bd2-b5f1-a2079a2d2059&clientId=59267807-6584-4a4a-bb80-276fa2418f05&msisdn=**sms_phone**&sid=OVRSES&msg=**sms_msg**&fl=0&gwid=2");
 	
//  	$searchArray = array("**sms_phone**", "**sms_msg**");
 
// 	$replaceArray = array($phone, $sms);
 			
// 	$sms_url = str_replace($searchArray, $replaceArray, $sms_url_test );
	
// 	$ch=curl_init();
	
// 	curl_setopt($ch,CURLOPT_URL,$sms_url);
	
// 	curl_setopt($ch, CURLOPT_POST,true);
	
// 	curl_setopt($ch,CURLOPT_POSTFIELDS,1);
	
// 	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	
// 	curl_setopt($ch,CURLOPT_TIMEOUT, '8');
	
// 	$content = trim(curl_exec($ch));
	
// 	curl_close($ch); 
	
// 	$sender="GAMAPP";
        $sender="INSOTP";
        $apiUrl = "http://mcarrots.co/api/SendSMS?";
        $username="kamal@itsk.in";
        $password="9551771288";
        
        //Preparing post parameters
        $requestParams = array(
            'PID'=>"1701159275249805504",
            'TID'=>"0",
            'UserName'=>$username,
            'Password'=>$password, 
            'MobileNo' => $phone,
            'Sender' => $sender,
            'Message' => $sms,
        );
      
        // Merge API url and parameters 
        foreach($requestParams as $key => $val){
            $apiUrl .= $key.'='.urlencode($val).'&';
        }
        $apiUrl = rtrim($apiUrl, "&" );

        // API call
        $ch = curl_init();
        curl_setopt( $ch, CURLOPT_URL, $apiUrl );
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );

        $response = curl_exec( $ch );
	exit;
 ?>