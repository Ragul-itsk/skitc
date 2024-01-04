<?php
require_once('Includes/new_head.php');
require_once('connection.php');
//print_r($_SESSION);
if ($_COOKIE['jiboomba_user'] == null) {
	header('location:login.php');
}

$qry = "Select * from signup where `UID` = '" . $_COOKIE['jiboomba_user'] . "'";
$result = $conn->query($qry);
$data = mysqli_fetch_assoc($result);

$a_count_q = 'UPDATE `signup` SET `a_count`="0" WHERE UID= "' . $_COOKIE['jiboomba_user'] . '"';
$a_count_resp = mysqli_query($conn, $a_count_q);

$tqry = "SELECT * FROM `points_history` WHERE `fkuserId` = '" . $_COOKIE['jiboomba_user'] . "' ORDER BY `pointsHistoryId` DESC ";
$top_result = $conn->query($tqry);

$aqry = "SELECT * FROM `recharge` WHERE `userid` = '" . $_COOKIE['jiboomba_user'] . "'";
$acc_result = mysqli_fetch_assoc($conn->query($aqry));
$cqry = "SELECT * FROM `acc_details` WHERE `fkUserId` = '" . $_COOKIE['jiboomba_user'] . "'";
$cc_result = mysqli_num_rows($conn->query($cqry));


$chk_fr_sql = "SELECT count(*) count FROM `transfer_request` WHERE process = 'Transfer' and fkUserId = '" . $_COOKIE['jiboomba_user'] . "' ";
$chk_fr_res = mysqli_fetch_array(mysqli_query($conn, $chk_fr_sql));
$rc_count = $chk_fr_res['count'];

// if(isset($_POST['submit_bank']))
// {


// 	$insert_Query = 'INSERT INTO `acc_details`(`fkUserId`, `name`, `accNo`, `bankName`, `ifsc`) VALUES ("'.$_COOKIE['jiboomba_user'].'","'.$_POST['name'].'","'.$_POST['accNo'].'","'.$_POST['bankName'].'","'.$_POST['ifsc'].'")';
// 	$execute = mysqli_query($conn, $insert_Query);
// 	echo '<script>swal("Added Successfully....!","success")</script>';
// }

?>
<!DOCTYPE html>
<html lang="en">

<head>

	<meta name="description" content="SKITC is a customized website development company in Chennai, provides all types of web development, SMO, SEO, and complete digital marketing service providers across the globe." />
	<meta name="keywords" content="Website development company in Chennai,
	seo company in chennai,
	seo services in chennai,
	Overseas education consultant software,
	website design" />

	<title>SKITC | Website development company | Overseas education consultant software | For all in</title>
	<?php commonHead(); ?>

	<link rel="stylesheet" href="form-style/fonts/material-icon/css/material-design-iconic-font.min.css">
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css'>
</head>
<?php

