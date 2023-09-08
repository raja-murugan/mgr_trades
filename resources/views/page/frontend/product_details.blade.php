@extends('layout.frontend.guest')

@section('content')
<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg-1.png);">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <div class="page-header__shape-1 float-bob-y">
                <img src="assets/images/shapes/page-header-shape-1.png" alt="">
            </div>
            <h2>Products</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.html">Home</a></li>
                <li><span>/</span></li>
                <li>Product Details</li>
            </ul>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Project Page One Start-->
<section class="project-page-one">
    <div class="project-page-one__bg" style="background-image: url(assets/images/backgrounds/project-page-one-bg.jpg);"></div>
    <div class="container">
        <div class="section-title text-center">
            @foreach ($brandname as $brandnames)
                <h2 class="section-title__title">{{ $brandnames->name }}</h2>
            @endforeach
        </div>
        <div class="project-one__filter-box">
            <ul class="project-one__filter style1 post-filter list-unstyled clearfix">
                <li data-filter=".filter-item" class="active"><span class="filter-text">All</span></li>
                @foreach ($category as $categorys)
                <li data-filter=".{{ $categorys->id }}"><span class="filter-text">{{ $categorys->name }}</span></li>
                @endforeach
            </ul>
        </div>
        <div class="row filter-layout">
            @foreach ($product as $products)
            <div class="col-xl-3 col-lg-6 col-md-6 filter-item Residence {{ $products->category_id }}">
                <div class="project-page-one__single">
                    <div class="project-page-one__img">
                        <img src="{{ asset('assets/product/' .$products->image) }}" alt="">
                        <div class="project-page-one__content">
                            <p class="project-page-one__sub-title">{{ $products->name }}</p>
                            <h4 class="project-page-one__title"><a href="javascript::void(o);">MRP : ₹ {{ $products->price }}</a></h4>
                        </div>
                        <div class="project-page-one__button">
                            <a class="img-popup" href="{{ asset('assets/product/' .$products->image) }}">
                                <img src="{{ asset('assets/frontend/images/icon/icon-zoom-1.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!--Project Page One End-->
@endsection
