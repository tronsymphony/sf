<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title(); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="author" content="<?php wp_title(); ?>">
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <link rel="shortcut icon" type="image/ico" href="<?php echo IMG; ?>/favicon.ico">
        <!-- WPHEAD -->
        <?php wp_head(); ?>
        <!-- WPHEAD -->
    
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/public/frontend.css?d=1">

    </head>

<body <?php if(!is_front_page()){$sub = "subpage";} ?>  <?php body_class($sub); ?> id="top" itemscope itemtype="http://schema.org/WebPage">

 
 



<header id="header-container">
        <section class="top-bar">
            <div class="tb-cntr">
                <div class="social-links">
                    <a href="https://www.facebook.com/lasermoffatt/" aria-label="Link to facebook" target="_blank">
                        <svg height="24" viewBox="0 0 48 48" width="24" aria-hidden="true" style="max-width:20px;" xmlns="http://www.w3.org/2000/svg">
                            <path d="m27.3303691 44h-8.8883949v-18.8883948h-4.4419742v-7.2765674h4.4419742v-4.3686083c0-5.93374831 2.5077812-9.4664295 9.6309471-9.4664295h5.9337483v7.2787906h-3.7060916c-2.7745664 0-2.9590929 1.0182303-2.9590929 2.9146287l-.011116 3.6416185h6.7185415l-.7870164 7.2765674h-5.9315251z" fill-rule="evenodd"></path>
                        </svg>
                    </a>
                    <a href="https://twitter.com/moffattmd" aria-label="Link to instagram" target="_blank">
                        <svg height="24" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-twitter fa-w-16 fa-7x"><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path></svg>
                    </a>
                </div>
                <div class="referallink">
                    
                                    </div>
                <nav class="tb-links">
                    <span class="barlinks">
                        <a href="//events" class="barlink">Events</a>
                        <a href="//promotion" class="barlink">Promotions</a>
                        <a href="//blog" class="barlink">Blog</a>
                        <a href="tel:805.653.5070" class="barlink">(805) 653-5070</a>
                    </span>
                </nav>

            </div>
        </section>
        <button class="navbar-toggle">
                    <span class="menutext">Menu</span>
                    <span class="navbar-toggler-icon">
                        <span class="bars">
                            <span class="bar"></span>
                            <span class="bar"></span>
                            <span class="bar lastbar"></span>
                        </span>
                     </span>
                </button>
        <section class="nav-container">
            <div class="logonav">
                <a href="/" class="nav-logo">
                    Noy's Fine Art Studio
                                    </a>
            </div>
            <nav class="navdiv">

                <div id="navmain" class="">
                    <div id="closebtn">
                        <button class="close-ui"><svg xmlns="http://www.w3.org/2000/svg" id="Capa_1" enable-background="new 0 0 413.348 413.348" height="512" viewBox="0 0 413.348 413.348" width="512"><path d="m413.348 24.354-24.354-24.354-182.32 182.32-182.32-182.32-24.354 24.354 182.32 182.32-182.32 182.32 24.354 24.354 182.32-182.32 182.32 182.32 24.354-24.354-182.32-182.32z"></path></svg></button>
                    </div>
                    <div class="menuimage"></div>
                    <div class="navbaritems">
                        <div class="menu-main-menu-container">
                  
                        <?php
                        wp_nav_menu( array(
                            'menu'           => 'Main Menu', 
                            'depth'             => 2,
                            'container'         => 'div',
                            'container_class'   => 'menu items collapse navbar-collapse',
                            'container_id'      => 'bs-example-navbar-collapse-1',
                            'menu_class'        => 'nav navbar-nav',
                            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'            => new WP_Bootstrap_Navwalker(),
                        ) );
                        ?> 

<!-- 
                        <ul id="menu-main-menu" class="menu items"><li id="menu-item-18" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children hasdropdown menu-item-18"><a class="menulink" href="//about-us/"><span class="menutext">About Us</span></a>
<div class="dropmenu"><ul class="dropmenuitems">
	<li id="menu-item-452" class="menu-item menu-item-type-post_type menu-item-object-providers menu-item-452"><a class="menulink" href="//providers/dr-robert-moffatt-medical-director/"><span class="menutext">Dr. Robert Moffatt, Medical Director</span></a></li>
	<li id="menu-item-454" class="menu-item menu-item-type-post_type_archive menu-item-object-testimonials menu-item-454"><a class="menulink" href="//testimonials/"><span class="menutext">Testimonials</span></a></li>
	<li id="menu-item-453" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy menu-item-453"><a class="menulink" href="//privacy-policy/"><span class="menutext">Privacy Policy</span></a></li>
