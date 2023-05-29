@extends('layouts.master')

@section('content')
    <!-- Page Title #5
        ===
        ===
        === === === === === === === === === === === === === -->
    <section id="page-title" class="page-title bg-overlay bg-overlay-dark3">
        <div class="bg-section">
            <img src="assets/images/page-title/title-6.jpg" alt="Background" />
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                    <div class="title title-2 text-center">
                        <div class="title--content">
                            <div class="title--heading">
                                <h1>Islamic Blogs</h1>
                            </div>
                            <div class="title--desc">
                                <p>League is a creative multi-concept WordPress theme perfectly designed to make awesome
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
    </section> <!-- #page-title end -->
    <!-- Blog Grid
    ===
    ===
    === === === === === === === === === === === === === -->
    <section id="blog" class="blog blog-grid">
        <div class="container">
            <div class="widget widget-search">
                <div class="widget--content">
                    <form class="form-search" action="{{route('blogs.search')}}" method="post">
                        @csrf
                        <div class="input-group">
                            <input type="text" name='keyword' class="form-control" placeholder="Type Your Search Words">
                            <span class="input-group-btn">
                                <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                            </span>

                        </div>
                        <!-- /input-group -->
                    </form>

                </div>
            </div> <!-- .widget-search end --> <!-- .widget-search end -->
            <div class="row">

                @foreach ($blogs as $blog)
                    <!-- Blog Entry #1 -->
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="blog-entry">
                            <div class="entry--img">
                                <a href="#">
                                    {{-- <img src="{{ asset('storage') }}/blogs/thumbnail/{{ $blog->thumbnail }}" /> --}}
                                    <img src="{{ asset('storage') }}/{{ $blog->thumbnail }}" />
                                </a>
                            </div>
                            <div class="entry--content">
                                <div class="entry--format">
                                    <i class="fa fa-image"></i>
                                </div>
                                <div class="entry--meta">
                                    <span><a href="#">{{ $blog->author_name }}</a></span>
                                </div>
                                <div class="entry--title">
                                    <h4><a href="{{ route('blogs.show', $blog) }}">{{ $blog->title }}</a></h4>
                                </div>
                                <div class="entry--bio">
                                    {{ $blog->summary }}...
                                </div>
                                <div class="entry--footer">
                                    <div class="entry--date">
                                        {{ date('d-M-Y', strtotime($blog->created_at)) }}
                                    </div>
                                    <div class="entry--more">
                                        <a href="{{ route('blogs.show', $blog) }}"><i
                                                class="fa fa-long-arrow-right"></i><span>more</span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- .entry-content end -->
                        </div>
                        <!-- .blog-entry end -->
                    </div>
                    <!-- .col-md-4 end -->
                @endforeach


            </div>
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
    {{-- <section>
        <div class="blog-item-data">
            <a href="#"><i class="fa fa-clock-o"></i> 5 December</a>
            <span class="seperator">&nbsp;</span>
            <a href="#"><i class="fa fa-user"></i> John Doe</a>
            <span class="seperator">&nbsp;</span>
            <i class="fa fa-folder-open"></i>
            <a href="#">Category</a>, <a href="#">Category</a>
            <span class="seperator">&nbsp;</span>
            <a href="#"><i class="fa fa-comments"></i> 5 Comments</a>
        </div>
    </section> --}}
    <!-- #blog end -->
@endsection
