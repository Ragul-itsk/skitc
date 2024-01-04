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

    <style>
        b,
        sup,
        sub,
        u,
        del {
            color: #777777 !important;
        }
    </style>
    <!--================Header Menu Area =================-->

    <!--================Home Banner Area =================-->
    <section class="banner_area" style="min-height: 180px;">
        <div class="banner_inner d-flex align-items-center" style="min-height: 180px;">
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Refund Policy</h2>
                    <div class="page_link">
                        <a href="index.php">Home</a>
                        <a href="refund_policy.php">Refund Policy</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Contact Area =================-->
    <section class="contact_area p_110">
        <div class="container">
            <br><br>
            <!-- <h2 style="text-align: center;"><b>PRIVACY POLICY</b></h2> -->


            <h3><b>Returns</b></h3>

            <p>Our policy lasts 6 days. If 6 days have gone from the date of service availed, unfortunately, we can’t offer you a refund or exchange.

                To complete your return, we require a receipt or proof of purchase.
            </p>

            <h3><b>Late or Missing Refunds</b></h3>

            <p>
                If you haven’t received a refund yet, first check your bank account again.

                Then contact your credit card company, it may take some time before your refund is officially posted.

                Next, contact your bank. There is often some processing time before a refund is posted.

                If you’ve done all of this and you still have not received your refund yet, please contact us at info@itsk.in

            </p>

            <br><br>
        </div>
    </section>
    <!--================Contact Area =================-->

    <!--================Footer Area =================-->
    <?php commonFooter(); ?>
    <!--================End Footer Area =================-->

    <!--================Contact Success and Error message Area =================
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
        </div>-->

    <!-- Modals error 

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
        </div>-->
    <!--================End Contact Success and Error message Area =================-->




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php commonScripts(); ?>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/contact.js"></script>
</body>

</html>