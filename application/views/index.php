<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php 
        if (!empty($title)) {
           echo $title;
        }else {
            echo "technouvasafety";
        }
        ?>
    </title>
    <meta name="description" content="Petro - Industrial HTML Template. It is built using bootstrap 3.3.2 framework, works totally responsive, easy to customise, well commented codes and seo friendly.">
    <meta name="keywords" content="petro, industrial, oil and gas, company, manufacturing, mechanical, power and energy, engineering">
    <meta name="author" content="rudhisasmito.com">

    <?php require_once "links.php" ?>
    <style>
        .parent_div{
            box-shadow: 0 0 5px rgb(0 0 0 / 10%);
            margin: 5px;
            border-radius: 4px;
            border-top-right-radius: 25px !important;
        }
        .parent_div .content{
            padding: 0 15px 30px 15px;
        }
        .box-image-4 .media{
            border-bottom-left-radius: 25px;
            border-top-right-radius: 25px;
        }
       .grid-services .content p {
            margin-top:20px;
       }
       .grid-services .content a {
           color: #fff;
           background:#6598ff;
           padding:10px;
           border-radius:5px;
           font-weight:600;
       }
       .carousel-control.right{
            background-image:none;
       }
       .carousel-control.left{
            background-image:none;
       }
       .mb_3{
        margin-bottom:15px;
       }
       .about_div{
            display: grid;
            grid-template-columns: auto auto;
            margin: 10px 0;
       }
       .about_div .item:first-child{
            padding: 0 10px 0 0;
       }
       .about_div .item:last-child{
            padding: 0 0 0 0;
       }
       .about_parent img{
            display: block;
            margin: 0 auto;
            border-radius: 5px;
            width: 100%;
       }
       @media (max-width:767.98px)
       {
            .about_div{
                display: grid;
                grid-template-columns: auto !important;
                margin: 10px 0;
           }
           .about_div .item{
                padding: 10px 0 !important;
           }
       }
    </style>
</head>

<body>
<?php require_once "header.php" ?>

<!-- Banner -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="<?php echo base_url() ?>assets/images/slide-1.png" alt="Los Angeles">
    </div>

    <div class="item">
      <img src="<?php echo base_url() ?>assets/images/slide-2.png" alt="Chicago">
    </div>

    <div class="item">
      <img src="<?php echo base_url() ?>assets/images/slide-3.png" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <i class="glyphicon glyphicon-chevron-left fa fa-chevron-left"></i>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <i class="glyphicon glyphicon-chevron-right fa fa-chevron-right"></i>
  </a>
