@extends('frontend.main_master')

@section('main')

    <!-- banner-area -->
    @include('frontend.home_all.home_slide')
    <!-- banner-area-end -->

    <!-- about-area -->
    @include('frontend.home_all.home_about')
    <!-- about-area-end -->

    <!-- portfolio-area -->
    @include('frontend.home_all.portfolio')
    <!-- portfolio-area-end -->

    <!-- partner-area -->
    <section class="partner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <ul class="partner__logo__wrap">
                        <li>
                            <img class="light" src="{{ asset('frontend/assets/img/icons/partner_light01.png') }}" alt="">
                            <img class="dark" src="{{ asset('frontend/assets/img/icons/partner_01.png') }}" alt="">
                        </li>
                        <li>
                            <img class="light" src="{{ asset('frontend/assets/img/icons/partner_light02.png') }}" alt="">
                            <img class="dark" src="{{ asset('frontend/assets/img/icons/partner_02.png') }}" alt="">
                        </li>
                        <li>
                            <img class="light" src="{{ asset('frontend/assets/img/icons/partner_light03.png') }}" alt="">
                            <img class="dark" src="{{ asset('frontend/assets/img/icons/partner_03.png') }}" alt="">
                        </li>
                        <li>
                            <img class="light" src="{{ asset('frontend/assets/img/icons/partner_light04.png') }}" alt="">
                            <img class="dark" src="{{ asset('frontend/assets/img/icons/partner_04.png') }}" alt="">
                        </li>
                        <li>
                            <img class="light" src="{{ asset('frontend/assets/img/icons/partner_light05.png') }}" alt="">
                            <img class="dark" src="{{ asset('frontend/assets/img/icons/partner_05.png') }}" alt="">
                        </li>
                        <li>
                            <img class="light" src="{{ asset('frontend/assets/img/icons/partner_light06.png') }}" alt="">
                            <img class="dark" src="{{ asset('frontend/assets/img/icons/partner_06.png') }}" alt="">
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="partner__content">
                        <div class="section__title">
                            <span class="sub-title">05 - partners</span>
                            <h2 class="title">I proud to have collaborated with some awesome companies</h2>
                        </div>
                        <p>I'm a bit of a digital product junky. Over the years, I've used hundreds of web and mobile apps in different industries and verticals. Eventually, I decided that it would be a fun challenge to try designing and building my own.</p>
                        <a href="contact.html" class="btn">Start a conversation</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- partner-area-end -->

    <!-- testimonial-area -->
    <section class="testimonial">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 order-0 order-lg-2">
                    <ul class="testimonial__avatar__img">
                        <li><img src="{{ asset('frontend/assets/img/images/testi_img01.png') }}" alt=""></li>
                        <li><img src="{{ asset('frontend/assets/img/images/testi_img02.png') }}" alt=""></li>
                        <li><img src="{{ asset('frontend/assets/img/images/testi_img03.png') }}" alt=""></li>
                        <li><img src="{{ asset('frontend/assets/img/images/testi_img04.png') }}" alt=""></li>
                        <li><img src="{{ asset('frontend/assets/img/images/testi_img05.png') }}" alt=""></li>
                        <li><img src="{{ asset('frontend/assets/img/images/testi_img06.png') }}" alt=""></li>
                        <li><img src="{{ asset('frontend/assets/img/images/testi_img07.png') }}" alt=""></li>
                    </ul>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="testimonial__wrap">
                        <div class="section__title">
                            <span class="sub-title">06 - Client Feedback</span>
                            <h2 class="title">Happy clients feedback</h2>
                        </div>
                        <div class="testimonial__active">
                            <div class="testimonial__item">
                                <div class="testimonial__icon">
                                    <i class="fas fa-quote-left"></i>
                                </div>
                                <div class="testimonial__content">
                                    <p>We are motivated by the satisfaction of our clients. Put your trust in us &share in our H.Spond Asset Management is made up of a team of expert, committed and experienced people with a passion for financial markets. Our goal is to achieve continuous.</p>
                                    <div class="testimonial__avatar">
                                        <span>Rasalina De Wiliamson</span>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial__item">
                                <div class="testimonial__icon">
                                    <i class="fas fa-quote-left"></i>
                                </div>
                                <div class="testimonial__content">
                                    <p>We are motivated by the satisfaction of our clients. Put your trust in us &share in our H.Spond Asset Management is made up of a team of expert, committed and experienced people with a passion for financial markets. Our goal is to achieve continuous.</p>
                                    <div class="testimonial__avatar">
                                        <span>Rasalina De Wiliamson</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial__arrow"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial-area-end -->

    <!-- blog-area -->
    @include('frontend.home_all.home_blog')
    <!-- blog-area-end -->

    <!-- contact-area -->
    <section class="homeContact">
        <div class="container">
            <div class="homeContact__wrap">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section__title">
                            <span class="sub-title">07 - Say hello</span>
                            <h2 class="title">Any questions? Feel free <br> to contact</h2>
                        </div>
                        <div class="homeContact__content">
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                            <h2 class="mail"><a href="mailto:Info@webmail.com">Info@webmail.com</a></h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="homeContact__form">
                            <form action="#">
                                <input type="text" placeholder="Enter name*">
                                <input type="email" placeholder="Enter mail*">
                                <input type="number" placeholder="Enter number*">
                                <textarea name="message" placeholder="Enter Massage*"></textarea>
                                <button type="submit">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-area-end -->

@endsection
