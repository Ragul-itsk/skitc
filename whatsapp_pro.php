<?php
// require_once("Includes/product_head.php");
require_once("Includes/wp_head.php");
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
</head>

<body>
	<?php commonHeader(); ?>


	<!-- popup -->
	<div class="bts-popup" role="alert">
		<div class="bts-popup-container">
			<img src="img/new_n/wap_popup.gif" alt="" width="80%" />
			<p style="font-size: 20px;
    font-weight: bold;
    font-family: " Heebo", sans-serif;">WhatsApp Marketing Software</p>
			<div class="bts-popup-button">
				<a href="free_try_form.php">Free Download</a>
			</div>
			<a href="#0" class="bts-popup-close img-replace">Close</a>
		</div>
	</div>

	<script type="text/javascript">
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


	<!--================ Home Banner Area =================-->
	<section class="home_banner_area">
		<div class="banner_inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-5">
						<div class="banner_content">
							<h2>WhatsApp Marketing Software</h2>
							<p>Grow your business with fastest, cheapest and trendy way of Marketing with 100% result oriented.</p>
							<!-- <a class="banner_btn" href="pricing.php">Get Started</a> -->
							<a class="banner_btn2" href="free_try_form.php">Free Download</a>
						</div>
					</div>
					<div class="col-lg-7">
						<div class="home_left_img">
							<img class="img-fluid" src="img/new_n/whap_ban.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Home Banner Area =================-->

	<!--================Work Area =================-->
	<section class="work_area p_120">
		<div class="container">
			<div class="main_title">
				<h2>HOW IT WORKS</h2>
				<p style="max-width: 750px;">Our team at SKITC OPC Private Limited is highly equipped with talented and innovative professionals. Our teams are well trained for using WhatsApp Bulk sender sofware as a marketing tool to the best of their ability. At SKITC OPC Private Limited, we provide 24x7 support to your WhatsApp bulk sender service. Below are the key features that we practice at SKITC OPC Private Limited that makes us stand out from others

				</p>




			</div>
			<div class="work_inner row">
				<div class="col-lg-4">
					<div class="work_item">
						<i class="lnr lnr-screen"></i>
						<a href="#">
							<h4>Innovative</h4>
						</a>
						<p>We SKITC OPC Private Limited are an innovative Whatsapp bulk messaging service Provider Company in Chennai focusing on providing a cost efficient business solution.</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="work_item">
						<i class="lnr lnr-lock"></i>
						<a href="#">
							<h4>Personalized</h4>
						</a>
						<p>WhatsApp bulk sender is really a great tool for messaging. Whatsapp bulk sender has proved to be an excellent tool to increase your sales.</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="work_item">
						<i class="lnr lnr-envelope"></i>
						<a href="#">
							<h4>Global</h4>
						</a>
						<p>Whatsapp bulk sender is undoubtedly the world's fastest growing communication apps. Billions of people around the world are active WhatsApp users. By active we mean, these are the users who share billions of photos, videos every single day.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Work Area =================-->

	<!--================Made Life Area =================
        <section class="made_life_area p_120">
        	<div class="container">
        		<div class="made_life_inner">
					<ul class="nav nav-tabs" id="myTab" role="tablist">
						<li class="nav-item">
						<a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Easy to use</a>
						</li>
						<li class="nav-item">
						<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Unlimited Colors</a>
						</li>
						<li class="nav-item">
						<a class="nav-link active" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Unique Features</a>
						</li>
						<li class="nav-item">
						<a class="nav-link" id="edge-tab" data-toggle="tab" href="#edge" role="tab" aria-controls="edge" aria-selected="false">Unique Features</a>
						</li>
					</ul>
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
							<div class="row made_life_text">
								<div class="col-lg-6">
									<div class="left_side_text">
										<h3>We’ve made a life <br />that will change you</h3>
										<h6>We are here to listen from you deliver exellence</h6>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
										<a class="main_btn" href="#">Get Started Now</a>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="chart_img">
										<img class="img-fluid" src="img/chart.jpg" alt="">
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
							<div class="row made_life_text">
								<div class="col-lg-6">
									<div class="left_side_text">
										<h3>We’ve made a life <br />that will change you</h3>
										<h6>We are here to listen from you deliver exellence</h6>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
										<a class="main_btn" href="#">Get Started Now</a>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="chart_img">
										<img class="img-fluid" src="img/chart.jpg" alt="">
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade show active" id="contact" role="tabpanel" aria-labelledby="contact-tab">
							<div class="row made_life_text">
								<div class="col-lg-6">
									<div class="left_side_text">
										<h3>We’ve made a life <br />that will change you</h3>
										<h6>We are here to listen from you deliver exellence</h6>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
										<a class="main_btn" href="#">Get Started Now</a>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="chart_img">
										<img class="img-fluid" src="img/chart.jpg" alt="">
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="edge" role="tabpanel" aria-labelledby="edge-tab">
							<div class="row made_life_text">
								<div class="col-lg-6">
									<div class="left_side_text">
										<h3>We’ve made a life <br />that will change you</h3>
										<h6>We are here to listen from you deliver exellence</h6>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
										<a class="main_btn" href="#">Get Started Now</a>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="chart_img">
										<img class="img-fluid" src="img/chart.jpg" alt="">
									</div>
								</div>
							</div>
						</div>
					</div>
        		</div>
        	</div>
        </section>
        <!--================End Made Life Area =================-->

	<!--================Made Life Area =================-->
	<section class="made_life_area p_120">
		<div class="container">
			<div class="made_life_inner">
				<div class="row made_life_text">
					<div class="col-lg-6">
						<div class="left_side_text">
							<!-- <h3>24 / 7<br />Support Services</h3> -->
							<h3>Support All File Format</h3>
							<h6>We are here to listen from you deliver excellence</h6>
							<p>Keeping our clients happy is key to helping them succeed through technology.</p>
							<br>
							1. 100% Delivery on WhatsApp Number <br>
							2. Separate User ID Password <br>
							3. Schedule SMS Feature <br>
							4. Entire interface is build considering the customer edge. <br>
							5. 24x7 Support in case any queries by means of Call, SMS, and Email <br>
							6. One to One Messaging for support / sales functions <br>
							7. Managing Chats using Labels <br>
							8. Share business Information in form of catalogs, Videos, Documents <br>
							9. Global reach and accessibility <br>
							10. Accessible from all phones such as Android and iOS <br>
							11. Send upto 10 Lac messages in a day <br>
							12. Support for all language <br>
							13. Affordable cost <br>
							14. Redundant networks for sending messages <br>
							15. Instant delivery of messages <br>




							<a class="main_btn" href="free_try_form.php">Get Started Now</a>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="chart_img">
							<img class="img-fluid" src="img/new_n/whap_2.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Made Life Area =================-->

	<!--================Screen Area =================-->
	<section class="screen_area text-center p_120">
		<div class="container">
			<div class="main_title">
				<h2>Send invitations for conferences, meetings and events</h2>
				<p></p>
			</div>
			<img class="img-fluid" src="img/new_n/whap_3.png" alt="">
		</div>
	</section>
	<!--================End Screen Area =================-->





	<!--================Testimonials Area =================-->
	<section class="testimonials_area p_120">
		<div class="container">
			<div class="main_title">
				<h2>Feedback from Customers</h2>
				<!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>-->
			</div>
			<div class="testi_slider owl-carousel">
				<div class="item">
					<div class="testi_item">
						<div class="media">
							<div class="d-flex">
								<img src="img/m.png" alt="" style="width:80px; height:80px;">
							</div>
							<div class="media-body">
								<p>Good Product Working awesome.Best for communication. Good Support team....!</p>
								<h4>Manaquest</h4>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-half-o"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="testi_item">
						<div class="media">
							<div class="d-flex">
								<img src="img/g.jpg" alt="" style="width:80px; height:80px;">
							</div>
							<div class="media-body">
								<p>Very helpful for me and my employees to manage the student details. </p>
								<h4>Goodwill</h4>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-half-o"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Testimonials Area =================-->

	<!--================Made Life Area =================-->
	<section class="made_life_area made_white p_120">
		<div class="container">
			<div class="made_life_inner">
				<div class="row made_life_text">
					<div class="col-lg-6">
						<div class="chart_img">
							<img class="img-fluid" src="img/new_n/whap_3.png" alt="">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="left_side_text">
							<h3>Support for Multiple Media Formats like </h3>
							1. Text <br>
							2. Images <br>
							3. Videos <br>
							4. Audio <br>
							5. vCards <br>
							6. Documents <br>
							7. Location <br>
							<h3>Major Advantages are:</h3>
							1. 99% + People read your message <br>
							2. Can send long Messages <br>
							3. No DND issue, will be delivered to all number <br>
							4. Highest ROI <br>
							5. Can be sent globally <br>
							6. Ability to track the Status of the Message <br>
							<!-- <h6>We are here to listen from you deliver excellence</h6> -->
							<!-- <p>Attractive User interface.</p> -->
							<a class="main_btn" href="free_try_form.php">Get Started Now</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Made Life Area =================-->

	<!--================Impress Area =================-->
	<?php commonGotImpressed(); ?>
	<!--================End Impress Area =================-->
	<?php commonFooter(); ?>
	<?php commonScripts(); ?>






</body>

</html>