@include('layouts.head')
  <body>
    <!-- Header Start -->
    @include('layouts.headerUtama')
    <!-- Header End -->

    <!-- Hero Section -->
    @yield('content')

    <!-- Hero End -->

    @include('layouts.js')
  </body>
</html>
