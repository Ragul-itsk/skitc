<?php
require_once("Includes/commonFunctions.php");
define("DB_USER", "thetutor_itsk");
define("DB_PASSWORD", "1om7f2!U");
define("DB_DATABASE", "thetutor_itsk");
define("DB_HOST", "localhost");

//Do the conntection
$conn = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

//Check if it's valid
if (!$conn) {

	//Add it up to the session, and redirect
	$errorMsg = "<div style='padding-left: 50px;color:#FF0000'>Cannot connect to mysql server!</div>";
	echo  $errorMsg;
	/* $log  = "Cannot connect to mysql server".' - '.date("F j, Y, g:i a").PHP_EOL.
        "-------------------------".PHP_EOL;
		file_put_contents('../logs/dbServer/log_'.date("j.n.Y").'.txt', $log, FILE_APPEND); */
	exit();
} else {

	mysqli_select_db($conn, DB_DATABASE);
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
	<style>
		p.auto:hover {
			cursor: pointer;
		}
	</style>
	<!--================Home Banner Area =================-->
	<section class="banner_area" style="min-height: 180px;">
		<div class="banner_inner d-flex align-items-center" style="min-height: 180px;">
			<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
			<div class="container">
				<div class="banner_content text-center">
					<h2>CAREER</h2>
					<div class="page_link">
						<a href="index.php">Home</a>
						<a href="career.php">Career</a>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!--================End Home Banner Area =================-->

	<!--================Contact Area =================-->
	<section class="contact_area p_120">
		<div class="container">

			<div class="row">

				<div class="col-lg-8">
					<h3>Career Form</h3>
					<hr>
					<form class="row contact_form" action="career_mail.php" enctype="multipart/form-data" method="post" novalidate="novalidate">
						<div class="col-md-12">
							<div class="form-group">
								<input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name">
							</div>
							<div class="form-group">
								<input type="email" class="form-control" id="email" name="email" placeholder="Enter Email Address">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="contact" name="contact" placeholder="Enter Contact Number">
							</div>

							<div class="form-group">
								<input type="text" class="form-control" id="subject" name="subject" placeholder="Applying For">
							</div>
							<div class="form-group">
								<textarea class="form-control" name="message" id="message" rows="1" placeholder="Enter Description"></textarea>
							</div>
							<div class="form-group">
								<p>Upload Resume</p>
								<input type="file" name="resume" placeholder="Upload Resume Here" required />
							</div>
							<div class="form-group">
								<button type="submit" value="submit" class="btn submit_btn">Send Message</button>
							</div>
						</div>
					</form>
				</div>


				<div class="col-lg-4">
					<h3>Current Openings</h3>

					<hr>
					<?php $sql = "SELECT * FROM career_position WHERE id = '" . $_GET['id'] . "' ";
					$row = mysqli_fetch_array(mysqli_query($conn, $sql)); ?>
					<h5><?php echo $row['position']; ?> - Job Details </h5>
					<p align="justify">
						<?php
						$check_sql = "SELECT requirement FROM web_career where position = '" . $_GET['id'] . "' ";
						$check_row = mysqli_query($conn, $check_sql);
						$count = mysqli_num_rows($check_row);
						$check_sql1 = "SELECT description FROM web_career where position = '" . $_GET['id'] . "' and description !=''";
						$check_row1 = mysqli_query($conn, $check_sql1);
						$count1 = mysqli_num_rows($check_row1);
						//$count = 0;
						$sql_des = "SELECT description FROM web_career where position = '" . $_GET['id'] . "' and description !='' LIMIT 4";
						$query_des = mysqli_query($conn, $sql_des) or die(mysqli_error());

						while ($row_des = mysqli_fetch_array($query_des)) {

						?>

							<i class="fa fa-check" aria-hidden="true" style="color:blue"></i> <?php echo $row_des['description']; ?> <br>
						<?php
						}
						?>
					<p <?php if ($count1 < 4) {
							echo 'style="display:none"';
						} ?> class="auto" style="color:blue" id="readmore" onclick="showDiv()">Read More... </p>

					<div id="welcomeDiv" style="display:none;" class="answer_list"> <?php
																					$check_sql = "SELECT requirement FROM web_career where position = '" . $_GET['id'] . "' ";
																					$check_row = mysqli_query($conn, $check_sql);
																					$count = mysqli_num_rows($check_row);
																					//$count = 0;
																					$sql_des = "SELECT description FROM web_career where position = '" . $_GET['id'] . "' and description !='' LIMIT 8 OFFSET 4";
																					$query_des = mysqli_query($conn, $sql_des) or die(mysqli_error());

																					while ($row_des = mysqli_fetch_array($query_des)) {

																					?>

							<i class="fa fa-check" aria-hidden="true" style="color:blue"></i> <?php echo $row_des['description']; ?> <br>
						<?php
																					}
						?>
					</div>
					</p>
					<h5 <?php if ($count == 0) {
							echo 'style="display:none"';
						} ?>>Requirements </h5>
					<p>
						<?php
						$check_sql2 = "SELECT requirement FROM web_career where position = '" . $_GET['id'] . "' and requirement !=''";
						$check_row2 = mysqli_query($conn, $check_sql2);
						$count2 = mysqli_num_rows($check_row2);
						$sql_des = "SELECT requirement FROM web_career where position = '" . $_GET['id'] . "' and requirement !='' LIMIT 4";
						$query_des = mysqli_query($conn, $sql_des) or die(mysqli_error());

						while ($row_des = mysqli_fetch_array($query_des)) {

						?>
							<i class="fa fa-check" aria-hidden="true" style="color:blue"></i> <?php echo $row_des['requirement']; ?>
							<br>
						<?php }

						?>


					<p <?php if ($count2 < 4) {
							echo 'style="display:none"';
						} ?> class="auto" style="color:blue" id="read" onclick="show()">Read More...</p>

					<div id="welcome" style="display:none;" class="answer_list"> <?php

																					$sql_des = "SELECT requirement FROM web_career where position = '" . $_GET['id'] . "' and requirement !=''  LIMIT 8 OFFSET 4";
																					$query_des = mysqli_query($conn, $sql_des) or die(mysqli_error());

																					while ($row_des = mysqli_fetch_array($query_des)) {

																					?>
							<i class="fa fa-check" aria-hidden="true" style="color:blue"></i> <?php echo $row_des['requirement']; ?>
							<br>
						<?php } ?>

						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================Contact Area =================-->

	<!--================Footer Area =================-->
	<?php commonFooter(); ?>
	<!--================End Footer Area =================-->

	<!--================Contact Success and Error message Area =================
        <div id="success" class="modal modal-message fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-close"></i>
                        </button>
                        <h2>Thank you</h2>
                        <p>Your message is successfully sent...</p>
                    </div>
                </div>
            </div>
        </div>-->

	<!-- Modals error 

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
        </div>-->
	<!--================End Contact Success and Error message Area =================-->




	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<?php commonScripts(); ?>
	<script src="js/jquery.form.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/contact.js"></script>
</body>

</html>