<?php
// require_once("Includes/commonFunctions.php");
// require_once("Includes/product_head.php");
require_once("Includes/forallin_head.php");
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
            <img src="img/new_n/for_gif.gif" alt="" width="80%" />
            <p style="font-size: 20px;
    font-weight: bold;margin-bottom: 0;
    font-family: " Heebo", sans-serif;">Forallin - Free Trial</p>
            <div class="bts-popup-button">
                <input type="text" class="fld mobile_nym" name="mobile number" placeholder="Mobile number" onkeypress="return event.charCode > 47 && event.charCode < 58;" maxlength="10" required>
                <input type="hidden" name="sw_n" class="sw_n" value="forallin">
                <input type="button" class="subm " name="" value="Submit">
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
                            <img src="img/for_logo.png">
                            <br>
                            <!--                        <h2>User Friendly OMS<br />-->
                            <!-- Overseas Software -->

                            </h2>
                            <p>For all in is a search engine that claims to be everything that provides organic and general search results.
                                So just build and promote your brand. </p>
                            <!--                        <a class="banner_btn" href="pricing.php">Get Started</a>-->
                            <a class="banner_btn2" href="tel:9677174012">Call Now</a>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="home_left_img">
                            <img class="img-fluid" src="img/banner/for_1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Work Area =================-->
    <section class="work_area p_120">
        <div class="container over_p">
            <div class="main_title">
                <h2>How It work for you</h2>
                <p style="max-width: 900px;
    text-align: justify;">
                    For all in is a search engine that claims to be everything that provides organic and general search results.
                    So just build and promote your brand.
                    It's everything you care for all in one place like Schools, Shops, IT Firms, News, sports, entertainment and
                    finance etc., right at your fingertips. Catch up on your needs and get know the info about them by
                    searching here. It's your own personalized experience for all in one destination to complete without any
                    difficulties.

                </p>
                <p style="    text-align: justify;">
                    1) For all in let you search and get to know your needed information within a second without any
                    trouble. <br>
                    2) You can also promote your all sorts of business. <br>
                    3) It helps to improve the relationship between you and your customers. <br>
                    4) It helps to market your product without any difficulties at a lowest cost of price.
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
    <section class="made_life_area p_120">
        <div class="container">
            <div class="made_life_inner">
                <div class="row made_life_text">
                    <div class="col-lg-6">
                        <div class="left_side_text">
                            <h3>We build brands people love </h3>
                            <h6 class="mydes">We are creators, coders, dreamers and doers pouring our hearts and smarts into building brands—ours
                                and yours—that deliver on the passions of 1Billion global fans. </h6>
                            <p>
                                <b>Advantages:</b> <br>
                                1) SKITC is a company, they but the product of FOR ALL IN that provides local searches for different
                                service in India over the internet. <br>
                                2) You get the information about everything be it business, a service provider, about Doctors, about
                                the hotels and about anything. <br>
                                3) At last if your business listed in FOR ALL IN you will be getting “ready to buy” customer. <br>
                                4) The website provides an instant visual presentation of your organization to those who can access
                                the internet, and because 80-95% of all website traffic comes from search engines and these are
                                available on 24/7/365. <br>
                                5) It is very easy to market your product by marketing your website as you can increase your reach
                                by advertising on for all in. <br>
                                6) There is no external interference and therefore you have direct access to the potential customer
                                base and can handle leads more conveniently. <br>
                                7) For all in website improves customer relationship with you. <br>
                                8) The website can target each visitor specifically and interact with a well-designed interface if it
                                has following technical features like giving accurate GPS location on the contact page, etc.<br>
                                9) Location-based search bar helps in avoiding deviation of referred customers.
                            </p>
                            <!--                        <a class="main_btn" href="register.php">Get Started Now</a>-->
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="chart_img">
                            <img class="img-fluid" src="img/banner/for_5.png" alt="">
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
                <h2>Unique Dashboard that work perfectly</h2>
                <p></p>
            </div>
            <img class="img-fluid" src="img/banner/for_4.png" alt="">
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
                                <img src="img/clients/overseas/ovs/imtp.jpg" alt="" style="width:100px; height:80px;">
                            </div>
                            <div class="media-body">
                                <p>SKITC Overseas Software is known to develop the best overseas institute and consultancy management system. The software seamlessly integrates the various functional modules required to operate an educational institution. Plus, its user-friendly dashboard and well-structured reports are hard to miss.</p>
                                <h4>IMTP CONSULTANCY</h4>
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
                                <p>I strongly recommend overseas management software because it is designed to serve the needs of overseas consultancy and also the institutions. This software will help you from assigning tasks to managing fees structure, and automating inventory management, it does it all. It is very easy to use and definitely you will love this software because it reduces half of your work.</p>
                                <h4>My MBBS Abroad Educational Services</h4>
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
                                <p>I like that we are able to send mass emails and create different lists of people. We have over 40,000 people in our database, and we are able to sort them into different groups, using different attributes. We can even put some people into multiple emails. It's simple to sort and organize our database so that we are sending the right content to the right people.</p>
                                <h4>Manaquest Training Solutions</h4>
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
                                <p>Overseas software is a comprehensive overseas education consultancy management solution that seamlessly integrates different departments of a consultancy. It provides amazing features that is well-defined in terms of access controls and workflow-based design. More importantly, it is easy to operate with very less training.</p>
                                <h4>Haritha Overseas Education Consultants LLP</h4>
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
                                <p>Overseas software has played an important role in standardizing our program. We now managing more than 15,000 student database by using its features. The functionalities we've added have evolved overseas software beyond just lead and contact management to more of a complete operational platform.</p>
                                <h4>Edu Life Abroad</h4>
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
                                <p>From using overseas software, we have managed to capture data in a more versatile way and have also minimized our work cycle. It gives us more visibility of how our business is moving and makes us much more efficient.</p>
                                <h4>Gyaan Overseas Education</h4>
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
                                <img src="img/clients/overseas/ovs/55.png" alt="" style="width:100px; height:80px;">
                            </div>
                            <div class="media-body">
                                <p>Switching to overseas software has made us more efficient at a much lower cost. Most importantly, the managing our student details process was painless and took only less time.</p>
                                <h4>Reya Consultancy Services Pvt Ltd</h4>
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
                                <img src="img/clients/overseas/ovs/66.png" alt="" style="width:100px; height:80px;">
                            </div>
                            <div class="media-body">
                                <p>Overseas software empowers small to large-sized organizations with a complete customer and student relationship lifecycle management solution for managing organization-wide Sales, Customer Support & Service and Inventory Management in a single business system.</p>
                                <h4>TAFNE Overseas Education Pvt Ltd</h4>
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
                                <img src="img/clients/overseas/ovs/77.png" alt="" style="width:100px; height:80px;">
                            </div>
                            <div class="media-body">
                                <p>It is easy to use and customizable software to boost business revenue and task performance. Overseas software adds value at all stages of the management process from helping you capture & identify top leads, nurture schedules via automated email & SMS, collaborate with teammates, analyze & forecast revenue, streamline meetings, spot deals at risk, manage proposals, and ultimately win more deals.</p>
                                <h4>Score Getter</h4>
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
                            <img class="img-fluid" src="img/banner/for_3.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="left_side_text">
                            <h3>We’ve made a Product <br />that will reduce your work</h3>
                            <h6>We are here to listen from you deliver excellence</h6>
                            <p>Attractive User interface.</p>
                            <!--                        <a class="main_btn" href="register.php">Get Started Now</a>-->
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