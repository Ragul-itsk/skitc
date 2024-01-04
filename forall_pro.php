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
                            <br>
                            <p>For All In is an exclusive Web directory in Chennai for a business that claims to be everything that provides organic and general search results. So just build and promote your brand worldwide. </p>
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
                    1) For all in let you search and get to know your needed information within a second without any trouble. <br>
                    2) For all in holds descriptive business information with ratings and reviews with a location. <br>
                    3) For all in creates a strong profile with work photos, videos, client reviews to help buyers better understand your service. It helps to improve the relationship between you and your customers. <br>
                    4) It helps to market your product without any difficulties at affordable prices even for a premium listing.
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
                            <p>SKITC has a unique product FOR ALL IN that provides local searches for different services in India over the internet.</p>
                            <br>
                            1) Our free listing feature enables to list multiple businesses under different platforms. <br>
                            2) We enlist different information across various sectors like play school, overseas education, pet care, restaurants and much more. <br>
                            3) Location-based search bar helps in avoiding deviation of referred customers, For all in ensures extensible location search. <br>
                            4) The website provides an instant visual presentation of your organization to those who can access the internet, and because 80-95% of all website traffic comes from search engines and these are available on 24/7/365. <br>
                            5) It is very easy to market your product by marketing your website as you can increase your reach by advertising on for all in.<br>
                            6) Our service extends from providing address and contact details of business establishments around the country, to making orders and reservations for leisure, education, financial, and domestic purposes. <br>
                            7) There is no external interference and therefore you have direct access to the potential customer base and can handle leads more conveniently. <br>
                            8) The website can target each visitor specifically and interact with a well-designed interface if it
                            has following technical features like giving accurate GPS location on the contact page, etc.<br>
                            <!-- 9) Location-based search bar helps in avoiding deviation of referred customers. -->
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


    <section class="work_area p_120">
        <div class="container">
            <div class="main_title">
                <h2>FEATURED CATEGORIES</h2>
                <!-- <p>SKITC is a Business to business marketing company that offers full-service of view generation, data entry outsourcing, SEO, SMO and Complete Digital marketing Service provider. We help you exceed marketing and sales goals by deploying targeted prospecting campaigns that deliver huge number of views and opportunities to your pipe. </p> -->
            </div>
            <div class="work_inner row">
                <div class="col-lg-4">
                    <div class="work_item">
                        <i class="lnr lnr-apartment"></i>
                        <a href="#">
                            <h4>Playschool</h4>
                        </a>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="work_item">
                        <i class="lnr lnr-magic-wand"></i>
                        <a href="#">
                            <h4>Beauty Parlor</h4>
                        </a>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="work_item">
                        <i class="lnr lnr-home"></i>
                        <a href="#">
                            <h4>Pet Store</h4>
                        </a>

                    </div>
                </div>
            </div>
            <br>
            <div class="work_inner row">
                <div class="col-lg-4">
                    <div class="work_item">
                        <i class="lnr lnr-book"></i>
                        <a href="#">
                            <h4>Book Shop</h4>
                        </a>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="work_item">
                        <i class="lnr lnr-store"></i>
                        <a href="#">
                            <h4> Dance School</h4>
                        </a>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="work_item">
                        <i class="lnr lnr-users"></i>
                        <a href="#">
                            <h4>Preschool</h4>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="work_area">
        <div class="container">
            <div class="main_title">
                <h2>FEATURES</h2>
                <p><strong>Social Media Marketing Services</strong></p>
                <p>Get Traffic from Social Media Optimization & Pitch your required Audience:</p>
            </div>
            <div class="work_inner row">
                <div class="col-lg-3">
                    <div class="work_item">
                        <img src="img/sm4.png">
                        <!-- <i class="lnr lnr-screen"></i> -->
                        <a href="#">
                            <h4>Facebook Marketing Services</h4>
                        </a>
                        <p>We will help you to increase website traffic and develop brand awareness. We assure that your followers engaged with demographics and interest of the customers.</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="work_item">
                        <img src="img/sm3.png">
                        <a href="#">
                            <h4>Instagram Marketing Services</h4>
                        </a>
                        <p>We maintain Instagram accounts with eye-catching images and it is one of the most engaging social media platforms today. Start building your marketing avenue and reach your successful customers.</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="work_item">
                        <img src="img/sm2.png">
                        <a href="#">
                            <h4>Twitter Marketing Services</h4>
                        </a>
                        <p>Increase more engagement with Twitter. The number of twitter active users per day is 139 million by all ages worldwide. Use the leading social media platform to grow your business.</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="work_item">
                        <img src="img/sm1.png">
                        <a href="#">
                            <h4>LinkedIn Marketing Services</h4>
                        </a>
                        <p>Reach up to 500 million education professionals and active business owners to engage with the best professional social platform.</p>
                    </div>
                </div>

            </div>

        </div>


    </section>
    <section class="work_area p_120">
        <div class="container">
            <div class="main_title">
                <h2>Search Engine Optimization Services</h2>
                <p>Get More Website Traffic and New Customers with Professional SEO Services:</p>
            </div>
            <div class="work_inner row">
                <div class="col-lg-4 firstcol">
                    <div class="work_item">
                        <a href="#">
                            <h4>SEO Audit Report</h4>
                        </a>
                        <p>Our standard audits identify issues and opportunities and our reports prioritize the opportunities in an easily consistent format.</p>


                    </div>
                </div>

                <div class="col-lg-4 firstcol">
                    <div class="work_item">
                        <a href="#">
                            <h4>SEO for Startups and Small businesses websites</h4>
                        </a>
                        <p>Doing enterprise SEO on a small business budget can quickly reach the target audience and building a self-sustaining SEO strategy can lead to new markets.</p>

                    </div>
                </div>
                <div class="col-lg-4 ">
                    <div class="work_item">
                        <a href="#">
                            <h4>On-Site SEO</h4>
                        </a>
                        <p>We organize updated content with architecture, metadata based on keyword research with advanced Google tools and conversion-focused UX.</p>

                    </div>
                </div>
            </div>
        </div>
    </section>
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
                            <h6>Why Us Forallin</h6>
                            <p> 1) We are a full-service firm Optimization. <br>
                                2) Forallin saves your time in two ways: by eliminating the need to find information and relevant information.<br>
                                3) Advanced Search with the location: These options help make your searches more flexible, sophisticated and refine your results easily.<br>
                                4) Optimized exclusively for local searches<br>
                                5) Forallin offers business listing and complete provider of business promotions such as google ads, seo, and social media management.<br>
                                6) Affordable price for small business and startups.
                            </p>
                            <!--                        <a class="main_btn" href="register.php">Get Started Now</a>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Made Life Area =================-->
    <!--================Made Life Area =================-->
    <section class="made_life_area made_white">
        <div class="container">
            <div class="made_life_inner">
                <div class="row made_life_text">

                    <div class="col-lg-6">
                        <div class="right_side_text">
                            <h3>Promote your Business online</h3>
                            <h6>Has your company been listed in Forallin.com yet?</h6>
                            <p> Avail our free listings to promote your brand and business. Click on “Free add listing” to find a way into forallin.com. We are the best web directory in Chennai!<!--                        <a class="main_btn" href="register.php">Get Started Now</a>-->
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="left_side_text">
                            <h3>24/7 Customer Service</h3>
                            <p>We always listen to our customer needs & delight our customers <br> Want to grow business! Optimize your leads efficiently with us!</p>
                            <!-- <img class="img-fluid" src="img/banner/for_3.png" alt=""> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="work_area p_120">
        <div class="container">
            <div class="main_title">
                <h2>Google Ads</h2>
                <!-- <p>Get More Website Traffic and New Customers with Professional SEO Services:</p> -->
            </div>
            <div class="work_inner row">
                <div class="col-lg-4 firstcol">
                    <div class="work_item">
                        <a href="#">
                            <h4>Ad words works faster than SEO</h4>
                        </a>
                        <p> A well optimized ad words give you instant visibility at an instant cost, whereas SEO would give you long term success, depending on the quality content efforts. Ad words campaign can work much faster for a business to get the much coveted first spot in search.</p>


                    </div>
                </div>

                <div class="col-lg-4 firstcol">
                    <div class="work_item">
                        <a href="#">
                            <h4>Increase brand awareness</h4>
                        </a>
                        <p>Ad words lift brand awareness. Google Ad Words, in addition to boosting traffic, clicks, and conversions, is also an efficient way to tell people about your brand.</p>

                    </div>
                </div>

                <div class="col-lg-4 ">
                    <div class="work_item">
                        <a href="#">
                            <h4>Promote AD</h4>
                        </a>
                        <p><strong>Satisfied customers are our best ads</strong></p>
                        <p><strong>Register now!!</strong></p>
                        <p>Promote ad & Boost your Business listing top ranking in Forallin for all Business..! <br>
                            Enhance Global Optimisation.,Enroll Soon..!
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--================End Made Life Area =================-->

    <!--================Testimonials Area =================-->
    <section class="testimonials_area p_120">
        <div class="container">
            <div class="main_title">
                <h2>Feedback from Customers</h2>
                <p>We admire our smart customers!</p>
            </div>
            <div class="testi_slider owl-carousel">

                <div class="item">
                    <div class="testi_item">
                        <div class="media" style="min-height: 215px;">
                            <!--  <div class="d-flex">
                            <img src="img/clients/overseas/ovs/haritha.jpg" alt="" style="width:100px; height:80px;">
                        </div> -->
                            <div class="media-body">
                                <p>Waoh, I just checked out for all in and I must say I am really impressed. They have an amazing feature that restricts some of the unwanted search which makes it Ideal for kids coupled with their privacy search. The search is pretty faster than other local web directories. They are a great alternative. </p>
                                <!-- <h4>Haritha Overseas Education Consultants LLP</h4> -->
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
                        <div class="media" style="min-height: 215px;">
                            <!--  <div class="d-flex">
                            <img src="img/clients/overseas/ovs/11.png" alt="" style="width:100px; height:80px;">
                        </div> -->
                            <div class="media-body">
                                <p>For all in search is worth the time spent on it. Guess what? I wasn’t expecting the quality of service it provided. Very safe information with exact match.</p>
                                <!-- <h4>Edu Life Abroad</h4> -->
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
                        <div class="media" style="min-height: 215px;">
                            <!--  <div class="d-flex">
                            <img src="img/clients/overseas/ovs/22.png" alt="" style="width:100px; height:80px;">
                        </div> -->
                            <div class="media-body">
                                <p>For all in helps you turn information into action, making it faster and easier to go from searching to doing.</p>
                                <!-- <h4>Gyaan Overseas Education</h4> -->
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
                        <div class="media" style="min-height: 215px;">
                            <!--  <div class="d-flex">
                            <img src="img/clients/overseas/ovs/55.png" alt="" style="width:100px; height:80px;">
                        </div> -->
                            <div class="media-body">
                                <p>For all in is best for local searches, Awe! Really surprised with the keyword search and location options & feedback from customers.</p>
                                <!-- <h4>Reya Consultancy Services Pvt Ltd</h4> -->
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
                        <div class="media" style="min-height: 215px;">
                            <!-- <div class="d-flex">
                            <img src="img/clients/overseas/ovs/66.png" alt="" style="width:100px; height:80px;">
                        </div> -->
                            <div class="media-body">
                                <p>For all in creates a business profile with eye-catching work photos and attractive videos, I was very satisfied with their customer service too!</p>
                                <!-- <h4>TAFNE Overseas Education Pvt Ltd</h4> -->
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

    <!--================Impress Area =================-->
    <?php //commonGotImpressed(); 
    ?>
    <!--================End Impress Area =================-->
    <?php commonFooter(); ?>
    <?php commonScripts(); ?>






</body>

</html>