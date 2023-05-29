@extends('layouts.master')
@section('content')
    <!-- Hero Section
    ====================================== -->
    <section id="slider" class="slider slider-overlay-dark">
        <!-- START REVOLUTION SLIDER 5.0 -->
        <div class="rev_slider_wrapper">
            <div id="slider1" class="rev_slider" data-version="5.0">
                <ul>
                    <!-- slide 1 -->
                    <li data-transition="zoomout" data-slotamount="default" data-easein="Power4.easeInOut"
                        data-easeout="Power4.easeInOut" data-masterspeed="2000"
                        data-thumb="assets/images/sliders/thumb/1.jpg">

                        <!-- MAIN IMAGE -->

                            {{-- <video src="{{ asset('assets') }}/images/sliders/slide-bg/beach.mp4" alt="Slide Background Image" width="1920 "
                                height="1280" autoplay> --}}
                                <div class="col-xs-12 col-sm-12  col-md-12 text-center">
                                    <iframe width="800" height="450" src="{{ asset('assets') }}/images/sliders/slide-bg/beach.mp4" frameborder="0" allowfullscreen autoplay loop></iframe>

                                </div>


                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption" data-x="center" data-hoffset="0" data-y="center" data-voffset="-130"
                            data-whitespace="nowrap" data-width="none" data-height="none" data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                            data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500" data-splitin="none"
                            data-splitout="none" data-responsive_offset="on">
                            <div class="slide--subheadline">Explore & Create</div>
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption" data-x="center" data-hoffset="0" data-y="center" data-voffset="-65"
                            data-whitespace="nowrap" data-width="none" data-height="none" data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                            data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="750" data-splitin="none"
                            data-splitout="none" data-responsive_offset="on">
                            <div class="slide--headline">Unleash Your Potential</div>
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption" data-x="center" data-hoffset="0" data-y="center" data-voffset="20"
                            data-width="none" data-height="none" data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                            data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="none"
                            data-splitout="none" data-responsive_offset="on">
                            <div class="slide--bio text-center">
                                League is a creative multi-concept WordPress theme
                                perfectly<br />
                                designed to make awesome website for any business.
                            </div>
                        </div>

                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption" data-x="center" data-hoffset="0" data-y="center" data-voffset="100"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                            data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power3.easeOut;"
                            data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                            data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                            data-mask_out="x:inherit;y:inherit;" data-start="1250" data-splitin="none" data-splitout="none"
                            data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-164","delay":""}]'
                            data-basealign="slide" data-responsive_offset="on" data-responsive="off">
                            <div class="slide-action">
                                <a class="btn btn--secondary btn--white mr-30" href="#">Read More
                                </a>
                                <a class="btn btn--white btn--bordered" href="#">Get Started</a>
                            </div>
                        </div>
                    </li>

                    <!-- slide 2 -->
                    <li data-transition="zoomout" data-slotamount="default" data-easein="Power4.easeInOut"
                        data-easeout="Power4.easeInOut" data-masterspeed="2000"
                        data-thumb="assets/images/sliders/thumb/2.jpg">
                        <!-- MAIN IMAGE -->
                        <img src="assets/images/sliders/slide-bg/4.jpg" alt="Slide Background Image" width="1920"
                            height="1280" />
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption" data-x="center" data-hoffset="0" data-y="center" data-voffset="-130"
                            data-whitespace="nowrap" data-width="none" data-height="none" data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                            data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500" data-splitin="none"
                            data-splitout="none" data-responsive_offset="on">
                            <div class="slide--subheadline">
                                Clean, Powerful & Creative
                            </div>
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption" data-x="center" data-hoffset="0" data-y="center" data-voffset="-65"
                            data-whitespace="nowrap" data-width="none" data-height="none" data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                            data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="750" data-splitin="none"
                            data-splitout="none" data-responsive_offset="on">
                            <div class="slide--headline">Start Your Business</div>
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption" data-x="center" data-hoffset="0" data-y="center" data-voffset="20"
                            data-width="none" data-height="none" data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                            data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000"
                            data-splitin="none" data-splitout="none" data-responsive_offset="on">
                            <div class="slide--bio text-center">
                                League is a creative multi-concept WordPress theme
                                perfectly<br />
                                designed to make awesome website for any business.
                            </div>
                        </div>

                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption" data-x="center" data-hoffset="0" data-y="center" data-voffset="100"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                            data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power3.easeOut;"
                            data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                            data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                            data-mask_out="x:inherit;y:inherit;" data-start="1250" data-splitin="none"
                            data-splitout="none"
                            data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-164","delay":""}]'
                            data-basealign="slide" data-responsive_offset="on" data-responsive="off">
                            <div class="slide-action">
                                <a class="btn btn--white btn--bordered" href="#">Purchase Now</a>
                            </div>
                        </div>
                    </li>

                    <!-- slide 3 -->
                    <li data-transition="zoomout" data-slotamount="default" data-easein="Power4.easeInOut"
                        data-easeout="Power4.easeInOut" data-masterspeed="2000"
                        data-thumb="assets/images/sliders/thumb/3.jpg">
                        <!-- MAIN IMAGE -->
                        <img src="assets/images/sliders/slide-bg/9.jpg" alt="Slide Background Image" width="1920"
                            height="1280" />
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption" data-x="center" data-hoffset="0" data-y="center" data-voffset="-130"
                            data-whitespace="nowrap" data-width="none" data-height="none" data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                            data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500" data-splitin="none"
                            data-splitout="none" data-responsive_offset="on">
                            <div class="slide--subheadline">Create Your Life</div>
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption" data-x="center" data-hoffset="0" data-y="center" data-voffset="-65"
                            data-whitespace="nowrap" data-width="none" data-height="none" data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                            data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="750" data-splitin="none"
                            data-splitout="none" data-responsive_offset="on">
                            <div class="slide--headline">Poweful and Creative!</div>
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption" data-x="center" data-hoffset="0" data-y="center" data-voffset="20"
                            data-width="none" data-height="none" data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                            data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000"
                            data-splitin="none" data-splitout="none" data-responsive_offset="on">
                            <div class="slide--bio text-center">
                                League is a creative multi-concept WordPress theme
                                perfectly<br />
                                designed to make awesome website for any business.
                            </div>
                        </div>

                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption" data-x="center" data-hoffset="0" data-y="center" data-voffset="100"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                            data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power3.easeOut;"
                            data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                            data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                            data-mask_out="x:inherit;y:inherit;" data-start="1250" data-splitin="none"
                            data-splitout="none"
                            data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-164","delay":""}]'
                            data-basealign="slide" data-responsive_offset="on" data-responsive="off">
                            <div class="slide-action">
                                <a class="btn btn--secondary btn--white mr-30" href="#">Read More
                                </a>
                                <a class="btn btn--white btn--bordered" href="#">Get Started</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- END REVOLUTION SLIDER -->
        </div>
        <!-- END OF SLIDER WRAPPER -->
    </section>
    <!-- #hero end -->
    <!-- Feature #1
    ============================================= -->
    <section id="feature1" class="feature feature-1 text-center bg-white">
        <div class="container">
            <div class="row">
                <!-- Panel #1 -->
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="feature-panel">
                        <div class="feature--icon">
                            <i class="lnr lnr-tablet"></i>
                        </div>
                        <div class="feature--content">
                            <h3>Fully Responsive</h3>
                            <p>
                                League impresses you with fully responsiveness and highly
                                customization. We did it in combination of very clean and
                                flexible design.
                            </p>
                        </div>
                    </div>
                    <!-- .feature-panel end -->
                </div>
                <!-- .col-md-4 end -->

                <!-- Panel #2 -->
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="feature-panel">
                        <div class="feature--icon">
                            <i class="lnr lnr-cloud-sync"></i>
                        </div>
                        <div class="feature--content">
                            <h3>Free Updates</h3>
                            <p>
                                League impresses you with fully responsiveness and highly
                                customization. We did it in combination of very clean and
                                flexible design.
                            </p>
                        </div>
                    </div>
                    <!-- .feature-panel end -->
                </div>
                <!-- .col-md-4 end -->

                <!-- Panel #3 -->
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="feature-panel">
                        <div class="feature--icon">
                            <i class="lnr lnr-cog"></i>
                        </div>
                        <div class="feature--content">
                            <h3>Powerful Customization</h3>
                            <p>
                                League impresses you with fully responsiveness and highly
                                customization. We did it in combination of very clean and
                                flexible design.
                            </p>
                        </div>
                    </div>
                    <!-- .feature-panel end -->
                </div>
                <!-- .col-md-4 end -->
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>
    <!-- #feature1 end -->
    <!-- Portfolio 3 Column
    ============================================= -->
    <section id="portfolio" class="portfolio portfolio-grid portfolio-3col portfolio-hover-2">
        <div class="container">
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                    <div class="heading heading-2 mb-40 text--center">
                        <p class="heading--subtitle">What We Do</p>
                        <h2 class="heading--title">Our Great Works</h2>
                        <p class="heading--desc">
                            At League Agency, we shows only the best websites and
                            portfolios built completely with passion, simplicity &amp;
                            creativity !
                        </p>
                        <div class="divider--line divider--center"></div>
                    </div>
                </div>
                <!-- .col-md-8 end -->
            </div>
            <div class="row">
                <!-- Portfolio Filter
        ============================================= -->
                <div class="col-xs-12 col-sm-12 col-md-12 portfolio-filter">
                    <ul class="list-inline mb-0">
                        <li>
                            <a class="active-filter" href="#" data-filter="*">All</a>
                        </li>
                        <li><a href="#" data-filter=".filter-branding">Branding</a></li>
                        <li>
                            <a href="#" data-filter=".filter-packaging">packaging</a>
                        </li>
                        <li><a href="#" data-filter=".filter-print">Print</a></li>
                        <li>
                            <a href="#" data-filter=".filter-web">Web Development</a>
                        </li>
                    </ul>
                </div>
                <!-- .Portfolio-filter end -->
            </div>
            <div id="portfolio-all">
                <!-- Portfolio #1 -->
                <div class="col-xs-12 col-sm-6 col-md-4 portfolio-item filter-print filter-web">
                    <div class="portfolio--img">
                        <img src="assets/images/portfolio/grid/3col/1.jpg" alt="Portfolio Item" />
                        <div class="portfolio--hover">
                            <div class="portfolio--action">
                                <div class="pos-vertical-center">
                                    <div class="portfolio--zoom">
                                        <a class="img-gallery-item" href="assets/images/portfolio/full/1.jpg"
                                            title="Portfolio Item"></a>
                                    </div>
                                    <div class="portfolio--title">
                                        <h4><a href="#"> Woman T Shirt MockUp</a></h4>
                                    </div>
                                    <div class="portfolio--cat">
                                        <a href="#">Branding</a> , <a href="#">branding</a>
                                    </div>
                                </div>
                            </div>
                            <!-- .Portfolio-action end -->
                        </div>
                        <!-- .Portfolio-hover end -->
                    </div>
                    <!-- .Portfolio-img end -->
                </div>
                <!-- . portfolio-item end -->

                <!-- Portfolio #2 -->
                <div class="col-xs-12 col-sm-6 col-md-4 portfolio-item filter-packaging">
                    <div class="portfolio--img">
                        <img src="assets/images/portfolio/grid/3col/2.jpg" alt="Portfolio Item" />
                        <div class="portfolio--hover">
                            <div class="portfolio--action">
                                <div class="pos-vertical-center">
                                    <div class="portfolio--zoom">
                                        <a class="img-gallery-item" href="assets/images/portfolio/full/2.jpg"
                                            title="Portfolio Item"></a>
                                    </div>
                                    <div class="portfolio--title">
                                        <h4><a href="#">Black Fish Branding</a></h4>
                                    </div>
                                    <div class="portfolio--cat">
                                        <a href="#">Branding</a> , <a href="#">Print</a>
                                    </div>
                                </div>
                            </div>
                            <!-- .Portfolio-action end -->
                        </div>
                        <!-- .Portfolio-hover end -->
                    </div>
                    <!-- .Portfolio-img end -->
                </div>
                <!-- . portfolio-item end -->

                <!-- Portfolio #3 -->
                <div class="col-xs-12 col-sm-6 col-md-4 portfolio-item filter-branding">
                    <div class="portfolio--img">
                        <img src="assets/images/portfolio/grid/3col/3.jpg" alt="Portfolio Item" />
                        <div class="portfolio--hover">
                            <div class="portfolio--action">
                                <div class="pos-vertical-center">
                                    <div class="portfolio--zoom">
                                        <a class="img-gallery-item" href="assets/images/portfolio/full/3.jpg"
                                            title="Portfolio Item"></a>
                                    </div>
                                    <div class="portfolio--title">
                                        <h4><a href="#">The Living Branding</a></h4>
                                    </div>
                                    <div class="portfolio--cat">
                                        <a href="#">Branding</a> , <a href="#">Print</a>
                                    </div>
                                </div>
                            </div>
                            <!-- .Portfolio-action end -->
                        </div>
                        <!-- .Portfolio-hover end -->
                    </div>
                    <!-- .Portfolio-img end -->
                </div>
                <!-- . portfolio-item end -->

                <!-- Portfolio #4 -->
                <div class="col-xs-12 col-sm-6 col-md-4 portfolio-item filter-branding">
                    <div class="portfolio--img">
                        <img src="assets/images/portfolio/grid/3col/4.jpg" alt="Portfolio Item" />
                        <div class="portfolio--hover">
                            <div class="portfolio--action">
                                <div class="pos-vertical-center">
                                    <div class="portfolio--zoom">
                                        <a class="img-gallery-item" href="assets/images/portfolio/full/4.jpg"
                                            title="Portfolio Item"></a>
                                    </div>
                                    <div class="portfolio--title">
                                        <h4><a href="#">Free Coffee Cup Mockup</a></h4>
                                    </div>
                                    <div class="portfolio--cat">
                                        <a href="#">Branding</a> , <a href="#">Print</a>
                                    </div>
                                </div>
                            </div>
                            <!-- .Portfolio-action end -->
                        </div>
                        <!-- .Portfolio-hover end -->
                    </div>
                    <!-- .Portfolio-img end -->
                </div>
                <!-- . portfolio-item end -->

                <!-- Portfolio #5 -->
                <div class="col-xs-12 col-sm-6 col-md-4 portfolio-item filter-print">
                    <div class="portfolio--img">
                        <img src="assets/images/portfolio/grid/3col/5.jpg" alt="Portfolio Item" />
                        <div class="portfolio--hover">
                            <div class="portfolio--action">
                                <div class="pos-vertical-center">
                                    <div class="portfolio--zoom">
                                        <a class="img-gallery-item" href="assets/images/portfolio/full/5.jpg"
                                            title="Portfolio Item"></a>
                                    </div>
                                    <div class="portfolio--title">
                                        <h4><a href="#">Black Fish Branding</a></h4>
                                    </div>
                                    <div class="portfolio--cat">
                                        <a href="#">Branding</a> , <a href="#">Print</a>
                                    </div>
                                </div>
                            </div>
                            <!-- .Portfolio-action end -->
                        </div>
                        <!-- .Portfolio-hover end -->
                    </div>
                    <!-- .Portfolio-img end -->
                </div>
                <!-- . portfolio-item end -->

                <!-- Portfolio #6 -->
                <div class="col-xs-12 col-sm-6 col-md-4 portfolio-item filter-branding">
                    <div class="portfolio--img">
                        <img src="assets/images/portfolio/grid/3col/6.jpg" alt="Portfolio Item" />
                        <div class="portfolio--hover">
                            <div class="portfolio--action">
                                <div class="pos-vertical-center">
                                    <div class="portfolio--zoom">
                                        <a class="img-gallery-item" href="assets/images/portfolio/full/6.jpg"
                                            title="Portfolio Item"></a>
                                    </div>
                                    <div class="portfolio--title">
                                        <h4><a href="#">Gifts Box Mockup</a></h4>
                                    </div>
                                    <div class="portfolio--cat">
                                        <a href="#">Branding</a> , <a href="#">Print</a>
                                    </div>
                                </div>
                            </div>
                            <!-- .Portfolio-action end -->
                        </div>
                        <!-- .Portfolio-hover end -->
                    </div>
                    <!-- .Portfolio-img end -->
                </div>
                <!-- . portfolio-item end -->
            </div>
            <!-- .row end -->
            <!-- .row end -->
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 text--center mt-10">
                    <a class="btn btn--link btn-more" href="#"><span></span>Load More</a>
                </div>
                <!-- .col-md-2 end -->
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>
    <!-- #portfolio end -->
    <!-- Testimonial #1
    ============================================= -->
    <section id="testimonial1" class="testimonial testimonial-boxed testimonial-1 bg-white">
        <div class="container">
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                    <div class="heading heading-1 mb-20 text--center">
                        <p class="heading--subtitle">Testimonials</p>
                        <h2 class="heading--title">Why People Believe in Us!</h2>
                        <div class="divider--line divider--center mb-0"></div>
                    </div>
                </div>
                <!-- .col-md-8 end -->
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div id="testimonial-carousel" class="carousel carousel-dots" data-slide="3" data-slide-rs="1"
                        data-autoplay="false" data-nav="false" data-dots="true" data-space="0" data-loop="true"
                        data-speed="800" data-center="true">
                        <!-- Testimonial #1 -->
                        <div class="testimonial-panel">
                            <div class="testimonial--icon"></div>
                            <!-- .testimonial-icon end -->
                            <div class="testimonial--body">
                                <p>
                                    League agency is the most impressive & great social media
                                    agencies I've ever seen. From the intuitive interface to
                                    the powerful tools!
                                </p>
                            </div>
                            <!-- .testimonial-body end -->
                            <div class="testimonial--meta">
                                <div class="testimonial--meta-img">
                                    <img src="assets/images/testimonial/1.png" alt="Testimonial Author" />
                                </div>
                                <div class="testimonial--meta-content">
                                    <h4>Mahmoud Baghagho</h4>
                                    <p>7oroof Agency</p>
                                </div>
                            </div>
                            <!-- .testimonial-meta end -->
                        </div>
                        <!-- .testimonial-panel end -->

                        <!-- Testimonial #2 -->
                        <div class="testimonial-panel">
                            <div class="testimonial--icon"></div>
                            <!-- .testimonial-icon end -->
                            <div class="testimonial--body">
                                <p>
                                    My project was a simple task, but the persistence &
                                    determination of the team turned it into a great project
                                    which make me happy!
                                </p>
                            </div>
                            <!-- .testimonial-body end -->
                            <div class="testimonial--meta">
                                <div class="testimonial--meta-img">
                                    <img src="assets/images/testimonial/2.png" alt="Testimonial Author" />
                                </div>
                                <div class="testimonial--meta-content">
                                    <h4>ayman fikry</h4>
                                    <p>zytheme</p>
                                </div>
                            </div>
                            <!-- .testimonial-meta end -->
                        </div>
                        <!-- .testimonial-panel end -->

                        <!-- Testimonial #3 -->
                        <div class="testimonial-panel">
                            <div class="testimonial--icon"></div>
                            <!-- .testimonial-icon end -->

                            <div class="testimonial--body">
                                <p>
                                    In my job as social media strategist, I've tried every
                                    analytics product on the market and when I came across
                                    league,I love it.
                                </p>
                            </div>
                            <!-- .testimonial-body end -->
                            <div class="testimonial--meta">
                                <div class="testimonial--meta-img">
                                    <img src="assets/images/testimonial/3.png" alt="Testimonial Author" />
                                </div>
                                <div class="testimonial--meta-content">
                                    <h4>Fouad badawy</h4>
                                    <p>Tie Labs Inc</p>
                                </div>
                            </div>
                            <!-- .testimonial-meta end -->
                        </div>
                        <!-- .testimonial-panel end -->

                        <!-- Testimonial #4 -->
                        <div class="testimonial-panel">
                            <div class="testimonial--icon"></div>
                            <!-- .testimonial-icon end -->
                            <div class="testimonial--body">
                                <p>
                                    In my job as social media strategist, I've tried every
                                    analytics product on the market and I was blown away!, I
                                    love and trust it.
                                </p>
                            </div>
                            <!-- .testimonial-body end -->
                            <div class="testimonial--meta">
                                <div class="testimonial--meta-img">
                                    <img src="assets/images/testimonial/4.png" alt="Testimonial Author" />
                                </div>
                                <div class="testimonial--meta-content">
                                    <h4>Mostafa Mabrook</h4>
                                    <p>Code 125</p>
                                </div>
                            </div>
                            <!-- .testimonial-meta end -->
                        </div>
                        <!-- .testimonial-panel end -->
                    </div>
                </div>
                <!-- .col-md-12 end -->
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>
    <!-- #testimonial1 end -->
    <!-- Video #1
    ============================================= -->
    <section id="video1" class="video-button video-button-1 bg-overlay bg-overlay-dark4">
        <div class="bg-section">
            <img src="assets/images/background/bg-9.jpg" alt="Background" />
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="video--content">
                        <div class="bg-section">
                            <img src="assets/images/background/bg-10.jpg" alt="Background" />
                        </div>
                        <div class="video-overlay">
                            <div class="video--button">
                                <div class="pos-vertical-center">
                                    <a class="popup-video" href="https://www.youtube.com/watch?v=nrJtHemSPW4">
                                        <i class="icon icon-Play"></i> Play Video !
                                    </a>
                                </div>
                            </div>
                            <!-- .video--player end -->
                        </div>
                    </div>
                </div>
                <!-- .col-md-6 end -->
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="heading heading-2 mb-30">
                        <h2 class="heading--title text-white">
                            We love what we do<br />and we do it with passion!
                        </h2>
                        <div class="divider--line"></div>
                    </div>
                    <p>
                        After all, as described in Web Design Trends 2015 & 2016, vision
                        dominates a lot of our subconscious interpretation of the world
                        around us. On top of that, pleasing images create a better user
                        experience. Rounding up a bunch of specific designs and talking
                        about the merits of each is the perfect way to find common
                        ground. Collecting a wide array of samples and inspiration is a
                        great way to start your next awesome project.At League Agency!
                    </p>
                    <a class="btn btn--white btn--bordered" href="#">Read More</a>
                </div>
                <!-- .col-md-6 end -->
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>
    <!-- Blog Grid Carousel
    ============================================= -->
    <section id="blog" class="blog blog-carousel pb-100">
        <div class="container">
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                    <div class="heading heading-2 text--center mb-50">
                        <p class="heading--subtitle">Latest News</p>
                        <h2 class="heading--title">Our Insights & Articles</h2>
                        <p class="heading--desc">
                            Follow our latest news and thoughts which focuses exclusively
                            on design, art, vintage, and also our latest work updates.
                        </p>
                        <div class="divider--line divider--center m-0"></div>
                    </div>
                </div>
                <!-- .col-md-8 end -->
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="carousel carousel-dots" data-slide="3" data-slide-rs="2" data-autoplay="true"
                        data-nav="false" data-dots="true" data-space="25" data-loop="true" data-speed="800">
                        <!-- Blog Entry #1 -->
                        <div class="blog-entry">
                            <div class="entry--img">
                                <a href="#">
                                    <img src="assets/images/blog/grid/1.jpg" alt="entry image" />
                                </a>
                            </div>
                            <div class="entry--content">
                                <div class="entry--format">
                                    <i class="fa fa-image"></i>
                                </div>
                                <div class="entry--meta">
                                    <span><a href="#">Business</a></span>
                                </div>
                                <div class="entry--title">
                                    <h4>
                                        <a href="#">Four ways to cheer yourself up on the Next Blue
                                            Monday!</a>
                                    </h4>
                                </div>
                                <div class="entry--bio">
                                    The third Monday of January is supposed to be the most
                                    depressing day of the year. Whether you believe that or
                                    not, the long nights, cold weather and trying to keep...
                                </div>
                                <div class="entry--footer">
                                    <div class="entry--date">Feb 22, 2017</div>
                                    <div class="entry--more">
                                        <a href="#"><i class="fa fa-long-arrow-right"></i><span>more</span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- .entry-content end -->
                        </div>
                        <!-- .blog-entry end -->

                        <!-- Blog Entry #2 -->
                        <div class="blog-entry">
                            <div class="entry--img">
                                <a href="#">
                                    <img src="assets/images/blog/grid/2.jpg" alt="entry image" />
                                </a>
                            </div>
                            <div class="entry--content">
                                <div class="entry--format">
                                    <i class="fa fa-image"></i>
                                </div>
                                <div class="entry--meta">
                                    <span><a href="#">Modern</a> ,
                                        <a href="#">Photography</a></span>
                                </div>
                                <div class="entry--title">
                                    <h4>
                                        <a href="#">Old cameras can capture images better than nowdays</a>
                                    </h4>
                                </div>
                                <div class="entry--bio">
                                    Actually, Woodstock was not the first outdoor festival to
                                    feature multiple bands over several days performing on a
                                    stage set up out in the middle of a farmer’s field...
                                </div>
                                <div class="entry--footer">
                                    <div class="entry--date">Feb 22, 2017</div>
                                    <div class="entry--more">
                                        <a href="#"><i class="fa fa-long-arrow-right"></i><span>more</span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- .entry-content end -->
                        </div>
                        <!-- .blog-entry end -->

                        <!-- Blog Entry #3 -->
                        <div class="blog-entry">
                            <div class="entry--img">
                                <a href="#">
                                    <img src="assets/images/blog/grid/3.jpg" alt="entry image" />
                                </a>
                            </div>
                            <div class="entry--content">
                                <div class="entry--format">
                                    <i class="fa fa-image"></i>
                                </div>
                                <div class="entry--meta">
                                    <span><a href="#">Technology</a> , <a href="#">City</a></span>
                                </div>
                                <div class="entry--title">
                                    <h4>
                                        <a href="#">New subway line has the most advanced technology</a>
                                    </h4>
                                </div>
                                <div class="entry--bio">
                                    That may be true, but today, almost half a century later,
                                    Gary Eagle says it was only part of the story. “Well,” he
                                    begins, “it was a few things. We were hauling a piano
                                    through...
                                </div>
                                <div class="entry--footer">
                                    <div class="entry--date">Feb 22, 2017</div>
                                    <div class="entry--more">
                                        <a href="#"><i class="fa fa-long-arrow-right"></i><span>more</span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- .entry-content end -->
                        </div>
                        <!-- .blog-entry end -->

                        <!-- Blog Entry #4 -->
                        <div class="blog-entry">
                            <div class="entry--img">
                                <a href="#">
                                    <img src="assets/images/blog/grid/4.jpg" alt="entry image" />
                                </a>
                            </div>
                            <div class="entry--content">
                                <div class="entry--format">
                                    <i class="fa fa-image"></i>
                                </div>
                                <div class="entry--meta">
                                    <span><a href="#">Design</a> , <a href="#">Tips</a></span>
                                </div>
                                <div class="entry--title">
                                    <h4>
                                        <a href="#">7 Signs You’re Not A Good UX Designer
                                            Yet!Discussion</a>
                                    </h4>
                                </div>
                                <div class="entry--bio">
                                    UX Designer is still a relatively new profession, and one
                                    that is still being defined. Emil suggests it is an often
                                    misinterpreted role and that ‘User Experience Designer’
                                    is...
                                </div>
                                <div class="entry--footer">
                                    <div class="entry--date">Feb 22, 2017</div>
                                    <div class="entry--more">
                                        <a href="#"><i class="fa fa-long-arrow-right"></i><span>more</span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- .entry-content end -->
                        </div>
                        <!-- .blog-entry end -->

                        <!-- Blog Entry #5 -->
                        <div class="blog-entry">
                            <div class="entry--img">
                                <a href="#">
                                    <img src="assets/images/blog/grid/1.jpg" alt="entry image" />
                                </a>
                            </div>
                            <div class="entry--content">
                                <div class="entry--format">
                                    <i class="fa fa-image"></i>
                                </div>
                                <div class="entry--meta">
                                    <span><a href="#">Money</a> , <a href="#">Tips</a></span>
                                </div>
                                <div class="entry--title">
                                    <h4>
                                        <a href="#">15 Money Tips To Make You Rich In the end of 2015</a>
                                    </h4>
                                </div>
                                <div class="entry--bio">
                                    To make 2015 your most lucrative year yet, you may have to
                                    do some things differently than what you've done in the
                                    past.Here are 15 action items that can put you ahead...
                                </div>
                                <div class="entry--footer">
                                    <div class="entry--date">Feb 22, 2017</div>
                                    <div class="entry--more">
                                        <a href="#"><i class="fa fa-long-arrow-right"></i><span>more</span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- .entry-content end -->
                        </div>
                        <!-- .blog-entry end -->

                    </div>
                    <!-- .carousel end -->
                </div>
                <!-- .col-md-12 end -->
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>
    <!-- #blog end -->
    <!-- Skills #1
    ============================================= -->
    <section id="skills1" class="skills bg-white">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="heading heading-8 pt-50 mb-30">
                        <h2 class="heading--title">
                            Awesome, Clean, <br />Poweful and Creative!
                        </h2>
                        <div class="divider--line m-0"></div>
                    </div>
                    <!-- .heading end -->
                </div>
                <!-- .col-md-6 end -->
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <!-- progress 1 -->
                    <div class="progressbar">
                        <div class="progress-title">
                            <span class="title">Marketing</span>
                            <span class="value">95%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>
                    <!-- .progressbar end -->

                    <!-- progress 2 -->
                    <div class="progressbar">
                        <div class="progress-title">
                            <span class="title">Development</span>
                            <span class="value">87%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="87" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>
                    <!-- .progressbar end -->

                    <!-- progress 3 -->
                    <div class="progressbar">
                        <div class="progress-title">
                            <span class="title">User Experience</span>
                            <span class="value">81%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="81" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>
                    <!-- .progressbar end -->

                    <!-- progress 4 -->
                    <div class="progressbar">
                        <div class="progress-title">
                            <span class="title">Branding</span>
                            <span class="value">70%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>
                    <!-- .progressbar end -->
                </div>
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>
    <!-- #skills1 end -->
    <!-- Counter #4
    ============================================= -->
    <section id="counter4" class="counter counter-dark bg-overlay bg-overlay-theme3">
        <div class="bg-section">
            <img src="assets/images/counter/counter-1.jpg" alt="Background" />
        </div>
        <div class="container">
            <div class="row">
                <!-- count #1 -->
                <div class="col-xs-6 col-sm-3 col-md-3">
                    <div class="count-box text-center">
                        <div class="counting">538</div>
                        <div class="count-title">Coffee Cups</div>
                    </div>
                </div>
                <!-- .col-md-3 end -->

                <!-- count #2 -->
                <div class="col-xs-6 col-sm-3 col-md-3">
                    <div class="count-box text-center">
                        <div class="counting">106</div>
                        <div class="count-title">Clients</div>
                    </div>
                </div>
                <!-- .col-md-3 end -->

                <!-- count #3 -->
                <div class="col-xs-6 col-sm-3 col-md-3">
                    <div class="count-box text-center">
                        <div class="counting">215</div>
                        <div class="count-title">Projects</div>
                    </div>
                </div>
                <!-- .col-md-3 end -->

                <!-- count #4 -->
                <div class="col-xs-6 col-sm-3 col-md-3">
                    <div class="count-box text-center">
                        <div class="counting">79</div>
                        <div class="count-title">Awards</div>
                    </div>
                </div>
                <!-- .col-md-3 end -->
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>
    <!-- #counter4 end -->
     <!-- workflow
