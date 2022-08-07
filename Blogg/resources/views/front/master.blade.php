<!DOCTYPE html>
<html lang="zxx">


<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>


    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    @include('front.include.asset.css')
</head>

<body>


<!-- preloader start -->
<div class="preloader">
    <img src="{{asset('/')}}front/images/preloader.gif" alt="preloader">
</div>
<!-- preloader end -->

<header>
     @include('front.include.header.header')
     @include('front.include.menu.menu')

</header>

    @include('front.include.header.search')

    @yield('body')
<!-- footer -->
    @include('front.include.footer.footer')
<!-- /footer -->

    @include('front.include.asset.script')

</body>

</html>
