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
							<th class="tl tl2"></th>
							<th colspan="3" class="qbo">
								Get Started Now
							</th>
						</tr>
						<tr>
							<th class="tl"></th>
							<th class="compare-heading">
								LITE (FREE)
							</th>
							<th class="compare-heading">
								PREMIUM
							</th>
							<th class="compare-heading">
								ENTERPRISE
							</th>
						</tr>
						<tr id="dollar" class="nonetoggle">
							<th></th>
							<th class="price-info">
								<div class="price-now"><span>$0<span class="price-small">.00 </span><span class="price-tax">+ GST</span>
										<p class="price-type">per user / month</p>
									</span></div>
								<div><a href="register.php" class="price-buy">Buy <span class="hide-mobile">Now</span></a>
									<p class="min_user">**NOTE MINIMUM 4 USERS </p>
								</div>

							</th>
							<th class="price-info">
								<div class="price-now"><span>$7<span class="price-small">.25</span><span class="price-tax">+ GST</span>
										<p class="price-type">per user / month</p>
									</span></div>
								<div><a href="register.php" class="price-buy">Buy <span class="hide-mobile">Now</span></a>
									<p class="min_user">**NOTE MINIMUM 4 USERS </p>
								</div>
							</th>
							<th class="price-info">
								<div class="price-now"><span>$8<span class="price-small">.70</span><span class="price-tax">+ GST</span>
										<p class="price-type">per user / month</p>
									</span></div>
								<div><a href="register.php" class="price-buy">Buy <span class="hide-mobile">Now</span></a>
									<p class="min_user">**NOTE MINIMUM 4 USERS </p>
								</div>
							</th>
						</tr>
						<tr id="rupee" class="">
							<th></th>
							<th class="price-info">
								<div class="price-now"><span>₹0<span class="price-small">.00 </span><span class="price-tax">+ GST</span>
										<p class="price-type">per user / month</p>
									</span></div>
								<div><a href="register.php" class="price-buy">Buy <span class="hide-mobile">Now</span></a>
									<p class="min_user">**NOTE MINIMUM 4 USERS </p>
								</div>

							</th>
							<th class="price-info">
								<div class="price-now"><span>₹500<span class="price-small">.00 </span><span class="price-tax">+ GST</span>
										<p class="price-type">per user / month</p>
									</span></div>
								<div><a href="register.php" class="price-buy">Buy <span class="hide-mobile">Now</span></a>
									<p class="min_user">**NOTE MINIMUM 4 USERS </p>
								</div>
							</th>
							<th class="price-info">
								<div class="price-now"><span>₹600<span class="price-small">.00</span><span class="price-tax">+ GST</span>
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
							<td>Dash Board</td>
							<td style="color:#009E2C;"><i class="fas fa-check"></i></td>
							<td style="color:#009E2C;"><i class="fas fa-check"></i></td>
							<td style="color:#0078C1;"><i class="fas fa-check"></i></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td colspan="3" style="width: 100%;">Add Branch</td>
						</tr>
						<tr>
							<td>Add Branch</td>
							<td class="tickgreen">3</td>
							<td class="tickgreen">5</td>
							<td class="tickblue">UNLIMITED</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td colspan="3" style="width: 100%;">Add Country</td>
						</tr>
						<tr class="compare-row">
							<td>Add Country</td>
							<td class="tickgreen">5</td>
							<td class="tickgreen">7</td>
							<td class="tickblue">UNLIMITED</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td colspan="3" style="width: 100%;">Add Institutions</td>
						</tr>
						<tr>
							<td>Add Institutions</td>
							<td class="tickgreen">10</td>
							<td class="tickgreen">12</td>
							<td class="tickblue">UNLIMITED</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td colspan="3" style="width: 100%;">Add Admins</td>
						</tr>
						<tr class="compare-row">
							<td>Add Admins</td>
							<td><span class="tickgreen">5</span></td>
							<td><span class="tickgreen">7</span></td>
							<td><span class="tickblue">UNLIMITED</span></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td colspan="3" style="width: 100%;">Add Supermasters</td>
						</tr>
						<tr>
							<td>Add Supermasters</td>
							<td><span class="tickgreen">1</span></td>
							<td><span class="tickgreen">3</span></td>
							<td><span class="tickblue">UNLIMITED</span></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td colspan="3" style="width: 100%;">Add Id Format</td>
						</tr>
						<tr class="compare-row">
							<td>Add Id Format</td>
							<td><span class="tickgreen"><i class="fas fa-check"></i></span></td>
							<td><span class="tickgreen"><i class="fas fa-check"></i></span></td>
							<td><span class="tickblue"><i class="fas fa-check"></i></span></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td colspan="3" style="width: 100%;">Student Register</td>
						</tr>
						<tr>
							<td>Student Register</td>
							<td><span class="tickgreen">80</span></td>
							<td><span class="tickgreen">150</span></td>
							<td><span class="tickblue">UNLIMITED</span></td>
						</tr>
						<!--  <tr>
						<td>&nbsp;</td>
						<td colspan="3" style="width: 100%;">Add Student Application</td>
					  </tr> -->
						<!-- <tr>
						<td>Add Student Application</td>
						<td><span class="tickgreen" >25</span></td>
						<td><span class="tickgreen" >35</span></td>
						<td><span class="tickblue" >UNLIMITED</span></td>
					  </tr> -->
						<tr>
							<td>&nbsp;</td>
							<td colspan="3" style="width: 100%;">Student Report</td>
						</tr>
						<tr class="compare-row">
							<td>Student Report</td>
							<td><span class="tickgreen"><i class="fas fa-check"></i></span></td>
							<td><span class="tickgreen"><i class="fas fa-check"></i></span></td>
							<td><span class="tickblue"><i class="fas fa-check"></i></span></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td colspan="3" style="width: 100%;">View Profile</td>
						</tr>
						<tr>
							<td>View Profile</td>
							<td><span class="tickgreen"><i class="fas fa-check"></i></span></td>
							<td><span class="tickgreen"><i class="fas fa-check"></i></span></td>
							<td><span class="tickblue"><i class="fas fa-check"></i></span></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td colspan="3" style="width: 100%;">Schedule Management</td>
						</tr>
						<tr class="compare-row">
							<td>Schedule Management</td>
							<td><span class="tickgreen">50</span></td>
							<td><span class="tickgreen">65</span></td>
							<td><span class="tickblue">UNLIMITED</span></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td colspan="3" style="width: 100%;">Email Management</td>
						</tr>
						<tr>
							<td>Email Management</td>
							<td><span class="tickgreen">50</span></td>
							<td><span class="tickgreen">65</span></td>
							<td><span class="tickblue">UNLIMITED</span></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td colspan="3" style="width: 100%;">API</td>
						</tr>
						<tr class="compare-row">
							<td>API</td>
							<td><span class="tickgreen"><i class="fas fa-check"></i></span></td>
							<td><span class="tickgreen"><i class="fas fa-check"></i></span></td>
							<td><span class="tickblue"><i class="fas fa-check"></i></span></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td colspan="3" style="width: 100%;">Document Upload</td>
						</tr>
						<tr>
							<td>Document Upload</td>
							<td><span class="tickgreen"><i class="fas fa-check"></span></td>
							<td><span class="tickgreen"><i class="fas fa-check"></span></td>
							<td><span class="tickblue"><i class="fas fa-check"></span></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td colspan="3" style="width: 100%;">Search Courses</td>
						</tr>
						<tr class="compare-row">
							<td>Search Courses</td>
							<td><span class="tickgreen"><i class="fas fa-check"></span></td>
							<td><span class="tickgreen"><i class="fas fa-check"></span></td>
							<td><span class="tickblue"><i class="fas fa-check"></span></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td colspan="3" style="width: 100%;">Filter University with Student Profile</td>
						</tr>
						<tr>
							<td>Filter University with Student Profile</td>
							<td><span class="tickgreen"><i class="fas fa-check"></span></td>
							<td><span class="tickgreen"><i class="fas fa-check"></span></td>
							<td><span class="tickblue"><i class="fas fa-check"></span></td>
						</tr>

						<tr>
							<td>&nbsp;</td>
							<td colspan="3" style="width: 100%;">Student Management</td>
						</tr>
						<tr class="compare-row">
							<td>Student Management</td>
							<td><span class="tickgreen"><i class="fas fa-check"></span></td>
							<td><span class="tickgreen"><i class="fas fa-check"></span></td>
							<td><span class="tickblue"><i class="fas fa-check"></span></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td colspan="3" style="width: 100%;">Status Management</td>
						</tr>
						<tr>
							<td>Status Management</td>
							<td><span class="tickgreen"><i class="fas fa-check"></span></td>
							<td><span class="tickgreen"><i class="fas fa-check"></span></td>
							<td><span class="tickblue"><i class="fas fa-check"></span></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td colspan="3" style="width: 100%;">Free Transactional SMS</td>
						</tr>
						<tr class="compare-row">
							<td>Free Transactional SMS</td>
							<td><span class="tickgreen"><i class="fas fa-check"></span></td>
							<td><span class="tickgreen"><i class="fas fa-check"></span></td>
							<td><span class="tickblue"><i class="fas fa-check"></span></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td colspan="3" style="width: 100%;">Standard Dashboard</td>
						</tr>
						<tr>
							<td>Standard Dashboard</td>
							<td><span class="tickgreen"><i class="fas fa-check"></span></td>
							<td><span class="tickgreen"><i class="fas fa-check"></span></td>
							<td><span class="tickblue"><i class="fas fa-check"></span></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td colspan="3" style="width: 100%;">Integrated SMS</td>
						</tr>
						<tr class="compare-row">
							<td>Integrated SMS</td>
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
							<td>Multiple Dashboard</td>
							<td><span class="crossred"><i class="fas fa-times"></span></td>
							<td><span class="crossred"><i class="fas fa-times"></span></td>
							<td><span class="tickblue"><i class="fas fa-check"></span></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td colspan="3" style="width: 100%;">University Agreement</td>
						</tr>
						<tr class="compare-row">
							<td>University Agreement</td>
							<td><span class="crossred"><i class="fas fa-times"></span></td>
							<td><span class="crossred"><i class="fas fa-times"></span></td>
							<td><span class="tickblue"><i class="fas fa-check"></span></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td colspan="3" style="width: 100%;">Student Login</td>
						</tr>
						<tr>
							<td>Student Login</td>
							<td><span class="crossred"><i class="fas fa-times"></span></td>
							<td><span class="crossred"><i class="fas fa-times"></span></td>
							<td><span class="tickblue"><i class="fas fa-check"></span></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td colspan="3" style="width: 100%;">Integration with website</td>
						</tr>
						<tr class="compare-row">
							<td>Integration with website</td>
							<td><span class="crossred"><i class="fas fa-times"></span></td>
							<td><span class="crossred"><i class="fas fa-times"></span></td>
							<td><span class="tickblue"><i class="fas fa-check"></span></td>
						</tr>


					</tbody>
					<thead>
						<tr>

							<th colspan="4" class="qbo">
								LEAD MANAGEMENT
							</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>&nbsp;</td>
							<td colspan="3" style="width: 100%;">Enquiry Register</td>
						</tr>
						<tr class="compare-row">
							<td>Enquiry Register</td>
							<td><span class="tickgreen">200</span></td>
							<td><span class="tickgreen">500</span></td>
							<td><span class="tickblue">UNLIMITED</span></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td colspan="3" style="width: 100%;">Pending Leads</td>
						</tr>
						<tr>
							<td>Pending Leads</td>
							<td><span class="tickgreen"><i class="fas fa-check"></i></span></td>
							<td><span class="tickgreen"><i class="fas fa-check"></i></span></td>
							<td><span class="tickblue"><i class="fas fa-check"></i></span></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td colspan="3" style="width: 100%;">File Upload</td>
						</tr>
						<tr class="compare-row">
							<td>File Upload</td>
							<td><span class="tickgreen"><i class="fas fa-check"></i></span></td>
							<td><span class="tickgreen"><i class="fas fa-check"></i></span></td>
							<td><span class="tickblue"><i class="fas fa-check"></i></span></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td colspan="3" style="width: 100%;">Unassigned Works</td>
						</tr>
						<tr>
							<td>Unassigned Works</td>
							<td><span class="tickgreen"><i class="fas fa-check"></i></span></td>
							<td><span class="tickgreen"><i class="fas fa-check"></i></span></td>
							<td><span class="tickblue"><i class="fas fa-check"></i></span></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td colspan="3" style="width: 100%;">Enquiry Report</td>
						</tr>
						<tr class="compare-row">
							<td>Enquiry Report</td>
							<td><span class="tickgreen"><i class="fas fa-check"></i></span></td>
							<td><span class="tickgreen"><i class="fas fa-check"></i></span></td>
							<td><span class="tickblue"><i class="fas fa-check"></i></span></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td colspan="3" style="width: 100%;">Enquiry Mail Config</td>
						</tr>
						<tr>
							<td>Enquiry Mail Config</td>
							<td><span class="tickgreen">2</span></td>
							<td><span class="tickgreen">3</span></td>
							<td><span class="tickblue">UNLIMITED</span></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td colspan="3" style="width: 100%;">Investment Analyser</td>
						</tr>
						<tr class="compare-row">
							<td>Investment Analyser</td>
							<td><span class="tickgreen"><i class="fas fa-check"></i></span></td>
							<td><span class="tickgreen"><i class="fas fa-check"></i></span></td>
							<td><span class="tickblue"><i class="fas fa-check"></i></span></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td colspan="3" style="width: 100%;">Performance Analyser</td>
						</tr>
						<tr>
							<td>Performance Analyser</td>
							<td><span class="tickgreen"><i class="fas fa-check"></i></span></td>
							<td><span class="tickgreen"><i class="fas fa-check"></i></span></td>
							<td><span class="tickblue"><i class="fas fa-check"></i></span></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td colspan="3" style="width: 100%;">Plugings</td>
						</tr>
						<tr class="compare-row">
							<td>Plugings</td>
							<td><span class="tickgreen"><i class="fas fa-check"></i></span></td>
							<td><span class="tickgreen"><i class="fas fa-check"></i></span></td>
							<td><span class="tickblue"><i class="fas fa-check"></i></span></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td colspan="3" style="width: 100%;">Free Registration</td>
						</tr>
						<tr class="compare-row">
							<td colspan="4" style="background-color: #3bacf0;text-align: -webkit-center;"><a href="register.php" class="tickets_btn">Free Trial</a></td>
						</tr>
					</tbody>
				</table>

			</div>
		</div>
	</section>
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