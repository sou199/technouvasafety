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
							<img src="<?php echo base_url()?>assets/images/product-2.png" alt="Company History">
						</div>
        
				</div>
				<div class="col-sm-6 col-md-6">
					<div class="content">
                        <ul>
                            <li >Vigil Radar Based Proximity Warning System is designed for
                                Object detection with system alerts providing operators with time
                                to respond to hazards and avoid collisions.
                            </li>
                            <li>Collision avoidance systems can help equipment operators
                                minimize the risk of accidents and injury and can translate into
                                cost reductions and efficiency improvements.
                            </li>
                            <li>Diminished visibility plays a significant role in many construction
                                site accidents. The size and power of excavating equipment
                                leaves little room for error. Blind spots can be quite large and
                                located on all sides of a vehicle. Dust, dirt and debris raised
                                during excavation can have a detrimental effect on visibility and
                                equipment performance
                            </li>
                            <li>
                                To help overcome these challenges, Vigil Radar-based sensors is
                                installed at the rear of the dump trucks and heavy equipment`s .
                                The sensors provide active object detection in vehicle blind spots
                                up to 180 Deg sensing area.
                            </li>
                            <li>
                                The sensors emit fan-shaped beams of high frequency radio
                                waves. To avoid false alerts, each sensor was configured to create
                                a sensing area corresponding to its blind spot, ignoring objects
                                outside that area. An on-board camera and monitor system allows
                                the operator to check for any obstructions in a short span of time

                            </li>
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