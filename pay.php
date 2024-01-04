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
        input[type=text],
        input[type=password],
        input[type=email] {
            background: #ffffff;
        }

        @media (max-width: 765px) {
            .p_120 {
                padding-top: 50px !important;
            }
        }

        @media (max-width: 991px) {
            .contact_info {
                margin-bottom: 0;
            }
        }

        .p_120 {
            padding-top: 50px;
            padding-bottom: 50px;
        }

        .inner_div {
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            padding: 20px 20px 20px 20px;
        }

        .wrapper {
            width: 450px;
            /* background: #fff; */
            padding: 30px;
            /* box-shadow: 0px 0px 10px rgba(0,0,0,0.1); */
        }

        .wrapper .input-data {
            height: 60px;
            width: 100%;
            position: relative;
        }

        .wrapper .input-data input {
            height: 100%;
            width: 100%;
            border: none;
            font-size: 17px;
            border-bottom: 2px solid silver;
        }

        .input-data input:focus~label,
        .input-data input:valid~label {
            transform: translateY(-20px);
            font-size: 15px;
            color: grey;
        }

        .wrapper .input-data label {
            position: absolute;
            bottom: 10px;
            left: 0;
            color: grey;
            pointer-events: none;
            transition: all 0.3s ease;
        }

        .input-data .underline {
            position: absolute;
            height: 2px;
            width: 100%;
            bottom: 0;
        }

        .input-data .underline:before {
            position: absolute;
            content: "";
            height: 100%;
            width: 100%;
            background: #4158d0;
            transform: scaleX(0);
            transform-origin: center;
            transition: transform 0.3s ease;
        }

        .input-data input:focus~.underline:before,
        .input-data input:valid~.underline:before {
            /* transform: scaleX(1); */

        }

        .input-data input:focus {
            background: #ffffff;
        }

        /* input:hover {
  border: 1px solid black;
} */

        /* Change the white to any color */
        input:-webkit-autofill,
        input:-webkit-autofill:hover,
        input:-webkit-autofill:focus,
        input:-webkit-autofill:active {
            -webkit-box-shadow: 0 0 0 30px white inset !important;
        }

        input[type=text],
        input[type=password],
        input[type=email] {
            padding: 25px 0px 0px 0px;
        }

        @media (max-width: 768px) {
            .banner_content {
                padding-top: 8% !important;
            }
        }

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
    <!-- <section class="banner_area" style="min-height: 180px;">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center" style= "padding-top:8%;    text-align: center;">
						<h2>Online Payment</h2>
						<div class="page_link">
							<a href="index.php">Home</a>
							<a href="pay.php">PAY</a>
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
                    <div class="col-lg-12 ">
                        <div class="banner_content pd-15-cent text-center">
                            <h2>Online Payment</h2>
                            <!-- <div class="page_link" style="color:white;">
							<a href="index.php">Home</a>
							<a href="pay.php">PAY</a>
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
                <div class="col-lg-3">
                </div>
                <div class="col-lg-6">
                    <div class="inner_div">
                        <div class="contact_info">
                            <h3>Online Payment</h3>
                        </div>
                        <!-- <form class="row contact_form" action="http://localhost:8000/payment_redirect/" method="get" > -->
                        <form class="row contact_form" action="https://jiboomba.in/payment_redirect/" method="get">
                            <div class="col-md-12 wrapper">
                                <div class="form-group input-data">
                                    <input type="text" class="" id="name" name="name" placeholder="" required>
                                    <div class="underline"></div>
                                    <label>Name</label>
                                </div>
                                <div class="form-group input-data">
                                    <input type="text" class="" id="email" name="email" placeholder="" required>
                                    <div class="underline"></div>
                                    <label>Email</label>
                                </div>
                                <div class="form-group input-data">
                                    <input type="text" class="" oninput="mobileValid();" maxlength="15" id="mobileno" name="mobileno" placeholder="" required>
                                    <div class="underline"></div>
                                    <label>Mobile Number</label>
                                </div>
                                <div class="form-group input-data">
                                    <input type="text" class="" id="purpose" name="purpose" placeholder="" required>
                                    <div class="underline"></div>
                                    <label>Purpose</label>
                                </div>
                                <div class="form-group input-data">
                                    <input type="text" class="" oninput="amount_valid();" maxlength="10" id="amount" name="amount" placeholder="" required>
                                    <div class="underline"></div>
                                    <label>Amount <span id="min_alert" style="visibility: hidden;">* Min Amount 10 Rs </span></label>
                                </div>
                                <div class="form-group" style="text-align: center;">
                                    <button type="button" value="submit" id="check_btn" class="btn submit_btn">Pay Now</button>
                                    <button type="submit" style="display:none;" value="" id="submit_btn" class="btn submit_btn">Pay Now</button>
                                </div>
                            </div>

                    </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-3">
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

    <script>
        $("#check_btn").click(function() {
            var amount = $("#amount").val();
            if (amount < 10) {

                $("#min_alert").css("color", "red");
                $("#min_alert").css("visibility", "visible");
                var explode = function() {
                    $("#min_alert").css("visibility", "hidden");
                };
                setTimeout(explode, 4000);

                return false();
            } else {
                $("#submit_btn").click();
            }


        })

        // $("#amount").keyup(function(){
        //     var amount=$("#amount").val();
        //     if(amount<10){

        //         $("#min_alert").css("color","red");
        //         var explode = function(){
        //           $("#min_alert").css("color","grey");
        //         };
        //         setTimeout(explode, 2000);

        //         return false();
        //     }


        // })


        function mobileValid() {
            var textInput = document.getElementById("mobileno").value;
            textInput = textInput.replace(/[^0-9]/g, "");
            document.getElementById("mobileno").value = textInput;
        }

        function amount_valid() {
            var textInput = document.getElementById("amount").value;
            textInput = textInput.replace(/[^0-9]/g, "");
            document.getElementById("amount").value = textInput;
        }
    </script>

</body>

</html>