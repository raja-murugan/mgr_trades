@extends('layout.frontend.guest')

@section('content')
<!--Main Slider Start-->
<section class="main-slider">
    <div class="main-slider__bg" style="background-image: url(assets/frontend/images/backgrounds/main-slider-bg.jpg);">
    </div>
    <div class="main-slider__big-text">MGRTrades</div>
    <div class="main-slider__wrap">
        <div class="container">
            <div class="main-slider__inner">
                <h4 class="main-slider__title">Welcome to<br> <span>MGR TRADES</span></h4>
                <p class="main-slider__text">Your Trusted Source for Electrical and Plumbing Product.</p>
                <a href="https://api.whatsapp.com/send/?phone=%2B919994023234" target="_blank" class="main-slider__btn thm-btn">Connect Now</a>
                <div class="main-slider__three-facts">
                    <ul class="list-unstyled main-slider__three-facts-list">
                        <li>
                            <div class="icon">
                                <span class="icon-electrician"></span>
                            </div>
                            <h5>Expert</h5>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-plug"></span>
                            </div>
                            <h5>Fast</h5>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-light-bulb"></span>
                            </div>
                            <h5>Local</h5>
                        </li>
                    </ul>
                </div>
                <div class="main-slider__shape-1 float-bob-y">
                    <img src="{{ asset('assets/frontend/images/shapes/main-slider-shape-1.png') }}" alt="">
                </div>
                <div class="main-slider__shape-2 float-bob-x">
                    <img src="{{ asset('assets/frontend/images/shapes/main-slider-shape-2.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!--Main Slider End-->

<!--About one Start-->
<section class="about-one">
    <div class="about-one__img-one wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
        <img src="{{ asset('assets/frontend/images/resources/about-one-img-1.png') }}" alt="" class="float-bob-y">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-9">
                <div class="about-one__left">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">about company</span>
                        <h2 class="section-title__title">Passion for Excellence, Lighting Up Possibilities</h2>
                    </div>
                    <p class="about-one__text">At MGR TRADES, we specialize in providing high- quality electrical and plumbing supplies at competitive prices. With years of industry experience, we are proud to be your one-stop destination for all your electrical and plumbing needs.</p>
                    <div class="about-one__points-box">
                        <ul class="about-one__points-list list-unstyled">
                            <li>
                                <div class="about-one__points-icon">
                                    <span class="icon-comment"></span>
                                </div>
                                <div class="about-one__points-text">
                                    <p>100% Satisfaction</p>
                                </div>
                            </li>
                            <li>
                                <div class="about-one__points-icon">
                                    <span class="icon-comment"></span>
                                </div>
                                <div class="about-one__points-text">
                                    <p>Flexible and Cost-Effective</p>
                                </div>
                            </li>
                        </ul>
                        <ul class="about-one__points-list list-unstyled">
                            <li>
                                <div class="about-one__points-icon">
                                    <span class="icon-comment"></span>
                                </div>
                                <div class="about-one__points-text">
                                    <p>Quality Products</p>
                                </div>
                            </li>
                            <li>
                                <div class="about-one__points-icon">
                                    <span class="icon-comment"></span>
                                </div>
                                <div class="about-one__points-text">
                                    <p>24/7 Service </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="about-one__bottom">
                        <div class="about-one__call-box">
                            <div class="icon">
                                <span class="icon-telephone"></span>
                            </div>
                            <div class="content">
                                <h3 class="about-one__title">Call for Service</h3>
                                <p class="about-one__number"><a href="tel:+919994023234">+91 99940 23234</a></p>
                            </div>
                        </div>
                        <div class="about-one__years-box">
                            <h3 class="about-one__years">20+</h3>
                            <p class="about-one__years-experience">Years of
                                Experience</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--About one End-->

