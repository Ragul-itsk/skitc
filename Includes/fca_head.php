<?php function commonHead()
{ ?>

    <head>

        <!-- Required meta tags -->

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="icon" href="img/favicon.png" type="image/png">



        <!-- Bootstrap CSS -->

        <link rel="stylesheet" href="css/bootstrap.css">

        <link rel="stylesheet" href="vendors/linericon/style.css">

        <link rel="stylesheet" href="css/font-awesome.min.css">

        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">

        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">

        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">

        <link rel="stylesheet" href="vendors/animate-css/animate.css">

        <link rel="stylesheet" href="vendors/flaticon/flaticon.css">

        <!-- main css -->

        <link rel="stylesheet" href="css/style.css">

        <link rel="stylesheet" href="css/responsive.css">
        <link rel="canonical" href="https://itsk.in/findcourse_pro.php" />
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-148092289-2">
        </script>
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-202834352-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-202834352-1');
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>


        <style>
            .firstcol {
                border-right: 1px solid #e6e6e6;
            }

            .b_r {
                border-right: 1px solid #e6e6e6;
            }

            .b_l {
                border-left: 1px solid #e6e6e6;
            }

            .b_t {
                border-top: 1px solid #e6e6e6;
            }

            .b_b {
                border-bottom: 1px solid #e6e6e6;
            }

            .b_a {
                border: 1px solid #e6e6e6;
            }

            .firstcol span,
            .secondcol span {
                font-size: 11px;
                text-transform: uppercase;
                border: 1px solid #03a9f5;
                padding: 1px 12px;
                /* margin-top: 15px; */
                display: inline-block;
                color: #03a9f5;
                cursor: pointer;
            }

            .defcol span {
                color: #fff;
                background: #4fafff;
                padding: 5px 20px;
                display: inline-block;
                font-family: proxima_nova_rgbold;
                text-transform: uppercase;
                font-size: 14px;
                cursor: pointer;

            }

            .div_img {
                margin-top: 10%;
            }

            .min_pro {
                margin: 20px 0 0 0;
            }

            .tickets_btn {
                background-color: #1c87c9;
                -webkit-border-radius: 60px;
                /*border-radius: 60px;*/
                border: none;
                color: #eeeeee;
                cursor: pointer;
                display: inline-block;
                font-family: sans-serif;
                font-size: 15px;
                /*padding: 10px 10px;*/
                text-align: center;
                text-decoration: none;
            }

            @keyframes glowing {
                0% {
                    background-color: #0392a8;
                    box-shadow: 0 0 5px #0392a8;
                }

                50% {
                    background-color: #115883;
                    box-shadow: 0 0 20px #115883;
                }

                100% {
                    background-color: #0392a8;
                    box-shadow: 0 0 5px #0392a8;
                }

            }

            .tickets_btn {
                animation: glowing 1300ms infinite;
            }
        </style>

    </head>

<?php }
function commonHeader()
{ ?>

    <!--================Header Menu Area =================-->

    <header class="header_area">

        <div class="main_menu">

            <nav class="navbar navbar-expand-lg navbar-light">

                <div class="container box_1620">

                    <!-- Brand and toggle get grouped for better mobile display -->

                    <a class="navbar-brand logo_h" href="index.php" style="color:white; font-weight:500; font-size:25px;">
                        <!-- <img src="img/SK LOGO.png"> -->
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

                        <span class="icon-bar"></span>

                        <span class="icon-bar"></span>

                        <span class="icon-bar"></span>

                    </button>

                    <!-- Collect the nav links, forms, and other content for toggling -->

                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">

                        <ul class="nav navbar-nav menu_nav justify-content-center">

                            <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>

                            <li class="nav-item"><a class="nav-link" href="products.php">Products</a></li>

                            <li class="nav-item active"><a class="nav-link" href="pricing.php#focus">Feature</a></li>

                            <li class="nav-item"><a class="nav-link" href="fca_pricing_dev.php">Pricing</a></li>
                            <!-- <li class="nav-item"><a class="nav-link" href="features.php">Features</a></li> -->

                            <!-- <li class="nav-item"><a class="nav-link" href="pricing.php">Pricing</a></li> -->
                            <li class="nav-item"><a class="nav-link" href="customers.php">Customers</a></li>

                            <li class="nav-item"><a class="nav-link" href="career.php">Career</a></li>


                            <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>

                            <!-- <li class="nav-item"><a class="nav-link" href="career.php">Career</a></li> -->
                            <!-- <li class="nav-item"><a class="nav-link" href="aboutus.php">About Us</a></li> -->

                            <!-- <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li> -->
                            <li class="nav-item"><a class="nav-link" href="pay.php">Pay</a></li>
                        </ul>

                        <ul class="nav navbar-nav navbar-right">

                            <li class="nav-item"><a href="tel:+91 8072787919" class="tickets_btn" style="color: white;">+91 8072787919</a></li>


                        </ul>

                    </div>

                </div>

            </nav>

        </div>

    </header>

    <!--================Header Menu Area =================-->



<?php }
function commonGotImpressed()
{ ?>

    <section class="impress_area p_120">

        <div class="container">

            <div class="impress_inner">

                <h2>Got Impressed to our features?</h2>

                <p>Use our trial version and see advantages of our product.</p>

                <a class="banner_btn2" href="pricing.php">Request Free Demo</a>

            </div>

        </div>

    </section>



<?php }
function commonScripts()
{ ?>

    <!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="js/jquery-3.2.1.min.js"></script>

    <script src="js/popper.js"></script>

    <script src="js/bootstrap.min.js"></script>

    <script src="js/stellar.js"></script>

    <script src="vendors/lightbox/simpleLightbox.min.js"></script>

    <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>

    <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>

    <script src="vendors/isotope/isotope-min.js"></script>

    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>

    <script src="js/jquery.ajaxchimp.min.js"></script>

    <script src="vendors/counter-up/jquery.waypoints.min.js"></script>

    <script src="vendors/counter-up/jquery.counterup.min.js"></script>

    <script src="js/mail-script.js"></script>

    <!--gmaps Js-->

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>

    <script src="js/gmaps.min.js"></script>

    <script src="js/theme.js"></script>

    <!--Start of Tawk.to Script-->

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/604cbda2067c2605c0b7fc2c/1f0ls9h2p';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

    <script>
        function showDiv() {

            document.getElementById('welcomeDiv').style.display = "block";

            document.getElementById('readmore').style.display = "none";

            window.location("https://www.itsk.in/career_details/welcomeDiv#");

        }
    </script>

    <script>
        function show() {



            document.getElementById('welcome').style.display = "block";

            document.getElementById('read').style.display = "none";

            window.location("https://www.itsk.in/career_details/message#");

        }
    </script>

    <!--End of Tawk.to Script-->

<?php }
function commonFooter()
{ ?>

    <!--================Footer Area =================-->



    <footer class="footer_area p_120">

        <div class="container">

            <div class="row footer_inner">

                <div class="col-lg-5 col-sm-6">

                    <aside class="f_widget ab_widget">

                        <div class="f_title">

                            <h3>About Me</h3>

                        </div>

                        <p>Do you want to be even more successful? Love to develop and growth. The more effort you put into improving your business,</p>

                        <p>© <a href="http://itsk.in" target="_blank">SKITC</a> 2019. All Rights Reserved.</p>

                    </aside>

                </div>

                <div class="col-lg-5 col-sm-6">

                    <aside class="f_widget news_widget">

                        <div class="f_title">

                            <h3>Newsletter</h3>

                        </div>

                        <p>Stay updated with our latest trends</p>

                        <div id="mc_embed_signup">

                            <form target="_blank" action="#" method="get" class="subscribe_form relative">

                                <div class="input-group d-flex flex-row">

                                    <input name="EMAIL" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">

                                    <button class="btn sub-btn"><span class="lnr lnr-arrow-right"></span></button>

                                </div>

                                <div class="mt-10 info"></div>

                            </form>

                        </div>

                    </aside>

                </div>

                <div class="col-lg-2">

                    <aside class="f_widget social_widget">

                        <div class="f_title">

                            <h3>Follow Me</h3>

                        </div>

                        <p>Let us be social</p>

                        <ul class="list">

                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>

                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>

                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>

                            <li><a href="#"><i class="fa fa-behance"></i></a></li>

                        </ul>

                    </aside>

                </div>

            </div>

        </div>

    </footer>

    <!--================End Footer Area =================-->



<?php } ?>