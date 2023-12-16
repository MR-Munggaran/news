  @include('layouts.head')

  <body>
    <!-- Header Start -->
    @include('layouts.headerUtama')
    <!-- Header End -->

    <!-- Hero Section -->
    @yield('konten')
    <!-- Hero End -->

    @include('layouts.js')
  </body>
</html>
