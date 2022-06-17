@extends('layouts.master')
@section('content')

<main>
        <section class="small-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-header text-left">
                            <h2>
                                @if(request()->name == 'industrial') Industrial
                                @elseif(request()->name == 'defense') Defense
                                @elseif(request()->name == 'power') Power
                                @elseif(request()->name == 'railways') Railways
                                @elseif(request()->name == 'medical') Medical
                                @elseif(request()->name == 'telecom-industry') Telecom Industry
                                @elseif(request()->name == 'automotive') Automotive
                                @elseif(request()->name == 'aerospace') aerospace
                                @endif

                            </h2>
                        </div>
                        <p>
                           
                            @if(request()->name == 'industrial')
                                Unified positions itself as a strong catalyst in the semiconductor distribution Industry that indulges itself in a long term distribution cycle of reliable components to combat multiple industrial complexities and provide simple yet apt solutions. Unified involves itself in industry best trade process that don’t compromise on performance, creating a mutually beneficial business situation for itself and its valued clients. Unified is much aware that distributing high reliability semiconductors components is highly crucial in order to achieve stout performance in the industrial systems. We as component distributors sharpen our focus according to the requirements and demand chain.
                          
                            @elseif(request()->name == 'defense')
                                Unified plays a key role in the distribution of electronic components, we are a strategic partaker in serving the Nation’s Defense systems, with our MIL-grade components which are required utmost for the rigorous operating necessities in the country’s defense operations. Unified scrutinizes all the probable ways that thwarts the quality facet and puts all efforts to protect its electronic components in order to administer components that are free from all vulnerabilities. Unified keeps its relationship ace with its client at a premier significance. Constant communication from our panel to its customers on the status of execution is kept crystal clear from end to end.
                          
                            @elseif(request()->name == 'power')
                                Unified is involved in the supply chain management of power industry components that is spread over different geographies nationwide and takes all safety measures to handle these high performance components and preserves its highest quality. Unified upholds an orderly protocol to safeguard the components that needs to carry high electrical currents, frequencies and voltages that range up to several gigawatts. Unified plays a prominent role in the sustainable and efficient distribution activity handling this segment with paramount attention to detail.
                         
                            @elseif(request()->name == 'railways')
                                The Indian Railways industry offers a high growth potential area for Unified as the industries which source and distribute the semiconductor components must build themselves to have a strong and efficient spot in providing efficient source of components to the Indian railways. We cater to the sustainable demand for electronic components. Unified acts as an medium in this regard and we pay paramount attention and are much aware of the Indian railways’ performance prospects and ensure we take ardent care in management of components to facilitate long term reliability in implementation of its missions which will be obligated and operated in severe, harsh environments and unpredictable circumstances leading to functions uninterrupted for years without compromising on its efficacy.
                        
                            @elseif(request()->name == 'medical')
                                The role of semiconductors in the healthcare market is becoming extensively crucial owing to which Unified takes prime concern in managing and distributing its medical components. The innovation, accurateness, consistency in the components has been thoroughly analyzed by Unified professionals keeping elevated sensitivity and immediacy in its operation. This is made possible by a dedicated Unified team which employs an integrative approach, ultimately paving the way in establishing a sound healthcare system even as anticipation for production quality growth in the medical industry is witnessing an epochal change.
                           
                            @elseif(request()->name == 'telecom-industry')
                                Monumental developments in the field of telecom has been brought in by progress in the semiconductor Industry. Advent of semiconductors in the telecom industry is connected with that of wireless communication and many other technologies, which have all been revolutionary in nature. Unified Team with it dedicated panel address the vital signs of this segment and with an accurate database of our dedicated principals and customers, we explore and connect to our loyal clients and place our best foot forward in shaping our relationship with the telecom industry, keeping in touch with the trends of the present and upcoming years.
                        
                            @elseif(request()->name == 'automotive')
                                Unified keeps up with the ongoing progression the automotive industry is making. We make sure our connections and links are suitably restructured by Unified Panel time to time and promises a complete value addition to this segment. Unified adapts proactively to the ensuing modernization and strives to be ahead of the Supply Chain curve. Unified assures its end users with utmost quality as we act as an entity that is involved in acquiring components from its franchised manufacturers and deliver System Integrators, Electronic manufacturing services, design houses and traders on agreed terms.
                          
                            @elseif(request()->name == 'aerospace')
                                Unified pledges to offer a firm arena in the Aerospace field, with the trading and distribution of advanced components. Unified is aware of the fact that this segment requires a comprehensive mindset to involve in a segment that influences the nation’s aerospace application. We enable a steady, protected and a trusted flow in this segment which paves way for an effusively incorporated distribution resolution. We as a distribution Industry meet the rigorous eminence guidelines that the aerospace segment establishes. We strongly anticipate engrossing in a distribution chain that solidifies this segment in every facet possible. 
                          
                            @endif
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Form Section -->

        <!-- Product Categories Section -->
        <section class="section featured-manufactures">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-header text-center">
                            <h2>
                                Manufacturers
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="principal-slider-container swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="principal-wrap">
                                        <div class="image-wrap">
                                            <img src="{{url('/')}}/assets/frontend/assets/images/principal1.png" alt="Principal">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="principal-wrap">
                                        <div class="image-wrap">
                                            <img src="{{url('/')}}/assets/frontend/assets/images/principal2.png" alt="Principal">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="principal-wrap">
                                        <div class="image-wrap">
                                            <img src="{{url('/')}}/assets/frontend/assets/images/principal3.png" alt="Principal">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="principal-wrap">
                                        <div class="image-wrap">
                                            <img src="{{url('/')}}/assets/frontend/assets/images/principal4.png" alt="Principal">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="principal-wrap">
                                        <div class="image-wrap">
                                            <img src="{{url('/')}}/assets/frontend/assets/images/principal5.png" alt="Principal">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-md-12 text-center">
                        <a class="btn btn-primary width-168" href="#">View More</a>
                    </div> --}}
                </div>
            </div>
        </section>
        <!-- End Product Categories Section -->

        <!-- Application Section -->
        <section class="section bg-muted application-wraper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-header text-center mb-3">
                            <h2 class="text-uppercase">
                                {{ request()->name }}
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="application-wrap">
                            <div class="img-wrap">
                              
                                @if(request()->name == 'industrial')
                                    <img src="{{url('/')}}/assets/frontend/assets/images/industrial.jpg" alt="Defence">
                            
                                @elseif(request()->name == 'defense')
                                    <img src="{{url('/')}}/assets/frontend/assets/images/industries.png" alt="Defence">
                             
                                @elseif(request()->name == 'power')
                                    <img src="{{url('/')}}/assets/frontend/assets/images/power.png" alt="Defence">
                             
                                @elseif(request()->name == 'railways')
                                    <img src="{{url('/')}}/assets/frontend/assets/images/railways.jpg" alt="Defence">
                             
                                @elseif(request()->name == 'medical')
                                    <img src="{{url('/')}}/assets/frontend/assets/images/medical.jpg" alt="Defence">
                              
                                @elseif(request()->name == 'telecom-industry')
                                    <img src="{{url('/')}}/assets/frontend/assets/images/telecom.jpg" alt="Defence">
                             
                                @elseif(request()->name == 'automotive')
                                    <img src="{{url('/')}}/assets/frontend/assets/images/automotive.jpg" alt="Defence">
                              
                                @elseif(request()->name == 'aerospace')
                                    <img src="{{url('/')}}/assets/frontend/assets/images/aerospace.jpg" alt="Defence">
                               
                                @endif
                                
                            </div>
                            <div class="app-info">
                                <h3 class="text-uppercase">{{ request()->name }}</h3>
                                <ul>

                                    @if(request()->name == 'industrial')
                                    <li>Industrial Instrumentation</li>
                                    <li>Environmental Instrumentation</li>
                                    <li>Building Technologies</li>
                                    <li>Process Control</li>
                                    <li>Motor/Power Control</li>
                                    <li>Automation</li>

                                    @elseif(request()->name == 'defense')
                                    <li>Communication systems - radio</li>
                                    <li>Radars</li>
                                    <li>Opto Electronics</li>
                                    <li>Network Centric systems</li>
                                    <li>Sonar systems</li>
                                    <li>Fire control systems</li>
                                    <li>Rugged laptops</li>

                                @elseif(request()->name == 'power')
                                    <li>E-Metering</li>
                                    <li>Power Transmission and Distribution</li>
                                    <li>Renewable Energy</li>
                                    <li>Wind Energy</li>

                                @elseif(request()->name == 'railways')
                                    <li>Traction System</li>
                                    <li>Signaling</li>
                                    <li>Electronic Interlocking systems</li>
                                    <li>Train collision avoidance systems</li>
                                    <li>Communication systems</li>
                                    <li>Display systems</li>

                                @elseif(request()->name == 'medical')
                                    <li>Vascular monitoring</li>
                                    <li>X-Ray</li>
                                    <li>Blood Analyzer</li>
                                    <li>Multiple parameter monitors</li>
                                    <li>Ultrasonic Scanner</li>
                                    <li>Diagnostic Instruments</li>

                                @elseif(request()->name == 'telecom-industry')
                                    <li>Base station</li>
                                    <li>Microwave radio</li>
                                    <li>Satellite</li>
                                    <li>Networking</li>

                                @elseif(request()->name == 'automotive')
                                    <li>Infotainment system</li>
                                    <li>Cluster</li>
                                    <li>Safety systems</li>

                                @elseif(request()->name == 'aerospace')
                                    <li>Satellite communication</li>
                                    <li>Avionics</li>
                                @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Application Section -->

        <!-- Featured Products Section -->
        {{-- <section class="section bg-muted featured-products-wrap pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-header text-center">
                            <h2>
                                Industry Specific Featured Products
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="featured-product-slider-container swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="featuredProduct-wrap">
                                        <div class="image-wrap">
                                            <img class="svgImg" src="{{url('/')}}/assets/frontend/assets/images/radio.svg"
                                                alt="Communication systems - radio">
                                        </div>
                                        <div class="product-info">
                                            <h3>Communication systems - radio</span></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="featuredProduct-wrap">
                                        <div class="image-wrap">
                                            <img class="svgImg" src="{{url('/')}}/assets/frontend/assets/images/radar.svg" alt="Radars">
                                        </div>
                                        <div class="product-info">
                                            <h3>Radars</span></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="featuredProduct-wrap">
                                        <div class="image-wrap">
                                            <img class="svgImg" src="{{url('/')}}/assets/frontend/assets/images/opto.svg" alt="Opto Electronics">
                                        </div>
                                        <div class="product-info">
                                            <h3>Opto Electronics</span></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="featuredProduct-wrap">
                                        <div class="image-wrap">
                                            <img class="svgImg" src="{{url('/')}}/assets/frontend/assets/images/network-centric.svg"
                                                alt="Network Centric systems">
                                        </div>
                                        <div class="product-info">
                                            <h3>Network Centric systems</span></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="featuredProduct-wrap">
                                        <div class="image-wrap">
                                            <img class="svgImg" src="{{url('/')}}/assets/frontend/assets/images/systems.svg" alt="Sonar systems">
                                        </div>
                                        <div class="product-info">
                                            <h3>Sonar systems</span></h3>
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
        </section> --}}
        <!-- End Featured Products Section -->

    </main>

@endsection