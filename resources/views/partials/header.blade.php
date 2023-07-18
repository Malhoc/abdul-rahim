<header id="navbar-spy" class="header header-14 header-topbar header-light header-fixed">
    <div id="top-bar" class="top-bar">
        <div class="container">
            <div class="bottom-bar-border">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 top--contact hidden-xs">
                        <ul class="list-inline mb-0 ">
                            <li>
                                <i class="fa fa-map-marker"></i><span>Houston, Texas, USA</span>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i> <span>1-832-800-8177</span>
                            </li>
                            <li>
                                <i class="fa fa-phone"></i> <span>islamtodayhadees@gmail.com</span>
                            </li>
                        </ul>
                    </div><!-- .col-md-6 end -->
                    <div class="col-xs-12 col-sm-6 col-md-6 top--social text-right text-center-xs">
                        <span>Don’t miss to follow us</span>
                        <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                        <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                        <a class="youtube" href="https://www.youtube.com/watch?v=yG6Jrtx3X-8"><i class="fa fa-youtube"></i></a>
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
                        <img class="logo-light" src="{{asset('assets')}}/images/logo/hadees.jpg" alt="League Logo" width="70px"
                            height="70px">
                        <img class="logo-dark" src="{{asset('assets')}}/images/logo/hadees.jpg" alt="League Logo" width="70px"
                            height="70px">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse pull-right" id="navbar-collapse-1">
                    <ul class="nav navbar-nav nav-pos-right nav-bordered-right snavbar-left">

                        <!-- Home Menu -->
                        <li class="active">
                            <a href="{{ route('index') }}" class="dropdown-toggle menu-item">Home</a>
                        </li>
                        <li >
                            <a href="{{ route('videos.index') }}" class="dropdown-toggle menu-item">Videos</a>
                        </li>
                        <li class="has-dropdown">
                            <a href="{{ route('blogs.index') }}"  class="dropdown-toggle menu-item">Blog</a>
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
