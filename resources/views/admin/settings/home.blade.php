@extends('admin.layout.master')

@section('content')
<div class="container-fluid">
        <div class="product-status mg-b-30" style="margin-top: 100px;">
                <form action="{{ route('admin.settings.update', ['home', 'en']) }}" method="POST"
                        enctype="multipart/form-data">
                        <div class="row">
                                <!-- Site Contents -->
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <h4 style="color: #fff; font-weight: bold;">Site Contents</h4>
                                        <div class="product-status-wrap">
                                                <!-- Home -->
                                                <h4>Home</h4>
                                                <form action="" method="POST">
                                                        <!-- Slider 1 -->
                                                        <h5 style="color: #fff; font-weight: bold;">Slider 1</h5>
                                                        <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i
                                                                                class="icon nalika-edit"
                                                                                aria-hidden="true"></i></span>
                                                                <input type="text" class="form-control"
                                                                        placeholder="Title"
                                                                        value="{{ __('home.slider.slider1.title') }}"
                                                                        name="sliderTitle1" id="edit-product-title"
                                                                        required>
                                                        </div>
                                                        <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i
                                                                                class="icon nalika-edit"
                                                                                aria-hidden="true"></i></span>
                                                                <input type="text" class="form-control"
                                                                        placeholder="Subtitle"
                                                                        value="{{ __('home.slider.slider1.subtitle') }}"
                                                                        name="sliderSub1" id="edit-product-title"
                                                                        required>
                                                        </div>
                                                        <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i
                                                                                class="icon nalika-edit"
                                                                                aria-hidden="true"></i></span>
                                                                <input type="text" class="form-control"
                                                                        placeholder="Text"
                                                                        value="{{ __('home.slider.slider1.text') }}"
                                                                        name="sliderText1" id="edit-product-title"
                                                                        required>
                                                        </div>
                                                        <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i
                                                                                class="icon nalika-picture"
                                                                                aria-hidden="true"></i></span>
                                                                <input type="file" class="form-control"
                                                                        placeholder="Text" name="sliderImg1"
                                                                        id="edit-product-title" accept="image/*"
                                                                        value="{{ __('home.slider.slider1.image') }}">
                                                        </div>
                                                        <!-- Slider 2 -->
                                                        <hr style="margin-top: 50px;">
                                                        <h5 style="color: #fff; font-weight: bold;">Slider 2</h5>
                                                        <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i
                                                                                class="icon nalika-edit"
                                                                                aria-hidden="true"></i></span>
                                                                <input type="text" class="form-control"
                                                                        placeholder="Title"
                                                                        value="{{ __('home.slider.slider2.title') }}"
                                                                        name="sliderTitle2" id="edit-product-title"
                                                                        required>
                                                        </div>
                                                        <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i
                                                                                class="icon nalika-edit"
                                                                                aria-hidden="true"></i></span>
                                                                <input type="text" class="form-control"
                                                                        placeholder="Subtitle"
                                                                        value="{{ __('home.slider.slider2.subtitle') }}"
                                                                        name="sliderSub2" id="edit-product-title"
                                                                        required>
                                                        </div>
                                                        <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i
                                                                                class="icon nalika-edit"
                                                                                aria-hidden="true"></i></span>
                                                                <input type="text" class="form-control"
                                                                        placeholder="Text"
                                                                        value="{{ __('home.slider.slider2.text') }}"
                                                                        name="sliderText2" id="edit-product-title"
                                                                        required>
                                                        </div>
                                                        <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i
                                                                                class="icon nalika-picture"
                                                                                aria-hidden="true"></i></span>
                                                                <input type="file" class="form-control"
                                                                        placeholder="banner" name="sliderImg2"
                                                                        id="edit-product-title" accept="image/*"
                                                                        value="{{ __('home.slider.slider2.image') }}">
                                                        </div>

                                                        <!-- Slider 3 -->
                                                        <hr style="margin-top: 50px;">
                                                        <h5 style="color: #fff; font-weight: bold;">Slider 3</h5>
                                                        <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i
                                                                                class="icon nalika-edit"
                                                                                aria-hidden="true"></i></span>
                                                                <input type="text" class="form-control"
                                                                        placeholder="Title"
                                                                        value="{{ __('home.slider.slider3.title') }}"
                                                                        name="sliderTitle3" id="edit-product-title"
                                                                        required>
                                                        </div>
                                                        <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i
                                                                                class="icon nalika-edit"
                                                                                aria-hidden="true"></i></span>
                                                                <input type="text" class="form-control"
                                                                        placeholder="Subtitle"
                                                                        value="{{ __('home.slider.slider3.subtitle') }}"
                                                                        name="sliderSub3" id="edit-product-title"
                                                                        required>
                                                        </div>
                                                        <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i
                                                                                class="icon nalika-edit"
                                                                                aria-hidden="true"></i></span>
                                                                <input type="text" class="form-control"
                                                                        placeholder="Text"
                                                                        value="{{ __('home.slider.slider3.text') }}"
                                                                        name="sliderText3" id="edit-product-title"
                                                                        required>
                                                        </div>
                                                        <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i
                                                                                class="icon nalika-edit"
                                                                                aria-hidden="true"></i></span>
                                                                <input type="file" class="form-control"
                                                                        placeholder="Banner" name="sliderImg3"
                                                                        id="edit-product-title" accept="image/*"
                                                                        value="{{ __('home.slider.slider3.image') }}">
                                                        </div>

                                                        <!-- Interview -->
                                                        <hr style="margin-top: 50px;">
                                                        <h5 style="color: #fff; font-weight: bold;">Interview</h5>
                                                        <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i
                                                                                class="icon nalika-edit"
                                                                                aria-hidden="true"></i></span>
                                                                <input type="text" class="form-control"
                                                                        placeholder="Title"
                                                                        value="{{ __('home.interview.title') }}"
                                                                        name="interviewTitle" id="edit-product-title"
                                                                        required>
                                                        </div>
                                                        <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i
                                                                                class="icon nalika-edit"
                                                                                aria-hidden="true"></i></span>
                                                                <input type="text" class="form-control"
                                                                        placeholder="Subtitle"
                                                                        value="{{ __('home.interview.subtitle') }}"
                                                                        name="interviewSub" id="edit-product-title"
                                                                        required>
                                                        </div>
                                                        <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i
                                                                                class="icon nalika-edit"
                                                                                aria-hidden="true"></i></span>
                                                                <textarea
                                                                        style="width: 100%; height: 100px; resize: none;background-color: #152036; color: #fff; padding: 10px;"
                                                                        placeholder="Text" name="interviewText"
                                                                        class="form-control" id="interviewText"
                                                                        rows="5">{{ __('home.interview.text') }}</textarea>
                                                        </div>
                                                        <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i
                                                                                class="icon nalika-picture"
                                                                                aria-hidden="true"></i></span>
                                                                <input type="file" class="form-control"
                                                                        placeholder="Banner" name="interviewImg"
                                                                        id="edit-product-title" accept="image/*"
                                                                        value="{{ __('home.interview.image') }}">
                                                        </div>

                                                        <!-- Why Us -->
                                                        <hr style="margin-top: 50px;">
                                                        <h5 style="color: #fff; font-weight: bold;">Why Us</h5>
                                                        <div class="row">
                                                                <div class="col-lg-6">
                                                                        <h6 style="color: #fff; font-weight: bold;">1
                                                                        </h6>
                                                                        <div class="input-group mg-b-pro-edt">
                                                                                <span class="input-group-addon"><i
                                                                                                class="icon nalika-edit"
                                                                                                aria-hidden="true"></i></span>
                                                                                <input type="text" class="form-control"
                                                                                        placeholder="Title"
                                                                                        value="{{ __('home.whyus.why1.title') }}"
                                                                                        name="whyTitle1"
                                                                                        id="edit-product-title"
                                                                                        required>
                                                                        </div>
                                                                        <div class="input-group mg-b-pro-edt">
                                                                                <span class="input-group-addon"><i
                                                                                                class="icon nalika-edit"
                                                                                                aria-hidden="true"></i></span>
                                                                                <input type="text" class="form-control"
                                                                                        placeholder="Text"
                                                                                        value="{{ __('home.whyus.why1.text') }}"
                                                                                        name="whyText1"
                                                                                        id="edit-product-title"
                                                                                        required>
                                                                        </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                        <h6 style="color: #fff; font-weight: bold;">2
                                                                        </h6>
                                                                        <div class="input-group mg-b-pro-edt">
                                                                                <span class="input-group-addon"><i
                                                                                                class="icon nalika-edit"
                                                                                                aria-hidden="true"></i></span>
                                                                                <input type="text" class="form-control"
                                                                                        placeholder="Title"
                                                                                        value="{{ __('home.whyus.why2.title') }}"
                                                                                        name="whyTitle2"
                                                                                        id="edit-product-title"
                                                                                        required>
                                                                        </div>
                                                                        <div class="input-group mg-b-pro-edt">
                                                                                <span class="input-group-addon"><i
                                                                                                class="icon nalika-edit"
                                                                                                aria-hidden="true"></i></span>
                                                                                <input type="text" class="form-control"
                                                                                        placeholder="Text"
                                                                                        value="{{ __('home.whyus.why2.text') }}"
                                                                                        name="whyText2"
                                                                                        id="edit-product-title"
                                                                                        required>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                        <div class="row">
                                                                <div class="col-lg-6">
                                                                        <h6 style="color: #fff; font-weight: bold;">3
                                                                        </h6>
                                                                        <div class="input-group mg-b-pro-edt">
                                                                                <span class="input-group-addon"><i
                                                                                                class="icon nalika-edit"
                                                                                                aria-hidden="true"></i></span>
                                                                                <input type="text" class="form-control"
                                                                                        placeholder="Title"
                                                                                        value="{{ __('home.whyus.why3.title') }}"
                                                                                        name="whyTitle3"
                                                                                        id="edit-product-title"
                                                                                        required>
                                                                        </div>
                                                                        <div class="input-group mg-b-pro-edt">
                                                                                <span class="input-group-addon"><i
                                                                                                class="icon nalika-edit"
                                                                                                aria-hidden="true"></i></span>
                                                                                <input type="text" class="form-control"
                                                                                        placeholder="Text"
                                                                                        value="{{ __('home.whyus.why3.text') }}"
                                                                                        name="whyText3"
                                                                                        id="edit-product-title"
                                                                                        required>
                                                                        </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                        <h6 style="color: #fff; font-weight: bold;">4
                                                                        </h6>
                                                                        <div class="input-group mg-b-pro-edt">
                                                                                <span class="input-group-addon"><i
                                                                                                class="icon nalika-edit"
                                                                                                aria-hidden="true"></i></span>
                                                                                <input type="text" class="form-control"
                                                                                        placeholder="Title"
                                                                                        value="{{ __('home.whyus.why4.title') }}"
                                                                                        name="whyTitle4"
                                                                                        id="edit-product-title"
                                                                                        required>
                                                                        </div>
                                                                        <div class="input-group mg-b-pro-edt">
                                                                                <span class="input-group-addon"><i
                                                                                                class="icon nalika-edit"
                                                                                                aria-hidden="true"></i></span>
                                                                                <input type="text" class="form-control"
                                                                                        placeholder="Text"
                                                                                        value="{{ __('home.whyus.why4.text') }}"
                                                                                        name="whyText4"
                                                                                        id="edit-product-title"
                                                                                        required>
                                                                        </div>
                                                                </div>
                                                        </div>

                                                        <!-- Banner 1 -->
                                                        <hr style="margin-top: 50px;">
                                                        <h5 style="color: #fff; font-weight: bold;">Banner 1</h5>
                                                        <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i
                                                                                class="icon nalika-edit"
                                                                                aria-hidden="true"></i></span>
                                                                <input type="text" class="form-control"
                                                                        placeholder="Title"
                                                                        value="{{ __('home.banner.banner1.title') }}"
                                                                        name="bannerTitle1" id="edit-product-title"
                                                                        required>
                                                        </div>
                                                        <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i
                                                                                class="icon nalika-edit"
                                                                                aria-hidden="true"></i></span>
                                                                <input type="text" class="form-control"
                                                                        placeholder="Subtitle"
                                                                        value="{{ __('home.banner.banner1.subtitle') }}"
                                                                        name="bannerSub1" id="edit-product-title"
                                                                        required>
                                                        </div>
                                                        <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i
                                                                                class="icon nalika-picture"
                                                                                aria-hidden="true"></i></span>
                                                                <input type="file" class="form-control"
                                                                        placeholder="Banner" name="bannerImg1"
                                                                        id="edit-product-title" accept="image/*"
                                                                        value="{{ __('home.banner.banner1.image') }}">
                                                        </div>

                                                        <!-- Products -->
                                                        <hr style="margin-top: 50px;">
                                                        <h5 style="color: #fff; font-weight: bold;">Products</h5>
                                                        <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i
                                                                                class="icon nalika-edit"
                                                                                aria-hidden="true"></i></span>
                                                                <input type="text" class="form-control"
                                                                        placeholder="Title"
                                                                        value="{{ __('home.products.title') }}"
                                                                        name="productTitle" id="edit-product-title"
                                                                        required>
                                                        </div>
                                                        <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i
                                                                                class="icon nalika-edit"
                                                                                aria-hidden="true"></i></span>
                                                                <input style="width: 90%" type="text"
                                                                        class="form-control" placeholder="Name"
                                                                        value="{{ __('home.products.product1.name') }}"
                                                                        name="productName1" id="edit-product-title"
                                                                        required>
                                                                <span class="input-group-addon"><i
                                                                                class="icon nalika-edit"
                                                                                aria-hidden="true"></i></span>
                                                                <input style="width: 100%" type="text"
                                                                        class="form-control" placeholder="Description"
                                                                        value="{{ __('home.products.product1.desc') }}"
                                                                        name="productDesc1" id="edit-product-title"
                                                                        required>
                                                        </div>
                                                        <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i
                                                                                class="icon nalika-edit"
                                                                                aria-hidden="true"></i></span>
                                                                <input style="width: 90%" type="text"
                                                                        class="form-control" placeholder="Name"
                                                                        value="{{ __('home.products.product2.name') }}"
                                                                        name="productName2" id="edit-product-title"
                                                                        required>
                                                                <span class="input-group-addon"><i
                                                                                class="icon nalika-edit"
                                                                                aria-hidden="true"></i></span>
                                                                <input style="width: 100%" type="text"
                                                                        class="form-control" placeholder="Description"
                                                                        value="{{ __('home.products.product2.desc') }}"
                                                                        name="productDesc2" id="edit-product-title"
                                                                        required>
                                                        </div>
                                                        <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i
                                                                                class="icon nalika-edit"
                                                                                aria-hidden="true"></i></span>
                                                                <input style="width: 90%" type="text"
                                                                        class="form-control" placeholder="Name"
                                                                        value="{{ __('home.products.product3.name') }}"
                                                                        name="productName3" id="edit-product-title"
                                                                        required>
                                                                <span class="input-group-addon"><i
                                                                                class="icon nalika-edit"
                                                                                aria-hidden="true"></i></span>
                                                                <input style="width: 100%" type="text"
                                                                        class="form-control" placeholder="Description"
                                                                        value="{{ __('home.products.product3.desc') }}"
                                                                        name="productDesc3" id="edit-product-title"
                                                                        required>
                                                        </div>
                                                        <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i
                                                                                class="icon nalika-edit"
                                                                                aria-hidden="true"></i></span>
                                                                <input style="width: 90%" type="text"
                                                                        class="form-control" placeholder="Name"
                                                                        value="{{ __('home.products.product4.name') }}"
                                                                        name="productName4" id="edit-product-title"
                                                                        required>
                                                                <span class="input-group-addon"><i
                                                                                class="icon nalika-edit"
                                                                                aria-hidden="true"></i></span>
                                                                <input style="width: 100%" type="text"
                                                                        class="form-control" placeholder="Description"
                                                                        value="{{ __('home.products.product4.desc') }}"
                                                                        name="productDesc4" id="edit-product-title"
                                                                        required>
                                                        </div>
                                                        <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i
                                                                                class="icon nalika-edit"
                                                                                aria-hidden="true"></i></span>
                                                                <input style="width: 90%" type="text"
                                                                        class="form-control" placeholder="Name"
                                                                        value="{{ __('home.products.product5.name') }}"
                                                                        name="productName5" id="edit-product-title"
                                                                        required>
                                                                <span class="input-group-addon"><i
                                                                                class="icon nalika-edit"
                                                                                aria-hidden="true"></i></span>
                                                                <input style="width: 100%" type="text"
                                                                        class="form-control" placeholder="Description"
                                                                        value="{{ __('home.products.product5.desc') }}"
                                                                        name="productDesc5" id="edit-product-title"
                                                                        required>
                                                        </div>
                                                        <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i
                                                                                class="icon nalika-picture"
                                                                                aria-hidden="true"></i></span>
                                                                <input type="file" class="form-control"
                                                                        placeholder="Banner" name="productImg"
                                                                        id="edit-product-title" accept="image/*"
                                                                        value="{{ __('home.products.image') }}">
                                                        </div>

                                                        <!-- Banner 2 -->
                                                        <hr style="margin-top: 50px;">
                                                        <h5 style="color: #fff; font-weight: bold;">Banner 2</h5>
                                                        <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i
                                                                                class="icon nalika-edit"
                                                                                aria-hidden="true"></i></span>
                                                                <input type="text" class="form-control"
                                                                        placeholder="Title"
                                                                        value="{{ __('home.banner.banner2.title') }}"
                                                                        name="bannerTitle2" id="edit-product-title"
                                                                        required>
                                                        </div>
                                                        <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i
                                                                                class="icon nalika-edit"
                                                                                aria-hidden="true"></i></span>
                                                                <input type="text" class="form-control"
                                                                        placeholder="Subtitle"
                                                                        value="{{ __('home.banner.banner2.subtitle') }}"
                                                                        name="bannerSub2" id="edit-product-title"
                                                                        required>
                                                        </div>
                                                        <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i
                                                                                class="icon nalika-picture"
                                                                                aria-hidden="true"></i></span>
                                                                <input type="file" class="form-control"
                                                                        placeholder="Banner" name="bannerImg2"
                                                                        id="edit-product-title" accept="image/*"
                                                                        value="{{ __('home.banner.banner2.image') }}">
                                                        </div>

                                                        <!-- Description -->
                                                        <hr style="margin-top: 50px;">
                                                        <h5 style="color: #fff; font-weight: bold;">Description</h5>

                                                        <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i
                                                                                class="icon nalika-edit"
                                                                                aria-hidden="true"></i></span>
                                                                <textarea
                                                                        style="width: 100%; height: 100px; resize: none;background-color: #152036; color: #fff; padding: 10px;"
                                                                        placeholder="Text" name="descText"
                                                                        class="form-control" id="interviewText"
                                                                        rows="5">{{ __('home.desc.text') }}</textarea>
                                                        </div>
                                                        <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i
                                                                                class="icon nalika-picture"
                                                                                aria-hidden="true"></i></span>
                                                                <input type="file" class="form-control"
                                                                        placeholder="Banner" name="descImg"
                                                                        id="edit-product-title" accept="image/*"
                                                                        value="{{ __('home.desc.image') }}">
                                                        </div>

                                                        <!-- Gallery -->
                                                        <hr style="margin-top: 50px;">
                                                        <h5 style="color: #fff; font-weight: bold;">Gallery</h5>

                                                        <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i
                                                                                class="icon nalika-picture"
                                                                                aria-hidden="true"></i></span>
                                                                <input type="file" class="form-control"
                                                                        placeholder="Banner" name="galleryImg1"
                                                                        id="edit-product-title" accept="image/*"
                                                                        value="{{ __('home.gallery.image1') }}">
                                                        </div>
                                                        <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i
                                                                                class="icon nalika-picture"
                                                                                aria-hidden="true"></i></span>
                                                                <input type="file" class="form-control"
                                                                        placeholder="Banner" name="galleryImg2"
                                                                        id="edit-product-title" accept="image/*"
                                                                        value="{{ __('home.gallery.image2') }}">
                                                        </div>
                                                        <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i
                                                                                class="icon nalika-picture"
                                                                                aria-hidden="true"></i></span>
                                                                <input type="file" class="form-control"
                                                                        placeholder="Banner" name="galleryImg3"
                                                                        id="edit-product-title" accept="image/*"
                                                                        value="{{ __('home.gallery.image3') }}">
                                                        </div>
                                                        <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i
                                                                                class="icon nalika-picture"
                                                                                aria-hidden="true"></i></span>
                                                                <input type="file" class="form-control"
                                                                        placeholder="Banner" name="galleryImg4"
                                                                        id="edit-product-title" accept="image/*"
                                                                        value="{{ __('home.gallery.image4') }}">
                                                        </div>
                                                        <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i
                                                                                class="icon nalika-picture"
                                                                                aria-hidden="true"></i></span>
                                                                <input type="file" class="form-control"
                                                                        placeholder="Banner" name="galleryImg5"
                                                                        id="edit-product-title" accept="image/*"
                                                                        value="{{ __('home.gallery.image5') }}">
                                                        </div>
                                                        <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i
                                                                                class="icon nalika-picture"
                                                                                aria-hidden="true"></i></span>
                                                                <input type="file" class="form-control"
                                                                        placeholder="Banner" name="galleryImg6"
                                                                        id="edit-product-title" accept="image/*"
                                                                        value="{{ __('home.gallery.image6') }}">
                                                        </div>

                                                        <!-- Recipe -->
                                                        <hr style="margin-top: 50px;">
                                                        <h5 style="color: #fff; font-weight: bold;">Recipe</h5>
                                                        <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i
                                                                                class="icon nalika-edit"
                                                                                aria-hidden="true"></i></span>
                                                                <input type="text" class="form-control"
                                                                        placeholder="Title"
                                                                        value="{{ __('home.recipe.title') }}"
                                                                        name="recipeTitle" id="edit-product-title"
                                                                        required>
                                                        </div>
                                                        <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i
                                                                                class="icon nalika-edit"
                                                                                aria-hidden="true"></i></span>
                                                                <input type="text" class="form-control"
                                                                        placeholder="Subtitle"
                                                                        value="{{ __('home.recipe.subtitle') }}"
                                                                        name="recipeSub" id="edit-product-title"
                                                                        required>
                                                        </div>
                                                        <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i
                                                                                class="icon nalika-edit"
                                                                                aria-hidden="true"></i></span>
                                                                <input type="text" class="form-control"
                                                                        placeholder="Text"
                                                                        value="{{ __('home.recipe.text') }}"
                                                                        name="recipeText" id="edit-product-title"
                                                                        required>
                                                        </div>
                                                        <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i
                                                                                class="icon nalika-picture"
                                                                                aria-hidden="true"></i></span>
                                                                <input type="file" class="form-control"
                                                                        placeholder="Banner" name="recipeImg"
                                                                        id="edit-product-title" accept="image/*"
                                                                        value="{{ __('home.recipe.image') }}">
                                                        </div>

                                                        <!-- Slogan -->
                                                        <hr style="margin-top: 50px;">
                                                        <h5 style="color: #fff; font-weight: bold;">Slogan</h5>
                                                        <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i
                                                                                class="icon nalika-edit"
                                                                                aria-hidden="true"></i></span>
                                                                <input type="text" class="form-control"
                                                                        placeholder="Title"
                                                                        value="{{ __('home.slogan.title') }}"
                                                                        name="sloganTitle" id="edit-product-title"
                                                                        required>
                                                        </div>

                                                        <!-- Footer -->
                                                        <hr style="margin-top: 50px;">
                                                        <h5 style="color: #fff; font-weight: bold;">Footer</h5>

                                                        <h6 style="color: #fff; font-weight: bold;">Our Location</h6>

                                                        <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i
                                                                                class="icon nalika-edit"
                                                                                aria-hidden="true"></i></span>
                                                                <input type="text" class="form-control"
                                                                        placeholder="Address"
                                                                        value="{{ __('home.footer.contact.address') }}"
                                                                        name="footerAddress" id="edit-product-title"
                                                                        required>
                                                        </div>

                                                        <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i
                                                                                class="icon nalika-edit"
                                                                                aria-hidden="true"></i></span>
                                                                <input type="text" class="form-control"
                                                                        placeholder="Phone"
                                                                        value="{{ __('home.footer.contact.phone') }}"
                                                                        name="footerPhone" id="edit-product-title"
                                                                        required>
                                                        </div>

                                                        <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i
                                                                                class="icon nalika-edit"
                                                                                aria-hidden="true"></i></span>
                                                                <input type="text" class="form-control"
                                                                        placeholder="Email"
                                                                        value="{{ __('home.footer.contact.email') }}"
                                                                        name="footerEmail" id="edit-product-title"
                                                                        required>
                                                        </div>

                                                        <h6 style="color: #fff; font-weight: bold;">Info</h6>

                                                        <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i
                                                                                class="icon nalika-picture"
                                                                                aria-hidden="true"></i></span>
                                                                <input type="file" class="form-control"
                                                                        placeholder="logo"
                                                                        value="{{ __('home.footer.info.logo') }}"
                                                                        name="footerLogo" id="edit-product-title"
                                                                        accept="image/*">
                                                        </div>

                                                        <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i
                                                                                class="icon nalika-edit"
                                                                                aria-hidden="true"></i></span>
                                                                <input type="text" class="form-control"
                                                                        placeholder="Description"
                                                                        value="{{ __('home.footer.info.desc') }}"
                                                                        name="footerDesc" id="edit-product-title"
                                                                        required>
                                                        </div>

                                                        <h6 style="color: #fff; font-weight: bold;">Socials</h6>

                                                        <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i
                                                                                class="fa fa-facebook"
                                                                                aria-hidden="true"></i></span>
                                                                <input type="text" class="form-control"
                                                                        placeholder="Facebook"
                                                                        value="{{ __('home.footer.social.fb') }}"
                                                                        name="footerFb" id="edit-product-title"
                                                                        required>
                                                        </div>

                                                        <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i
                                                                                class="fa fa-instagram"
                                                                                aria-hidden="true"></i></span>
                                                                <input type="text" class="form-control"
                                                                        placeholder="Instagram"
                                                                        value="{{ __('home.footer.social.ig') }}"
                                                                        name="footerIg" id="edit-product-title"
                                                                        required>
                                                        </div>

                                                        <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i
                                                                                class="fa fa-whatsapp"
                                                                                aria-hidden="true"></i></span>
                                                                <input type="text" class="form-control"
                                                                        placeholder="Whatsapp"
                                                                        value="{{ __('home.footer.social.wa') }}"
                                                                        name="footerWa" id="edit-product-title"
                                                                        required>
                                                        </div>

                                                        <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i
                                                                                class="fa fa-telegram"
                                                                                aria-hidden="true"></i></span>
                                                                <input type="text" class="form-control"
                                                                        placeholder="Telegram"
                                                                        value="{{ __('home.footer.social.tg') }}"
                                                                        name="footerTg" id="edit-product-title"
                                                                        required>
                                                        </div>

                                                        <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i class="fa fa-skype"
                                                                                aria-hidden="true"></i></span>
                                                                <input type="text" class="form-control"
                                                                        placeholder="Skype"
                                                                        value="{{ __('home.footer.social.sk') }}"
                                                                        name="footerSk" id="edit-product-title"
                                                                        required>
                                                        </div>
                                        </div>
                                </div>

                                <!-- Preview -->
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <h4 style="color: #fff; font-weight: bold;">Site Prewiew</h4>
                                        <div class="product-status-wrap">
                                                <h4>Home</h4>
                                                <h5 style="color: #fff; font-weight: bold;">Slider 1</h5>
                                                <img style="width: 100%;margin-bottom: 0px;"
                                                        src="<?= asset('assets/images/ss/home-slider-1.jpeg') ?>"
                                                        alt="">

                                                <hr style="margin-top: 30px;">
                                                <h5 style="color: #fff; font-weight: bold;">Slider 2</h5>
                                                <img style="width: 100%;"
                                                        src="<?= asset('assets/images/ss/home-slider-2.jpeg') ?>"
                                                        alt="">

                                                <hr style="margin-top: 30px;">
                                                <h5 style="color: #fff; font-weight: bold;">Slider 3</h5>
                                                <img style="width: 100%;"
                                                        src="<?= asset('assets/images/ss/home-slider-3.jpeg') ?>"
                                                        alt="">

                                                <hr style="margin-top: 30px;">
                                                <h5 style="color: #fff; font-weight: bold;">Interview</h5>
                                                <img style="width: 100%; height: 220px; margin-bottom: 15px"
                                                        src="<?= asset('assets/images/ss/interview.jpeg') ?>" alt="">

                                                <hr style="margin-top: 30px;">
                                                <h5 style="color: #fff; font-weight: bold;">Why Us</h5>
                                                <img style="width: 100%; height: 220px; margin-bottom: 0px"
                                                        src="<?= asset('assets/images/ss/why-us.jpeg') ?>" alt="">

                                                <hr style="margin-top: 30px;">
                                                <h5 style="color: #fff; font-weight: bold;">Banner 1</h5>
                                                <img style="width: 100%; height: 220px;"
                                                        src="<?= asset('assets/images/ss/banner-1.jpeg') ?>" alt="">

                                                <hr style="margin-top: 30px;">
                                                <h5 style="color: #fff; font-weight: bold;">Products</h5>
                                                <img style="width: 100%; height: 220px;"
                                                        src="<?= asset('assets/images/ss/product.jpeg') ?>" alt="">

                                                <hr style="margin-top: 30px;">
                                                <h5 style="color: #fff; font-weight: bold;">Banner 2</h5>
                                                <img style="width: 100%; height: 220px;"
                                                        src="<?= asset('assets/images/ss/banner-2.jpeg') ?>" alt="">

                                                <hr style="margin-top: 30px;">
                                                <h5 style="color: #fff; font-weight: bold;">Description</h5>
                                                <img style="width: 100%; height: 220px;"
                                                        src="<?= asset('assets/images/ss/desc.jpeg') ?>" alt="">

                                                <hr style="margin-top: 30px;">
                                                <h5 style="color: #fff; font-weight: bold;">Gallery</h5>
                                                <img style="width: 100%; height: 220px;"
                                                        src="<?= asset('assets/images/ss/gallery.jpeg') ?>" alt="">

                                                <hr style="margin-top: 30px;">
                                                <h5 style="color: #fff; font-weight: bold;">Recipe</h5>
                                                <img style="width: 100%; height: 220px;"
                                                        src="<?= asset('assets/images/ss/recipe.jpeg') ?>" alt="">

                                                <hr style="margin-top: 30px;">
                                                <h5 style="color: #fff; font-weight: bold;">Slogan</h5>
                                                <img style="width: 100%; height: 220px;"
                                                        src="<?= asset('assets/images/ss/slogan.jpeg') ?>" alt="">

                                                <hr style="margin-top: 30px;">
                                                <h5 style="color: #fff; font-weight: bold;">Footer</h5>
                                                <img style="width: 100%; height: 220px;"
                                                        src="<?= asset('assets/images/ss/footer.jpeg') ?>" alt="">
                                        </div>
                                </div>

                        </div>
                        <div class="row">
                                <div style="margin: 20px auto; text-align: center"
                                        class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <input style="width: 200px" type="submit" class="btn btn-primary" value="Save"
                                                name="set">
                                </div>
                        </div>
                </form>
        </div>
</div>
@endsection