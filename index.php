<?php
require_once("Includes/commonFunctions.php");
?>
<!doctype html>
<html lang="en">

<head>
    <meta name="description" content="SKITC is a customized website design and development company in Chennai, provides all types of web development, SMO, SEO, and complete digital marketing service providers across the globe." />
    <meta name="keywords" content="Website development company in Chennai,
	seo company in chennai,
	seo services in chennai,
	Overseas education consultant software,
	website design" />

    <title>Website Design And Development - Digital Marketing Company in Chennai</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <?php commonHead(); ?>
    <style>
        /* (A) OUTER CONTAINER */
        .hwrap {
            /* (A1) DIMENSIONS */
            width: 100%;
            /* OPTIONAL */


            overflow: hidden;
            /* HIDE SCROLLBARS */
        }

        /* (B) MIDDLE CONTAINER - FLEX LAYOUT */
        .hmove {
            display: flex;
            position: relative;
            top: 0;
            right: 0;
        }

        /* (C) SLIDES - FORCE INTO ONE LONG HORIZONTAL ROW */
        .hslide {
            width: 100%;
            flex-shrink: 0;
            box-sizing: border-box;
            padding: 10px;
            text-align: center;
        }

        .fs-35 {
            font-size: 40px;
        }

        /* (D) SLIDE ANIMATION */
        @keyframes slideh {

            /* (D0) THE IDEA - USE KEYFRAMES TO SHIFT SLIDES *
  0% { right: 0; }
  33% { right: 100%; }
  66% { right: 200%; }
  100% { right: 0; }
 
  /* (D1) BUT THE ABOVE WILL SHIFT NON-STOP */
            /* SO WE ADD PAUSES BETWEEN EACH SLIDE */
            0% {
                right: 0;
            }

            30% {
                right: 0;
            }

            33% {
                right: 100%;
            }

            63% {
                right: 100%;
            }

            66% {
                right: 200%;
            }

            97% {
                right: 200%;
            }

            100% {
                right: 0;
            }
        }

        .hmove {
            animation: slideh linear 14s infinite;
        }

        .hmove:hover {
            animation-play-state: paused;
        }



        .ml6 {
            position: relative;
            font-weight: 900;
            font-size: 3.3em;
        }

        .ml6 .text-wrapper {
            position: relative;
            display: inline-block;
            padding-top: 0.2em;
            padding-right: 0.05em;
            padding-bottom: 0.1em;
            overflow: hidden;
        }

        .ml6 .letter {
            display: inline-block;
            line-height: 1em;
        }


        @media (min-width:768px) and (max-width:992px) {
            .banner_content {
                padding-top: 3% !important;
            }

            section.home_banner_area {
                height: 300px;
            }
        }
    </style>
</head>

