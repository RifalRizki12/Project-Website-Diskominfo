@extends('layouts.frontHomes.frontHomes')
@section('title','Detail Informasi - Diskominfo')
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from slimhamdi.net/amira/demos/blog-post.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Feb 2021 18:29:05 GMT -->
<head>
    <meta charset="utf-8" />
    <title>Blog Post, Amira - Creative Multipurpose Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('tHomes')}}/img/favicon.png">

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
        <section class="banner banner-blog-post">
            <div class="content text-center">
                <div class="text-center top-text">
                    <!-- Main Heading Starts -->
                    <div class="text-center top-text">
                        <h1>{{$post->title}}</h1>
                    </div> 
                    <!-- Main Heading Ends -->
                    <hr>
                    <!-- Meta Starts -->
                    <div class="meta">
                        <span><i class="fa fa-user"></i> <a href="#">{{$post->user->name}}</a></span>
                        <span><i class="fa fa-calendar"></i> {{$post->created_at->format('d M Y')}}</span>
                        <span><i class="fa fa-commenting"></i> <a href="#">29 comments</a></span>
                        <span><i class="fa fa-tags"></i> 
                            @foreach ($post->tags as $tag)
                                <a href="#">{{$tag->name}}</a>  
                            @endforeach</span>
                        <span><i class="fa fa-link"></i> <a href="#">permalink</a></span>
                    </div>
                    <!-- Meta Ends -->
                </div>
            </div>
        </section>
        <!-- Banner Ends -->
        
        <!-- Section Content Starts -->
        <section class="blog">
            <div class="container">
                <div class="row">
                    <div class="content col-xs-12 col-md-8">
                        <!-- Article Starts -->
                        <article>
                            <!-- Figure Starts -->
                            <figure>
                                <a href="#">
                                    <img class="img-responsive" src="{{$post->thumbnail()}}" alt="">
                                </a>
                            </figure>
                            <!-- Figure Ends -->
                            <!-- Content Starts -->
                            <p class="content-article">{!!$post->content!!}</p>
                            <!-- Content Ends -->
                            <!-- Meta Starts -->
                            <div class="meta">
                                <span><i class="fa fa-user"></i> <a href="#">{{$post->user->name}}</a></span>
                                <span><i class="fa fa-calendar"></i>{{$post->created_at->format('d M Y')}}</span>
                                <span><i class="fa fa-tags"></i> 
                                    @foreach ($post->tags as $tag)
                                    {{$tag->name}},
                                    @endforeach
                                </span>
                                <span><i class="fa fa-link"></i> <a href="#">permalink</a></span>
                            </div>
                            <!-- Meta Ends -->
                            <!-- Comments Starts -->
                        <div class="comments">
                            <h3 class="comments-heading uppercase">Komentar</h3>
                            @foreach ($post->comments as $comment)
                                <ul class="comments-list">
                                    <li>
                                        <!-- Comment Starts -->
                                        <div class="comment">
                                            <img class="comment-avatar pull-left" alt="" src="{{asset('tHomes')}}/img/blog/user1.jpg">
                                            <div class="comment-body">
                                                <div class="meta-data">
                                                    <span class="comment-author">{{$comment->user->name}}</span>
                                                    <span class="comment-date pull-right second-font">{{$comment->created_at->diffForHumans()}}</span>
                                                </div>
                                                <p class="comment-content">
                                                {!!$comment->comment!!}</p>
                                                <div>
                                                    <a class="comment-reply" href="#">Reply</a>
                                                </div>	
                                            </div>
                                        </div>
                                        <!-- Comment Ends -->
                                        {{-- <ul class="comments-reply">
                                            <li>
                                                <!-- Comment Starts -->
                                                <div class="comment">
                                                    <img class="comment-avatar pull-left" alt="" src="{{asset('tHomes')}}/img/blog/user2.jpg">
                                                    <div class="comment-body">
                                                        <div class="meta-data">
                                                            <span class="comment-author">Rawia Chniti</span>
                                                            <span class="comment-date pull-right">March 29, 2017</span>
                                                        </div>
                                                        <p class="comment-content">
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehen.</p>
                                                        <div>
                                                            <a class="comment-reply" href="#">Reply</a>
                                                        </div>	
                                                    </div>
                                                </div>
                                                <!-- Comment Ends -->
                                            </li>
                                        </ul> --}}
                                        
                                    </li>
                                </ul> 
                            @endforeach
                            
                            @guest
                            <h3 class="comments-heading add-comment"><a href="{{route('login')}}"> Login Terlebih dahulu</a></h3>
                            @else
                            <h3 class="comments-heading add-comment">Tambah Komentar</h3>
                                <!-- Comments Form Starts -->
                                <div class="custom-form comments-form">
                                    <form action="{{route('buatKomentar',$post->id)}}" method="POST">
                                        {{ csrf_field() }}
                                        
                                        <div class="form-group">
                                            <textarea type="text" class="form-control" id="comment" name="comment" placeholder="COMMENT"  required></textarea>
                                        </div>
                                        <!-- Input Field Ends -->
                                        <!-- Submit Form Button Starts -->
                                        <div class="form-group">
                                            <button class="custom-button" type="submit">submit comment</button>
                                        </div>
                                        <!-- Submit Form Button Ends -->
                                    </form>
                                </div>
                                <!-- Comments Form Ends -->
                            @endguest
                        </div>
                        </article>
                        <!-- Article Ends -->
                    </div>
                    <!-- Sidebar Starts -->
                    <div class="sidebar col-xs-12 col-md-4">
                        <!-- Categories Widget Starts -->
                        <div class="widget">
                            <h3 class="widget-title">Categories</h3>
                            <ul class="nav nav-tabs">
                                @foreach ($category as $category)
									<li><a href="{{route('categoryShow',[$category->id])}}">{{$category->name}} ({{$category->posts()->count()}})</a></li>
								@endforeach
                            </ul>
                        </div>
                        <!-- Categories Widget Ends -->
                    
                        <!-- Tags Widget Starts -->
                        <div class="widget widget-tags">
                            <h3 class="widget-title">Popular Tags </h3>
                            <ul class="unstyled clearfix">
                                @foreach ($tags as $tag)
									<li><a href="{{route('tagShow',[$tag->id])}}">{{$tag->name}} ({{$tag->posts()->count()}})</a></li>	
								@endforeach
                            </ul>
                        </div>
                        <!-- Tags Widget Ends -->
                    </div>
                    <!-- Sidebar Ends -->
                </div>
            </div>
        </section>
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

</html>
