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
                                    <span class="section-title__tagline">MGER Trades</span>
                                    <h2 class="section-title__title">{{ $brands->name }}</h2>
                                </div>
                                <p class="about-company__text-2" style="text-align: justify;">sed quia consequuntur magni dolores eos qui ratione
                                    voluptatem sequi nesciunt. Neque porroisquam est, qui dolorem ipsum quia dolor sit
                                    amet, consectetur, adipisci velit. sed quia non numquam qui ratione voluptatem sequi
                                    nesciunt.sed quia consequuntur magni dolores eos qui ratione
                                    voluptatem sequi nesciunt. Neque porroisquam est, qui dolorem ipsum quia dolor sit
                                    amet, consectetur, adipisci velit. sed quia non numquam qui ratione voluptatem sequi
                                    nesciunt.sed quia consequuntur magni dolores eos qui ratione
                                    voluptatem sequi nesciunt. Neque porroisquam est, qui dolorem ipsum quia dolor sit
                                    amet, consectetur, adipisci velit. sed quia non numquam qui ratione voluptatem sequi
                                    nesciunt.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="about-company__bottom">
                    <div class="row">
                        <div class="col-xl4 col-lg-4" style="display:flex; margin-top: 20px;">
                            <div class="col-xl-4 col-lg-5">
                                <div class="about-company__bottom-left">
                                    <div class="about-company__bottom-img">
                                        <img src="{{ asset('assets/brand/' . $brands->image) }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-7">
                                <div class="">
                                    <p class="about-company__text-4">Our mission</p>
                                    <p class="about-company__text-2">Show Products</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl4 col-lg-4" style="display:flex; margin-top: 20px;">
                            <div class="col-xl-4 col-lg-5">
                                <div class="about-company__bottom-left">
                                    <div class="about-company__bottom-img">
                                        <img src="{{ asset('assets/brand/' . $brands->image) }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-7">
                                <div class="">
                                    <p class="about-company__text-4">Our mission</p>
                                    <p class="about-company__text-2">Show Products</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl4 col-lg-4" style="display:flex; margin-top: 20px;">
                            <div class="col-xl-4 col-lg-5">
                                <div class="about-company__bottom-left">
                                    <div class="about-company__bottom-img">
                                        <img src="{{ asset('assets/brand/' . $brands->image) }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-7">
                                <div class="">
                                    <p class="about-company__text-4">Our mission</p>
                                    <p class="about-company__text-2">Show Products</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl4 col-lg-4" style="display:flex; margin-top: 20px;">
                            <div class="col-xl-4 col-lg-5">
                                <div class="about-company__bottom-left">
                                    <div class="about-company__bottom-img">
                                        <img src="{{ asset('assets/brand/' . $brands->image) }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-7">
                                <div class="">
                                    <p class="about-company__text-4">Our mission</p>
                                    <p class="about-company__text-2">Show Products</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl4 col-lg-4" style="display:flex; margin-top: 20px;">
                            <div class="col-xl-4 col-lg-5">
                                <div class="about-company__bottom-left">
                                    <div class="about-company__bottom-img">
                                        <img src="{{ asset('assets/brand/' . $brands->image) }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-7">
                                <div class="">
                                    <p class="about-company__text-4">Our mission</p>
                                    <p class="about-company__text-2">Show Products</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                                    <span class="section-title__tagline">MGER Trades</span>
                                    <h2 class="section-title__title">{{ $brands->name }}</h2>
                                </div>
                                <p class="about-company__text-2" style="text-align: justify;">sed quia consequuntur magni dolores eos qui ratione
                                    voluptatem sequi nesciunt. Neque porroisquam est, qui dolorem ipsum quia dolor sit
                                    amet, consectetur, adipisci velit. sed quia non numquam qui ratione voluptatem sequi
                                    nesciunt.sed quia consequuntur magni dolores eos qui ratione
                                    voluptatem sequi nesciunt. Neque porroisquam est, qui dolorem ipsum quia dolor sit
                                    amet, consectetur, adipisci velit. sed quia non numquam qui ratione voluptatem sequi
                                    nesciunt.sed quia consequuntur magni dolores eos qui ratione
                                    voluptatem sequi nesciunt. Neque porroisquam est, qui dolorem ipsum quia dolor sit
                                    amet, consectetur, adipisci velit. sed quia non numquam qui ratione voluptatem sequi
                                    nesciunt.</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <!--About Company End-->
@endsection
