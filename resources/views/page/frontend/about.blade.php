@extends('layout.frontend.guest')

@section('content')
<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url(assets/frondend/images/backgrounds/page-header-bg.png);">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <div class="page-header__shape-1 float-bob-y">
                <img src="{{ asset('assets/frontend/images/shapes/page-header-shape-1.png') }}" alt="">
            </div>
            <h2>About Us</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.html">Home</a></li>
                <li><span>/</span></li>
                <li>About Us</li>
            </ul>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--About Three Start-->
<section class="about-three">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-7">
                <div class="about-three__left">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">our vision for long term</span>
                        <h2 class="section-title__title">About Us Our Company Mission & Vision for Long Term
                        </h2>
                    </div>
                    <p class="about-three__text-1">The passage experienced a surge in popularity during the
                        1960s when Letraset used it on their dry-transfer sheets, and again during the 90s as
                        desktop publishers bundled the text with their software. Today it's seen all around the
                        web; on templates, websites, and stock designs. Use our generator to get your own, or
                        read on for the authoritative history of lorem ipsum.</p>
                    <p class="about-three__text-2">About the ubiquitous lorem ipsum passage. The passage is
                        attributed to an unknown typesetter in the 15th century who is thought to have scrambled
                        parts plan of roof. <a href="contact.html">Contact us</a> for more information.</p>
                    <ul class="about-three__points list-unstyled">
                        <li>
                            <div class="icon">
                                <span class="icon-home"></span>
                            </div>
                            <div class="text">
                                <p>Residential Electrical <br> Solutions</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-building"></span>
                            </div>
                            <div class="text">
                                <p>Residential Electrical <br> Solutions</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-5 col-lg-5">
                <div class="about-three__right">
                    <div class="about-three__img">
                        <img src="{{ asset('assets/frontend/images/resources/about-three-img-1.jpg') }}" alt="">
                        <div class="about-three__experience">
                            <h3>30</h3>
                            <p>Years of <br> experience in <br> this field</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--About Three End-->

<!--Benefits Start-->
<section class="benefits">
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline">Our Benefits</span>
            <h2 class="section-title__title">What is Repairing... Electrical Services For You</h2>
            <p class="benefits__text-1">Discover how professional Roofer approach repair for your home roof make
                fix</p>
        </div>
        <div class="row">
            <!--Benefits Single Start-->
            <div class="col-xl-4 col-lg-4">
                <div class="benefits__single">
                    <div class="benefits__single-inner">
                        <div class="benefits__icon">
                            <span class="icon-family-insurance"></span>
                        </div>
                        <div class="benefits__content">
                            <h4 class="benefits__title">Family Tradition <br> Business</h4>
                            <p class="benefits__text-2">We often find ourselves working side-by-side with home
                                healthcare providers.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--Benefits Single End-->
            <!--Benefits Single Start-->
            <div class="col-xl-4 col-lg-4">
                <div class="benefits__single">
                    <div class="benefits__single-inner">
                        <div class="benefits__icon">
                            <span class="icon-worker"></span>
                        </div>
                        <div class="benefits__content">
                            <h4 class="benefits__title">Professional Trained <br> Workers</h4>
                            <p class="benefits__text-2">We often find ourselves working side-by-side with home
                                healthcare providers.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--Benefits Single End-->
            <!--Benefits Single Start-->
            <div class="col-xl-4 col-lg-4">
                <div class="benefits__single">
                    <div class="benefits__single-inner">
                        <div class="benefits__icon">
                            <span class="icon-satisfaction"></span>
                        </div>
                        <div class="benefits__content">
                            <h4 class="benefits__title">Complete Electrical <br> Warranty</h4>
                            <p class="benefits__text-2">We often find ourselves working side-by-side with home
                                healthcare providers.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--Benefits Single End-->
        </div>
    </div>
</section>
<!--Benefits End-->

<!--Counter One Start-->
<section class="counter-one">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4">
                <div class="counter-one__left">
                    <div class="counter-one__year-box">
                        <p class="counter-one__year"><span>25</span>Year</p>
                        <h3 class="counter-one__year-title">Leading The Way In <span>endreox Projects</span>
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
                                <h3 class="odometer" data-count="450">00</h3><span class="counter-one__letter">+</span>
                                <p class="counter-one__text">Residential
                                    <br> Projects</p>
                            </div>
                        </li>
                        <li class="counter-one__single">
                            <div class="counter-one__icon">
                                <span class="icon-office-building"></span>
                            </div>
                            <div class="counter-one__content-box">
                                <h3 class="odometer" data-count="120">00</h3><span class="counter-one__letter">+</span>
                                <p class="counter-one__text">Commercial
                                    <br> Projects</p>
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
                                    <h3 class="odometer" data-count="2700">00</h3><span class="why-choose-one__letter">+</span>
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
                        <p class="why-choose-one__text">If you need to repair or replace your Plumbing system,
                            call
                            today and talk to one of our Plumbing specialists. They’ll answer all your questions
                            and
                            arrange an appointment at your convenience. They’ll answer all your questions and
                            arrange an appointment at your convenience.</p>
                        <ul class="why-choose-one__points list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="fa fa-arrow-right"></span>
                                </div>
                                <div class="text">
                                    <p>Use best materials and labor in every project.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="fa fa-arrow-right"></span>
                                </div>
                                <div class="text">
                                    <p>Integrity and honesty from top to bottom.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="fa fa-arrow-right"></span>
                                </div>
                                <div class="text">
                                    <p>Affordable and fair prices.</p>
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
                            <h3 class="why-choose-one__title"><a href="about.html">Awarded Company</a></h3>
                            <p class="why-choose-one__text-2">There are many variations passages <br> of Lorem
                                Ipsum
                                available, but the majority have suffered alter.</p>
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
                            <h3 class="why-choose-one__title"><a href="team.html">Trained Workers</a></h3>
                            <p class="why-choose-one__text-2">There are many variations passages <br> of Lorem
                                Ipsum
                                available, but the majority have suffered alter.</p>
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
                            <h3 class="why-choose-one__title"><a href="about.html">Industry Leader</a></h3>
                            <p class="why-choose-one__text-2">There are many variations passages <br> of Lorem
                                Ipsum
                                available, but the majority have suffered alter.</p>
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

<!--Mission One Start-->
<section class="mission-one">
    <div class="container">
        <div class="mission-one__inner">
            <div class="mission-one__img">
                <img src="{{ asset('assets/frontend/images/resources/mission-one-img-1.jpg') }}" alt="">
            </div>
            <div class="mission-one__content-box">
                <div class="mission-one__content">
                    <p class="mission-one__text">Our mission is to provide the best services for your life
                        better Our mission is to provide the best services for your life better</p>
                    <div class="mission-one__sign">
                        <img src="{{ asset('assets/frontend/images/resources/mission-one-sign.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Mission One End-->
@endsection
