<?php
require ("db-config/config.php");
//require ("../user.php");
$client_name=$_SESSION['client_name'];
$user=$_SESSION['user'];
$username=$_SESSION['username'];
$usergroup=$_SESSION['user_group'];
$_SESSION['menu_id']='';
$_SESSION['submenu_id']='';

$keyword = $_REQUEST['keyword'];
$domain = $_REQUEST['domain'];
//echo $domain;
$subdomain =  $keyword.".itsk.in";
//echo $keyword;
	//server side email validation
	 if (!filter_var($keyword, FILTER_VALIDATE_URL)) {
	   $sql = "SELECT * FROM master_login WHERE client_name LIKE '%".$_REQUEST['keyword']."%'  ";
        $echk=mysqli_query($conn,$sql);
		error_log($sql,3,'as.txt');
        $ecount=mysqli_num_rows($echk);
 //echo $ecount;
		if($ecount!=0){
			$output = 'Subdomain already taken';
		}
		else{
			$output =  $keyword.".itsk.in";
			
		}
	} 
	
 
	echo json_encode($output);
?>