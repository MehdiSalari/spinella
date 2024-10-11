@extends('layout.master')

@section('content')
        <div id="content" class="no-bottom no-top">

            <!-- slider section begin -->
            <section id="section-slider" class="fullwidthbanner-container" aria-label="section-slider">
                <div id="revolution-slider">
                    <ul>
                    <li data-transition="fade" data-slotamount="10" data-masterspeed="default" data-thumb="">
                            <!--  BACKGROUND IMAGE -->
                            <img src="{{ asset('assets/images/slider/slide-1.jpg') }}" alt="" data-bgposition="center center"
                                data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10">

                            <div class="tp-caption big-s1 custom-header-title" data-x="center" data-y="220"
                                data-width="none" data-height="none" data-whitespace="nowrap"
                                data-transform_in="y:100px;opacity:0;s:500;e:Power2.easeOut;"
                                data-transform_out="opacity:0;y:-100;s:200;e:Power2.easeInOut;" data-start="500"
                                data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                <span class="id-color-2">{{ __('home.slider.slider1.title') }}</span>
                            </div>

                            <div class="tp-caption very-big-white custom-header-subtitle" data-x="center" data-y="260"
                                data-width="none" data-height="none" data-whitespace="nowrap"
                                data-transform_in="y:100px;opacity:0;s:500;e:Power2.easeOut;"
                                data-transform_out="opacity:0;y:-100;s:400;e:Power2.easeInOut;" data-start="600"
                                data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                {{ __('home.slider.slider1.subtitle') }}
                            </div>

                            <div class="tp-caption text-center custom-header-text" data-x="center" data-y="340"
                                data-width="450" data-height="none" data-whitespace="wrap"
                                data-transform_in="y:100px;opacity:0;s:500;e:Power2.easeOut;"
                                data-transform_out="opacity:0;y:-100;s:600;e:Power2.easeInOut;" data-start="700">
                                {{ __('home.slider.slider1.text') }}
                            </div>

                            <div class="tp-caption" data-x="center" data-y="450" data-width="none" data-height="none"
                                data-whitespace="nowrap" data-transform_in="y:100px;opacity:0;s:500;e:Power2.easeOut;"
                                data-transform_out="opacity:0;y:-100;s:800;e:Power2.easeInOut;" data-start="800">
                                <a href="#products-section" class="btn-slider">{{ __('home.slider.slider1.button') }}</a>
                            </div>
                        </li>

                        <li data-transition="fade" data-slotamount="10" data-masterspeed="default" data-thumb="">
                            <!--  BACKGROUND IMAGE -->
                            <img src="{{ asset('assets/images/slider/slide-2.jpg') }}" alt="" data-bgposition="center center"
                                data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10">

                            <div class="tp-caption big-s1 custom-header-title" data-x="center" data-y="220"
                                data-width="none" data-height="none" data-whitespace="nowrap"
                                data-transform_in="y:100px;opacity:0;s:500;e:Power2.easeOut;"
                                data-transform_out="opacity:0;y:-100;s:200;e:Power2.easeInOut;" data-start="500"
                                data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                <span class="id-color-2">{{ __('home.slider.slider2.title') }}</span>
                            </div>

                            <div class="tp-caption very-big-white custom-header-subtitle" data-x="center" data-y="260"
                                data-width="none" data-height="none" data-whitespace="nowrap"
                                data-transform_in="y:100px;opacity:0;s:500;e:Power2.easeOut;"
                                data-transform_out="opacity:0;y:-100;s:400;e:Power2.easeInOut;" data-start="600"
                                data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                {{ __('home.slider.slider2.subtitle') }}
                            </div>

                            <div class="tp-caption text-center custom-header-text" data-x="center" data-y="340"
                                data-width="450" data-height="none" data-whitespace="wrap"
                                data-transform_in="y:100px;opacity:0;s:500;e:Power2.easeOut;"
                                data-transform_out="opacity:0;y:-100;s:600;e:Power2.easeInOut;" data-start="700">
                                {{ __('home.slider.slider2.text') }}
                            </div>

                            <div class="tp-caption" data-x="center" data-y="450" data-width="none" data-height="none"
                                data-whitespace="nowrap" data-transform_in="y:100px;opacity:0;s:500;e:Power2.easeOut;"
                                data-transform_out="opacity:0;y:-100;s:800;e:Power2.easeInOut;" data-start="800">
                                <a href="#products-section" class="btn-slider">{{ __('home.slider.slider2.button') }}</a>
                            </div>
                        </li>

                        <li data-transition="fade" data-slotamount="10" data-masterspeed="default" data-thumb="">
                            <!--  BACKGROUND IMAGE -->
                            <img src="{{ asset('assets/images/slider/slide-3.jpg') }}" alt="" data-bgposition="center center"
                                data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10">
                            <div class="tp-caption big-s1 custom-header-title" data-x="center" data-y="220"
                                data-width="none" data-height="none" data-whitespace="nowrap"
                                data-transform_in="y:100px;opacity:0;s:500;e:Power2.easeOut;"
                                data-transform_out="opacity:0;y:-100;s:200;e:Power2.easeInOut;" data-start="500"
                                data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                <span class="id-color-2">{{ __('home.slider.slider3.title') }}</span>
                            </div>

                            <div class="tp-caption very-big-white custom-header-subtitle" data-x="center"
                                data-y="260" data-width="none" data-height="none" data-whitespace="nowrap"
                                data-transform_in="y:100px;opacity:0;s:500;e:Power2.easeOut;"
                                data-transform_out="opacity:0;y:-100;s:400;e:Power2.easeInOut;" data-start="600"
                                data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                {{ __('home.slider.slider3.subtitle') }}
                            </div>

                            <div class="tp-caption text-center custom-header-text" data-x="center" data-y="340"
                                data-width="450" data-height="none" data-whitespace="wrap"
                                data-transform_in="y:100px;opacity:0;s:500;e:Power2.easeOut;"
                                data-transform_out="opacity:0;y:-100;s:600;e:Power2.easeInOut;" data-start="700">
                                {{ __('home.slider.slider3.text') }}
                            </div>

                            <div class="tp-caption" data-x="center" data-y="450" data-width="none"
                                data-height="none" data-whitespace="nowrap"
                                data-transform_in="y:100px;opacity:0;s:500;e:Power2.easeOut;"
                                data-transform_out="opacity:0;y:-100;s:800;e:Power2.easeInOut;" data-start="800">
                                <a href="#products-section" class="btn-slider">{{ __('home.slider.slider3.button') }}</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
            <!-- slider section close -->

            <!-- interview begin -->
            <section @if (Session::get('locale') == 'fa') class="rtl" @endif()>
                <div class="container">
                    <div class="row aligns-item-center">
                        <div class="col-lg-6">
                            <div class="text-center">
                                <h2 class="s1 id-color-2 mb-40 wow fadeInUp">{{ __('home.interview.title') }}</h2>
                                <h2 class="s2 wow fadeInUp">{{ __('home.interview.subtitle') }}</h2>
                                <div class="spacer-single"></div>
                            </div>
                            <p class="lead">{{ __('home.interview.text') }}</p>
                        </div>
                        <div class="col-md-6 first-img" style="height: 450px">
                            <img style="width: 120%;height: 100%" src="{{ asset('assets/images/background/bg-1.jpg') }}" alt="" class="rounded-20 img-gall">
                        </div>
                    </div>
                </div>
            </section>
            <!-- interview close -->

            <!-- why-us section begin -->
            <section class="no-top @if (Session::get('locale') == 'fa') rtl @endif()">
                <div class="container">
                    <div class="row gx-5 text-center">

                        <div class="col-lg-3 wow fadeInRight">
                            <img src="{{ asset('assets/images/misc/icon-2.png') }}" alt="">
                            <div class="spacer-single"></div>
                            <h3>{{ __('home.why.why1.title') }}</h3>
                            <p>{{ __('home.why.why1.text') }}</p>
                        </div>

                        <div class="col-lg-3 wow fadeInRight" data-wow-delay=".1s">
                            <img src="{{ asset('assets/images/misc/icon-3.png') }}" alt="">
                            <div class="spacer-single"></div>
                            <h3>{{__('home.why.why2.title') }}</h3>
                            <p>{{ __('home.why.why2.text') }}</p>
                        </div>

                        <div class="col-lg-3 wow fadeInRight" data-wow-delay=".2s">
                            <img src="{{ asset('assets/images/misc/icon-1.png') }}" alt="">
                            <div class="spacer-single"></div>
                            <h3>{{ __('home.why.why3.title') }}</h3>
                            <p>{{ __('home.why.why3.text') }}</p>
                        </div>

                        <div class="col-lg-3 wow fadeInRight" data-wow-delay=".3s">
                            <img src="{{ asset('assets/images/misc/icon-4.png') }}" alt="">
                            <div class="spacer-single"></div>
                            <h3>{{ __('home.why.why4.title') }}</h3>
                            <p>{{ __('home.why.why4.text') }}</p>
                            <!-- <a href="#" class="btn-custom">Read More</a> -->
                        </div>

                    </div>
                </div>
            </section>
            <!-- why-us section close -->


            <!-- banner section begin -->
            <section id="section-title-1" class="text-light jarallax @if (Session::get('locale') == 'fa') rtl @endif()">
                <img src="{{ asset('assets/images/background/bg-2.jpg') }}" class="jarallax-img" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center">
                                <h2 class="s1 id-color-2 mb-40 wow fadeInUp">{{ __('home.banner.banner1.title') }}</h2>
                                <h2 class="s2 wow fadeInUp">{{ __('home.banner.banner1.text') }}</h2>
                                <div class="spacer-double"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- banner section close -->


            <!-- section begin -->
            <section class="jarallax" aria-label="section" id="products-section">
                <img src="{{ asset('assets/images/background/bg-3.jpg') }}" class="jarallax-img" alt="">
                <div class="container">
                    <div class="row wow fadeInLeft">
                        <div class="col-lg-6 @if (Session::get('locale') == 'fa') rtl @endif()" style="background-size: cover;">
                            <div class="menu-item thead" style="background-size: cover;">
                                <div class="c3" style="background-size: cover;"></div>
                                <div class="c1" style="background-size: cover;">{{ __('home.products.title') }}</div>
                            </div>


                            <div class="menu-item" style="background-size: cover;">
                                <div class="c3" style="background-size: cover;">
                                    <img style="width: 100px; height: 100px;" src="{{ asset('assets/images/misc/' . __('home.products.product1.image')) }}" alt="">
                                </div>
                                <div class="c1" style="background-size: cover;">{{ __('home.products.product1.name') }}
                                    <span>{{ __('home.products.product1.desc') }}</span></div>
                            </div>


                            <div class="menu-item" style="background-size: cover;">
                                <div class="c3" style="background-size: cover;">
                                    <img style="width: 100px; height: 100px;" src="{{ asset('assets/images/misc/' . __('home.products.product2.image')) }}" alt="">
                                </div>
                                <div class="c1" style="background-size: cover;">{{ __('home.products.product2.name') }}
                                    <span>{{ __('home.products.product2.desc') }}</span></div>
                            </div>

                            <div class="menu-item" style="background-size: cover;">
                                <div class="c3" style="background-size: cover;">
                                    <img style="width: 100px; height: 100px;" src="{{ asset('assets/images/misc/' . __('home.products.product3.image')) }}" alt="">
                                </div>
                                <div class="c1" style="background-size: cover;">{{ __('home.products.product3.name') }}
                                    <span>{{ __('home.products.product3.desc') }}</span>
                                </div>
                            </div>


                            <div class="menu-item" style="background-size: cover;">
                                <div class="c3" style="background-size: cover;">
                                    <img style="width: 100px; height: 100px;" src="{{ asset('assets/images/misc/' . __('home.products.product4.image')) }}" alt="">
                                </div>
                                <div class="c1" style="background-size: cover;">{{ __('home.products.product4.name') }}
                                    <span>{{ __('home.products.product4.desc') }}</span></div>
                            </div>


                            <div class="menu-item" style="background-size: cover;">
                                <div class="c3" style="background-size: cover;">
                                    <img style="width: 100px; height: 100px;" src="{{ asset('assets/images/misc/' . __('home.products.product5.image')) }}" alt="">
                                </div>
                                <div class="c1" style="background-size: cover;">{{ __('home.products.product5.name') }}
                                    <span>{{ __('home.products.product5.desc') }}</span></div>
                            </div>

                            <div class="spacer-single" style="background-size: cover;"></div>

                        </div>
                    </div>
                    <!-- <a href="products" class="btn-custom">{{ __('home.products.button') }}</a> -->
                </div>
            </section>
            <!-- section close -->


            <!-- section begin -->
            <section id="section-title-2" class="text-light jarallax @if (Session::get('locale') == 'fa') rtl @endif()">
                <img src="{{ asset('assets/images/background/bg-4.jpg') }}" class="jarallax-img" alt="">
                <div class="container">
                    <div class="row wow fadeInRight">
                        <div class="col-lg-12">
                            <div class="text-center">
                                <h2 class="s1 id-color-2 mb-40 wow fadeInUp">{{ __('home.banner.banner2.title') }}</h2>
                                <h2 class="s2 wow fadeInUp">{{ __('home.banner.banner2.text') }}</h2>
                                <div class="spacer-double"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->


            <!-- section begin -->
            <section class="jarallax basket" aria-label="section">
                <div class="jarallax-img cij p-4"></div>
                <div class="container">
                    <div class="row wow fadeInRight">
                        <div class="col-lg-6 offset-lg-6">
                            <div style="max-width: 1200px; text-align: justify" class="menu-item thead">
                                <div style="font-size: 25px" class="c1 custom-desc">{{ __('home.desc.text') }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->


            <!-- section begin -->
            <section id="section-gallery" aria-label="section-gallery" class="no-top">

                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div id="gallery" class="gallery zoom-gallery gallery-6-cols wow fadeInUp"
                                data-wow-delay=".3s">

                                <!-- gallery item -->
                                <div class="item">
                                    <figure class="position-relative">
                                        <a href="{{ asset('assets/images/menu/view/pf%20(1).jpg') }}" title="Chocolate Croissant">
                                            <span class="d-hover">
                                                <span class="d-text">
                                                    <span class="d-cap">View</span>
                                                </span>
                                            </span>
                                            <img class="img-gall" src="{{ asset('assets/images/menu/pf%20(1).jpg') }}" alt="">
                                        </a>
                                    </figure>
                                </div>
                                <!-- close gallery item -->

                                <!-- gallery item -->
                                <div class="item">
                                    <figure class="position-relative">
                                        <a href="{{ asset('assets/images/menu/view/pf%20(2).jpg') }}" title="Croissant">
                                            <span class="d-hover">
                                                <span class="d-text">
                                                    <span class="d-cap">View</span>
                                                </span>
                                            </span>
                                            <img class="img-gall" src="{{ asset('assets/images/menu/pf%20(2).jpg') }}" alt="">
                                        </a>
                                    </figure>
                                </div>
                                <!-- close gallery item -->

                                <!-- gallery item -->
                                <div class="item">
                                    <figure class="position-relative">
                                        <a href="{{ asset('assets/images/menu/view/pf%20(3).jpg') }}" title="Doughnuts">
                                            <span class="d-hover">
                                                <span class="d-text">
                                                    <span class="d-cap">View</span>
                                                </span>
                                            </span>
                                            <img class="img-gall" src="{{ asset('assets/images/menu/pf%20(3).jpg') }}" alt="">
                                        </a>
                                    </figure>
                                </div>
                                <!-- close gallery item -->

                                <!-- gallery item -->
                                <div class="item">
                                    <figure class="position-relative">
                                        <a href="{{ asset('assets/images/menu/view/pf%20(4).jpg') }}" title="Wheat Bread">
                                            <span class="d-hover">
                                                <span class="d-text">
                                                    <span class="d-cap">View</span>
                                                </span>
                                            </span>
                                            <img class="img-gall" src="{{ asset('assets/images/menu/pf%20(4).jpg') }}" alt="">
                                        </a>
                                    </figure>
                                </div>
                                <!-- close gallery item -->

                                <!-- gallery item -->
                                <div class="item">
                                    <figure class="position-relative">
                                        <a href="{{ asset('assets/images/menu/view/pf%20(5).jpg') }}" title="Butterfly Cookies">
                                            <span class="d-hover">
                                                <span class="d-text">
                                                    <span class="d-cap">View</span>
                                                </span>
                                            </span>
                                            <img class="img-gall" src="{{ asset('assets/images/menu/pf%20(5).jpg') }}" alt="">
                                        </a>
                                    </figure>
                                </div>
                                <!-- close gallery item -->

                                <!-- gallery item -->
                                <div class="item">
                                    <figure class="position-relative">
                                        <a href="{{ asset('assets/images/menu/view/pf%20(6).jpg') }}" title="Chocolate Puff Pastry">
                                            <span class="d-hover">
                                                <span class="d-text">
                                                    <span class="d-cap">View</span>
                                                </span>
                                            </span>
                                            <img class="img-gall" src="{{ asset('assets/images/menu/pf%20(6).jpg') }}" alt="">
                                        </a>
                                    </figure>
                                </div>
                                <!-- close gallery item -->
                            </div>  
                        </div> 
                    </div>
                </div>

            </section>
            <!-- section close -->


            <section class="side-bg no-top no-bottom text-light bg-color" aria-label="section">
                <div class="col-lg-6 pull-right image-container jarallax">
                    <img src="{{ asset('assets/images/background/bg-side-1.jpg') }}" class="jarallax-img" alt="">
                </div>

                <div class="container-fluid">
                    <div class="row-fluid">
                        <div class="col-lg-6 offset-lg-6 wow fadeInRight @if (Session::get('locale') == 'fa') rtl @endif()">
                            <div class="padding80">
                                <div class="text-center">
                                    <h2 class="s1 id-color-2 mb-40 wow fadeInUp">{{ __('home.recipe.title') }}</h2>
                                    <h2 class="s2 wow fadeInUp">{{ __('home.recipe.subtitle') }}</h2>
                                    <div class="spacer-single"></div>
                                </div>
                                <blockquote>
                                    {{ __('home.recipe.text') }}
                                    <span style="float: right; top: 20px">
                                        <a href="blog" style="background-color: #f5f5f5;color: #9c1126" class="btn-custom">
                                            {{ __('home.header.blog') }}
                                        </a></span>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- section begin -->
            <section id="cta" aria-label="slogan" class="call-to-action @if (Session::get('locale') == 'fa') rtl @endif()">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-lg-13 text-lg-center text-sm-center">
                            <h3>{{ __('home.slogan.title') }}</h3>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->

        </div>
@endsection
