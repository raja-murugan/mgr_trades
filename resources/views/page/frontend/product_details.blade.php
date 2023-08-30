@extends('layout.frontend.guest')

@section('content')
<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.png);">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <div class="page-header__shape-1 float-bob-y">
                <img src="assets/images/shapes/page-header-shape-1.png" alt="">
            </div>
            <h2>Projects v-1</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.html">Home</a></li>
                <li><span>/</span></li>
                <li>Projects V-1</li>
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
            <span class="section-title__tagline">Our Work</span>
            <h2 class="section-title__title">Our Projects</h2>
        </div>
        <div class="project-one__filter-box">
            <ul class="project-one__filter style1 post-filter list-unstyled clearfix">
                <li data-filter=".filter-item" class="active"><span class="filter-text">All</span></li>
                @foreach ($brand as $brands)
                <li data-filter=".{{ $brands->name }}"><span class="filter-text">{{ $brands->name }}</span></li>
                @endforeach
            </ul>
        </div>
        <div class="row filter-layout">
            <div class="col-xl-4 col-lg-6 col-md-6 filter-item Residence Commercial">
                <div class="project-page-one__single">
                    <div class="project-page-one__img">
                        <img src="assets/images/project/project-page-1-1.jpg" alt="">
                        <div class="project-page-one__content">
                            <p class="project-page-one__sub-title">Loxis Project</p>
                            <h4 class="project-page-one__title"><a href="project-details.html">Electrical
                                    Fixes</a></h4>
                        </div>
                        <div class="project-page-one__button">
                            <a class="img-popup" href="assets/images/project/project-page-1-1.jpg">
                                <img src="assets/images/icon/icon-zoom-1.png" alt="">
                            </a>
                            <a href="project-details.html">
                                <img src="assets/images/icon/link-icon-1.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Project Page One End-->
@endsection
