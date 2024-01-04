<?php
require_once("Includes/commonFunctions.php");

if (isset($_POST['register'])) {

    $to = "kamal@itsk.in";
    $from = $_POST['email'];
    $name = $_POST['organization'];
    $subject = "Web Development Enquiry From Website";
    $number = $_POST['phone'];

    $headers = "From: $from";
    $headers = "From: " . $from . "\r\n";
    $headers .= "Reply-To: " . $from . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $subject = "{$subject}";

    $logo = 'img/logo.png';
    $link = '#';

    $body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";
    $body .= "<table style='width: 100%;'>";
    $body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
    $body .= "<a href='{$link}'><img src='{$logo}' alt=''></a><br><br>";
    $body .= "</td></tr></thead><tbody><tr>";
    $body .= "<td style='border:none;'><strong>Name:</strong> {$name}</td>";
    $body .= "<td style='border:none;'><strong>Email:</strong> {$from}</td>";
    $body .= "<td style='border:none;'><strong>Phone:</strong> {$number}</td>";
    $body .= "</tr>";
    // 	$body .= "<tr><td style='border:none;'><strong>Subject:</strong> {$subject}</td></tr>";
    // 	$body .= "<tr><td style='border:none;'><strong>Phone:</strong> {$number}</td></tr>";
    $body .= "<tr><td></td></tr>";
    // 	$body .= "<tr><td colspan='2' style='border:none;'>{$cmessage}</td></tr>";
    $body .= "</tbody></table>";
    $body .= "</body></html>";

    // $send = mail($to, $subject, $body, $headers);

    if (mail($to, $subject, $body, $headers)) {
?>
        <script type="text/javascript">
            alert('Thank You ..! Registration Successful..!');
            window.location = "web_register_dev.php";
        </script>
<?php
    }
}

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

    <!--================Header Menu Area =================-->
    <?php commonHeader(); ?>
    <!--================Header Menu Area =================-->

    <!--================Home Banner Area =================-->
    <section class="banner_area" style="min-height: 180px;">
        <div class="banner_inner d-flex align-items-center" style="min-height: 180px;">
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Register Here</h2>
                    <div class="page_link">
                        <a href="index.php">Home</a>
                        <a href="register.php">Register Here</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--================ End Home Banner Area =================-->

    <!--================ Contact Area =================-->

    <section class="contact_area " style="padding: 50px 0 50px 0;">
        <div class="container">
            <div class="bg-img">
                <br>


                <form action="web_register_dev.php" method="post" id="" autocomplete="off" class="form_container">
                    <h3 class="mb-10 title_color" style="text-align: center;">Free Trial Register</h3>



                    <div class="mt-10">
                        <input type="text" name="organization" placeholder="Organization Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Organization Name'" required class="form-control">
                        <input type="hidden" name="plan" value="<?php echo $_GET['plan'] ?>">
                    </div>
                    <div class="mt-10">
                        <input type="email" name="email" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" class="form-control">
                    </div>

                    <div class="mt-10">
                        <input type="text" name="phone" placeholder="Contact" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Contact'" required class="form-control">
                    </div>


                    <div class="mt-10">


                        <span id="response" style="display:none;"></span>

                    </div>

                    <div class="mt-10 text-center">
                        <button type="submit" value="submit" name="register" class="genric-btn success">Register</button>
                    </div>



                </form>


            </div>
        </div>
    </section>


    <!--================Contact Area =================-->

    <!--================Footer Area =================-->
    <?php commonFooter(); ?>
    <!--================End Footer Area =================-->

    <!--================Contact Success and Error message Area =================-->
    <div id="success" class="modal modal-message fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fa fa-close"></i>
                    </button>
                    <h2>Thank you</h2>
                    <p>Registration successfull ...</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modals error -->

    <div id="error" class="modal modal-message fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fa fa-close"></i>
                    </button>
                    <h2>Sorry !</h2>
                    <p> Something went wrong </p>
                </div>
            </div>
        </div>
    </div>
    <!--================End Contact Success and Error message Area =================-->




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php commonScripts(); ?>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/contact.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#subdomain').keyup(function(e) {
                e.preventDefault();
                var domain = document.getElementById("subdomain").value;
                console.log(domain);
                var subdomain = $(this).val();
                $.ajax({
                    method: 'POST',
                    url: 'check_domain.php',
                    data: {
                        keyword: subdomain,
                        domain: domain,
                    },
                    dataType: 'json',
                    success: function(response) {
                        $('#response').show().html(response);
                    }
                });
            });
        });
    </script>
</body>

</html>