<body>
    <?php commonHeader(); ?>






    <!--================ Home Banner Area =================-->
    <section class="home_banner_area">
        <div class="banner_inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner_content" style="padding-top:10%;    text-align: center;">
                            <!-- <h2>User Friendly Overseas Software</h2> -->
                            <div class="hwrap">
                                <div class="hmove">
                                    <div class="hslide">
                                        <h3 class="fs-35 ml12">User Friendly Web Application Software</h3>

                                    </div>
                                    <div class="hslide">
                                        <h3 class="fs-35 ml12">User Friendly Graphic Design</h3>



                                    </div>
                                    <div class="hslide">
                                        <h3 class="fs-35 ml12 ">User Friendly Search Engine Optimize</h3>
                                    </div>
                                </div>
                            </div>


                            <p>We provide free trial access to the system and our comprehensive videos will explain everything you want to know about it.</p>
                            <!-- <a class="banner_btn" href="pricing.php">Get Started</a> -->
                            <!-- <a class="banner_btn2" href="register.php">Free Trial</a> -->
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



    <!-- JSON-LD markup generated by Google Structured Data Markup Helper. -->
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "LocalBusiness",
            "name": "SKITC",
            "image": "https://www.itsk.in/img/SK%20LOGO.png",
            "telephone": "8072787919",
            "email": "support@itsk.in",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "No.172, 3rd Floor, Raahat Plaza, Arcot Road",
                "addressLocality": "Vadapalani",
                "addressRegion": "Chennai, Tamilnadu",
                "addressCountry": "India",
                "postalCode": "600026"
            },
            "url": "https://www.itsk.in/",
            "aggregateRating": {
                "@type": "AggregateRating",
                "ratingValue": "4.1",
                "bestRating": "5",
                "ratingCount": "54"
            }
        }
    </script>


    <section class="work_area p_120" style="padding-top:80px;padding-bottom:20px;">
        <div class="container mob_hid_div">

            <div class="work_inner row">
                <div class="col-md-12 defcol">
                    <div class="row">
                        <div class="col-md-4">
                            <img class="img-fluid" src="img/new_n/hand.png" alt="">
                        </div>
                        <div class="col-md-8">
                            <h3>SKITC</h3>
                            <p>We SKITC are an innovative service Provider Company in Chennai.</p>
                            <a href="products.php"><span class="learn-more">Learn More</span></a>
                        </div>

                    </div>
                </div>
                <!-- <div class="col-md-3 firstcol">
        				<div class="row">
        					<div class="col-md-4">
                                <a href="overseas_pro.php">
                                    <img class="img-fluid" src="img/new_n/book_b.png" alt="">
                                </a>
        				    </div>
	        				<div class="col-md-8 a_st">
                                <a href="overseas_pro.php">
                                    <h4 style="font-size: 14px;">Overseas Software</h4>
                                </a>
		        				<!-- <p>Smart accounting.</p> 
		        				<a href="overseas_pro.php"><span class="learn-more">Learn More</span></a>

	        				</div>
        				</div>
        				<hr>
        				<div class="row">
        					<div class="col-md-4">
                                <a href="seo_pro.php">
                                    <img class="img-fluid" src="img/new_n/seo_b.png" alt="">
                                </a>
        					</div>
	        				<div class="col-md-8 a_st">
                                <a href="seo_pro.php">
                                    <h4 style="font-size: 14px;">Search Engine Optimization</h4>
                                </a>
		        				<!-- <p>Clean and ad-free.</p> 
		        				<a href="seo_pro.php"><span class="learn-more">Learn More</span></a>
	        			   </div>
        				</div>
                        <hr>
                        <div class="row">
                            <div class="col-md-4">
                                <a href="findcourse_pro.php">
                                    <img class="img-fluid" src="img/new_n/fn_cour_b.png" alt="">
                                </a>
                            </div>
                            <div class="col-md-8 a_st">
                                <a href="findcourse_pro.php">
                                    <h4 style="font-size: 14px;">Find Courses Abroad</h4>
                                </a>
                                <!-- <p>Clean and ad-free.</p> 
                                <a href="findcourse_pro.php"><span class="learn-more">Learn More</span></a>
                            </div>
                        </div>
        			</div>
        			<div class="col-md-3 secondcol firstcol">
        				<div class="row">
        					<div class="col-md-4">
                                <a href="web_dev_pro.php">
                                    <img class="img-fluid" src="img/new_n/dev_b.png" alt="">
                                </a>
        					</div>
	        				<div class="col-md-8 a_st">
                                <a href="web_dev_pro.php">
                                    <h4 style="font-size: 14px;">Web Designing and Development</h4>
                                </a>
	        				<!-- <p>Smart accounting.</p> 
	        				<a href="web_dev_pro.php"><span class="learn-more">Learn More</span></a>
	        			    </div>
        				</div>
        			    <hr>
        			    <div class="row">

                            <div class="col-md-4">
                                <a href="smo_pro.php">
                                    <img class="img-fluid" src="img/new_n/smo_b.png" alt="">
                                </a>
                            </div>
                            <div class="col-md-8 a_st">
                                <a href="smo_pro.php">
                                    <h4 style="font-size: 14px;">Social Media Optimization</h4>
                                </a>
                            <!-- <p>Smart accounting.</p> 
                            <a href="smo_pro.php"><span class="learn-more">Learn More</span></a>
                            </div>


	        			     
        			    </div>
                        <hr>
                        <div class="row">

                            <div class="col-md-4">
                                <a href="bulksms_pro.php">
                                    <img class="img-fluid" src="img/new_n/sms_b.png" alt="">
                                </a>
                            </div>
                            <div class="col-md-8 a_st">
                                <a href="bulksms_pro.php">
                                    <h4 style="font-size: 14px;">Bulk SMS</h4>
                                </a>
                                <!-- <p>Smart accounting.</p> 
                                <a href="bulksms_pro.php"><span class="learn-more">Learn More</span></a>
                            </div> 



                        </div>-->
                <!-- </div> -->
                <!-- <div class="col-md-3 secondcol">
                        <div class="row">
                            <div class="col-md-4">
                                <a href="forall_pro.php">
                                    <img class="img-fluid" src="img/new_n/for_all_b.png" alt="">
                                </a>
                            </div>
                            <div class="col-md-8 a_st">
                                <a href="forall_pro.php">
                                    <h4 style="font-size: 14px;">Forallin</h4>
                                </a>
                            <!-- <p>Smart accounting.</p> 
                            <a href="forall_pro.php"><span class="learn-more">Learn More</span></a>
                            </div>
                        </div>
                        <hr>
                        <div class="row" style="display:none">
                            <div class="col-md-4">
                                <a href="lead_pro.php">
                                    <img class="img-fluid" src="img/new_n/lead_b.png" alt="">
                                </a>
                            </div>
                            <div class="col-md-8 a_st">
                                <a href="lead_pro.php">
                                    <h4 style="font-size: 14px;">Lead Management</h4>
                                </a>
                                <!-- <p>Smart accounting.</p>
                                <a href="lead_pro.php"><span class="learn-more">Learn More</span></a>
                            </div>
                        </div> -->
                <!--<hr>-->
                <!-- <div class="row">
                            <div class="col-md-4">
                                <a href="whatsapp_pro.php">
                                    <img class="img-fluid" src="img/new_n/wa_b.png" alt="">
                                </a>
                            </div>
                            <div class="col-md-8 a_st">
                                <a href="whatsapp_pro.php">
                                    <h4 style="font-size: 14px;">what'sapp bulk sender</h4>
                                </a>
                                <!-- <p>Smart accounting.</p> 
                                <a href="whatsapp_pro.php"><span class="learn-more">Learn More</span></a>
                            </div>
                        </div> -->

            </div>
        </div>
        </div>
    </section>

    <!-- own 2 -->
    <!-- <section class="work_area p_40">
        	<div class="container">
        		<div class="main_title mob_hid_div">
        			<h3>All SKITC Products</h3>
        		</div>
        		<div class="work_inner row">
        			<div class="col-lg-4 firstcol">
        				<div class="work_item">
        					<a href="overseas_pro.php"><h4>Overseas Software</h4></a>
        					<p>Keeping our clients happy is key to helping them succeed through technology.</p>
        					<div class="row div_img">
        						<div class="col-md-8 b_r b_b">
        							<a href="overseas_pro.php">
                                        <img class="img-fluid" src="img/new_n/book.png" alt="">
                                    </a>
        					    </div>
	        					<div class="col-md-4 res_img b_b mar_ali" >
	        						<a href="overseas_pro.php">
                                        <img class="img-fluid2" src="img/new_n/fetu/doc.png" alt="">
                                        Document
                                    </a>
	        					</div>
        					</div>
        					<div class="row min_pro">
        						<div class="col-md-4 res_img b_r">
        							<a href="overseas_pro.php">
                                        <img class="img-fluid2" src="img/new_n/fetu/key.png" alt="">
                                        Login
                                    </a>
        						</div>
        						<div class="col-md-4 res_img b_r">
        							<a href="overseas_pro.php">
                                        <img class="img-fluid2" src="img/new_n/fetu/lead.png" alt="">
                                        Lead 
                                    </a>
        						</div>
        						<div class="col-md-4 res_img">
        							<a href="overseas_pro.php">
                                        <img class="img-fluid2" src="img/new_n/fetu/search.png" alt="">
                                        Filtering
                                    </a>
        						</div>
        					</div>
        					
        				</div>
        			</div>
        			<div class="col-lg-4 firstcol">
        				<div class="work_item">
        					<a href="web_dev_pro.php"><h4>Web Designing and Development</h4></a>
        					<p>Innovate Your Business Websites with our Effective Responsive Website Creations.</p>
        					<div class="row div_img">
        						<div class="col-md-8 b_r b_b">
        							<a href="web_dev_pro.php">
                                        <img class="img-fluid" src="img/new_n/dev.png" alt=""></a>
        					    </div>
	        					<div class="col-md-4 res_img b_b mar_ali">
	        						<a href="web_dev_pro.php">
                                      <img class="img-fluid" src="img/new_n/fetu/storage.png" alt="">
                                        Database
                                    </a>
	        					</div>
        					</div>
        					<div class="row min_pro">
        						<div class="col-md-4 res_img b_r">
        							<a href="web_dev_pro.php">
                   <img class="img-fluid" src="img/new_n/fetu/seo.png" alt="">
                   SEO
                                    </a>
        						</div>
        						<div class="col-md-4 res_img b_r">
        							  <a href="web_dev_pro.php">
                     <img class="img-fluid" src="img/new_n/fetu/smo.png" alt="">
                     SMO
                                      </a>
        						</div>
        						<div class="col-md-4 res_img">
        							<a href="web_dev_pro.php">
                   <img class="img-fluid" src="img/new_n/fetu/lock.png" alt="">   
                   Secure                  
                                    </a>
        						</div>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4 ">
                        <div class="work_item">
                            <a href="forall_pro.php"><h4>Forallin</h4></a>
                            <p>Get your message to new markets and expand your business opportunities.</p>
                            <div class="row div_img">
                                <div class="col-md-8 b_r b_b">
                                    <a href="forall_pro.php">
                                        <img class="img-fluid" src="img/new_n/for_all.png" alt=""></a>
                                </div>
                                <div class="col-md-4 res_img b_b mar_ali">
                                    <a href="forall_pro.php">
                                        <img class="img-fluid" src="img/new_n/fetu/search2.png" alt="">              Search
                                    </a>
                                </div>
                            </div>
                            <div class="row min_pro">
                                <div class="col-md-4 res_img b_r">
                                    <a href="forall_pro.php">
                                        <img class="img-fluid" src="img/new_n/fetu/chat.png" alt="">
                                        Review
                                    </a>
                                </div>
                                <div class="col-md-4 res_img b_r">
                                    <a href="forall_pro.php">
                                        <img class="img-fluid" src="img/new_n/fetu/grow.png" alt="">
                                        Promote
                                    </a>
                                </div>
                                <div class="col-md-4 res_img">
                                    <a href="forall_pro.php">
                                        <img class="img-fluid" src="img/new_n/fetu/lock.png" alt="">
                                        Secure
                                    </a>
                                </div>
                            </div>
                        </div>
        			</div>
                    
        		</div>

                <br>
                <br>
                <div class="work_inner row">
                    <div class="col-lg-4 firstcol">
                        <div class="work_item">
                            <a href="seo_pro.php"><h4>Search Engine Optimization</h4></a>
                            <p>Our social media experts can help you establish your business objectives.</p>
                            <div class="row div_img">
                                <div class="col-md-8 b_r b_b">
                                    <a href="seo_pro.php">
                                        <img class="img-fluid" src="img/new_n/seo.png" alt="">
                                    </a>
                                </div>
                                <div class="col-md-4 res_img b_b mar_ali" >
                                    <a href="seo_pro.php">
                                        <img class="img-fluid2" src="img/new_n/fetu/doc.png" alt="">
                                        Document
                                    </a>
                                </div>
                            </div>
                            <div class="row min_pro">
                                <div class="col-md-4 res_img b_r">
                                    <a href="seo_pro.php">
                                        <img class="img-fluid2" src="img/new_n/fetu/key.png" alt="">
                                        Login
                                    </a>
                                </div>
                                <div class="col-md-4 res_img b_r">
                                    <a href="seo_pro.php">
                                        <img class="img-fluid2" src="img/new_n/fetu/lead.png" alt="">
                                        Lead
                                    </a>
                                </div>
                                <div class="col-md-4 res_img">
                                    <a href="seo_pro.php">
                                        <img class="img-fluid2" src="img/new_n/fetu/search.png" alt="">
                                        Filtering
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 firstcol">
                        <div class="work_item">
                            <a href="smo_pro.php"><h4>Social Media Optimization</h4></a>
                            <p>Creating online content that is shared through popular social media website.</p>
                            <div class="row div_img">
                                <div class="col-md-8 b_r b_b">
                                    <a href="smo_pro.php">
                                        <img class="img-fluid" src="img/new_n/smo.png" alt=""></a>
                                </div>
                                <div class="col-md-4 res_img b_b mar_ali">
                                    <a href="smo_pro.php">
                                        <img class="img-fluid" src="img/new_n/fetu/storage.png" alt="">
                                        Database
                                    </a>
                                </div>
                            </div>
                            <div class="row min_pro">
                                <div class="col-md-4 res_img b_r">
                                    <a href="smo_pro.php">
                                        <img class="img-fluid" src="img/new_n/fetu/seo.png" alt="">
                                        SEO
                                    </a>
                                </div>
                                <div class="col-md-4 res_img b_r">
                                    <a href="smo_pro.php">
                                        <img class="img-fluid" src="img/new_n/fetu/smo.png" alt="">
                                        SMO
                                    </a>
                                </div>
                                <div class="col-md-4 res_img">
                                    <a href="smo_pro.php">
                                        <img class="img-fluid" src="img/new_n/fetu/lock.png" alt="">
                                        Secure
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 ">
                        <div class="work_item">
                            <a href="lead_pro.php"><h4>Lead Management</h4></a>
                            <p>Empower your workforce with apps to collaborate and transform the way they work.</p>
                            <div class="row div_img">
                                <div class="col-md-8 b_r b_b">
                                    <a href="lead_pro.php">
                                        <img class="img-fluid" src="img/new_n/lead.png" alt="">
                                    </a>
                                </div>
                                <div class="col-md-4 res_img b_b mar_ali">
                                    <a href="lead_pro.php">
                                        <img class="img-fluid" src="img/new_n/fetu/search2.png" alt="">
                                        Search
                                    </a>
                                </div>
                            </div>
                            <div class="row min_pro">
                                <div class="col-md-4 res_img b_r">
                                    <a href="lead_pro.php">
                                        <img class="img-fluid" src="img/new_n/fetu/storage.png" alt="">
                                        Bulk
                                    </a>
                                </div>
                                <div class="col-md-4 res_img b_r">
                                    <a href="lead_pro.php">
                                        <img class="img-fluid" src="img/new_n/fetu/school.png" alt="">
                                        Universities
                                    </a>
                                </div>
                                <div class="col-md-4 res_img">
                                    <a href="lead_pro.php">
                                        <img class="img-fluid" src="img/new_n/fetu/application.png" alt="">
                                        Application
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <br>
                <br>

                <div class="work_inner row">
                    <div class="col-lg-4 firstcol">
                        <div class="work_item">
                            <a href="findcourse_pro.php"><h4>Find Courses Abroad</h4></a>
                            <p>Empower your workforce with apps to collaborate and transform the way they work.</p>
                            <div class="row div_img">
                                <div class="col-md-8 b_r b_b">
                                    <a href="findcourse_pro.php">
                                        <img class="img-fluid" src="img/new_n/fn_cour.png" alt="">
                                    </a>
                                </div>
                                <div class="col-md-4 res_img b_b mar_ali">
                                    <a href="findcourse_pro.php">
                                        <img class="img-fluid" src="img/new_n/fetu/search2.png" alt="">
                                        Search
                                    </a>
                                </div>
                            </div>
                            <div class="row min_pro">
                                <div class="col-md-4 res_img b_r">
                                    <a href="findcourse_pro.php">
                                        <img class="img-fluid" src="img/new_n/fetu/storage.png" alt="">
                                        Bulk
                                    </a>
                                </div>
                                <div class="col-md-4 res_img b_r">
                                    <a href="findcourse_pro.php">
                                        <img class="img-fluid" src="img/new_n/fetu/school.png" alt="">
                                        Universities
                                    </a>
                                </div>
                                <div class="col-md-4 res_img">
                                    <a href="findcourse_pro.php">
                                        <img class="img-fluid" src="img/new_n/fetu/application.png" alt="">
                                        Application
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 firstcol">
                        <div class="work_item">
                            <a href="bulksms_pro.php"><h4>Bulk SMS</h4></a>
                            <p>Reach your customers even in remote villages through our BULK SMS.</p>
                            <div class="row div_img">
                                <div class="col-md-8 b_r b_b">
                                    <a href="bulksms_pro.php">
                                        <img class="img-fluid" src="img/new_n/sms.png" alt="">
                                    </a>
                                </div>
                                <div class="col-md-4 res_img b_b mar_ali" >
                                    <a href="bulksms_pro.php">
                                        <img class="img-fluid2" src="img/new_n/fetu/user_fri.png" alt="">
                                        User friendly
                                    </a>
                                </div>
                            </div>
                            <div class="row min_pro">
                                <div class="col-md-4 res_img b_r">
                                    <a href="bulksms_pro.php">
                                        <img class="img-fluid2" src="img/new_n/fetu/fast_del.png" alt="">
                                        Instant delivery
                                    </a>
                                </div>
                                <div class="col-md-4 res_img b_r">
                                    <a href="bulksms_pro.php">
                                        <img class="img-fluid2" src="img/new_n/fetu/automation.png" alt="">
                                        Automation
                                    </a>
                                </div>
                                <div class="col-md-4 res_img">
                                    <a href="bulksms_pro.php">
                                        <img class="img-fluid2" src="img/new_n/fetu/scheduling.png" alt="">
                                        Scheduling
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="work_item">
                            <a href="whatsapp_pro.php"><h4>What'sapp Bulk Sender</h4></a>
                            <p>Get your message to new markets and expand your business opportunities.</p>
                            <div class="row div_img">
                                <div class="col-md-8 b_r b_b">
                                    <a href="whatsapp_pro.php">
                                        <img class="img-fluid" src="img/new_n/wa.png" alt=""></a>
                                </div>
                                <div class="col-md-4 res_img b_b mar_ali">
                                    <a href="whatsapp_pro.php">
                                        <img class="img-fluid" src="img/new_n/fetu/storage.png" alt="">              Bulk
                                    </a>
                                </div>
                            </div>
                            <div class="row min_pro">
                                <div class="col-md-4 res_img b_r">
                                    <a href="whatsapp_pro.php">
                                        <img class="img-fluid" src="img/new_n/fetu/chat.png" alt="">
                                        Unlimited
                                    </a>
                                </div>
                                <div class="col-md-4 res_img b_r">
                                    <a href="whatsapp_pro.php">
                                        <img class="img-fluid" src="img/new_n/fetu/grow.png" alt="">
                                        Simple
                                    </a>
                                </div>
                                <div class="col-md-4 res_img">
                                    <a href="whatsapp_pro.php">
                                        <img class="img-fluid" src="img/new_n/fetu/lock.png" alt="">
                                        Secure
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>


        	</div>
        </section> -->
    <!-- end own 2 -->

    <!--================Work Area =================-->
    <section class="work_area p_120" style="padding-top:80px;padding-bottom:80px;">
        <div class="container">
            <div class="main_title">
                <h2>About US</h2>
                <p style="max-width: 700px;">SKITC are an innovative service Provider Company in Chennai, Tamil Nadu serving our clients nationwide. Our research and developing center is in Puducherry. We established our company in 2012. The company has developed more than 1000+ projects and also gained experienced in Software development, website development, Digital marketing for all types of business scale. <br>
                    Our strength lies in our ability to create and position our team on every assignment. Our team gets ready to take up the challenge in time and deliver the results on time.</p>
            </div>
            <div class="work_inner row">
                <div class="col-lg-3">
                    <div class="work_item">
                        <i class="lnr lnr-thumbs-up"></i>
                        <a href="#">
                            <h4>Our success ratio is 99%</h4>
                        </a>
                        <!-- <p>our product is perfect in a wide range of gadgets. Like Desktop, Laptop, Tablet, Mobile ...and so forth</p> -->
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="work_item">
                        <i class="lnr lnr-users"></i>
                        <a href="#">
                            <h4>More than 40 team members</h4>
                        </a>
                        <!-- <p>Our product is highly secured to keep your information,  documents, data, chats ...etc</p> -->
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="work_item">
                        <i class="lnr lnr-database"></i>
                        <a href="#">
                            <h4>More than 1000 successful projects</h4>
                        </a>
                        <!-- <p>Your talk with the help group or with the specialist are exceedingly secured utilizing the end-to-end encryption method</p> -->
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="work_item">
                        <i class="lnr lnr-briefcase"></i>
                        <a href="#">
                            <h4>7 Years of experience</h4>
                        </a>
                        <!-- <p>Your talk with the help group or with the specialist are exceedingly secured utilizing the end-to-end encryption method</p> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Work Area =================-->


    <section class="work_area p_120" style="padding-top: 50px;
    padding-bottom: 50px;">
        <div class="container">
            <div class="main_title">
                <h2>Our Services</h2>

            </div>
            <div class="work_inner row">
                <div class="col-lg-4">
                    <div class="work_item">
                        <i class="lnr lnr-laptop"></i>
                        <a href="#">
                            <h4>Software development
                            </h4>
                        </a>
                        <!-- <p>our product is perfect in a wide range of gadgets. Like Desktop, Laptop, Tablet, Mobile ...and so forth</p> -->
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="work_item">
                        <i class="lnr lnr-laptop-phone"></i>
                        <a href="#">
                            <h4>Website design and Graphics design
                            </h4>
                        </a>
                        <!-- <p>Our product is highly secured to keep your information,  documents, data, chats ...etc</p> -->
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="work_item">
                        <i class="lnr lnr-bullhorn"></i>
                        <a href="#">
                            <h4>Digital Marketing
                            </h4>
                        </a>
                        <!-- <p>Your talk with the help group or with the specialist are exceedingly secured utilizing the end-to-end encryption method</p> -->
                    </div>
                </div>





            </div>
        </div>
    </section>



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
										<h3>We????ve made a life <br />that will change you</h3>
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
										<h3>We????ve made a life <br />that will change you</h3>
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
										<h3>We????ve made a life <br />that will change you</h3>
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
										<h3>We????ve made a life <br />that will change you</h3>
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
                            <h3>24 / 7<br />Support Services</h3>
                            <h6>We are here to listen from you deliver excellence</h6>
                            <p>Keeping our clients happy is key to helping them succeed through technology.</p>
                            <a class="main_btn" href="register.php">Get Started Now</a>
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
    </section>
    <!--================End Made Life Area =================-->

    <!--================Screen Area =================-->
    <!-- <section class="screen_area text-center p_120">
        	<div class="container">
        		<div class="main_title">
        			<h2>Unique Dashboard that work perfectly</h2>
        			<p></p>
        		</div>
        		<img class="img-fluid" src="img/banner/home-left-1.png" alt="">
        	</div>
        </section> -->
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
                                <img src="img/m.png" alt="" style="width:80px; height:80px;">
                            </div>
                            <div class="media-body">
                                <p> This company is on a mission as lives and breathes franchising. Very focused, it is a flat hierarchy so everyone is given meaningful responsibility. Full benefits, more work - life integration.</p>
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
                                <img src="img/g.jpg" alt="" style="width:80px; height:80px;">
                            </div>
                            <div class="media-body">
                                <p>Very helpful for me and my employees to manage the student details. </p>
                                <h4>Goodwill</h4>
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
                            <h3>We've made a Product <br />that will reduce your work</h3>
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






