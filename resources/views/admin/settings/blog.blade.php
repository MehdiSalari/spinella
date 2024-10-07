@extends('admin.layout.master')

@section('content')
@extends('admin.layout.master')

@section('content')
    <div class="container-fluid">
        <div class="product-status mg-b-30" style="margin-top: 100px;">
            <form action="{{ route('admin.settings.update', ['home', 'en']) }}" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <!-- Site Contents -->
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <h4 style="color: #fff; font-weight: bold;">Site Contents</h4>
                        <div class="product-status-wrap">
                            <h4>Blog</h4>
                            <form action="" method="POST">
                                <!-- Header -->
                                <h5 style="color: #fff; font-weight: bold;">Header</h5>
                                <div class="input-group mg-b-pro-edt">
                                    <span class="input-group-addon"><i class="icon nalika-edit"
                                            aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" placeholder="Title"
                                        value="{{ __('blog.header.title') }}" name="headerTitle"
                                        id="edit-product-title" required>
                                </div>
                                <div class="input-group mg-b-pro-edt">
                                    <span class="input-group-addon"><i class="icon nalika-edit"
                                            aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" placeholder="Subtitle"
                                        value="{{ __('blog.header.subtitle') }}" name="headerSubtitle"
                                        id="edit-product-title" required>
                                </div>
                                <div class="input-group mg-b-pro-edt">
                                    <span class="input-group-addon"><i class="icon nalika-picture"
                                            aria-hidden="true"></i></span>
                                    <input type="file" class="form-control" placeholder="Text" name="hraderImg"
                                        id="edit-product-title" accept="image/*"
                                        value="{{ __('blog.header.image') }}">
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Preview -->
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <h4 style="color: #fff; font-weight: bold;">Site Prewiew</h4>
                        <div class="product-status-wrap">
                            <h4>Blog</h4>
                            <h5 style="color: #fff; font-weight: bold;">Header</h5>
                            <img style="width: 100%;margin-bottom: 0px;"
                                src="<?= asset('assets/images/ss/blog-header.jpeg') ?>" alt="">
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div style="margin: 20px auto; text-align: center" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <input style="width: 200px" type="submit" class="btn btn-primary" value="Save"
                            name="set">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@endsection