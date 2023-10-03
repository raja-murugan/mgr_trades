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
                @foreach ($categorys as $category)
                <h2>{{ $category->name }}</h2>
                @endforeach
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
        <div class="project-page-one__bg" style="background-image: url(assets/images/backgrounds/project-page-one-bg.jpg);">
        </div>
        <div class="container">
            <div class="row">
                @foreach ($subcategory as $subcategorys)
                    <div class="col-xl-4 col-lg-4 col-4" style="display:flex; margin-top: 20px;">
                        <div class="col-xl-4 col-lg-4 col-4">
                            <div class="about-company__bottom-left">
                                <div class="about-company__bottom-img">
                                    <img src="{{ asset('assets/subcategory/' . $subcategorys->image) }}" alt="" style="border: #030721 1px solid;  border-radius: 10px 10px 0px 0px;">
                                </div>

                            <div class="">
                                <p class="about-company__text-4" style="text-align: center; color: white; line-height: 20px; paddind: 2px; background: #030721; border-radius: 0px 0px 10px 10px;">{{ $subcategorys->name }}</p>
                            </div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8 col-8">
                            <table style="border: 1px solid black; border-collapse: collapse; width: -moz-available;">
                                <tr style="border: 1px solid black; border-collapse: collapse; background-color: #dddddd;">
                                    <th
                                        style="border: 1px solid black; border-collapse: collapse; padding-right: 20px; padding-left: 20px;">
                                        Size</th>
                                    <th
                                        style="border: 1px solid black; border-collapse: collapse; padding-right: 20px; padding-left: 20px;">
                                        MRP</th>
                                </tr>
                                @foreach ($varient as $varients)
                                    @if ($varients->subcategory_id == $subcategorys->id)
                                        <tr style="border: 1px solid black; border-collapse: collapse;">
                                            <td
                                                style="border: 1px solid black; border-collapse: collapse; padding-right: 20px; padding-left: 20px;">
                                                {{ $varients->name }}</td>
                                            <td
                                                style="border: 1px solid black; border-collapse: collapse; padding-right: 20px; padding-left: 20px;">
                                                ₹ {{ $varients->price }}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            </table>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--Project Page One End-->
@endsection