</ul></div>
</li>
<li id="menu-item-24" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children hasdropdown menu-item-24"><a class="menulink" href="//treatments-category/aesthetic-services/"><span class="menutext">Aesthetic Services</span></a>
<div class="dropmenu"><ul class="dropmenuitems">
	<li id="menu-item-314" class="menu-item menu-item-type-post_type menu-item-object-treatments menu-item-314"><a class="menulink" href="//services/aerolase-laser/"><span class="menutext">Aerolase Laser</span></a></li>
	<li id="menu-item-315" class="menu-item menu-item-type-post_type menu-item-object-treatments menu-item-315"><a class="menulink" href="//services/belotero-balance/"><span class="menutext">Belotero Balance</span></a></li>
	<li id="menu-item-316" class="menu-item menu-item-type-post_type menu-item-object-treatments menu-item-316"><a class="menulink" href="//services/botox-xeomin/"><span class="menutext">Botox / Xeomin</span></a></li>
	<li id="menu-item-319" class="menu-item menu-item-type-post_type menu-item-object-treatments menu-item-319"><a class="menulink" href="//services/emsculpt-body-sculpting/"><span class="menutext">Emsculpt Body Sculpting</span></a></li>
	<li id="menu-item-320" class="menu-item menu-item-type-post_type menu-item-object-treatments menu-item-320"><a class="menulink" href="//services/emsella/"><span class="menutext">Emsella</span></a></li>
	<li id="menu-item-460" class="menu-item menu-item-type-post_type menu-item-object-treatments menu-item-460"><a class="menulink" href="//services/gigi-signature-facial/"><span class="menutext">GiGi Signature Facial</span></a></li>
	<li id="menu-item-324" class="menu-item menu-item-type-post_type menu-item-object-treatments menu-item-324"><a class="menulink" href="//services/icon-laser/"><span class="menutext">ICON Laser</span></a></li>
	<li id="menu-item-325" class="menu-item menu-item-type-post_type menu-item-object-treatments menu-item-325"><a class="menulink" href="//services/juvederm/"><span class="menutext">Juvéderm</span></a></li>
	<li id="menu-item-326" class="menu-item menu-item-type-post_type menu-item-object-treatments menu-item-326"><a class="menulink" href="//services/mesotherapy/"><span class="menutext">Mesotherapy</span></a></li>
	<li id="menu-item-327" class="menu-item menu-item-type-post_type menu-item-object-treatments menu-item-327"><a class="menulink" href="//services/microdermabrasion/"><span class="menutext">Microdermabrasion</span></a></li>
	<li id="menu-item-328" class="menu-item menu-item-type-post_type menu-item-object-treatments menu-item-328"><a class="menulink" href="//services/microneedling/"><span class="menutext">Microneedling</span></a></li>
	<li id="menu-item-330" class="menu-item menu-item-type-post_type menu-item-object-treatments menu-item-330"><a class="menulink" href="//services/laser-hair-removal/"><span class="menutext">Laser Hair Removal</span></a></li>
	<li id="menu-item-331" class="menu-item menu-item-type-post_type menu-item-object-treatments menu-item-331"><a class="menulink" href="//services/pdo-thread-lift/"><span class="menutext">PDO Thread Lift</span></a></li>
	<li id="menu-item-332" class="menu-item menu-item-type-post_type menu-item-object-treatments menu-item-332"><a class="menulink" href="//services/permanent-makeup/"><span class="menutext">Permanent Makeup</span></a></li>
	<li id="menu-item-333" class="menu-item menu-item-type-post_type menu-item-object-treatments menu-item-333"><a class="menulink" href="//services/picosure/"><span class="menutext">PicoSure</span></a></li>
	<li id="menu-item-334" class="menu-item menu-item-type-post_type menu-item-object-treatments menu-item-334"><a class="menulink" href="//services/prp-hair-restoration/"><span class="menutext">PRP Hair Restoration</span></a></li>
	<li id="menu-item-335" class="menu-item menu-item-type-post_type menu-item-object-treatments menu-item-335"><a class="menulink" href="//services/prp-skin-rejuvenation/"><span class="menutext">PRP Skin Rejuvenation</span></a></li>
	<li id="menu-item-336" class="menu-item menu-item-type-post_type menu-item-object-treatments menu-item-336"><a class="menulink" href="//services/radiesse/"><span class="menutext">Radiesse</span></a></li>
	<li id="menu-item-337" class="menu-item menu-item-type-post_type menu-item-object-treatments menu-item-337"><a class="menulink" href="//services/sculpsure-body-contouring/"><span class="menutext">SculpSure Body Contouring</span></a></li>
	<li id="menu-item-338" class="menu-item menu-item-type-post_type menu-item-object-treatments menu-item-338"><a class="menulink" href="//services/tattoo-removal/"><span class="menutext">Tattoo Removal</span></a></li>
	<li id="menu-item-339" class="menu-item menu-item-type-post_type menu-item-object-treatments menu-item-339"><a class="menulink" href="//services/tempsure-envi/"><span class="menutext">TempSure Envi</span></a></li>
	<li id="menu-item-340" class="menu-item menu-item-type-post_type menu-item-object-treatments menu-item-340"><a class="menulink" href="//services/tempsure-surgical/"><span class="menutext">TempSure Surgical</span></a></li>
	<li id="menu-item-341" class="menu-item menu-item-type-post_type menu-item-object-treatments menu-item-341"><a class="menulink" href="//services/tempsure-vitalia/"><span class="menutext">TempSure Vitalia</span></a></li>
