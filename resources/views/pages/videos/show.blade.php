@extends('layouts.master')

@section('content')
    <!-- Page Title #8
            ============================================= -->
    <section id="page-title" class="page-title bg-overlay bg-overlay-gradient2">
        <div class="bg-section">
            <img src="assets/images/page-title/title-6.jpg" alt="Background" />
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                    <div class="title title-2 text-center">
                        <div class="title--content">
                            <div class="title--heading mb-60">
                                <h1>Single Video</h1>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div><!-- .title end -->
                </div><!-- .col-md-12 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </section><!-- #page-title end -->
    <!-- Blog Single Right Sidebar
    ===
    === === === === === === === === === === === === === === -->
    <section id="blog" class="blog blog-single">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-9">
                    <!-- Blog Entry -->
                    <div class="blog-entry">
                        <div class="entry--img">
                            <div style="width:870; height:562; box-sizing:border-box;">

                            </div>
                                <video controls src="{{ asset('storage') }}/{{$video->video}}" width="100%" >

                        </div>
                        <div class="entry--content">
                            <div class="entry--format">
                                <i class="fa fa-image"></i>
                            </div>
                            <div class="entry--meta">
                                <span>Oct 25, 2016</span> |
                                <span>Author: {{$video->author_name}}</span>
                                | <span>Book Name: {{$video->book}}</span>
                            </div>
                            <div class="entry--title">
                                <h4><a>{{$video->title}}</a></h4>
                            </div>
                            <div class="entry--bio">
                                <p>
                                    {{$video->description}}
                                </p>

                            </div>

                            <!-- .entry-share end -->
                        </div>
                    </div>
                    <!-- .blog-entry end -->

                    {{-- <div class="entry-prev-next clearfix">
                        <div class="entry-prev">
                            <div class="entry-prev-content">
                                <img src="assets/images/blog/thumb/1.jpg" alt="title" />
                                <div class="entry-desc">
                                    <p>previous post</p>
                                    <a href="#">Four ways to cheer yourself up on the Blue Monday!</a>
                                </div>
                            </div>
                        </div>
                        <div class="entry-next">
                            <div class="entry-next-content">
                                <img src="assets/images/blog/thumb/2.jpg" alt="title" />
                                <div class="entry-desc">
                                    <p>next post</p>
                                    <a href="#">Old cameras can capture images better than nowdays camera!</a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <!-- .entry-prev-next end -->

                    {{-- <div class="entry-widget entry-bio clearfix">
                        <div class="entry-widget-title">
                            <h4>about author</h4>
                        </div>
                        <div class="entry-widget-content">
                            <img src="assets/images/team/thumb/1.jpg" alt="author" />
                            <div class="entry-bio-desc">
                                <p>we’re league, an award-winning digital marketing agency based in New York. Founded by
                                    Begha over many cups of tea at her kitchen table in 2009, our brand promise is simple:
                                    to provide powerful digital marketing solutions to small and medium businesses.</p>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-vimeo-square"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-rss"></i></a>
                            </div>
                        </div>
                    </div> --}}
                    <!-- .entry-bio end -->






                </div>
                <!-- .col-md-9 end -->
                <div class="col-xs-12 col-sm-12 col-md-3">
                    <!-- Search
    ===
    ===
    === === === === === === === === === === === === === -->
                    <div class="widget widget-search">
                        <div class="widget--content">
                            <form class="form-search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Type Your Search Words">
                                    <span class="input-group-btn">
                                        <button class="btn" type="button"><i class="fa fa-search"></i></button>
                                    </span>

                                </div>
                                <!-- /input-group -->
                            </form>
                        </div>
                    </div> <!-- .widget-search end -->

                    <!-- Categories
    ===
    ===
    === === === === === === === === === === === === === -->
                    <div class="widget widget-categories">
                        <div class="widget--title">
                            <h5>categories</h5>
                        </div>
                        <div class="widget--content">
                            <ul class="list-unstyled">
                                @foreach ( $categories as $category)
                                <li>
                                    <a href="#">{{$category->name}}<span>(20)</span></a>
                                </li>
                                @endforeach


                            </ul>
                        </div>
                    </div> <!-- .widget-categories end -->
                </div>
                <!-- .col-md-3 end -->
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section> <!-- #blog end -->
@endsection
