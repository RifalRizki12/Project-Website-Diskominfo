@extends('layouts.frontHomes.frontHome')
@section('content')

<!-- Sub Banner Start Here -->
<div class="sub-banner text-center">
    <div class="container">
        <div class="sub-banner-caption th-bg">
            <h2 class="title">Blog Detail</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Blog Detail</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- Sub Banner End Here -->

<!-- Section Start -->
<section class="pt-130 pb-130">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <!-- Blog Details Start Here -->
                <div class="blog-detail">
                    <figure class="blog-img">
                        <img src="{{$post->thumbnail()}}" alt="blog">
                    </figure>
                    <div class="text">
                        <ul class="blog-meta">
                            <li><i class="fa fa-user th-cl"></i><a href="#">{{$post->user->name}}</a></li>
                            <li><i class="fa fa-calendar th-cl"></i><a href="#">{{$post->created_at->diffForHumans()}}</a></li>
                        </ul>
                        <h4 class="title">{{$post->title}}</h4>
                        <p>{!! $post->content !!}</p>
                        <blockquote>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is
                            <span>– Tom Pitarson</span></p>
                        </blockquote>
                        <h6 class="small-title">Why We Learn More And More</h6>
                        <p class="mb-20">Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
                        <div class="row">
                            <div class="col-md-6">
                                <figure class="mb-21"><img src="images/blog/blog-detail-1.jpg" alt=""></figure>
                            </div>
                            <div class="col-md-6">
                                <figure class="mb-21"><img src="images/blog/blog-detail-2.jpg" alt=""></figure>
                            </div>
                        </div>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt </p>
                    </div>
                </div>
                <!-- Blog Details End Here -->
                <div class="post-share-tags">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="blog_tag_meta">
                                <strong>Tags :</strong>
                                @foreach ($post->tags as $tag)
                                    <a href="#">{{$tag->name}}</a>  
                                @endforeach

                            </div>
                        </div>
                        <div class="col-md-6">
                            <ul class="social-meta">
                                <li><strong>Share It : </strong></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="admin-box mb-45">
                    <figure>
                        <img src="images/admin-img.jpg" class="img-fluid" alt="">
                    </figure>
                    <div class="text">
                        <h4 class="title">David Maxxwell</h4>
                        <p>Must explain to you how all this mistaken idea of pleasure and praising pain was born and I will give you complete account of the system, and expound the actual teachings of the great explorer of the truth the master-builder of human</p>
                        <ul class="social-meta">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="related-post">
                    <h6 class="small-title">Related News</h6>
                    <div class="row">
                        <div class="col-md-6">
                            <!--Event Thumb Strat-->
                            <div class="event-thumb-2">
                                <figure><img src="images/blog/blog-detail-3.jpg" alt=""></figure>
                                <div class="text">
                                    <h6 class="title"><a href="#">Mixing Tangible & Intangible Interfaces Using Adobe</a></h6>
                                </div>
                            </div>
                            <!--Event Thumb End-->
                        </div>
                        <div class="col-md-6">
                            <!--Event Thumb Strat-->
                            <div class="event-thumb-2">
                                <figure><img src="images/blog/blog-detail-4.jpg" alt=""></figure>
                                <div class="text">
                                    <h6 class="title"><a href="#">How To Convert An Infographic Gifogra Adobe Photoshop</a></h6>
                                </div>
                            </div>
                            <!--Event Thumb End-->
                        </div>
                    </div>
                </div>
                <div class="media-list-wrap mb-45">
                    <h6 class="small-title">Comments</h6>
                    <div class="media">
                        <img class="mr-3" src="images/media-img.jpg" alt="Generic placeholder image">
                        <div class="media-body">
                            <h5 class="mt-0">David Angel Makel</h5>
                            <p class="designnation th-cl">Wed Designer</p>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page 
                            when looking at its layout. The point of using Lorem Ipsum that  more-or-less normal distribution
                            of letters, as opposed to using Content here, content</p>
                            <a class="readmore-btn icon-btn" href="#">Reply Comments</a>
                            <div class="media mt-40">
                                <a class="pr-3" href="#">
                                    <img src="images/media-img.jpg" alt="Generic placeholder image">
                                </a>
                                <div class="media-body">
                                    <h5 class="mt-0">Michel Rason Roy</h5>
                                    <p class="designnation th-cl">Computer Engineer</p>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page 
                                    when looking at its layout. The point of using Lorem Ipsum that  more-or-less normal distribution
                                    of letters, as opposed to using Content here, content</p>
                                    <a class="readmore-btn icon-btn" href="#">Reply Comments</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="comment-form media-list-wrap">
                    <h6 class="small-title">Reply Comments</h6>
                    <form class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" placeholder="Full Name Here">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="email" placeholder="Email Here">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Massage"></textarea>
                            </div>
                            <div class="form-group m-0 text-left">
                                <button class="btn th-bg icon-btn" type="submit">Send message</button>
                            </div>
                        </div>
                    </form>
                </div>
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
                                @foreach ($posts as $post)
                                <li><a href="#">{{$post->name}}</a></li>
                                    
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class="single-widget tags_widget">
                        <div class="widget-title">
                            <h2><span>Tag</span></h2>
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