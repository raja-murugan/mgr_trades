@extends('layout.frontend.guest')

@section('content')
<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.png);">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <div class="page-header__shape-1 float-bob-y">
                <img src="{{ asset('assets/frontend/images/shapes/page-header-shape-1.png') }}" alt="">
            </div>
            <h2>Projects v-2</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.html">Home</a></li>
                <li><span>/</span></li>
                <li>Projects V-2</li>
            </ul>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Project Page Two Start-->
<section class="project-page-two">
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline">Our Work</span>
            <h2 class="section-title__title">Our Projects</h2>
        </div>
        <div class="row">
            @foreach ($category as $categorys)
            <!--Project Page Two Single Start-->
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="project-page-two__single">
                    <div class="project-page-two__img">
                        <img src="{{ asset('assets/category/' . $categorys->image) }}" alt="">
                        <div class="project-page-two__button">
                            <a class="img-popup" href="{{ asset('assets/category/' . $categorys->image) }}">
                                <img src="{{ asset('assets/frontend/images/icon/icon-zoom-1.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="project-page-two__content">
                        <h4 class="project-page-two__title"><a href="project-details.html">{{ $categorys->name }}</a></h4>
                        <p class="project-page-two__sub-title">Office Camera</p>
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
