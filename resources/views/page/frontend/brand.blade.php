@extends('layout.frontend.guest')

@section('content')
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url(assets/frontend/images/backgrounds/page-header-bg-2.png);">
        </div>
        <div class="container">
            <div class="page-header__inner">
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

    <!--About Company Start-->
    <section class="about-company">
        <div class="container">
            @foreach ($brand as $brands)
                <div class="about-company__top" style="margin-top: 30px;">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5">
                            <div class="about-company__left">
                                <div class="about-company__img">
                                    <img src="{{ asset('assets/brand/' . $brands->image) }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-7">
                            <div class="about-company__right">
                                <div class="section-title text-left">
                                    <span class="section-title__tagline">MGR Trades</span>
                                    <h2 class="section-title__title">{{ $brands->name }}</h2>
                                </div>
                                <span class="about-company__text-2" style="text-align: justify;">{!! $brands->note !!}.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="about-company__bottom">
                    <div class="row">
                        @foreach ($category as $categoryies)
                            @if ($categoryies->session_id == $brands->id)
                                <div class="col-xl-4 col-lg-4 " style="display:flex; margin-top: 20px;">
                                    <div class="col-xl-4 col-lg-4 col-4 ">
                                        <a href="{{ route('product.details', ['id' => $categoryies->id]) }}">
                                            <div class="about-company__bottom-left">
                                                <div class="about-company__bottom-img">
                                                    <img src="{{ asset('assets/category/' . $categoryies->image) }}"
                                                        alt="">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-8">
                                        <a href="{{ route('product.details', ['id' => $categoryies->id]) }}">
                                            <div class="">
                                                <p class="about-company__text-4">{{ $categoryies->name }}</p>
                                                <p class="about-company__text-2">{{ $categoryies->note }}</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <!--About Company End-->
@endsection
