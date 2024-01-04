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
    <?php commonHeader_seo(); ?>

    <!-- popup -->
    <!--<div class="bts-popup" role="alert" style="overflow: auto;margin-top: 0px;">-->
    <!--    <div class="bts-popup-container" style="background: #ecebed;">-->
    <!--        <img src="img/offer.png" alt="" width="80%" />-->
    <!--        <p style="font-size: 20px;-->
    <!--    font-weight: bold;margin-bottom: 0;padding: 0px 0px;color: #3ca4f3;-->
    <!--    font-family: "Heebo", sans-serif;">-->
    <!--        <a title="8072787919" href="tel:8072787919"><img src="img/incoming-call.gif" style="width: 100px;padding-top: 0px;"></a>-<a title="8072787919" href="tel:8072787919" tabindex="0" style="color: black;">&nbsp;8072787919</a></p>-->
    <!--        <a href="#0" class="bts-popup-close img-replace" style="color: black;">Close</a>-->
    <!--    </div>-->
    <!--</div>-->

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
                            <th colspan="5" class="qbo">
                                Get Started Now
                            </th>
                        </tr>
                        <tr>
                            <th class="compare-heading">
                                Pages
                            </th>
                            <th class="compare-heading">
                                STARTUP
                            </th>
                            <th class="compare-heading">
                                PREMIUM
                            </th>
                            <th class="compare-heading">
                                ENTERPRISE
                            </th>
                            <th class="compare-heading">
                                UNLIMITED <br>
                                ( CALL FOR PRICE )
                            </th>
                        </tr>
                        <tr id="dollar" class="nonetoggle">
                            <th></th>
                            <th class="price-info">
                                <div class="price-now"><span>$105<span class="price-small">.52 </span><span class="price-tax">+ GST</span>
                                        <p class="price-type">per user / month</p>
                                    </span></div>
                                <div><a href="register_dev.php?plan='lite'" class="price-buy">Buy <span class="hide-mobile">Now</span></a>
                                    <p class="min_user">**NOTE MINIMUM 4 USERS </p>
                                </div>

                            </th>
                            <th class="price-info">
                                <div class="price-now"><span>$211<span class="price-small">.04</span><span class="price-tax">+ GST</span>
                                        <p class="price-type">per user / month</p>
                                    </span></div>
                                <div><a href="register_dev.php?plan='premium'" class="price-buy">Buy <span class="hide-mobile">Now</span></a>
                                    <p class="min_user">**NOTE MINIMUM 4 USERS </p>
                                </div>
                            </th>
                            <th class="price-info">
                                <div class="price-now"><span>$351<span class="price-small">.74</span><span class="price-tax">+ GST</span>
                                        <p class="price-type">per user / month</p>
                                    </span></div>
                                <div><a href="register_dev.php?plan='enterprise'" class="price-buy">Buy <span class="hide-mobile">Now</span></a>
                                    <p class="min_user">**NOTE MINIMUM 4 USERS </p>
                                </div>
                            </th>
                            <th class="price-info">
                                <div class="price-now"><span>Negotiable<span class="price-tax">+ GST</span>
                                        <p class="price-type">per user / month</p>
                                    </span></div>
                                <div><a href="register_dev.php?plan='unlimited'" class="price-buy">Buy <span class="hide-mobile">Now</span></a>
                                    <p class="min_user">**NOTE MINIMUM 4 USERS </p>
                                </div>
                            </th>
                        </tr>
                        <tr id="rupee" class="">
                            <th></th>
                            <th class="price-info">
                                <div class="price-now"><span>&#2352;7500 <span class="price-small">.00 </span><span class="price-tax">+ GST</span>
                                        <p class="price-type">per user / month</p>
                                    </span></div>
                                <div><a href="register_dev.php?plan='lite'" class="price-buy">Buy <span class="hide-mobile">Now</span></a>
                                    <!--                            <p class="min_user">**NOTE MINIMUM 4 USERS </p>-->
                                </div>

                            </th>
                            <th class="price-info">
                                <div class="price-now"><span>&#2352;15000<span class="price-small">.00 </span><span class="price-tax">+ GST</span>
                                        <p class="price-type">per user / month</p>
                                    </span></div>
                                <div><a href="register_dev.php?plan='premium'" class="price-buy">Buy <span class="hide-mobile">Now</span></a>
                                    <!--                            <p class="min_user">**NOTE MINIMUM 4 USERS </p>-->
                                </div>
                            </th>
                            <th class="price-info">
                                <div class="price-now"><span>&#2352;25000<span class="price-small">.00</span><span class="price-tax">+ GST</span>
                                        <p class="price-type">per user / month</p>
                                    </span></div>
                                <div><a href="register_dev.php?plan='enterprise'" class="price-buy">Buy <span class="hide-mobile">Now</span></a>
                                    <!--                            <p class="min_user">**NOTE MINIMUM 4 USERS </p>-->
                                </div>
                            </th>
                            <th class="price-info">
                                <div class="price-now"><span>Negotiable<span class="price-tax">+ GST</span>
                                        <p class="price-type">per user / month</p>
                                    </span></div>
                                <div><a href="register_dev.php?plan='unlimited'" class="price-buy">Buy <span class="hide-mobile">Now</span></a>
                                    <!--                            <p class="min_user">**NOTE MINIMUM 4 USERS </p>-->
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody id="focus">
                        <tr>
                            <td style="color:Red;"><i class="fas fa-times"></i></td>
                            <td colspan="4" style="width: 100%;">Domain name</td>
                        </tr>
                        <tr class="compare-row">
                            <td>Domain name</td>
                            <td style="color:#009E2C;"><i class="fas fa-check"></i></td>
                            <td style="color:#009E2C;"><i class="fas fa-check"></i></td>
                            <td style="color:#0078C1;"><i class="fas fa-check"></i></td>
                            <td style="color:#0078C1;"><i class="fas fa-check"></i></td>
                        </tr>
                        <tr>
                            <td style="color:Red;"><i class="fas fa-times"></i></td>
                            <td colspan="4" style="width: 100%;">Hosting</td>
                        </tr>
                        <tr class="compare-row">
                            <td>Hosting</td>
                            <td style="color:#009E2C;"><i class="fas fa-check"></i></td>
                            <td style="color:#009E2C;"><i class="fas fa-check"></i></td>
                            <td style="color:#0078C1;"><i class="fas fa-check"></i></td>
                            <td style="color:#0078C1;"><i class="fas fa-check"></i></td>
                        </tr>
                        <tr>
                            <td style="color:Red;"><i class="fas fa-times"></i></td>
                            <td colspan="4" style="width: 100%;">Home Page</td>
                        </tr>
                        <tr class="compare-row">
                            <td>Home Page</td>
                            <td style="color:#009E2C;"><i class="fas fa-check"></i></td>
                            <td style="color:#009E2C;"><i class="fas fa-check"></i></td>
                            <td style="color:#0078C1;"><i class="fas fa-check"></i></td>
                            <td style="color:#0078C1;"><i class="fas fa-check"></i></td>
                        </tr>
                        <tr>
                            <td style="color:Red;"><i class="fas fa-times"></i></td>
                            <td colspan="4" style="width: 100%;">About Us</td>
                        </tr>
                        <tr class="compare-row">
                            <td>About Us</td>
                            <td style="color:#009E2C;"><i class="fas fa-check"></i></td>
                            <td style="color:#009E2C;"><i class="fas fa-check"></i></td>
                            <td style="color:#0078C1;"><i class="fas fa-check"></i></td>
                            <td style="color:#0078C1;"><i class="fas fa-check"></i></td>
                        </tr>
                        <tr>
                            <td style="color:Red;"><i class="fas fa-times"></i></td>
                            <td colspan="4" style="width: 100%;">Services</td>
                        </tr>
                        <tr class="compare-row">
                            <td>Services</td>
                            <td style="color:#009E2C;"><i class="fas fa-check"></i></td>
                            <td style="color:#009E2C;"><i class="fas fa-check"></i></td>
                            <td style="color:#0078C1;"><i class="fas fa-check"></i></td>
                            <td style="color:#0078C1;"><i class="fas fa-check"></i></td>
                        </tr>
                        <tr>
                            <td style="color:Red;"><i class="fas fa-times"></i></td>
                            <td colspan="4" style="width: 100%;">Contact us</td>
                        </tr>
                        <tr class="compare-row">
                            <td>Contact us</td>
                            <td style="color:#009E2C;"><i class="fas fa-check"></i></td>
                            <td style="color:#009E2C;"><i class="fas fa-check"></i></td>
                            <td style="color:#0078C1;"><i class="fas fa-check"></i></td>
                            <td style="color:#0078C1;"><i class="fas fa-check"></i></td>
                        </tr>
                        <tr>
                            <td style="color:Red;"><i class="fas fa-times"></i></td>
                            <td colspan="4" style="width: 100%;">Photo Gallery</td>
                        </tr>
                        <tr class="compare-row">
                            <td>Photo Gallery</td>
                            <td style="color:#009E2C;"><i class="fas fa-check"></i></td>
                            <td style="color:#009E2C;"><i class="fas fa-check"></i></td>
                            <td style="color:#0078C1;"><i class="fas fa-check"></i></td>
                            <td style="color:#0078C1;"><i class="fas fa-check"></i></td>
                        </tr>
                        <tr>
                            <td style="color:Red;"><i class="fas fa-times"></i></td>
                            <td colspan="4" style="width: 100%;">Maps</td>
                        </tr>
                        <tr class="compare-row">
                            <td>Maps</td>
                            <td style="color:#009E2C;"><i class="fas fa-check"></i></td>
                            <td style="color:#009E2C;"><i class="fas fa-check"></i></td>
                            <td style="color:#0078C1;"><i class="fas fa-check"></i></td>
                            <td style="color:#0078C1;"><i class="fas fa-check"></i></td>
                        </tr>

                        <tr>
                            <td>&nbsp;</td>
                            <td colspan="4" style="width: 100%;">Corporate Email</td>
                        </tr>
                        <tr class="compare-row">
                            <td>Corporate Email ID</td>
                            <td><span class="crossred"><i class="fas fa-times"></span></td>
                            <td><span class="tickgreen">Charges apply</span></td>
                            <td><span class="tickgreen">10 Emails free</span></td>
                            <td style="color:#0078C1;"><i class="fas fa-check"></i></td>
                        </tr>

                        <tr>
                            <td>&nbsp;</td>
                            <td colspan="4" style="width: 100%;">Portfolio</td>
                        </tr>
                        <tr class="compare-row">
                            <td>Portfolio</td>
                            <td><span class="crossred"><i class="fas fa-times"></span></td>
                            <td style="color:#009E2C;"><i class="fas fa-check"></i></td>
                            <td style="color:#0078C1;"><i class="fas fa-check"></i></td>
                            <td style="color:#0078C1;"><i class="fas fa-check"></i></td>
                        </tr>

                        <tr>
                            <td>&nbsp;</td>
                            <td colspan="4" style="width: 100%;">Products Page</td>
                        </tr>
                        <tr class="compare-row">
                            <td>Products Page</td>
                            <td><span class="crossred"><i class="fas fa-times"></span></td>
                            <td style="color:#009E2C;"><i class="fas fa-check"></i></td>
                            <td style="color:#0078C1;"><i class="fas fa-check"></i></td>
                            <td style="color:#0078C1;"><i class="fas fa-check"></i></td>
                        </tr>

                        <tr>
                            <td>&nbsp;</td>
                            <td colspan="4" style="width: 100%;">Video Gallery</td>
                        </tr>
                        <tr class="compare-row">
                            <td>Video Gallery</td>
                            <td><span class="crossred"><i class="fas fa-times"></span></td>
                            <td style="color:#009E2C;"><i class="fas fa-check"></i></td>
                            <td style="color:#0078C1;"><i class="fas fa-check"></i></td>
                            <td style="color:#0078C1;"><i class="fas fa-check"></i></td>
                        </tr>

                        <tr>
                            <td>&nbsp;</td>
                            <td colspan="4" style="width: 100%;">Social Media Integration</td>
                        </tr>
                        <tr class="compare-row">
                            <td>Social Media Integration</td>
                            <td><span class="crossred"><i class="fas fa-times"></span></td>
                            <td style="color:#009E2C;"><i class="fas fa-check"></i></td>
                            <td style="color:#0078C1;"><i class="fas fa-check"></i></td>
                            <td style="color:#0078C1;"><i class="fas fa-check"></i></td>
                        </tr>

                        <tr>
                            <td>&nbsp;</td>
                            <td colspan="4" style="width: 100%;">FAQ Page</td>
                        </tr>
                        <tr class="compare-row">
                            <td>FAQ Page</td>
                            <td><span class="crossred"><i class="fas fa-times"></span></td>
                            <td style="color:#009E2C;"><i class="fas fa-check"></i></td>
                            <td style="color:#0078C1;"><i class="fas fa-check"></i></td>
                            <td style="color:#0078C1;"><i class="fas fa-check"></i></td>
                        </tr>

                        <tr>
                            <td>&nbsp;</td>
                            <td colspan="4" style="width: 100%;">Testimonials</td>
                        </tr>
                        <tr class="compare-row">
                            <td>Testimonials</td>
                            <td><span class="crossred"><i class="fas fa-times"></span></td>
                            <td style="color:#009E2C;"><i class="fas fa-check"></i></td>
                            <td style="color:#0078C1;"><i class="fas fa-check"></i></td>
                            <td style="color:#0078C1;"><i class="fas fa-check"></i></td>
                        </tr>

                        <tr>
                            <td>&nbsp;</td>
                            <td colspan="4" style="width: 100%;">Latest News</td>
                        </tr>
                        <tr class="compare-row">
                            <td>Latest News</td>
                            <td><span class="crossred"><i class="fas fa-times"></span></td>
                            <td style="color:#009E2C;"><i class="fas fa-check"></i></td>
                            <td style="color:#0078C1;"><i class="fas fa-check"></i></td>
                            <td style="color:#0078C1;"><i class="fas fa-check"></i></td>
                        </tr>

                        <tr>
                            <td>&nbsp;</td>
                            <td colspan="4" style="width: 100%;">Privacy Policy Page</td>
                        </tr>
                        <tr class="compare-row">
                            <td>Privacy Policy Page</td>
                            <td><span class="crossred"><i class="fas fa-times"></span></td>
                            <td style="color:#009E2C;"><i class="fas fa-check"></i></td>
                            <td style="color:#0078C1;"><i class="fas fa-check"></i></td>
                            <td style="color:#0078C1;"><i class="fas fa-check"></i></td>
                        </tr>

                        <tr>
                            <td>&nbsp;</td>
                            <td colspan="4" style="width: 100%;">Terms and Conditions Page</td>
                        </tr>
                        <tr class="compare-row">
                            <td>Terms and Conditions Page</td>
                            <td><span class="crossred"><i class="fas fa-times"></span></td>
                            <td style="color:#009E2C;"><i class="fas fa-check"></i></td>
                            <td style="color:#0078C1;"><i class="fas fa-check"></i></td>
                            <td style="color:#0078C1;"><i class="fas fa-check"></i></td>
                        </tr>

                        <tr>
                            <td>&nbsp;</td>
                            <td colspan="4" style="width: 100%;">Page not found page</td>
                        </tr>
                        <tr class="compare-row">
                            <td>Page not found page</td>
                            <td><span class="crossred"><i class="fas fa-times"></span></td>
                            <td style="color:#009E2C;"><i class="fas fa-check"></i></td>
                            <td style="color:#0078C1;"><i class="fas fa-check"></i></td>
                            <td style="color:#0078C1;"><i class="fas fa-check"></i></td>
                        </tr>

                        <tr>
                            <td>&nbsp;</td>
                            <td colspan="4" style="width: 100%;">Sitemap Page</td>
                        </tr>
                        <tr class="compare-row">
                            <td>Sitemap Page</td>
                            <td><span class="crossred"><i class="fas fa-times"></span></td>
                            <td><span class="crossred"><i class="fas fa-times"></span></td>
                            <td style="color:#0078C1;"><i class="fas fa-check"></i></td>
                            <td style="color:#0078C1;"><i class="fas fa-check"></i></td>
                        </tr>

                        <tr>
                            <td>&nbsp;</td>
                            <td colspan="4" style="width: 100%;">Career</td>
                        </tr>
                        <tr class="compare-row">
                            <td>Career</td>
                            <td><span class="crossred"><i class="fas fa-times"></span></td>
                            <td><span class="crossred"><i class="fas fa-times"></span></td>
                            <td style="color:#0078C1;"><i class="fas fa-check"></i></td>
                            <td style="color:#0078C1;"><i class="fas fa-check"></i></td>
                        </tr>

                        <tr>
                            <td>&nbsp;</td>
                            <td colspan="4" style="width: 100%;">Blog</td>
                        </tr>
                        <tr class="compare-row">
                            <td>Blog</td>
                            <td><span class="crossred"><i class="fas fa-times"></span></td>
                            <td><span class="crossred"><i class="fas fa-times"></span></td>
                            <td style="color:#0078C1;"><i class="fas fa-check"></i></td>
                            <td style="color:#0078C1;"><i class="fas fa-check"></i></td>
                        </tr>

                        <tr>
                            <td>&nbsp;</td>
                            <td colspan="4" style="width: 100%;">Custom page</td>
                        </tr>
                        <tr class="compare-row">
                            <td>Custom page</td>
                            <td><span class="tickgreen">Charges apply</span></td>
                            <td><span class="tickgreen">Charges apply</span></td>
                            <td><span class="tickgreen">Charges apply</span></td>
                            <td style="color:#0078C1;"><i class="fas fa-check"></i></td>
                        </tr>


                    </tbody>


                    <thead>
                        <tr>

                            <th colspan="5" class="qbo">
                                Admin Panel
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td style="color:Red;"><i class="fas fa-times"></i></td>
                            <td colspan="4" style="width: 100%;">About Us</td>
                        </tr>
                        <tr class="compare-row">
                            <td>About Us</td>
                            <td><span class="crossred"><i class="fas fa-times"></span></td>

                            <td style="color:#009E2C;"><i class="fas fa-check"></i></td>
                            <td style="color:#0078C1;"><i class="fas fa-check"></i></td>
                            <td style="color:#0078C1;"><i class="fas fa-check"></i></td>
                        </tr>
                        <tr>
                            <td style="color:Red;"><i class="fas fa-times"></i></td>
                            <td colspan="4" style="width: 100%;">Services</td>
                        </tr>
                        <tr class="compare-row">
                            <td>Services</td>
                            <td><span class="crossred"><i class="fas fa-times"></span></td>

                            <td style="color:#009E2C;"><i class="fas fa-check"></i></td>
                            <td style="color:#0078C1;"><i class="fas fa-check"></i></td>
                            <td style="color:#0078C1;"><i class="fas fa-check"></i></td>
                        </tr>

                        <tr>
                            <td style="color:Red;"><i class="fas fa-times"></i></td>
                            <td colspan="4" style="width: 100%;">Photo Gallery</td>
                        </tr>
                        <tr class="compare-row">
                            <td>Photo Gallery</td>
                            <td><span class="crossred"><i class="fas fa-times"></span></td>

                            <td style="color:#009E2C;"><i class="fas fa-check"></i></td>
                            <td style="color:#0078C1;"><i class="fas fa-check"></i></td>
                            <td style="color:#0078C1;"><i class="fas fa-check"></i></td>
                        </tr>



                        <tr>
                            <td>&nbsp;</td>
                            <td colspan="4" style="width: 100%;">Portfolio</td>
                        </tr>
                        <tr class="compare-row">
                            <td>Portfolio</td>
                            <td><span class="crossred"><i class="fas fa-times"></span></td>
                            <td><span class="crossred"><i class="fas fa-times"></span></td>


                            <td style="color:#0078C1;"><i class="fas fa-check"></i></td>
                            <td style="color:#0078C1;"><i class="fas fa-check"></i></td>
                        </tr>

                        <tr>
                            <td>&nbsp;</td>
                            <td colspan="4" style="width: 100%;">Products Page</td>
                        </tr>
                        <tr class="compare-row">
                            <td>Products Page</td>
                            <td><span class="crossred"><i class="fas fa-times"></span></td>

                            <td><span class="crossred"><i class="fas fa-times"></span></td>

                            <td style="color:#0078C1;"><i class="fas fa-check"></i></td>
                            <td style="color:#0078C1;"><i class="fas fa-check"></i></td>
                        </tr>

                        <tr>
                            <td>&nbsp;</td>
                            <td colspan="4" style="width: 100%;">Video Gallery</td>
                        </tr>
                        <tr class="compare-row">
                            <td>Video Gallery</td>
                            <td><span class="crossred"><i class="fas fa-times"></span></td>
                            <td><span class="crossred"><i class="fas fa-times"></span></td>

                            <td style="color:#0078C1;"><i class="fas fa-check"></i></td>
                            <td style="color:#0078C1;"><i class="fas fa-check"></i></td>
                        </tr>

                        <tr>
                            <td>&nbsp;</td>
                            <td colspan="4" style="width: 100%;">Social Media Integration</td>
                        </tr>
                        <tr class="compare-row">
                            <td>Social Media Integration</td>
                            <td><span class="crossred"><i class="fas fa-times"></span></td>
                            <td><span class="crossred"><i class="fas fa-times"></span></td>

                            <td style="color:#0078C1;"><i class="fas fa-check"></i></td>
                            <td style="color:#0078C1;"><i class="fas fa-check"></i></td>
                        </tr>

                        <tr>
                            <td>&nbsp;</td>
                            <td colspan="4" style="width: 100%;">FAQ Page</td>
                        </tr>
                        <tr class="compare-row">
                            <td>FAQ Page</td>
                            <td><span class="crossred"><i class="fas fa-times"></span></td>
                            <td><span class="crossred"><i class="fas fa-times"></span></td>

                            <td style="color:#0078C1;"><i class="fas fa-check"></i></td>
                            <td style="color:#0078C1;"><i class="fas fa-check"></i></td>
                        </tr>


                        <tr>
                            <td>&nbsp;</td>
                            <td colspan="4" style="width: 100%;">Latest News</td>
                        </tr>
                        <tr class="compare-row">
                            <td>Latest News</td>
                            <td><span class="crossred"><i class="fas fa-times"></span></td>
                            <td><span class="crossred"><i class="fas fa-times"></span></td>

                            <td style="color:#0078C1;"><i class="fas fa-check"></i></td>
                            <td style="color:#0078C1;"><i class="fas fa-check"></i></td>
                        </tr>


                        <tr>
                            <td>&nbsp;</td>
                            <td colspan="4" style="width: 100%;">Career</td>
                        </tr>
                        <tr class="compare-row">
                            <td>Career</td>
                            <td><span class="crossred"><i class="fas fa-times"></span></td>
                            <td><span class="crossred"><i class="fas fa-times"></span></td>
                            <td style="color:#0078C1;"><i class="fas fa-check"></i></td>
                            <td style="color:#0078C1;"><i class="fas fa-check"></i></td>
                        </tr>

                        <tr>
                            <td>&nbsp;</td>
                            <td colspan="4" style="width: 100%;">Blog</td>
                        </tr>
                        <tr class="compare-row">
                            <td>Blog</td>
                            <td><span class="crossred"><i class="fas fa-times"></span></td>
                            <td><span class="crossred"><i class="fas fa-times"></span></td>
                            <td style="color:#0078C1;"><i class="fas fa-check"></i></td>
                            <td style="color:#0078C1;"><i class="fas fa-check"></i></td>
                        </tr>

                        <tr>
                            <td>&nbsp;</td>
                            <td colspan="4" style="width: 100%;">Custom page</td>
                        </tr>
                        <tr class="compare-row">
                            <td>Custom page</td>
                            <td><span class="tickgreen">Charges apply</span></td>
                            <td><span class="tickgreen">Charges apply</span></td>
                            <td><span class="tickgreen">Charges apply</span></td>
                            <td style="color:#0078C1;"><i class="fas fa-check"></i></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td colspan="4" style="width: 100%;"><a href="web_register_dev.php" style="color: #777777;">Free Registration</a></td>
                        </tr>
                        <tr class="compare-row">
                            <td colspan="5" style="background-color: #3bacf0;text-align: -webkit-center;"><a href="web_register_dev.php" class="tickets_btn">Free Trial</a></td>
                        </tr>


                    </tbody>


                </table>

            </div>
        </div>
    </section>
    <!--================End Price Area =================-->

    <!--================Impress Area =================-->
    <?php //commonGotImpressed(); 
    ?>
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