@extends('layouts.app')

@section('title', 'contact')

@section('content')
    
    {{-- <section class="rev_slider_wrapper">
        <div class="rev_slider materialize-slider">
            <img src="{{asset('assets/img/contact/02.webp')}}" class="img-responsive" alt="contact-slider-image" width="100%" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
        </div>
    </section> --}}

    <section class="section-padding">
        
        <div class="container">
            <div class="text-center mb-80">
                <h3 class="section-title">
                    @include('flash::message')
                </h3>
            </div>
        </div>

        <div class="container">
            <div class="text-center mb-80">
                <h2 class="section-title">Drop us a line</h2>
                <p class="section-sub">Our doors are open, drop us a line and let's get intouch.</p>
            </div>

            <div class="row">
                @if($errors->any())
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
                <div class="col-md-8">
                    <form name="contact-form" action="{{ route('contact.submit') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="input-field">
                                    <input type="text" name="name" class="validate" id="name" value="{{old ('name')}}" required>
                                    <label for="name">Full Name</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-field">
                                    <input id="phone" type="tel" name="phone" class="validate" value="{{old ('phone') }}" required>
                                    <label for="phone">Phone Number</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-field">
                                    <label class="sr-only" for="email">Email</label>
                                    <input id="email" type="email" name="email" class="validate" value="{{old ('email')}}" required>
                                    <label for="email" data-error="wrong" data-success="right">Email</label>
                                </div>
                            </div>
                        </div>
                        <div class="input-field">
                            <textarea name="message" id="message" class="materialize-textarea" value="{{old ('message')}}" required></textarea>
                            <label for="message">Your Message</label>
                        </div>
                        <button type="submit" name="submit" class="waves-effect waves-light btn submit-button pink mt-30">Send Message</button>
                    </form>
                </div>
                <div class="col-md-4 contact-info">
                    <address>
                        <i class="material-icons brand-color">&#xE55F;</i>
                        <div class="address">
                            <p> 8 Senchi Street, Airport Area, 
                                <br> Accra GH </p>
                        </div>
                        <i class="material-icons brand-color">&#xE61C;</i>
                        <div class="phone">
                            <p>Phone #1: +233265737721 
                                <br> Phone #2: +233570703125</p>
                        </div>
                        <i class="material-icons brand-color">&#xE0E1;</i>
                        <div class="mail">
                            <p>info@visuallabghana.com
                                <br> www.visuallabghana.com</p>
                        </div>
                    </address>
                </div>
            </div>
        </div>
    </section>

@endsection


@section('script')
    <!-- flash message -->
    <script type="text/javascript">
        $(document).ready(function () {
            $('#flash-overlay-modal').modal();
            $('div.alert').not('.alert-important').delay(3500).fadeOut(350);
        });
    </script>
@endsection