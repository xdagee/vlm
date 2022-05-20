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
                                            <a href="{{asset('assets/img/works/featured/_MG_0845.webp')}}" title="">
                                                <img src="{{asset('assets/img/works/featured/_MG_0845.webp')}}" class="img-responsive" alt="works-featured-image">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{asset('assets/img/works/featured/_MG_7572.webp')}}" title="">
                                                <img src="{{asset('assets/img/works/featured/_MG_7572.webp')}}" class="img-responsive" alt="works-featured-image">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{asset('assets/img/works/featured/Gifty_Oware_Portrait_selected_1.webp')}}" title="">
                                                <img src="{{asset('assets/img/works/featured/Gifty_Oware_Portrait_selected_1.webp')}}" class="img-responsive" alt="Gifty_Oware_Portrait_selected_1">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{asset('assets/img/works/featured/IMG_0758.webp')}}" title="">
                                                <img src="{{asset('assets/img/works/featured/IMG_0758.webp')}}" class="img-responsive" alt="works-featured-image">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{asset('assets/img/works/featured/IMG_5312.webp')}}" title="">
                                                <img src="{{asset('assets/img/works/featured/IMG_5312.webp')}}" class="img-responsive" alt="works-featured-image">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{asset('assets/img/works/featured/Mustapha_2.webp')}}" title="">
                                                <img src="{{asset('assets/img/works/featured/Mustapha_2.webp')}}" class="img-responsive" alt="Mustapha_2">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{asset('assets/img/works/featured/NANA_B_CHILDREN.webp')}}" title="">
                                                <img src="{{asset('assets/img/works/featured/NANA_B_CHILDREN.webp')}}" class="img-responsive" alt="NANA_B_CHILDREN">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{asset('assets/img/works/featured/NSS_Tall_Building.webp')}}" title="">
                                                <img src="{{asset('assets/img/works/featured/NSS_Tall_Building.webp')}}" class="img-responsive" alt="NSS_Tall_Building">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{asset('assets/img/works/featured/tractor_unmarked.webp')}}" title="">
                                                <img src="{{asset('assets/img/works/featured/tractor_unmarked.webp')}}" class="img-responsive" alt="tractor_unmarked">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{asset('assets/img/works/featured/VLM_0669.webp')}}" title="">
                                                <img src="{{asset('assets/img/works/featured/VLM_0669.webp')}}" class="img-responsive" alt="works-featured-image">
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
                                            <a href="{{asset('assets/img/works/advertising/Aduanepapa_Monday_Menu.webp')}}" title="">
                                                <img src="{{asset('assets/img/works/advertising/Aduanepapa_Monday_Menu.webp')}}" class="img-responsive" alt="Aduanepapa_Monday_Menu">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{asset('assets/img/works/advertising/Aduanepapa_Wednesday_Menu.webp')}}" title="">
                                                <img src="{{asset('assets/img/works/advertising/Aduanepapa_Wednesday_Menu.webp')}}" class="img-responsive" alt="Aduanepapa_Wednesday_Menu">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{asset('assets/img/works/advertising/Breakfast_Banner.webp')}}" title="">
                                                <img src="{{asset('assets/img/works/advertising/Breakfast_Banner.webp')}}" class="img-responsive" alt="Breakfast_Banner">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{asset('assets/img/works/advertising/go_fresh_inside_3_fold.webp')}}" title="">
                                                <img src="{{asset('assets/img/works/advertising/go_fresh_inside_3_fold.webp')}}" class="img-responsive" alt="go_fresh_inside_3_fold">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{asset('assets/img/works/advertising/NSS_Breakfast_Stand_Sticker.webp')}}" title="">
                                                <img src="{{asset('assets/img/works/advertising/NSS_Breakfast_Stand_Sticker.webp')}}" class="img-responsive" alt="NSS_Breakfast_Stand_Sticker">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{asset('assets/img/works/advertising/NSS_MTN_MOMO_PINCODE.webp')}}" title="">
                                                <img src="{{asset('assets/img/works/advertising/NSS_MTN_MOMO_PINCODE.webp')}}" class="img-responsive" alt="NSS_MTN_MOMO_PINCODE">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{asset('assets/img/works/advertising/stc_car-branding.webp')}}" title="">
                                                <img src="{{asset('assets/img/works/advertising/stc_car-branding.webp')}}" class="img-responsive" alt="stc_car">
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
                                            <a href="assets/img/works/photography/17th.MTN.EBM-10.webp" title="">
                                                <img src="assets/img/works/photography/17th.MTN.EBM-10.webp" class="img-responsive" alt="17th.MTN">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="assets/img/works/photography/Adwoa_2.webp" title="">
                                                <img src="assets/img/works/photography/Adwoa_2.webp" class="img-responsive" alt="Adwoa_2">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="assets/img/works/photography/AX_Project_WGH_VA-8.webp" title="">
                                                <img src="assets/img/works/photography/AX_Project_WGH_VA-8.webp" class="img-responsive" alt="AX_Project_WGH">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="assets/img/works/photography/AX_Project_WGH_VA-12.webp" title="">
                                                <img src="assets/img/works/photography/AX_Project_WGH_VA-12.webp" class="img-responsive" alt="AX_Project_WGH">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="assets/img/works/photography/AX_Project_WGH-Library-5.webp" title="">
                                                <img src="assets/img/works/photography/AX_Project_WGH-Library-5.webp" class="img-responsive" alt="AX_Project_WGH">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="assets/img/works/photography/BENEDICTA_PRE-BIRTHDAY_18.FEB.2018-25.webp" title="">
                                                <img src="assets/img/works/photography/BENEDICTA_PRE-BIRTHDAY_18.FEB.2018-25.webp" class="img-responsive" alt="BENEDICTA_PRE-BIRTHDAY">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="assets/img/works/photography/BENEDICTA_PRE-BIRTHDAY_18.FEB.2018-30.webp" title="">
                                                <img src="assets/img/works/photography/BENEDICTA_PRE-BIRTHDAY_18.FEB.2018-30.webp" class="img-responsive" alt="BENEDICTA_PRE-BIRTHDAY">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="assets/img/works/photography/IMG_0725.webp" title="">
                                                <img src="assets/img/works/photography/IMG_0725.webp" class="img-responsive" alt="works-featured-image">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="assets/img/works/photography/IMG_0733.webp" title="">
                                                <img src="assets/img/works/photography/IMG_0733.webp" class="img-responsive" alt="works-featured-image">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="assets/img/works/photography/IMG_0736.webp" title="">
                                                <img src="assets/img/works/photography/IMG_0736.webp" class="img-responsive" alt="works-featured-image">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="assets/img/works/photography/IMG_0744.webp" title="">
                                                <img src="assets/img/works/photography/IMG_0744.webp" class="img-responsive" alt="works-featured-image">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="assets/img/works/photography/IMG_0751.webp" title="">
                                                <img src="assets/img/works/photography/IMG_0751.webp" class="img-responsive" alt="works-featured-image">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="assets/img/works/photography/IMG_0780.webp" title="">
                                                <img src="assets/img/works/photography/IMG_0780.webp" class="img-responsive" alt="works-featured-image">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="assets/img/works/photography/jennifer_retouch_-2016_(17_of_1).webp" title="">
                                                <img src="assets/img/works/photography/jennifer_retouch_-2016_(17_of_1).webp" class="img-responsive" alt="jennifer_retouch_">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="assets/img/works/photography/NANA_B_EXT-CONGRESS_17.DEC.2017-9.webp" title="">
                                                <img src="assets/img/works/photography/NANA_B_EXT-CONGRESS_17.DEC.2017-9.webp" class="img-responsive" alt="NANA_B_EXT-CONGRESS">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="assets/img/works/photography/NSS_CAPACITY_BUILDING_ACCRA_DAY_1_30.8.2017-62.webp" title="">
                                                <img src="assets/img/works/photography/NSS_CAPACITY_BUILDING_ACCRA_DAY_1_30.8.2017-62.webp" class="img-responsive" alt="NSS_CAPACITY_BUILDING_ACCRA_DAY_1_30">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="assets/img/works/photography/NSS_CAPACITY_BUILDING_ACCRA_DAY_1_30.8.2017-61.webp" title="">
                                                <img src="assets/img/works/photography/NSS_CAPACITY_BUILDING_ACCRA_DAY_1_30.8.2017-61.webp" class="img-responsive" alt="NSS_CAPACITY_BUILDING_ACCRA_DAY_1_30">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="assets/img/works/photography/NSS_PLOUGHING.webp" title="">
                                                <img src="assets/img/works/photography/NSS_PLOUGHING.webp" class="img-responsive" alt="NSS_PLOUGHING">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="assets/img/works/photography/NSS-SA_15.11.2016-75.webp" title="">
                                                <img src="assets/img/works/photography/NSS-SA_15.11.2016-75.webp" class="img-responsive" alt="NSS-SA">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{asset('assets/img/works/photography/OSHUNLUXE_PHOTOSHOOT_05.11.2017-120.webp')}}" title="">
                                                <img src="{{asset('assets/img/works/photography/OSHUNLUXE_PHOTOSHOOT_05.11.2017-120.webp')}}" class="img-responsive" alt="OSHUNLUXE_PHOTOSHOOT_05">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{asset('assets/img/works/photography/OSHUNLUXE_PHOTOSHOOT_05.11.2017-123.webp')}}" title="">
                                                <img src="{{asset('assets/img/works/photography/OSHUNLUXE_PHOTOSHOOT_05.11.2017-123.webp')}}" class="img-responsive" alt="OSHUNLUXE_PHOTOSHOOT_05">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{asset('assets/img/works/photography/OSHUNLUXE_PHOTOSHOOT_05.11.2017-135.webp')}}" title="">
                                                <img src="{{asset('assets/img/works/photography/OSHUNLUXE_PHOTOSHOOT_05.11.2017-135.webp')}}" class="img-responsive" alt="OSHUNLUXE_PHOTOSHOOT_05">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{asset('assets/img/works/photography/OSHUNLUXE_PHOTOSHOOT_05.11.2017-210.webp')}}" title="">
                                                <img src="{{asset('assets/img/works/photography/OSHUNLUXE_PHOTOSHOOT_05.11.2017-210.webp')}}" class="img-responsive" alt="OSHUNLUXE_PHOTOSHOOT_05">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{asset('assets/img/works/photography/OSHUNLUXE_PHOTOSHOOT_05.11.2017-232.webp')}}" title="">
                                                <img src="{{asset('assets/img/works/photography/OSHUNLUXE_PHOTOSHOOT_05.11.2017-232.webp')}}" class="img-responsive" alt="OSHUNLUXE_PHOTOSHOOT_05">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="assets/img/works/photography/Suit_and_Calabash.webp" title="">
                                                <img src="assets/img/works/photography/Suit_and_Calabash.webp" class="img-responsive" alt="Suit_and_Calabash-image">
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
                                            <a href="{{asset('assets/img/works/aerial/ADUANEPAPA_BRAND_FAIR_23.DEC.2017-195.webp')}}" title="">
                                                <img src="{{asset('assets/img/works/aerial/ADUANEPAPA_BRAND_FAIR_23.DEC.2017-195.webp')}}" class="img-responsive" alt="ADUANEPAPA_BRAND_FAIR_23">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{asset('assets/img/works/aerial/DJI_0031_A.webp')}}" title="">
                                                <img src="{{asset('assets/img/works/aerial/DJI_0031_A.webp')}}" class="img-responsive" alt="DJI_0031_A">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{asset('assets/img/works/aerial/DJI_0053_A.webp')}}" title="">
                                                <img src="{{asset('assets/img/works/aerial/DJI_0053_A.webp')}}" class="img-responsive" alt="DJI_0053_A">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{asset('assets/img/works/aerial/DJI_0119.webp')}}" title="">
                                                <img src="{{asset('assets/img/works/aerial/DJI_0119.webp')}}" class="img-responsive" alt="DJI_0119">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{asset('assets/img/works/aerial/DJI_0125.webp')}}" title="">
                                                <img src="{{asset('assets/img/works/aerial/DJI_0125.webp')}}" class="img-responsive" alt="DJI_0125">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{asset('assets/img/works/aerial/DJI_0143.webp')}}" title="">
                                                <img src="{{asset('assets/img/works/aerial/DJI_0143.webp')}}" class="img-responsive" alt="DJI_0143">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{asset('assets/img/works/aerial/NKRUMAH_CIRCLE_2_marked.webp')}}" title="">
                                                <img src="{{asset('assets/img/works/aerial/NKRUMAH_CIRCLE_2_marked.webp')}}" class="img-responsive" alt="NKRUMAH_CIRCLE_2_marked">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{asset('assets/img/works/aerial/villagio_1.webp')}}" title="">
                                                <img src="{{asset('assets/img/works/aerial/villagio_1.webp')}}" class="img-responsive" alt="villagio_1">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{asset('assets/img/works/aerial/VILLAGIO_BEAUTIFUL.webp')}}" title="">
                                                <img src="{{asset('assets/img/works/aerial/VILLAGIO_BEAUTIFUL.webp')}}" class="img-responsive" alt="VILLAGIO_BEAUTIFUL">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{asset('assets/img/works/aerial/VLM_Jametown-lighthouse.webp')}}" title="">
                                                <img src="{{asset('assets/img/works/aerial/VLM_Jametown-lighthouse.webp')}}" class="img-responsive" alt="VLM_Jametown_lighthouse">
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