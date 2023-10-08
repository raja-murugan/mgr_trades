@extends('layout.frontend.guest')

@section('content')
<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url(assets/frontend/images/backgrounds/page-header-bg-4.png);">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h2>Contact Us</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.html">Home</a></li>
                <li><span>/</span></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </div>
</section>
<!--Page Header End-->

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
                                    <input type="email" placeholder="Your Email" name="email">
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
                                    <p><a href="https://maps.app.goo.gl/RuBSVgUBLdt5a5VU7">48, CKP Garden, Kallanai Road, Thiruverumbur, Tiruchirappalli - 620013</a></p>
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
