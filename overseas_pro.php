<?php
// require_once("Includes/commonFunctions.php");
// require_once("Includes/product_head.php");
require_once("Includes/over_product_head.php");
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
            <img src="img/new_n/overseas.gif" alt="" width="80%" />
            <p style="font-size: 20px;
    font-weight: bold;margin-bottom: 0;
    font-family: " Heebo", sans-serif;">Overseas Software - Free Trial</p>
            <div class="bts-popup-button">
                <!-- <a href="free_try_form.php">Free Download</a> -->
                <!-- <form method="post"> -->
                <input id="phone" type="text" class="fld mobile_nym" name="mobile number" placeholder="Mobile number" onkeypress="return event.charCode > 47 && event.charCode < 58;" maxlength="10" required>
                <input type="hidden" name="sw_n" class="sw_n" value="Overseas Software">
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
                            <img src="img/ovr_logo3.png">
                            <br>
                            <h2>User Friendly OMS<br />
                                <!-- Overseas Software -->

                            </h2>
                            <p>We provide free trial access to the system and our comprehensive videos will explain everything you want to know about it.</p>
                            <a class="banner_btn" href="pricing.php">Get Started</a>
                            <a class="banner_btn2" href="register.php">Free Trial</a>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="home_left_img">
                            <img class="img-fluid" src="img/banner/home-left-1.png" alt="">
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
    text-align: justify;">We are here to support your consultancy for smooth workflow and easy maintenance of your clients with the help of our overseas software. You can easily monitor Quick to find any document at any time, save a lot of your time by providing instant documents. No need to have one complete library and racks to keep student records like application form, student document, Institute offer letter, etc. The automation facility helps you to follow up your schedules and plans of the aspiring student leads and aid you to focus on increasing the business conversion ratio by generating ROI. Overseas software provides the 100% transparency of their work progress to the clients and ensures the trust with your Study abroad consultancy.</p>
                <p style="    text-align: justify;">
                    1) The Overseas Education Consultant Software can be customized as per your consultancy requirements, you can edit, add and remove the packages and training courses and their prices. <br>
                    2) Handling documents about the clients become very easy. <br>
                    3) Tracking of the documentation proceedings, detailing for the requirements of the clients. <br>
                    4) Maintaining records for the sensitive documents on the constraints of approval and rejection. <br>
                    5) Managing invoices and payments as well as agreements in the overseas software to maintain the updated data and assured services to the students. <br>
                    6) We are here to help you to deliver your excellence 24x7.  <br>
                    7) Search follow up updates by users or branches.
                </p>
            </div>
            <div class="work_inner row ">
                <div class="col-lg-4">
                    <div class="work_item">
                        <i class="lnr lnr-screen"></i>
                        <a href="#">
                            <h4>Dashboard</h4>
                        </a>
                        <p>Informative dashboard with today follow-up will be provided in the software, where user can come to know today work to do. Also it gives short view of your consultancy activities.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="work_item">
                        <i class="lnr lnr-magnifier"></i>
                        <a href="#">
                            <h4>Search courses</h4>
                        </a>
                        <p>To get everything you need to know about from courses to Institutions. It will help your students to find best course at their dream institute.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="work_item">
                        <i class="lnr lnr-chart-bars"></i>
                        <a href="#">
                            <h4>Lead Management</h4>
                        </a>
                        <p>User can add and manage leads efficiently. Enquires can be categorized on Enquiry source basis, you will get the standard reports by managing the file uploads, enquiry remainders, analyze the pending leads, enquiry report etc.</p>
                    </div>
                </div>
            </div>

            <div class="work_inner row ">
                <div class="col-lg-4">
                    <div class="work_item">
                        <i class="lnr lnr-calendar-full"></i>
                        <a href="#">
                            <h4>Register</h4>
                        </a>
                        <p>Overseas software helps you to add admin, student id format, new student details and also their documents.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="work_item">
                        <i class="lnr lnr-construction"></i>
                        <a href="#">
                            <h4>Report</h4>
                        </a>
                        <p>Overseas software let you to maintain and analyze the students reports like fees, admissions, staff, library, exam, cash inflow and outflow etc. in one go. All details are quite easy to find out and to be tracked.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="work_item">
                        <i class="lnr lnr-earth"></i>
                        <a href="#">
                            <h4>Branch Office</h4>
                        </a>
                        <p>Overseas software let you to add and maintain all your branch details, student details and also your staff details, etc without any difficulties. </p>
                    </div>
                </div>
            </div>

            <div class="work_inner row">
                <div class="col-lg-4">
                    <div class="work_item">
                        <i class="lnr lnr-graduation-hat"></i>
                        <a href="#">
                            <h4>Representing countries & institution</h4>
                        </a>
                        <p>Your students can easily find their dream institutes and their dream countries within a short time.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="work_item">
                        <i class="lnr lnr-envelope"></i>
                        <a href="#">
                            <h4>Email Management</h4>
                        </a>
                        <p>To save counselor time and manual writing mistakes we have added feature of emails management from Student and you.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="work_item">
                        <i class="lnr lnr-file-add"></i>
                        <a href="#">
                            <h4>Task Management</h4>
                        </a>
                        <p>You can follow up the new and existing student details here. Easily know to whom you need to follow up today.</p>
                    </div>
                </div>
            </div>

            <div class="work_inner row">
                <div class="col-lg-4">
                    <div class="work_item">
                        <i class="lnr lnr-cog"></i>
                        <a href="#">
                            <h4>Settings</h4>
                        </a>
                        <p>Software will take care of the each and every enquiry coming in the system. Proper follow-up will be maintained and reminder will be given to the particular person so you can add API, Reminder, Message content.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="work_item">
                        <i class="lnr lnr-hourglass"></i>
                        <a href="#">
                            <h4>Investment Analyzer</h4>
                        </a>
                        <p>Do follow-up from detailed page, summarized page or follow up page, as good follow up is which is going to make distinction between you and your competitors. </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="work_item">
                        <i class="lnr lnr-line-spacing"></i>
                        <a href="#">
                            <h4>Performance Analyzer</h4>
                        </a>
                        <p>With Overseas software you can automate processes and standardize your work flow. it will help you to easily communicate with others and reminds you at various points to ease your work. It will provide you history of students it also gives you report of your staff. It gives you true analytics about the company business at any point of time without asking anyone.</p>
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
        ================End Made Life Area =================-->

    <!--================Made Life Area =================-->
    <section class="made_life_area p_120">
        <div class="container">
            <div class="made_life_inner">
                <div class="row made_life_text">
                    <div class="col-lg-6">
                        <div class="left_side_text">
                            <h3>24 / 7<br />Support Services</h3>
                            <h6>We are here to listen from you deliver excellence</h6>
                            <p>Keeping our clients happy is key to helping them succeed through technology.</p>
                            <a class="main_btn" href="register.php">Get Started Now</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="chart_img">
                            <img class="img-fluid" src="img/browser.png" alt="">
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
            <img class="img-fluid" src="img/banner/home-left-1.png" alt="">
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
                                <h4>TAFNE Overseas Education Pvt Ltd</h4>
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
                                <p>It is easy to use and customizable software to boost business revenue and task performance. Overseas software adds value at all stages of the management process from helping you capture & identify top leads, nurture schedules via automated email & SMS, collaborate with teammates, analyze & forecast revenue, streamline meetings, spot deals at risk, manage proposals, and ultimately win more deals.</p>
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
                            <img class="img-fluid" src="img/banner/home-left-1.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="left_side_text">
                            <h3>We’ve made a Product <br />that will reduce your work</h3>
                            <h6>We are here to listen from you deliver excellence</h6>
                            <p>Attractive User interface.</p>
                            <a class="main_btn" href="register.php">Get Started Now</a>
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

    <script src="build/js/intlTelInput.js"></script>
    <script>
        var input = document.querySelector("#phone");
        window.intlTelInput(input, {
            // allowDropdown: false,
            // autoHideDialCode: false,
            // autoPlaceholder: "off",
            // dropdownContainer: document.body,
            // excludeCountries: ["us"],
            // formatOnDisplay: false,
            // geoIpLookup: function(callback) {
            //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
            //     var countryCode = (resp && resp.country) ? resp.country : "";
            //     callback(countryCode);
            //   });
            // },
            // hiddenInput: "full_number",
            // initialCountry: "auto",
            // localizedCountries: { 'de': 'Deutschland' },
            // nationalMode: false,
            // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
            // placeholderNumberType: "MOBILE",
            // preferredCountries: ['cn', 'jp'],
            // separateDialCode: true,
            utilsScript: "build/js/utils.js",
        });
    </script>




</body>

</html>