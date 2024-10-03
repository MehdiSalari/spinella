<!-- header begin -->
<header class="header_center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- logo begin -->
                <div id="logo">
                    <a href="{{ route('home') }}">
                        <img class="logo logo_dark_bg" src="{{ asset('assets/images/logo.png') }}" alt="">
                        <img class="logo logo_light_bg" src="{{ asset('assets/images/logo.png') }}" alt="">
                    </a>
                </div>
                <!-- logo close -->

                <!-- small button begin -->
                <span id="menu-btn"></span>
                <!-- small button close -->

                <!-- mainmenu begin -->
                <nav>
                    <ul id="mainmenu">
                        <li><a href="{{ route('blog') }}">Blog</a></li>
                        <li><a href="{{ route('products') }}">Products</a></li>
                        <li><a href="{{ route('about-us') }}">About</a></li>
                        <li><a href="{{ route('contact-us') }}">Contact</a></li>
                    </ul>
                </nav>
                <div class="clearfix"></div>
            </div>
            <!-- mainmenu close -->

        </div>
    </div>
    <!-- Language Menu -->
    <div class="lang" id="lang">
        <img src="{{ asset('assets/images/language.png') }}" style="width: 30px; height: 30px">
        <div class="lang-dropdown">
            <a href="en">English</a>
            <a href="fa">فارسی</a>
        </div>
    </div>
</header>
<input type="hidden" id="app_url" value="{{ route('home') }}">
<!-- header close -->