@extends('layouts.master')

@section('content')
    <!-- Page Title #5
                ===
                ===
                === === === === === === === === === === === === === -->
    <section id="page-title" class="page-title bg-overlay bg-overlay-dark3">
        <div class="bg-section">
            <img src="{{ asset('assets') }}/images/page-title/title-6.jpg" alt="Background" />
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                    <div class="title title-2 text-center">
                        <div class="title--content">
                            <div class="title--heading">
                                <h1>Blog Grid</h1>
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

            <div class="row">
                <!-- Blog Entry #1 -->


                    {{-- <iframe
                        src="https://player.vimeo.com/video/43005056?color=ffffff&amp;title=0&amp;byline=0&amp;portrait=0"
                        width="370" height="248" frameborder="0" webkitallowfullscreen mozallowfullscreen
                        allowfullscreen></iframe> --}}

                {{-- <div class="col-xs-12 col-sm-12  col-md-12 ">
                    <iframe src="{{ asset('storage') }}/videos/mixkit.mp4" width="370px" height="260px"></iframe>
                </div> --}}
                @foreach ($videos as $video)
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="blog-entry">
                            <div class="entry--img">

                                <video controls src="{{ asset('storage') }}/videos/mixkit.mp4" width="370px"
                                    height="248px">

                            </div>
                            <div class="entry--content">
                                <div class="entry--format">
                                    <i class="fa fa-image"></i>
                                </div>
                                <div class="entry--meta">
                                    <span><a href="#">Business</a></span>
                                </div>
                                <div class="entry--title">
                                    <h4><a href="#">{{ $video->title }}</a></h4>
                                </div>
                                <div class="entry--bio">
                                    {{ $video->description }}
                                </div>
                                <div class="entry--footer">
                                    <div class="entry--date">
                                        Feb 22, 2017
                                    </div>
                                    <div class="entry--more">
                                        <a href="#"><i class="fa fa-long-arrow-right"></i><span>more</span></a>
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
    <!-- #blog end -->
@endsection
