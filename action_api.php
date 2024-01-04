<?php

//action.php

	$form_data = array(
			'name'	=> $_POST['name'],  //student name
			'course_complt'	=>	$_POST['course_complt'], //course completed
			'contact'	=>	$_POST['contact'], //contact
			'alt_contact'	=>	$_POST['alt_contact'], //alternate contact
			'email'	=>	$_POST['email'], //email
			'app_country_id'	=>	$_POST['app_country_id'], //country interested
			'city'	=>	$_POST['city'], //city
			'address'	=>	$_POST['address'], //address
			'course'	=>	$_POST['course'], //course interested
			'intake'	=>	$_POST['intake'], //intake
			'intake_year'	=>	$_POST['intake_year'], //intake year
			'institute'	=>	$_POST['institute'], // institute interested
			'enquiry_source_id'	=>	$_POST['enq_source'], // enquiry source
			'enquiry_status_id'	=>	$_POST['enq_status'], //enquiry status
			'yop'	=>	$_POST['yop'], //year of passing
			'gcpa'	=>	$_POST['gcpa'], //cgpa
			'remarks'	=>	$_POST['remarks']  //comments or query
		); 

$api_url = "http://itskoverseas.itsk.in/api_enq_form.php?branch_id=ITSK_3&user_id=665";
$client = curl_init($api_url);
		curl_setopt($client, CURLOPT_POST, true);
		curl_setopt($client, CURLOPT_POSTFIELDS, $form_data);
		curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($client);
		curl_close($client);


print_r($form_data);

	exit();



?>