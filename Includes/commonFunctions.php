<?php function commonHead()
{ ?>

  <head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-202834352-1"></script>
    <!--<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-202834352-1');
</script> -->

    <!-- Required meta tags -->

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" href="img/favicon.png" type="image/png">


    <meta name="keywords" content="Website development company in Chennai,
seo company in chennai,
seo services in chennai,
Overseas education consultant software,
website design" />


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

    <!-- Facebook Pixel Code -->
    <script>
      ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
          n.callMethod ?
            n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
      }(window, document, 'script',
        'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '1145235455996831');
      fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1145235455996831&ev=PageView&noscript=1" /></noscript>
    <!-- End Facebook Pixel Code -->


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!--<script async src="https://www.googletagmanager.com/gtag/js?id=G-SSRXYNWPHC"></script>-->
    <!--<script>-->
    <!--  window.dataLayer = window.dataLayer || [];-->
    <!--  function gtag(){dataLayer.push(arguments);}-->
    <!--  gtag('js', new Date());-->

    <!--  gtag('config', 'G-SSRXYNWPHC');-->
    <!--</script>-->


    <script src="js/jq_min.js"></script>

    <script src="js/new_cus_js.js"></script>


    <!-- popup style -->

    <style>
      .a_st a {
        color: #616263;
      }

      .img-replace {
        /* replace text with an image */
        display: inline-block;
        overflow: hidden;
        text-indent: 100%;
        color: transparent;
        white-space: nowrap;
      }

      .bts-popup {
        position: fixed;
        left: 0;
        top: 0;
        height: 100%;
        width: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        opacity: 0;
        visibility: hidden;
        -webkit-transition: opacity 0.3s 0s, visibility 0s 0.3s;
        -moz-transition: opacity 0.3s 0s, visibility 0s 0.3s;
        transition: opacity 0.3s 0s, visibility 0s 0.3s;
      }

      .bts-popup.is-visible {
        opacity: 1;
        z-index: 999;
        visibility: visible;
        -webkit-transition: opacity 0.3s 0s, visibility 0s 0s;
        -moz-transition: opacity 0.3s 0s, visibility 0s 0s;
        transition: opacity 0.3s 0s, visibility 0s 0s;
      }

      .bts-popup-container {
        position: relative;
        width: 90%;
        max-width: 400px;
        margin: 1em auto;
        background: #ffffff;
        border-radius: none;
        text-align: center;
        box-shadow: 0 0 2px rgba(0, 0, 0, 0.2);
        -webkit-transform: translateY(-40px);
        -moz-transform: translateY(-40px);
        -ms-transform: translateY(-40px);
        -o-transform: translateY(-40px);
        transform: translateY(-40px);
        /* Force Hardware Acceleration in WebKit */
        -webkit-backface-visibility: hidden;
        -webkit-transition-property: -webkit-transform;
        -moz-transition-property: -moz-transform;
        transition-property: transform;
        -webkit-transition-duration: 0.3s;
        -moz-transition-duration: 0.3s;
        transition-duration: 0.3s;
      }

      .bts-popup-container img {
        padding: 20px 0 0 0;
      }

      .bts-popup-container p {
        color: black;
        padding: 10px 40px;
      }

      .bts-popup-container .bts-popup-button {
        padding: 5px 25px;
        border: 2px solid white;
        display: inline-block;
        margin-bottom: 10px;
      }

      .bts-popup-container a {
        color: white;
        text-decoration: none;
        text-transform: uppercase;
      }

      input.subm {
        display: inline-block;
        background: #4eaeff;
        color: #fff;
        font-family: "Roboto", sans-serif;
        width: 100px;
        font-size: 14px;
        font-weight: 500;
        border: 1px solid #4eaeff;
        line-height: 38px;
        border-radius: 3px;
        outline: none !important;
        box-shadow: none !important;
        text-align: center;
        cursor: pointer;
        transition: all 300ms linear 0s;
      }

      .fld {



        /*border-radius: 5px;*/
        background: white;
        font-size: 16px;
        padding: 7px 20px;
        transition: all .2s ease-in-out;
        margin: 5px 0 25px;
      }





      .bts-popup-container .bts-popup-close {
        position: absolute;
        top: 8px;
        right: 8px;
        width: 30px;
        height: 30px;
      }

      .bts-popup-container .bts-popup-close::before,
      .bts-popup-container .bts-popup-close::after {
        content: '';
        position: absolute;
        top: 12px;
        width: 16px;
        height: 3px;
        background-color: white;
      }

      .bts-popup-container .bts-popup-close::before {
        -webkit-transform: rotate(45deg);
        -moz-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        -o-transform: rotate(45deg);
        transform: rotate(45deg);
        left: 8px;
      }

      .bts-popup-container .bts-popup-close::after {
        -webkit-transform: rotate(-45deg);
        -moz-transform: rotate(-45deg);
        -ms-transform: rotate(-45deg);
        -o-transform: rotate(-45deg);
        transform: rotate(-45deg);
        right: 6px;
        top: 13px;
      }

      .is-visible .bts-popup-container {
        -webkit-transform: translateY(0);
        -moz-transform: translateY(0);
        -ms-transform: translateY(0);
        -o-transform: translateY(0);
        transform: translateY(0);
      }

      @media only screen and (min-width: 1170px) {
        .bts-popup-container {
          margin: 8em auto;
        }
      }

      .bts-popup-container .bts-popup-close::before,
      .bts-popup-container .bts-popup-close::after {
        background-color: black;
        top: 13px;

      }
    </style>
    <!-- popup style -->

    <style>
      .firstcol {
        border-right: 1px solid #e6e6e6;
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

      .div_img a,
      .min_pro a {
        color: #000000;
        font-size: 11px;

      }

      .customer_slide .owl-item {
        width: auto !important;
      }

      .client img {
        position: relative;
        /* float: left; */
        width: 160px;
        height: 55px;
        background-position: 50% 50%;
        background-repeat: no-repeat;
        background-size: cover;
        margin: 50px 10px 10px 11px;
        /* float: left; */
        /* width: 30%; */
        /* height: auto; */
        z-index: 0;
      }

      section.client {
        padding: 2em 0em;
      }

      .mod_title h2 {
        font-size: 30px !important;
      }
    </style>

    <style>
      .bg-img {
        /* The image used */
        /*background-image: url("img/new_n/whatsapp_reg_form_bg.jpg");*/
        background-image: url("img/new_n/overs_reg_form_bg.png");
        /*background-image: url("img/new_n/overseas.gif");*/

        min-height: 453px;

        /* Center and scale the image nicely */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
      }

      /* Add styles to the form container */
      .form_container {
        position: absolute;
        right: 7%;
        margin: 20px;
        max-width: 300px;
        padding: 25px;
        background-color: white;
        border-radius: 10px;
        border: 1px solid #ffffff3d;
        /* box-shadow: 0 0 5px #9999997a; */
        box-shadow: 11px 10px 20px 0px #8c8c8c;
      }

      .form_container h3 {
        margin: 15px 0 15px 0;
      }

      @media (min-width: 1281px) {

        .form_container {
          min-width: 400px;
          right: 10%;
        }
      }


      /* Full-width input fields */
      input[type=text],
      input[type=password],
      input[type=email] {
        width: 100%;
        padding: 15px;
        /*margin: 5px 0 22px 0;*/
        /*margin: 10px 0px 30px 0;*/
        border: none;
        background: #f1f1f1;
      }

      input[type=text]:focus,
      input[type=password]:focus,
      input[type=email]:focus {
        background-color: #ddd;
        outline: none;
      }

      /* Set a style for the submit button */
      /*.btn {
background-color: #4CAF50;
color: white;
padding: 16px 20px;
border: none;
cursor: pointer;
width: 100%;
opacity: 0.9;
}

.btn:hover {
opacity: 1;
}*/
      /*.re{
flex-wrap: inherit !important;
}*/

      @media (max-width: 812px) {

        .client img {
          max-width: 80px;
          height: 35px;
          /*left: 35%;*/
        }
      }

      @media (max-width: 812px) and (orientation: portrait) {

        .client img {
          max-width: 80px;
          height: 35px;
          left: 35%;
        }
      }


      @media (min-width: 768px) and (max-width: 1024px) {

        .client img {
          max-width: 100px;
          height: 40px;
        }

      }


      @media (max-width: 768px) {
        .banner_content {
          padding-top: 25% !important;
        }

      }

      /*
@media (min-width: 768px) and (max-width: 1024px) and (orientation: Portrait) {

.client img{
    max-width: 115px;
height: 40px;
}*/

      @media (min-width: 768px) and (max-width: 1024px) and (orientation: landscape) {

        .client img {
          max-width: 115px;
          height: 40px;
        }

      }

      @media (min-width: 768px) {
        .client .col-md-3 {
          text-align: center;
        }
      }
    </style>

    <style>
      @media (max-width: 736px) and (orientation: portrait) {

        .bg-img {
          background-size: 10px;
        }
      }

      @media (max-width: 736px) and (orientation: landscape) {

        .bg-img {
          background-size: 500px;
          background-position-x: -85px;
        }
      }

      @media (max-width: 765px) {
        .mob_hid_div {
          display: none !important;
        }

        .p_120 {
          padding-top: 0 !important;
        }

        .home_banner_area {
          min-height: 150px !important;
        }

        .home_banner_area .banner_inner {
          min-height: 0;
          padding: 0 0px 0 0px;
        }

        .header_area+section,
        .header_area+row,
        .header_area+div {
          margin-top: 0;
        }

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
            <h1>SKITC</h1>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

          </button>

          <!-- Collect the nav links, forms, and other content for toggling -->

          <div class="collapse navbar-collapse offset " id="navbarSupportedContent">

            <ul class="nav navbar-nav menu_nav justify-content-center">

              <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>

              <li class="nav-item"><a class="nav-link" href="products.php">Products</a></li>
              <!-- <li class="nav-item"><a class="nav-link" href="features.php">Features</a></li> -->

              <!-- <li class="nav-item"><a class="nav-link" href="pricing.php">Pricing</a></li> -->
              <!-- <li class="nav-item"><a class="nav-link" href="customers.php">Customers</a></li> -->

              <li class="nav-item"><a class="nav-link" href="career.php">Career</a></li>
              <li class="nav-item"><a class="nav-link" href="aboutus.php">About Us</a></li>

              <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>

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
function commonHeader_dev()
{ ?>

  <!--================Header Menu Area =================-->

  <header class="header_area">

    <div class="main_menu">

      <nav class="navbar navbar-expand-lg navbar-light">

        <div class="container box_1620">

          <!-- Brand and toggle get grouped for better mobile display -->

          <a class="navbar-brand logo_h" href="index.php" style="color:white; font-weight:500; font-size:25px;">
            <h1>SKITC</h1>
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
              <!-- <li class="nav-item"><a class="nav-link" href="features.php">Features</a></li> -->

              <li class="nav-item"><a class="nav-link" href="pricing_dev.php">Pricing</a></li>
              <li class="nav-item"><a class="nav-link" href="customers.php">Customers</a></li>

              <li class="nav-item"><a class="nav-link" href="career.php">Career</a></li>
              <li class="nav-item"><a class="nav-link" href="aboutus.php">About Us</a></li>

              <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
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
function commonHeader_forallin()
{ ?>

  <!--================Header Menu Area =================-->

  <header class="header_area">

    <div class="main_menu">

      <nav class="navbar navbar-expand-lg navbar-light">

        <div class="container box_1620">

          <!-- Brand and toggle get grouped for better mobile display -->

          <a class="navbar-brand logo_h" href="index.php" style="color:white; font-weight:500; font-size:25px;">
            <h1>SKITC</h1>
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
              <!-- <li class="nav-item"><a class="nav-link" href="features.php">Features</a></li> -->

              <li class="nav-item"><a class="nav-link" href="forallin_pricing_dev.php">Pricing</a></li>
              <li class="nav-item"><a class="nav-link" href="customers.php">Customers</a></li>

              <li class="nav-item"><a class="nav-link" href="career.php">Career</a></li>
              <li class="nav-item"><a class="nav-link" href="aboutus.php">About Us</a></li>

              <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
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
function commonHeader_seo()
{ ?>

  <!--================Header Menu Area =================-->

  <header class="header_area">

    <div class="main_menu">

      <nav class="navbar navbar-expand-lg navbar-light">

        <div class="container box_1620">

          <!-- Brand and toggle get grouped for better mobile display -->

          <a class="navbar-brand logo_h" href="index.php" style="color:white; font-weight:500; font-size:25px;">
            <h1>SKITC</h1>
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
              <!-- <li class="nav-item"><a class="nav-link" href="features.php">Features</a></li> -->

              <li class="nav-item"><a class="nav-link" href="pricing_dev_seo.php">Pricing</a></li>
              <li class="nav-item"><a class="nav-link" href="customers.php">Customers</a></li>

              <li class="nav-item"><a class="nav-link" href="career.php">Career</a></li>
              <li class="nav-item"><a class="nav-link" href="aboutus.php">About Us</a></li>

              <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
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
function commonHeader_smo()
{ ?>

  <!--================Header Menu Area =================-->

  <header class="header_area">

    <div class="main_menu">

      <nav class="navbar navbar-expand-lg navbar-light">

        <div class="container box_1620">

          <!-- Brand and toggle get grouped for better mobile display -->

          <a class="navbar-brand logo_h" href="index.php" style="color:white; font-weight:500; font-size:25px;">
            <h1>SKITC</h1>
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
              <!-- <li class="nav-item"><a class="nav-link" href="features.php">Features</a></li> -->

              <li class="nav-item"><a class="nav-link" href="pricing_dev_smo.php">Pricing</a></li>
              <li class="nav-item"><a class="nav-link" href="customers.php">Customers</a></li>

              <li class="nav-item"><a class="nav-link" href="career.php">Career</a></li>
              <li class="nav-item"><a class="nav-link" href="aboutus.php">About Us</a></li>

              <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
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
function commonHeader_fca()
{ ?>

  <!--================Header Menu Area =================-->

  <header class="header_area">

    <div class="main_menu">

      <nav class="navbar navbar-expand-lg navbar-light">

        <div class="container box_1620">

          <!-- Brand and toggle get grouped for better mobile display -->

          <a class="navbar-brand logo_h" href="index.php" style="color:white; font-weight:500; font-size:25px;">
            <h1>SKITC</h1>
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
              <!-- <li class="nav-item"><a class="nav-link" href="features.php">Features</a></li> -->

              <li class="nav-item"><a class="nav-link" href="fca_pricing_dev.php">Pricing</a></li>
              <li class="nav-item"><a class="nav-link" href="customers.php">Customers</a></li>

              <li class="nav-item"><a class="nav-link" href="career.php">Career</a></li>
              <li class="nav-item"><a class="nav-link" href="aboutus.php">About Us</a></li>

              <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
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
function commonHeader_wp()
{ ?>

  <!--================Header Menu Area =================-->

  <header class="header_area">

    <div class="main_menu">

      <nav class="navbar navbar-expand-lg navbar-light">

        <div class="container box_1620">

          <!-- Brand and toggle get grouped for better mobile display -->

          <a class="navbar-brand logo_h" href="index.php" style="color:white; font-weight:500; font-size:25px;">
            <h1>SKITC</h1>
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
              <!-- <li class="nav-item"><a class="nav-link" href="features.php">Features</a></li> -->

              <li class="nav-item"><a class="nav-link" href="wp_pricing.php">Pricing</a></li>
              <li class="nav-item"><a class="nav-link" href="customers.php">Customers</a></li>

              <li class="nav-item"><a class="nav-link" href="career.php">Career</a></li>
              <li class="nav-item"><a class="nav-link" href="aboutus.php">About Us</a></li>

              <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
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

        <a class="banner_btn2" href="register.php">Register</a>

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

  <script type="text/javascript">
    /**********************/
    /*  Client carousel   */
    /**********************/
  </script>



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

  <?php

  ?>

  <footer class="footer_area p_120">

    <div class="container">

      <div class="row footer_inner">

        <div class="col-lg-5 col-sm-6">

          <aside class="f_widget ab_widget">

            <div class="f_title">

              <h3>About Me</h3>

            </div>

            <p>Do you want to be even more successful? Love to develop and growth. The more effort you put into improving your business,</p>

            <p>© <a href="http://itsk.in" target="_blank">SKITC</a> 2022. All Rights Reserved.</p>

            <p><a href="privacy_policy.php" target="_blank">Privacy Policy</a> | <a href="terms.php" target="_blank">Terms & Conditions</a> | <a href="refund_policy.php" target="_blank">Refund Policy</a> | <a href="disclaimer.php" target="_blank">Disclaimer</a> </p>

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

              <li><a href="https://m.facebook.com/skitcorporate22"><i class="fa fa-facebook"></i></a></li>

              <li><a href="https://twitter.com/skitcorporate?lang=en"><i class="fa fa-twitter"></i></a></li>

              <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>

              <li><a href="#"><i class="fa fa-instagram"></i></a></li>

            </ul>

          </aside>

        </div>

      </div>

    </div>

  </footer>

  <!--================End Footer Area =================-->



<?php } ?>