===
=== === === === === === === === === === === === === === -->
<section id="workflow" class="workflow">
    <div class="container">
      <div class="row clearfix">
        <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
          <div class="heading heading-1 mb-30 text--center">
            <p class="heading--subtitle">Explore and Create</p>
            <h2 class="heading--title">Build Your Own Website</h2>
            <p class="heading--desc">
              League impresses you with fully responsiveness and highly
              customization. We did it in combination of very clean and
              flexible design.
            </p>
            <div class="divider--line divider--center mb-0"></div>
          </div>
        </div>
        <!-- .col-md-8 end -->
      </div>
      <!-- .row end -->
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="tabs">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
              <li class="active">
                <a href="#Brainstorming" data-toggle="tab">Brainstorming</a>
              </li>
              <li><a href="#Prototype" data-toggle="tab">Prototype</a></li>
              <li><a href="#Design" data-toggle="tab">Design</a></li>
              <li>
                <a href="#Evaluation" data-toggle="tab">Evaluation</a>
              </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              <div class="tab-pane fade in active" id="Brainstorming">
                <div class="row">
                  <div class="col-xs-12 col-sm-5 col-md-6 pr-0">
                    <div class="col-img">
                      <div class="bg-section">
                        <img
                          src="assets/images/workflow/1.jpg"
                          alt="Background"
                        />
                      </div>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-7 col-md-6 pl-0">
                    <div class="col-content bg-white">
                      <h4>Take all data <br />and think about it!</h4>
                      <p>
                        After all, as described in Web Design Trends 2015 &
                        2016, vision dominates a lot of our subconscious
                        interpretation of the world around us. On top of
                        that, pleasing images create a better user
                        experience.
                      </p>
                      <p>
                        At League Agency, we shows only the best websites
                        and portfolios built completely with passion,
                        simplicity & creativity !
                      </p>
                      <a class="btn btn--primary mt-20" href="#"
                        >read more</a
                      >
                    </div>
                  </div>
                </div>
                <!-- .row end -->
              </div>
              <!-- .tab-pane end -->
              <div class="tab-pane" id="Prototype">
                <div class="row">
                  <div class="col-xs-12 col-sm-5 col-md-6 pr-0">
                    <div class="col-img">
                      <div class="bg-section">
                        <img
                          src="assets/images/workflow/2.jpg"
                          alt="Background"
                        />
                      </div>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-7 col-md-6 pl-0">
                    <div class="col-content bg-white">
                      <h4>Work on the design<br />taking in mind.</h4>
                      <p>
                        After all, as described in Web Design Trends 2015 &
                        2016, vision dominates a lot of our subconscious
                        interpretation of the world around us. On top of
                        that, pleasing images create a better user
                        experience.
                      </p>
                      <p>
                        At League Agency, we shows only the best websites
                        and portfolios built completely with passion,
                        simplicity & creativity !
                      </p>
                      <a class="btn btn--primary mt-20" href="#"
                        >read more</a
                      >
                    </div>
                  </div>
                </div>
                <!-- .row end -->
              </div>
              <!-- .tab-pane end -->
              <div class="tab-pane" id="Design">
                <div class="row">
                  <div class="col-xs-12 col-sm-5 col-md-6 pr-0">
                    <div class="col-img">
                      <div class="bg-section">
                        <img
                          src="assets/images/workflow/3.jpg"
                          alt="Background"
                        />
                      </div>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-7 col-md-6 pl-0">
                    <div class="col-content bg-white">
                      <h4>Know about customers and competitors.</h4>
                      <p>
                        After all, as described in Web Design Trends 2015 &
                        2016, vision dominates a lot of our subconscious
                        interpretation of the world around us. On top of
                        that, pleasing images create a better user
                        experience.
                      </p>
                      <p>
                        At League Agency, we shows only the best websites
                        and portfolios built completely with passion,
                        simplicity & creativity !
                      </p>
                      <a class="btn btn--primary mt-20" href="#"
                        >read more</a
                      >
                    </div>
                  </div>
                </div>
                <!-- .row end -->
              </div>
              <!-- .tab-pane end -->
              <div class="tab-pane" id="Evaluation">
                <div class="row">
                  <div class="col-xs-12 col-sm-5 col-md-6 pr-0">
                    <div class="col-img">
                      <div class="bg-section">
                        <img
                          src="assets/images/workflow/4.jpg"
                          alt="Background"
                        />
                      </div>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-7 col-md-6 pl-0">
                    <div class="col-content bg-white">
                      <h4>Work on the design <br />and think about it!</h4>
                      <p>
                        After all, as described in Web Design Trends 2015 &
                        2016, vision dominates a lot of our subconscious
                        interpretation of the world around us. On top of
                        that, pleasing images create a better user
                        experience.
                      </p>
                      <p>
                        At League Agency, we shows only the best websites
                        and portfolios built completely with passion,
                        simplicity & creativity !
                      </p>
                      <a class="btn btn--primary mt-20" href="#"
                        >read more</a
                      >
                    </div>
                  </div>
                </div>
                <!-- .row end -->
              </div>
              <!-- .tab-pane end -->
            </div>
          </div>
          <!-- .tabs end -->
        </div>
        <!-- .col-md-12 end -->
      </div>
      <!-- .row end -->
    </div>
    <!-- .container end -->
  </section>
  <!-- #workflow end -->
  <!-- Clients Carousel
