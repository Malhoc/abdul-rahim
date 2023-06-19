<header id="navbar-spy" class="header header-14 header-topbar header-light header-fixed">
    <div id="top-bar" class="top-bar">
        <div class="container">
            <div class="bottom-bar-border">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 top--contact hidden-xs">
                        <ul class="list-inline mb-0 ">
                            <li>
                                <i class="fa fa-map-marker"></i><span>Tanta AlGharbia, Egypt.</span>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i> <span>+ 2 0106 5370701</span>
                            </li>
                            <li>
                                <i class="fa fa-phone"></i> <span>ayman@zytheme.com</span>
                            </li>
                        </ul>
                    </div><!-- .col-md-6 end -->
                    <div class="col-xs-12 col-sm-6 col-md-6 top--social text-right text-center-xs">
                        <span>Don’t miss to follow us</span>
                        <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                        <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                        <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                        <a class="rss" href="#"><i class="fa fa-rss"></i></a>
                    </div><!-- .col-md-6 end -->
                </div>
            </div>
        </div>
    </div>
    <nav id="primary-menu" class="navbar navbar-fixed-top">
        <div class="container">
            <div class="">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="logo" href="index-2.html">
                        <img class="logo-light" src="assets/images/logo/hadees.jpg" alt="League Logo" width="60px"
                            height="60px">
                        <img class="logo-dark" src="assets/images/logo/hadees.jpg" alt="League Logo" width="60px"
                            height="60px">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse pull-right" id="navbar-collapse-1">
                    <ul class="nav navbar-nav nav-pos-right nav-bordered-right snavbar-left">

                        <!-- Home Menu -->
                        <li class="active">
                            <a href="{{ route('index') }}" class="dropdown-toggle menu-item">home</a>
                        </li>
                        <li >
                            <a href="{{ route('videos.index') }}" class="dropdown-toggle menu-item">Videos</a>
                        </li>
                        <li class="has-dropdown">
                            <a href="{{ route('blogs.index') }}"  class="dropdown-toggle menu-item">Blog</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="blog-carousel.html">blog carousel</a>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">blog grid</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="blog-grid.html">fullwidth</a>
                                        </li>
                                        <li>
                                            <a href="blog-grid-sidebar-left.html">left sidebar</a>
                                        </li>
                                        <li>
                                            <a href="blog-grid-sidebar-right.html">right sidebar</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">blog minimal</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="blog-minimal.html">fullwidth</a>
                                        </li>
                                        <li>
                                            <a href="blog-minimal-sidebar-left.html">left sidebar</a>
                                        </li>
                                        <li>
                                            <a href="blog-minimal-sidebar-right.html">right sidebar</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">blog
                                        standard</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="blog-standard-center.html">fullwidth</a>
                                        </li>
                                        <li>
                                            <a href="blog-standard-sidebar-left.html">left sidebar</a>
                                        </li>
                                        <li>
                                            <a href="blog-standard-sidebar-right.html">right sidebar</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">blog single</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="blog-single-center.html">fullwidth</a>
                                        </li>
                                        <li>
                                            <a href="blog-single-sidebar-left.html">left sidebar</a>
                                        </li>
                                        <li>
                                            <a href="blog-single-sidebar-right.html">right sidebar</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="blog-masonry.html">blog masonry</a>
                                </li>
                            </ul>
                        </li>
                        <li >
                            <a href="{{ route('about-us') }}"  class="dropdown-toggle menu-item">About us</a>
                        </li>
                        <li >
                            <a href="{{ route('contact-us') }}"  class="dropdown-toggle menu-item">Contact Us</a>
                        </li>

                        <!-- Blog Menu-->
                        <!-- li end -->

                    </ul>


                    <!-- .module-cart end -->
                    <!-- Module Side NAV -->



                </div>
                <!-- /.navbar-collapse -->
            </div>
        </div>
        <!-- /.container-fluid -->
    </nav>

</header>
