@extends('admin.layout.master')

@section('content')

@if(Session::has('success'))
{{ toastify()->success(Session::get('success'), [
        'duration' => 3000,
]) }}
@endif

<div class="container-fluid">
    <div class="product-status mg-b-30" style="margin-top: 100px;">
        <button class="btn btn-primary" style="margin-bottom: 10px; font-weight: bold; font-family: 'Vazirmatn'"">
                @if (Session::get('locale') == 'en')
                <a style="color: #fff" href="{{ route('locale', 'fa') }}">تغییر محتوای فارسی</a>
                @else
                <a style="color: #fff" href="{{ route('locale', 'en') }}">Edit English Content</a>
                @endif
        </button>
        <form action="{{ route('admin.settings.update', ['about', Session::get('locale')]) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="row">
                <!-- Site Contents -->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <h4 style="color: #fff; font-weight: bold;">Site Contents</h4>
                    <div class="product-status-wrap">
                        <h4>About Us</h4>
                        <!-- Header -->
                        <h5 style="color: #fff; font-weight: bold;">Header</h5>
                        <div class="input-group mg-b-pro-edt">
                            <span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" placeholder="Title"
                                value="{{ __('about.header.title') }}" name="headerTitle" id="edit-product-title"
                                required>
                        </div>
                        <div class="input-group mg-b-pro-edt">
                            <span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" placeholder="Subtitle"
                                value="{{ __('about.header.subtitle') }}" name="headerSub" id="edit-product-title"
                                required>
                        </div>
                        <div class="input-group mg-b-pro-edt">
                            <span class="input-group-addon"><i class="icon nalika-picture"
                                    aria-hidden="true"></i></span>
                            <input type="file" class="form-control" placeholder="Text" name="hraderImg"
                                id="edit-product-title" accept="image/*" value="{{ __('about.header.image') }}">
                        </div>

                        <!-- Content -->
                        <hr style="margin-top: 30px;">
                        <h5 style="color: #fff; font-weight: bold;">Content</h5>
                        <div class="input-group mg-b-pro-edt">
                            <span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" placeholder="Title"
                                value="{{ __('about.body.title') }}" name="bodyTitle" id="edit-product-title"
                                required>
                        </div>
                        <div class="input-group mg-b-pro-edt">
                            <span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" placeholder="Paragraph 1"
                                value="{{ __('about.body.p1') }}" name="bodyP1" id="edit-product-title" required>
                        </div>
                        <div class="input-group mg-b-pro-edt">
                            <span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" placeholder="Paragraph 2"
                                value="{{ __('about.body.p2') }}" name="bodyP2" id="edit-product-title" required>
                        </div>
                        <div class="input-group mg-b-pro-edt">
                            <span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" placeholder="Paragraph 3"
                                value="{{ __('about.body.p3') }}" name="bodyP3" id="edit-product-title" required>
                        </div>
                        <!-- <hr style="margin-top: 30px;"> -->
                        <div class="col-lg-6">
                            <div class="input-group mg-b-pro-edt">
                                <span class="input-group-addon"><i class="icon nalika-picture"
                                        aria-hidden="true"></i></span>
                                <input type="file" class="form-control" placeholder="Image" name="bodyImg1"
                                    id="edit-product-title" accept="image/*" value="{{ __('about.body.image1') }}">
                            </div>
                            <div class="input-group mg-b-pro-edt">
                                <span class="input-group-addon"><i class="icon nalika-edit"
                                        aria-hidden="true"></i></span>
                                <input type="number" class="form-control" placeholder="Number +"
                                    value="{{ __('about.body.feedback.number') }}" name="feedbackNum"
                                    id="edit-product-title" required>
                            </div>
                            <div class="input-group mg-b-pro-edt">
                                <span class="input-group-addon"><i class="icon nalika-edit"
                                        aria-hidden="true"></i></span>
                                <input type="text" class="form-control" placeholder="Number Text"
                                    value="{{ __('about.body.feedback.text') }}" name="feedbackText"
                                    id="edit-product-title" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="input-group mg-b-pro-edt">
                                <span class="input-group-addon"><i class="icon nalika-edit"
                                        aria-hidden="true"></i></span>
                                <input type="number" class="form-control" placeholder="Percent %"
                                    value="{{ __('about.body.percent.number') }}" name="percentNum"
                                    id="edit-product-title" required>
                            </div>
                            <div class="input-group mg-b-pro-edt">
                                <span class="input-group-addon"><i class="icon nalika-edit"
                                        aria-hidden="true"></i></span>
                                <input type="text" class="form-control" placeholder="Percent Text"
                                    value="{{ __('about.body.percent.text') }}" name="percentText"
                                    id="edit-product-title" required>
                            </div>
                            <div class="input-group mg-b-pro-edt">
                                <span class="input-group-addon"><i class="icon nalika-picture"
                                        aria-hidden="true"></i></span>
                                <input type="file" class="form-control" placeholder="Image" name="bodyImg2"
                                    id="edit-product-title" accept="image/*" value="{{ __('about.body.image2') }}">
                            </div>
                        </div>

                        <!-- Banner -->
                        <hr style="margin-top: 30px;">
                        <h5 style="color: #fff; font-weight: bold;">Banner</h5>
                        <div class="input-group mg-b-pro-edt">
                            <span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" placeholder="Title"
                                value="{{ __('about.banner.title') }}" name="bannerTitle" id="edit-product-title"
                                required>
                        </div>
                        <div class="input-group mg-b-pro-edt">
                            <span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" placeholder="Subtitle"
                                value="{{ __('about.banner.subtitle') }}" name="bannerSub" id="edit-product-title"
                                required>
                        </div>
                        <div class="input-group mg-b-pro-edt">
                            <span class="input-group-addon"><i class="icon nalika-picture"
                                    aria-hidden="true"></i></span>
                            <input type="file" class="form-control" placeholder="Image" name="bannerImg"
                                id="edit-product-title" accept="image/*" value="{{ __('about.banner.image') }}">
                        </div>

                        <!-- Achievements -->
                        <hr style="margin-top: 30px;">
                        <h5 style="color: #fff; font-weight: bold;">Achievements</h5>
                        <h6 style="color: #fff; font-weight: bold;">1</h6>
                        <div class="input-group mg-b-pro-edt">
                            <span class="input-group-addon"><i class="icon nalika-picture"
                                    aria-hidden="true"></i></span>
                            <input type="file" class="form-control" placeholder="Image" name="achievementImg1"
                                id="edit-product-title" accept="image/*" value="{{ __('about.achievement.image1') }}">
                        </div>
                        <div class="input-group mg-b-pro-edt">
                            <span class="input-group-addon"><i class="icon nalika-edit"
                                    aria-hidden="true"></i></span>
                            <input type="text" class="form-control" placeholder="Title"
                                value="{{ __('about.achievement.title1') }}" name="achievementTitle1"
                                id="edit-product-title" required>
                        </div>
                        <div class="input-group mg-b-pro-edt">
                            <span class="input-group-addon"><i class="icon nalika-edit"
                                    aria-hidden="true"></i></span>
                            <input type="text" class="form-control" placeholder="Text"
                                value="{{ __('about.achievement.text1') }}" name="achievementText1"
                                id="edit-product-title" required>
                        </div>

                        <h6 style="color: #fff; font-weight: bold;">2</h6>
                        <div class="input-group mg-b-pro-edt">
                            <span class="input-group-addon"><i class="icon nalika-picture"
                                    aria-hidden="true"></i></span>
                            <input type="file" class="form-control" placeholder="Image" name="achievementImg2"
                                id="edit-product-title" accept="image/*" value="{{ __('about.achievement.image2') }}">
                        </div>
                        <div class="input-group mg-b-pro-edt">
                            <span class="input-group-addon"><i class="icon nalika-edit"
                                    aria-hidden="true"></i></span>
                            <input type="text" class="form-control" placeholder="Title"
                                value="{{ __('about.achievement.title2') }}" name="achievementTitle2"
                                id="edit-product-title" required>
                        </div>
                        <div class="input-group mg-b-pro-edt">
                            <span class="input-group-addon"><i class="icon nalika-edit"
                                    aria-hidden="true"></i></span>
                            <input type="text" class="form-control" placeholder="Text"
                                value="{{ __('about.achievement.text2') }}" name="achievementText2"
                                id="edit-product-title" required>
                        </div>

                        <h6 style="color: #fff; font-weight: bold;">3</h6>
                        <div class="input-group mg-b-pro-edt">
                            <span class="input-group-addon"><i class="icon nalika-picture"
                                    aria-hidden="true"></i></span>
                            <input type="file" class="form-control" placeholder="Image" name="achievementImg3"
                                id="edit-product-title" accept="image/*" value="{{ __('about.achievement.image3') }}">
                        </div>
                        <div class="input-group mg-b-pro-edt">
                            <span class="input-group-addon"><i class="icon nalika-edit"
                                    aria-hidden="true"></i></span>
                            <input type="text" class="form-control" placeholder="Title"
                                value="{{ __('about.achievement.title3') }}" name="achievementTitle3"
                                id="edit-product-title" required>
                        </div>
                        <div class="input-group mg-b-pro-edt">
                            <span class="input-group-addon"><i class="icon nalika-edit"
                                    aria-hidden="true"></i></span>
                            <input type="text" class="form-control" placeholder="Text"
                                value="{{ __('about.achievement.text3') }}" name="achievementText3"
                                id="edit-product-title" required>
                        </div>

                        <h6 style="color: #fff; font-weight: bold;">4</h6>
                        <div class="input-group mg-b-pro-edt">
                            <span class="input-group-addon"><i class="icon nalika-picture"
                                    aria-hidden="true"></i></span>
                            <input type="file" class="form-control" placeholder="Image" name="achievementImg4"
                                id="edit-product-title" accept="image/*" value="{{ __('about.achievement.image4') }}">
                        </div>
                        <div class="input-group mg-b-pro-edt">
                            <span class="input-group-addon"><i class="icon nalika-edit"
                                    aria-hidden="true"></i></span>
                            <input type="text" class="form-control" placeholder="Title"
                                value="{{ __('about.achievement.title4') }}" name="achievementTitle4"
                                id="edit-product-title" required>
                        </div>
                        <div class="input-group mg-b-pro-edt">
                            <span class="input-group-addon"><i class="icon nalika-edit"
                                    aria-hidden="true"></i></span>
                            <input type="text" class="form-control" placeholder="Text"
                                value="{{ __('about.achievement.text4') }}" name="achievementText4"
                                id="edit-product-title" required>
                        </div>
                    </div>
                </div>

                <!-- Preview -->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <h4 style="color: #fff; font-weight: bold;">Site Prewiew</h4>
                    <div class="product-status-wrap">
                        <h4>About us</h4>
                        <h5 style="color: #fff; font-weight: bold;">Header</h5>
                        <img style="width: 100%;margin-bottom: 0px;"
                            src="<?= asset('assets/images/ss/about-header.jpeg') ?>" alt="">

                        <hr style="margin-top: 30px;">
                        <h5 style="color: #fff; font-weight: bold;">Content Texts</h5>
                        <img style="width: 100%; height: 220px;"
                            src="<?= asset('assets/images/ss/about-body-text.jpeg') ?>" alt="">

                        <!-- <hr style="margin-top: 30px;"> -->
                        <h5 style="color: #fff; font-weight: bold; margin-top: 30px;">Content Images</h5>
                        <img style="width: 100%; height: 220px;"
                            src="<?= asset('assets/images/ss/about-body-images.jpeg') ?>" alt="">

                        <hr style="margin-top: 30px;">
                        <h5 style="color: #fff; font-weight: bold;">Banner</h5>
                        <img style="width: 100%; height: 220px;"
                            src="<?= asset('assets/images/ss/about-banner.jpeg') ?>" alt="">

                        <hr style="margin-top: 30px;">
                        <h5 style="color: #fff; font-weight: bold;">Achievements</h5>
                        <img style="width: 100%; height: 220px;"
                            src="<?= asset('assets/images/ss/about-achievement.jpeg') ?>" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div style="margin: 20px auto; text-align: center" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <input style="width: 200px" type="submit" class="btn btn-primary" value="Save" name="set">
                </div>
            </div>
        </form>
    </div>
</div>
@endsection