@extends('layout.frontend.guest')

@section('content')
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url(assets/frontend/images/backgrounds/page-header-bg.png);">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <div class="page-header__shape-1 float-bob-y">
                    <img src="{{ asset('assets/frontend/images/shapes/page-header-shape-1.png') }}" alt="">
                </div>
                <h2>Brands</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.html">Home</a></li>
                    <li><span>/</span></li>
                    <li>Brands</li>
                </ul>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Project Page Two Start-->
    <section class="project-page-two">
        <div class="container">
            <div class="row">
                @foreach ($brand as $brands)
                    <!--Project Page Two Single Start-->

                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="project-page-two__single">
                            <div class="project-page-two__img">
                                <img src="{{ asset('assets/brand/' . $brands->image) }}" alt="">
                                <div class="project-page-two__button">
                                    <a class="img-popup" href="{{ asset('assets/brand/' . $brands->image) }}">
                                        <img src="{{ asset('assets/frontend/images/icon/icon-zoom-1.png') }}"
                                            alt="">
                                    </a>
                                    <a href="{{ route('product.details', ['id' => $brands->id]) }}">
                                        <img src="{{ asset('assets/frontend/images/icon/link-icon-1.png') }}"
                                            alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="project-page-two__content">
                                <a href="{{ route('product.details', ['id' => $brands->id]) }}">
                                    <h4 class="project-page-two__title"><a
                                            href="{{ route('product.details', ['id' => $brands->id]) }}">{{ $brands->name }}</a>
                                    </h4>
                                    <a href="{{ route('product.details', ['id' => $brands->id]) }}">
                                    <p class="project-page-two__sub-title">Explore More</p>
                                    </a>
                                </a>
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
