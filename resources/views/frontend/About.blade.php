@extends('layouts.master')
@section('content')
<main>
        <!-- Inner Hero Section -->
        <section class="inner-hero-section no-image no-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-uppercase text-primary">ABOUT US</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Inner Hero Section -->

        <!-- Locations Section -->
        <section class="section about-section-descp">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>Unified, a customer-focused top electronic components distributor was started in the Year
                            2000 by a group of Technocrats. It is now a familiar and popular name in the Indian Defence,
                            Aerospace and Telecom segment. Since our inception, we have grown rapidly to become a
                            trusted partner for the D&A Design and production houses in India. We market Industrial, MIL
                            and Space qualified Active & Passive components to all the major industries, and our
                            products range from RF Components, Electro-Mechanical Components, Passive Components, Power
                            Modules, to Interconnect Components and Wireless Products. We cater to all your industry
                            needs, with a strong presence and contracts in defence, space, industrial, automotive, and
                            many other segments.</p>
                        <p>Our philosophy, Committed to Excellence, has guided us through the years and helped us grow
                            into an industry-wide, ever-present organization, with top principles and brands. Our vision
                            is to become a global leader in the industry and to provide Hi-tech solutions and products,
                            with a consistent focus on our customers and becoming a one-stop solution for all. We
                            believe in our motto and the success it has bought us – United We Grow!</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="about-slider-container swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="masonry modalGallery">
                                        <div class="div-masonary horizontal">
                                            <div class="image-wrap overflow-hidden border-radious-5">
                                                <img src="{{asset('assets/frontend/assets/images/nab1.png')}}" alt="About us">
                                            </div>
                                        </div>
                                        <div class="div-masonary horizontal">
                                            <div class="image-wrap overflow-hidden border-radious-5">
                                                <img src="{{asset('assets/frontend/assets/images/nab2.png')}}" alt="About us">
                                            </div>
                                        </div>
                                        <div class="div-masonary vertical">
                                            <div class="image-wrap overflow-hidden border-radious-5">
                                                <img src="{{asset('assets/frontend/assets/images/nab3.png')}}" alt="About us">
                                            </div>
                                        </div>
                                        <div class="div-masonary horizontal">
                                            <div class="image-wrap overflow-hidden border-radious-5">
                                                <img src="{{asset('assets/frontend/assets/images/nab4.png')}}" alt="About us">
                                            </div>
                                        </div>
                                        <div class="div-masonary horizontal">
                                            <div class="image-wrap overflow-hidden border-radious-5">
                                                <img src="{{asset('assets/frontend/assets/images/nab5.png')}}" alt="About us">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="masonry modalGallery">
                                        <div class="div-masonary horizontal">
                                            <div class="image-wrap overflow-hidden border-radious-5">
                                                <img src="{{asset('assets/frontend/assets/images/nab6.png')}}" alt="About us">
                                            </div>
                                        </div>
                                        <div class="div-masonary horizontal">
                                            <div class="image-wrap overflow-hidden border-radious-5">
                                                <img src="{{asset('assets/frontend/assets/images/nab7.png')}}" alt="About us">
                                            </div>
                                        </div>
                                        <div class="div-masonary vertical">
                                            <div class="image-wrap overflow-hidden border-radious-5">
                                                <img src="{{asset('assets/frontend/assets/images/nab8.png')}}" alt="About us">
                                            </div>
                                        </div>
                                        <div class="div-masonary horizontal">
                                            <div class="image-wrap overflow-hidden border-radious-5">
                                                <img src="{{asset('assets/frontend/assets/images/nab9.png')}}" alt="About us">
                                            </div>
                                        </div>
                                        <div class="div-masonary horizontal">
                                            <div class="image-wrap overflow-hidden border-radious-5">
                                                <img src="{{asset('assets/frontend/assets/images/nab10.png')}}" alt="About us">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="masonry modalGallery">
                                        <div class="div-masonary horizontal">
                                            <div class="image-wrap overflow-hidden border-radious-5">
                                                <img src="{{asset('assets/frontend/assets/images/nab11.png')}}" alt="About us">
                                            </div>
                                        </div>
                                        <div class="div-masonary horizontal">
                                            <div class="image-wrap overflow-hidden border-radious-5">
                                                <img src="{{asset('assets/frontend/assets/images/nab12.png')}}" alt="About us">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-btns">
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <!-- End Locations Section -->

        <!--  News & Updates Section -->
        @if(count($newsList))
        <section class="section bg-muted">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-header text-left mb-4">
                            <h2>
                                News & Updates
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="news-slider-container swiper-container pb-80">
                            <div class="swiper-wrapper">
                            @foreach($newsList as $news)
                                                <div class="swiper-slide">
                                                    <div class="news-wrap">
                                                        <div class="image-wrap">
                                                            <img src="{{asset('uploads/news/'.$news->image)}}" alt="{{ $news->title }}">
                                                        </div>
                                                        <h3>{{ $news->name }}</h3>
                                                        <ul>
                                                            <li>
                                                                <img class="svgImg" src="{{asset('assets/frontend/assets/images/update.svg')}}" alt="Company Updates">
                                                                Company Updates
                                                            </li>
                                                            <li>
                                                                <img class="svgImg" src="{{asset('assets/frontend/assets/images/calender.svg')}}" alt="Date">
                                                                {{ date('j M Y',strtotime($news->created_at)) }}
                                                            </li>
                                                        </ul>
                                                        <p>{{ $news->description}}</p>
                                                        <a href="">Learn more <img class="svgImg" src="{{asset('assets/frontend/assets/images/left-aerrow.svg')}}" alt="Left"></a>
                                                    </div>
                                                </div>
                                                @endforeach
                            </div>
                            <!-- Add Pagination -->
                            <div class="swiper-pagination"></div>
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-btns">
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endif
        <!-- End  News & Updates Section -->
    </main>

@endsection