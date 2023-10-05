@extends('layout.frontend.guest')

@section('content')
<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url(assets/frontend/images/backgrounds/page-header-bg-1.png); background-repeat: no-repeat;">
    </div>
    <div class="container">
        <div class="page-header__inner">
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
                    <p class="about-three__text-1">MGR TRADES is a leading electrical and plumbing wholesaler dedicated to serving professionals and businesses in the construction and maintenance industries. With a wide range of products and a commitment to customer satisfaction, we have become a trusted partner for countless projects</p>
                    <p class="about-three__text-2">We specialize in providing high- quality electrical and plumbing supplies at competitive prices. With years of industry experience, we are proud to be your one-stop destination for all your electrical and plumbing needs. <a href="contact.html">Contact us</a> for more information.</p>
                    <ul class="about-three__points list-unstyled">
                        <li>
                            <div class="icon">
                                <span class="icon-home"></span>
                            </div>
                            <div class="text">
                                <p>Electrical <br> Solutions</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-building"></span>
                            </div>
                            <div class="text">
                                <p>Plumbing <br> Solutions</p>
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
                            <h3>20 +</h3>
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
            <h2 class="section-title__title">What can you expect from us</h2>
            <p class="benefits__text-1">Discover how MGR Treads stand alone from the crowd</p>
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
                            <h4 class="benefits__title">Our Commitment to You</h4>
                            <p class="benefits__text-2">Reliability, Quality, and Innovation.</p>
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
                            <h4 class="benefits__title">Discover Our Difference</h4>
                            <p class="benefits__text-2">Excellence That Sets Us Apart.</p>
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
                            <h4 class="benefits__title">Setting Ourselves Apart</h4>
                            <p class="benefits__text-2">Unqiue and long losting products.</p>
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
                        <p class="counter-one__year"><span>25</span> + Year</p>
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

<!--Contact Page Start-->
<section class="contact-page">
    <div class="container">
        <div class="section-title text-left">
            <span class="section-title__tagline">get in touch</span>
            <h2 class="section-title__title">Drop a Message</h2>
        </div>
        <div class="row">
            <div class="col-xl-7 col-lg-7">
                <div class="contact-page__left">
                    <form autocomplete="off" method="POST" action="{{ route('contact.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="contact-page__input-box">
                                    <input type="text" placeholder="First Name" name="name" required>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="contact-page__input-box">
                                    <input type="text" placeholder="Your Phone Number" name="phone" required>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="contact-page__input-box">
                                    <input type="email" placeholder="Your Email" name="email" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="contact-page__input-box text-message-box">
                                    <textarea name="message" placeholder="Message" required></textarea>
                                </div>
                                <div class="contact-page__btn-box">
                                    <button type="submit" class="thm-btn contact-page__btn">Send Mail Now <span class="fas fa-arrow-right"></span></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-xl-5 col-lg-5">
                <div class="contact-page__right">
                    <div class="contact-page__content">
                        <h3 class="contact-page__title">Our Address</h3>
                        <p class="contact-page__text">If you have any questions or would like to inquire about our products and services, please don't hesitate to contact us. We're here to help you find the right solutions for your projects.</p>
                        <ul class="list-unstyled contact-page__content-info">
                            <li>
                                <div class="icon">
                                    <span class="icon-location"></span>
                                </div>
                                <div class="content">
                                    <h4>Address :</h4>
                                    <p>48, CKP Garden, Kallanai Road, Thiruverumbur, Tiruchirappalli - 620013</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-telephone"></span>
                                </div>
                                <div class="content">
                                    <h4>Phone :</h4>
                                    <p><a href="tel:+919994023234">+91 99940 23234</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-email"></span>
                                </div>
                                <div class="content">
                                    <h4>Email :</h4>
                                    <p><a href="mailto:info@mgrtrades.com">info@mgrtrades.com</a></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Contact Page End-->

<!--Google Map Start-->
<section class="contact-page-google-map">
    <div class="container">
        <div class="contact-page-google-map__inner">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2006587.3375972921!2d78.77207109999999!3d10.8024349!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3baaf3df05853425%3A0x54a8a50a623b2477!2sMGR%20TRADES!5e0!3m2!1sen!2sin!4v1693383742842!5m2!1sen!2sin" height="450" class="google-map__one" allowfullscreen=""></iframe>
        </div>
    </div>
</section>
<!--Google Map End-->
@endsection
