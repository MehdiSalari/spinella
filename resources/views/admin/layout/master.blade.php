<!DOCTYPE html>
<html lang="en">
<!-- Start Head -->
@include('admin.layout.head')
<!-- End Head -->

<!-- Start Body -->
<body>
    <!-- Start Side Bar -->
    @include('admin.layout.sidebar')
    <!-- End Side Bar -->
    <div class="all-content-wrapper">
        
        <!-- Start Header Area -->
        @include('admin.layout.header')
        <!-- End Header Area -->



        @yield('content')



        <!-- Start Footer area-->
        @include('admin.layout.footer')
        <!-- End Footer area-->
    </div>
    <!-- Start Scripts -->
    @include('admin.layout.scripts')
    <!-- End Scripts -->
</body>

</html>

</body>
</html>