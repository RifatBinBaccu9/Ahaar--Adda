<!DOCTYPE html>
<html lang="en">

  <!-- head section start -->
  @include('admin-site.common.head')
  <!-- head section end -->

<body>

  <!-- ======= Header ======= -->
@include('admin-site.common.header')
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
   @include('admin-site.common.sidebar')
<!-- End Sidebar-->

  @yield('admin-site')
<!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('admin-site.common.footer')
  <!-- Vendor JS Files -->
  @include('admin-site.common.js')

</body>

</html>