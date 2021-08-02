<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="@yield('seo_description')"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('dist/css/bootstrap.min.css') }}">
    @stack('css')
    <title>@yield('title')</title>
  </head>
  <body>
    @include('inc.navbar')

    <div class="wrapper">
        @yield('content')
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="{{ asset('dist/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('dist/js/popper.min.js') }}"></script>
    <script src="{{ asset('dist/js/bootstrap.min.js') }}"></script>
    @stack('js')
  </body>
</html>
