<!DOCTYPE html>
<html dir="ltr" lang="en-US">

@include('partials.head')

<body>
    <div class="page-wrapper">

        @include('partials.loader')

            @include('partials.header')

            @yield('content')

            @include('partials.footer')

       


    </div>
    @include('partials.script')

</body>

</html>
