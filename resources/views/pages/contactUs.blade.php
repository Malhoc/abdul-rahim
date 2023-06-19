@extends('layouts.master')

@section('content')
<div id="wrapper" class="wrapper clearfix">

    {{-- <!-- Page Title #1
        ============================================= -->
    <section id="page-title" class="page-title">
        <div class="container-fluid bg-overlay bg-overlay-theme">
            <div class="bg-section">
                <img src="assets/images/page-title/title-1.jpg" alt="Background" />
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="title title-1 text--center">
                        <div class="title--content">
                            <div class="title--heading">
                                <h1>Contact Form</h1>
                            </div>
                        </div>
                    </div><!-- .page-title end -->
                </div><!-- .col-md-12 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </section><!-- #page-title end -->
    <!-- Contact #1
        ============================================= -->
    <section id="contact1" class="contact contact-1">
        <div class="container">

            <div class="row clearfix">

                @if (\Session::has('success'))
                    <div style="text-align: center; background-color: green">
                        <h3>{{ \Session::get('success') }}</h3>
                    </div>
                @else
                    <div style="text-align: center; background-color: red">
                        <h3>{{ \Session::get('error') }}</h3>
                    </div>
                @endif
                <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                    <div class="heading heading-2 mb-60 text--center">
                        <p class="heading--subtitle">Feel Free to</p>
                        <h2 class="heading--title">Write Us Anytime</h2>
                        <div class="divider--line divider--center">
                        </div>
                    </div>
                </div><!-- .col-md-8 end -->
            </div><!-- .row end -->
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="contact-form">
                        <form id="contactForm" class="mb-0" method="POST" action="{{ route('contact-us.store') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6" @error('first_name') has-error @enderror>
                                    <input required type="text" class="form-control" name="first_name" id="first_name"
                                        placeholder="First Name:">
                                    @error('first_name')
                                        <span class="help-block m-b-none">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6" @error('last_name') has-error @enderror>
                                    <input type="text" class="form-control" name="last_name" id="name-last"
                                        placeholder="Last Name" required>
                                    @error('last_name')
                                        <span class="help-block m-b-none">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6" @error('email') has-error @enderror>
                                    <input required type="email" class="form-control" name="email" id="email"
                                        placeholder="Email:" required>
                                    @error('email')
                                        <span class="help-block m-b-none">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6"@error('phone') has-error @enderror>
                                    <input type="number" class="form-control" name="phone" id="phone"
                                        placeholder="Phone:" required>
                                    @error('phone')
                                        <span class="help-block m-b-none">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-12" @error('message') has-error @enderror>
                                    <textarea class="form-control" required name="message" id="message" rows="2" placeholder="Message" required></textarea>
                                    @error('message')
                                        <span class="help-block m-b-none">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" value="Send Message" name="submit"
                                        class="btn btn--secondary btn--block">
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!-- .col-md-6 end -->
            </div>
        </div>
    </section>
    <!-- #contact1 end --> --}}


      <!-- Page Title #2
============================================= -->
<section id="page-title" class="page-title bg-overlay bg-overlay-dark">
    <div class="bg-section">
      <img src="assets/images/page-title/title-12.jpg" alt="Background" />
    </div>
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
          <div class="title title-2 mb-70 text-center">
            <div class="title--content">
              <div class="title--heading">
                <h1>Contact Us</h1>
              </div>
              <div class="title--desc">
                <p>
                  League is a creative multi-concept WordPress theme
                  perfectly designed to make awesome website for any
                  business.
                </p>
              </div>
            </div>
            <div class="clearfix"></div>
            <ol class="breadcrumb">
              <li><a href="index-2.html">Home</a></li>
              <li class="active">Contact</li>
            </ol>
          </div>
          <!-- .title end -->
        </div>
        <!-- .col-md-12 end -->
      </div>
      <!-- .row end -->
    </div>
    <!-- .container end -->
  </section>
  <!-- #page-title end -->

  <!-- Contact #3
============================================= -->
  <section id="contact3" class="contact contact-3 bg-white">
    <div class="container">
        <div class="row clearfix">

            @if (\Session::has('success'))
                <div style="text-align: center; background-color: green">
                    <h3>{{ \Session::get('success') }}</h3>
                </div>
            @else
                <div style="text-align: center; background-color: red">
                    <h3>{{ \Session::get('error') }}</h3>
                </div>
            @endif
            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                <div class="heading heading-2 mb-60 text--center">
                    <p class="heading--subtitle">Feel Free to</p>
                    <h2 class="heading--title">Write Us Anytime</h2>
                    <div class="divider--line divider--center">
                    </div>
                </div>
            </div><!-- .col-md-8 end -->
        </div><!-- .row end -->
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6">
          <div class="heading heading-2 mb-60">
            <p class="heading--subtitle">Contact Us</p>
            <h2 class="heading--title">Get in Touch</h2>
            <div class="divider--line m-0"></div>

          </div>
          <div class="clearfix"></div>
          <div class="row mb-50">
            <div class="col-xs-12 col-sm-6 col-md-6">
              <div class="contact--info">
                <h3>Our Address</h3>
                <p>Houston, Texas, USA</p>
              </div>
            </div>
            <!-- .col-md-6 end -->
            <div class="col-xs-12 col-sm-6 col-md-6">
              <div class="contact--info">
                <h3>Our Phone</h3>
                <p>Office Telephone : 002 01065370701</p>
                <p>Mobile : 002 01065370701</p>
              </div>
            </div>
            <!-- .col-md-6 end -->
          </div>
          <!-- .row end -->
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6">
              <div class="contact--info">
                <h3>Our Email</h3>
                <p>Main Email : ayman@zytheme.com</p>
                <p>Inquiries : Info@zytheme.com</p>
              </div>
            </div>
            <!-- .col-md-6 end -->
            <div class="col-xs-12 col-sm-6 col-md-6">
              <div class="contact--info">
                <h3>Our Support</h3>
                <p>Support : ayman@zytheme.com</p>
                <p>Sales : Sales@zytheme.com</p>
              </div>
            </div>
            <!-- .col-md-6 end -->
          </div>
        </div>
        <!-- .col-md-6 end -->
        <div class="col-xs-12 col-sm-12 col-md-6">
          <div class="heading heading-2 mb-60">
            <p class="heading--subtitle">Feel Free</p>
            <h2 class="heading--title">Write To Us</h2>
            <div class="divider--line m-0"></div>

          </div>
          <div class="clearfix"></div>
          <div class="contact-form">
            <form id="contactForm" class="mb-0" method="POST" action="{{ route('contact-us.store') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6" @error('first_name') has-error @enderror>
                                    <input required type="text" class="form-control" name="first_name" id="first_name"
                                        placeholder="First Name:">
                                    @error('first_name')
                                        <span class="help-block m-b-none">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6" @error('last_name') has-error @enderror>
                                    <input type="text" class="form-control" name="last_name" id="name-last"
                                        placeholder="Last Name" required>
                                    @error('last_name')
                                        <span class="help-block m-b-none">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6" @error('email') has-error @enderror>
                                    <input required type="email" class="form-control" name="email" id="email"
                                        placeholder="Email:" required>
                                    @error('email')
                                        <span class="help-block m-b-none">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6"@error('phone') has-error @enderror>
                                    <input type="number" class="form-control" name="phone" id="phone"
                                        placeholder="Phone:" required>
                                    @error('phone')
                                        <span class="help-block m-b-none">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-12" @error('message') has-error @enderror>
                                    <textarea class="form-control" required name="message" id="message" rows="2" placeholder="Message" required></textarea>
                                    @error('message')
                                        <span class="help-block m-b-none">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" value="Send Message" name="submit"
                                        class="btn btn--secondary btn--block">
                                </div>
                            </div>
                        </form>
          </div>
        </div>
        <!-- .col-md-6 end -->
      </div>
    </div>
  </section>
  <!-- #contact1 end -->

  <!-- Contact
============================================= -->
  <section id="contact" class="contact pb-0 pt-0">
    <div class="container-fluid pr-0 pl-0">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 pr-0 pl-0">
          <div id="googleMap" style="width: 100%; height: 498px"></div>
        </div>
      </div>
    </div>
    <script src="{{asset('assets')}}/js/jquery-2.2.4.min.js"></script>
    <script
      type="text/javascript"
      src="http://maps.google.com/maps/api/js?sensor=true&amp;key=AIzaSyC2MxjDzu1HAAtpULkuqricX8hs1WB4OV4--NFA"
    ></script>
    <script
      type="text/javascript"
      src="{{asset('assets')}}/js/plugins/jquery.gmap.min.js"
    ></script>
    <script type="text/javascript">
      $("#googleMap").gMap({
        address: "Houston, Texas, USA",
        zoom: 20,
        markers: [
          {
            address: "Houston, Texas, USA",
            maptype: "ROADMAP",
            icon: {
              image: {{asset('assets')}}"/images/gmap/maker.png",
              iconsize: [35, 35],
              iconanchor: [17, 35],
            },
          },
        ],
      });
    </script>
  </section>
  <!-- #contact end -->
</div>
@endsection
