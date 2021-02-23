@extends('layouts.frontHomes.frontHomes')
@section('title',"$tags2->name Tag")
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from slimhamdi.net/amira/demos/blog-right-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Feb 2021 18:28:34 GMT -->
<head>
    <meta charset="utf-8" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="/images/logo/logo1.png">

    <!-- Template CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{asset('tHomes')}}/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="{{asset('tHomes')}}/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="{{asset('tHomes')}}/css/style.css" />
    <link rel="stylesheet" type="text/css" href="{{asset('tHomes')}}/css/skins/yellow.css" />

    <!-- Live Style Switcher - demo only -->
    <link rel="alternate stylesheet" type="text/css" title="blue" href="{{asset('tHomes')}}/css/skins/blue.css" />
    <link rel="alternate stylesheet" type="text/css" title="blueviolet" href="{{asset('tHomes')}}/css/skins/blueviolet.css" />
    <link rel="alternate stylesheet" type="text/css" title="goldenrod" href="{{asset('tHomes')}}/css/skins/goldenrod.css" />
    <link rel="alternate stylesheet" type="text/css" title="green" href="{{asset('tHomes')}}/css/skins/green.css" />
    <link rel="alternate stylesheet" type="text/css" title="magenta" href="{{asset('tHomes')}}/css/skins/magenta.css" />
    <link rel="alternate stylesheet" type="text/css" title="orange" href="{{asset('tHomes')}}/css/skins/orange.css" />
    <link rel="alternate stylesheet" type="text/css" title="purple" href="{{asset('tHomes')}}/css/skins/purple.css" />
    <link rel="alternate stylesheet" type="text/css" title="red" href="{{asset('tHomes')}}/css/skins/red.css" />
    <link rel="alternate stylesheet" type="text/css" title="yellow" href="{{asset('tHomes')}}/css/skins/yellow.css" />
    <link rel="alternate stylesheet" type="text/css" title="yellowgreen" href="{{asset('tHomes')}}/css/skins/yellowgreen.css" />
    <link rel="stylesheet" type="text/css" href="{{asset('tHomes')}}/css/styleswitcher.css" />

    <!-- Template JS Files -->
    <script src="{{asset('tHomes')}}/js/modernizr.js"></script>

</head>

