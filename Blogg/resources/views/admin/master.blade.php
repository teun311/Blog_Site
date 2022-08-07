
<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
  @include('admin.include.asset.css')

</head>

<body data-sidebar="dark">

<!-- Begin page -->
<div id="layout-wrapper">

    <header id="page-topbar">
        @include('admin.include.header.header')
    </header>
   @include('admin.include.menu.menu')
    <div class="main-content">

        <div class="page-content">
           @yield('body')
        </div>


       @include('admin.include.footer.footer')
    </div>

</div>
@include('admin.include.asset.script')
</body>


</html>
