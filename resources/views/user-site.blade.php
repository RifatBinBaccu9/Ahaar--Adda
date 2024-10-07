<!DOCTYPE html>
<html lang="en">

@include('user-site.common.head')

<body>

  <!-- ======= Header ======= -->
  @include('user-site.common.header')
 <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  @include('user-site.common.sidebar')
  <!-- End Sidebar-->

  @yield('user-site')
<!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('user-site.common.footer')
  <!-- End Footer -->

  

  <!-- Vendor JS Files -->
  @include('user-site.common.js')

</body>

</html>