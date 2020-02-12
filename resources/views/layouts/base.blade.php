<!DOCTYPE html>
<html lang="en" dir="ltr">
  @include('layouts.head')
  <body>
    @yield('header-menu')
    @yield('section1-home')
    @yield('section2-home')
    @yield('section3-home')

    @yield('section1-faq')
    @yield('section2-faq')

    @include('layouts.footer')
  </body>
</html>
