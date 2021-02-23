@extends('layouts.frontHomes.frontHomes')
@section('title','Informasi Gird')
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from slimhamdi.net/amira/demos/blog-post.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Feb 2021 18:29:05 GMT -->
<head>
    <meta charset="utf-8" />
    {{-- <title>Blog Post, Amira - Creative Multipurpose Template</title> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="/images/logo/logo-diskominfo.png">

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

<body class="double-diagonal dark blog-page blog-post">
	<div class="wrapper">
		<!-- Banner Starts -->
		<section class="banner">
			<div class="content text-center">
				<div class="text-center top-text">
					<!-- Main Heading Starts -->
					<div class="text-center top-text">
						<h1>blog posts</h1>
					</div> 
					<!-- Main Heading Ends -->
					<hr>
					<!-- Breadcrumb Starts -->
					<ul class="breadcrumb">
						<li><a href="index-kenburns.html"> home</a></li>
						<li>blog</li>
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
					<div class="content col-xs-12 col-md-12">
						@foreach ($posts as $post)
							@if ($post->status == "aktif")
								<!-- Article Starts -->
								<article class="col-md-4">
									<a href="{{route('site.single.post',$post->slug)}}"><h4>{{$post->title}}</h4></a>
									<!-- Figure Starts -->
									<figure>
										<a href="{{route('site.single.post',$post->slug)}}">
											<img class="img-responsive" src="{{$post->thumbnail()}}" alt="">
										</a>
									</figure>
									<!-- Figure Ends -->
									<!-- Excerpt Starts -->
									<p class="excerpt-blog">{!! str_limit($post->content, 200) !!}</p>
									<!-- Excerpt Ends -->
									<a class="custom-button" href="{{route('site.single.post',$post->slug)}}">Read more</a>
									<!-- Meta Starts -->
									<div class="meta">
										<span><i class="fa fa-user"></i> <a href="#">{{$post->user->name}}</a></span>
										<span><i class="fa fa-calendar"></i> {{$post->created_at->format('d M Y')}}</span>
										<span><i class="fa fa-commenting"></i> <a href="blog-post.html">18 comments</a></span>
										<span><i class="fa fa-tags"></i> freelance, market</span>
										<span><i class="fa fa-link"></i> <a href="blog-post.html">permalink</a></span>
									</div>
									<!-- Meta Ends -->
								</article>
								<!-- Article Ends -->
								
							@endif
						@endforeach
						
						<nav class="col-xs-12 text-center" aria-label="Page navigation">
						  <ul class="pagination">
							{{$posts->links()}}
							{{-- <li>
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
							</li> --}}
						  </ul>
						</nav>
					</div>
				</div>
			</div>
		</section>
		<!-- Section Content Ends -->
	</div>

	<!-- Template JS Files -->
    <script src="{{asset('tHomes')}}/js/jquery-2.2.4.min.js"></script>
    <script src="{{asset('tHomes')}}/js/plugins/jquery.easing.1.3.js"></script>
    <script src="{{asset('tHomes')}}/js/plugins/bootstrap.min.js"></script>

    <!-- Live Style Switcher JS File - only demo -->
    <script src="{{asset('tHomes')}}/js/styleswitcher.js"></script>

    <!-- Main JS Initialization File -->
    <script src="{{asset('tHomes')}}/js/custom.js"></script>
</body>
