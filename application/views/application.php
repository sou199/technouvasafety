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
        background: url(<?php echo base_url() ?>assets/images/application.png) bottom center no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }
    .section-heading:before {
        border: none !important;
    }
     .banner-page .title-page{
        color: #6598ff !important;
        text-align: center;
        text-shadow: 3px 3px 3px #000000;

   }


</style>

<body>

<?php require_once "header.php" ?>
	<!-- BANNER -->
	<div class="section banner-page about">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="title-page">APPLICATION</div>
					
				</div>
			</div>
		</div>
	</div>
	 
	<!-- ABOUT FEATURE -->
	<div class="section feature overlap">
		<div class="container">
			<div class="row">
            <h4 class="section-heading"style="text-align:center;">APPLICATION</h4>
				<div class="col-sm-6 col-md-6">
		
						<div class="item">
							<img src="<?php echo base_url()?>assets/images/application-1.png" alt="Company History">
						</div>
        
				</div>
				<div class="col-sm-6 col-md-6">
					<div class="content">
                        <ul>
                            <li style="font-size: 15px;font-weight: 600;">Bulldozer</li>
                            <li style="font-size: 15px;font-weight: 600;">Roller / Vibratory Compactor</li>
                            <li style="font-size: 15px;font-weight: 600;">Earthmoving Equipment (Excavators/Rollers/Loaders)</li>
                            <li style="font-size: 15px;font-weight: 600;">Haul and Dump Trucks</li>
                            <li style="font-size: 15px;font-weight: 600;">Tracked or Wheeled Shovels and Loaders</li>
                            <li style="font-size: 15px;font-weight: 600;">Tracked or Wheeled Excavators</li>
                            <li style="font-size: 15px;font-weight: 600;">Scrapers</li>
                            <li style="font-size: 15px;font-weight: 600;">Motor Graders</li>
                            <li style="font-size: 15px;font-weight: 600;">Grade All</li>
                            <li style="font-size: 15px;font-weight: 600;">Water Tankers</li>
                            <li style="font-size: 15px;font-weight: 600;">Waste and Fuel Tankers</li>
                            <li style="font-size: 15px;font-weight: 600;">Tractors</li>
                            <li style="font-size: 15px;font-weight: 600;">Telescopic Handlers</li>
                            <li style="font-size: 15px;font-weight: 600;">Backhoe</li>
                            <li style="font-size: 15px;font-weight: 600;">Fork Lifts</li>
                        </ul>
                    </div>
				</div>

				<div class="clearfix"></div>
				<div class="margin-bottom-70"></div>
            </div>
            
		</div>
	</div>
	
	
	 
	<!-- FOOTER SECTION -->
	<?php require_once "footer.php" ?>
	
	<?php require_once "scripts.php" ?>
		
</body>
</html>