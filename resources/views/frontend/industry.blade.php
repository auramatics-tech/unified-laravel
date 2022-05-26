@extends('layouts.master')
@section('content')
   <!-- Main Content -->
   <main>
        <!-- Inner Hero Section -->
        {{-- <section class="inner-hero-section" style="background-image: url({{url('/')}}/theme/frontend/assets/images/app-bg.png);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-uppercase">Applications</h1>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- End Inner Hero Section -->

        <!-- Applications Section -->
        <section class="inner-hero-section no-overlay no-image">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-uppercase text-primary">Market Segments</h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="section about-section-descp">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>Unified has a product range from Electro-Mechanical, Passive components, Power modules, RF
                            Microwave components, Interconnect, and cables, Wireless and Displays. Our product basket
                            covers a wide range of applications from segments like Defence, Aerospace, Automotive,
                            Industrial, Railways, Medical, Telecom, and various IoT applications.</p>
                        <p>We deal with electronic components across industries, with the various top brand and globally
                            recognized principles and customers. Our application by industry limitless – Unified can
                            help
                            with all your needs no matter the application. To know more within your range and industry,
                            request a quote through the website.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Applications Section -->
        <section class="section bg-muted">
            <div class="container">
                <div class="row key_sagment">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                        <div class="bloc">
                            <div><div><h3 class="title">Defense & Aerospace</h3><div>
                                <p>Unified deals in certified parts made to withstand harsh conditions</p>
                                <a class="btn-home" href="{{url('/')}}/industry/defense">Read more</a>
                                </div>
                                </div>
                            </div>
                            <img src="{{asset('assets/frontend/assets/images/ms-defense-new.png')}}" alt="Defense" >
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                        <div class="bloc">
                            <div><div><h3 class="title">Industrial & power</h3><div>
                                <p>Certified distributor of essential semiconductor products in Industrial and Power segments</p>
                                <a class="btn-home" href="{{url('/')}}/industry/industrial">Read more</a>
                                </div>
                                </div>
                            </div>
                            <img src="{{asset('assets/frontend/assets/images/ms-industry-new.png')}}" alt="Defense" >
                        </div>
                    </div>	
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                        <div class="bloc">
                            <div><div><h3 class="title">Automotive</h3><div>
                                <p>Latest and best-performing products for Automotive applications</p>
                                <a class="btn-home" href="{{url('/')}}/industry/automotive">Read more</a>
                                </div>
                                </div>
                            </div>
                            <img src="{{asset('assets/frontend/assets/images/ms-automotive-new.png')}}" alt="Defense" >
                        </div>
                    </div>	
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                        <div class="bloc">
                            <div><div><h3 class="title">Railway</h3><div>
                                <p>With Unified, you have the advantage of parts and expertise in the transportation segments</p>
                                <a class="btn-home" href="{{url('/')}}/industry/railways">Read more</a>
                                </div>
                                </div>
                            </div>
                            <img src="{{asset('assets/frontend/assets/images/ms-railways-new.png')}}" alt="Defense" >
                        </div>
                    </div>	
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                        <div class="bloc">
                            <div><div><h3 class="title">Medical</h3><div>
                                <p>We uphold innovation and accurateness in parts for all medical applications</p>
                                <a class="btn-home" href="{{url('/')}}/industry/medical">Read more</a>
                                </div>
                                </div>
                            </div>
                            <img src="{{asset('assets/frontend/assets/images/ms-new-medical.png')}}" alt="Defense" >
                        </div>
                    </div>	
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                        <div class="bloc">
                            <div><div><h3 class="title">Telecom</h3><div>
                                <p>Trust Unified for all your advance semiconductor requirements in Telecommunications</p>
                                <a class="btn-home" href="{{url('/')}}/industry/telecom-industry">Read more</a>
                                </div>
                                </div>
                            </div>
                            <img src="{{asset('assets/frontend/assets/images/ms-telecom-new.png')}}" alt="Defense" >
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main>
    <!-- End Content -->

@endsection