<!--Services One Start-->
<section class="services-one">
    <div class="services-one__top">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="services-one__left">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">Brands</span>
                            <h2 class="section-title__title">Top Brand Products</h2>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="services-one__right">
                        <p class="services-one__text">Bringing the top brand product with a most affordable price only in trichy
                            20 + years leading the way in Electrical services.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="services-one__bottom">
        <div class="services-one__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='{
        "loop": true,
        "autoplay": true,
        "margin": 6,
        "nav": false,
        "dots": false,
        "smartSpeed": 500,
        "autoplayTimeout": 10000,
        "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
        "responsive": {
            "0": {
                "items": 1
            },
            "768": {
                "items": 2
            },
            "992": {
                "items": 2
            },
            "1200": {
                "items": 3
            }
        }
        }'>
            <!--Services One Single Start-->
            @foreach ($brand as $brands)
            <div class="item">
                <div class="services-one__single">
                    <div class="services-one__img-box">
                        <div class="services-one__img">
                            <img src="{{ asset('assets/brand/' . $brands->image) }}" alt="">
                        </div>
                        <div class="services-one__content">
                            <h3 class="services-one__title"><a href="{{ route('product.details', ['id' => $brands->id]) }}">{{ $brands->name }}<i class="icon-right-arrow"></i></a></h3>
                        </div>
                        <div class="services-one__shape-1">
                            <img src="{{ asset('assets/frontend/images/shapes/services-one-shape-1.png') }}" alt="">
                        </div>
                    </div>
                    <div class="services-one__shape-2"></div>
                </div>
            </div>
            @endforeach
            <!--Services One Single End-->
        </div>
    </div>
</section>
<!--Services One End-->

<!--Counter One Start-->
<section class="counter-one">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4">
                <div class="counter-one__left">
                    <div class="counter-one__year-box">
                        <p class="counter-one__year"><span>20+</span>Year</p>
                        <h3 class="counter-one__year-title">Years of
                            Experience</span>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-8">
                <div class="counter-one__right">
                    <ul class="counter-one__box list-unstyled">
                        <li class="counter-one__single">
                            <div class="counter-one__icon">
                                <span class="icon-home"></span>
                            </div>
                            <div class="counter-one__content-box">
                                <h3 class="odometer" data-count="55">00</h3><span class="counter-one__letter">+</span>
                                <p class="counter-one__text">Products</p>
                            </div>
                        </li>
                        <li class="counter-one__single">
                            <div class="counter-one__icon">
                                <span class="icon-office-building"></span>
                            </div>
                            <div class="counter-one__content-box">
                                <h3 class="odometer" data-count="50">00</h3><span class="counter-one__letter">+</span>
                                <p class="counter-one__text">Clients</p>
                            </div>
                        </li>
                        <li class="counter-one__single">
                            <div class="counter-one__icon">
                                <span class="icon-satisfaction"></span>
                            </div>
                            <div class="counter-one__content-box">
                                <h3 class="odometer" data-count="700">00</h3><span class="counter-one__letter">+</span>
                                <p class="counter-one__text">Customer
                                    <br> Satisfaction</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Counter One End-->

<!--Why Choose One Start-->
<section class="why-choose-one">
    <div class="container">
        <div class="why-choose-one__top">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="why-choose-one__left">
                        <div class="why-choose-one__img-box">
                            <div class="why-choose-one__img">
                                <img src="{{ asset('assets/frontend/images/resources/why-choose-one-img-1.jpg') }}" alt="">
                            </div>
                            <div class="why-choose-one__count-box">
                                <div class="icon">
                                    <span class="icon-reviews"></span>
                                </div>
                                <div class="why-choose-one__content-box">
                                    <h3 class="odometer" data-count="700">00</h3><span class="why-choose-one__letter">+</span>
                                    <p class="why-choose-one__count-text">Satisfied
                                        <br>Customers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="why-choose-one__right">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">Our Professionals</span>
                            <h2 class="section-title__title">Why Choose Us</h2>
                        </div>
                        <p class="why-choose-one__text">MGR Trades stands out with a seasoned team delivering top-tier, tailored electrical solutions, prioritizing quality, and adhering to safety standards. As the exclusive Sudhakar distributor in Trichy, we offer comprehensive electrical and plumbing solutions.
                        </p>
                        <ul class="why-choose-one__points list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="fa fa-arrow-right"></span>
                                </div>
                                <div class="text">
                                    <p>Proven Expertise for Electrical Solutions.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="fa fa-arrow-right"></span>
                                </div>
                                <div class="text">
                                    <p>Reliability: Consistency You Can Trust.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="fa fa-arrow-right"></span>
                                </div>
                                <div class="text">
                                    <p>Exclusive Sudhakar Products in Trichy.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="why-choose-one__bottom">
            <div class="row">
                <!--Why Choose One Single Start-->
                <div class="col-xl-4 col-lg-4">
                    <div class="why-choose-one__single">
                        <div class="icon">
                            <span class="icon-certificate"></span>
                        </div>
                        <div class="why-choose-one__content">
                            <h3 class="why-choose-one__title"><a href="about.html">Premium Products</a></h3>
                            <p class="why-choose-one__text-2">Our commitment to excellence has earned us recognition, setting industry benchmarks for top-quality products.</p>
                        </div>
                    </div>
                </div>
                <!--Why Choose One Single End-->
                <!--Why Choose One Single Start-->
                <div class="col-xl-4 col-lg-4">
                    <div class="why-choose-one__single">
                        <div class="icon">
                            <span class="icon-technician"></span>
                        </div>
                        <div class="why-choose-one__content">
                            <h3 class="why-choose-one__title"><a href="team.html">Expertly Sourced</a></h3>
                            <p class="why-choose-one__text-2"> Our products are curated by skilled professionals with rigorous training, ensuring top quality for every selection.</p>
                        </div>
                    </div>
                </div>
                <!--Why Choose One Single End-->
                <!--Why Choose One Single Start-->
                <div class="col-xl-4 col-lg-4">
                    <div class="why-choose-one__single">
                        <div class="icon">
                            <span class="icon-flag"></span>
                        </div>
                        <div class="why-choose-one__content">
                            <h3 class="why-choose-one__title"><a href="about.html">Setting Standards</a></h3>
                            <p class="why-choose-one__text-2">We lead in innovation and quality, continuously raising the bar and redefining industry standards.
                            </p>
                        </div>
                    </div>
                </div>
                <!--Why Choose One Single End-->
            </div>
        </div>
    </div>
