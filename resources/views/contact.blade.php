@extends('layout.master')

@section('content')
<!-- subheader -->
<section id="subheader" class="jarallax text-light">
    <img src="{{ asset('assets/images/background/' . __('contact.header.image')) }}" class="jarallax-img" alt="">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center wow fadeInUp">
                    <h2 class="s1 mb-40">{{ __('contact.header.title') }}</h2>
                    <h2 class="s2"<h2 class="s2" @if (Session::get('locale') == 'fa') style="letter-spacing: normal;" @endif()>{{ __('contact.header.subtitle') }}</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">@if (Session::get(key: 'locale') == 'fa') خانه @else Home @endif()</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ __('home.header.contact') }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- subheader close -->

<!-- content begin -->
<div id="content" class="no-bottom no-top">


    <section @if (Session::get('locale') == 'fa') class="rtl" @endif()>
        <div class="container">
            @if (session('success'))
                <div style="color: green; text-align: center; font-weight: bold; margin-bottom: 20px;">
                    {{ session('success') }}
                </div>
            @endif
            <div class="row">
                <div class="col-lg-4 sm-text-center">
                    <h3>{{ __('contact.content.title') }}</h3>
                    {{ __('contact.content.address') }}<br>
                    TEL: <a href="tel:{{ __('contact.content.phone') }}">{{ __('contact.content.phone') }}</a><br>
                    E-Mail: <a href="mailto: {{ __('contact.content.email') }}">{{ __('contact.content.email') }}</a><br>
                </div>

                <div class="col-lg-8">
                    <form name="contactForm" id="contact_form" class="position-relative z1000" method="POST"
                        action="{{ route('contact-us.store') }}">
                        @csrf

                        <div class="row gx-4">
                            <div class="col-lg-6 col-md-6 mb10">
                                <div class="field-set">
                                    <input type="text" name="name" id="name" class="form-control"
                                        placeholder="{{ __('contact.form.name') }}" required>
                                </div>

                                <div class="field-set">
                                    <input type="text" name="email" id="email" class="form-control"
                                        placeholder="{{ __('contact.form.email') }}" required>
                                </div>

                                <div class="field-set">
                                    <input type="text" name="phone" id="phone" class="form-control"
                                        placeholder="{{ __('contact.form.phone') }}" required>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="field-set mb20">
                                    <textarea name="body" id="message" class="form-control" placeholder="{{ __('contact.form.message') }}"
                                        required></textarea>
                                </div>
                            </div>
                        </div>

                        @foreach ($errors->all() as $error)
                            <div style="color: red; margin-left: 20px; font-weight: bold">{{ $error }}</div>
                        @endforeach

                        <div id='submit' class="mt20">
                            <input type='submit' id='send_message' value='{{ __('contact.form.send') }}' class="btn-custom">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>

</div>


<!-- Javascript Files
        ================================================== -->
<script src='https://www.google.com/recaptcha/api.js' async defer></script>
<script src="<?= asset('assets/js/form.js') ?>"></script>
@endsection