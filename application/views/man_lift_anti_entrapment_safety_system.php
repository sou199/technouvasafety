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
					<div class="title-page">Man lift Anti Entrapment Safety System</div>
					
				</div>
			</div>
		</div>
	</div>
	 
	<!-- ABOUT FEATURE -->
	<div class="section feature overlap">
		<div class="container">
			<div class="row">
            <!--<h4 class="section-heading"style="text-align:center;">Man lift Anti Entrapment Safety System</h4>-->
				<div class="col-sm-6 col-md-6">
		
						<div class="item">
							<img src="<?php echo base_url()?>assets/images/products-5.png" alt="Company History">
						</div>
        
				</div>
				<div class="col-sm-6 col-md-6">
					<div class="content">
                        <ul>
                            <li>Man lift safety usage for protecting operators from entrapment and crushing due
                                to unseen obstruction in high work areas. It also reduces the risk of entrapment
                                by providing a alert that a situation has occurred.
                            </li>
                            <li>Vigil Highsafe system provides safety to Man lift and other lift equipment
                                operators by incorporating technology that prevents accidents and injury by
                                entrapment and or involuntary operations of the controls
                            </li>
                            <li>Real time immediate response system which when activated immediately stops
                                further movement of the boom and immediately activates the audible and visual
                                alarm to notify others of the accident.
                            </li>
                            <li style="font-size: 15px;font-weight: 600;">V i g i l H i g h s a f e h a s d e v e l o p e d t w o l e v e l s o f s a f e t y .</li>
                            <ul>
                                <li>L e v e l 1 : Primary Guarding Device– Physical Steel Barriers or Guards</li>
                                <li>L e v e l 2 : Secondary Guarding Device– Anti Entrapment Protection Pressure Sensing Bar.
</li>
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