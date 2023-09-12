<header class="main-header">
    <nav class="main-menu">
        <div class="main-menu__wrapper">
            <div class="main-menu__wrapper-inner">
                <div class="main-menu__left">
                    <div class="main-menu__logo">
                        <a href="{{ route('index.home') }}"><img src="{{ asset('assets/frontend/images/resources/logo-1.png') }}" alt="" width="100"></a>
                    </div>
                    <div class="main-menu__main-menu-box">
                        <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                        <ul class="main-menu__list">
                            <li class="{{ Route::is('index.home') ? 'active current' : '' }}">
                                <a href="{{ route('index.home') }}">Home</a>
                            </li>
                            <li class="{{ Route::is('about') ? 'active current' : '' }}">
                                <a href="{{ route('about') }}">About Us</a>
                            </li>
                            <li class="{{ Route::is('product') ? 'active current' : '' }}">
                                <a href="{{ route('product') }}">Products</a>
                                <ul>
                                    @foreach ($category as $categorys)
                                    <li class="dropdown">
                                        <a href="javascript::void(o);">{{ $categorys->session->name }} - {{ $categorys->name }}</a>
                                        <ul>
                                            <li><a href="index.html">Header One</a></li>
                                            <li><a href="index2.html">Header Two</a></li>
                                            <li><a href="index3.html">Header Three</a></li>
                                        </ul>
                                    </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="{{ Route::is('brand', 'product.details') ? 'active current' : '' }}">
                                <a href="{{ route('brand') }}">Brand</a>
                            </li>
                            <li class="{{ Route::is('contact') ? 'active current' : '' }}">
                                <a href="{{ route('contact') }}">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="main-menu__right">
                    <div class="main-menu__call-btn-box">
                        <div class="main-menu__call">
                            <div class="main-menu__call-icon">
                                <span class="icon-telephone"></span>
                            </div>
                            <div class="main-menu__call-number">
                                <p><a href="tel:+919994023234">+91 99940 23234</a></p>
                            </div>
                        </div>
                        <div class="main-menu__btn-box">
                            <a href="https://api.whatsapp.com/send/?phone=%2B919994023234" target="_blank" class="thm-btn main-menu__btn">Chat With Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>

<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div>
</div>