</ul></div>
</li>
<li id="menu-item-25" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children hasdropdown menu-item-25"><a class="menulink" href="//treatments-category/wellness-services/"><span class="menutext">Wellness Services</span></a>
<div class="dropmenu"><ul class="dropmenuitems">
	<li id="menu-item-343" class="menu-item menu-item-type-post_type menu-item-object-treatments menu-item-343"><a class="menulink" href="//services/diabetes/"><span class="menutext">Diabetes</span></a></li>
	<li id="menu-item-344" class="menu-item menu-item-type-post_type menu-item-object-treatments menu-item-344"><a class="menulink" href="//services/high-blood-pressure/"><span class="menutext">High Blood Pressure</span></a></li>
	<li id="menu-item-345" class="menu-item menu-item-type-post_type menu-item-object-treatments menu-item-345"><a class="menulink" href="//services/high-cholesterol/"><span class="menutext">High Cholesterol</span></a></li>
	<li id="menu-item-346" class="menu-item menu-item-type-post_type menu-item-object-treatments menu-item-346"><a class="menulink" href="//services/obesity/"><span class="menutext">Obesity</span></a></li>
</ul></div>
</li>
<li id="menu-item-26" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children hasdropdown menu-item-26"><a class="menulink" href="//concern/"><span class="menutext">Concerns</span></a>
<div class="dropmenu"><ul class="dropmenuitems">
	<li id="menu-item-348" class="menu-item menu-item-type-post_type menu-item-object-concerns menu-item-348"><a class="menulink" href="//concern/acne-scars/"><span class="menutext">Acne Scars</span></a></li>
	<li id="menu-item-349" class="menu-item menu-item-type-post_type menu-item-object-concerns menu-item-349"><a class="menulink" href="//concern/aging-hands/"><span class="menutext">Aging Hands</span></a></li>
	<li id="menu-item-350" class="menu-item menu-item-type-post_type menu-item-object-concerns menu-item-350"><a class="menulink" href="//concern/anti-aging/"><span class="menutext">Anti-Aging</span></a></li>
	<li id="menu-item-351" class="menu-item menu-item-type-post_type menu-item-object-concerns menu-item-351"><a class="menulink" href="//concern/double-chin/"><span class="menutext">Double Chin</span></a></li>
	<li id="menu-item-352" class="menu-item menu-item-type-post_type menu-item-object-concerns menu-item-352"><a class="menulink" href="//concern/excess-fat/"><span class="menutext">Excess Fat</span></a></li>
	<li id="menu-item-353" class="menu-item menu-item-type-post_type menu-item-object-concerns menu-item-353"><a class="menulink" href="//concern/facial-telangiectasia/"><span class="menutext">Facial Telangiectasia</span></a></li>
	<li id="menu-item-354" class="menu-item menu-item-type-post_type menu-item-object-concerns menu-item-354"><a class="menulink" href="//concern/facial-volume-loss/"><span class="menutext">Facial Volume Loss</span></a></li>
	<li id="menu-item-355" class="menu-item menu-item-type-post_type menu-item-object-concerns menu-item-355"><a class="menulink" href="//concern/hair-loss/"><span class="menutext">Hair Loss</span></a></li>
	<li id="menu-item-356" class="menu-item menu-item-type-post_type menu-item-object-concerns menu-item-356"><a class="menulink" href="//concern/incontinence/"><span class="menutext">Incontinence</span></a></li>
	<li id="menu-item-357" class="menu-item menu-item-type-post_type menu-item-object-concerns menu-item-357"><a class="menulink" href="//concern/melasma/"><span class="menutext">Melasma</span></a></li>
	<li id="menu-item-358" class="menu-item menu-item-type-post_type menu-item-object-concerns menu-item-358"><a class="menulink" href="//concern/pigmentation/"><span class="menutext">Pigmentation</span></a></li>
	<li id="menu-item-359" class="menu-item menu-item-type-post_type menu-item-object-concerns menu-item-359"><a class="menulink" href="//concern/skin-laxity/"><span class="menutext">Skin Laxity</span></a></li>
	<li id="menu-item-360" class="menu-item menu-item-type-post_type menu-item-object-concerns menu-item-360"><a class="menulink" href="//concern/skin-rejuvenation/"><span class="menutext">Skin Rejuvenation</span></a></li>
	<li id="menu-item-361" class="menu-item menu-item-type-post_type menu-item-object-concerns menu-item-361"><a class="menulink" href="//concern/stretch-marks/"><span class="menutext">Stretch Marks</span></a></li>
	<li id="menu-item-362" class="menu-item menu-item-type-post_type menu-item-object-concerns menu-item-362"><a class="menulink" href="//concern/unwanted-hair/"><span class="menutext">Unwanted Hair</span></a></li>
	<li id="menu-item-363" class="menu-item menu-item-type-post_type menu-item-object-concerns menu-item-363"><a class="menulink" href="//concern/vaginal-rejuvenation/"><span class="menutext">Vaginal Rejuvenation</span></a></li>
	<li id="menu-item-364" class="menu-item menu-item-type-post_type menu-item-object-concerns menu-item-364"><a class="menulink" href="//concern/varicose-and-spider-veins/"><span class="menutext">Varicose and Spider Veins</span></a></li>
	<li id="menu-item-365" class="menu-item menu-item-type-post_type menu-item-object-concerns menu-item-365"><a class="menulink" href="//concern/wrinkles-and-fine-lines/"><span class="menutext">Wrinkles and Fine Lines</span></a></li>
