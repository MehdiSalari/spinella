@extends('admin.layout.master')

@section('content')
    @push('style')
        <style>
            ol {
                list-style-type: none;
                /* padding-left: 0; */
            }
        </style>
    @endpush
    <div class="blog-details-area mg-tb-15" style="margin-top: 60px">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="blog-details-inner" style="color: white !important;">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="latest-blog-single blog-single-full-view">
                                    <div class="blog-image">
                                        <a href="#"><img
                                            src="{{ asset("assets/images/blogs/$blog->slug/$blog->image_primary") }}"
                                            alt="" />
                                        </a>
                                        {{-- edit btn and delete btn --}}
                                        <button id="open-edit-popup" class="btn btn-primary pull-right">Edit Post</button>
                                        <form action="{{ route('admin.blog.destroy', $blog->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" id="delete-blog" class="btn btn-danger pull-right">Delete Post</button>
                                        </form>
                                        
                                        
                                        
                                        <form action="{{ route('admin.blog.status', $blog->id)}}" method="POST">
                                            @csrf
                                            @method('PATCH')
                                            {{-- <input type="hidden" name="id" value="{{ $blog->id }}"> --}}
                                            @if ($blog->status == 'active')
                                            <input type="hidden" name="status" value="deactive">
                                            <button type="submit" class="btn btn-warning pull-right">Deactive Post</button>
                                            @else
                                            <input type="hidden" name="status" value="active">
                                            <button type="submit" class="btn btn-success pull-right">Active Post</button>
                                            @endif
                                        </form>
                                        
                                        <div class="blog-date">
                                            <p><span class="blog-day">{{ $blog->created_at->format('d') }}</span>
                                                {{ $blog->created_at->format('M') }}</p>
                                        </div>
                                    </div>
                                    <div class="blog-details blog-sig-details">
                                        <div class="details-blog-dt blog-sig-details-dt">
                                            <span><a href="#comments"><i class="fa fa-user"></i> By
                                                    {{ $blog->user->name }}</a></span>
                                            <span><a href="#"><i class="fa fa-comments-o"></i>
                                                    {{ $blog->comments->count() }} Comments</a></span>
                                        </div>
                                        <h1>
                                            <a class="blog-ht" href="{{ route('blog.show', $blog->slug) }}">
                                                {{ $blog->title }}
                                            </a>
                                        </h1>
                                        <div style="display: flex; justify-content: center; width: 70%; align-items: center; margin: 20px auto">
                                            @if ($blog->image_left)
                                            <img style="width: 50%; padding: 0 20px" src="{{ asset("assets/images/blogs/$blog->slug/$blog->image_left") }}" alt="">
                                            @endif
                                            @if ($blog->image_right)
                                            <img style="width: 50%; padding: 0 20px" src="{{ asset("assets/images/blogs/$blog->slug/$blog->image_right") }}" alt="">
                                            @endif
                                        </div>
                                        <p>{{ $blog->upper_text }}</p>
                                        <div style="display: flex; justify-content: center; width: 70%; align-items: center; margin: 20px auto">
                                            @if ($blog->image_mid)
                                            <img style="width: 220px; height: 400px; padding: 0 20px" src="{{ asset("assets/images/blogs/$blog->slug/$blog->image_mid") }}" alt="">
                                            @endif
                                            @if ($blog->mid_text)
                                            <p style="border: solid 2px #9c1126; padding: 10px; border-radius: 10px; height: 400px; width: 200px; font-size: 20px">{{ $blog->mid_text }}</p>
                                            @endif
                                        </div>
                                        @if ($blog->lower_text)
                                        <p>{{ $blog->lower_text }}</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if ($blog->comments->count() > 0)
                            <div class="row" id="comments">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="comment-head">
                                        <h3>Comments</h3>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @php
                            function displayComments($comments)
                            {
                                echo '<ol>'; // شروع لیست کامنت‌ها
                                foreach ($comments as $comment) {
                                    echo '<li>'; // شروع هر کامنت
                                    echo '<div class="row">';
                                    echo '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">';
                                    echo '<div style="padding-top: 20px" class="user-comment ' .
                                        ($comment->parent_id ? 'admin-comment' : '') .
                                        '">';
                                    echo '<div class="comment-details">';
                                    echo '<h4>' .
                                        $comment->name .
                                        ' ' .
                                        $comment->created_at->format('d F Y') .
                                        ' <span class="comment-replay">Comment ID: <u>' .
                                        $comment->id .
                                        '</u></span></h4>';
                                    echo '<h5><a href="mailto:' .
                                        $comment->email .
                                        '">' .
                                        $comment->email .
                                        '</a></h5>';
                                    echo '<p>' . $comment->body . '</p>';
                                    echo '<div class="comment-action" style="display: flex;">';
                                    if (!$comment->is_approved)
                                    {
                                        echo '<form action="' . route('admin.comments.update', $comment->id) . '" method="POST">';
                                        echo csrf_field();
                                        echo method_field('PATCH');
                                        echo '<button type="submit" class="btn btn-success">Approve</button>';
                                        echo '</form>';
                                    }

                                    echo '<form action="' . route('admin.comments.destroy', $comment->id) . '" method="POST">';
                                    echo csrf_field();
                                    echo method_field('DELETE');
                                    echo '<button type="submit" class="btn btn-danger delete-comment">Delete</button>';
                                    echo '</form>';
                                    echo '</div>';
                                    echo '</div>';
                                    echo '</div>';
                                    echo '</div>';
                                    echo '</div>';

                                    // نمایش پاسخ‌ها به صورت تو در تو
                                    if ($comment->replies) {
                                        displayComments($comment->replies);
                                    }

                                    echo '</li>'; // پایان هر کامنت
                                }
                                echo '</ol>'; // پایان لیست کامنت‌ها
                            }
                        @endphp

                        @php
                            // نمایش کامنت‌های اصلی
                            displayComments($blog->comments->whereNull('parent_id'));
                        @endphp
                        <script>
                            document.addEventListener('DOMContentLoaded', function () {
                                const deleteButtons = document.querySelectorAll('.delete-comment');

                                deleteButtons.forEach(function (button) {
                                    button.addEventListener('click', function (event) {
                                        event.preventDefault(); // جلوگیری از ارسال فرم به صورت پیش‌فرض

                                        swal.fire({
                                            title: 'Are you sure you want to delete this comment?',
                                            icon: 'warning',
                                            showCancelButton: true,
                                            confirmButtonColor: '#3085d6',
                                            cancelButtonColor: '#d33',
                                            confirmButtonText: 'Yes, delete it!'
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                // اگر کاربر تایید کرد، فرم به صورت دستی ارسال شود
                                                button.closest('form').submit();
                                            }
                                        });
                                    });
                                });
                            });
                        </script>
                        <div class="row" style="margin-top: 20px">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="lead-head">
                                    <h3>Leave A Comment</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="coment-area">
                                <form action="{{ route('admin.comments.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="is_approved" id="" value="true">
                                    <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 blog-res-mg-bt">
                                        <input style="color: white" class="responsive-mg-b-10" type="text"
                                            placeholder="Name *" value="{{ Auth::user()->name }}" name="name" required
                                            disabled />
                                        <input type="hidden" name="name" value="{{ Auth::user()->name }}">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <select style="cursor: pointer" class="form-control" name="parent_id" id="parent_id"
                                            placeholder="Reply to Comment">
                                            <option value="">Reply to Comment</option>
                                            @foreach ($blog->comments as $comment)
                                                <option style="cursor: pointer" value="{{ $comment->id }}">
                                                    {{ $comment->name . ', ID:' . $comment->id }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 blog-res-mg-bt"
                                        style="margin-top: 10px">
                                        <input style="color: white" class="responsive-mg-b-10" type="text"
                                            placeholder="Email *" name="email" value="{{ Auth::user()->email }}" required
                                            disabled />
                                        <input type="hidden" name="email" value="{{ Auth::user()->email }}">
                                        @foreach ($errors->all() as $error)
                                            <div
                                                style="color: red; margin-top: 15px !important; margin-left: 20px; font-weight: bold">
                                                {{ $error }}
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <textarea class="form-control" style="resize: none;color: white" name="body" cols="30" rows="10"
                                            placeholder="Comment Body *"></textarea>
                                        <input type="submit" value="Send" />
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Start edit blog Pop-up Form --}}
    <div class="popup" id="edit-blog-popup">
        <div class="popup-content">
            <div class="popup-bg">
                <label style="color: white;font-size: 20px;" class="page-item"><i style="margin-right: 10px"
                        class="icon nalika-edit" aria-hidden="true"></i>Edit Blog</label>
                <form id="edit-blog-form" method="POST" action="{{ route('admin.blog.update', $blog->id) }}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <input type="hidden" name="user_id" id="edit-blog-id" value="{{ Auth::user()->id }}">
                    <div class="product-tab-list tab-pane fade active in" id="description">
                        <div style="display: flex; justify-content: center;" class="row">
                            <div style="display: flex; justify-content: center;"
                                class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="review-content-section">
                                    <div class="input-group mg-b-pro-edt">
                                        <label for="edit-image-upload-primary"
                                            style="width: 300px; text-align: center; color: white; margin-bottom: 10px"><i
                                                class="icon nalika-picture" style="margin-right: 10px"
                                                aria-hidden="true"></i>Primary Image *</label>
                                        <div class="input-group mg-b-pro-edt">
                                            <img id="edit-blog-image-primary"
                                                src="{{ asset('assets/images/blogs/' . $blog->slug . '/' . $blog->image_primary) }}" alt=""
                                                style="width: 300px; height: 150px;">
                                        </div>
                                        <label class="custom-file-upload" style="width: 300px; text-align: center">
                                            <input type="file" id="edit-image-upload-primary" name="image_primary"
                                                accept="image/*" />
                                            Upload Image
                                        </label>
                                    </div>
                                    <div class="input-group mg-b-pro-edt">
                                        <span class="input-group-addon"><i class="icon nalika-edit"
                                                aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" placeholder="Blog Title *" name="title"
                                            id="edit-blog-title" required value="{{ $blog->title }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="review-content-section">
                                    <div class="input-group mg-b-pro-edt">
                                        <label for="edit-image-upload-left"
                                            style="text-align: center; color: white; margin-bottom: 10px"><i
                                                class="icon nalika-picture" style="margin-right: 10px"
                                                aria-hidden="true"></i>Left Image</label>
                                        <div class="input-group mg-b-pro-edt">
                                            <img id="edit-blog-image-left"
                                                src="@if ($blog->image_left) {{ asset('assets/images/blogs/' . $blog->slug . '/' . $blog->image_left) }} @else {{ asset('assets/images/default.png') }} @endif" alt=""
                                                style="width: 300px; height: 150px;">
                                        </div>
                                        <label class="custom-file-upload">
                                            <input type="file" id="edit-image-upload-left" name="image_left"
                                                accept="image/*" />
                                            Upload Image
                                        </label>
                                        @if ($blog->image_left)
                                        <label style="color: pink; cursor: pointer" for="remove-image-left"><i class="fa fa-trash" style="margin-right: 10px" aria-hidden="true"></i>Delete Left Image?
                                            <input style="width: 20px; height: 20px; margin-left: 10px" type="checkbox" name="remove_image_left" id="remove-image-left">
                                        </label>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="review-content-section">
                                    <div class="input-group mg-b-pro-edt">
                                        <label for="edit-image-upload-right"
                                            style="text-align: center; color: white; margin-bottom: 10px"><i
                                                class="icon nalika-picture" style="margin-right: 10px"
                                                aria-hidden="true"></i>Right Image</label>
                                        <div class="input-group mg-b-pro-edt">
                                            <img id="edit-blog-image-right"
                                            src="@if ($blog->image_right) {{ asset('assets/images/blogs/' . $blog->slug . '/' . $blog->image_right) }} @else {{ asset('assets/images/default.png') }} @endif" alt=""
                                            style="width: 300px; height: 150px;">
                                        </div>
                                        <label class="custom-file-upload">
                                            <input type="file" id="edit-image-upload-right" name="image_right"
                                                accept="image/*" />
                                            Upload Image
                                        </label>
                                        @if ($blog->image_right)
                                        <label style="color: pink; cursor: pointer" for="remove-image-right"><i class="fa fa-trash" style="margin-right: 10px" aria-hidden="true"></i>Delete Right Image?
                                            <input style="width: 20px; height: 20px; margin-left: 10px" type="checkbox" name="remove_image_right" id="remove-image-right">
                                        </label>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="review-content-section">
                                    <label for="edit-blog-text-upper" style="color: white; margin-bottom: 10px"><i
                                            class="icon nalika-edit" style="margin-right: 10px"
                                            aria-hidden="true"></i>Upper Text *</label>
                                    <div class="input-group mg-b-pro-edt">
                                        <span class="input-group-addon"><i class="icon nalika-edit"
                                                aria-hidden="true"></i></span>
                                        <textarea style="resize: none" rows="7" class="form-control" name="upper_text" id="edit-blog-text-upper"
                                            required>{{ $blog->upper_text }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="review-content-section">
                                    <label for="edit-image-upload-mid" style="color: white; margin-bottom: 10px"><i
                                            class="icon nalika-picture" style="margin-right: 10px"
                                            aria-hidden="true"></i>Mid Image</label>
                                    <div class="input-group mg-b-pro-edt">
                                        <img id="edit-blog-image-mid"
                                        src="@if ($blog->image_mid) {{ asset('assets/images/blogs/' . $blog->slug . '/' . $blog->image_mid) }} @else {{ asset('assets/images/default.png') }} @endif" alt=""
                                        style="width: 200px; height: 350px;">
                                    </div>
                                    <label class="custom-file-upload"
                                        style="width: 200px; text-align: center;padding: 10px">
                                        <input type="file" id="edit-image-upload-mid" name="image_mid"
                                            accept="image/*" />
                                        Upload Image
                                    </label>
                                    @if ($blog->image_mid)
                                    <label style="color: pink; cursor: pointer; margin-bottom: 10px" for="remove-image-mid"><i class="fa fa-trash" style="margin-right: 10px" aria-hidden="true"></i>Delete Mid Image?
                                        <input style="width: 20px; height: 20px; margin-left: 10px" type="checkbox" name="remove_image_mid" id="remove-image-mid">
                                    </label>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="review-content-section">
                                    <label for="edit-blog-text-mid" style="color: white; margin-bottom: 10px"><i
                                            class="icon nalika-edit" style="margin-right: 10px"
                                            aria-hidden="true"></i>Mid Text</label>
                                    <div class="input-group mg-b-pro-edt">
                                        <span class="input-group-addon"><i class="icon nalika-edit"
                                                aria-hidden="true"></i></span>
                                        <textarea style="resize: none; font-size: 25px;" rows="10" class="form-control" name="mid_text"
                                            id="edit-blog-text-mid">{{ $blog->mid_text }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="review-content-section">
                                    <label for="edit-blog-text-lower" style="color: white; margin-bottom: 10px"><i
                                            class="icon nalika-edit" style="margin-right: 10px"
                                            aria-hidden="true"></i>Lower Text</label>
                                    <div class="input-group mg-b-pro-edt">
                                        <span class="input-group-addon"><i class="icon nalika-edit"
                                                aria-hidden="true"></i></span>
                                        <textarea style="resize: none" rows="7" class="form-control" 
                                            name="lower_text" id="edit-blog-text-lower">{{ $blog->lower_text }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin: 20px 15px;">
                        <div class="text-center">
                            <button name="editBlog" type="submit"
                                class="btn btn-primary waves-effect waves-light">Edit</button>
                            <button type="button"
                                class="btn btn-primary waves-effect waves-light close-popup">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- End edit blog Pop-up Form --}}

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Open Add blog Popup
            document.getElementById('open-edit-popup').addEventListener('click', function() {
                document.getElementById('edit-blog-popup').style.display = 'block';
            });

            // Close Popup Forms
            document.querySelectorAll('.close-popup').forEach(function(button) {
                button.addEventListener('click', function() {
                    this.closest('.popup').style.display = 'none';
                    const image = document.getElementById('edit-product-image');
                    image.src = '{{ asset('assets/images/products/default.png') }}';
                });
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const deletePost = document.getElementById('delete-blog');
            deletePost.addEventListener('click', function(event) {
                event.preventDefault(); // جلوگیری از ارسال فرم به صورت خودکار
                swal.fire({
                    title: 'Are you sure you want to delete this post?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // اگر کاربر تایید کرد، فرم به صورت دستی ارسال شود
                        this.closest('form').submit();
                    }
                });
            });
        })

        document.getElementById('edit-image-upload-primary').addEventListener('change', function() {
            const image = document.getElementById('edit-blog-image-primary');
            const file = event.target.files[0];
            const reader = new FileReader();

            reader.onload = function(e) {
                image.src = e.target.result;
            }

            if (file) {
                reader.readAsDataURL(file);
            }
        });

        document.getElementById('edit-image-upload-left').addEventListener('change', function() {
            const image = document.getElementById('edit-blog-image-left');
            const file = event.target.files[0];
            const reader = new FileReader();

            reader.onload = function(e) {
                image.src = e.target.result;
            }

            if (file) {
                reader.readAsDataURL(file);
            }
        });
        document.getElementById('edit-image-upload-right').addEventListener('change', function() {
            const image = document.getElementById('edit-blog-image-right');
            const file = event.target.files[0];
            const reader = new FileReader();

            reader.onload = function(e) {
                image.src = e.target.result;
            }

            if (file) {
                reader.readAsDataURL(file);
            }
        });
        document.getElementById('edit-image-upload-mid').addEventListener('change', function() {
            const image = document.getElementById('edit-blog-image-mid');
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
@endsection
