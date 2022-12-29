<style>
    .navbar-main .nav > li > a {
    color: #fff !important;
}
.rowe {
    background-color: #6598ff !important;
    
}
.btn-cta {
    background-color: #6598ff !important;
}
.dropdown-submenu {
    position: absolute;
    top: 0px;
    left: 156px;
    width: 234%;
    background: #041e42;
    
}
.dropdown-submenu li {
    list-style-type:none;
    padding: 10px;
    font-weight: 500;
    
}
.dropdown-submenu li:hover{
    background-color: #46c2ca !important
    
}
.dropdown-menu li ul.dropdown-submenu {
    display:none;
}
.dropdown-menu li:hover ul.dropdown-submenu {
    display:block;
}
.logo{
    font-size: 30px;
}
@media(max-width:991.98px){
    .logo{
        font-size: 18px;
    }
    .box-icon-1{
        display: none !important;
    }
}
.list {
    padding-left: 20px !important;
}
.list li:hover a{
    text-decoration: underline;
    color: blue !important;
}
.footer .footer-item .list li a:hover {
    color: #ed1c24 !important;
}
.footer .footer-item .list li{
    list-style:disc !important;
}
</style>


<!-- Load page -->
<div class="animationload">
    <div class="loader"></div>
</div>

<!-- BACK TO TOP SECTION -->
<a href="#0" class="cd-top cd-is-visible cd-fade-out">Top</a>

<div class="header">
    <!-- TOPBAR -->
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 col-md-6">
                    <div class="topbar-left">
                        <div class="welcome-text">
                            <i class="fa fa-map-marker"></i> 508-1 Apricot Towers, Dubai Silicon Oasis, Dubai ,UAE.
                        </div>
                    </div>
                </div>
                <div class="col-sm-7 col-md-6">
                    <div class="topbar-right">
                        <ul class="topbar-sosmed">
                            <li>
                                <a href="https://www.facebook.com/VigilSafety/"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/vigilsafetytech"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/in/reshmi-desai-26586212b?trk=nav_responsive_tab_profile"><i class="fa fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="https://plus.google.com/u/0/103608960940910647782"><i class="fa fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="https://www.pinterest.com/vigilsitesafe"><i class="fa fa-pinterest"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- TOPBAR LOGO SECTION -->
    <div class="topbar-logo">
        <div class="container">


            <div class="contact-info">
                <!-- INFO 1 -->
                <div class="box-icon-1 d-none">
                    <div class="icon">
                        <div class="fa fa-envelope-o"></div>
                    </div>
                    <div class="body-content">
                        <div class="heading">Email Support</div>
                        sales@technuovasafety.com
                    </div>
                </div>
                <!-- INFO 2 -->
                <div class="box-icon-1">
                    <div class="icon">
                        <div class="fa fa-phone"></div>
                    </div>
                    <div class="body-content">
                        <div class="heading">Call Support</div>
                        +971 588039681
                    </div>
                </div>
                <!-- INFO 3 -->
                <a href="<?php echo base_url()?>contact" title="" class="btn btn-cta pull-right">GET A QUOTE</a>

            </div>
        </div>
    </div>

    <!-- NAVBAR SECTION -->
    <div class="navbar navbar-main">

        <div class="container container-nav">
            <div class="rowe">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>

                <a class="navbar-brand" href="<?php echo base_url()?>">
                    <!-- <img src="assets/images/logo.png" alt="" /> -->
                    <h3 class="logo" >Technuova Safety</h3>
                </a>

                <nav class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="<?php echo base_url()?>" >HOME</a>
                            <!-- <ul class="dropdown-menu">
                                <li><a href="index.html">HOMEPAGE 1</a></li>
                                <li><a href="index-2.html">HOMEPAGE 2</a></li>
                            </ul> -->
                        </li>
                        <li class="dropdown">
                            <a href="<?php echo base_url()?>about" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ABOUT US <span class="caret"></span> </a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url()?>about">ABOUT US</a></li>
                                <li><a href="<?php echo base_url()?>how">HOW IT START</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SERVICES </a>
                            <!-- <ul class="dropdown-menu">
                                <li><a href="javascript:void(0)">PRODUCT CUSTOMIZATION</a></li>
                                <li><a href="javascript:void(0)">PRODUCT INSTALLATION</a></li>
                                <li><a href="javascript:void(0)">SERVICES </a></li>
                                <li><a href="<?php echo base_url()?>warrenty">WARRANTY </a></li>
                            </ul> -->
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PRODUCTS <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url()?>tagproxi">Tag Based Proximity Warning & Alert System</a></li>
                                <li><a href="<?php echo base_url()?>radarproximity">Radar Based Proximity Warning & Alert System</a></li>
                                <li><a href="<?php echo base_url()?>manlift">Man lift Anti Entrapment Safety System</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">TECHNOLOGY <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="javascript:void(0)">SYSTEM</a>
                                    <ul class="dropdown-submenu" id="dropdown-submenu">
                                        <li><a href="<?php echo base_url()?>tagrealtime">Tag Based - Real Time 360 Deg Protection for workers</a></li>
                                        <li><a href="<?php echo base_url()?>rearblind">Radar Based Rear Blind Spot Protection for workers</a></li>    
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">POSSIBILITIES</a></li>
                            </ul>
                        </li>
                        <li >
                            <a href="applications">APPLICATIONS</a>
                        </li>
                        <li class="dropdown">
                            <a href="contact">CONTACT </a>
                            
                        </li>

                    </ul>


                </nav>

            </div>
        </div>
    </div>

</div>