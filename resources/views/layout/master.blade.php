<!DOCTYPE html>
<html lang="en">

@include('layout.head')

<body>
    <div id="wrapper"></div>
    @include('layout.header')
@yield('content')

@include('layout.footer')
        <div id="preloader">
            <div class="preloader1"></div>
        </div>
    </div>
@include('layout.scripts')

</body>
</html>