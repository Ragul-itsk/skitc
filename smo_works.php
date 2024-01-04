<?php
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


    <!--================ Home Banner Area =================-->
    <section class="home_banner_area">
        <div class="banner_inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner_content" style="padding-top:15%;    text-align: center;">
                            <h2>Our Works</h2>
                            <!-- <p>We provide free trial access to the system and our comprehensive videos will explain everything you want to know about it.</p> -->
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




    <!-- own 2 -->

    <!-- end own 2 -->


    <!--================End Made Life Area =================-->


    <!--================Testimonials Area =================-->


    <!-- overseas clients -->

    <!-- data entry client -->
    <!--  -->



    <!--================End Testimonials Area =================-->



    <!--================Testimonials Area =================-->




    <!--================End Testimonials Area =================-->

    <!--================Made Life Area =================-->
    <section id="gallery">
        <div class="container">
            <div id="image-gallery">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 image">
                        <div class="img-wrapper">
                            <a href="img/Smo images/1.jpg"><img src="img/Smo images/1.jpg" class="img-responsive"></a>
                            <div class="img-overlay">
                                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 image">
                        <div class="img-wrapper">
                            <a href="img/Smo images/2.jpg"><img src="img/Smo images/2.jpg" class="img-responsive"></a>
                            <div class="img-overlay">
                                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 image">
                        <div class="img-wrapper">
                            <a href="img/Smo images/3.jpg"><img src="img/Smo images/3.jpg" class="img-responsive"></a>
                            <div class="img-overlay">
                                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 image">
                        <div class="img-wrapper">
                            <a href="img/Smo images/4.jpg"><img src="img/Smo images/4.jpg" class="img-responsive"></a>
                            <div class="img-overlay">
                                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>



                </div><!-- End row -->
            </div><!-- End image gallery -->
        </div><!-- End container -->
    </section>

    <br>


    <!--================End Made Life Area =================-->

    <!--================Screen Area =================-->
    <!--  <section class="screen_area text-center p_120">
     <div class="container">
         <div class="main_title">
             <h2>Unique Dashboard that work perfectly</h2>
             <p></p>
         </div>
         <img class="img-fluid" src="img/banner/home-left-1.png" alt="">
     </div>
 </section> -->
    <!--================End Screen Area =================-->







    <!--================Made Life Area =================-->
    <!-- <section class="made_life_area made_white p_120">
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
</section> -->
    <!--================End Made Life Area =================-->

    <!--================Impress Area =================-->
    <?php commonGotImpressed(); ?>
    <!--================End Impress Area =================-->
    <?php commonFooter(); ?>
    <?php commonScripts(); ?>

    <script>
        // Gallery image hover
        $(".img-wrapper").hover(
            function() {
                $(this).find(".img-overlay").animate({
                    opacity: 1
                }, 600);
            },
            function() {
                $(this).find(".img-overlay").animate({
                    opacity: 0
                }, 600);
            }
        );

        // Lightbox
        var $overlay = $('<div id="overlay"></div>');
        var $image = $("<img>");
        var $prevButton = $('<div id="prevButton"><i class="fa fa-chevron-left"></i></div>');
        var $nextButton = $('<div id="nextButton"><i class="fa fa-chevron-right"></i></div>');
        var $exitButton = $('<div id="exitButton"><i class="fa fa-times"></i></div>');

        // Add overlay
        $overlay.append($image).prepend($prevButton).append($nextButton).append($exitButton);
        $("#gallery").append($overlay);

        // Hide overlay on default
        $overlay.hide();

        // When an image is clicked
        $(".img-overlay").click(function(event) {
            // Prevents default behavior
            event.preventDefault();
            // Adds href attribute to variable
            var imageLocation = $(this).prev().attr("href");
            // Add the image src to $image
            $image.attr("src", imageLocation);
            // Fade in the overlay
            $overlay.fadeIn("slow");
        });

        // When the overlay is clicked
        $overlay.click(function() {
            // Fade out the overlay
            $(this).fadeOut("slow");
        });

        // When next button is clicked
        $nextButton.click(function(event) {
            // Hide the current image
            $("#overlay img").hide();
            // Overlay image location
            var $currentImgSrc = $("#overlay img").attr("src");
            // Image with matching location of the overlay image
            var $currentImg = $('#image-gallery img[src="' + $currentImgSrc + '"]');
            // Finds the next image
            var $nextImg = $($currentImg.closest(".image").next().find("img"));
            // All of the images in the gallery
            var $images = $("#image-gallery img");
            // If there is a next image
            if ($nextImg.length > 0) {
                // Fade in the next image
                $("#overlay img").attr("src", $nextImg.attr("src")).fadeIn(800);
            } else {
                // Otherwise fade in the first image
                $("#overlay img").attr("src", $($images[0]).attr("src")).fadeIn(800);
            }
            // Prevents overlay from being hidden
            event.stopPropagation();
        });

        // When previous button is clicked
        $prevButton.click(function(event) {
            // Hide the current image
            $("#overlay img").hide();
            // Overlay image location
            var $currentImgSrc = $("#overlay img").attr("src");
            // Image with matching location of the overlay image
            var $currentImg = $('#image-gallery img[src="' + $currentImgSrc + '"]');
            // Finds the next image
            var $nextImg = $($currentImg.closest(".image").prev().find("img"));
            // Fade in the next image
            $("#overlay img").attr("src", $nextImg.attr("src")).fadeIn(800);
            // Prevents overlay from being hidden
            event.stopPropagation();
        });

        // When the exit button is clicked
        $exitButton.click(function() {
            // Fade out the overlay
            $("#overlay").fadeOut("slow");
        });
    </script>




</body>

</html>