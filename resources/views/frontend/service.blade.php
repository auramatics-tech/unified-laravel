@extends('layouts.master')
@section('content')
    <!-- Main Content -->
    <main>
        <!-- Inner Hero Section -->
        <section class="inner-hero-section no-overlay no-image">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-uppercase text-primary">Services</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Inner Hero Section -->

        <!-- Quotes Section -->
        <section class="small-section">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-3 mb-5 mb-md-0">
                        <div class="nav flex-column nav-pills" id="services-tab" role="tablist"
                             aria-orientation="vertical">
                            <a class="nav-link active" id="kico-tab" data-toggle="pill" href="#kico" role="tab"
                               aria-controls="kico" aria-selected="true">Kitting & Consolidation
                                Support <i class="fas fa-chevron-right ml-2"></i></a>
                            <a class="nav-link" id="cuIn-tab" data-toggle="pill" href="#cuIn" role="tab"
                               aria-controls="cuIn" aria-selected="false">Custom & Integrated
                                Solutions <i class="fas fa-chevron-right ml-2"></i></a>
                            <a class="nav-link" id="cross-ref-tab" data-toggle="pill" href="#cross-ref" role="tab"
                               aria-controls="cross-ref" aria-selected="false">Cross-Referencing <i
                                    class="fas fa-chevron-right ml-2"></i></a>
                            <a class="nav-link" id="value-supply-tab" data-toggle="pill" href="#value-supply" role="tab"
                               aria-controls="value-supply" aria-selected="false">Value-added Supply
                                Chain Services <i class="fas fa-chevron-right ml-2"></i></a>
                            <a class="nav-link" id="qa-tab" data-toggle="pill" href="#qa" role="tab" aria-controls="qa"
                               aria-selected="false">Quality Assurance <i class="fas fa-chevron-right ml-2"></i></a>
                        </div>
                    </div>
                    <div class="col-12 col-md-9 pl-lg-5">
                        <div class="tab-content" id="services-tabContent">
                            <div class="tab-pane fade show active" id="kico" role="tabpanel" aria-labelledby="kico-tab">
                                <div class="row">
                                    <div class="col-12 col-md-4 order-md-2 mb-3 mb-md-0">
                                        <img src="{{asset('assets/frontend/assets/images/service1.jpg')}}" alt="" class="w-100">
                                    </div>

                                    <div class="col-12 col-md-8 order-md-1">
                                        <h4 class="font-bold text-primary mb-3">Kitting & Consolidation Support</h4>
                                        <p>Selecting the right industry standard product for all your Electronic
                                            Components is as easy as contacting us.</p>
                                        <p>Our cross-reference database contains hundreds of thousands of part number
                                            parameters. We can help you identify a “fit, form and function” replacement
                                            or an equivalent alternative using some search criteria.</p>
                                        <p>Our
                                            Team follows the below Steps to find Cross Reference for your components
                                            requirements.</p>
                                        <ul class="item-list">
                                            <li>Search for your Part</li>
                                            <li>Cross to other Manufacturers</li>
                                            <li>Compare Several Options</li>
                                            <li>Access parametric data</li>
                                            <li>Export your selections</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="cuIn" role="tabpanel" aria-labelledby="cuIn-tab">
                                <div class="row mb48">
                                    <div class="col-12">
                                        <h4 class="font-bold text-primary mb-3">Custom & Integrated Solutions</h4>
                                        <p>With the current wave of global procurement, fuelled along with the sharp
                                            increase
                                            in the number of companies involved in the process of manufacturing, the
                                            market is
                                            facing a stark requirement of vendors that provide seamless end-to-end
                                            solutions,
                                            which is also necessary to reduce the cost involved in the manufacturing
                                            process.
                                            This is where Unified’s Custom &amp; Integrated solutions help companies
                                            maintain their
                                            requirements with an end to end solutions.</p>
                                    </div>
                                </div>
                                <div class="row mb48">
                                    <div class="col-12 col-md-4 order-md-1 mb-3 mb-md-0">
                                        <img src="{{asset('assets/frontend/assets/images/service2.jpg')}}" alt="" class="w-100">
                                    </div>

                                    <div class="col-12 col-md-8 order-md-2">
                                        <h6 class="text-primary mb-2 font-bold">Shortage Of/Hard-to-find Components</h6>
                                        <p>Through the access of our broad reach of qualified suppliers, we make sure to
                                            fulfill even the most difficult problems of component requirement. Our
                                            sourcing
                                            teams are always placed on-the-go for product allocation with minimum lead
                                            times.
                                            All our suppliers have been rated according to product conformance,
                                            timeliness, and
                                            historic volume for careful identification and quick action.<br><br>With
                                            attributes
                                            such as historic pricing data, current, and obsolete manufacturer
                                            cross-references,
                                            and data sheets, our sourcing experts have a measurable advantage for
                                            sourcing and
                                            negotiating to meet your price point expectations.</p>
                                    </div>
                                </div>
                                <div class="row mb48">
                                    <div class="col-12 col-md-4 order-md-2 mb-3 mb-md-0">
                                        <img src="{{asset('assets/frontend/assets/images/service3.jpg')}}" alt="" class="w-100">
                                    </div>

                                    <div class="col-12 col-md-8 order-md-1">
                                        <h6 class="text-primary mb-2 font-bold">BOM</h6>
                                        <p>Handling the Bill of Materials is one of the most critical aspects of product
                                            manufacturing. The BOM is the single most significant cost element for any
                                            product.
                                            We help you to realize the factors responsible for reducing the cost factor
                                            in the
                                            BOM.<br><br>We are an experienced company offering ultimate sourcing
                                            solutions to
                                            businesses procuring raw materials or finished goods from developing or
                                            developed
                                            economies. We implement our experience and knowledge into each and every
                                            aspect of
                                            sourcing. Our professionals offer high-end BOM cost reduction services to
                                            our
                                            esteemed clients, to help them achieve significant savings while improving
                                            their
                                            overall sales as well as increase the profit margin.<br><br>With in-depth
                                            knowledge
                                            and insight, we strive to offer real value for your money and ensure
                                            complete
                                            client loyalty.<br><br>Time is of the utmost value as far as BOM cost
                                            reduction is
                                            concerned. Products launched within the shortest time frame fail to
                                            materialize on
                                            the cost optimization part.<br><br>The LLC (Low-Cost Country) sourcing part
                                            should
                                            be properly evaluated to ensure low cost in materials used. Component
                                            suppliers may
                                            decrease costs, but may not have passed on the benefits lack of suitable
                                            purchasing
                                            trends arising due to acquisitions and mergers often hamper the cost
                                            reduction
                                            aspect.</p>
                                    </div>
                                </div>
                                <div class="row mb48">
                                    <div class="col-12 col-md-4 order-md-1 mb-3 mb-md-0">
                                        <img src="{{asset('assets/frontend/assets/images/service4.jpeg')}}" alt="" class="w-100">
                                    </div>

                                    <div class="col-12 col-md-8 order-md-2">
                                        <h6 class="text-primary mb-2 font-bold">End-to-End Solutions</h6>
                                        <p>Our highly experienced team involves the utilization of a specific type of
                                            multi-stage process based on the flexibility level of each client, to meet
                                            to the
                                            exact required solution. Our Sourcing Team offers an in-depth analysis to
                                            figure
                                            out all the necessary cost reduction options available to reach the end
                                            requirement.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <p>Our services include:</p>
                                        <ul class="item-list">
                                            <li>Figuring out all the required alternatives available to facilitate
                                                reduced
                                                costing</li>
                                            <li>Trying to generate savings from every purchase consolidation</li>
                                            <li>Availing the benefits and applying the essential features of LLC
                                                sourcing</li>
                                            <li>Customized Reporting</li>
                                            <li>Repackaging / Relabelling</li>
                                            <li>Consolidated after sales services </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="cross-ref" role="tabpanel" aria-labelledby="cross-ref-tab">
                                <div class="row">
                                    <div class="col-12 col-md-4 order-md-2 mb-3 mb-md-0">
                                        <img src="{{asset('assets/frontend/assets/images/service5.jpeg')}}" alt="" class="w-100">
                                    </div>
                                    <div class="col-12 col-md-8 order-md-1">
                                        <h4 class="font-bold text-primary mb-3">Cross-Referencing</h4>
                                        <p>Selecting the right industry standard product for all your Electronic
                                            Components is
                                            as easy as contacting us.<br><br>Our cross-reference database contains
                                            hundreds of
                                            thousands of part number parameters. We can help you identify a “fit, form
                                            and
                                            function” replacement or an equivalent alternative using some search
                                            criteria.<br><br>Our
                                            Team follows the below Steps to find Cross Reference for your components
                                            requirements.</p>
                                        <ul class="item-list">
                                            <li>Search for your Part</li>
                                            <li>Cross to other Manufacturers</li>
                                            <li>Compare Several Options</li>
                                            <li>Access parametric data</li>
                                            <li>Export your selections</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="value-supply" role="tabpanel"
                                 aria-labelledby="value-supply-tab">
                                <div class="row mb30">
                                    <div class="col-12">
                                        <h4 class="font-bold text-primary mb-3">Value-added Supply Chain Services</h4>
                                        <p>At Unified, we continually invest in people, processes, and technologies to
                                            meet your
                                            complete supply chain needs. In our supply chain model, we address the below
                                            crucial areas that are necessary to build a practical solution:</p>
                                    </div>
                                </div>
                                <div class="row align-items-center mb30 mb-s-24">
                                    <div class="col-12 col-md-6 col-lg-3 mb-3 mb-md-0">
                                        <img src="{{asset('assets/frontend/assets/images/service6.jpeg')}}" alt="" class="w-100">
                                    </div>

                                    <div class="col-12 col-md-6 col-lg-9 pl-lg-4">
                                        <h6 class="text-primary mb-2"><strong>Sourcing</strong></h6>
                                        <p class="mb-0">Researching, identifying, validating and pricing products and
                                            managing
                                            multiple low-volume suppliers can be time-consuming and create
                                            inefficiencies in
                                            your business. With our manufacturer relationships and knowledge of the
                                            latest
                                            products and applications, we can help you reduce the time and resources
                                            spent on
                                            sourcing products.</p>
                                    </div>
                                </div>
                                <div class="row align-items-center mb30 mb-s-24">
                                    <div class="col-12 col-md-6 col-lg-3 order-md-2 mb-3 mb-md-0">
                                        <img src="{{asset('assets/frontend/assets/images/service7.jpg')}}" alt="" class="w-100">
                                    </div>

                                    <div class="col-12 col-md-6 col-lg-9 order-md-1">
                                        <h6 class="text-primary mb-2"><strong>Inventory Management</strong></h6>
                                        <p class="mb-0">We understand that managing inventory is essential to
                                            maintaining
                                            operations and excellent customer service and has a direct impact on the
                                            profitability of your business. Managing high material lead times and
                                            maintaining
                                            proper inventory levels to ensure you have the right material ready when you
                                            need
                                            it can be costly and time-consuming, it can also hurt your schedule and
                                            budget if
                                            not appropriately managed.</p>
                                    </div>
                                </div>
                                <div class="row align-items-center mb30 mb-s-24">
                                    <div class="col-12 col-md-6 col-lg-3 mb-3 mb-md-0">
                                        <img src="{{asset('assets/frontend/assets/images/service8.jpg')}}" alt="" class="w-100">
                                    </div>

                                    <div class="col-12 col-md-6 col-lg-9 pl-lg-4">
                                        <h6 class="text-primary mb-2"><strong>Global Logistics</strong></h6>
                                        <p class="mb-0">Every time products are moved or transported, the risk of
                                            project
                                            delays and added costs increase. Unified’ s global operations experience
                                            enables us
                                            to work with you to determine the most efficient methods for delivering
                                            products to
                                            help mitigate the risk of project delays.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <p class="mb-2">Doing more with less is the goal of every company. Unified has the
                                            experience and expertise in providing value-added services that complement
                                            your
                                            warehousing, distribution and fulfillment functions.<br><br>Our customized
                                            solutions support your business and help you improve efficiencies and
                                            customer
                                            service.<br><br>Our value-added services include:</p>
                                        <div class="row">
                                            <div class="col-12 col-md-5">
                                                <ul class="item-list mb-0">
                                                    <li>Bonded Inventory</li>
                                                    <li>On-line Procurement Services</li>
                                                    <li>JIT (Just-In-Time) Deliveries</li>
                                                    <li>Materials Management</li>
                                                    <li>Off-Shore Sourcing</li>
                                                </ul>
                                            </div>

                                            <div class="col-12 col-md-5">
                                                <ul class="item-list">
                                                    <li>Special Packaging (Military or Other)</li>
                                                    <li>Private Labelling</li>
                                                    <li>Shipping</li>
                                                    <li>Component Sorting</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="qa" role="tabpanel" aria-labelledby="qa-tab">
                                <div class="row mb30">
                                    <div class="col-12">
                                        <h4 class="font-bold text-primary mb-3">Quality Assurance</h4>
                                        <p>Quality is an essential promise to our valued customers. Components we
                                            provide,
                                            undergo a complete system of vendor verifying and management, standard
                                            quality
                                            control, and testing procedures.<br><br>Unified follows standard practice for
                                            Quality
                                            assurance that involves strict inward inspection. Whenever any part is
                                            received
                                            within the facility, it is first met with datasheet verification and visual
                                            inspection. A meticulous procedure is followed in case of the quality
                                            suspect and
                                            is stores within a quarantine warehouse. A detailed inspection report is
                                            maintained
                                            to check the same. For parts that match our inspection criteria are
                                            processed ahead
                                            to facilitate fast and accurate logistic support.<br><br>Similarly, we make
                                            sure
                                            that each part is shipped with proper detail and with an organized delivery
                                            timeline that is backed by strong ERP support that helps Unified deliver the
                                            promised
                                            quality to each of our esteemed customers.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End New and Updates Section -->
    </main>
    <!-- End Content -->

@endsection