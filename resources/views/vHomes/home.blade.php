@extends('layouts.frontHomes.frontHomes')
@section('title','Beranda - Diskominfo')
@section('content')
<div class="preloader" id="preloader">
    <div class="logopreloader">
        <img src="{{asset('tHomes')}}/img/styleswitcher/logos/yellow.png" alt="logo-black">
    </div>
    <div class="loader" id="loader"></div>
</div>
        <!-- Main Slider Section Starts -->
        <section class="mainslider" id="mainslider">
            <!-- Slider Hero Starts -->
            <div class="rev_slider_wrapper fullwidthbanner-container dark-slider" data-alias="vimeo-hero" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
                <!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
                <div id="rev_slider_kenburns" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
                    <ul>
                        <!-- SLIDE  -->
                        <li data-index="rs-18" data-transition="zoomin" data-slotamount="7" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-thumb="{{asset('tHomes')}}/img/revolution-slider/kenburns/thumb1.jpg" data-rotate="0" data-saveperformance="off" data-title="Ken Burns" data-description="">
                            <!-- MAIN IMAGE -->
                            <img alt="" src="{{asset('tHomes')}}/img/revolution-slider/kenburns/kenburns1.jpg" data-bgposition="center center" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="180" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-fontsize="['70','70','70','45']" data-lineheight="['70','70','70','50']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="chars" data-splitout="none" data-responsive_offset="on" data-frames='[{"from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.05,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]' data-textAlign="['left','left','left','left']" data-elementdelay="0.05" style="z-index: 5; white-space: nowrap;">WE ARE AMIRA
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-0" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['52','52','52','51']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 6; white-space: nowrap;">CREATIVE MULTIPURPOSE TEMPLATE
                            </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption NotGeneric-Icon   tp-resizeme rs-parallaxlevel-0" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-68','-68','-68','-68']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-style_hover="cursor:default;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="2000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;"><i class="pe-7s-refresh"></i>
                            </div>
                            <!-- LAYER NR. 4 -->
                            @guest
                                <div class="tp-caption" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['150','150','150','150']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;" data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);" data-transform_in="y:100px;sX:1;sY:1;opacity:0;s:2000;e:Power3.easeInOut;" data-transform_out="y:50px;opacity:0;s:1000;e:Power2.easeInOut;" data-start="750" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-responsive="off" style="z-index: 11; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;"><a href="{{route('login')}}" class="custom-button slider-button scroll-to-target">Kirim Informasi</a></div>     
                            @else                            
                                <div class="tp-caption" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['150','150','150','150']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;" data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);" data-transform_in="y:100px;sX:1;sY:1;opacity:0;s:2000;e:Power3.easeInOut;" data-transform_out="y:50px;opacity:0;s:1000;e:Power2.easeInOut;" data-start="750" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-responsive="off" style="z-index: 11; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;"><a href="{{route('post')}}" class="custom-button slider-button scroll-to-target">Kirim Informasi</a></div>     
                            @endguest
                        </li>
                    </ul>
                    <div class="tp-static-layers"></div>
                    <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                </div>
            </div>
            <!-- END REVOLUTION SLIDER -->
            <!-- Slider Hero Ends -->
        </section>
        <!-- Main Slider Section Ends -->
        <!-- About Section Starts -->
        <section id="about" class="about">
            <!-- Container Starts -->
            <div class="container">
                <!-- Main Heading Starts -->
                <div class="text-center top-text">
                    <h1><span>About</span> Us</h1>
                    <h4>Who We Are</h4>
                </div>
                <!-- Main Heading Ends -->
                <!-- Divider Starts -->
                <div class="divider text-center">
                    <span class="outer-line"></span>
                    <span class="fa fa-user" aria-hidden="true"></span>
                    <span class="outer-line"></span>
                </div>
                <!-- Divider Ends -->
                <!-- About Content Starts -->
                <div class="row about-content">
                    <div class="col-sm-12 col-md-6 col-lg-6 about-left-side">
                        <h3 class="title-about">WE ARE <strong>AMIRA</strong></h3>
                        <hr>
                        <p>We are a leading company sit amet, consectetur adipisicing elit. Minus obcaecati pariatur officiis molestias eveniet harum laudantium obcaecati pariatur officiis molestias eveniet harum laudantium sed optio iste. </p>
                        <!-- Tabs Heading Starts -->
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#menu1">Our Mission</a></li>
                            <li><a data-toggle="tab" href="#menu2">Our advantages</a></li>
                            <li><a data-toggle="tab" href="#menu3">Our guarantees</a></li>
                        </ul>
                        <!-- Tabs Heading Ends -->
                        <!-- Tabs Content Starts -->
                        <div class="tab-content">
                            <div id="menu1" class="tab-pane fade in active">
                                <p>consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in</p>
                            </div>
                            <div id="menu2" class="tab-pane fade">
                                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            </div>
                            <div id="menu3" class="tab-pane fade">
                                <p>Laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                            </div>
                        </div>
                        <!-- Tabs Content Ends -->
                        <a class="custom-button" href="about.html">Learn more about us</a>
                    </div>
                    <div class="col-md-6 col-lg-6 about-right-side">
                        <div class="full-image-container hovered">
                            <img class="img-responsive hidden-xs" src="{{asset('tHomes')}}/img/about.jpg" alt="">
                            <div class="full-image-overlay">
                                <h3>Why <strong>Choose Us</strong></h3>
                                <ul class="list-why-choose-us">
                                    <li>Clean Code & Design</li>
                                    <li>Responsive Layout</li>
                                    <li>Powerful Documentation</li>
                                    <li>Browser Compatibility</li>
                                    <li>Easy Customization</li>
                                    <li>& Much More ...</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- About Content Ends -->
            </div>
            <!-- Container Ends -->
        </section>
        <!-- About Section Ends -->
        <!-- Video Section Starts -->
        <section class="videopromotion">
            <div class="section-overlay">
                <!-- Container Starts -->
                <div class="container">
                    <!-- Main Heading Starts -->
                    <div class="text-center top-text">
                        <h1><span>Video</span> Promo</h1>
                        <h4>Made with love for you</h4>
                    </div>
                    <!-- Main Heading Ends -->
                    <div class="video-content">
                        <p class="text-center">See Amira like you've never seen it before! Watch our new promo video,<br> and discover just what an Amira membership can do for you!</p>
                        <!-- Video Play Starts -->
                        <div class="magnific-popup-gallery">
                            <div class="btn-wrapper text-center"><a class="{{asset('tHomes')}}/image-wrap mfp-youtube" href="https://www.youtube.com/watch?v=0gv7OC9L2s8"></a></div>
                        </div>
                        <!-- Video Play Ends -->
                    </div>
                </div>
                <!-- Container Ends -->
            </div>
        </section>
        <!-- Video Section Ends -->
        <!-- Services Section Starts -->
        <section class="services">
            <!-- Container Starts -->
            <div class="container">
                <!-- Main Heading Starts -->
                <div class="text-center top-text">
                    <h1><span>Our</span> Services</h1>
                    <h4>What We Doing</h4>
                </div>
                <!-- Main Heading Starts -->
                <!-- Divider Starts -->
                <div class="divider text-center">
                    <span class="outer-line"></span>
                    <span class="fa fa-cogs" aria-hidden="true"></span>
                    <span class="outer-line"></span>
                </div>
                <!-- Divider Ends -->
                <!-- Services Starts -->
                <div class="row services-box">
                    <!-- Service Item Starts -->
                    <div class="col-lg-4 col-md-6 col-sm-12 services-box-item">
                        <!-- Service Item Cover Starts -->
                        <span class="services-box-item-cover fa fa-leaf" data-headline="Creative Solutions"></span>
                        <!-- Service Item Cover Ends -->
                        <!-- Service Item Content Starts -->
                        <div class="services-box-item-content fa fa-leaf">
                            <h2>Creative Solutions</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu.</p>
                        </div>
                        <!-- Service Item Content Ends -->
                    </div>
                    <!-- Service Item Ends -->

                    <!-- Service Item Starts -->
                    <div class="col-lg-4 col-md-6 col-sm-12 services-box-item">
                        <!-- Service Item Cover Starts -->
                        <span class="services-box-item-cover fa fa-anchor" data-headline="Featured Services"></span>
                        <!-- Service Item Cover Ends -->
                        <!-- Service Item Content Starts -->
                        <div class="services-box-item-content fa fa-anchor">
                            <h2>Featured Services</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu.</p>
                        </div>
                        <!-- Service Item Content Ends -->
                    </div>
                    <!-- Service Item Ends -->

                    <!-- Service Item Starts -->
                    <div class="col-lg-4 col-md-6 col-sm-12 services-box-item">
                        <!-- Service Item Cover Starts -->
                        <span class="services-box-item-cover fa fa-comments-o" data-headline="Custom Design"></span>
                        <!-- Service Item Cover Ends -->
                        <!-- Service Item Content Starts -->
                        <div class="services-box-item-content fa fa-comments-o">
                            <h2>Custom Design</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu.</p>
                        </div>
                        <!-- Service Item Content Ends -->
                    </div>
                    <!-- Service Item Ends -->

                    <!-- Service Item Starts -->
                    <div class="col-lg-4 col-md-6 col-sm-12 services-box-item">
                        <!-- Service Item Cover Starts -->
                        <span class="services-box-item-cover fa fa-support" data-headline="Technical Support"></span>
                        <!-- Service Item Cover Ends -->
                        <div class="services-box-item-content fa fa-support">
                            <h2>Technical Support</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu.</p>
                        </div>
                    </div>
                    <!-- Service Item Ends -->

                    <!-- Service Item Starts -->
                    <div class="col-lg-4 col-md-6 col-sm-12 services-box-item">
                        <!-- Service Item Cover Starts -->
                        <span class="services-box-item-cover fa fa-cogs" data-headline="Responsive Design"></span>
                        <!-- Service Item Cover Ends -->
                        <!-- Service Item Content Starts -->
                        <div class="services-box-item-content fa fa-cogs">
                            <h2>Responsive Design</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu.</p>
                        </div>
                        <!-- Service Item Content Ends -->
                    </div>
                    <!-- Service Item Ends -->

                    <!-- Service Item Starts -->
                    <div class="col-lg-4 col-md-6 col-sm-12 services-box-item">
                        <!-- Service Item Cover Starts -->
                        <span class="services-box-item-cover fa fa-file-pdf-o" data-headline="Well Documented"></span>
                        <!-- Service Item Cover Ends -->
                        <!-- Service Item Content Starts -->
                        <div class="services-box-item-content fa fa-file-pdf-o">
                            <h2>Well Documented</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu.</p>
                        </div>
                        <!-- Service Item Content Ends -->
                    </div>
                    <!-- Service Item Ends -->

                </div>
                <!-- Services Ends -->
            </div>
        </section>
        <!-- Services Section Ends -->
        <!-- Testimonials Section Starts -->
        <section class="testimonials">
            <div class="section-overlay">
                <!-- Container Starts -->
                <div class="container">
                    <!-- Main Heading Starts -->
                    <div class="text-center top-text">
                        <h1><span>Happy</span> Customers</h1>
                        <h4>Testimonials</h4>
                    </div>
                    <!-- Main Heading Starts -->
                    <!-- Blockquotes Starts -->
                    <div id="quote-carousel" class="carousel slide" data-ride="carousel">
                        <!-- Wrapper For Sliders Starts -->
                        <!-- Indicators Starts -->
                        <ol class="carousel-indicators">
                            <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#quote-carousel" data-slide-to="1"></li>
                            <li data-target="#quote-carousel" data-slide-to="2"></li>
                        </ol>
                        <!-- Indicators Ends -->
                        <div class="carousel-inner">
                            <!-- Quote #1 Starts -->
                            <div class="item active">
                                <blockquote>
                                    <img class="img-circle img-responsive" src="{{asset('tHomes')}}/img/testimonial/client1.jpg" alt="client">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiu nt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptat</p>
                                    <h5>Miss Elina Pool</h5>
                                    <h6>Developer - Adobe</h6>
                                </blockquote>
                            </div>
                            <!-- Quote #1 Ends -->
                            <!-- Quote #2 Starts -->
                            <div class="item">
                                <blockquote>
                                    <img class="img-circle img-responsive" src="{{asset('tHomes')}}/img/testimonial/client2.jpg" alt="client">
                                    <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu</p>
                                    <h5>Mr. Antoine Varane</h5>
                                    <h6>Manager - Twitter</h6>
                                </blockquote>
                            </div>
                            <!-- Quote #2 Ends -->
                            <!-- Quote #3 Starts -->
                            <div class="item">
                                <blockquote>
                                    <img class="img-circle img-responsive" src="{{asset('tHomes')}}/img/testimonial/client3.jpg" alt="client">
                                    <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit ess</p>
                                    <h5>Miss Lucy Walker</h5>
                                    <h6>Manager - Envato</h6>
                                </blockquote>
                            </div>
                            <!-- Quote #3 Ends -->
                        </div>
                        <!-- Wrapper For Sliders Ends -->
                    </div>
                    <!-- Blockquotes Ends -->
                </div>
                <!-- Container Ends -->
            </div>
        </section>
        <!-- Testimonials Section Ends -->
        <!-- Portfolio Section Starts -->
        <section class="portfolio">
            <!-- Container Starts -->
            <div class="container">
                <!-- Main Heading Starts -->
                <div class="text-center top-text">
                    <h1><span>Our</span> Portfolio</h1>
                    <h4>Our latest Works</h4>
                </div>
                <!-- Main Heading Starts -->
                <!-- Divider Starts -->
                <div class="divider text-center">
                    <span class="outer-line"></span>
                    <span class="fa fa-image" aria-hidden="true"></span>
                    <span class="outer-line"></span>
                </div>
                <!-- Divider Ends -->
                <!-- Filter Wrapper Starts -->
                <nav>
                    <ul class="simplefilter nav nav-pills">
                        <!-- Filter Wrapper Items Starts -->
                        <li class="active" data-filter="all"><i class="fa fa-reorder"></i> All Projects</li>
                        <li data-filter="1">Images</li>
                        <li data-filter="2">Videos</li>
                        <li data-filter="3">External Links</li>
                        <!-- Filter Wrapper Items Ends -->
                    </ul>
                </nav>
                <!-- Filter Wrapper Ends -->
                <div>
                    <div class="filtr-container">
                        <!-- Project Starts -->
                        <div class="col-xs-12 col-sm-4 col-md-4 filtr-item" data-category="1">
                            <div class="magnific-popup-gallery">
                                <!-- Thumbnail Starts -->
                                <figure class="thumbnail thumbnail__portfolio">
                                    <a class="image-wrap" href="{{asset('tHomes')}}/img/projects/project-1.jpg" data-gal="magnific-pop-up[image]" title="Image project"><img class="img-responsive" src="{{asset('tHomes')}}/img/projects/project-1.jpg" alt="Image Project" /><span class="zoom-icon"></span></a>
                                </figure>
                                <!-- Thumbnail Ends -->
                                <!-- Caption Starts -->
                                <div class="caption">
                                    <a class="title-link" href="image-project.html">
                                        <h3>Single Image</h3>
                                    </a>
                                    <p>dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi</p>
                                    <a class="custom-button" href="image-project.html">Read More</a>
                                </div>
                                <!-- Caption Ends -->
                            </div>
                        </div>
                        <!-- Project Ends -->
                        <!-- Project Starts -->
                        <div class="col-xs-12 col-sm-4 col-md-4 filtr-item" data-category="2">
                            <div class="magnific-popup-gallery">
                                <!-- Thumbnail Starts -->
                                <figure class="thumbnail thumbnail__portfolio">
                                    <a class="image-wrap mfp-youtube" href="https://www.youtube.com/watch?v=0gv7OC9L2s8"><img class="img-responsive" src="{{asset('tHomes')}}/img/projects/project-2.jpg" alt="Gallery project" /><span class="zoom-icon video-icon"></span></a>
                                </figure>
                                <!-- Thumbnail Ends -->
                                <!-- Caption Starts -->
                                <div class="caption">
                                    <a class="title-link" href="youtube-project.html">
                                        <h3>Youtube Video</h3>
                                    </a>
                                    <p>dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi</p>
                                    <a class="custom-button" href="youtube-project.html">Read More</a>
                                </div>
                                <!-- Caption Ends -->
                            </div>
                        </div>
                        <!-- Project Ends -->
                        <!-- Project Starts -->
                        <div class="col-xs-12 col-sm-4 col-md-4 filtr-item" data-category="1">
                            <div class="magnific-popup-gallery">
                                <!-- Thumbnail Starts -->
                                <figure class="thumbnail thumbnail__portfolio">
                                    <a class="image-wrap" href="{{asset('tHomes')}}/img/projects/project-3.jpg" data-gal="magnific-pop-up[gallery]" title="Gallery project"><img class="img-responsive" src="{{asset('tHomes')}}/img/projects/project-3.jpg" alt="Gallery project" /><span class="zoom-icon gallery-icon"></span></a>
                                </figure>
                                <a href="{{asset('tHomes')}}/img/projects/project-1.jpg" title="Gallery project" data-gal="magnific-pop-up[gallery]" style="display:none;"></a>
                                <a href="{{asset('tHomes')}}/img/projects/project-2.jpg" title="Gallery project" data-gal="magnific-pop-up[gallery]" style="display:none;"></a>
                                <a href="{{asset('tHomes')}}/img/projects/project-3.jpg" title="Gallery project" data-gal="magnific-pop-up[gallery]" style="display:none;"></a>
                                <a href="{{asset('tHomes')}}/img/projects/project-4.jpg" title="Gallery project" data-gal="magnific-pop-up[gallery]" style="display:none;"></a>
                                <a href="{{asset('tHomes')}}/img/projects/project-5.jpg" title="Gallery project" data-gal="magnific-pop-up[gallery]" style="display:none;"></a>
                                <a href="{{asset('tHomes')}}/img/projects/project-6.jpg" title="Gallery project" data-gal="magnific-pop-up[gallery]" style="display:none;"></a>
                                <!-- Thumbnail Ends -->
                                <!-- Caption Starts -->
                                <div class="caption">
                                    <a class="title-link" href="gallery-project.html">
                                        <h3>Gallery Photos</h3>
                                    </a>
                                    <p>dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi</p>
                                    <a class="custom-button" href="gallery-project.html">Read More</a>
                                </div>
                                <!-- Caption Ends -->
                            </div>
                        </div>
                        <!-- Project Ends -->
                        <!-- Project Starts -->
                        <div class="col-xs-12 col-sm-4 col-md-4 filtr-item" data-category="3">
                            <div class="magnific-popup-gallery">
                                <!-- Thumbnail Starts -->
                                <figure class="thumbnail thumbnail__portfolio">
                                    <a class="image-wrap" href="image-project.html" title="portfolio"><img class="img-responsive" src="img/projects/project-4.jpg" alt="portfolio" /><span class="zoom-icon external-icon"></span></a>
                                </figure>
                                <!-- Thumbnail Ends -->
                                <!-- Caption Starts -->
                                <div class="caption">
                                    <a class="title-link" href="image-project.html">
                                        <h3>External Link</h3>
                                    </a>
                                    <p>dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi</p>
                                    <a class="custom-button" href="image-project.html">Read More</a>
                                </div>
                                <!-- Caption Ends -->
                            </div>
                        </div>
                        <!-- Project Ends -->
                        <!-- Project Starts -->
                        <div class="col-xs-12 col-sm-4 col-md-4 filtr-item" data-category="1">
                            <div class="magnific-popup-gallery">
                                <!-- Thumbnail Starts -->
                                <figure class="thumbnail thumbnail__portfolio">
                                    <a class="image-wrap" href="img/projects/project-5.jpg" data-gal="magnific-pop-up[image]" title="Image project"><img class="img-responsive" src="img/projects/project-5.jpg" alt="Image Project" /><span class="zoom-icon"></span></a>
                                </figure>
                                <!-- Thumbnail Ends -->
                                <!-- Caption Starts -->
                                <div class="caption">
                                    <a class="title-link" href="image-project.html">
                                        <h3>Single Image</h3>
                                    </a>
                                    <p>dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi</p>
                                    <a class="custom-button" href="image-project.html">Read More</a>
                                </div>
                                <!-- Caption Ends -->
                            </div>
                        </div>
                        <!-- Project Ends -->
                        <!-- Project Starts -->
                        <div class="col-xs-12 col-sm-4 col-md-4 filtr-item" data-category="2">
                            <div class="magnific-popup-gallery">
                                <!-- Thumbnail Starts -->
                                <figure class="thumbnail thumbnail__portfolio">
                                    <a class="image-wrap mfp-youtube" href="https://www.youtube.com/watch?v=O_C5CN1L3Xo"><img class="img-responsive" src="img/projects/project-6.jpg" alt="Gallery project" /><span class="zoom-icon video-icon"></span></a>
                                </figure>
                                <!-- Thumbnail Ends -->
                                <!-- Caption Starts -->
                                <div class="caption">
                                    <a class="title-link" href="youtube-project.html">
                                        <h3>Youtube Video</h3>
                                    </a>
                                    <p>dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi</p>
                                    <a class="custom-button" href="youtube-project.html">Read More</a>
                                </div>
                                <!-- Caption Ends -->
                            </div>
                        </div>
                        <!-- Project Ends -->
                        <!-- Project Starts -->
                        <div class="col-xs-12 col-sm-4 col-md-4 filtr-item" data-category="1">
                            <div class="magnific-popup-gallery">
                                <!-- Thumbnail Starts -->
                                <figure class="thumbnail thumbnail__portfolio">
                                    <a class="image-wrap" href="img/projects/project-7.jpg" data-gal="magnific-pop-up[image]" title="Image project"><img class="img-responsive" src="img/projects/project-7.jpg" alt="Image Project" /><span class="zoom-icon"></span></a>
                                </figure>
                                <!-- Thumbnail Ends -->
                                <!-- Caption Starts -->
                                <div class="caption">
                                    <a class="title-link" href="image-project.html">
                                        <h3>Single Image</h3>
                                    </a>
                                    <p>dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi</p>
                                    <a class="custom-button" href="image-project.html">Read More</a>
                                </div>
                                <!-- Caption Ends -->
                            </div>
                        </div>
                        <!-- Project Ends -->
                        <!-- Project Starts -->
                        <div class="col-xs-12 col-sm-4 col-md-4 filtr-item" data-category="2">
                            <div class="magnific-popup-gallery">
                                <!-- Thumbnail Starts -->
                                <figure class="thumbnail thumbnail__portfolio">
                                    <a class="image-wrap mfp-vimeo" href="https://vimeo.com/23534361"><img class="img-responsive" src="img/projects/project-8.jpg" alt="Gallery project" /><span class="zoom-icon video-icon"></span></a>
                                </figure>
                                <!-- Thumbnail Ends -->
                                <!-- Caption Starts -->
                                <div class="caption">
                                    <a class="title-link" href="vimeo-project.html">
                                        <h3>Vimeo Video</h3>
                                    </a>
                                    <p>dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi</p>
                                    <a class="custom-button" href="vimeo-project.html">Read More</a>
                                </div>
                                <!-- Caption Ends -->
                            </div>
                        </div>
                        <!-- Project Ends -->
                        <!-- Project Starts -->
                        <div class="col-xs-12 col-sm-4 col-md-4 filtr-item" data-category="1">
                            <div class="magnific-popup-gallery">
                                <!-- Thumbnail Starts -->
                                <figure class="thumbnail thumbnail__portfolio">
                                    <a class="image-wrap" href="img/projects/project-9.jpg" data-gal="magnific-pop-up[gallery]" title="Slider project"><img class="img-responsive" src="img/projects/project-9.jpg" alt="Slider project" /><span class="zoom-icon gallery-icon"></span></a>
                                </figure>
                                <a href="img/projects/project-1.jpg" title="Gallery project" data-gal="magnific-pop-up[gallery]" style="display:none;"></a>
                                <a href="img/projects/project-2.jpg" title="Gallery project" data-gal="magnific-pop-up[gallery]" style="display:none;"></a>
                                <a href="img/projects/project-6.jpg" title="Gallery project" data-gal="magnific-pop-up[gallery]" style="display:none;"></a>
                                <!-- Thumbnail Ends -->
                                <!-- Caption Starts -->
                                <div class="caption">
                                    <a class="title-link" href="slider-project.html">
                                        <h3>slider project</h3>
                                    </a>
                                    <p>dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi</p>
                                    <a class="custom-button" href="slider-project.html">Read More</a>
                                </div>
                                <!-- Caption Ends -->
                            </div>
                        </div>
                        <!-- Project Ends -->
                    </div>
                </div>
            </div>
            <!-- Container Ends -->
        </section>
        <!-- Portfolio Section Ends -->
        <!-- Facts Section Starts -->
        <section class="facts">
            <div class="section-overlay">
                <!-- Container Starts -->
                <div class="container">
                    <!-- Main Heading Starts -->
                    <div class="text-center top-text">
                        <h1><span>Cool</span> Facts</h1>
                        <h4>our numbers</h4>
                    </div>
                    <!-- Main Heading Starts -->
                    <!-- Fact Badges Starts -->
                    <div class="fact-badges">
                        <div class="row">
                            <!-- Fact Badge Item Starts -->
                            <div class="col-md-3 col-sm-6">
                                <i class="fa fa-briefcase"></i>
                                <h2>
                                    <span><strong class="badges-counter">76</strong>+</span>
                                </h2>
                                <h4>Projects</h4>
                            </div>
                            <!-- Fact Badge Item Ends -->
                            <!-- Fact Badge Item Starts -->
                            <div class="col-md-3 col-sm-6">
                                <i class="fa fa-clock-o"></i>
                                <h2>
                                    <span><strong class="badges-counter">90</strong>+</span>
                                </h2>
                                <h4>Hours Work</h4>
                            </div>
                            <!-- Fact Badge Item Ends -->
                            <!-- Fact Badge Item Starts -->
                            <div class="col-md-3 col-sm-6">
                                <i class="fa fa-home"></i>
                                <h2>
                                    <span><strong class="badges-counter">18</strong>+</span>
                                </h2>
                                <h4>Offices</h4>
                            </div>
                            <!-- Fact Badge Item Ends -->
                            <!-- Fact Badge Item Starts -->
                            <div class="col-md-3 col-sm-6">
                                <i class="fa fa-user"></i>
                                <h2>
                                    <span><strong class="badges-counter">67</strong>+</span>
                                </h2>
                                <h4>Clients</h4>
                            </div>
                            <!-- Fact Badge Item Ends -->
                        </div>
                    </div>
                    <!-- Fact Badges Ends -->
                </div>
                <!-- Container Ends -->
            </div>
        </section>
        <!-- facts Section Ends -->
        
        <!-- Blog Section Starts -->
        <section class="blog">
            <!-- Container Starts -->
            <div class="container">
                <!-- Main Heading Starts -->
                <div class="text-center top-text">
                    <h1><span>Blog</span> Posts</h1>
                    <h4>Latest Articles</h4>
                </div>
                <!-- Main Heading Starts -->
                <!-- Divider Starts -->
                <div class="divider text-center">
                    <span class="outer-line"></span>
                    <span class="fa fa-comments" aria-hidden="true"></span>
                    <span class="outer-line"></span>
                </div>
                <!-- Divider Ends -->
                <div class="row latest-posts-content">
                    @foreach ($posts as $post)
                        <!-- Article Starts -->
                        <div class="col-sm-4 col-md-4 col-xs-12">
                            <div class="latest-post">
                                <!-- Featured Image Starts -->
                                <a class="img-thumb" href="blog-post.html"><img class="img-responsive" src="{{$post->thumbnail()}}" alt="img"></a>
                                <!-- Featured Image Ends -->
                                <!-- Article Content Starts -->
                                <div class="post-body">
                                    <h4 class="post-title">
                                        <a href="{{route('site.single.post',$post->slug)}}">{{$post->title}}</a>
                                    </h4>
                                    <div class="post-text">
                                        <p>{!!str_limit($post->content,200)!!}</p>
                                    </div>
                                </div>
                                <!-- Post Date Starts -->
                                <div class="post-date">
                                    <span>{{$post->created_at->format('d')}}</span>
                                    <span>{{$post->created_at->format('M')}}</span>
                                </div>
                                <!-- Post Date Ends -->
                                <a class="custom-button" href="{{route('site.single.post',$post->slug)}}">Read more</a>
                                <!-- Article Content Ends -->
                            </div>
                        </div>
                        <!-- Article Ends -->    
                    @endforeach
                </div>
                <!-- Latest Blog Posts Ends -->
            </div>
        </section>
        <!-- Blog Section Ends -->
        <!-- Call To Action Section Starts -->
        <section class="call-to-action">
            <div class="section-overlay">
                <!-- Container Starts -->
                <div class="container">
                    <!-- Main Heading Starts -->
                    <div class="text-center top-text">
                        <h1><span>create</span> account</h1>
                        <h4>get started absolutely free</h4>
                    </div>
                    <!-- Main Heading Starts -->
                    <!-- Call To Action Starts -->
                    <div class="call-to-action-content">
                        <ul>
                            <li>No Credit Card Required</li>
                            <li>100% Match Deposit Bonus</li>
                            <li>Monthly Free Files</li>
                            <li>Daily Newsletter</li>
                        </ul>
                        <a class="custom-button" href="register.html">register now</a>
                    </div>
                    <!-- Call To Action Ends -->
                </div>
                <!-- Container Ends -->
            </div>
        </section>
        <!-- facts Section Ends -->
        <!-- Logos Section Starts -->
        <section class="logos">
            <div class="container">
                <ul class="bxslider" id="bxslider">
                    <!-- Logos Items Starts -->
                    <li><img id="3docean" src="img/logos-slider/3docean-dark-background.png" alt="3docean"></li>
                    <li><img id="activeden" src="img/logos-slider/activeden-dark-background.png" alt="activeden"></li>
                    <li><img id="audiojungle" src="img/logos-slider/audiojungle-dark-background.png" alt="audiojungle"></li>
                    <li><img id="codecanyon" src="img/logos-slider/codecanyon-dark-background.png" alt="codecanyon"></li>
                    <li><img id="graphicriver" src="img/logos-slider/graphicriver-dark-background.png" alt="graphicriver"></li>
                    <li><img id="photodune" src="img/logos-slider/photodune-dark-background.png" alt="photodune"></li>
                    <li><img id="themeforest" src="img/logos-slider/themeforest-dark-background.png" alt="themeforest"></li>
                    <!-- Logos Items Ends -->
                </ul>
            </div>
        </section>
        <!-- Logos Section Ends -->
@endsection