if (isset($_POST['send_details'])) {
	$aqry = "SELECT * FROM `recharge` WHERE `userid` = '" . $_COOKIE['jiboomba_user'] . "'";
	$acc_result = mysqli_fetch_assoc($conn->query($aqry));
	// $to 	 = 'dharunaashick@gmail.com';
	$to 	 = 'narayanan@itsk.in';
	$subject = 'Money withdraw Request';
	$body 	 = '<table>
								<tr>
									<th width="25%">Name</th><th>:</th>
									<th>' . $acc_result['m_number'] . '</th>
								</tr>
								<tr>
									<th width="25%">Acc No</th><th>:</th>
									<th>' . $acc_result['r_amount'] . '</th>
								</tr>
								
						</table>';
	$body .= '<table><tr><th width="25%">Available Points</th><th>:</th><th>' . $data['points'] . '</th></tr>
					<tr><th width="25%">Available Cash</th><th>:</th><th>' . $data['money'] . '</th></tr>
				 </table>';
	$send 	 = mail($to, $subject, $body, $headers);
	echo '<script>swal("Your Request sent Successfully. You will receive cash in 48 Hrs","success")</script>';
}
?>
<style>
	.group {
		position: relative;
		margin-bottom: 25px;
	}

	.group2 {
		position: relative;
		margin-bottom: 25px;
		margin: 0 0 0 auto;

	}

	input {
		font-size: 18px;
		padding: 10px 10px 10px 5px;
		display: block;
		width: 100%;
		border: none;
		border-bottom: 1px solid #757575;
	}

	.group select {
		font-size: 18px;
		padding: 10px 10px 10px 5px;
		display: block;
		width: 100%;
		border: none;
		border-bottom: 1px solid #757575;
	}

	input:focus {
		outline: none;
	}

	/* LABEL ======================================= */
	label {
		color: #999;
		font-size: 18px;
		font-weight: normal;
		position: absolute;
		pointer-events: none;

		top: 10px;
		transition: 0.2s ease all;
		-moz-transition: 0.2s ease all;
		-webkit-transition: 0.2s ease all;
	}

	/* active state */
	input:focus~label,
	input:valid~label {
		top: -20px;
		font-size: 14px;
		color: #5264AE;
	}

	/* BOTTOM BARS ================================= */
	.bar {
		position: relative;
		display: block;
		width: 100%;
	}

	.bar:before,
	.bar:after {
		content: '';
		height: 2px;
		width: 0;
		bottom: 1px;
		position: absolute;
		background: #5264AE;
		transition: 0.2s ease all;
		-moz-transition: 0.2s ease all;
		-webkit-transition: 0.2s ease all;
	}

	.bar:before {
		left: 50%;
	}

	.bar:after {
		right: 50%;
	}

	/* active state */
	input:focus~.bar:before,
	input:focus~.bar:after {
		width: 50%;
	}

	/* HIGHLIGHTER ================================== */
	.highlight {
		position: absolute;
		height: 60%;
		width: 100px;
		top: 25%;
		left: 0;
		pointer-events: none;
		opacity: 0.5;
	}

	/* active state */
	input:focus~.highlight {
		-webkit-animation: inputHighlighter 0.3s ease;
		-moz-animation: inputHighlighter 0.3s ease;
		animation: inputHighlighter 0.3s ease;
	}

	/* ANIMATIONS ================ */
	@-webkit-keyframes inputHighlighter {
		from {
			background: #5264AE;
		}

		to {
			width: 0;
			background: transparent;
		}
	}

	@-moz-keyframes inputHighlighter {
		from {
			background: #5264AE;
		}

		to {
			width: 0;
			background: transparent;
		}
	}

	@keyframes inputHighlighter {
		from {
			background: #5264AE;
		}

		to {
			width: 0;
			background: transparent;
		}
	}


	/* Extra small devices (phones, 600px and down) */
	@media only screen and (max-width: 600px) {
		.coinselect {
			width: 100%;
		}

		.buttoncss {
			display: none;
		}

		.group2 {
			margin: 0 115px 0 auto;

		}

		.tosscoindesign img {
			border: 2px solid #fa2e2f;
			width: 100px;
			height: 100px;
		}

		.page-banner-area {
			min-height: 50px;

		}

		.ts-footer {
			padding: 2px 0 0px;
		}

		.btn {
			font-size: 11px !important;
			padding: 0 15px !important;
			/*width: auto;*/
		}

		.pointstyle {
			font-size: 13px !important;
			float: left;
			border: 2px solid #de0301;
			padding: 2%;
		}

		.cashstyle {
			font-size: 13px !important;
			float: right;
			border: 2px solid #de0301;
			padding: 2%;
		}
	}


	/* Medium devices (landscape tablets, 768px and up) */
	@media only screen and (min-width: 768px) {
		.pointstyle {
			font-size: 15px !important;
			float: left;
			border: 2px solid #de0301;
			padding: 2%;
		}

		.cashstyle {
			font-size: 15px !important;
			float: right;
			border: 2px solid #de0301;
			padding: 2%;
		}

		.btnn {

			width: 15%;
		}
	}

	/* Large devices (laptops/desktops, 992px and up) */
	@media only screen and (min-width: 992px) {
		.pointstyle {
			font-size: 15px !important;
			float: left;
			border: 2px solid #de0301;
			padding: 2%;
		}

		.cashstyle {
			font-size: 15px !important;
			float: right;
			border: 2px solid #de0301;
			padding: 2%;
		}

		.btnn {

			width: 15%;
		}
	}

	/* Extra large devices (large laptops and desktops, 1200px and up) */
	@media only screen and (min-width: 1200px) {
		.pointstyle {
			font-size: 22px !important;
			float: left;
			border: 2px solid #de0301;
			padding: 2%;
		}

		.cashstyle {
			font-size: 22px !important;
			float: right;
			border: 2px solid #de0301;
			padding: 2%;
		}

		.btnn {

			width: 25%;
		}
	}

	.pointstyle {
		font-size: 13px;
		float: left;
		border: 2px solid #de0301;
		padding: 2%;
	}

	.cashstyle {
		font-size: 13px;
		float: right;
		border: 2px solid #de0301;
		padding: 2%;
	}
