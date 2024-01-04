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
</head>

<body>

    <!--================Header Menu Area =================-->
    <?php commonHeader(); ?>
    <!--================Header Menu Area =================-->

    <!--================Home Banner Area =================-->
    <section class="banner_area" style="min-height: 180px;">
        <div class="banner_inner d-flex align-items-center" style="min-height: 180px;">
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="banner_content text-center">
                    <h2>CONTACT US</h2>
                    <div class="page_link">
                        <a href="index.php">Home</a>
                        <a href="contact.php">CONTACT</a>
                    </div>

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
                            <p>No.172, 3rd Floor, Raahat Plaza, Arcot Road, Vadapalani, Chennai, <br> Tamil Nadu - 600026</p>
                        </div>
                        <div class="info_item">

                            <i class="lnr lnr-home"></i>
                            <h6>Research & Developing Center</h6>
                            <p>No.37, Kamaraj Salai, Thattanchavady, <br> Puducherry - 605009</p>
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-phone-handset"></i>
                            <h6><a href="#">08072787919</a></h6>
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
                    <form class="row contact_form" action="action_api.php" method="post" id="" novalidate="novalidate">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="course_complt" name="course_complt" placeholder="course_complt">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="contact" name="contact" placeholder="contact">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="alt_contact" name="alt_contact" placeholder="alt_contact">
                            </div>

                            <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email Address">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="app_country_id" name="app_country_id" placeholder="app_country_id">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="city" name="city" placeholder="city">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="address" name="address" placeholder="address">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="course" name="course" placeholder="course">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="intake" name="intake" placeholder="intake">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="intake_year" name="intake_year" placeholder="intake_year">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="institute" name="institute" placeholder="institute">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="enq_source" name="enq_source" placeholder="enq_source">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="enq_status" name="enq_status" placeholder="enq_source">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="yop" name="yop" placeholder="yop">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="gcpa" name="gcpa" placeholder="gcpa">
                            </div>

                            <div class="form-group">
                                <textarea class="form-control" name="remarks" id="remarks" rows="1" placeholder="Enter remarks"></textarea>
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