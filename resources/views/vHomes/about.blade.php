@extends('layouts.frontHomes.frontHomes')
@section('title','Tentang Kami - Diskominfo')
@section('content')
    <!-- Banner Starts -->
    <section class="banner">
        <div class="content text-center">
            <div class="text-center top-text">
                <!-- Main Heading Starts -->
                <div class="text-center top-text">
                    <h1>Tentang</h1>
                </div> 
                <!-- Main Heading Ends -->
                <hr>
                <!-- Breadcrumb Starts -->
                <ul class="breadcrumb">
                    <li><a href="{{route('/')}}"> home</a></li>
                    <li>Tentang</li>
                </ul>
                <!-- Breadcrumb Ends -->
            </div>
        </div>
    </section>
    <!-- Banner Ends -->
    <!-- About Section Starts -->
    <section class="about">
        <!-- Container Starts -->
        <div class="container">
            <!-- About Content Starts -->
            <div class="row about-content">
                <div class="col-sm-12 col-md-6 col-lg-6 about-left-side">
                    <h3 class="title-about">WE ARE <strong>AMIRA</strong></h3>
                    <hr>
                    <p>We are a leading company sit amet, consectetur adipisicing elit. Minus obcaecati pariatur officiis molestias eveniet harum laudantium obcaecati pariatur officiis molestias eveniet harum laudantium sed optio iste.</p>
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
                    <a class="custom-button" href="portfolio-3-columns.html">Our Portfolio</a>
                </div>
                <!-- Image About Us Starts -->
                <div class="col-md-6 col-lg-6 about-right-side">
                    <div>
                        <img class="img-responsive" src="{{asset('tHomes')}}/img/about.jpg" alt="">
                    </div>
                </div>
                <!-- Image About Us Ends -->
            </div>
            <!-- About Content Ends -->
        </div>
        <!-- Container Ends -->
    </section>
    <!-- About Section Ends -->
    <!-- Project Manager Section Starts -->
    <section class="projectmanager">
        <!-- Section Overlay Starts -->
        <div class="section-overlay">
            <!-- Container Starts -->
            <div class="container">
                <div class="row">
                    <!-- Image Starts -->
                    <div class="col-lg-5 col-md-12">
                        <img class="img-responsive projectmanagerpicture" src="{{asset('tHomes')}}/img/projectmanager.jpg" alt="project manager">
                    </div>
                    <!-- Image Ends -->
                    <!-- Details Starts -->
                    <div class="col-md-12 col-lg-6 col-lg-offset-1">
                        <h1>Project Manager</h1>
                        <h3>Miss Katherina Hale</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus obcaecati pariatur officiis molestias eveniet harum laudantium sed optio iste. Iste, alias, non libero recusandae fugiat praesentium delectus inventore accusamus veniam!
                        </p>
                        <blockquote>
                            " Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur."
                        </blockquote>
                        <!-- Social Media Starts -->
                        <div class="social-icons">
                            <ul class="social">
                                <li>
                                    <a class="twitter" href="#" title="twitter"></a>
                                </li>
                                <li>
                                    <a class="facebook" href="#" title="facebook"></a>
                                </li>
                                <li>
                                    <a class="google" href="#" title="google"></a>
                                </li>
                                <li>
                                    <a class="skype" href="#" title="skype"></a>
                                </li>
                                <li>
                                    <a class="instagram" href="#" title="instagram"></a>
                                </li>
                                <li>
                                    <a class="linkedin" href="#" title="linkedin"></a>
                                </li>
                                <li>
                                    <a class="youtube" href="#" title="youtube"></a>
                                </li>
                            </ul>
                        </div>
                        <!-- Social Media Ends -->
                    </div>
                </div>
                <!-- Details Ends -->
            </div>
            <!-- Container Ends -->
        </div>
    </section>
    <!-- Project Manager Section Ends -->
    <!-- Team Section Starts -->
    <section class="team">
        <!-- Container Starts -->
        <div class="container">
            <!-- Main Heading Starts -->
            <div class="text-center top-text">
                <h1><span>Our</span> Team</h1>
                <h4>Keep in touch</h4>
            </div>
            <!-- Main Heading Ends -->
            <!-- Divider Starts -->
            <div class="divider text-center">
                <span class="outer-line"></span>
                <span class="fa fa-users" aria-hidden="true"></span>
                <span class="outer-line"></span>
            </div>
            <!-- Divider Ends -->
            <!-- Team Members Starts -->
            <div class="row team-members magnific-popup-gallery">
                <!-- Team Member Starts -->
                <div class="col-xs-6 col-lg-3 col-md-3 col-sm-6">
                    <div class="team-member">
                        <!-- Team Member Picture Starts -->
                        <a title="Maryana Mori // Manager" href="img/team/member1.jpg" data-gal="magnific-pop-up[team]" class="team-member-img-wrap"><img src="{{asset('tHomes')}}/img/team/member1.jpg" alt="team member"></a>
                        <!-- Team Member Picture Ends -->
                        <!-- Team Member Details Starts -->
                        <div class="team-member-caption social-icons">
                            <h4>Maryana Mori</h4>
                            <p>Manager</p>
                            <ul class="list list-inline social">
                                <li>
                                    <a href="#" class="fa fa-facebook"></a>
                                </li>
                                <li>
                                    <a href="#" class="fa fa-twitter"></a>
                                </li>
                                <li>
                                    <a href="#" class="fa fa-google-plus"></a>
                                </li>
                            </ul>
                        </div>
                        <!-- Team Member Details Starts -->
                    </div>
                </div>
                <!-- Team Member Ends -->
                <!-- Team Member Starts -->
                <div class="col-xs-6 col-lg-3 col-md-3 col-sm-6">
                    <div class="team-member">
                        <!-- Team Member Picture Starts -->
                        <a title="Marco Verratti // Co Founder" href="img/team/member2.jpg" data-gal="magnific-pop-up[team]" class="team-member-img-wrap"><img src="{{asset('tHomes')}}/img/team/member2.jpg" alt="team member"></a>
                        <!-- Team Member Picture Ends -->
                        <!-- Team Member Details Starts -->
                        <div class="team-member-caption social-icons">
                            <h4>Marco Verratti</h4>
                            <p>Co Founder</p>
                            <ul class="list list-inline social">
                                <li>
                                    <a href="#" class="fa fa-facebook"></a>
                                </li>
                                <li>
                                    <a href="#" class="fa fa-twitter"></a>
                                </li>
                                <li>
                                    <a href="#" class="fa fa-google-plus"></a>
                                </li>
                            </ul>
                        </div>
                        <!-- Team Member Details Ends -->
                    </div>
                </div>
                <!-- Team Member Ends -->
                <!-- Team Member Starts -->
                <div class="col-xs-6 col-lg-3 col-md-3 col-sm-6">
                    <!-- Team Member-->
                    <div class="team-member">
                        <!-- Team Member Picture Starts -->
                        <a title="Emilia Bella // Sales Manager" href="img/team/member3.jpg" data-gal="magnific-pop-up[team]" class="team-member-img-wrap"><img src="{{asset('tHomes')}}/img/team/member3.jpg" alt=""></a>
                        <!-- Team Member Picture Ends -->
                        <!-- Team Member Details Starts -->
                        <div class="team-member-caption social-icons">
                            <h4>Emilia Bella</h4>
                            <p>Sales Manager</p>
                            <ul class="list list-inline social">
                                <li>
                                    <a href="#" class="fa fa-facebook"></a>
                                </li>
                                <li>
                                    <a href="#" class="fa fa-twitter"></a>
                                </li>
                                <li>
                                    <a href="#" class="fa fa-google-plus"></a>
                                </li>
                            </ul>
                        </div>
                        <!-- Team Member Details Ends -->
                    </div>
                </div>
                <!-- Team Member Ends -->
                <!-- Team Member Starts -->
                <div class="col-xs-6 col-lg-3 col-md-3 col-sm-6">
                    <div class="team-member">
                        <!-- Team Member Picture Starts -->
                        <a title="Antonio Conte // Director" href="img/team/member4.jpg" data-gal="magnific-pop-up[team]" class="team-member-img-wrap"><img src="{{asset('tHomes')}}/img/team/member4.jpg" alt="team member"></a>
                        <!-- Team Member Picture Ends -->
                        <!-- Team Member Details Starts -->
                        <div class="team-member-caption social-icons">
                            <h4>Antonio Conte</h4>
                            <p>Director</p>
                            <ul class="list list-inline social">
                                <li>
                                    <a href="#" class="fa fa-facebook"></a>
                                </li>
                                <li>
                                    <a href="#" class="fa fa-twitter"></a>
                                </li>
                                <li>
                                    <a href="#" class="fa fa-google-plus"></a>
                                </li>
                            </ul>
                        </div>
                        <!-- Team Member Details Ends -->
                    </div>
                </div>
                <!-- Team Member Ends -->
            </div>
            <!-- Team Members Ends -->
        </div>
        <!-- Container Ends -->
    </section>
    <!-- Team Section Ends -->
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
                <li><img id="3docean" src="{{asset('tHomes')}}/img/logos-slider/3docean-dark-background.png" alt="3docean"></li>
                <li><img id="activeden" src="{{asset('tHomes')}}/img/logos-slider/activeden-dark-background.png" alt="activeden"></li>
                <li><img id="audiojungle" src="{{asset('tHomes')}}/img/logos-slider/audiojungle-dark-background.png" alt="audiojungle"></li>
                <li><img id="codecanyon" src="{{asset('tHomes')}}/img/logos-slider/codecanyon-dark-background.png" alt="codecanyon"></li>
                <li><img id="graphicriver" src="{{asset('tHomes')}}/img/logos-slider/graphicriver-dark-background.png" alt="graphicriver"></li>
                <li><img id="photodune" src="{{asset('tHomes')}}/img/logos-slider/photodune-dark-background.png" alt="photodune"></li>
                <li><img id="themeforest" src="{{asset('tHomes')}}/img/logos-slider/themeforest-dark-background.png" alt="themeforest"></li>
                <!-- Logos Items Ends -->
            </ul>
        </div>
    </section>
    <!-- Logos Section Ends -->
@endsection