</style>

<body>
	<div class="body-inner">
		<!-- Header start -->
		<header id="header" class="header header-transparent">
			<?php commonHeader($data); ?>
		</header>
		<!--/ Header end -->

		<div id="page-banner-area" class="page-banner-area" style="background-image:url(images/hero_area/banner_bg.jpg)">
			<!-- Subpage title start -->
			<div class="page-banner-title">
				<!--<div class="text-center">
					<h2>About Event</h2>
					<ol class="breadcrumb">
						<li>
							<a href="#">Exibit /</a>
						</li>
						<li>
							About
						</li>
					</ol>
				</div>-->
			</div><!-- Subpage title end -->
		</div><!-- Page Banner end -->

		<!-- ts intro start -->
		<?php commonUserHeader($data); ?>
		<!-- ts speaker end-->

		<section class="ts-intro intro-line section-bg" style="background-color:white;padding: 10px 0 5px;">
			<div class="container">
				<div class="row">
					<div class="col-md-7"></div>
					<div class="col-md-5">
						<span class='cashstyle' style='color:black;'><a href="cashtowall.php">Cash To Wallet</a></span>
					</div>
				</div>
			</div>
		</section>
		<!-- ts intro start -->
		<section class="ts-intro intro-line section-bg" style="background-color:white;padding: 10px 0 60px;">
			<div class="container">
				<div class="row">
					<div class="col-lg-12" style=" background-color: white; border: 3px solid grey; border-radius: 20px; box-shadow: 6px 7px 10px 0px #0000002e; padding:10px;">
						<div class='col-lg-12' id='pmload' style='margin-bottom: 10%;'>
							<!-- <h3 class="text-center" style='margin-left:2%'>Free Recharge</h3> -->
							<div id='pmload2'>
								<?php
								$qry = "Select * from signup where `UID` = '" . $_COOKIE['jiboomba_user'] . "'";
								$result = $conn->query($qry);
								$data = mysqli_fetch_assoc($result);
								?>


								<span class='pointstyle' style='color:black;'> <i class="fa fa-database" style='color:#de0301;'></i> Points : <b id="bal_poi"> <?php $points = explode('.', $data['points']);
																																								echo $data['points']; ?></b></span>

								<span class='cashstyle' style='color:black;'><i class="fa fa-google-wallet" style='color:#de0301;'></i> Cash : Rs.<b id="bal_a"><?php echo sprintf("%.2f", $data['points'] / 1000); ?></b></span>
								<input type="hidden" name="" id="cur_amount" value="<?php echo $data['money']; ?>">
							</div>
						</div>

						<hr>
						<!-- <div class='text-center col-md-12' id='loadupdate' style='display:;'>
			   <?php
				$qry = "Select * from signup where `UID` = '" . $_COOKIE['jiboomba_user'] . "'";
				$result = $conn->query($qry);
				$data = mysqli_fetch_assoc($result);
				?>
				<h3 class="text-center" style='margin-left:2%'>Convert Point's to Money</h3>
					<div class='col-md-12' style='margin:2%;'>
						<div class="row">
							<div class="col-md-4">
								<input type="button" name='trs' onclick='addmoneytoWallet("10","10000",<?php echo $data['points']; ?>);'  class="btn btn-success" style="padding: 0 0px;" id='trs' class='' value='10,000 Pts = Rs. 10'/>
							</div>
							<div class="col-md-4">
								<input type="button" name='hrs' onclick='addmoneytoWallet("100","100000", <?php echo $data['points']; ?>);'  class="btn btn-success" id='hrs' style="padding: 0 0px;" value='1,00,000 Pts = Rs. 100'/>
							</div>
							<div class="col-md-4">
								<input type="button" name='frs'  onclick='addmoneytoWallet("500","500000", <?php echo $data['points']; ?>);'  class="btn btn-success" id='frs' style="padding: 0 0px;" value='5,00,000 Pts = Rs. 500'/>
							</div>
					</div>
						
					</div>
				</div> 
				<br>
				<hr> -->
						<!-- <h6 style="font-size: 13px;text-align: center;" class=""><i style="color: rgb(255, 186, 0);" class="fa fa-exclamation-triangle" aria-hidden="true"></i> Thanks for your payment request, since we are getting more request, we couldn't able to process today, tomorrow (02.Apr-2020) will be process. <br> Sorry for the inconvenience, Enjoy the game! </h6> -->
						<h3 class="text-center">Transfer Payment To Your Account</h3>

						<div class="row">
							<div class="col-md-3"></div>
							<div class="col-md-6">

								<form autocomplete="off" id="transfer_account_form">

									<div class="group">
										<select name="pay_option" id="pay_option" required="">
											<option value="0" selected>Choose Payment Mode</option>
											<option value="Google_Pay">Google Pay</option>
											<option value="Phonepe">Phonepe</option>
											<option value="Amazon_Pay">Amazon Pay</option>
										</select>
									</div>
									<input type="hidden" name="total_points" value="<?php echo $data['points']; ?>">
									<div class="group">
										<input type="text" class="num" name="m_number" id="a_n" required>
										<span class="highlight"></span>
										<span class="bar"></span>
										<label>Mobile Number</label>
										<!-- <span class="error_acc">Please check Account number</span> -->
									</div>


									<div class="group">
										<select name="r_amount" id="r_amount_in_f" required="">

											<?php

											if (sprintf("%.2f", $data['points'] / 1000) < 10.00) {
											?>
												<option value="0" selected>Insufficient Balance</option>
											<?php
											} else if (sprintf("%.2f", $data['points'] / 1000) < 50.00) {
											?>
												<option value="0" selected>Choose Amount</option>

												<option value="10" <?php if ($rc_count != '0') {
																		echo "disabled";
																	} ?>>10</option>
											<?php
											} else if (sprintf("%.2f", $data['points'] / 1000) < 100.00) {
											?>
												<option value="0" selected>Choose Amount</option>
												<option value="10" <?php if ($rc_count != '0') {
																		echo "disabled";
																	} ?>>10</option>
												<option value="50">50</option>
											<?php
											} else if (sprintf("%.2f", $data['points'] / 1000) < 500.00) {
											?>
												<option value="0" selected>Choose Amount</option>
												<option value="10" <?php if ($rc_count != '0') {
																		echo "disabled";
																	} ?>>10</option>
												<option value="50">50</option>
												<option value="100">100</option>
											<?php
											} else if (sprintf("%.2f", $data['points'] / 1000) < 1000.00) {
											?>
												<option value="0" selected>Choose Amount</option>
												<option value="10" <?php if ($rc_count != '0') {
																		echo "disabled";
																	} ?>>10</option>
												<option value="50">50</option>
												<option value="100">100</option>
												<option value="500">500</option>
											<?php
											} else if (sprintf("%.2f", $data['points'] / 1000) < 5000.00) {
											?>
												<option value="0" selected>Choose Amount</option>
												<option value="10" <?php if ($rc_count != '0') {
																		echo "disabled";
																	} ?>>10</option>
												<option value="50">50</option>
												<option value="100">100</option>
												<option value="500">500</option>
												<option value="1000">1000</option>
											<?php
											} else if (sprintf("%.2f", $data['points'] / 1000) < 10000.00) {
											?>
												<option value="0" selected>Choose Amount</option>
												<option value="10" <?php if ($rc_count != '0') {
																		echo "disabled";
																	} ?>>10</option>
												<option value="50">50</option>
												<option value="100">100</option>
												<option value="500">500</option>
												<option value="1000">1000</option>
												<option value="5000">5000</option>
											<?php
											} else if (sprintf("%.2f", $data['points'] / 1000) > 1000.00) {
											?>
												<option value="0" selected>Choose Amount</option>
												<option value="10" <?php if ($rc_count != '0') {
																		echo "disabled";
																	} ?>>10</option>
												<option value="50">50</option>
												<option value="100">100</option>
												<option value="500">500</option>
												<option value="1000">1000</option>
												<option value="5000">5000</option>
												<option value="10000">10000</option>
											<?php
											}
											?>
										</select>
									</div>

									<!--  <div class="group">      
						  <input type="text" class="num" name="r_amount" id="a_n_r" required oninput="mobileValid2();">
						  <span class="highlight"></span>
						  <span class="bar"></span>
						  <label>Transfer Amount</label>
						  <span class="error_acc2">Please check Transfer Amount</span>
						  <span class="error_acc3">Minimum Transfer Amount Rs:10</span>
						  <span class="error_acc4">Valid Amount</span>
					   </div> -->





									<!-- <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
                       <div class="row">
						   <div class="group2">      
							  <input type="radio" class="num" name="type" id="pre" value="Prepaid" required checked>
							  <label style="top: -25px;font-size: 16px;color: #232323;display: contents;font-family: sans-serif;">
							  Prepaid
							</label>
						   </div>
						   <div class="group2">      
							  <input type="radio" class="num" name="type" id="post" value="Prepaid" required>
							  <label style="top: -25px;font-size: 16px;color: #232323;display: contents;font-family: sans-serif;">
							  Postpaid
							</label>
						   </div>
					   </div>
					   </div> -->
									<!-- <br> -->

									<!-- <div class="group pre_net">  
						   <select name="network" id="pre_sel">
						   	<option value="" disabled selected>Choose Network</option>
						   	<option value="1">Airtel</option>
						   	<option value="2">Vodafone</option>
						   	<option value="3">Idea</option>
						   	<option value="4">Jio</option>
						   	<option value="6">Tata Docomo</option>
						   	<option value="8">BSNL</option>
						   </select>    
					   </div>

					   <div class="group post_net">  
						   <select name="network" id="post_sel">
						   	<option value="" disabled selected>Choose Network</option>
						   	<option value="21">Airtel POSTPAID</option>
						   	<option value="22">Idea POSTPAID</option>
						   	<option value="23">Vodafone POSTPAID</option>
						   	<option value="24">Tata Docomo POSTPAID</option>

						   	
						   </select>    
					   </div>
					   <br> -->





									<input type="button" id="submit_rec" name="submit_rec" class="btn btn-success" value="Transfer">
								</form>


								<button type="button" style="display:none;" id="success_alert_btn" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Large Modal</button>

								<!-- Modal -->
								<div class="modal fade" id="myModal" role="dialog">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title"><i class="fa fa-check-circle" style="color: green;" aria-hidden="true"></i> Payment Request Sent Successfully..!</h4>
												<button type="button" class="close" id="mod_close" data-dismiss="modal">&times;</button>

											</div>

										</div>
									</div>
								</div>

							</div>
							<div class="col-md-3"></div>
						</div>

						<br>
						<br>
						<br>


						<script type="text/javascript">
							$("#myModal").click(function() {
								location.reload();
							});
							$("#mod_close").click(function() {
								location.reload();
							});

							$("#submit_rec").click(function() {
								// alert();
								$("#submit_rec").attr("disabled", "true");


								var pay_option = $("#pay_option").val();
								var m_number = $("#a_n").val();
								var r_amount2 = $("#r_amount_in_f").val();




								if (pay_option == '0' || m_number == "" || r_amount2 == '0') {

									alert("Must Fill All Fields");
									return false;
								} else {
									// alert("val");

									if (m_number.length >= 10) {

										$.ajax({
											type: "POST",
											url: "curd/insert/transfer_sms.php",
											data: $('#transfer_account_form').serialize(),
											success: function(data) {

												if (data.trim() == "null_value") {
													alert("Must Fill All Fields");
													return false;

												} else {
													$("#success_alert_btn").click();
													$("#transfer_account_form")[0].reset();

												}

											}

										});

									} else {
										alert("Invalid Mobile Number");

										return false

									}




								}



							})
						</script>




					</div>
					<!-- <div class="col-lg-2" style="float:right;">
			 <img src="ad/ad.png" width="100%"  alt="Coin Image">
		  </div> -->
					<!-- <a href="https://web.whatsapp.com/send?phone=918072787919&amp;text=Hi..! I found you on Jiboomba" target="_blank" class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a> -->
				</div>
			</div><!-- container end-->
		</section>

		<!-- ts speaker end-->

		<!-- Sponsors end -->

		<!-- ts map direction start-->

		<!-- ts map direction end-->

		<!-- ts footer area start-->
		<div class="footer-area">

			<!-- ts-book-seat start-->

			<!-- book seat  end-->

			<!-- footer start-->
			<footer class="ts-footer">
				<?php commonFooter(); ?>
			</footer>
			<!-- footer end-->

			<!-- <div class="BackTo">
               <a href="#" class="fa fa-angle-up" aria-hidden="true"></a>
           </div> -->
		</div>
		<!-- ts footer area end-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script>
			function checklimit(valueid) {
				if (valueid < 500) {
					$('#msgerror').html('Minimum withdraw amount is Rs.500/-');
				} else {
					$('#msgerror').html('');
				}
			}

			function addmoneytoWallet(money, points, apoints) {
				swal({
						title: "Are you sure?",
						text: "Your " + points + " points will be converted into Rs." + money,
						type: "warning",
						showCancelButton: true,
						confirmButtonColor: '#DD6B55',
						confirmButtonText: 'Yes, I am sure!',
						cancelButtonText: "No, cancel it!",
						closeOnConfirm: false,
						closeOnCancel: false
					},
					function(isConfirm) {

						if (isConfirm) {
							$.ajax({

								type: "GET",
								url: "AjaxActions.php",
								data: "action=ADDMONEYTOWALLET&points=" + points + "&money=" + money + "&apoints=" + apoints,
								cache: false,
								success: function(data) {
									//swal('Points Added Succesfully...');
									$("#status").html(data);
									if (data != 'Insufficient Points') {
										swal(data, data, "success");

									} else {
										swal(data, data, "error");

									}
									$("#pmload").load(location.href + " #pmload2");
									$("#loadupdate").load(location.href + " #loadupdate");

								}
							});

						} else {
							swal("Cancelled", "You Canceled Last Transaction", "error");

						}
					});





			}


			function tosscoinpoints(getid) {
				$('#price-tag').val(getid);
			}
		</script>
		<script src="js/index.js"></script>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js'></script>
		<?php commonScripts(); ?><script src="js/coinalgorith.js"></script>
	</div>
	<!-- Body inner end -->
