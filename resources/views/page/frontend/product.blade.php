@extends('layout.frontend.guest')

@section('content')
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url(assets/frontend/images/backgrounds/page-header-bg.png);">
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
                @foreach ($subcategory as $subcategorys)
                    <!--Project Page Two Single Start-->

                    <div class="col-xl-6 col-lg-6 col-md-6" style="display: flex">
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="project-page-one__single">
                                <div class="project-page-one__img">
                                    <img src="{{ asset('assets/subcategory/' . $subcategorys->image) }}" alt="">
                                    <div class="project-page-one__content">
                                        <p class="project-page-one__sub-title">{{ $subcategorys->name }}</p>
                                    </div>
                                    <div class="project-page-one__button">
                                        <a class="img-popup" href="{{ asset('assets/subcategory/' . $subcategorys->image) }}">
                                            <img src="{{ asset('assets/frontend/images/icon/icon-zoom-1.png') }}" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6" style="margin-left: 20px;">
                            <div>
                                <div class="project-page-two__content" style="margin-top: 10px !important">
                                    <h4 class="project-page-two__title" style="display: flex; margin-bottom: 10px;"><a
                                            href="javascript::void(o);">{{ $subcategorys->name }} </a>
                                            &nbsp;&nbsp;<p class="project-page-two__sub-title"> ( {{ $subcategorys->category->name }} )</p>
                                    </h4>

                                </div>
                                <table style="border: 1px solid black; border-collapse: collapse;">
                                    <tr style="border: 1px solid black; border-collapse: collapse; background-color: #dddddd;">
                                        <th style="border: 1px solid black; border-collapse: collapse; padding-right: 20px; padding-left: 20px;">Product Size</th>
                                        <th style="border: 1px solid black; border-collapse: collapse; padding-right: 20px; padding-left: 20px;">MRP Price</th>
                                    </tr>
                                    @foreach ($varient as $varients)
                                    <tr style="border: 1px solid black; border-collapse: collapse;">
                                        <td style="border: 1px solid black; border-collapse: collapse; padding-right: 20px; padding-left: 20px;">{{ $varients->name }}</td>
                                        <td style="border: 1px solid black; border-collapse: collapse; padding-right: 20px; padding-left: 20px;">₹ {{ $varients->price }}</td>
                                    </tr>
                                    @endforeach
                                </table>
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
