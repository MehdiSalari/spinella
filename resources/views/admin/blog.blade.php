@extends('admin.layout.master')

@section('content')
    <div class="blog-area mg-tb-15" style="margin-top: 60px">
        <div class="container-fluid">
            <div class="row">
                {{-- add blog --}}
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull-right" style="margin-bottom: 10px">
                    <a href="#" id="open-add-popup" class="btn btn-primary pull-right" style="margin-top: 10px">Add
                        Blog</a>
                </div>
                <!------------------->

                <!------------------->

                <!------------------->
                @foreach ($posts as $post)
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="margin-bottom: 10px">
                        <a href="{{ route('admin.blog.show', $post->id) }}">
                            <div class="hpanel blog-box responsive-mg-b-30">
                                <div class="panel-heading custom-blog-hd">
                                    <div class="media clearfix">
                                        <img style="width: 100%; height: 150px"
                                            src="<?= asset('assets/images/blogs/' . $post['slug'] . '/' . $post['image_primary']) ?>"
                                            alt="blog-picture">
                                    </div>
                                </div>
                                <div class="panel-body blog-pra">
                                    <h4>{{ Str::limit($post->title, 30) }}</h4>
                                    <p>
                                        {{ Str::limit($post->upper_text, 100) }}
                                    </p>
                                </div>
                                <div class="panel-footer">
                                    <span class="pull-right"><i class="fa fa-calendar-o"> </i>
                                        {{ $post->created_at->format('d M, Y') }}</span>
                                    <i class="fa fa-user"> </i> Created by: <span
                                        class="font-bold">{{ $post->user->name }}</span>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="text-center">
                {{ $posts->links() }}
            </div>
        </div>
    </div>

    {{-- Start Add blog Pop-up Form --}}
    <div class="popup" id="add-blog-popup">
        <div class="popup-content">
            <div class="popup-bg">
                <label style="color: white;font-size: 20px;" class="page-item"><i style="margin-right: 10px"
                        class="icon nalika-edit" aria-hidden="true"></i>Add Blog</label>
                <form id="add-blog-form" method="POST" action="{{ route('admin.blog.store') }}"
                    enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="user_id" id="add-blog-id" value="{{ Auth::user()->id }}">
                    <div class="product-tab-list tab-pane fade active in" id="description">
                        <div style="display: flex; justify-content: center;" class="row">
                            <div style="display: flex; justify-content: center;"
                                class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="review-content-section">
                                    <div class="input-group mg-b-pro-edt">
                                        <label for="add-image-upload-primary"
                                            style="width: 300px; text-align: center; color: white; margin-bottom: 10px"><i
                                                class="icon nalika-picture" style="margin-right: 10px"
                                                aria-hidden="true"></i>Primary Image *</label>
                                        <div class="input-group mg-b-pro-edt">
                                            <img id="add-blog-image-primary"
                                                src="{{ asset('assets/images/products/default.png') }}" alt=""
                                                style="width: 300px; height: 150px;">
                                        </div>
                                        <label class="custom-file-upload" style="width: 300px; text-align: center">
                                            <input type="file" id="add-image-upload-primary" name="image_primary"
                                                accept="image/*" required />
                                            Upload Image
                                        </label>
                                    </div>
                                    <div class="input-group mg-b-pro-edt">
                                        <span class="input-group-addon"><i class="icon nalika-edit"
                                                aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" placeholder="Blog Title *" name="title"
                                            id="add-blog-title" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="review-content-section">
                                    <div class="input-group mg-b-pro-edt">
                                        <label for="add-image-upload-left"
                                            style="text-align: center; color: white; margin-bottom: 10px"><i
                                                class="icon nalika-picture" style="margin-right: 10px"
                                                aria-hidden="true"></i>Left Image</label>
                                        <div class="input-group mg-b-pro-edt">
                                            <img id="add-blog-image-left"
                                                src="{{ asset('assets/images/products/default.png') }}" alt=""
                                                style="width: 300px; height: 150px;">
                                        </div>
                                        <label class="custom-file-upload">
                                            <input type="file" id="add-image-upload-left" name="image_left"
                                                accept="image/*" />
                                            Upload Image
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="review-content-section">
                                    <div class="input-group mg-b-pro-edt">
                                        <label for="add-image-upload-right"
                                            style="text-align: center; color: white; margin-bottom: 10px"><i
                                                class="icon nalika-picture" style="margin-right: 10px"
                                                aria-hidden="true"></i>Right Image</label>
                                        <div class="input-group mg-b-pro-edt">
                                            <img id="add-blog-image-right"
                                                src="{{ asset('assets/images/products/default.png') }}" alt=""
                                                style="width: 300px; height: 150px;">
                                        </div>
                                        <label class="custom-file-upload">
                                            <input type="file" id="add-image-upload-right" name="image_right"
                                                accept="image/*" />
                                            Upload Image
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="review-content-section">
                                    <label for="add-blog-text-upper" style="color: white; margin-bottom: 10px"><i
                                            class="icon nalika-edit" style="margin-right: 10px"
                                            aria-hidden="true"></i>Upper Text *</label>
                                    <div class="input-group mg-b-pro-edt">
                                        <span class="input-group-addon"><i class="icon nalika-edit"
                                                aria-hidden="true"></i></span>
                                        <textarea style="resize: none" rows="7" class="form-control" name="upper_text" id="add-blog-text-upper"
                                            required></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="review-content-section">
                                    <label for="add-image-upload-mid" style="color: white; margin-bottom: 10px"><i
                                            class="icon nalika-picture" style="margin-right: 10px"
                                            aria-hidden="true"></i>Mid Image</label>
                                    <div class="input-group mg-b-pro-edt">
                                        <img id="add-blog-image-mid"
                                            src="{{ asset('assets/images/products/default.png') }}" alt=""
                                            style="width: 200px; height: 350px;">
                                    </div>
                                    <label class="custom-file-upload"
                                        style="width: 200px; text-align: center;padding: 10px">
                                        <input type="file" id="add-image-upload-mid" name="image_mid"
                                            accept="image/*" />
                                        Upload Image
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="review-content-section">
                                    <label for="add-blog-text-mid" style="color: white; margin-bottom: 10px"><i
                                            class="icon nalika-edit" style="margin-right: 10px"
                                            aria-hidden="true"></i>Mid Text</label>
                                    <div class="input-group mg-b-pro-edt">
                                        <span class="input-group-addon"><i class="icon nalika-edit"
                                                aria-hidden="true"></i></span>
                                        <textarea style="resize: none; font-size: 25px;" rows="10" class="form-control" name="mid_text"
                                            id="add-blog-text-mid"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="review-content-section">
                                    <label for="add-blog-text-lower" style="color: white; margin-bottom: 10px"><i
                                            class="icon nalika-edit" style="margin-right: 10px"
                                            aria-hidden="true"></i>Lower Text</label>
                                    <div class="input-group mg-b-pro-edt">
                                        <span class="input-group-addon"><i class="icon nalika-edit"
                                                aria-hidden="true"></i></span>
                                        <textarea style="resize: none" rows="7" class="form-control" name="lower_text," id="add-blog-text-lower"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin: 20px 15px;">
                        <div class="text-center">
                            <button name="addBlog" type="submit"
                                class="btn btn-primary waves-effect waves-light">Add</button>
                            <button type="button"
                                class="btn btn-primary waves-effect waves-light close-popup">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- End Add blog Pop-up Form --}}


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Open Add blog Popup
            document.getElementById('open-add-popup').addEventListener('click', function() {
                document.getElementById('add-blog-popup').style.display = 'block';
            });

            // Close Popup Forms
            document.querySelectorAll('.close-popup').forEach(function(button) {
                button.addEventListener('click', function() {
                    this.closest('.popup').style.display = 'none';
                    const image = document.getElementById('add-product-image');
                    image.src = '{{ asset('assets/images/products/default.png') }}';
                });
            });
        });

        document.getElementById('add-image-upload-primary').addEventListener('change', function() {
            const image = document.getElementById('add-blog-image-primary');
            const file = event.target.files[0];
            const reader = new FileReader();

            reader.onload = function(e) {
                image.src = e.target.result;
            }

            if (file) {
                reader.readAsDataURL(file);
            }
        });
    </script>
    {{-- sweet alert message for validation error --}}
    @php
        if ($errors->any()) {
            foreach ($errors->all() as $error) {
                echo "<script>
                    Swal.fire('Error!', '$error', 'error');
                </script>";
            }
        }
    @endphp
@endsection
