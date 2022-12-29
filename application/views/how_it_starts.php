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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    <?php require_once "links.php" ?>

</head>
<style>
    .category-nav li.active a {
        border-color: #ed1c24;
    }

    .banner-page.about {
        background: url(<?php echo base_url() ?>assets/images/about-slide.png) bottom center no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }
    .banner-page .title-page{
        color: #6598ff !important;
        text-align: center;
        text-shadow: 3px 3px 3px #000000;

   }

    .carrousel {
        display: grid;
        grid-auto-flow: column;
        scroll-behavior: auto;
        gap: 1.2rem;
        overflow-y: auto;
        overscroll-behavior-x: contain;
        scroll-snap-type: x mandatory;
        scrollbar-width: none;
    }
    .items img{
        padding: 15px;
    }
</style>

<body>

    <?php require_once "header.php" ?>

    <!-- BANNER -->
    <div class="section banner-page about">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="title-page">HOW IT'S STARTED</div>

                </div>
            </div>
        </div>
    </div>

    <!-- Team -->
    <div class="section why overlap">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-md-4 col-md-push-8">
                    <div class="widget categories">
                        <ul class="category-nav">
                            <li><a href="about">ABOUT US</a></li>
                            <li class="active"><a href="how">HOW IT START</a></li>

                        </ul>
                    </div>
                    <div class="widget download">
                        <a href="#" class="btn btn-secondary btn-block btn-sidebar"><span class="fa  fa-file-pdf-o"></span> Company Brochure</a>
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
                                <div class="info-text">Technuova Trading LLC <br> 508-1 Apricot Towers <br>Dubai Silicon Oasis <br>Dubai ,UAE.</div>
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
                                <div class="info-text"> sales@technuovasafety.com</div>
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
                    <div class="single-page">
                        <!-- <img src="<?php echo base_url() ?>assets/images/service-detail-1.jpg" alt="" class="img-responsive"> -->
                        <div class="margin-bottom-30"></div>
                        <!--<h2 class="section-heading">-->
                        <!--    HOW IT'S STARTED-->
                        <!--</h2>-->
                        <div class="main-content">
                            <div class="first">
                                <div class="row">
                                    <div class="col-md-5 col-sm-5 col-lg-5">
                                        <img src="<?php echo base_url() ?>assets/images/how-1.png" alt="">
                                    </div>
                                    <div class="col-md-7 col-sm-7 col-lg-7"style=" line-height: 29px;font-weight: 500; margin-top:40px;">
                                        <p> Aramco site – 2013 Workers Eating Lunch in
                                            shade during hot day. Loader operator has no
                                            indication of workers in the vicinity as this was a
                                            blind spot. Loader operator did not get hazard
                                            alarm as there was no safety system installed.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="second"style=" margin-top:40px;">
                                <div class="row">
                                    <div class="col-md-7 col-sm-7 col-lg-7"style=" line-height: 29px;font-weight: 500;">
                                        <p> 2014 Workers worker sleeping under grader 
                                            shade during hot day. Operator has no indication
                                            of worker under the grader. Operator started the
                                            equipment, worker crushed under grader blade,
                                            There was no safety system installed, worker had
                                            no safety tag.
                                        </p>
                                    </div>
                                    <div class="col-md-5 col-sm-5 col-lg-5">
                                        <img src="<?php echo base_url() ?>assets/images/how-2.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <section class="clients light-gray-bg padding-top-100 padding-bottom-100">
                <div class="container">
                    <!-- Heading -->
                    <div class="heading text-center">
                        <h5 style="    font-size: 30px;line-height: 1.2em;letter-spacing: -.05em;font-weight: 800;color: #041e42;margin-bottom: 20px;border-top: 1px solid #dedede;padding-top: 20px;padding-bottom: 40px;position: relative;">Our Clients</h5>
                    </div>
                    <!-- Item Slide -->
                    <div class="item-slide owl-carousel" id="customers-testimonials">
                        <!-- Slide -->
                        <div class="item">
                            <div class="img-item">
                                <img class="img-responsive" src="<?php echo base_url()?>assets/images/clints/1.png" alt="medicover-hospital">
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-item">
                                <img class="img-responsive" src="<?php echo base_url()?>assets/images/clints/2.png" alt="murugan-hospital">
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-item">
                                <img class="img-responsive" src="<?php echo base_url()?>assets/images/clints/3.png" alt="kkr-hospital">
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-item">
                                <img class="img-responsive" src="<?php echo base_url()?>assets/images/clints/4.png" alt="nextgen-hospital">
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-item">
                                <img class="img-responsive" src="<?php echo base_url()?>assets/images/clints/5.png" alt="wellness-hospital">
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-item">
                                <img class="img-responsive" src="<?php echo base_url()?>assets/images/clints/6.png" alt="aksha-hospitals">
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-item">
                                <img class="img-responsive" src="<?php echo base_url()?>assets/images/clints/7.png" alt="hrc">
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-item">
                                <img class="img-responsive" src="<?php echo base_url()?>assets/images/clints/8.png" alt="banswada-govt-hospital">
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-item">
                                <img class="img-responsive" src="<?php echo base_url()?>assets/images/clints/9.png" alt="bodhan-govt-hospital">
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-item">
                                <img class="img-responsive" src="<?php echo base_url()?>assets/images/clints/10.png" alt="domakonda-govt-hospital">
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-item">
                                <img class="img-responsive" src="<?php echo base_url()?>assets/images/clints/11.png" alt="kamareddy-govt-hospital">
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-item">
                                <img class="img-responsive" src="<?php echo base_url()?>assets/images/clints/12.png" alt="kothagudem-govt-hospital">
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-item">
                                <img class="img-responsive" src="<?php echo base_url()?>assets/images/clints/13.png" alt="madhanur-govt-hospital">
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-item">
                                <img class="img-responsive" src="<?php echo base_url()?>assets/images/clints/14.png" alt="nizamabad-govt-hospital">
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-item">
                                <img class="img-responsive" src="<?php echo base_url()?>assets/images/clints/15.png" alt="yellareddy-govt-hospital">
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-item">
                                <img class="img-responsive" src="<?php echo base_url()?>assets/images/clints/16.png" alt="yellareddy-govt-hospital">
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-item">
                                <img class="img-responsive" src="<?php echo base_url()?>assets/images/clints/17.png" alt="yellareddy-govt-hospital">
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-item">
                                <img class="img-responsive" src="<?php echo base_url()?>assets/images/clints/18.png" alt="yellareddy-govt-hospital">
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-item">
                                <img class="img-responsive" src="<?php echo base_url()?>assets/images/clints/19.png" alt="yellareddy-govt-hospital">
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-item">
                                <img class="img-responsive" src="<?php echo base_url()?>assets/images/clints/20.png" alt="yellareddy-govt-hospital">
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-item">
                                <img class="img-responsive" src="<?php echo base_url()?>assets/images/clints/21.png" alt="yellareddy-govt-hospital">
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-item">
                                <img class="img-responsive" src="<?php echo base_url()?>assets/images/clints/22.png" alt="yellareddy-govt-hospital">
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-item">
                                <img class="img-responsive" src="<?php echo base_url()?>assets/images/clints/23.png" alt="yellareddy-govt-hospital">
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-item">
                                <img class="img-responsive" src="<?php echo base_url()?>assets/images/clints/24.png" alt="yellareddy-govt-hospital">
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-item">
                                <img class="img-responsive" src="<?php echo base_url()?>assets/images/clints/25.png" alt="yellareddy-govt-hospital">
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-item">
                                <img class="img-responsive" src="<?php echo base_url()?>assets/images/clints/26.png" alt="yellareddy-govt-hospital">
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-item">
                                <img class="img-responsive" src="<?php echo base_url()?>assets/images/clints/27.png" alt="yellareddy-govt-hospital">
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-item">
                                <img class="img-responsive" src="<?php echo base_url()?>assets/images/clints/28.png" alt="yellareddy-govt-hospital">
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-item">
                                <img class="img-responsive" src="<?php echo base_url()?>assets/images/clints/29.png" alt="yellareddy-govt-hospital">
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-item">
                                <img class="img-responsive" src="<?php echo base_url()?>assets/images/clints/30.png" alt="yellareddy-govt-hospital">
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-item">
                                <img class="img-responsive" src="<?php echo base_url()?>assets/images/clints/31.png" alt="yellareddy-govt-hospital">
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-item">
                                <img class="img-responsive" src="<?php echo base_url()?>assets/images/clints/32.png" alt="yellareddy-govt-hospital">
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-item">
                                <img class="img-responsive" src="<?php echo base_url()?>assets/images/clints/33.png" alt="yellareddy-govt-hospital">
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-item">
                                <img class="img-responsive" src="<?php echo base_url()?>assets/images/clints/34.png" alt="yellareddy-govt-hospital">
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-item">
                                <img class="img-responsive" src="<?php echo base_url()?>assets/images/clints/35.png" alt="yellareddy-govt-hospital">
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-item">
                                <img class="img-responsive" src="<?php echo base_url()?>assets/images/clints/36.png" alt="yellareddy-govt-hospital">
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-item">
                                <img class="img-responsive" src="<?php echo base_url()?>assets/images/clints/37.png" alt="yellareddy-govt-hospital">
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-item">
                                <img class="img-responsive" src="<?php echo base_url()?>assets/images/clints/38.png" alt="yellareddy-govt-hospital">
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-item">
                                <img class="img-responsive" src="<?php echo base_url()?>assets/images/clints/39.png" alt="yellareddy-govt-hospital">
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-item">
                                <img class="img-responsive" src="<?php echo base_url()?>assets/images/clints/40.png" alt="yellareddy-govt-hospital">
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-item">
                                <img class="img-responsive" src="<?php echo base_url()?>assets/images/clints/41.png" alt="yellareddy-govt-hospital">
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-item">
                                <img class="img-responsive" src="<?php echo base_url()?>assets/images/clints/42.png" alt="yellareddy-govt-hospital">
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-item">
                                <img class="img-responsive" src="<?php echo base_url()?>assets/images/clints/43.png" alt="yellareddy-govt-hospital">
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-item">
                                <img class="img-responsive" src="<?php echo base_url()?>assets/images/clints/44.png" alt="yellareddy-govt-hospital">
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-item">
                                <img class="img-responsive" src="<?php echo base_url()?>assets/images/clints/45.png" alt="yellareddy-govt-hospital">
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-item">
                                <img class="img-responsive" src="<?php echo base_url()?>assets/images/clints/46.png" alt="yellareddy-govt-hospital">
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-item">
                                <img class="img-responsive" src="<?php echo base_url()?>assets/images/clints/47.png" alt="yellareddy-govt-hospital">
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-item">
                                <img class="img-responsive" src="<?php echo base_url()?>assets/images/clints/48.png" alt="yellareddy-govt-hospital">
                            </div>
                        </div>
                       
                    </div>
                </div>
            </section>
        </div>
    </div>

    <?php require_once "footer.php" ?>

    <!-- JS VENDOR -->
    <?php require_once "scripts.php" ?>
    <script>
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            items:6,
            loop:true,
            margin:20,
            autoplay:true,
            autoplayTimeout:1500,
        });
    </script>
</body>

</html>