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
    <style>
        .pd-15-cent {
            padding-top: 13%;
            text-align: center;
        }
    </style>
</head>

<body>

    <!--================Header Menu Area =================-->
    <?php commonHeader(); ?>
    <!--================Header Menu Area =================-->

    <!--================Home Banner Area =================-->
    <!-- <section class="banner_area" >
            <div class="banner_inner d-flex align-items-center" style="min-height: 180px;">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center" style= "padding-top:8%;    text-align: center;">
						<h2>CONTACT US</h2>
						<div class="page_link">
							<a href="index.php">Home</a>
							<a href="contact.php">CONTACT</a>
						</div>
						
					</div>
				</div>
            </div>
        </section> -->
    <!--================End Home Banner Area =================-->

    <!--================ Home Banner Area =================-->
    <section class="home_banner_area" style="height: 14rem;">
        <div class="banner_inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner_content pd-15-cent text-center">
                            <h2>CONTACT US</h2>
                            <!-- <div class="page_link">
							<a href="index.php">Home</a>
							<a href="contact.php">CONTACT</a>
						</div> -->
                        </div>
                    </div>
                    <!-- <div class="col-lg-7">
							<div class="home_left_img">
								<img class="img-fluid" src="img/banner/home-left-1.png" alt="">
							</div>
						</div> -->
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Contact Area =================-->
    <section class="contact_area p_120">
        <div class="container">
            <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d785.5720540377223!2d80.20740827145575!3d13.048782148696434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbcb405d05c54937f!2sSK+IT+CORPORATE+OPC+PRIVATE+LIMITED!5e1!3m2!1sen!2sin!4v1542979135928" style="width:100%;min-height: 300px;max-height: 300px;" frameborder="0" style="border:0" allowfullscreen></iframe>
                <div class="row" style="margin-top:3%;">-->
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact_info">
                        <div class="info_item">

                            <i class="lnr lnr-home"></i>
                            <h6>Headquarter</h6>
                            <p>No 19 Kamarajar Street,
                                Pallikaranai , 
                                Chennai 600100</p>
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-phone-handset"></i>
                            <h6><a href="#">8072787919</a></h6>
                            <p>Mon to Sat 9am to 6 pm</p>
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-envelope"></i>
                            <h6><a href="#">support@itsk.in</a></h6>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email Address">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" id="message" rows="1" placeholder="Enter Message"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" value="submit" class="btn submit_btn">Send Message</button>
                            </div>
                        </div>

                </div>
                </form>
            </div>
        </div>
        </div>
    </section>
    <!--================Contact Area =================-->

    <!--================Footer Area =================-->
    <?php commonFooter(); ?>
    <!--================End Footer Area =================-->

    <!--================Contact Success and Error message Area =================-->
    <div id="success" class="modal modal-message fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fa fa-close"></i>
                    </button>
                    <h2>Thank you</h2>
                    <p>Your message is successfully sent...</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modals error -->

    <div id="error" class="modal modal-message fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fa fa-close"></i>
                    </button>
                    <h2>Sorry !</h2>
                    <p> Something went wrong </p>
                </div>
            </div>
        </div>
    </div>
    <!--================End Contact Success and Error message Area =================-->




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php commonScripts(); ?>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/contact.js"></script>
</body>

</html>