============================================= -->
<section id="clients" class="clients clients-carousel bg-white">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div
            class="carousel carousel-dots"
            data-slide="6"
            data-slide-rs="2"
            data-autoplay="true"
            data-nav="false"
            data-dots="false"
            data-space="30"
            data-loop="true"
            data-speed="3000"
          >
            <!-- Client #1 -->
            <div class="client">
              <img
                class="center-block"
                src="assets/images/clients/1.png"
                alt="client"
              />
            </div>

            <!-- Client #2 -->
            <div class="client">
              <img
                class="center-block"
                src="assets/images/clients/2.png"
                alt="client"
              />
            </div>

            <!-- Client #3 -->
            <div class="client">
              <img
                class="center-block"
                src="assets/images/clients/3.png"
                alt="client"
              />
            </div>

            <!-- Client #4 -->
            <div class="client">
              <img
                class="center-block"
                src="assets/images/clients/4.png"
                alt="client"
              />
            </div>

            <!-- Client #5 -->
            <div class="client">
              <img
                class="center-block"
                src="assets/images/clients/5.png"
                alt="client"
              />
            </div>

            <!-- Client #6 -->
            <div class="client">
              <img
                class="center-block"
                src="assets/images/clients/6.png"
                alt="client"
              />
            </div>
          </div>
        </div>
        <!-- .col-md-12 end -->
      </div>
      <!-- .row end -->
    </div>
    <!-- .container end -->
  </section>
  <!-- #clients end -->
@endsection
