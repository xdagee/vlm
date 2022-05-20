@extends('layouts.app')

@section('title', 'welcome')

@section('content')

    <section class="rev_slider_wrapper">
        <div class="rev_slider materialize-slider">
            <ul>
                <li data-transition="fade" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-thumb="{{asset('assets/img/main-banner/chalewote_2017_19.08.2017.webp')}}" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off">
                    <img src="{{asset('assets/img/main-banner/chalewote_2017_19.08.2017.webp')}}" alt="main-banner-slider-image" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                    <div class="tp-caption NotGeneric-Title tp-resizeme" data-x="center" data-y="center" data-voffset="-100" data-fontsize="['70','70','70','45']" data-lineheight="['70','70','70','50']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="800" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 5; white-space: nowrap;">Creative Production Agency
                    </div>
                    <div class="tp-caption tp-resizeme rev-btn" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['100','100','100','100']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-style_hover="cursor:default;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1200" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;">
                        <a href="{{ url('works') }}" class="btn btn-lg  waves-effect waves-light">Watch our Reel</a>
                    </div>
                </li>

                <li data-transition="fade" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-thumb="{{asset('assets/img/main-banner/dipo_sunday_13.05.2018_59.webp')}}" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="Unique Design" data-description="">
                    <img src="{{asset('assets/img/main-banner/dipo_sunday_13.05.2018_59.webp')}}" alt="main-banner-slider-image" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                </li>

                <li data-transition="fade" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-thumb="{{asset('assets/img/main-banner/img_0758.webp')}}" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="Unique Design" data-description="">
                    <img src="{{asset('assets/img/main-banner/img_0758.webp')}}" alt="main-banner-slider-image" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                </li>

                <li data-transition="fade" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-thumb="{{asset('assets/img/main-banner/oshunluxe_photoshoot_05.11.2017_100.webp')}}" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="Unique Design" data-description="">
                    <img src="{{asset('assets/img/main-banner/oshunluxe_photoshoot_05.11.2017_100.webp')}}" alt="main-banner-slider-image" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                </li>

                <li data-transition="fade" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-thumb="{{asset('assets/img/main-banner/vlm_0669.webp')}}" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="Unique Design" data-description="">
                    <img src="{{asset('assets/img/main-banner/vlm_0669.webp')}}" alt="main-banner-slider-image" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                </li>
            </ul>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <div class="text-center mb-80">
                <h3 class="section-title text-uppercase">Our Services</h3>
                <h2> <p class="section-sub">We tell compelling stories, build solid brands, create cutting edge visuals, craft innovative ideas and drive your business.</p> </h2>
            </div>
            <div class="clients-grid gutter">
                <div class="row">
                </div>
            </div>
        </div>
    </section>
    
    <section class="section">
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
                        <img src="{{asset('assets/img/client-logo/arch_xenus.webp')}}" width="176" height="108" class="img-responsive" alt="client-logo">
                        </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="border-box">
                            <a href="#">
                        <img src="{{asset('assets/img/client-logo/business_world.webp')}}" width="176" height="108" class="img-responsive" alt="client-logo">
                        </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="border-box">
                            <a href="#">
                        <img src="{{asset('assets/img/client-logo/dalex.webp')}}" width="176" height="108" class="img-responsive" alt="client-logo">
                        </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="border-box">
                            <a href="#">
                        <img src="{{asset('assets/img/client-logo/harelquin.webp')}}" width="176" height="108" class="img-responsive" alt="client-logo">
                        </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="border-box">
                            <a href="#">
                    <img src="{{asset('assets/img/client-logo/moments.webp')}}" width="176" height="108" class="img-responsive" alt="client-logo">
                    </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="border-box">
                            <a href="#">
                    <img src="{{asset('assets/img/client-logo/nss.webp')}}" width="176" height="108" class="img-responsive" alt="client-logo">
                    </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="border-box">
                            <a href="#">
                    <img src="{{asset('assets/img/client-logo/subah.webp')}}" width="176" height="108" class="img-responsive" alt="client-logo">
                    </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="border-box">
                            <a href="#">
                    <img src="{{asset('assets/img/client-logo/swift.webp')}}" width="176" height="108" class="img-responsive" alt="client-logo">
                    </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <br>
    <br>
    <br>
    <br>
    <br>
    
@endsection