</body>



<script>
    $(document).ready(function() {
        simpleCarousel($(".simple-carousel"), 5000);
    });

    function simpleCarousel(carousel, intervalTime = 5000) {
        var slideCount = $(carousel).find("ul li.slide").length;
        var activeSlide = 0;

        function showSlide() {
            $(carousel)
                .find("ul li.slide")
                .each(function(index) {
                    if (index == activeSlide) {
                        $(this).fadeIn();
                    } else {
                        $(this).fadeOut();
                    }
                });
        }

        setInterval(function() {
            moveRight();
        }, intervalTime);

        function moveLeft() {
            activeSlide -= 1;
            if (activeSlide < 0) {
                activeSlide = slideCount - 1;
            }
            showSlide();
        }

        function moveRight() {
            activeSlide += 1;
            if (activeSlide >= slideCount) {
                activeSlide = 0;
            }
            showSlide();
        }

        $(carousel)
            .find("a.control_prev")
            .click(function() {
                moveLeft();
            });

        $(carousel)
            .find("a.control_next")
            .click(function() {
                moveRight();
            });
    }
</script>

<script>
    // Wrap every letter in a span
    var textWrapper = document.querySelector('.ml12');
    textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

    anime.timeline({
            loop: true
        })
        .add({
            targets: '.ml12 .letter',
            translateX: [40, 0],
            translateZ: 0,
            opacity: [0, 1],
            easing: "easeOutExpo",
            duration: 1200,
            delay: (el, i) => 500 + 50 * i
        }).add({
            targets: '.ml12 .letter',
            translateX: [0, -30],
            opacity: [1, 0],
            easing: "easeInExpo",
            duration: 2000,
            delay: (el, i) => 100 + 50 * i
        });
    SourceT

    // end
</script>


</html>