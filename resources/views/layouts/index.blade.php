<!DOCTYPE html>
<html lang="en">

  <head>
    @include('partials.head')
  </head>
  
  <body>
    @include('partials.preloader')
    @include('partials.header')
    @yield('hero')
    @yield('content')
    @include('partials.footer')
    @include('partials.script')
  </body>
</html>