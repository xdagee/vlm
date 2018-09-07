@extends('layouts.app')

@section('title', 'about')

@section('content')
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h2><p>Welcome to Visual Lab Media, an advertising and production company based in Accra, home to a team of talented creative proffessionals applying their knowledge and skills collaboratively to bring life into brands.</p></h2>
                </div>
                <div class="col-md-5">
                    <div class="gallery-thumb">
                        <ul class="slides">
                            <li data-thumb="{{ asset('assets/img/about/5.jpg') }}">
                                <img src="{{ asset('assets/img/about/5.jpg') }}" alt="image">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="text-center mb-80">
                <h2 class="section-title text-uppercase">What Drive Us</h2>
                <h4 class="section-sub">Our mission to drive business for the most demanding brands worldwide by producing captivating and inspiring visual contents to endable them connect with their audience at any level.  </br> </br> Our culture is unique, build on a foundation of excellence, innovation and fearless, on behalf that a balance between work and life necessary for a happy, healthy and motivated envirpment. </br> </br> 
                We care for, respect and invest in each other and our community while trusting in hard work and honesty.</h4>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <img src="{{ asset('assets/img/about/1.jpg')}}" alt="" class="img-responsive">
                </div>
                <div class="col-md-4 col-sm-6">
                    <img src="{{ asset('assets/img/about/2.jpg')}}" alt="" class="img-responsive">
                </div>
                <div class="col-md-4 col-sm-6">
                    <img src="{{ asset('assets/img/about/6.jpg')}}" alt="" class="img-responsive">
                </div>
                <div class="col-md-4 col-sm-6">
                    <img src="{{ asset('assets/img/about/4.jpg')}}" alt="" class="img-responsive">
                </div>
                <div class="col-md-4 col-sm-6">
                    <img src="{{ asset('assets/img/about/9.jpg')}}" alt="" class="img-responsive">
                </div>
                <div class="col-md-4 col-sm-6">
                    <img src="{{ asset('assets/img/about/7.jpg')}}" alt="" class="img-responsive">
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <div class="text-center mb-80">
                <h2 class="section-title text-uppercase">Our Awesome Team</h2>
                <p class="section-sub">Here are our awesome team working together to get the best out of your world.</p>
            </div>

            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="team-wrapper">
                        <div class="team-img">
                            <img src="{{ asset('assets/img/team/Wisdom_Matey_Tetteh.jpg')}}" class="img-responsive" alt="Image">
                        </div>
                        <div class="team-title">
                            <h3>Wisdom Matey Tetteh</h3>
                            <span>CEO &amp; Creative Director</span>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-6">
                    <div class="team-wrapper">
                        <div class="team-img">
                            <img src="{{ asset('assets/img/team/Eunice_Robertson.jpg')}}" class="img-responsive" alt="Image">
                        </div>
                        <div class="team-title">
                            <h3>Eunice Robertson</h3>
                            <span>General Manager</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="team-wrapper">
                        <div class="team-img">
                            <img src="{{ asset('assets/img/team/Samuel_Lamptey.jpg')}}" class="img-responsive" alt="Image">
                        </div>
                        <div class="team-title">
                            <h3>Samuel Lamptey</h3>
                            <span>Production Manager</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="team-wrapper">
                        <div class="team-img">
                            <img src="{{ asset('assets/img/team/Bernice_Saewaa.jpg')}}" class="img-responsive" alt="Image">
                        </div>
                        <div class="team-title">
                            <h3>Bernice Saewaa</h3>
                            <span>Accounts Manager</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="team-wrapper">
                        <div class="team-img">
                            <img src="{{ asset('assets/img/team/Ernest_Bada.jpg')}}" class="img-responsive" alt="Image">
                        </div>
                        <div class="team-title">
                            <h3>Ernest Bada</h3>
                            <span>Director of Photography</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="team-wrapper">
                        <div class="team-img">
                            <img src="{{ asset('assets/img/team/Ruth_Yemoteley.jpg')}}" class="img-responsive" alt="Image">
                        </div>
                        <div class="team-title">
                            <h3>Ruth Yemoteley</h3>
                            <span>Cinematographer</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    
@endsection