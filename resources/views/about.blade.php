@extends('layout.master')

@section('content')
<section id="subheader" class="jarallax text-light">
    <img src="{{ asset('assets/images/background/' . __('about.header.image')) }}" class="jarallax-img" alt="">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center wow fadeInUp">
                    <h2 class="s1 mb-40">{{ __('about.header.title') }}</h2>
                    <h2 class="s2">{{ __('about.header.subtitle') }}</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- subheader close -->

<!-- content begin -->
<div id="content" class="no-bottom no-top">
    <!-- section begin -->
    <section>
        <div class="container">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6">
                    <h2>{{ __('about.body.title') }}</h2>
                    <div class="spacer-half"></div>
                    <p class="lead">{{ __('about.body.p1') }}</p>

                    <p>{{ __('about.body.p2') }}</p>

                    <p>{{ __('about.body.p3') }}</p>
                </div>

                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-6">
                            <img src="{{ asset('assets/images/misc/' . __('about.body.image1')) }}"
                                class="img-fluid rounded-20 wow zoomIn" alt="">
                            <div class="de_count wow fadeInUp">
                                <h3><span class="timer" data-to="{{ __('about.body.feedback.number') }}"
                                        data-speed="3000"></span>+</h3>
                                <h4>{{ __('about.body.feedback.text') }}</h4>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="de_count wow fadeInUp">
                                <h3><span class="timer" data-to="{{ __('about.body.percent.number') }}"
                                        data-speed="3000"></span>%</h3>
                                <h4>{{ __('about.body.percent.text') }}</h4>
                            </div>
                            <div class="spacer-10"></div>
                            <img src="{{ asset('assets/images/misc/' . __('about.body.image2')) }}"
                                class="img-fluid rounded-20 wow zoomIn" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section close -->

    <!-- section begin -->
    <section id="section-title-1" class="text-light jarallax">
        <img src="{{ asset('assets/images/background/' . __('about.banner.image')) }}" class="jarallax-img" alt="">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h2 class="s1 id-color-2 mb-40 wow fadeInUp">{{ __('about.banner.title') }}</h2>
                        <h2 class="s2 wow fadeInUp">{{ __('about.banner.subtitle') }}</h2>
                        <div class="spacer-double"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section close -->

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center mb-sm-20">
                    <div class="rounded-30 position-relative overflow-hidden mb20">
                        <img src="{{ asset('assets/images/team/' . __('about.achievement.image1')) }}"
                            class="img-fluid position-relative z-index-1000" alt="">
                        <div class="position-absolute start-0 bottom-0 bg-color-2 w-100 h-75 rounded-30"></div>
                    </div>
                    <h4 class="mb-0">{{ __('about.achievement.title1') }}</h4>
                    <div>{{ __('about.achievement.text1') }}</div>
                </div>

                <div class="col-lg-3 col-md-6 text-center mb-sm-20">
                    <div class="rounded-30 position-relative overflow-hidden mb20">
                        <img src="{{ asset('assets/images/team/' . __('about.achievement.image2')) }}"
                            class="img-fluid position-relative z-index-1000" alt="">
                        <div class="position-absolute start-0 bottom-0 bg-color-2 w-100 h-75 rounded-30"></div>
                    </div>
                    <h4 class="mb-0">{{ __('about.achievement.title2') }}</h4>
                    <div>{{ __('about.achievement.text2') }}</div>
                </div>

                <div class="col-lg-3 col-md-6 text-center mb-sm-20">
                    <div class="rounded-30 position-relative overflow-hidden mb20">
                        <img src="{{ asset('assets/images/team/' . __('about.achievement.image3')) }}"
                            class="img-fluid position-relative z-index-1000" alt="">
                        <div class="position-absolute start-0 bottom-0 bg-color-2 w-100 h-75 rounded-30"></div>
                    </div>
                    <h4 class="mb-0">{{ __('about.achievement.title3') }}</h4>
                    <div>{{ __('about.achievement.text3') }}</div>
                </div>

                <div class="col-lg-3 col-md-6 text-center mb-sm-20">
                    <div class="rounded-30 position-relative overflow-hidden mb20">
                        <img src="{{ asset('assets/images/team/' . __('about.achievement.image4')) }}"
                            class="img-fluid position-relative z-index-1000" alt="">
                        <div class="position-absolute start-0 bottom-0 bg-color-2 w-100 h-75 rounded-30"></div>
                    </div>
                    <h4 class="mb-0">{{ __('about.achievement.title4') }}</h4>
                    <div>{{ __('about.achievement.text4') }}</div>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection