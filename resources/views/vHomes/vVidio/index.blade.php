@extends('layouts.frontHomes.frontHomes')
@section('title','Vidio Informasi')
@section('content')
    <!-- Banner Starts -->
    <section class="banner">
        <div class="content text-center">
            <div class="text-center top-text">
                <!-- Main Heading Starts -->
                <div class="text-center top-text">
                    <h1>Video Informasi</h1>
                </div> 
                <!-- Main Heading Ends -->
                <hr>
                <!-- Breadcrumb Starts -->
                <ul class="breadcrumb">
                    <li><a href="{{route('/')}}"> Beranda</a></li>
                    <li>Video Informasi</li>
                </ul>
                <!-- Breadcrumb Ends -->
            </div>
        </div>
    </section>
    <!-- Banner Ends -->
    <!-- Project Starts -->
    <section class="project">
        <div class="container">
            <div class="row">
                <!-- Project Main Content Starts -->
                <div class="col-md-6">
                    <div class="project-main-content videocontainer">
                        <iframe src="https://www.youtube.com/embed/7e90gBu4pas?enablejsapi=1&amp;version=3&amp;playerapiid=ytplayer" allowfullscreen></iframe>
                    </div>
                    <div class="project-navigation">
                        <nav>
                            <ul class="unstyled">
                                <li><a href="video-project.html"><i class="fa fa-angle-double-left"></i> Previous Project</a></li>
                                <li class="pull-right"><a href="vimeo-project.html">Next Project <i class="fa fa-angle-double-right"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- Project Main Content Ends -->
                <!-- Project Details Starts -->
                <div class="col-md-6">
                    <div class="project-details">
                        <h3>youtube Project</h3>
                        <ul class="unstyled">
                            <li><i class="fa fa-user"></i><span class="detail-name"> Client </span>: <span class="detail-value">Envato</span></li>
                            <li><i class="fa fa-calendar"></i><span class="detail-name"> Date </span>: <span class="detail-value">02/11/2017</span></li>
                            <li><i class="fa fa-cogs"></i><span class="detail-name"> used technologies </span>: <span class="detail-value">js, php, html</span></li>
                        </ul>
                        <hr>
                        <p>Occupy american apparel freegan cliche. Mustache trust fund 8-bit jean shorts mumblecore thundercats. Pour-over small batch forage cray, banjo post-ironic flannel keffiyeh cred ethnic semiotics next level tousled fashion axe. Sustainable cardigan keytar fap bushwick bespoke.</p>
                        <a class="custom-button" target="_BLANK" href="https://www.youtube.com/results?search_query=cara+menampilkan+gambar+link+youtube+di+laravel">Live preview</a>
                    </div>
                </div>
                <!-- Project Details Ends -->
            </div>
        </div>
    </section>
    <!-- Project Ends -->
@endsection