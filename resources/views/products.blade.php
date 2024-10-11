@extends('layout.master')

@section('content')

    <!-- subheader -->
    <section id="subheader" class="jarallax text-light">
        <img src="{{ asset('assets/images/background/' . __('product.header.image')) }}" class="jarallax-img" alt="">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center wow fadeInUp">
                        <h2 class="s1 mb-40">{{ __('product.header.title') }}</h2>
                        <h2 class="s2">{{ __('product.header.subtitle') }}</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Products</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- subheader close -->


    <!-- content begin -->
    <div id="content" class="no-bottom no-top">
        <section aria-label="section">
            <div class="container">
                <div class="col-md-12">
                    <!-- <ul id="filters" class="wow fadeInUp" data-wow-delay="0s">
                        <li><a href="#" data-filter="*" class="selected">All</a></li>
                        <li><a href="#" data-filter=".coffee">Saffron</a></li>
                        <li><a href="#" data-filter=".non-coffee">Pistachio</a></li>
                        <li><a href="#" data-filter=".main-dishes">Nuts</a></li>
                        <li><a href="#" data-filter=".breads">Dried Fruits</a></li>
                    </ul> -->
                    <ul id="filters" class="wow fadeInUp" data-wow-delay="0s">
                        <li><a href="#" data-filter="*" class="selected">All</a></li>
                        @foreach ($categories as $category)
                        <li><a href="#" data-filter=".cat{{ $category->id }}">{{ $category->title }}</a></li>
                        @endforeach
                    </ul>
                    <div class="spacer-single"></div>
                </div>
            </div>

            <div class="container">
                <div id="gallery" class="row g-4">
                    <!-- Item -->
                    @foreach ($products as $product)
                    <div class="col-lg-4 item cat{{ $product->category_id }}">
                        <div class="pb-3 shadow">
                            <div style="border-radius:1rem">
                                <figure class="hover-zoom position-relative rounded-20 overflow-hidden">
                                    <a>
                                        <img src="{{ asset('assets/images/products/' . $product->image) }}" alt="{{ $product->title }}">
                                    </a>
                                </figure>
                                <div class="mt-3 px-3 rounded-20">
                                    <p>{{ $product->description }} </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="text-danger m-0">{{ $product->title }}</p>
                                        <a href="single?id={{ $product->id }}" class="px-3 py-1 rounded-1 btn-danger">Show</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>

</div>

@endsection