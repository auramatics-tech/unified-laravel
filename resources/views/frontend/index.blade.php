@extends('layouts.master')
@section('content')
    <!-- Main Content -->
    <main>
        <!-- Hero Section -->
        <section class="home-hero-section">
            <div class="container-fluid p-0">
                <div class="row m-0">
                    <div class="col-md-12 p-0">
                        <div class="hero-slider-container swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="banner-hero-wrap">
                                        <img src="{{asset('assets/frontend/assets/images/banner1-01.webp')}}" alt="slide01">
                                        <div class="banner-content">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <h2>Wide range of products spanning multiple industries</h2>
                                                        <p>Personalization, efficiency in execution, and end-to-end support make our services a value-add to all projects</p>
                                                        <a href="{{route('industry')}}" class="btn btn-primary btn-big-fonts  btn-white mt-5">Know more</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="banner-hero-wrap">
                                        <img src="{{asset('assets/frontend/assets/images/banner2-01.webp')}}" alt="slide02">
                                        <div class="banner-content">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <h2>Efficient sourcing and on-time distribution services</h2>
                                                        <p>JIT delivery, special packaging, design assistance, and many other advantageous services provided with efficient product sourcing</p>
                                                        <a href="{{route('Services')}}" class="btn btn-primary btn-white btn-big-fonts  mt-5">Know more</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="banner-hero-wrap">
                                        <img src="{{asset('assets/frontend/assets/images/banner3new-01.webp')}}" alt="slide03">
                                        <div class="banner-content">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <h2>Extensive network of products and suppliers</h2>
                                                        <p>No matter the requirements and specifications, Unified finds the best components and suppliers for any industry undertaking</p>
                                                        <a href="{{route('cart')}}" class="btn btn-primary btn-white btn-big-fonts  mt-5">Submit quote</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Add Pagination -->
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Hero Section -->
        <!-- Support Section -->
        <section class="bg-muted support-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="support-main-wrap">
                            <div class="support-wrapper" style="background-image: url({{asset('assets/frontend/assets/images/supply-chain-bg1.webp')}});">
                                <div class="inner-support">
                                    <div class="icon-wrap">
                                        <img class="svgImg" src="{{asset('assets/frontend/assets/images/reliable-distribution-ans-supply-chain.svg')}}"
                                             alt="Reliable Distribution & Supply Chain">
                                    </div>
                                    <h2>Reliable Distribution & Supply Chain</h2>
                                </div>
                            </div>
                            <div class="support-wrapper"
                                 style="background-image: url({{asset('assets/frontend/assets/images/technical-and-application-support.webp')}});">
                                <div class="inner-support">
                                    <div class="icon-wrap">
                                        <img class="svgImg" src="{{asset('assets/frontend/assets/images/technical-and-application-support.svg')}}"
                                             alt="Technical & Application Support">
                                    </div>
                                    <h2>Technical & Application Support</h2>
                                </div>
                            </div>
                            <div class="support-wrapper"
                                 style="background-image: url({{asset('assets/frontend/assets/images/consolidation-and-BOM-support.webp')}});">
                                <div class="inner-support">
                                    <div class="icon-wrap">
                                        <img class="svgImg" src="{{asset('assets/frontend/assets/images/consolidation-and-BOM-support.svg')}}"
                                             alt="Consolidation & BOM Support">
                                    </div>
                                    <h2>Consolidation & BOM Support</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Support Section -->

       <!-- Key Principals Section -->
        <section class="section bg-muted">
            
            @if(isset($manufactures))
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-header text-center">
                            <h2>
                                Key Principals
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{url('/')}}/manufacturers" class="seeallmfs">See all Manufacturers</a>
                        <div class="principal-slider-container swiper-container">
                            <div class="swiper-wrapper">
                            @foreach($manufactures as $manufacturer)
                                <div class="swiper-slide">
                                    <a href="{{url('/')}}/manufacturer-detail/{{$manufacturer->id}}" class="principal-wrap" title="{{$manufacturer->name}}">
                                    
                                        <div class="image-wrap">
                                            @if(isset($manufacturer))
                                                <img width="281" height="78" src="{{asset('uploads/manufacturer/'.$manufacturer->image)}}" alt="Key Principals">
                                            @else{
                                                <img src="{{url('/')}}/theme/frontend/assets/images/no-images.webp" alt="Key Principals">
                                            }
                                            @endif
                                        </div>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                            <!-- Add Pagination -->
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </section>
        <!-- End Key Principals Section -->

        <!-- About Section -->
        <section class="section bg-muted about-info-wrap pt-3">
        <div class="container">
            <div class="row">
            <div class="col-md-12">
                <div class="section-header text-center m-b-50">
                <h2>
                    Your Key Advantages
                </h2>
                </div>
            </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="key-advantage advntg">
                        <img width="75" height="75" src="{{asset('assets/frontend/assets/images/icon_1.svg')}}" alt="">
                        <h5>Dedicated Product Managers and FAEs</h5>
                        <p>For all your industry requirements and professional help</p>             	
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="advntg">
                        <img width="75" height="75" src="{{asset('assets/frontend/assets/images/icon_2.svg')}}" alt="">
                        <h5>Just In Time Delivery</h5>
                        <p>On-time and efficient delivery with ERP based order management</p>             	
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="advntg">
                        <img width="75" height="75" src="{{asset('assets/frontend/assets/images/icon_3.svg')}}" alt="">
                        <h5>Technical and Customized Support</h5>
                        <p>Specific to your requirements with a wide variety of products</p>             	
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="key-advantage advntg">
                        <img width="75" height="75" src="{{asset('assets/frontend/assets/images/icon_4.svg')}}" alt="">
                        <h5>Multi-Currency Support</h5>
                        <p>Unified deals with multiple global currencies as per your comfort</p>             	
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="advntg">
                        <img width="75" height="75" src="{{asset('assets/frontend/assets/images/icon_5.svg')}}" alt="">
                        <h5>Strategic Warehouse Locations:<br>India | SG | HK | USA</h5>
                        <p>We reach you, wherever you are</p>             	
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="advntg">
                        <img width="75" height="75" src="{{asset('assets/frontend/assets/images/icon_6.svg')}}" alt="">
                        <h5>Production Shortages Support</h5>
                        <p>With a wide range of suppliers, we can support all your shortages</p>             	
                    </div>
                </div>
            </div>
        </div>
        </section>
        <!-- End About Section -->

        <!-- Products Categories Section -->
        <section class="section top-big-dot-pattern products-categories-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-header text-center mb-3">
                            <h2>
                                Product Categories
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4 col-xl-3 lg-4">
                        <div class="prodecy-cat-wrap">
                            <div class="img">
                                <img class="svgImg" src="{{asset('assets/frontend/assets/images/electromechanical-components.svg')}}"
                                     alt="Electromechanical Components">
                            </div>
                            <div class="cat-info">
                                <h3>Electromechanical Components</h3>
                                <a href="{{url('/')}}/product-category/electromechanical-components-tab">Learn more <img class="svgImg" src="{{asset('assets/frontend/assets/images/left-aerrow.svg')}}" alt="Left"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 lg-4">
                        <div class="prodecy-cat-wrap">
                            <div class="img">
                                <img class="svgImg" src="{{asset('assets/frontend/assets/images/noun-power-transformer.svg')}}" alt="Power Electronics">
                            </div>
                            <div class="cat-info">
                                <h3>Power Components</h3>
                                <a href="{{url('/')}}/product-category/power-components-tab">Learn more <img class="svgImg" src="{{asset('assets/frontend/assets/images/left-aerrow.svg')}}" alt="Left"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 lg-4">
                        <div class="prodecy-cat-wrap">
                            <div class="img">
                                <img class="svgImg" src="{{asset('assets/frontend/assets/images/noun-amplifier.svg')}}" alt="Active RF components">
                            </div>
                            <div class="cat-info">
                                <h3>RF & Microwave</h3>
                                <a href="{{url('/')}}/product-category/rf-microwave-tab">Learn more <img class="svgImg" src="{{asset('assets/frontend/assets/images/left-aerrow.svg')}}" alt="Left"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 lg-4">
                        <div class="prodecy-cat-wrap">
                            <div class="img">
                                <img class="svgImg" src="{{asset('assets/frontend/assets/images/noun-adapter.svg')}}" alt="Interconnect">
                            </div>
                            <div class="cat-info">
                                <h3>Interconnect</h3>
                                <a href="{{url('/')}}/product-category/interconnect-tab">Learn more <img class="svgImg" src="{{asset('assets/frontend/assets/images/left-aerrow.svg')}}" alt="Left"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 lg-4">
                        <div class="prodecy-cat-wrap">
                            <div class="img">
                                <img class="svgImg" src="{{asset('assets/frontend/assets/images/noun-monitor.svg')}}" alt="Display">
                            </div>
                            <div class="cat-info">
                                <h3>Display and Systems</h3>
                                <a href="{{url('/')}}/product-category/display-systems-tab">Learn more <img class="svgImg" src="{{asset('assets/frontend/assets/images/left-aerrow.svg')}}" alt="Left"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 lg-4">
                        <div class="prodecy-cat-wrap">
                            <div class="img">
                                <img class="svgImg" src="{{asset('assets/frontend/assets/images/noun-capacitor.svg')}}" alt="Passive Components">
                            </div>
                            <div class="cat-info">
                                <h3>Passive Components</h3>
                                <a href="{{url('/')}}/product-category/passive-components-tab">Learn more <img class="svgImg" src="{{asset('assets/frontend/assets/images/left-aerrow.svg')}}" alt="Left"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 lg-4">
                        <div class="prodecy-cat-wrap">
                            <div class="img">
                                <img class="svgImg" src="{{asset('assets/frontend/assets/images/noun-signal.svg')}}" alt="M2M">
                            </div>
                            <div class="cat-info">
                                <h3>Wireless & Memory</h3>
                                <a href="{{url('/')}}/product-category/wireless-memory-tab">Learn more <img class="svgImg" src="{{asset('assets/frontend/assets/images/left-aerrow.svg')}}" alt="Left"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 lg-4">
                        <div class="prodecy-cat-wrap">
                            <div class="img">
                                <img class="svgImg" src="{{asset('assets/frontend/assets/images/noun-memory.svg')}}" alt="Semiconductor">
                            </div>
                            <div class="cat-info">
                                <h3>Sensors</h3>
                                <a href="{{url('/')}}/product-category/sensors-tab">Learn more <img class="svgImg" src="{{asset('assets/frontend/assets/images/left-aerrow.svg')}}" alt="Left"></a>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </section>
        <!-- End Products Categories Section -->

        <section class="section bg-muted">
            <div class="container">
                <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center m-b-50">
                    <h2>
                        Key Market Segments
                    </h2>
                    </div>
                </div>
                </div>
                <div class="row key_sagment">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                        <div class="bloc">
                            <div>
                                <div>
                                    <h3 class="title">Defense & Aerospace</h3>
                                    <div>
                                        <p>Unified deals in certified parts made to withstand harsh conditions</p>
                                        <a class="btn-home" href="{{url('/')}}/industry/defense">Read more</a>
                                    </div>
                                </div>
                            </div>
                            <img width="535" height="301" src="{{asset('assets/frontend/assets/images/ms-defense-new.webp')}}" alt="Defense" >
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                        <div class="bloc">
                            <div>
                                <div>
                                    <h3 class="title">Industrial & power</h3>
                                    <div>
                                        <p>Certified distributor of essential semiconductor products in Industrial and Power segments</p>
                                        <a class="btn-home" href="{{url('/')}}/industry/industrial">Read more</a>
                                    </div>
                                </div>
                            </div>
                            <img width="535" height="301" src="{{asset('assets/frontend/assets/images/ms-industry-new.webp')}}" alt="Defense" >
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                        <div class="bloc">
                            <div>
                                <div>
                                    <h3 class="title">Automotive</h3>
                                    <div>
                                        <p>Latest and best-performing products for Automotive applications</p>
                                        <a class="btn-home" href="{{url('/')}}/industry/automotive">Read more</a>
                                    </div>
                                </div>
                            </div>
                            <img width="535" height="301" src="{{asset('assets/frontend/assets/images/ms-automotive-new.webp')}}" alt="Defense" >
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                        <div class="bloc">
                            <div>
                                <div>
                                    <h3 class="title">Railway</h3>
                                    <div>
                                        <p>With Unified, you have the advantage of parts and expertise in the transportation segments</p>
                                        <a class="btn-home" href="{{url('/')}}/industry/railways">Read more</a>
                                    </div>
                                </div>
                            </div>
                            <img width="535" height="301" src="{{asset('assets/frontend/assets/images/ms-railways-new.webp')}}" alt="Defense" >
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                        <div class="bloc">
                            <div>
                                <div>
                                    <h3 class="title">Medical</h3>
                                    <div>
                                        <p>We uphold innovation and accurateness in parts for all medical applications</p>
                                        <a class="btn-home" href="{{url('/')}}/industry/medical">Read more</a>
                                    </div>
                                </div>
                            </div>
                            <img width="535" height="301" src="{{asset('assets/frontend/assets/images/ms-new-medical.webp')}}" alt="Defense" >
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                        <div class="bloc">
                            <div>
                                <div>
                                    <h3 class="title">Telecom</h3>
                                    <div>
                                        <p>Trust Unified for all your advance semiconductor requirements in Telecommunications</p>
                                        <a class="btn-home" href="{{url('/')}}/industry/telecom-industry">Read more</a>
                                    </div>
                                </div>
                            </div>
                            <img width="535" height="301" src="{{asset('assets/frontend/assets/images/ms-telecom-new.webp')}}" alt="Defense" >
                        </div>
                    </div>
                </div>
            </div>
        </section>


        
        <!-- News and Update Section -->
        @if(count($newsList))
        <section class="section bg-muted top-square-image">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-header text-center">
                            <h2>
                                News & Update
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="news-slider-container swiper-container pb-80">
                            <div class="swiper-wrapper">
                                @if(count($newsList))
                                @foreach($newsList as $news)
                                <div class="swiper-slide">
                                    <div class="news-wrap">
                                        <div class="image-wrap">
                                            <img width="266" height="324" src="{{asset('uploads/news/'.$news->image)}}" alt="{{ $news->title }}">
                                        </div>
                                        <h3>{{$news->name}}</h3>
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
                                @endif
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
        <!-- End News and Update Section -->
    </main>
    <!-- End Content -->
@endsection