</section>
<!--Why Choose One End-->

<!--Testimonial One Start-->
<section class="testimonial-one">
    <div class="testimonial-one__shape-1 float-bob-x">
        <img src="{{ asset('assets/frontend/images/shapes/testimonials-one-shape-1.png') }}" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4">
                <div class="testimonial-one__left">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">testimonials</span>
                        <h2 class="section-title__title">What They Say
                            About Our
                            Service</h2>
                    </div>
                    <p class="testimonial-one__text">We provide the hightest- quality <br> service to our
                        customers.
                    </p>
                </div>
            </div>
            <div class="col-xl-8 col-lg-8">
                <div class="testimonial-one__right">
                    <div class="testimonial-one__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='{
                        "loop": true,
                        "autoplay": false,
                        "margin": 30,
                        "nav": true,
                        "dots": false,
                        "smartSpeed": 500,
                        "autoplayTimeout": 10000,
                        "navText": ["<span class=\"far fa-arrow-left\"></span>","<span class=\"far fa-arrow-right\"></span>"],
                        "responsive": {
                            "0": {
                                "items": 1
                            },
                            "768": {
                                "items": 1
                            },
                            "992": {
                                "items": 1
                            },
                            "1200": {
                                "items": 1
                            }
                        }
                    }'>
                        <!--Testimonial One Single Start-->
                        <div class="item">
                            <div class="testimonial-one__single">
                                <div class="testimonial-one__inner">
                                    <div class="testimonial-one__client-img">
                                        <img src="{{ asset('assets/frontend/images/testimonial/testimonial-1-1.jpg') }}" alt="">
                                    </div>
                                    <div class="testimonial-one__client-info">
                                        <p class="testimonial-one__client-text">I must explain to you how all
                                            this mistaken idea of denouncing pleasure and praising pain was born
                                            and I will give you a complete account of the system, and expound
                                            the actual teachings.</p>
                                        <div class="testimonial-one__client-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-one__client-content">
                                    <h3>Robert Joe</h3>
                                    <span>ceo of Alfa firm</span>
                                </div>
                            </div>
                        </div>
                        <!--Testimonial One Single End-->
                        <!--Testimonial One Single Start-->
                        <div class="item">
                            <div class="testimonial-one__single">
                                <div class="testimonial-one__inner">
                                    <div class="testimonial-one__client-img">
                                        <img src="{{ asset('assets/frontend/images/testimonial/testimonial-1-1.jpg') }}" alt="">
                                    </div>
                                    <div class="testimonial-one__client-info">
                                        <p class="testimonial-one__client-text">I must explain to you how all
                                            this mistaken idea of denouncing pleasure and praising pain was born
                                            and I will give you a complete account of the system, and expound
                                            the actual teachings.</p>
                                        <div class="testimonial-one__client-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-one__client-content">
                                    <h3>Robert Joe</h3>
                                    <span>ceo of Alfa firm</span>
                                </div>
                            </div>
                        </div>
                        <!--Testimonial One Single End-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Testimonial One End-->
@endsection
