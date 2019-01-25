<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Photography + Media Consultancy + Films">
    <meta name="keywords" content="creative, social media, branding, photography, production, advertising, corporate, business, agency, media, film">
    <meta name="author" content="visuallabghana.com">
    {{-- <title> {{ config('app.name') }} </title> --}}

    <title>{{ config('app.name') }} | @yield('title')</title>

    <!-- fav icon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/ico/favicon.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('assets/img/ico/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('assets/img/ico/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('assets/img/ico/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/img/ico/apple-touch-icon-57-precomposed.png') }}">

    <!-- vendor css -->
    <link href="{{ asset('assets/fonts/iconfont/material-icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/fonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/magnific-popup/magnific-popup.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/owl.carousel/assets/owl.carousel.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/owl.carousel/assets/owl.theme.default.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/flexSlider/flexslider.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/materialize/css/materialize.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"  type="text/css">
    <link href="{{ asset('assets/css/shortcodes/shortcodesae52.css?v=5') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('styleae52.css?v=5') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/revolution/css/settings.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/revolution/css/layers.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/revolution/css/navigation.css') }}" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    <!-- fonts -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,700,900' rel='stylesheet' type='text/css'>
</head>

<body id="top" class="has-header-search">
    <div class="top-bar materialize-red">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <ul class="list-inline social-top tt-animate btt">
                        <li><a href="https://www.facebook.com/visuallabghana"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://www.instagram.com/nene_matey"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="https://www.youtube.com/channel/UCwytD1hYEcx6nSnDN1aFKZw"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="https://vimeo.com/visuallabgh"><i class="fa fa-vimeo"></i></a></li>
                        {{-- <li><a href="https://be.net/Visual_lab"><i class="fa fa-behance"></i></a></li> --}}
                    </ul>
                </div>
                <div class="col-md-6 text-right">
                    <ul class="topbar-cta no-margin">
                        <li>
                            <a><i class="material-icons mr-10">&#xE0CD;</i> +233265737721 / +233570703125 </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <header id="header" class="tt-nav nav-border-bottom">
        <div class="header-sticky light-header ">
            <div class="container">
                <!-- <div class="search-wrapper">
                    <div class="search-trigger pull-right">
                        <div class='search-btn'></div>
                        <i class="material-icons">&#xE8B6;</i>
                    </div>
                    <i class="search-close material-icons">&#xE5CD;</i>
                    <div class="search-form-wrapper">
                        <form action="#" class="white-form">
                            <div class="input-field">
                                <input type="text" name="search" id="search">
                                <label for="search" class="">What are you looking for...?</label>
                            </div>
                            <button class="btn pink search-button waves-effect waves-light" type="submit"><i class="material-icons">&#xE8B6;</i></button>
                        </form>
                    </div>
                </div> -->
                <div id="materialize-menu" class="menuzord">
                    <a href="{{ url ('/') }}" class="logo-brand">
                        <img class="retina" src="{{ asset('assets/img/logo.png') }}" alt="company logo" />
                    </a>
                    <ul class="menuzord-menu pull-right">
                        <li class="{{ Request::is('/') ? 'active' : '' }}">
                            <a href="{{ url ('/') }}"> Home </a>
                        </li>
                        <li class="{{ Request::is('works') ? 'active' : '' }}">
                            <a href="{{ url ('works') }}"> Works </a>
                        </li>
                        <li class="{{ Request::is('about') ? 'active' : '' }}">
                            <a href="{{ url ('about') }}"> About </a>
                        </li>
                        <li class="{{ Request::is('services') ? 'active' : '' }}">
                            <a href="{{ url ('services') }}"> Services </a>
                        </li>
                        <li class="{{ Request::is('contact') ? 'active' : '' }}">
                            <a href="{{ url ('contact') }}"> Contact </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>