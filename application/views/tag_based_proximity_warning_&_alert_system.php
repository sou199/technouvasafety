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
				<div class="col-sm-12 col-md-12" style="text-align:center">
					<div class="title-page">Tag Based Proximity Warning & Alert System</div>
					
				</div>
			</div>
		</div>
	</div>
	 
	<!-- ABOUT FEATURE -->
	<div class="section feature overlap">
		<div class="container">
			<div class="row">
				
				<div class="col-sm-4 col-md-4">
		
						<div class="item">
							<img src="<?php echo base_url()?>assets/images/product-3.png" alt="Company History">
						</div>
        
				</div>
				<div class="col-sm-8 col-md-8">
					<div class="content">
                      
                        <ul>
                            <li style="font-size: 15px;font-weight: 600;">System Control Unit with built in ORU (surface mounted operator reset button and buzzer)</li>
                            <ul>
                                <li>Power Input: 12 – 60 V DC ( to cater to all Battery voltages of different equipment models)</li>
                                <li>Type: Compact ABS –Light weight and easy to install rugged use enclosure.</li>
                                <li>Detection: Multi Tag- Native known protocol</li>
                                <li>Data Log: 10,000 event storage capacity with auto archiving option.</li>
                                <li>Range: Software/Hardware Gain Setting from 0 to 30 meters and above</li>
                                <li>Interfaces: Mobile/Tablet – Android and PC – Windows Vista and all upgrades.</li>
                                <li>Operator Neutral tags: User settable (5 tags that shall not activate buzzer)</li>
                                <li>Ingress Protection: IP 67.</li>
                            </ul>
                            <li style="font-size: 15px;font-weight: 600;"> Real Time Active Tags (Wearable)</li>
                            <ul>
                                <li>Active Real time Tags with Lanyard and Safety Helmet gadget</li>
                                <li>15 meter range</li>
                                <li>Ingress Protection: IP 67</li>
                            </ul>
                            <li style="font-size: 15px;font-weight: 600;"> Monitor & Cameras </li>
                            <ul>
                                <li>Power Input: 12/32 V DC</li>
                                <li>Screen: 7” digital LCD display - 16:9 wide</li>
                                <li>Viewing Angle: 170 ⁰</li>
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