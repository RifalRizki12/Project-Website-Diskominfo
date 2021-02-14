@extends('layouts.frontHomes.frontHome')
@section('content')

		<!-- Sub Banner Start Here -->
		<div class="sub-banner text-center">
			<div class="container">
				<div class="sub-banner-caption th-bg">
					<h2 class="title">Informasi</h2>
					<nav aria-label="breadcrumb">
					  <ol class="breadcrumb">
					    <li class="breadcrumb-item"><a href="#">Informasi</a></li>
					    <li class="breadcrumb-item active" aria-current="page">Informasi Grid</li>
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
                    @foreach ($posts as $post)

					<div class="col-md-6 col-lg-4">
						<!-- Blog Thumb Start Here -->
						<div class="blog-thumb">
							<figure class="blog-img">
								<img src="{{$post->thumbnail()}}" alt="blog">
							</figure>
							<div class="text">
								<ul class="blog-meta">
									<li><i class="fa fa-user th-cl"></i><a href="#">{{$post->user->name}}</a></li>
									<li><i class="fa fa-calendar th-cl"></i><a href="#">{{$post->created_at->format('d M Y')}}</a></li>
								</ul>
                                <h4 class="title"><a href="{{route('site.single.post',$post->slug)}}">{!!str_limit($post->title,30)!!}</a></h4>
                                <p>{!! str_limit($post->content,300)!!}</p>
                                <a class="readmore-btn icon-btn" href="{{route('site.single.post',$post->slug)}}">view more</a>
							</div>
						</div>
						<!-- Blog Thumb End Here -->
					</div>

                    @endforeach

				</div>
                <div class="col-sm-8 mt-50 text-center">
                    {{ $posts->links() }}
                </div>
			</div>
		</section>
		<!-- Section End -->

@endsection