</body>

<script type="text/javascript">
	$(document).ready(function() {
		$('.error_acc2').css('display', 'none');
		$('.error_acc3').css('display', 'none');
		$('.error_acc4').css('display', 'none');
		$('.post_net').css('display', 'none');
	});

	$("#a_n_r").hover(function() {
		var che = $("#a_n_r").val();

		// var a=$("#cur_amount").val();
		var a = <?php echo $data['money']; ?>;
		// alert(a);
		var r_amount = $("#a_n_r").val();
		var amount = Math.trunc(a);

		if (che < 10) {
			$('.error_acc2').css('display', 'none');
			$('.error_acc4').css('display', 'none');
			$('.error_acc3').css('display', 'unset');
			$('.error_acc3').css('color', 'red');
			return false;
		} else if (r_amount > amount) {
			$('.error_acc3').css('display', 'none');
			$('.error_acc4').css('display', 'none');
			$('.error_acc2').css('display', 'unset');
			$('.error_acc2').css('color', 'red');
			return false;
		} else if (r_amount < amount) {
			$('.error_acc3').css('display', 'none');
			$('.error_acc2').css('display', 'none');
			$('.error_acc4').css('display', 'unset');
			$('.error_acc4').css('color', 'green');
			// return false;
		} else {
			$('.error_acc3').css('display', 'none');
			$('.error_acc2').css('display', 'none');
			$('.error_acc4').css('display', 'unset');
			$('.error_acc4').css('color', 'green');
			return false;
		}


	});


	$("#post").click(function() {
		$('.post_net').css('display', 'unset');
		$('.pre_net').css('display', 'none');
	});

	$("#pre").click(function() {
		$('.post_net').css('display', 'none');
		$('.pre_net').css('display', 'unset');
	});
</script>

<script type="text/javascript">
	function validateAlpha() {
		var textInput = document.getElementById("service_name").value;
		textInput = textInput.replace(/[&\/\-_=|\][;\#,+()$~%.'":*?<>{}@^!`0-9]/g, "");
		document.getElementById("service_name").value = textInput;
	}

	function mobileValid() {
		var textInput = document.getElementById("a_n").value;
		textInput = textInput.replace(/[^0-9]/g, "");
		document.getElementById("a_n").value = textInput;
	}

	function mobileValid2() {
		var textInput = document.getElementById("a_n_r").value;
		textInput = textInput.replace(/[^0-9]/g, "");
		document.getElementById("a_n_r").value = textInput;

	}
</script>


<!-- Mirrored from demo.themewinter.com/html/exhibz/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Dec 2018 02:48:31 GMT -->

</html>