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
        background: url(<?php echo base_url() ?>assets/images/bg.png) bottom center no-repeat;
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
					<div class="title-page">Radar Based 
Rear Blind Spot 
Protection for workers</div>
					
				</div>
			</div>
		</div>
	</div>
	 
	<!-- ABOUT FEATURE -->
	<div class="section feature overlap">
		<div class="container">
			<div class="row">
<!--            <h4 class="section-heading"style="text-align:center;">Radar Based -->
<!--Rear Blind Spot -->
<!--Protection for workers</h4>-->
				<div class="col-sm-6 col-md-6">
		
						<div class="item">
							<img src="<?php echo base_url()?>assets/images/product-4.png" alt="Company History">
						</div>
        
				</div>
				<div class="col-sm-6 col-md-6">
					<div class="content">
                        <ul>
                            <li style="font-size: 15px;font-weight: 600;">Proximity Sensor</li>
                            <ul>
                                <li>Operating Voltage (12 to 24 V)</li>
                                <li>Operating Temp (+65 `C)</li>
                                <li>Al Alloy Rugged IP67 Enclosure</li>
                            </ul>
                            <li style="font-size: 15px;font-weight: 600;">In Cabin Alarm and LED Indicator</li>
                            <ul>
                                <li>Operating Voltage (12 V)</li>
                                <li>Operating Temp (+60 `C)</li>
                                <li>Audible Range 85db</li>
                            </ul>
                            <li style="font-size: 15px;font-weight: 600;">Monitor & Cameras</li>
                            <ul>
                                <li>Power Input: 12/32 V DC</li>
                                <li>Screen: 7” digital LCD display - 16:9 wide Viewing Angle: 170 ⁰</li>
                            </ul>
                        
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