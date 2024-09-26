<!DOCTYPE html>
<html lang="en">

<!-- head section start -->
@include('font-site.common.head')
<!-- head section end -->

<body>
    <div class="container-xxl bg-white p-0">
       
        <!-- Master Start -->
        @yield('font-site')
        <!-- Master end -->

        <!-- Footer Start -->
        @include('font-site.common.footer')
        <!-- Footer End -->
    </div>

    <!-- JavaScript Libraries -->
   @include('font-site.common.Javascript')
</body>

</html>