<body class="double-diagonal dark blog-page">

    <!-- Page Wrapper Starts -->
    <div class="wrapper">

        <!-- Banner Starts -->
        <section class="banner">
			<div class="content text-center">
				<div class="text-center top-text">
                    <!-- Main Heading Starts -->
					<div class="text-center top-text">
						<h1>Informasi posts</h1>
						<h3 style="color: white"><strong>{{$tags2->name}} Tags ({{$tags2->posts()->count()}} Informasi)</strong></h3>
					</div> 
					<!-- Main Heading Ends -->
					<hr>
                    <!-- Breadcrumb Starts -->
					<ul class="breadcrumb">
						<li><a href="{{route('/')}}"> home</a></li>
						<li>Informasi</li>
					</ul>
					<!-- Breadcrumb Ends -->
                </div>
			</div>
		</section>
		<!-- Banner Ends -->
        <!-- Section Content Starts -->
        <section class="blog">
			<div class="container">
				<div class="row">
					<div class="content col-xs-12 col-md-8">
                        @foreach ($tags2->posts as $post)
                            <!-- Article Starts -->
                            <article>
                                <a href="{{route('site.single.post',$post->slug)}}"><h4>{{$post->title}}</h4></a>
                                <!-- Figure Starts -->
                                <figure>
                                    <a href="{{route('site.single.post',$post->slug)}}">
                                        <img class="img-responsive" src="{{$post->thumbnail()}}" alt="">
                                    </a>
                                </figure>
                                <!-- Figure Ends -->
                                <!-- Excerpt Starts -->
                                <p class="excerpt-blog">{!!str_limit($post->content, 300)!!}</p>
                                <!-- Excerpt Ends -->
                                <a class="custom-button" href="{{route('site.single.post',$post->slug)}}">Read more</a>
                                <!-- Meta Starts -->
                                <div class="meta">
                                    <span><i class="fa fa-user"></i> <a href="#">{{$post->user->name}}</a></span>
                                    <span><i class="fa fa-calendar"></i>{{$post->created_at->format('d M Y')}}</span>
                                    <span><i class="fa fa-commenting"></i> <a href="#">18 comments</a></span>
                                    <span><i class="fa fa-tags"></i> @foreach ($post->tags as $tag)
                                        {{$tag->name}},
                                    @endforeach</span>
                                    <span><i class="fa fa-link"></i> <a href="#">permalink</a></span>
                                </div>
                                <!-- Meta Ends -->
                            </article>
                            <!-- Article Ends -->    
                        @endforeach

						<nav class="col-xs-12 text-center" aria-label="Page navigation">
						  <ul class="pagination">
							<li>
							  <a href="#" aria-label="Previous">
								<span aria-hidden="true"><i class="fa fa-angle-double-left"></i></span>
							  </a>
							</li>
							<li><a href="#">1</a></li>
							<li class="active"><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li>
							  <a href="#" aria-label="Next">
								<span aria-hidden="true"><i class="fa fa-angle-double-right"></i></span>
							  </a>
							</li>
						  </ul>
						</nav>
					</div>
					<!-- Sidebar Starts -->
					<div class="sidebar col-xs-12 col-md-4">
						<!-- Categories Widget Starts -->
						<div class="widget">
							<h3 class="widget-title">Categories</h3>
							<ul class="nav nav-tabs">
								@foreach ($category as $category)
									<li><a href="#">{{$category->name}} ({{$category->posts()->count()}})</a></li>
								@endforeach
							</ul>
						</div>
						<!-- Categories Widget Ends -->
						<!-- Latest Posts Widget Ends -->
						<div class="widget recent-posts">
							<h3 class="widget-title">Recent Posts</h3>
							<ul class="unstyled clearfix">
							<!-- Recent Post Widget Starts -->
							<li>
								<div class="posts-thumb pull-left"> 
									<a href="blog-post.html">
										<img alt="img" src="{{asset('tHomes')}}/img/blog/blog-post-thumb-1.jpg">
									</a>
								</div>
								<div class="post-info">
									<h4 class="entry-title">
										<a href="blog-post.html">how to be a good freelancer?</a>
									</h4>
									<p class="post-meta">
										<span class="post-date"><i class="fa fa-clock-o"></i> January 19, 2018</span>
									</p>
								</div>
								<div class="clearfix"></div>
							</li>
							<!-- Recent Post Widget Ends -->
							<!-- Recent Post Widget Starts -->
							<li>
								<div class="posts-thumb pull-left"> 
									<a href="blog-post-light.html">
										<img alt="img" src="{{asset('tHomes')}}/img/blog/blog-post-thumb-2.jpg">
									</a>
								</div>
								<div class="post-info">
									<h4 class="entry-title">
										<a href="blog-post-light.html">Collaboration with Envato</a>
									</h4>
									<p class="post-meta">
										<span class="post-date"><i class="fa fa-clock-o"></i>  August 03, 2017</span>
									</p>
								</div>
								<div class="clearfix"></div>
							</li>
							<!-- Recent Post Widget Ends -->
							<!-- Recent Post Widget Starts -->
							<li>
								<div class="posts-thumb pull-left"> 
									<a href="blog-post-light.html">
										<img alt="img" src="{{asset('tHomes')}}/img/blog/blog-post-thumb-3.jpg">
									</a>
								</div>
								<div class="post-info">
									<h4 class="entry-title">
										<a href="blog-post-light.html">why themeforest is best?</a>
									</h4>
									<p class="post-meta">
										<span class="post-date"><i class="fa fa-clock-o"></i>  March 27, 2017</span>
									</p>
								</div>
								<div class="clearfix"></div>
							</li>
							<!-- Recent Post Widget Ends -->
							</ul>
						</div>
						<!-- Latest Posts Widget Ends -->
						<!-- Tags Widget Starts -->
						<div class="widget widget-tags">
							<h3 class="widget-title"> Tags </h3>
							<ul class="unstyled clearfix">
								@foreach ($tags as $tag)
									<li><a href="#">{{$tag->name}} ({{$tag->posts()->count()}})</a></li>	
								@endforeach
							</ul>
						</div>
						<!-- Tags Widget Ends -->
					</div>
					<!-- Sidebar Ends -->
				</div>
			</div>
		</section>
		<!-- Section Content Ends -->

    </div>
    <!-- Wrapper Ends -->

    <!-- Template JS Files -->
    <script src="{{asset('tHomes')}}/js/jquery-2.2.4.min.js"></script>
    <script src="{{asset('tHomes')}}/js/plugins/jquery.easing.1.3.js"></script>
    <script src="{{asset('tHomes')}}/js/plugins/bootstrap.min.js"></script>

    <!-- Live Style Switcher JS File - only demo -->
    <script src="{{asset('tHomes')}}/js/styleswitcher.js"></script>

    <!-- Main JS Initialization File -->
    <script src="{{asset('tHomes')}}/js/custom.js"></script>

</body>


<!-- Mirrored from slimhamdi.net/amira/demos/blog-right-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Feb 2021 18:28:54 GMT -->
</html>