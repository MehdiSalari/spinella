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
                                            <img style="width: 50%; padding: 0 20px" src="{{ asset("assets/images/blogs/$blog->slug/$blog->image_primary") }}" alt="">
                                            <img style="width: 50%; padding: 0 20px" src="{{ asset("assets/images/blogs/$blog->slug/$blog->image_primary") }}" alt="">
                                        </div>
                                        <p>{{ $blog->upper_text }}</p>
                                        <div style="display: flex; justify-content: center; width: 70%; align-items: center; margin: 20px auto">
                                            <img style="width: 220px; height: 400px; padding: 0 20px" src="{{ asset("assets/images/blogs/$blog->slug/$blog->image_primary") }}" alt="">
                                            <p style="border: solid 2px #9c1126; padding: 10px; border-radius: 10px; height: 400px; width: 200px; font-size: 20px">{{ $blog->mid_text }}</p>
                                        </div>
                                        <p>{{ $blog->lower_text }}</p>
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
@endsection
