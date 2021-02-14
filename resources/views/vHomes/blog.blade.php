@extends('layouts.frontHomes.frontHome')
@section('content')

	<!-- Sub Banner Start Here -->
	<div class="sub-banner text-center">
		<div class="container">
			<div class="sub-banner-caption th-bg">
				<h2 class="title">Blog Full</h2>
				<nav aria-label="breadcrumb">
				  <ol class="breadcrumb">
				    <li class="breadcrumb-item"><a href="#">Home</a></li>
				    <li class="breadcrumb-item active" aria-current="page">Blog Full</li>
				  </ol>
				</nav>
			</div>
		</div>
	</div>
	<!-- Sub Banner End Here -->

<!-- Section Start -->
<section class="pt-130 pb-130 section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8">
                @foreach ($posts as $post)
                <!-- Blog Thumb Start Here -->
                <div class="blog-thumb blog-thumb-full">
                    <figure class="blog-img">
                        <img src="{{$post->thumbnail()}}" alt="blog">
                    </figure>
                    <div class="text">
                        <ul class="blog-meta">
                            <li><i class="fa fa-user th-cl"></i><a href="#">{{$post->user->name}}</a></li>
                            <li><i class="fa fa-calendar th-cl"></i><a href="#">{{$post->created_at->format('d M Y')}}</a></li>
                            <li><i class="fa fa-comments-o th-cl"></i><a href="#">Comments (10)</a></li>
                        </ul>
                        <h4 class="title"><a href="{{route('site.single.post',$post->slug)}}">{!!str_limit($post->title,30)!!}</a></h4>
                        <p>{!! str_limit($post->content,300)!!}</p>
                        <a class="btn th-bg icon-btn" href="{{route('site.single.post',$post->slug)}}">Learn more</a>
                    </div>
                </div>
                <!-- Blog Thumb End Here -->
                    
                @endforeach

                <!-- Pagination Start Here -->
                {{ $posts->links() }}
                
                {{-- <div class="pagination-area float-left w-100 mt-40  mb-md-5 text-center">
                    <ul>
                        <li>{{ $posts->links() }}</li>
                        
                    </ul>
                </div> --}}
                <!-- Pagination End Here -->
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="sidebar-widgets sidebar-widgets-style-1">
                    <div class="single-widget widget_search">
                        <form role="search" method="post" id="searchForm" class="search-form"  action="http://oscarthemes.com/html/edukul/education/page-search-results.html" method="get">
                            <div class="from-grupe">
                                <input type="text" placeholder="Search your keyword..." name="q" id="q" class="search-field">
                                <button class="th-cl" type="submit" ><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="single-widget categories_widget">
                        <div class="widget-title">
                            <h2><span>Categories</span></h2>
                        </div>
                        <div class="categories-list ">
                            <ul>
                                <li><a href="#">Accessories</a></li>
                                <li><a href="#">Clothing</a></li>
                                <li><a href="#">Decor</a></li>
                                <li><a href="#">Hoodies</a></li>
                                <li><a href="#">Music </a></li>
                                <li><a href="#">Tshirts </a></li>
                                <li><a href="#">Uncategorized </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="single-widget recentpost_widget">
                        <div class="widget-title">
                            <h2><span>Feeds</span></h2>
                        </div>
                        <div class="recentpost-list ">
                            <div class="single-post">
                                <div class="media">
                                    <div class="post-img mr-3">
                                        <a href="#"><img src="images/blog/r1.png" alt="recent post"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="mt-0"><a href="#">Alonso Kelina Falao Asiano Pero</a></h4>
                                        <div class="time">
                                            <p><i class="fa fa-clock-o"></i> <span>3 Hours ago </span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-post">
                                <div class="media">
                                    <div class="post-img mr-3">
                                        <a href="#"><img src="images/blog/r2.png" alt="recent post"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="mt-0"><a href="#">It is a long established fact that a reader</a></h4>
                                        <div class="time">
                                            <p><i class="fa fa-clock-o"></i> <span>4 Hours ago </span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-post">
                                <div class="media">
                                    <div class="post-img mr-3">
                                        <a href="#"><img src="images/blog/r3.png" alt="recent post"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="mt-0"><a href="#">Many desktop publish packages and web</a></h4>
                                        <div class="time">
                                            <p><i class="fa fa-clock-o"></i> <span>5 Hours ago </span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-post">
                                <div class="media">
                                    <div class="post-img mr-3">
                                        <a href="#"><img src="images/blog/r4.png" alt="recent post"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="mt-0"><a href="#">Various versions have evolved over the years</a></h4>
                                        <div class="time">
                                            <p><i class="fa fa-clock-o"></i> <span>6 Hours ago </span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-post">
                                <div class="media">
                                    <div class="post-img mr-3">
                                        <a href="#"><img src="images/blog/r5.png" alt="recent post"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="mt-0"><a href="#">Photo booth anim 8-bit PBR 3 wolf moon.</a></h4>
                                        <div class="time">
                                            <p><i class="fa fa-clock-o"></i> <span>7 Hours ago </span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-widget tags_widget">
                        <div class="widget-title">
                            <h2><span>Populer Tag</span></h2>
                        </div>
                        <div class="tags-list ">
                            <ul>
                                <li><a href="#">Cleaning</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Car</a></li>
                                <li><a href="#">House</a></li>
                                <li><a href="#">Washing </a></li>
                                <li><a href="#">Agency </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section End -->
@endsection