<?php
require_once("Includes/commonFunctions.php");
// require_once("db-config/config.php");

if (isset($_POST['register'])) {
    // alert("in");
    function randomPassword($length, $count, $characters)
    {

        // $length - the length of the generated password
        // $count - number of passwords to be generated
        // $characters - types of characters to be used in the password 

        // define variables used within the function    
        $symbols = array();
        $passwords = array();
        $used_symbols = '';
        $pass = '';

        // an array of different character types    
        $symbols["lower_case"] = 'abcdefghijklmnopqrstuvwxyz';
        $symbols["upper_case"] = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $symbols["numbers"] = '1234567890';
        $symbols["special_symbols"] = '!?~@#-_+<>[]{}';

        $characters = split(",", $characters); // get characters types to be used for the passsword
        foreach ($characters as $key => $value) {
            $used_symbols .= $symbols[$value]; // build a string with all characters
        }
        $symbols_length = strlen($used_symbols) - 1; //strlen starts from 0 so to get number of characters deduct 1

        for ($p = 0; $p < $count; $p++) {
            $pass = '';
            for ($i = 0; $i < $length; $i++) {
                $n = rand(0, $symbols_length); // get a random character from the string with all characters
                $pass .= $used_symbols[$n]; // add the character to the password string
            }
            $passwords[] = $pass;
        }

        return $passwords; // return the generated password
    }

    $my_passwords = randomPassword(10, 1, "lower_case,upper_case,numbers,special_symbols");
    //echo $my_passwords[0];
    $pass_code = md5($my_passwords[0]);
    $now = date('Y-m-d');
    $start_date1 = strtotime($now);
    $end_date1 = strtotime("+15 day", $start_date1);
    //echo "<br>";
    $start_date =  date('Y-m-d', $start_date1);
    $end_date = date('Y-m-d', $end_date1);
    //echo $password_encoded = base64_encode($my_passwords[0]);
    //echo "<br>";
    //echo $password_decoded = base64_decode($password_encoded);

    //print_r($my_passwords);

    $insert_query = "INSERT INTO `master_login`(`user_group_id`,`username`,`organization`, `email`, `phone`,`activate_status`,`profile_status`, `website_name`, `password`, `trail_status`,`start_date`,`end_date`,`client_name`,`client_title`,`created_by`) VALUES ('1','" . $_POST['organization'] . "','" . $_POST['organization'] . "', '" . $_POST['email'] . "','" . $_POST['phone'] . "','Active','Active','" . $_POST['website_name'] . "', '" . $pass_code . "', 'Active','$start_date','$end_date','" . $_POST['subdomain'] . "','" . $_POST['organization'] . "','Self')";
    mysqli_query($conn, $insert_query);
    error_log($insert_query, 3, 'kd.txt');
    $message = "<p style='color:green'>Registration Successful...</p>";
?>
    <script type="text/javascript">
        alert('Thank You ..! Registration Successful..!');
        window.location = "register.php";
    </script>
<?php
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


                <form action="ovr_register.php" method="post" id="" autocomplete="off" class="form_container">
                    <h3 class="mb-10 title_color" style="text-align: center;"> Register</h3>



                    <div class="mt-10">
                        <input type="text" name="name" placeholder="Organization Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Organization Name'" required class="form-control">
                    </div>
                    <div class="mt-10">
                        <input type="email" name="email" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required class="form-control">
                    </div>

                    <div class="mt-10">
                        <input type="text" name="phone" placeholder="Contact" onfocus="this.placeholder = ''" onkeypress="return event.charCode > 47 && event.charCode < 58;" maxlength="15" onblur="this.placeholder = 'Contact'" required class="form-control">
                    </div>

                    <div class="mt-10">
                        <input type="text" name="watsapp_number" placeholder="Whatsapp Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Whatsapp Number'" required class="form-control">
                    </div>

                    <!--	<div class="mt-10">
									
									
										<input type="text" id="subdomain" name="subdomain" placeholder="Sub Domain"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Sub Domain'" required class="form-control" >
										<span id="response" style="display:none;"></span>
										
									</div>-->

                    <div class="mt-10 text-center">
                        <button type="submit" value="submit" name="register" class="genric-btn success">Submit</button>
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