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
					<div class="title-page">Tag Based Proximity Warning & Alert System</div>
					
				</div>
			</div>
		</div>
	</div>
	 
	<!-- ABOUT FEATURE -->
	<div class="section feature overlap">
		<div class="container">
			<div class="row">
            <!--<h4 class="section-heading"style="text-align:center;">Tag Based - Real Time 360 Deg Protection for workers</h4>-->
				<div class="col-sm-8 col-md-8">
		
						<div class="item">
							<img src="<?php echo base_url()?>assets/images/product-1.png" alt="Company History">
						</div>
        
				</div>
				<div class="col-sm-4 col-md-4">
					<div class="content">
                        <ul>
                            <li >Vigil TBPWAS system works on Real Time Smart
                                detection technology designed to detect workers and
                                assets in hazard areas where accidents due to heavy
                                construction equipment's are most likely to occur in oil &
                                gas construction sites, mining, warehousing, ports and
                                other construction sites which are deemed critical hazard
                                areas
                            </li>
                            <li> It works on the principal of real time smart detection
                                where a worker is equipped with a active Tag when ever
                                he is entering the site area which acts as a safety beacon
                                which is identified by the system controller installed in the
                                heavy equipment6 or vehicle and the moment the active
                                tag worn by workers in the construction zone is detected,
                                the system immediately alerts the operator and workers
                                with a 80-100 db alarm which alerts the driver of an
                                intrusion in the hazard zone, The incident is also recorded
                                in the data logger and can be downloaded in the form of a
                                incident reporting format which can be used by the safety
                                & loss prevention team and PMT to assess the near miss
                                incidents.
                            </li>
                            <li>A second level of safety for the operator is also provided
                                via the front and rear camera system which gives the
                                operator visual access to blind spots there by avoiding
                                accidents and damage to assets and property.
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