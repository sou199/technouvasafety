<!DOCTYPE html>
<html lang="zxx">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php 
        if (!empty($title)) {
           echo $title;
        }else {
            echo "technouvasafety";
        }
        ?></title>
    <meta name="description" content="Petro - Industrial HTML Template. It is built using bootstrap 3.3.2 framework, works totally responsive, easy to customise, well commented codes and seo friendly.">
    <meta name="keywords" content="petro, industrial, oil and gas, company, manufacturing, mechanical, power and energy, engineering">
    <meta name="author" content="rudhisasmito.com"> 
	<?php require_once "links.php" ?>

</head>

<style>
	  .banner-page.about {
        background: url(<?php echo base_url() ?>assets/images/conatct-us.png) bottom center no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }
     .banner-page .title-page{
        color: #6598ff !important;
        text-align: center;
        text-shadow: 3px 3px 3px #000000;

   }

</style>

<body>
    <?php require_once "header.php" ?>
	<!-- Load page -->
	<div class="animationload">
		<div class="loader"></div>
	</div>


	<!-- BANNER -->
	<div class="section banner-page about">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="title-page">Contact Us</div>
					<!--<ol class="breadcrumb">-->
					<!--	<li><a href="#">Home</a></li>-->
					<!--	<li class="active">Contact Us</li>-->
					<!--</ol>-->
				</div>
			</div>
		</div>
	</div>

	<!-- Contact -->
	<div class="section contact overlap">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-md-4 col-md-push-8">
					<div class="widget download">
						<!-- <a href="#" class="btn btn-secondary btn-block btn-sidebar"><span class="fa  fa-file-pdf-o"></span> Company Brochure</a> -->
					</div>
					<div class="widget contact-info-sidebar">
						<div class="widget-title">
							Contact Info
						</div>
						<ul class="list-info">
							<li>
								<div class="info-icon">
									<span class="fa fa-map-marker"></span>
								</div>
								<div class="info-text">UAE –Sales and Distribution
									<br>Technuova Trading LLC, 508-1 Apricot Towers, Dubai Silicon Oasis, Dubai ,UAE.
								</div>
							 </li>
							<li>
								<div class="info-icon">
									<span class="fa fa-phone"></span>
								</div>
								<div class="info-text">+971 588039681</div>
							</li>
							<li>
								<div class="info-icon">
									<span class="fa fa-envelope"></span>
								</div>
								<div class="info-text">sales@technuovasafety.com</div>
							</li>
							<!-- <li>
								<div class="info-icon">
									<span class="fa fa-clock-o"></span>
								</div>
								<div class="info-text">Mon - Sat 09:00 - 17:00</div>
							</li> -->
						</ul>
					</div> 

				</div>
				<div class="col-sm-8 col-md-8 col-md-pull-4">
					<div class="content">
						<div class="margin-bottom-30"></div>
						<h3 class="section-heading-2">
							Contact Details
						</h3>
						<form action="#" class="form-contact" id="contactForm" data-toggle="validator" novalidate="true">
							<div class="form-group">
								<input type="text" class="form-control" id="p_name" placeholder="Full Name..." required="">
								<div class="help-block with-errors"></div>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="p_email" placeholder="Enter phone number..." required="">
								<div class="help-block with-errors"></div>
							</div>
							<div class="form-group">
								<input type="email" class="form-control" id="p_email" placeholder="Enter your email.." required="">
								<div class="help-block with-errors"></div>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="p_subject" placeholder="Enter Location...">
								<div class="help-block with-errors"></div>
							</div>
							<div class="form-group">
								 <textarea id="p_message" class="form-control" rows="6" placeholder="Write message"></textarea>
								<div class="help-block with-errors"></div>
							</div>
							<div class="form-group">
								<div id="success"></div>
								<button type="submit" class="btn btn-secondary disabled" style="pointer-events: all; cursor: pointer;">ASK A QUOTE</button>
							</div>
						</form>
						<!-- <div class="margin-bottom-50"></div>
						<p><em>Note: Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</em></p>
					 </div> -->
				</div>

			</div>
			
		</div>
	</div>	

	<!-- MAPS -->
	<div class="maps-wraper">
		
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4296.147174327225!2d55.38109437241576!3d25.11489892502201!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f64690166e3d5%3A0x6b3e95ffb4a65893!2sApricot%20Tower%20-%20Sheikh%20Zayed%20Bin%20Hamdan%20Al%20Nahyan%20Street%20-%20Dubai%20Silicon%20Oasis%20-%20Dubai%20-%20United%20Arab%20Emirates!5e0!3m2!1sen!2sin!4v1671687402256!5m2!1sen!2sin" width="100%" height="450px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
	</div>

	 
	<!-- FOOTER SECTION -->
	<?php require_once "footer.php" ?>

<?php require_once "scripts.php" ?>

		
</body>
</html>