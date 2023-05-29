@extends('layouts.master')

@section('content')
    <!-- Page Title #8
            ============================================= -->
    <section id="page-title" class="page-title bg-overlay bg-overlay-gradient2">
        <div class="bg-section">
            <img src="{{ asset('storage') }}/blogs/{{$singleBlog->image}}" />
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                    <div class="title title-2 text-center">
                        <div class="title--content">
                            <div class="title--heading mb-60">
                                <h1>Religious Blog</h1>
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
                            <a href="#">
                                <img src="{{ asset('storage') }}/{{$blog->thumbnail}}" />
                            </a>
                        </div>
                        <div class="entry--content">
                            <div class="entry--format">
                                <i class="fa fa-image"></i>
                            </div>
                            <div class="entry--meta">
                                <span>Oct 25, 2016</span> /
                                <span><a href="#">{{ $singleBlog->auther_name }}</a>span>
                                / <span>comments <a href="#">11</a></span>
                            </div>
                            <div class="entry--title">
                                <h4><a href="#"></a>{{ $singleBlog->title }}</h4>
                            </div>
                            <div class="entry--bio">
                                <p>
                                    {{ $singleBlog->description}}
                                </p>


                            </div>
                            <div class="entry--share">
                                <span class="share--title">share this article: </span>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                            <!-- .entry-share end -->
                        </div>
                    </div>
                    <!-- .blog-entry end -->


                    <div class="entry-widget entry-add-comment mb-0 clearfix">
                        <div class="entry-widget-title">
                            <h4>Leave A Reply</h4>
                        </div>
                        <div class="entry-widget-content">
                            <form id="post-comment" class="mb-0">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-6">
                                        <input type="text" class="form-control" id="first-name"
                                            placeholder="First Name:" />
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6">
                                        <input type="text" class="form-control" id="last-name"
                                            placeholder="Last Name:" />
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6">
                                        <input type="email" class="form-control" id="email"
                                            placeholder="Email:" />
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6">
                                        <input type="text" class="form-control" id="website"
                                            placeholder="website:" />
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <textarea class="form-control" id="comment" rows="2" placeholder="Comment"></textarea>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <button type="submit" class="btn btn--secondary btn--block">Post Your
                                            Comment</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- .entry-comments end -->

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
                                <li>
                                    <a href="#">social analytics<span>(20)</span></a>
                                </li>
                                <li>
                                    <a href="#">security<span>(16)</span></a>
                                </li>
                                <li>
                                    <a href="#">engagement<span>(19)</span></a>
                                </li>
                                <li>
                                    <a href="#">listening<span>(200)</span></a>
                                </li>
                                <li>
                                    <a href="#">callabaration<span>(600)</span></a>
                                </li>
                                <li>
                                    <a href="#">web applications<span>(59)</span></a>
                                </li>
                            </ul>
                        </div>
                    </div> <!-- .widget-categories end -->

                    <!-- Recent Posts
    ===
    === === === === === === === === === === === === === === -->



                    <!-- Tag Clouds
    ===
    ===
    === === === === === === === === === === === === === -->
                    <div class="widget widget-tags">
                        <div class="widget--title">
                            <h5>tag clouds</h5>
                        </div>
                        <div class="widget--content">
                            <a href="#">responsive</a>
                            <a href="#">modern</a>
                            <a href="#">corporate</a>
                            <a href="#">business</a>
                            <a href="#">fresh</a>
                            <a href="#">awesome</a>
                            <a href="#">business</a>
                            <a href="#">fresh</a>
                            <a href="#">corporate</a>
                        </div>
                    </div> <!-- .widget-tags end -->

                    <!-- Instagram Feed
    ===
    === === === === === === === === === === === === === === -->
                    <div class="widget widget-instagram">
                        <div class="widget--title">
                            <h5>Instagram feed</h5>
                        </div>
                        <div class="widget--content">
                            <div id="instafeedsidebar" class="instafeed" data-insta-number="6"></div>
                            <div class="clearfix"></div>
                        </div>
                    </div> <!-- .widget-instagram end -->
                </div>
                <!-- .col-md-3 end -->
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section> <!-- #blog end -->
@endsection
