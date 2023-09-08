@extends('layout.frontend.guest')

@section('content')
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url(assets/frontend/images/backgrounds/page-header-bg-1.png);">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>Products</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.html">Home</a></li>
                    <li><span>/</span></li>
                    <li>Products</li>
                </ul>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Project Page Two Start-->
    <section class="project-page-two">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="section-title__title">Our Products</h2>
            </div>
            <div class="row">
                @foreach ($product as $products)
                    <!--Project Page Two Single Start-->

                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="project-page-two__single">
                            <div class="project-page-two__img">
                                <img src="{{ asset('assets/product/' . $products->image) }}" alt="">
                                <div class="project-page-two__button">
                                    <a class="img-popup" href="{{ asset('assets/product/' . $products->image) }}">
                                        <img src="{{ asset('assets/frontend/images/icon/icon-zoom-1.png') }}"
                                            alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="project-page-two__content">
                                    <h4 class="project-page-two__title"><a
                                            href="javascript::void(o);">{{ $products->name }}</a>
                                    </h4>
                                    <p class="project-page-two__sub-title">MRP : ₹ {{ $products->price }}</p>
                            </div>
                        </div>
                    </div>
                    <!--Project Page Two Single End-->
                @endforeach
            </div>
        </div>
    </section>
    <!--Project Page Two End-->
@endsection
