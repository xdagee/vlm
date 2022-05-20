@extends('layouts.app')

@section('title', 'services')

@section('content')
    
    {{-- <section class="rev_slider_wrapper">
        <div class="rev_slider materialize-slider">
            <img src="assets/img/services/02.webp" class="img-responsive" alt="service-slider-image" width="100%" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
        </div>
    </section> --}}

    <section class="section-padding">
        <div class="container">
            <div class="text-center mb-80">
                <h2 class="section-title">What we do</h2>
                <p class="section-sub">Building bridges between brands and people.</p>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-md-3">
                    <div class="featured-item border-box hover brand-hover">
                        <div class="icon mb-30">
                            <i class="material-icons brand-icon">
                                <img src="assets/img/services/photography.webp" width="40" height="40" class="img-responsive" alt="services-image-icon">
                            </i>
                        </div>
                        <div class="desc">
                            <h2> Photography </h2>
                            <p> Commercial, Editorial, Events, Portraits, Aerial Photos </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="featured-item border-box hover brand-hover">
                        <div class="icon mb-30">
                            <i class="material-icons brand-icon">
                                <img src="assets/img/services/video_production.webp" width="40" height="40" class="img-responsive" alt="services-image-icon">
                            </i>
                        </div>
                        <div class="desc">
                            <h2> Video Production </h2>
                            <p> Film Production, Corporate videos, Documentaries, Commercials </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="featured-item border-box hover brand-hover">
                        <div class="icon mb-30">
                            <i class="material-icons brand-icon">
                                <img src="assets/img/services/digital_media.webp" width="40" height="40" class="img-responsive" alt="services-image-icon">
                            </i>
                        </div>
                        <div class="desc">
                            <h2> Digital Media </h2>
                            <p> Live Streaming, Web Design, Content Development, Social Media Management </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="featured-item border-box hover brand-hover">
                        <div class="icon mb-30">
                            <i class="material-icons brand-icon">
                                <img src="assets/img/services/advertising.webp" width="40" height="40" class="img-responsive" alt="services-image-icon">
                            </i>
                        </div>
                        <div class="desc">
                            <h2> Advertising </h2>
                            <p>PR Strategy, Brand Consultancy, Graphic Design, Printing</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <div class="text-center mb-80">
                <h3 class="section-title text-uppercase">Our Awesome Clients</h3>
                <p class="section-sub">Here are some of our clients who tasted a feel of our services.</p>
            </div>
            <div class="clients-grid gutter">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="border-box">
                            <a href="#">
                            <img src="assets/img/client-logo/arch_xenus.webp" class="img-responsive" alt="service-clients-image">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="border-box">
                            <a href="#">
                            <img src="assets/img/client-logo/business_world.webp" class="img-responsive" alt="service-clients-image">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="border-box">
                            <a href="#">
                            <img src="assets/img/client-logo/dalex.webp" class="img-responsive" alt="service-clients-image">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="border-box">
                            <a href="#">
                            <img src="assets/img/client-logo/harelquin.webp" class="img-responsive" alt="service-clients-image">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="border-box">
                            <a href="#">
                        <img src="assets/img/client-logo/moments.webp" class="img-responsive" alt="service-clients-image">
                        </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="border-box">
                            <a href="#">
                        <img src="assets/img/client-logo/nss.webp" class="img-responsive" alt="service-clients-image">
                        </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="border-box">
                            <a href="#">
                        <img src="assets/img/client-logo/subah.webp" class="img-responsive" alt="service-clients-image">
                        </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="border-box">
                            <a href="#">
                        <img src="assets/img/client-logo/swift.webp" class="img-responsive" alt="service-clients-image">
                        </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection