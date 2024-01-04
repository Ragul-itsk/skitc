<?php
require_once("Includes/commonFunctions.php");
?>
<!doctype html>
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

	<link rel="stylesheet" href="css/pricing.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<style>
		.comparison .price-small {
			top: 0px !important;
		}




		@media (max-width: 768px) {

			.switch-wrap {
				margin-bottom: 0;
				margin-top: 50px;
			}


			.qbo {
				display: block !important;
			}

			.comparison td,
			.comparison th {
				font-size: x-small !important;
			}

			.comparison .price-now span {
				font-size: x-small !important;
			}

			.comparison .price-small {
				top: 0px !important;
			}

		}

		@media (max-width: 768px) and (orientation: landscape) {

			.comparison td,
			.comparison th {
				font-size: x-small !important;
			}

			.comparison .price-now span {
				font-size: x-small !important;
			}

			.comparison .price-small {
				top: 0px !important;
			}


		}


		.nonetoggle {
			display: none;
		}

		span.price-tax {
			font-size: 15px !important;
		}

		p.price-type {
			font-size: 12px;
			margin-bottom: 0;
		}

		.min_user {
			color: #ff5406;
			font-size: 12px;
		}
	</style>
</head>

<body>

	<!--================ Header Menu Area =================-->
	<?php commonHeader(); ?>

	<!-- popup -->
	<div class="bts-popup" role="alert" style="overflow: auto;margin-top: 0px;">
		<div class="bts-popup-container" style="background: #ecebed;">
			<img src="img/offer.png" alt="" width="80%" />
			<p style="font-size: 20px;
    font-weight: bold;margin-bottom: 0;padding: 0px 0px;color: #3ca4f3;
    font-family: " Heebo", sans-serif;">
				<!-- <i class='fa fa-phone faa-wrench animated fa-1x'></i> -->
				<a title="8072787919" href="tel:8072787919"><img src="img/incoming-call.gif" style="width: 100px;padding-top: 0px;"></a>-<a title="8072787919" href="tel:8072787919" tabindex="0" style="color: black;">&nbsp;8072787919</a>
			</p>
			<!-- <div class="bts-popup-button"> -->
			<!-- <a href="free_try_form.php">Free Download</a> -->
			<!-- <form method="post"> -->
			<!-- <input type="text" class="fld mobile_nym" name="mobile number" placeholder="Mobile number" onkeypress="return event.charCode > 47 && event.charCode < 58;" maxlength="10" required>
                        <input type="hidden" name="sw_n" class="sw_n" value="Overseas">
                        <input type="button" class="subm " name="" value="Submit"> -->
			<!-- </form> -->
			<!-- <b class="res_alt" style="display: none;color: green;">send successfully..!</b>
                 </div> -->
			<a href="#0" class="bts-popup-close img-replace" style="color: black;">Close</a>
		</div>
	</div>

	<script type="text/javascript">
		$(".mobile_nym").click(function() {
			$(".mobile_nym").css("border", "1px solid #9a9a9a");
		})


		$(".subm").click(function() {
			var mobile_number = $(".mobile_nym").val();
			var sw_n = $(".sw_n").val();

			if (mobile_number == "") {
				$(".mobile_nym").css("border", "1px solid red");
			} else {
				$.ajax({
					type: 'POST',
					url: 'sens_sms.php',
					data: {
						"mobile_number": mobile_number,
						"sw_n": sw_n,
					},
					// data: $("#login_otp_send").serialize(),

					success: function(data) {
						$(".res_alt").css("display", "block");
						$(".bts-popup").delay(50000).css("opacity", "0");
						$(".bts-popup").removeClass('is-visible');
					}
				});

			}




		});



		jQuery(document).ready(function($) {

			window.onload = function() {
				$(".bts-popup").delay(1000).addClass('is-visible');
			}

			//open popup
			$('.bts-popup-trigger').on('click', function(event) {

				event.preventDefault();
				$('.bts-popup').addClass('is-visible');
			});

			//close popup
			$('.bts-popup').on('click', function(event) {

				if ($(event.target).is('.bts-popup-close') || $(event.target).is('.bts-popup')) {
					event.preventDefault();
					$(this).removeClass('is-visible');
				}
			});
			//close popup when clicking the esc keyboard button
			$(document).keyup(function(event) {

				if (event.which == '27') {
					$('.bts-popup').removeClass('is-visible');
				}
			});
		});
	</script>
	<!-- popup -->

	<!--================ Header Menu Area =================-->

	<!--================Home Banner Area =================-->
	<section class="banner_area" style="min-height: 180px;">
		<div class="banner_inner d-flex align-items-center" style="min-height: 180px;">
			<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
			<div class="container">
				<div class="banner_content text-center">
					<h2>Pricing</h2>
					<div class="page_link">
						<a href="index.html">Home</a>
						<a href="price.html">Pricing</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Home Banner Area =================-->

	<!--================Price Area =================-->
	<section class="price_area p_120">
		<div class="container">
			<div style="float:right;">
				<div class="switch-wrap d-flex justify-content-between">

					<div class="confirm-switch" style="bottom: 10px; margin-right: 100px;">
						<p style="position:absolute; font-size:18px; bottom:15px;">$ &nbsp; ₹</p>
						<input type="checkbox" id="confirm-switch" onclick="toggleclass();" checked="">
						<label for="confirm-switch"></label>
					</div>
				</div>
			</div>
			<div class="comparison">
				<table>
					<thead>
						<tr>
							<th colspan="3" class="qbo">
								Get Started Now
							</th>
						</tr>
						<tr>
							<th class="compare-heading">
								LITE
							</th>
							<th class="compare-heading">
								PREMIUM
							</th>
							<th class="compare-heading">
								ENTERPRISE
							</th>
						</tr>
						<tr id="dollar" class="nonetoggle">
							<th class="price-info">
								<div class="price-now"><span>$ 5<span class="price-small">.88 </span><span class="price-tax">+ GST</span>
										<p class="price-type">per user / month</p>
									</span></div>
								<div><a href="register.php" class="price-buy">Buy <span class="hide-mobile">Now</span></a>
									<p class="min_user">**NOTE MINIMUM 4 USERS </p>
								</div>

							</th>
							<th class="price-info">
								<div class="price-now"><span>$ 8<span class="price-small">.38</span><span class="price-tax">+ GST</span>
										<p class="price-type">per user / month</p>
									</span></div>
								<div><a href="register.php" class="price-buy">Buy <span class="hide-mobile">Now</span></a>
									<p class="min_user">**NOTE MINIMUM 4 USERS </p>
								</div>
							</th>
							<th class="price-info">
								<div class="price-now"><span>$ 11<span class="price-small">.18</span><span class="price-tax">+ GST</span>
										<p class="price-type">per user / month</p>
									</span></div>
								<div><a href="register.php" class="price-buy">Buy <span class="hide-mobile">Now</span></a>
									<p class="min_user">**NOTE MINIMUM 4 USERS </p>
								</div>
							</th>
						</tr>
						<tr id="rupee" class="">
							<th class="price-info">
								<div class="price-now"><span>&#2352; 420<span class="price-small">.00 </span><span class="price-tax">+ GST</span>
										<p class="price-type">per user / month</p>
									</span></div>
								<div><a href="register.php" class="price-buy">Buy <span class="hide-mobile">Now</span></a>
									<p class="min_user">**NOTE MINIMUM 4 USERS </p>
								</div>

							</th>
							<th class="price-info">
								<div class="price-now"><span>&#2352; 599<span class="price-small">.00 </span><span class="price-tax">+ GST</span>
										<p class="price-type">per user / month</p>
									</span></div>
								<div><a href="register.php" class="price-buy">Buy <span class="hide-mobile">Now</span></a>
									<p class="min_user">**NOTE MINIMUM 4 USERS </p>
								</div>
							</th>
							<th class="price-info">
								<div class="price-now"><span>&#2352; 799<span class="price-small">.00</span><span class="price-tax">+ GST</span>
										<p class="price-type">per user / month</p>
									</span></div>
								<div><a href="register.php" class="price-buy">Buy <span class="hide-mobile">Now</span></a>
									<p class="min_user">**NOTE MINIMUM 4 USERS </p>
								</div>
							</th>
						</tr>
					</thead>
					<tbody id="focus">
						<tr>
							<td style="color:Red;"><i class="fas fa-times"></i></td>
							<td colspan="3" style="width: 100%;">Dash Board</td>
						</tr>
						<tr class="compare-row">
							<td style="color:#009E2C;"><i class="fas fa-check"></i></td>
							<td style="color:#009E2C;"><i class="fas fa-check"></i></td>
							<td style="color:#0078C1;"><i class="fas fa-check"></i></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td colspan="3" style="width: 100%;">Add Branch</td>
						</tr>
						<tr>
							<td class="tickgreen">3</td>
							<td class="tickgreen">5</td>
							<td class="tickblue">UNLIMITED</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td colspan="3" style="width: 100%;">Add Country</td>
						</tr>
						<tr class="compare-row">
							<td class="tickgreen">5</td>
							<td class="tickgreen">7</td>
							<td class="tickblue">UNLIMITED</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td colspan="3" style="width: 100%;">Add Institutions</td>
						</tr>
						<tr>
							<td class="tickgreen">10</td>
							<td class="tickgreen">12</td>
							<td class="tickblue">UNLIMITED</td>
						</tr>

						<tr>
							<td>&nbsp;</td>
							<td colspan="3" style="width: 100%;">Add Id Format</td>
						</tr>
						<tr class="compare-row">
							<td><span class="tickgreen"><i class="fas fa-check"></i></span></td>
							<td><span class="tickgreen"><i class="fas fa-check"></i></span></td>
							<td><span class="tickblue"><i class="fas fa-check"></i></span></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td colspan="3" style="width: 100%;">Student Register</td>
						</tr>
						<tr>
							<td><span class="tickgreen">40</span></td>
							<td><span class="tickgreen">80</span></td>
							<td><span class="tickblue">UNLIMITED</span></td>
						</tr>

						<tr>
							<td>&nbsp;</td>
							<td colspan="3" style="width: 100%;">Student Report</td>
						</tr>
						<tr class="compare-row">
							<td><span class="tickgreen"><i class="fas fa-check"></i></span></td>
							<td><span class="tickgreen"><i class="fas fa-check"></i></span></td>
							<td><span class="tickblue"><i class="fas fa-check"></i></span></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td colspan="3" style="width: 100%;">View Profile</td>
						</tr>
						<tr>
							<td><span class="tickgreen"><i class="fas fa-check"></i></span></td>
							<td><span class="tickgreen"><i class="fas fa-check"></i></span></td>
							<td><span class="tickblue"><i class="fas fa-check"></i></span></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td colspan="3" style="width: 100%;">Schedule Management</td>
						</tr>
						<tr class="compare-row">
							<td><span class="tickgreen">50</span></td>
							<td><span class="tickgreen">65</span></td>
							<td><span class="tickblue">UNLIMITED</span></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td colspan="3" style="width: 100%;">Email Management</td>
						</tr>
						<tr>
							<td><span class="tickgreen">50</span></td>
							<td><span class="tickgreen">65</span></td>
							<td><span class="tickblue">UNLIMITED</span></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td colspan="3" style="width: 100%;">API</td>
						</tr>
						<tr class="compare-row">
							<td><span class="tickgreen"><i class="fas fa-check"></i></span></td>
							<td><span class="tickgreen"><i class="fas fa-check"></i></span></td>
							<td><span class="tickblue"><i class="fas fa-check"></i></span></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td colspan="3" style="width: 100%;">Document Upload</td>
						</tr>
						<tr>
							<td><span class="tickgreen"><i class="fas fa-check"></span></td>
							<td><span class="tickgreen"><i class="fas fa-check"></span></td>
							<td><span class="tickblue"><i class="fas fa-check"></span></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td colspan="3" style="width: 100%;">Search Courses</td>
						</tr>
						<tr class="compare-row">
							<td><span class="tickgreen"><i class="fas fa-check"></span></td>
							<td><span class="tickgreen"><i class="fas fa-check"></span></td>
							<td><span class="tickblue"><i class="fas fa-check"></span></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td colspan="3" style="width: 100%;">Filter University with Student Profile</td>
						</tr>
						<tr>
							<td><span class="tickgreen"><i class="fas fa-check"></span></td>
							<td><span class="tickgreen"><i class="fas fa-check"></span></td>
							<td><span class="tickblue"><i class="fas fa-check"></span></td>
						</tr>

						<tr>
							<td>&nbsp;</td>
							<td colspan="3" style="width: 100%;">Student Management</td>
						</tr>
						<tr class="compare-row">
							<td><span class="tickgreen"><i class="fas fa-check"></span></td>
							<td><span class="tickgreen"><i class="fas fa-check"></span></td>
							<td><span class="tickblue"><i class="fas fa-check"></span></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td colspan="3" style="width: 100%;">Status Management</td>
						</tr>
						<tr>
							<td><span class="tickgreen"><i class="fas fa-check"></span></td>
							<td><span class="tickgreen"><i class="fas fa-check"></span></td>
							<td><span class="tickblue"><i class="fas fa-check"></span></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td colspan="3" style="width: 100%;">Free Transactional SMS</td>
						</tr>
						<tr class="compare-row">
							<td><span class="tickgreen"><i class="fas fa-check"></span></td>
							<td><span class="tickgreen"><i class="fas fa-check"></span></td>
							<td><span class="tickblue"><i class="fas fa-check"></span></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td colspan="3" style="width: 100%;">Standard Dashboard</td>
						</tr>
						<tr>
							<td><span class="tickgreen"><i class="fas fa-check"></span></td>
							<td><span class="tickgreen"><i class="fas fa-check"></span></td>
							<td><span class="tickblue"><i class="fas fa-check"></span></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td colspan="3" style="width: 100%;">Integrated SMS</td>
						</tr>
						<tr class="compare-row">
							<td><span class="tickgreen"><i class="fas fa-check"></span></td>
							<td><span class="tickgreen"><i class="fas fa-check"></span></td>
							<td><span class="tickblue"><i class="fas fa-check"></span></td>
						</tr>
						<!--  -->
						<tr>
							<td>&nbsp;</td>
							<td colspan="3" style="width: 100%;">Multiple Dashboard</td>
						</tr>
						<tr>
							<td><span class="crossred"><i class="fas fa-times"></span></td>
							<td><span class="crossred"><i class="fas fa-times"></span></td>
							<td><span class="tickblue"><i class="fas fa-check"></span></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td colspan="3" style="width: 100%;">University Agreement</td>
						</tr>
						<tr class="compare-row">
							<td><span class="crossred"><i class="fas fa-times"></span></td>
							<td><span class="crossred"><i class="fas fa-times"></span></td>
							<td><span class="tickblue"><i class="fas fa-check"></span></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td colspan="3" style="width: 100%;">Student Login</td>
						</tr>
						<tr>
							<td><span class="crossred"><i class="fas fa-times"></span></td>
							<td><span class="crossred"><i class="fas fa-times"></span></td>
							<td><span class="tickblue"><i class="fas fa-check"></span></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td colspan="3" style="width: 100%;">Integration with website</td>
						</tr>
						<tr class="compare-row">
							<td><span class="crossred"><i class="fas fa-times"></span></td>
							<td><span class="crossred"><i class="fas fa-times"></span></td>
							<td><span class="tickblue"><i class="fas fa-check"></span></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td colspan="3" style="width: 100%;"><a href="register.php" style="color: #777777;">Free Registration</a></td>
						</tr>
						<tr class="compare-row">
							<td colspan="4" style="background-color: #3bacf0;text-align: -webkit-center;"><a href="register.php" class="tickets_btn">Free Trial</a></td>
						</tr>

					</tbody>

				</table>

			</div>
		</div>
	</section>





	<!--  -->

	<section class="impress_area p_120" style="padding-bottom: 0px;">

		<div class="container">

			<div class="impress_inner" style="text-align: left;">

				<h2 style="font-size: 20px;">1- Minimum 4 users</h2>
				<h2 style="font-size: 20px;">2- Cloud storage space increases with number of users (1Gb per user)</h2>
				<h2 style="font-size: 20px;">3- Save 30% on payment of 2 years</h2>

				<p>For more than 20 users, please contact us at <a href="tel:8072787919" style="color: white; font-size: 20px;">+91-8072787919</a> or <a href="mailto:support@itsk.in" style="color: white; font-size: 20px;">support@itsk.in</a> <br>
					<br>
					Your subscription includes the following:
				</p>
				<div class="col-md-12 " style="font-size: 15px; color: white;font-weight: 600;">

					<div class="row">
						<div class="col-md-6">
							<ul>
								<li>Fully managed server and CRM</li>
								<li>Always optimized</li>
								<li>Standard customization for individual user experience</li>
								<li>Cloud storage space as per users</li>
								<li>Unlimited Branch office accounts</li>
							</ul>
						</div>

						<div class="col-md-6">
							<ul>
								<li>Unlimited applications</li>
								<li>Dedicated support with 24x7 ticketing system</li>
								<li>Unlimited Online training for a month</li>
								<li>Integrating the CRM with your website.</li>
								<li>IT support</li>
							</ul>
						</div>
					</div>



				</div>

				<!-- <a class="banner_btn2" href="pricing.php">Request Free Demo</a> -->

			</div>

		</div>

	</section>


	<!--  -->
	<!--================End Price Area =================-->

	<!--================Impress Area =================-->
	<?php commonGotImpressed(); ?>
	<!--================End Impress Area =================-->

	<!--================Footer Area =================-->
	<?php commonFooter(); ?>
	<!--================End Footer Area =================-->




	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<?php commonScripts(); ?>
	<script>
		function toggleclass() {
			$("#dollar").toggleClass("nonetoggle");
			$("#rupee").toggleClass("nonetoggle");
		}
	</script>
</body>

</html>