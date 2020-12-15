<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @stack('prepend-style')
    @include('includes.style')
    @stack('addon-style')
    <title>@yield('title')</title>
  </head>
  <body>
    <!-- NAVBAR -->
    @include('includes.navbar-alternate')

    <!-- CONTENT -->
    @yield('content')

    @include('includes.footer')

    @stack('prepend-script')
    @include('includes.script')
    @stack('addon-script')

    
  </body>
</html>
