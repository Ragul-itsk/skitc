<?php
// require_once("Includes/commonFunctions.php");
// require_once("Includes/product_head.php");
require_once("Includes/web_dev_product_head.php");
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
            <img src="img/new_n/web_d_gif.gif" alt="" width="80%" />
            <p style="font-size: 20px;
    font-weight: bold;margin-bottom: 0;
    font-family: " Heebo", sans-serif;">Submit for Awesome Website</p>
            <div class="bts-popup-button">
                <!-- <a href="free_try_form.php">Free Download</a> -->
                <!-- <form method="post"> -->
                <input type="text" class="fld mobile_nym" name="mobile number" placeholder="Mobile number" onkeypress="return event.charCode > 47 && event.charCode < 58;" maxlength="10" required>
                <input type="hidden" name="sw_n" class="sw_n" value="Web Development and Designing">
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
                            <h1>Website Development Company in Chennai,India<br />
                                <!-- Overseas Software -->

                            </h1>
                            <p>SKITC is the best web-design and development company in Chennai having experts in
                                creating website that suits for your business. </p>
                            <a class="banner_btn" href="pricing_dev.php">Pricing</a>
                            <a class="banner_btn2" href="tel:+91 8072787919">Call Now</a>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="home_left_img">
                            <img class="img-fluid" src="img/banner/web_D_banner.png" alt="Website Development Company in Chennai,India">
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
                <h2>Web Designing and Development Company in Chennai</h2>
                <p style="max-width: 900px;text-align: justify;">SKITC is the best web-design and development company in Chennai having experts in creating website that suits for your business. <br>
                    With an inside and out information in innovation and tremendous experience bold it administrations is fit for taking care of any sort of web application regardless of how complex it is. <br>
                    There are a few phases in building up an application that fundamentally incorporates, system building, clear arranging, required research, business counseling, structure, programming, testing, and preparing. SKITC extraordinary compared to other Web Development Companies in Chennai go all through these procedures on an everyday premise and have effectively kept up its quality all through. Every one of our structures and improvements are done so that it is accessible worldwide. <br>
                    Our competency ranges in all the significant web innovation stage Wordpress, HTML, PHP, Magento, Dotnet, etc.</p>
            </div>
            <div class="main_title">
                <h2>How It work for you</h2>
                <p style="max-width: 900px;
    text-align: justify;">SKITC is the best web-design and development company in Chennai having experts in creating website that suits for your business. Our company develops a website that is perfect for you and your business.</p> <br>
                <p style="text-align: justify;">
                    1) We use latest technology coding standards for developing websites and user-friendly.<br>
                    2) Implementing innovative ideas.<br>
                    3) Maintaining quality standard.<br>
                    4) Delivering cost-effective solutions.<br>
                    5) We provide the complete web marketing solutions for different businesses.
                </p>
            </div>

            <div class="work_inner row ">
                <div class="col-lg-4">
                    <div class="work_item">
                        <i class="lnr lnr-screen"></i>
                        <a href="#">
                            <h4>Remarkably structured layouts</h4>
                        </a>
                        <p>Our designers will build up a particularly planned layout for the web composition to remain solitary among your rivals. It very well may be filled in as a decent method to forfeit an upper hand. Your site shows your own one of a kind style. </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="work_item">
                        <i class="lnr lnr-earth"></i>
                        <a href="#">
                            <h4>Search engine optimization Friendly </h4>
                        </a>
                        <p>Search engine optimization is imperative to each business those which seem on the web. Our creators and SEO experts will make your site an SEO well-disposed webpage that causes Google to peruse and see effectively what your site is about? Furthermore, we assist rank with fixing on Google.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="work_item">
                        <i class="lnr lnr-users"></i>
                        <a href="#">
                            <h4>Social</h4>
                        </a>
                        <p>Don't simply settle with a similar social catches. Appreciate an altered and customized way to deal with social sharing. We can assist you with a superior alternative for your site to arrive at worldwide through web based life catches!</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="work_item">
                        <i class="lnr lnr-tablet"></i>
                        <a href="#">
                            <h4>Responsive Site </h4>
                        </a>
                        <p>The ascent of cell phones and other cell phones are overwhelming the big screen gadgets. By remembering this, our architects make a site that reacts to or resizes itself relying upon the kind of gadgets like work areas, tablets, cell phones, and so on. </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="work_item">
                        <i class="lnr lnr-laptop-phone"></i>
                        <a href="#">
                            <h4>Tried on all Gadget and Programs </h4>
                        </a>
                        <p>When the web architecture and improvement process total, our group attempts to test your site on all the gadgets like (work areas, tablets, cell phones, and other cell phones, and so on.) and programs like (Google Chrome, Mozilla Firefox, Internet Explorer, and so forth.).</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="work_item">
                        <i class="lnr lnr-cross-circle"></i>
                        <a href="#">
                            <h4>No Hidden Fees or Website Ownership Clauses </h4>
                        </a>
                        <p>Some website composition organizations have contract statements that state on the off chance that you leave, you need to pay an enormous charge, or you won't get the opportunity to take your site with you. That is not the situation with us. When it's constructed, it's 100% yours.</p>
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
                            <h3>Website Designing Services in Chennai </h3>
                            <h6 class="mydes">Our Web designing team in SKITC create the perfect website for you. We understand
                                your business needs and customize design to suit your needs to help you stand out from the other
                                websites. </h6>
                            <p>
                                WE PROVIDE:<br>
                                1) Personalized and customized Solutions. <br>
                                2) User- Friendly Interface.<br>
                                3) Compatible with all the devices.<br>
                                4) Elegant/Unique design.<br>
                                5) For design formats we use both web JPG or PNG.<br>
                                6) Offline Boucher and banner designing.</p>
                            <a class="main_btn" href="register_dev.php">Get Started Now</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="chart_img">
                            <img class="img-fluid" src="img/web_des_gif.gif" alt="Website Designing Services in Chennai">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Made Life Area =================-->


    <section class="made_life_area made_white p_120">
        <div class="container">
            <div class="made_life_inner">
                <div class="row made_life_text">
                    <div class="col-lg-6">
                        <div class="chart_img">
                            <img class="img-fluid" src="img/web_d_gif.gif" alt="Website Development Services in Chennai">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="left_side_text">
                            <h3>Website Development Services in Chennai </h3>
                            <h6 class="mydes">We offer world class interactive web Development solutions. Our team has well knowledgeable
                                in open source technologies such as PHP and MySQL that make the website development
                                efficient.</h6>
                            <p>
                                WE PROVIDE: <br>
                                1) Provide Services to the potential clients.<br>
                                2) Web development services built on latest technologies. <br>
                                3) Built best custom website.<br>
                                4) Offer custom software development services for businesses and startups to engage users
                                efficiently.</p>
                            <a class="main_btn" href="register_dev.php">Get Started Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="made_life_area p_120">
        <div class="container">
            <div class="made_life_inner">
                <div class="row made_life_text">
                    <div class="col-lg-6">
                        <div class="left_side_text">
                            <h3>Corporate Website Design and Development in Chennai </h3>
                            <h6 class="mydes">SKITC vows to offer a one of a kind character to every single corporate customer with magnificent inventive and innovation, Our plan yield will be tasteful, altered, imaginative and usefulness are easy to understand in general our yield will doubtlessly upgrade the Brand Image of our customers. Alongside administrations and items, each site additionally grandstands the mentality, principles and customs of the organization. We make it simple for organizations to develop equipped corporate site nearness and convey their objectives. We to a great extent center on creating, advancing and showcasing sites effectively. </h6>
                            <p>
                                <!-- WE PROVIDE: <br> -->
                                1) Understanding Client's business and prerequisites<br>
                                2) Discussion of Competition Analysis<br>
                                3) Usage of a proper web technique <br>
                                4) Complete Web Architecture and Interface Design and improvement<br>
                                5) Phenomenal handcraft layouts as per the customer's necessities<br>
                                6) Content Management and Website Maintenance<br>
                                7) Responsive website optimization <br>
                                8) Simple site route <br>
                                9) Site enhancement for web search tools <br>
                                10) Meta tags for all your website pages <br>
                            </p>
                            <a class="main_btn" href="register_dev.php">Get Started Now</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="chart_img">
                            <img class="img-fluid" src="img/cwdwd.jpg" alt="Corporate Website Design and Development in Chennai">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="made_life_area made_white p_120">
        <div class="container">
            <div class="made_life_inner">
                <div class="row made_life_text">
                    <div class="col-lg-6">
                        <div class="chart_img">
                            <img class="img-fluid" src="img/smo_gif.gif" alt="Social Media Optimization" style="    max-width: 75%;
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

    <section class="made_life_area p_120">
        <div class="container">
            <div class="made_life_inner">
                <div class="row made_life_text">
                    <div class="col-lg-6">
                        <div class="left_side_text">
                            <h3>Search Engine Optimization</h3>
                            <h6 class="mydes">Our social media experts can help you establish your business objectives, identity your target
                                audience, create engaging and share-worthy content integrate your social media with all other of
                                your online presence. We ensure you that your website ranks 1st on the search engine and
                                increase your website’s traffic with our SEO. </h6>
                            <p>
                                WE PROVIDE: <br>
                                1) Maintain and improve page ranks of client websites.<br>
                                2) Analyzing campaigns vs. objectives and performing activities necessary to meet top-line
                                goals.<br>
                                3) Coordinating with the SEO lead in implementing on-page and off-page SEO strategies.<br>
                                4) Using free and paid tools to build keywords list, developing back link ideas and
                                implementing them.<br>
                                5) Researching, writing and editing SEO based content for website, blogs, and articles.<br>
                                6) Writing engaging content and establishing new ideas to create content that caters to
                                changing audience needs.<br>
                                7) Creating attractive marketing collaterals and distributing the content to different online
                                channels and social media platforms </p>
                            <a class="main_btn" href="register_dev.php">Get Started Now</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="chart_img">
                            <img class="img-fluid" src="img/seo_gif.gif" alt="Search Engine Optimization">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--================Screen Area =================-->
    <section class="screen_area text-center p_120">
        <div class="container">
            <div class="main_title">
                <h2>Unique Design For Your Website</h2>
                <p></p>
            </div>
            <img class="img-fluid" src="img/banner/web_d_3.png" alt="Unique Design For Your Website">
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
                            <img class="img-fluid" src="img/banner/web_d_b2.png" alt="Web Desigining and development company in chennai">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="left_side_text">
                            <h3>We’ve made a Product <br />that will reduce your work</h3>
                            <h6>We are here to listen from you deliver excellence</h6>
                            <!-- <p>Attractive User interface.</p> -->
                            <p>Keen on working with us? We couldn't imagine anything better than to examine any plan or improvement venture with you. Reach us today to begin! For all asks, kindly utilize our contact form, call us at +91-8072787919 or email us @itsk.in</p>
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