</ul></div>
</li>
<li id="menu-item-411" class="menu-item menu-item-type-post_type_archive menu-item-object-ui_gallery menu-item-411"><a class="menulink" href="//gallery/"><span class="menutext">Gallery</span></a></li>
<li id="menu-item-28" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-28"><a class="menulink" href="//events/"><span class="menutext">Events</span></a></li>
<li id="menu-item-29" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-29"><a class="menulink" href="//promotion/"><span class="menutext">Promotions</span></a></li>
<li id="menu-item-30" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-30"><a class="menulink" href="//blog/"><span class="menutext">Blog</span></a></li>
<li id="menu-item-451" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-451"><a class="menulink" href="//patient-info/"><span class="menutext">Patient Info</span></a></li>
<li id="menu-item-388" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-388"><a class="menulink" href="//request-appointment/"><span class="menutext">Request Appointment</span></a></li>
<li id="menu-item-19" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19"><a class="menulink" href="//contact-us/"><span class="menutext">Contact Us</span></a></li>
</ul> -->


</div>         



                        <div class="menulogo">
                            <a href="" class="logonav">
                                <img data-lazysrc="https://images.pexels.com/photos/1269968/pexels-photo-1269968.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="" class="logoin" src="https://images.pexels.com/photos/1269968/pexels-photo-1269968.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
                            </a>
                        </div>
                        <address class="barnav">
                        <a target="_blank" href="https://g.page/RKMAestheticsRoberMoffatt?share">231 N Dos Caminos Ave., Ventura, CA 93003</a>
                        </address>
                        <div class="phon">
                            <a href="tel:805.653.5070" class="number">(805) 653-5070</a>
                        </div>
                        <div class="social-links">
                            <a href="https://www.facebook.com/lasermoffatt/" aria-label="Link to facebook" target="_blank">
                                <svg height="24" viewBox="0 0 48 48" width="24" aria-hidden="true" style="max-width:20px;" xmlns="http://www.w3.org/2000/svg">
                                    <path d="m27.3303691 44h-8.8883949v-18.8883948h-4.4419742v-7.2765674h4.4419742v-4.3686083c0-5.93374831 2.5077812-9.4664295 9.6309471-9.4664295h5.9337483v7.2787906h-3.7060916c-2.7745664 0-2.9590929 1.0182303-2.9590929 2.9146287l-.011116 3.6416185h6.7185415l-.7870164 7.2765674h-5.9315251z" fill-rule="evenodd"></path>
                                </svg>
                            </a>
                            <a href="https://twitter.com/moffattmd" aria-label="Link to instagram" target="_blank">
                        <svg height="24" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-twitter fa-w-16 fa-7x"><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path></svg>
                    </a>
                        </div>
                    </div>
                </div>
            </nav>
        </section>
    </header>