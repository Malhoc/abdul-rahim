@extends('layouts.master')

@section('content')

<div id="wrapper" class="wrapper clearfix">

    {{-- <section id="page-title" class="page-title bg-overlay bg-overlay-dark3">
        <div class="bg-section">
            <img src="{{ asset('assets') }}/images/page-title/title-6.jpg" alt="Background" />
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                    <div class="title title-2 text-center">
                        <div class="title--content">
                            <div class="title--heading">
                                <h1>Islamic Videos</h1>
                            </div>
                            <div class="title--desc">
                                <p>League is a creative multi-concept theme perfectly designed to make awesome
                                    website for any business. </p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!-- .title end -->
                </div>
                <!-- .col-md-12 end -->
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section> <!-- #page-title end --> --}}
    <section id="blog" class="blog blog-grid" >
        <div class="container" >
            <div class="col-md-12 col-xs-12 col-sm-12 mb-30-xs mb-30-sm" style="margin-bottom: 2rem">
				<div class="cart-shiping">

					<div class="row">
					<form action="{{route('videos.search')}}" method="GET">
                        @csrf
                        <div class="col-md-12">
							<input type="text" name="keyword" class="form-control" id="postal-code" placeholder="Type here...">
						</div>
						<div class="col-xs-12 col-md-4">
							<i class="fa fa-angle-down"></i>
							<select class="form-control">
								<option value="All" disabled selected>Select by Author</option>
								<option value="USA">USA</option>
								<option value="AFG">Afghanistan</option>
								<option value="ALA">Åland Islands</option>
							</select>
						</div>
						<div class="col-xs-12 col-md-4">
							<i class="fa fa-angle-down"></i>
							<select class="form-control">
								<option value="All" disabled selected>Select by Book</option>
								<option value="al">Alabama</option>
								<option value="AK">Alaska</option>
								<option value="AZ">Arizona</option>
								<option value="AR">Arkansas</option>
								<option value="CA">California</option>
							</select>
						</div>

						<div class="col-md-4">
							<button type="submit" class="btn btn--primary pull-right pull-none-xs">Search</button>
						</div>
					</form>
					</div>
				</div><!-- .cart-shiping end -->
			</div>
                {{-- <div class="widget widget-search">
                    <div class="widget--content">
                        <form class="form-search" action="{{route('videos.search')}}" method="post">
                            @csrf
                            <div class="input-group">
                                <input type="text" name='keyword' class="form-control" placeholder="Type Your Search Words">
                                <span class="input-group-btn">
                                    <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                                </span>

                            </div>


                    </div>
                </div>  --}}

            <div class="row mt-5">

                @foreach ($videos as $video)
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="blog-entry">
                            <div class="entry--img">
                                <div style="width:370px; height:255px; box-sizing:border-box;">
                                    <video src="{{ asset('storage') }}/{{ $video->video }}">
                                </div>

                            </div>
                            <div class="entry--content">
                                {{-- <div class="entry--format">
                                    <i class="fa fa-image"></i>
                                </div>
                                <div class="entry--meta">
                                    <span><a href="#">Business</a></span>
                                </div> --}}
                                <div class="entry--title">
                                    <h4><a href="{{ route('videos.show', $video->id) }}">{{ $video->title }}</a></h4>
                                </div>
                                {{-- <div class="entry--bio">
                                    {{ $video->description }}
                                </div> --}}
                                <div class="entry--footer">
                                    {{-- <div class="entry--date">
                                        Feb 22, 2017
                                    </div> --}}
                                    <div class="entry--more">
                                        <a href="{{ route('videos.show', $video->id) }}"><i
                                                class="fa fa-long-arrow-right"></i><span>Watch Video</span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- .entry-content end -->
                        </div>
                        <!-- .blog-entry end -->
                    </div>
                @endforeach
                <!-- .col-md-4 end -->



            </div><!-- .video--player end -->
            <!-- .row end -->
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 clearfix mt-20 text--center">
                    <ul class="pagination">
                        <li class="active"><a href="#">1</a>
                        </li>
                        <li><a href="#">2</a>
                        </li>
                        <li><a href="#">3</a>
                        </li>
                        <li>
                            <a href="#" aria-label="Next">
                                <span aria-hidden="true"><i class="fa fa-angle-right"></i></span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- .col-md-12 end -->
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>
</div>
<!-- Page Title #5
                    ===
                    ===
                    === === === === === === === === === === === === === -->

    <!-- #blog end -->
@endsection
