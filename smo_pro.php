<?php
// require_once("Includes/commonFunctions.php");
// require_once("Includes/product_head.php");
require_once("Includes/smo_product_head.php");
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
    <div class="bts-popup" role="alert" style="overflow: auto;margin-top: 0px;">
        <div class="bts-popup-container">
            <img src="img/new_n/smo_gif.gif" alt="" width="80%" />
            <p style="font-size: 20px;
    font-weight: bold;margin-bottom: 0;
    font-family: " Heebo", sans-serif;">Social Media Optimization</p>
            <div class="bts-popup-button">
                <!-- <a href="free_try_form.php">Free Download</a> -->
                <!-- <form method="post"> -->
                <input type="text" class="fld mobile_nym" name="mobile number" placeholder="Mobile number" onkeypress="return event.charCode > 47 && event.charCode < 58;" maxlength="10" required>
                <input type="hidden" name="sw_n" class="sw_n" value="Social Media Optimization">
                <input type="button" class="subm " name="" value="Submit">
                <!-- </form> -->
                <b class="res_alt" style="display: none;color: green;">send successfully..!</b>
            </div>
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


    <!--================ Home Banner Area =================-->
    <section class="home_banner_area">
        <div class="banner_inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="banner_content ovr_logo">
                            <!--                        <img src="img/ovr_logo3.png" >-->
                            <!--                        <br>-->
                            <h2>Social Media Optimization<br />
                                <!-- Overseas Software -->

                            </h2>
                            <p>Online networking Optimization is an awesome hotspot for movement era. The online
                                networking channels enable you to achieve clients around the world. </p>
                            <a class="banner_btn" href="pricing_dev.php">Get Started</a>
                            <a class="banner_btn2" href="tel:9677174012">Call Now</a>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="home_left_img" style="padding-top: 25%;
    padding-bottom: 25%;">
                            <img class="img-fluid" src="img/banner/smo.gif" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Work Area =================-->
    <section class="work_area p_120" style="padding-bottom: 0;">
        <div class="container over_p">
            <div class="main_title">
                <h2>How It work for you</h2>
                <p style="max-width: 900px;
    text-align: justify;">Online networking Optimization is an awesome hotspot for movement era. The online
                    networking channels enable you to achieve clients around the world. Taking advantage of the
                    web-based social networking, we use diverse strategies to promote the Social Media Platforms.
                    The internet searchers advertising help in enhancing the positioning on the web indexes. Benefits
                    of SMO for your business.</p> <br>
                <p style="    text-align: justify;">
                    1) Improves Search Engine Ranking <br>
                    2) Lead Generation <br>
                    3) Get high traffic to your website <br>
                    4) Huge reach and Business Exposure.
                </p>
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

    <!--================End Made Life Area =================-->




    <section class="made_life_area made_white p_120" style="padding-top: 0;">
        <div class="container">
            <div class="made_life_inner">
                <div class="row made_life_text">
                    <div class="col-lg-6">
                        <div class="chart_img">
                            <img class="img-fluid" src="img/smo_gif.gif" alt="" style="    max-width: 75%;
    /* left: 50%; */
    margin: 0 0 0 25px;">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="left_side_text">
                            <h3>Social Media Optimization</h3>
                            <h6 class="mydes">Creating online content that is shared through popular social media website. The social media
                                traffic is tracked by using Google Analytics which provides best digital marketing services.</h6>
                            <p>
                                WE PROVIDE: <br>
                                1) Increase website traffic.<br>
                                2) Increase the popularity among the clients.<br>
                                3) Helps in generating inbound links.<br>
                                4) Increase online visibility. </p>
                            <a class="main_btn" href="register_dev.php">Get Started Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--================Screen Area =================-->

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
                                <img src="img/clients/overseas/ovs/imtp.jpg" alt="" style="width:100px; height:80px;">
                            </div>
                            <div class="media-body">
                                <p>SKITC is very energetic and dedicated for work. They always match strict deadlines without losing their creativity.</p>
                                <h4>CFMEE ACADEMY</h4>
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
                                <img src="img/clients/overseas/ovs/mymbbs.png" alt="" style="width:100px; height:80px;">
                            </div>
                            <div class="media-body">
                                <p>There are many people out there to know the design/development, but SKITC also knows how to deliver his customers. Their response time to questions is minutes-not hours or days or weeks. </p>
                                <h4>EDUTEL ACADEMY</h4>
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
                                <img src="img/clients/overseas/ovs/mts.png" alt="" style="width:100px; height:80px;">
                            </div>
                            <div class="media-body">
                                <p>I’ll highly recommend SKITC to anybody within online business space, considering to build a new website with attractive web design or enhancing the non-responsive sites that they have currently. </p>
                                <h4>THE TUTORS ACADEMY</h4>
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
                                <img src="img/clients/overseas/ovs/haritha.jpg" alt="" style="width:100px; height:80px;">
                            </div>
                            <div class="media-body">
                                <p>You made it so simple. My new site is so much faster and easier to work with than my old site. I just choose the page; make the change and click save. Thanks, guys!</p>
                                <h4>CR ACADEMY</h4>
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
                                <img src="img/clients/overseas/ovs/11.png" alt="" style="width:100px; height:80px;">
                            </div>
                            <div class="media-body">
                                <p>Having a website created by SKITC, I was able to increase my consumer base by 60percent! The professionalism and individualism of the customer service I received from SKITC are unique. </p>
                                <h4>AXENT ACADEMY</h4>
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
                                <img src="img/clients/overseas/ovs/22.png" alt="" style="width:100px; height:80px;">
                            </div>
                            <div class="media-body">
                                <p>I was pleasantly surprised and they delivered a really good web project and in a very short span of time, for a decent cost. Really appreciate their hard work and efforts.</p>
                                <h4>VLC INSTITUTE</h4>
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
                            <img class="img-fluid" src="img/banner/web_d_b2.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="left_side_text">
                            <h3>Our day-to-day responsibilities include</h3>
                            <!--                        <h6>We are here to listen from you deliver excellence</h6>-->
                            <p>
                                1) Doing regular posts in social media sites, <br>
                                2) Getting links to your website, <br>
                                3) Creating inbound links, <br>
                                4) Replying for Comments and Messages in the Social Media Sites like Facebook, Twitter,
                                Linked and etc, <br>
                                5) Listing Competitors Page and Analyzing their Posts, <br>
                                6) Monitoring Hash Tags related to Client Business.
                            </p>
                            <a class="main_btn" href="register_dev.php">Get Started Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Made Life Area =================-->

    <!--================Impress Area =================-->
    <?php //commonGotImpressed(); 
    ?>
    <!--================End Impress Area =================-->
    <?php commonFooter(); ?>
    <?php commonScripts(); ?>






</body>

</html>