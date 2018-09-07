@extends('layouts.app')

@section('title', 'works')

@section('content')

    <section class="section-padding">
        <div class="container">
            <div class="text-center mb-50">
                <h2 class="section-title text-uppercase">Our Works</h2>
                <p class="section-sub">Here are some of our awesome works by our team of experties.</p>
            </div>
            <div class="portfolio-container text-center">
                <ul class="portfolio-filter brand-filter">
                    <li class="active waves-effect waves-light" data-group="all">All</li>
                    <li class="waves-effect waves-light" data-group="featured">Featured</li>
                    <li class="waves-effect waves-light" data-group="advertising">Advertising</li>
                    <li class="waves-effect waves-light" data-group="photography">Photography</li>
                    <li class="waves-effect waves-light" data-group="aerial">Aerial</li>
                </ul>

                <div class="portfolio portfolio-with-title col-2 gutter mt-50">

                    <div class="portfolio-item" data-groups='["all", "featured", "photography"]'>
                        <div class="portfolio-wrapper">
                            <div class="thumb">
                                <div class="bg-overlay brand-overlay"></div>
                                <div class="portfolio-slider" data-direction="horizontal">
                                    <ul class="slides">
                                        <li>
                                            <a href="{{asset('assets/img/works/featured/_MG_0845.jpg')}}" title="">
                                                <img src="{{asset('assets/img/works/featured/_MG_0845.jpg')}}" alt="">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{asset('assets/img/works/featured/_MG_7572.jpg')}}" title="">
                                                <img src="{{asset('assets/img/works/featured/_MG_7572.jpg')}}" alt="">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{asset('assets/img/works/featured/Gifty_Oware_Portrait_selected_1.jpg')}}" title="">
                                                <img src="{{asset('assets/img/works/featured/Gifty_Oware_Portrait_selected_1.jpg')}}" alt="">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{asset('assets/img/works/featured/IMG_0758.jpg')}}" title="">
                                                <img src="{{asset('assets/img/works/featured/IMG_0758.jpg')}}" alt="">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{asset('assets/img/works/featured/IMG_5312.jpg')}}" title="">
                                                <img src="{{asset('assets/img/works/featured/IMG_5312.jpg')}}" alt="">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{asset('assets/img/works/featured/Mustapha_2.jpg')}}" title="">
                                                <img src="{{asset('assets/img/works/featured/Mustapha_2.jpg')}}" alt="">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{asset('assets/img/works/featured/NANA_B_CHILDREN.jpg')}}" title="">
                                                <img src="{{asset('assets/img/works/featured/NANA_B_CHILDREN.jpg')}}" alt="">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{asset('assets/img/works/featured/NSS_Tall_Building.jpg')}}" title="">
                                                <img src="{{asset('assets/img/works/featured/NSS_Tall_Building.jpg')}}" alt="">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{asset('assets/img/works/featured/tractor_unmarked.jpg')}}" title="">
                                                <img src="{{asset('assets/img/works/featured/tractor_unmarked.jpg')}}" alt="">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{asset('assets/img/works/featured/VLM_0669.jpg')}}" title="">
                                                <img src="{{asset('assets/img/works/featured/VLM_0669.jpg')}}" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="portfolio-intro">
                                    <div class="action-btn">
                                        <a href="#"> <i class="fa fa-search"></i></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="portfolio-item" data-groups='["all", "advertising"]'>
                        <div class="portfolio-wrapper">
                            <div class="thumb">
                                <div class="bg-overlay brand-overlay"></div>
                                <div class="portfolio-slider" data-direction="horizontal">
                                    <ul class="slides">
                                        <li>
                                            <a href="{{asset('assets/img/works/advertising/Aduanepapa_Monday_Menu.jpg')}}" title="">
                                                <img src="{{asset('assets/img/works/advertising/Aduanepapa_Monday_Menu.jpg')}}" alt="">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{asset('assets/img/works/advertising/Aduanepapa_Wednesday_Menu.jpg')}}" title="">
                                                <img src="{{asset('assets/img/works/advertising/Aduanepapa_Wednesday_Menu.jpg')}}" alt="">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{asset('assets/img/works/advertising/Breakfast_Banner.jpg')}}" title="">
                                                <img src="{{asset('assets/img/works/advertising/Breakfast_Banner.jpg')}}" alt="">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{asset('assets/img/works/advertising/go_fresh_inside_3_fold.jpg')}}" title="">
                                                <img src="{{asset('assets/img/works/advertising/go_fresh_inside_3_fold.jpg')}}" alt="">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{asset('assets/img/works/advertising/NSS_Breakfast_Stand_Sticker.jpg')}}" title="">
                                                <img src="{{asset('assets/img/works/advertising/NSS_Breakfast_Stand_Sticker.jpg')}}" alt="">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{asset('assets/img/works/advertising/NSS_MTN_MOMO_PINCODE.jpg')}}" title="">
                                                <img src="{{asset('assets/img/works/advertising/NSS_MTN_MOMO_PINCODE.jpg')}}" alt="">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{asset('assets/img/works/advertising/stc_car-branding.jpg')}}" title="">
                                                <img src="{{asset('assets/img/works/advertising/stc_car-branding.jpg')}}" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="portfolio-intro">
                                    <div class="action-btn">
                                        <a href="#"> <i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <div class="portfolio-item" data-groups='["all", "photography"]'>
                        <div class="portfolio-wrapper">
                            <div class="thumb">
                                <div class="bg-overlay brand-overlay"></div>
                                <div class="portfolio-slider" data-direction="horizontal">
                                    <ul class="slides">
                                        <li>
                                            <a href="assets/img/works/photography/17th.MTN.EBM-10.jpg" title="">
                                                <img src="assets/img/works/photography/17th.MTN.EBM-10.jpg" alt="">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="assets/img/works/photography/Adwoa_2.jpg" title="">
                                                <img src="assets/img/works/photography/Adwoa_2.jpg" alt="">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="assets/img/works/photography/AX_Project_WGH_VA-8.jpg" title="">
                                                <img src="assets/img/works/photography/AX_Project_WGH_VA-8.jpg" alt="">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="assets/img/works/photography/AX_Project_WGH_VA-12.jpg" title="">
                                                <img src="assets/img/works/photography/AX_Project_WGH_VA-12.jpg" alt="">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="assets/img/works/photography/AX_Project_WGH-Library-5.jpg" title="">
                                                <img src="assets/img/works/photography/AX_Project_WGH-Library-5.jpg" alt="">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="assets/img/works/photography/BENEDICTA_PRE-BIRTHDAY_18.FEB.2018-25.jpg" title="">
                                                <img src="assets/img/works/photography/BENEDICTA_PRE-BIRTHDAY_18.FEB.2018-25.jpg" alt="">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="assets/img/works/photography/BENEDICTA_PRE-BIRTHDAY_18.FEB.2018-30.jpg" title="">
                                                <img src="assets/img/works/photography/BENEDICTA_PRE-BIRTHDAY_18.FEB.2018-30.jpg" alt="">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="assets/img/works/photography/IMG_0725.jpg" title="">
                                                <img src="assets/img/works/photography/IMG_0725.jpg" alt="">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="assets/img/works/photography/IMG_0733.jpg" title="">
                                                <img src="assets/img/works/photography/IMG_0733.jpg" alt="">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="assets/img/works/photography/IMG_0736.jpg" title="">
                                                <img src="assets/img/works/photography/IMG_0736.jpg" alt="">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="assets/img/works/photography/IMG_0744.jpg" title="">
                                                <img src="assets/img/works/photography/IMG_0744.jpg" alt="">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="assets/img/works/photography/IMG_0751.jpg" title="">
                                                <img src="assets/img/works/photography/IMG_0751.jpg" alt="">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="assets/img/works/photography/IMG_0780.jpg" title="">
                                                <img src="assets/img/works/photography/IMG_0780.jpg" alt="">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="assets/img/works/photography/jennifer_retouch_-2016_(17_of_1).jpg" title="">
                                                <img src="assets/img/works/photography/jennifer_retouch_-2016_(17_of_1).jpg" alt="">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="assets/img/works/photography/NANA_B_EXT-CONGRESS_17.DEC.2017-9.jpg" title="">
                                                <img src="assets/img/works/photography/NANA_B_EXT-CONGRESS_17.DEC.2017-9.jpg" alt="">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="assets/img/works/photography/NSS_CAPACITY-BUILDING_ACCRA-DAY_1-‎‎30.8.‎2017-62.jpg" title="">
                                                <img src="assets/img/works/photography/NSS_CAPACITY-BUILDING_ACCRA-DAY_1-‎‎30.8.‎2017-62.jpg" alt="">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="assets/img/works/photography/NSS_CAPACITY-BUILDING_ACCRA-DAY-1-‎‎30.8.‎2017-61.jpg" title="">
                                                <img src="assets/img/works/photography/NSS_CAPACITY-BUILDING_ACCRA-DAY-1-‎‎30.8.‎2017-61.jpg" alt="">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="assets/img/works/photography/NSS_PLOUGHING.jpg" title="">
                                                <img src="assets/img/works/photography/NSS_PLOUGHING.jpg" alt="">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="assets/img/works/photography/NSS-SA_15.11.2016-75.jpg" title="">
                                                <img src="assets/img/works/photography/NSS-SA_15.11.2016-75.jpg" alt="">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="assets/img/works/photography/OSHUNLUXE_PHOTOSHOOT_05.11.‎2017-120.jpg" title="">
                                                <img src="assets/img/works/photography/OSHUNLUXE_PHOTOSHOOT_05.11.‎2017-120.jpg" alt="">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="assets/img/works/photography/OSHUNLUXE_PHOTOSHOOT_05.11.‎2017-123.jpg" title="">
                                                <img src="assets/img/works/photography/OSHUNLUXE_PHOTOSHOOT_05.11.‎2017-123.jpg" alt="">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="assets/img/works/photography/OSHUNLUXE_PHOTOSHOOT_05.11.‎2017-135.jpg" title="">
                                                <img src="assets/img/works/photography/OSHUNLUXE_PHOTOSHOOT_05.11.‎2017-135.jpg" alt="">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="assets/img/works/photography/OSHUNLUXE_PHOTOSHOOT_05.11.‎2017-210.jpg" title="">
                                                <img src="assets/img/works/photography/OSHUNLUXE_PHOTOSHOOT_05.11.‎2017-210.jpg" alt="">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="assets/img/works/photography/OSHUNLUXE_PHOTOSHOOT_05.11.‎2017-232.jpg" title="">
                                                <img src="assets/img/works/photography/OSHUNLUXE_PHOTOSHOOT_05.11.‎2017-232.jpg" alt="">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="assets/img/works/photography/Suit_and_Calabash.jpg" title="">
                                                <img src="assets/img/works/photography/Suit_and_Calabash.jpg" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="portfolio-intro">
                                    <div class="action-btn">
                                        <a href="#"> <i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <div class="portfolio-item" data-groups='["all", "aerial"]'>
                        <div class="portfolio-wrapper">
                            <div class="thumb">
                                <div class="bg-overlay brand-overlay"></div>
                                <div class="portfolio-slider" data-direction="horizontal">
                                    <ul class="slides">
                                        <li>
                                            <a href="{{asset('assets/img/works/aerial/ADUANEPAPA_BRAND_FAIR_23.DEC.2017-195.jpg')}}" title="">
                                                <img src="{{asset('assets/img/works/aerial/ADUANEPAPA_BRAND_FAIR_23.DEC.2017-195.jpg')}}" alt="">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{asset('assets/img/works/aerial/DJI_0031_A.jpg')}}" title="">
                                                <img src="{{asset('assets/img/works/aerial/DJI_0031_A.jpg')}}" alt="">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{asset('assets/img/works/aerial/DJI_0053_A.jpg')}}" title="">
                                                <img src="{{asset('assets/img/works/aerial/DJI_0053_A.jpg')}}" alt="">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{asset('assets/img/works/aerial/DJI_0119.jpg')}}" title="">
                                                <img src="{{asset('assets/img/works/aerial/DJI_0119.jpg')}}" alt="">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{asset('assets/img/works/aerial/DJI_0125.jpg')}}" title="">
                                                <img src="{{asset('assets/img/works/aerial/DJI_0125.jpg')}}" alt="">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{asset('assets/img/works/aerial/DJI_0143.jpg')}}" title="">
                                                <img src="{{asset('assets/img/works/aerial/DJI_0143.jpg')}}" alt="">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{asset('assets/img/works/aerial/NKRUMAH_CIRCLE_2_marked.jpg')}}" title="">
                                                <img src="{{asset('assets/img/works/aerial/NKRUMAH_CIRCLE_2_marked.jpg')}}" alt="">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{asset('assets/img/works/aerial/villagio_1.jpg')}}" title="">
                                                <img src="{{asset('assets/img/works/aerial/villagio_1.jpg')}}" alt="">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{asset('assets/img/works/aerial/VILLAGIO_BEAUTIFUL.jpg')}}" title="">
                                                <img src="{{asset('assets/img/works/aerial/VILLAGIO_BEAUTIFUL.jpg')}}" alt="">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{asset('assets/img/works/aerial/VLM_Jametown-lighthouse.jpg')}}" title="">
                                                <img src="{{asset('assets/img/works/aerial/VLM_Jametown-lighthouse.jpg')}}" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="portfolio-intro">
                                    <div class="action-btn">
                                        <a href="#"> <i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection