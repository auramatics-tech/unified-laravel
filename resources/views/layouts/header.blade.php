
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav class="navbar navbar-expand-lg navbar-light d-flex align-items-center justify-content-between">
                            <a class="navbar-brand" href="{{url('/')}}">
                                <img width="128" height="101" src="{{asset('assets/frontend/assets/images/brand.webp')}}" alt="Brand">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="navigation ">
                                <div class="top-navigation d-md-flex align-items-center justify-content-end">
                                    <form action="" id="search-form">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="search-box" placeholder="Part # or Keyword">
                                            <input type="hidden" class="form-control" id="selected-search-id" placeholder="Part #">
                                            <input type="hidden" class="form-control" id="selected-search-type">
                                            <div class="input-group-append">
                                                <button class="btn btn-secondary" type="button">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                    <ul class="d-flex align-items-center">
                                        <!--<li>
                                            <a href="{{url('/')}}">
                                                <img class="svgImg" src="{{url('/')}}/theme/frontend/assets/images/sign-in.svg" alt="Signin">
                                                Sign in
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('/')}}/">
                                                <img class="svgImg" src="{{url('/')}}/theme/frontend/assets/images/status.svg" alt="Order status">
                                                Order Status
                                            </a>
                                        </li>-->
                                        <li>
                                            <a href="{{url('/')}}/cart">
                                                <img class="svgImg" src="{{asset('assets/frontend/assets/images/shopping-cart.svg')}}" alt="Cart">
                                                Cart
                                            </a>
                                            <span class="badge" id="cart_count"></span>
                                        </li>
                                        <li>
                                            <a href="{{url('/')}}/">
                                                <img class="svgImg" src="{{asset('assets/frontend/assets/images/support.svg')}}" alt="Support">
                                                Support
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="main-navigation">
                                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav ml-auto">
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-item dropdown" href="{{url('/')}}/product-category" id="navbarDropdown"
                                                   >
                                                    Products
                                                </a>
                                                <span class="trigger down-caret"></span>
                                                {{-- <ul class="dropdown-menu dropdown-content">
                                                    <li><a class="dropdown-item" href="{{url('/')}}/product-list?group=Electromechanical Components">Electromechanical Components</a></li>
                                                    <li><a class="dropdown-item" href="{{url('/')}}/product-list?group=Passive Components">Passive Components</a></li>
                                                    <li><a class="dropdown-item" href="{{url('/')}}/product-list?group=Power Electronics">Power Electronics</a></li>
                                                    <li><a class="dropdown-item" href="{{url('/')}}/product-list?group=Interconnect">Interconnect</a></li>
                                                    <li><a class="dropdown-item" href="{{url('/')}}/product-list?group=M2M">M2M</a></li>
                                                    <li><a class="dropdown-item" href="{{url('/')}}/product-list?group=Semiconductor">Semiconductor</a></li>
                                                    <li><a class="dropdown-item" href="{{url('/')}}/product-list?group=Display">Display</a></li>
                                                    <li><a class="dropdown-item" href="{{url('/')}}/product-list?group=Active RF components">Active RF components</a></li>
                                                    <li><a class="dropdown-item" href="{{url('/')}}/product-list?group=Batteries">Batteries</a></li>
                                                </ul> --}}
                                                <ul class="dropdown-menu dropdown-content">
                                                <li class="navBack" tabindex="0"><span>Back</span></li>
                                               @php
                                                $postLoad = postLoad();
                                                @endphp
                                                @if(count($postLoad))
                                                @foreach($postLoad as  $groupKey => $groupCategories)
                                                    <li class="dropdown">
                                                        <a class="dropdown-item dropdown" href="{{route('product_category',$groupKey)}}">{{$groupKey}}
                                                        </a>
                                                        <span class="trigger right-caret"></span>
                                                        <ul class="dropdown-menu sub-menu dropdown-content" style="display:none;" >
                                                        @foreach($groupCategories as $categoryKey => $ProductCategory)
                                                            <li class="dropdown">
                                                            <a class="dropdown-item category_click"  href="#" data-group-category="{{$groupKey}}" data-id="{{$categoryKey}}" data-type="category">{{$ProductCategory['pc_name']}}
                                                                    </a>
                                                                @if(!isset($ProductCategory))
                                                                <span class="trigger right-caret"></span>
                                                                @endif
                                                                <ul class="dropdown-menu sub-menu dropdown-content" style="display:none;">
                                                                @foreach($ProductCategory as $productCategoryDetailsKey => $productCategoryDetails)
                                                                    @if($productCategoryDetailsKey == "pc_name" || $productCategoryDetailsKey == "manufactures")
                                                                    @else
                                                                        @foreach($productCategoryDetails as $subCategoryValue)
                                                                    
                                                                        <li><a class="dropdown-item category_click" data-group-category="{{$groupKey}}" href="#" data-id="{{$productCategoryDetailsKey}}" data-type="sub_category">{{$subCategoryValue}}</a></li>
                                                                        @endforeach
                                                                        @endif
                                                                        @endforeach
                                                                </ul>
                                                            </li>
                                                            @endforeach
                                                        </ul>
                                                    </li>
                                                    @endforeach
                                                    @endif
                                                </ul>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link " href="{{route('manufacturers')}}" >
                                                    Manufacturer
                                                </a>
                                                <!--<ul class="dropdown-menu" aria-labelledby="navbarDropdown"
                                                    data-parent-name="Manufacturer">
                                                    <li class="navBack" tabindex="0"><span>Back</span></li>
                                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                </ul>-->
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link " href="{{route('industry')}}" id="navbarDropdown"
                                                   role="button" aria-expanded="false">
                                                    Market Segments
                                                </a>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link" href="{{route('Services')}}" id="navbarDropdown"  role="button" aria-expanded="false">
                                                    Services
                                                </a>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link " href="{{route('About')}}" id="navbarDropdown"
                                                   role="button" aria-expanded="false">
                                                    About Us
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{route('contact_us')}}">Contact Us</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{route('career')}}">Career</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="btn btn-primary" href="{{url('/')}}/cart" tabindex="-1" aria-disabled="true">Get Quote</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>