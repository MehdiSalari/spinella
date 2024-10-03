@extends('layout.master')

@section('content')
    <!-- subheader -->
    <section id="subheader" class="jarallax text-light">
        <img src="{{ asset("assets/images/blogs/$blog->slug/$blog->image_primary") }}" class="jarallax-img" alt="">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center wow fadeInUp">
                        <h2 class="s1 mb-40">Blog</h2>
                        <h2>{{ $blog->title }}</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="blog.php">Blog</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $blog->title }}</li>
                </ol>
            </div>
        </div>
    </section>
    <!-- subheader close -->

    <!-- content begin -->
    <div id="content" class="no-bottom no-top">
        <section id="section-book-form">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="de-post-read">
                            <div class="post-content">

                                <div class="post-text">
                                    <div class="row zoom-gallery mb-4">
                                        <div class="col-lg-6">
                                            <figure class="hover-zoom position-relative rounded-20 overflow-hidden">
                                                <a href="{{ asset("assets/images/blogs/$blog->slug/$blog->image_left") }}">
                                                    <span class="d-hover">
                                                        <span class="d-text">
                                                            <span class="d-cap">View</span>
                                                        </span>
                                                    </span>
                                                    <img src="{{ asset("assets/images/blogs/$blog->slug/$blog->image_left") }}" alt="">
                                                </a>
                                            </figure>
                                        </div>

                                        <div class="col-lg-6">
                                            <figure class="hover-zoom position-relative rounded-20 overflow-hidden">
                                                <a href="{{ asset("assets/images/blogs/$blog->slug/$blog->image_right") }}">
                                                    <span class="d-hover">
                                                        <span class="d-text">
                                                            <span class="d-cap">View</span>
                                                        </span>
                                                    </span>
                                                    <img src="{{ asset("assets/images/blogs/$blog->slug/$blog->image_right") }}" alt="">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <p>{{ $blog->upper_text }}</p>

                                    <div class="row zoom-gallery mb-4">
                                        <div class="col-lg-6">
                                            <figure class="hover-zoom position-relative rounded-20 overflow-hidden">
                                                <a href="{{ asset("assets/images/blogs/$blog->slug/$blog->image_mid") }}">
                                                    <span class="d-hover">
                                                        <span class="d-text">
                                                            <span class="d-cap">View</span>
                                                        </span>
                                                    </span>
                                                    <img src="{{ asset("assets/images/blogs/$blog->slug/$blog->image_mid") }}" alt="">
                                                </a>
                                            </figure>
                                        </div>

                                        <div class="col-lg-6">
                                            <blockquote class="p-5 border-color-1 rounded-20 h-100">
                                                {{ $blog->mid_text }}
                                            </blockquote>
                                        </div>
                                    </div>

                                    <p>{{ $blog->lower_text }}</p>
                                </div>
                            </div>

                            <div class="post-meta">
                                <span><i class="fa fa-user id-color"></i>By: {{ $blog->user->name }}</span>
                                {{-- <span><i class="fa fa-tag id-color"></i><a href="#">News</a>, <a href="#">Events</a></span> --}}
                                <span><i
                                        class="fa fa-calendar id-color"></i>{{ $blog->created_at->format('M d, Y') }}</span>
                                <span><i class="fa fa-comment id-color"></i>{{ $blog->comments->where('is_approved', true)->count() }}
                                    Comments</></span>
                            </div>

                            <div class="spacer-single"></div>

                            <div id="blog-comment">
                                <h3>Comments ({{ $blog->comments->where('is_approved', true)->count() }})</h3>

                                <div class="spacer-half"></div>

                                <ol>
                                    @php
                                        function displayComments($comments)
                                        {
                                            foreach ($comments as $comment) {
                                                if (!$comment->is_approved) {
                                                    continue;
                                                }
                                                echo '<li>';
                                                echo '<div class="avatar"><img src="' .
                                                    asset('assets/images/ui/avatar.png') .
                                                    '" alt="" /></div>';
                                                echo '<div class="comment-info">';
                                                echo '<span class="c_name">' . $comment->name . '</span>';
                                                echo '<span class="c_date id-color">' .
                                                    $comment->created_at->format('d F Y') .
                                                    '</span>';
                                                echo '<span id="reply-btn" data-id="' .
                                                    $comment->id .
                                                    '" style="cursor: pointer" class="c_reply"><a href="#leave-comment">Reply</a></span>';
                                                echo '<div class="clearfix"></div>';
                                                echo '</div>';
                                                echo '<div class="comment">' . $comment->body . '</div>';

                                                // چک کردن و نمایش پاسخ‌های این کامنت
                                                if ($comment->replies) {
                                                    echo '<ol>';
                                                    displayComments($comment->replies);
                                                    echo '</ol>';
                                                }

                                                echo '</li>';
                                            }
                                        }
                                    @endphp

                                    @php
                                        // نمایش کامنت‌های اصلی (بدون parent_id)
                                        displayComments($blog->comments->whereNull('parent_id'));
                                    @endphp
                                </ol>

                                <div class="spacer-single"></div>

                                <div id="comment-form-wrapper">
                                    <h4 id="leave-comment">Leave a Comment</h4>
                                    <div class="comment_form_holder">
                                        <form id="contact_form" name="form1" method="post"
                                            action="{{ route('comment.store') }}">
                                            @csrf
                                            @method('POST')
                                            <input type="hidden" name="blog_id" id="post_id" value="{{ $blog->id }}">

                                            <label>Name <span class="req">*</span></label>
                                            <input type="text" name="name" id="name" class="form-control" />

                                            <label>Email <span class="req">*</span></label>
                                            <input type="email" name="email" id="email" class="form-control" />
                                            <div id="error_email" class="error">Please check your email</div>

                                            <label>Message <span class="req">*</span></label>
                                            <textarea style="resize: none" cols="10" rows="10" name="body" id="message" class="form-control"></textarea>
                                            <div id="error_message" class="error">Please check your message</div>
                                            <div id="mail_success" class="success">Thank you. Your message has been sent.
                                            </div>
                                            <div id="mail_failed" class="error">Error, email not sent</div>
                                            <input type="hidden" name="parent_id" id="parent_id" value="" />
                                            <p id="btnsubmit">
                                                <input type="submit" id="send" value="Send"
                                                    class="btn-custom" />
                                            </p>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @push('script')
        <script>
            jQuery(document).ready(function() {
                jQuery(document).on('click', '#reply-btn', function() {
                    var commentId = jQuery(this).data('id');

                    document.getElementById('parent_id').value = commentId;
                });
            });
        </script>
    @endpush
@endsection
