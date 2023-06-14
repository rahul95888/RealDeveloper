<!DOCTYPE html>
<html>

<head>
    @include('frontend.layouts.head')
</head>

<body data-spy="scroll" data-target="#navbarRyan" data-offset="98">
    <div id="loading">
        <div class="load-circle"><span class="one"></span></div>
    </div>
    @include('frontend.layouts.header')
    <section>
        @yield('content')
    </section>
    <!-- Footer section -->
    <footer>
        @include('frontend.layouts.footer')
    </footer>

</body>

</html>