</div>
<!-- Banner -->

    <!-- BANNER --> 
    <div id="slides" class="section banner" style="display: none;">
        <ul class="slides-container">
            <li>
                <img src="<?php echo base_url() ?>assets/images/slide-1.png" alt="">
                <div class="overlay-bg"></div>
                <div class="container">
                    <div class="wrap-caption">
                        <h2 class="caption-heading">
                            Make Your Best Future
                        </h2>
                        <p class="excerpt"></p>
                        <a href="#" class="btn btn-primary" title="LEARN MORE">LEARN MORE</a> <a href="#" class="btn btn-secondary" title="CONTACT US">CONTACT US</a>
                    </div>
                </div>
            </li>
            <li>
                <img src="<?php echo base_url() ?>assets/images/slide-3.png" alt="">
                <div class="overlay-bg"></div>
                <div class="container">
                    <div class="wrap-caption">
                        <h2 class="caption-heading">
                            Providing Innovative Solution
                        </h2>
                        <p class="excerpt"></p>
                        <a href="#" class="btn btn-primary" title="LEARN MORE">LEARN MORE</a> <a href="#" class="btn btn-secondary" title="CONTACT US">CONTACT US</a>
                    </div>
                </div>
            </li>
            <li>
                <img src="<?php echo base_url() ?>assets/images/slide-2.png" alt="">
                <div class="overlay-bg"></div>
                <div class="container">
                    <div class="wrap-caption">
                        <h2 class="caption-heading">
                            We are the biggest company in the world
                        </h2>
                        <p class="excerpt"></p>
                        <a href="#" class="btn btn-primary" title="LEARN MORE">LEARN MORE</a> <a href="#" class="btn btn-secondary" title="CONTACT US">CONTACT US</a>
                    </div>
                </div>
            </li>

        </ul>

        <nav class="slides-navigation">
            <div class="container">
                <a href="#" class="next">
                    <i class="fa fa-chevron-right"></i>
                </a>
                <a href="#" class="prev">
                    <i class="fa fa-chevron-left"></i>
                </a>
            </div>
        </nav>

    </div>

    <!-- ABOUT FEATURE -->
    <div class="section">
        <div class="container">

            <div class="row">

             
                <div class="col-sm-12 col-md-12">
                    <h2 class="section-heading">
                        ABOUT US
                    </h2>
                </div>
            </div>

            <div class="row about_parent">
                <div class="col-sm-5 col-md-5">
                    <div class="about_div">
                        <div class="item">
                            <img class="img-responsive" src="<?php echo base_url() ?>assets/images/home-about-1.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="<?php echo base_url() ?>assets/images/home-about-2.jpg" alt="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12 mb_3">
                            <img class="img-responsive" src="<?php echo base_url() ?>assets/images/home-about-4.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-sm-7 col-md-7">
                    <h3>Welcome to Technuova Safety</h3>
                    <p>Technuova was started in UAE with a mandate of offering robust safety technology brand Vigil in warehousing and logistics, oil & gas and construction sites where workers and heavy machinery work in tandem and is deemed very critical in safety. Vigil develops and installs real time safety systems to suit those needs and strive in achieving zero accident rates there by avoiding accidents and injuries to humans and also safe guards assets.</p>
                    <p>Our Principals Vigil Safety Technologies is a new tech safety startup founded in 2013 by engineers with backgrounds in Software Design, Manufacturing and Safety.</p>
                    <a style="color: #fff;background: #6598ff;padding: 10px;border-radius: 5px;font-weight: 600;" href="<?php echo base_url() ?>about">know more</a>
                </div>

            </div>

        </div>
    </div>

    <!-- SERVICES -->
    <!-- <div class="section service section-border bglight">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <h2 class="section-heading">
                        SERVICES
                    </h2>
                </div>
            </div>

            <div class="row">

                <div class="col-sm-6 col-md-3">
                   
                    <div class="feature-box-8">
                        <div class="media">
                            <img src="assets/images/service-1.jpg" alt="rud" class="img-responsive">
                        </div>
                        <div class="body">
                            <div class="icon-holder">
                                <span class="fa fa-gears"></span>
                            </div>
                            <a href="javascript:void(0)" class="title">Product customization</a>
                            <p>Our products can be customized to appli...</p>
                            <a href="javascript:void(0)" class="readmore">READ MORE</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                   
                    <div class="feature-box-8">
                        <div class="media">
                            <img src="assets/images/service-2.jpg" alt="rud" class="img-responsive">
                        </div>
                        <div class="body">
                            <div class="icon-holder">
                                <span class="fa fa-leaf"></span>
                            </div>
                            <a href="javascript:void(0)" class="title">Product installation</a>
                            <p>Product installation is normally done by our authorized dealer/system..</p>
                            <a href="javascript:void(0)" class="readmore">READ MORE</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    
                    <div class="feature-box-8">
                        <div class="media">
                            <img src="assets/images/service-3.jpg" alt="rud" class="img-responsive">
                        </div>
                        <div class="body">
                            <div class="icon-holder">
                                <span class="fa fa-fire"></span>
                            </div>
                            <a href="javascript:void(0)" class="title">Services</a>
                            <p>Our products are serviced through our authorized system integrators only.</p>
                            <a href="javascript:void(0)" class="readmore">READ MORE</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                
                    <div class="feature-box-8">
                        <div class="media">
                            <img src="assets/images/service-4.jpg" alt="rud" class="img-responsive">
                        </div>
                        <div class="body">
                            <div class="icon-holder">
                                <span class="fa fa-flash"></span>
                            </div>
                            <a href="javascript:void(0)" class="title">Warranty</a>
                            <p>Our Products are covered under limited warranty for manufacturing..</p>
                            <a href="javascript:void(0)" class="readmore">READ MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Statistic -->
    <!-- <div class="section statistic bgsection">
		<div class="container">
			<div class="row">
				
				<div class="col-sm-3 col-md-3">
					<div class="counter-1">
			            <div class="counter-number">
			              10
			            </div>
			            <div class="counter-title">Offices<br> Worldwide </div>
		          	</div>
				</div>
				<div class="col-sm-3 col-md-3">
					<div class="counter-1">
			            <div class="counter-number">
			              10
			            </div>
			            <div class="counter-title">Refineries &amp; <br>Operations</div>
		          	</div>
				</div>
				<div class="col-sm-3 col-md-3">
					<div class="counter-1">
			            <div class="counter-number">
			              5700
			            </div>
			            <div class="counter-title">Satisfied<br>Employees</div>
		          	</div>
				</div>
				<div class="col-sm-3 col-md-3">
					<div class="counter-1">
			            <div class="counter-number">
			              22
			            </div>
			            <div class="counter-title">Awards &amp; <br>Recognitions</div>
		          	</div>
				</div>

			</div>
		</div>
	</div>  -->

    <!-- PROJECTS -->
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <h2 class="section-heading">
                        PRODUCTS
                    </h2>
                </div>
            </div>
            <div class="row grid-services">
                <div class="col-sm-6 col-md-4 eco manufacturing gas">
                    <div class="parent_div">
                        <div class="box-image-4">
                            <a href="javascript:void(0)" title="Industrial Complex">
                                <div class="media">
                                    <img src="<?php echo base_url() ?>assets/images/Tag-Based-Proximity.jpg" alt="" class="img-responsive">
                                </div>
                            
                            </a>
                        </div>
                        <div class="content">
                            <h4>Tag Based Proximity Warning and Alert System</h4>
                            <p>Vigil SiteSafeTM is a Realtime RFID Transponder Tag based Proximity Warning & Alert System </p>
                            <a href="<?php echo base_url() ?>tagproxi">know more</a>
                        </div>
                    </div>
                    
                </div>
                <div class="col-sm-6 col-md-4 manufacturing gas">
                    <div class="parent_div">
                        <div class="box-image-4">
                            <a href="javascript:void(0)" title="Industrial Complex">
                                <div class="media">
                                    <img src="<?php echo base_url() ?>assets/images/products.png" alt="" class="img-responsive">
                                </div>
                            </a>
                        </div>
                        <div class="content" style="text-align: justify;">
                            <h4>Radar Based Rear Blind Spot Protection for workers</h4>
                            <p>The Vigil SiteSafe™ NT system is designed for object detection with system alerts providing</p>
                             <a href="<?php echo base_url() ?>radarproximity">know more</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 industry factory">
                    <div class="parent_div">
                        <div class="box-image-4">
                            <a href="javascript:void(0)" title="Industrial Complex">
                                <div class="media">
                                    <img src="<?php echo base_url() ?>assets/images/about-slides.png" alt="" class="img-responsive">
                                </div>
                                
                            </a>
                        </div>
                        <div class="content" style="text-align: justify;">
                            <h4>Manlift Anti-Entrapment System</h4>
                            <p>Vigil HighSafe is an anti-crush protective system with various levels of protection designed to offer contractors a product of choice that suits.</p>
                            <a href="<?php echo base_url() ?>manlift">know more</a>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-sm-6 col-md-4 industry factory">
					<div class="box-image-4">
						<a href="project-detail.html" title="Industrial Complex">
							<div class="media">
								<img src="assets/images/project-img-4.jpg" alt="" class="img-responsive">
							</div>
							<div class="body">
								<div class="content">
									<h4 class="title">Iron Industry</h4>
									<span class="category">Commodoenim</span>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 industry oil">
					<div class="box-image-4">
						<a href="project-detail.html" title="Industrial Complex">
							<div class="media">
								<img src="assets/images/project-img-5.jpg" alt="" class="img-responsive">
							</div>
							<div class="body">
								<div class="content">
									<h4 class="title">Gear Manufacturing</h4>
									<span class="category">Commodoenim</span>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 eco">
					<div class="box-image-4">
						<a href="project-detail.html" title="Industrial Complex">
							<div class="media">
								<img src="assets/images/project-img-6.jpg" alt="" class="img-responsive">
							</div>
							<div class="body">
								<div class="content">
									<h4 class="title">Oil Pipeline Industry</h4>
									<span class="category">Commodoenim</span>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 eco gas">
					<div class="box-image-4">
						<a href="project-detail.html" title="Industrial Complex">
							<div class="media">
								<img src="assets/images/project-img-7.jpg" alt="" class="img-responsive">
							</div>
							<div class="body">
								<div class="content">
									<h4 class="title">Oil Pipeline Industry</h4>
									<span class="category">Commodoenim</span>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 eco">
					<div class="box-image-4">
						<a href="project-detail.html" title="Industrial Complex">
							<div class="media">
								<img src="assets/images/project-img-8.jpg" alt="" class="img-responsive">
							</div>
							<div class="body">
								<div class="content">
									<h4 class="title">Oil Pipeline Industry</h4>
									<span class="category">Commodoenim</span>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 oil">
					<div class="box-image-4">
						<a href="project-detail.html" title="Industrial Complex">
							<div class="media">
								<img src="assets/images/project-img-9.jpg" alt="" class="img-responsive">
							</div>
							<div class="body">
								<div class="content">
									<h4 class="title">Oil Pipeline Industry</h4>
									<span class="category">Commodoenim</span>
								</div>
							</div>
						</a>
					</div>
				</div> -->


            </div>
        </div>
    </div>


    <!-- TESTIMONY -->
    <!-- <div class="section testimony bglight">
        <div class="container">

            <div class="row">

                <div class="col-sm-12 col-md-10 col-md-offset-1">


                    <div id="owl-testimony2">
                        <div class="item">
                            <div class="testimonial-3">
                                <div class="media">
                                    <img src="assets/images/testimony-thumb-2.jpg" alt="" class="img-circle">
                                    <div class="title">Paul Doel</div>
                                    <div class="company">alphabeth studio</div>
                                </div>
                                <div class="body">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry orem Ipsum has been. Mauris ornare tortor in eleifend blanditullam ut ligula et neque. Nulla interdum dapibus erat nec elementum. </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-3">
                                <div class="media">
                                    <img src="assets/images/testimony-thumb-3.jpg" alt="" class="img-circle">
                                    <div class="title">Debora Deandra</div>
                                    <div class="company">Abc ltd</div>
                                </div>
                                <div class="body">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry orem Ipsum has been. Mauris ornare tortor in eleifend blanditullam ut ligula et neque. Nulla interdum dapibus erat nec elementum. </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-3">
                                <div class="media">
                                    <img src="assets/images/testimony-thumb-4.jpg" alt="" class="img-circle">
                                    <div class="title">Steve Nuer</div>
                                    <div class="company">Manufacture ltd</div>
                                </div>
                                <div class="body">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry orem Ipsum has been. Mauris ornare tortor in eleifend blanditullam ut ligula et neque. Nulla interdum dapibus erat nec elementum. </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-3">
                                <div class="media">
                                    <img src="assets/images/testimony-thumb-5.jpg" alt="" class="img-circle">
                                    <div class="title">Robert Lav</div>
                                    <div class="company">Gaspol ltd</div>
                                </div>
                                <div class="body">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry orem Ipsum has been. Mauris ornare tortor in eleifend blanditullam ut ligula et neque. Nulla interdum dapibus erat nec elementum. </p>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>

            </div>
        </div>
    </div> -->

    <!-- CTA -->
    <!-- <div class="section cta">
		<div class="container">
			
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="cta-info">
						<h3>If you need industrial solution... We are available for you</h3>
						<p>We provide innovative solutions for sustainable progress. Our professional team works to increase productivity and cost effectiveness on the market</p>
						<a href="contact.html" title="" class="btn btn-cta">CONTACT US</a>
					</div>
				</div>
			</div>
		</div>
	</div> -->


    <!-- Blog -->
    <!-- <div class="section blog">
		<div class="container">
			<div class="row">
				
				<div class="col-sm-12 col-md-12">
					<h2 class="section-heading">
						RECENT NEWS
					</h2>
				</div>

				<div class="col-sm-6 col-md-4"> -->
    <!-- BOX 1 -->
    <!-- <div class="box-news-1">
						<div class="media gbr">
							<img src="assets/images/600x400.jpg" alt="" class="img-responsive">
						</div>
						<div class="body">
							<div class="title"><a href="blog-single.html" title="">The Best in dolor sit amet consectetur adipisicing elit sed</a></div>
							<div class="meta">
								<span class="date"><i class="fa fa-clock-o"></i> Aug 24, 2017</span>
								<span class="comments"><i class="fa fa-comment-o"></i> 0 Comments</span>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4"> -->
    <!-- BOX 2 -->
    <!-- <div class="box-news-1">
						<div class="media gbr">
							<img src="assets/images/600x400.jpg" alt="" class="img-responsive">
						</div>
						<div class="body">
							<div class="title"><a href="blog-single.html" title="">The Best in dolor sit amet consectetur adipisicing elit sed</a></div>
							<div class="meta">
								<span class="date"><i class="fa fa-clock-o"></i> Aug 24, 2017</span>
								<span class="comments"><i class="fa fa-comment-o"></i> 0 Comments</span>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4"> -->
    <!-- BOX 3 -->
    <!-- <div class="box-news-1">
						<div class="media gbr">
							<img src="assets/images/600x400.jpg" alt="" class="img-responsive">
						</div>
						<div class="body">
							<div class="title"><a href="blog-single.html" title="">The Best in dolor sit amet consectetur adipisicing elit sed</a></div>
							<div class="meta">
								<span class="date"><i class="fa fa-clock-o"></i> Aug 24, 2017</span>
								<span class="comments"><i class="fa fa-comment-o"></i> 0 Comments</span>
							</div>
						</div>
					</div>
				</div>

				
			</div>
		</div>
	</div>  -->

    <!-- CLIENT -->
    <!-- <div class="section stat-client">
		<div class="container">
			
			<div class="row">
				
				<div class="col-sm-3 col-md-3">
					<div class="client-img">
						<a href="#"><img src="assets/images/partners.png" alt="" class="img-responsive"></a>
					</div>
				</div>

				<div class="col-sm-3 col-md-3">
					<div class="client-img">
						<a href="#"><img src="assets/images/partners.png" alt="" class="img-responsive"></a>
					</div>
				</div>

				<div class="col-sm-3 col-md-3">
					<div class="client-img">
						<a href="#"><img src="assets/images/partners.png" alt="" class="img-responsive"></a>
					</div>
				</div>

				<div class="col-sm-3 col-md-3">
					<div class="client-img">
						<a href="#"><img src="assets/images/partners.png" alt="" class="img-responsive"></a>
					</div>
				</div>

				
			</div>
		</div>
	</div> -->

    
    <?php require_once "footer.php" ?>

    <?php require_once "scripts.php" ?>


</body>

</html>