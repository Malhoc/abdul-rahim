<!DOCTYPE html>
<html dir="ltr" lang="en-US">

@include('partials.head')

<body>
    <div class="page-wrapper">

        @include('partials.loader')
        <div id="wrapper" > 
            @include('partials.header')

            @yield('content')

            @include('partials.footer')

        </div>


    </div>
    @include('partials.script')

</body>

</html>
