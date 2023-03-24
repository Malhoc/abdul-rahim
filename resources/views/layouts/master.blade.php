<!DOCTYPE html>
<html dir="ltr" lang="en-US">

@include('partials.head')

<body>
    <div class="page-wrapper">

        @include('partials.loader')
        <div id="wrapper" class="wrapper clearfix">
            @include('partials.header')

            @yield('content')

            @include('partials.footer')

        </div>

        @include('partials.script')

    </div>
</body>

</html>
