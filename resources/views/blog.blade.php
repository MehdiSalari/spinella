@extends('layout.master')

@section('content')
    @push('style')
        <style>
            .pagination {
                justify-content: center;
                text-align: center;
                justify-content: center;
                color: #000;
                /* text-decoration: none; */
                border: none;
                border-radius: 25px;
                background-color: #fff;
            }
            .page-item {
                color: #000;
                font-weight: bold;
                /* border: none; */
                /* border-radius: 10px; */
                background-color: #fff;
                /* width: 40px; */
                height: 5px;
                /* margin: 0 10px; */
                /* text-decoration: none; */
                text-align: center;
                justify-content: center;
                align-items: center;
                /* display: flex; */
            }
            .page-item.active .page-link {
                background-color: #000;
                border: none;
                height: 58px;
                width: 50px;
                margin-top: 3px;
                padding-top: 15px;
                /* border-radius: 10px; */
                color: #fff;
            }
            .page-item.disabled {
                display: none;
            }
        </style>
    @endpush

    <!-- subheader -->
    <section id="subheader" class="jarallax text-light">
        <img src="{{ asset('assets/images/background/' . __('blog.header.image')) }}" class="jarallax-img" alt="">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center wow fadeInUp">
                        <h2 class="s1 mb-40">{{ __('blog.header.title') }}</h2>
                        <h2 class="s2"@if (Session::get('locale') == 'fa') style="letter-spacing: normal;" @endif()>{{ __('blog.header.subtitle') }}</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">@if (Session::get(key: 'locale') == 'fa') خانه @else Home @endif()</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('home.header.blog') }}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- subheader close -->

    <!-- content begin -->
    <div id="content" class="no-bottom no-top">
        <section id="section-book-form">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 blog-list">
                        @php $counter = 0; @endphp
                        @foreach ($blogs as $blog)
                            <div class="blog-item row align-items-center g-3 gx-5">
                                @if($counter % 2 == 0)
                                    <div class="col-md-5">
                                        <div class="post-content">
                                            <div class="date-box">
                                                <div class="day">{{ $blog->created_at->format('d') }}</div>
                                                <div class="month">{{ $blog->created_at->format('M') }}</div>
                                            </div>
                                            <div class="post-text">
                                                <h3><a href="{{ route('blog.show', $blog->slug) }}">{{ $blog->title }}</a></h3>
                                                <p>{{ Str::limit($blog->upper_text, 450) }}</p>
                                                <a href="{{ route('blog.show', $blog->slug) }}" class="btn-custom">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <img src="{{ asset('assets/images/blogs/' . $blog->slug . '/' .$blog->image_primary) }}" class="rounded-20 img-fluid"
                                            alt="">
                                    </div>    
                                @else
                                    <div class="col-md-7">
                                        <img src="{{ asset('assets/images/blogs/' . $blog->slug . '/' .$blog->image_primary) }}" class="rounded-20 img-fluid"
                                            alt="">
                                    </div>
                                    <div class="col-md-5">
                                        <div class="post-content">
                                            <div class="date-box">
                                                <div class="day">{{ $blog->created_at->format('d') }}</div>
                                                <div class="month">{{ $blog->created_at->format('M') }}</div>
                                            </div>
                                            <div class="post-text">
                                                <h3><a href="{{ route('blog.show', $blog->slug) }}">{{ $blog->title }}</a></h3>
                                                <p>{{ Str::limit($blog->upper_text, 150) }}</p>
                                                <a href="{{ route('blog.show', $blog->slug) }}" class="btn-custom">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                @php $counter++; @endphp
                            </div>
                        @endforeach








                        {{-- <div class="blog-item row align-items-center g-3 gx-5">
                            <div class="col-md-5">
                                <div class="post-content">
                                    <div class="date-box">
                                        <div class="day">28</div>
                                        <div class="month">MAY</div>
                                    </div>
                                    <div class="post-text">
                                        <h3><a href="blog-single">10 Reasons To Drink Coffee Every Day
                                            </a></h3>
                                        <p>Saffron is a prized spice derived from the delicate stigmas of Crocus sativus
                                            flowers, known for their vibrant color and rich aroma. Spinella's premium
                                            saffron is sourced from the finest fields, where each strand is carefully
                                            harvested and dried to preserve its unparalleled quality. Native to regions with
                                            a long history of cultivation, saffron is a true treasure of nature, bringing a
                                            touch of luxury and depth to every dish.</p>
                                        <a href="blog-single" class="btn-custom">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <img src="{{ asset('assets/images/blog/pic-blog-1.jpg') }}" class="rounded-20 img-fluid"
                                    alt="">
                            </div>
                        </div>
                        <div class="blog-item row align-items-center g-3 gx-5">
                            <div class="col-md-7">
                                <img src="{{ asset('assets/images/blog/pic-blog-2.jpg') }}" class="rounded-20 img-fluid"
                                    alt="">
                            </div>
                            <div class="col-md-5">
                                <div class="post-content">
                                    <div class="date-box">
                                        <div class="day">26</div>
                                        <div class="month">MAY</div>
                                    </div>
                                    <div class="post-text">
                                        <h3><a href="blog-single">10 Reasons To Drink Coffee Every Day
                                            </a></h3>
                                        <p>Saffron is a prized spice derived from the delicate stigmas of Crocus sativus
                                            flowers, known for their vibrant color and rich aroma. Spinella's premium
                                            saffron is sourced from the finest fields, where each strand is carefully
                                            harvested and dried to preserve its unparalleled quality. Native to regions with
                                            a long history of cultivation, saffron is a true treasure of nature, bringing a
                                            touch of luxury and depth to every dish.</p>
                                        <a href="blog-single" class="btn-custom">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-item row align-items-center g-3 gx-5">
                            <div class="col-md-5">
                                <div class="post-content">
                                    <div class="date-box">
                                        <div class="day">24</div>
                                        <div class="month">MAY</div>
                                    </div>
                                    <div class="post-text">
                                        <h3><a href="blog-single">10 Reasons To Drink Coffee Every Day
                                            </a></h3>
                                        <p>Saffron is a prized spice derived from the delicate stigmas of Crocus sativus
                                            flowers, known for their vibrant color and rich aroma. Spinella's premium
                                            saffron is sourced from the finest fields, where each strand is carefully
                                            harvested and dried to preserve its unparalleled quality. Native to regions with
                                            a long history of cultivation, saffron is a true treasure of nature, bringing a
                                            touch of luxury and depth to every dish.</p>
                                        <a href="blog-single" class="btn-custom">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <img src="{{ asset('assets/images/blog/pic-blog-3.jpg') }}" class="rounded-20 img-fluid"
                                    alt="">
                            </div>
                        </div>
                        <div class="blog-item row align-items-center g-3 gx-5">
                            <div class="col-md-7">
                                <img src="{{ asset('assets/images/blog/pic-blog-4.jpg') }}" class="rounded-20 img-fluid"
                                    alt="">
                            </div>
                            <div class="col-md-5">
                                <div class="post-content">
                                    <div class="date-box">
                                        <div class="day">22</div>
                                        <div class="month">MAY</div>
                                    </div>
                                    <div class="post-text">
                                        <h3><a href="blog-single">10 Reasons To Drink Coffee Every Day
                                            </a></h3>
                                        <p>Saffron is a prized spice derived from the delicate stigmas of Crocus sativus
                                            flowers, known for their vibrant color and rich aroma. Spinella's premium
                                            saffron is sourced from the finest fields, where each strand is carefully
                                            harvested and dried to preserve its unparalleled quality. Native to regions with
                                            a long history of cultivation, saffron is a true treasure of nature, bringing a
                                            touch of luxury and depth to every dish.</p>
                                        <a href="blog-single" class="btn-custom">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    <div style="display: flex; justify-content: center !important; align-items: center">
                        {{ $blogs->links() }}
                        <script>
                            // find all elements that have aria-label and change background color
                            const elems = document.querySelectorAll('[aria-label]');
                            elems.forEach(elem => {
                                elem.style.backgroundColor = '#9c1126';
                                elem.style.color = '#fff';
                                elem.style.border = 'none';
                                elem.style.fontSize = '24px';
                            });

                        </script>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
