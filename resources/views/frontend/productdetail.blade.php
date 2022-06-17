@extends('layouts.master')
@section('content')

<main>
    <!-- Inner Hero Section -->
    <section class="inner-hero-section no-overlay no-image d-none">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-uppercase text-primary">Product Detail</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- End Inner Hero Section -->

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 mt-4">
                            <li class="breadcrumb-item group_category_item" data-name="{{ $product->group_category }}"><a href="{{url('/')}}/product-category/{{ $product->group_category }}" target="_blank">{{ $product->group_category }}</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);" class="product_filter" data-type="category" data-id="{{$product->product_category_id}}">{{ $product->category->name }}</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);" class="product_filter" data-id="{{$product->products_sub_category_id}}">{{ $product->sub_category->name }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $product->name }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Detail Section -->
    <section class="section product-setail-section pb-0">
        <div class="container">
            <div class="row d-md-flex justify-content-between">
                <div class="col-md-8">
                    <div class="productname d-sm-flex">
                        <div class="product-img">



                            <a data-fancybox="gallery" class="disableRightClick" href="
                                    @if(!empty($product->image))
                                        {{$product->image}} 
                                    @elseif(!empty( $product->manufuture_info->image ))
                                        {{url('/')}}assets/frontend/assets/images{{ $product->manufuture_info->image }} 
                                    @else
                                        {{url('/')}}assets/frontend/assets/images/no-images.png
                                    @endif">
                                <img src="
                                    @if(!empty($product->image)) 
                                        {{$product->image}}
                                    @elseif(!empty($product->manufuture_info->image))
                                        {{url('/')}}/assets/frontend/assets/images{{ $product->manufuture_info->image }} 
                                    @else
                                        {{url('/')}}/assets/frontend/assets/images/no-images.png
                                    @endif">
                            </a>
                        </div>

                        <div class="product-name-info  mt-5 mt-sm-0">
                            <h2>{{ $product->name }}</h2>
                            <h4>{{ $product->manufuture_info->name }}</h4>
                            <h5>{{ $product->short_description }}</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-availability">
                        <span>Availability</span>
                        <h4>In Stock: <i class="text-primary"><a href="{{route('contact_us')}}" class="contact-us-label">Contact Us</a> </span></i>
                    </div>
                    {{-- <div class="confirmation-div">
                            <h6>Lead Time: {% if $product->leadTime is empty %}N/A{% else %}{{ $product->leadTime }}{% endif %}</h6>
                    <p>*Confirmation required</p>
                </div> --}}
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-7">
                <div class="product-detail box-card p-0 bg-muted">
                    <div class="product-info">
                        <h4>Product Details</h4>
                        <div class="product-inner-info mb-0">
                            <div class="row">
                                <div class="col-md-8 pr-md-2">
                                    <ul>
                                        <li>
                                            <span>Manufacturer:</span><a href="{{url('/')}}/manufacturer-detail/{{ $product->manufuture_info->id }}" target="_blank">{{ $product->manufuture_info->name }}</a>
                                        </li>
                                        <li>
                                            <span>Mfr Part Number:</span><b>{{ $product->name }}</b>
                                        </li>
                                        <li>
                                            <span>Series:</span><span>@if(!empty($product->series)) {{ $product->series }} @else N/A @endif</span>
                                        </li>
                                        <li>
                                            <span>Product Category:</span><a href="{{route('product_list')}}" data-type="category" class="product_filter" data-id="{{$product->category->id}}">{{ $product->category->name }}</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-4 pl-md-2">
                                    <div class="product-company">
                                        <a href="{{url('/')}}/manufacturer-detail/{{ $product->manufuture_info->id }}" target="_blank">
                                            <img src="{{url('/')}}/uploads/manufacturer/{{ $product->manufuture_info->image }}" alt="img">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bottom-info d-sm-flex justify-content-between">
                           {{-- <div>
                                <h4>Datasheet</h4>
                                <a href="{{ $product->datsheet }}" target="_blank"><i class="far fa-file-pdf"></i>{{ $product->name }}</a>
                            </div>  --}}
                            <div>
                                <h4>RoHS/Lead</h4>
                                @if($product->rohs || lower == 'yes')
                                <span>
                                    <img src="{{url('/')}}/assets/frontend/assets/images/images/rohs-compliant.svg" alt="">
                                    <img src="{{url('/')}}/assets/frontend/assets/images/lead-free.svg" alt="">
                                </span>
                                @else
                                <span>
                                    <img src="{{url('/')}}/assets/frontend/assets/images/rohs-compliant-red.svg" alt="">
                                    <img src="{{url('/')}}/assets/frontend/assets/images/lead-free-red.svg" alt="">
                                </span>
                                @endif
                            </div>
                            <div>
                                <h4>Available Packaging</h4>
                                <p> @if(!empty($product->available_packaging)) N/A @else {{ $product->available_packaging }} @endif </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 mt-4 mt-lg-0">
                <div class="product-detail box-card p-0 bg-muted">
                    <div class="product-info product-standard mb-0">
                        <h4>Standard</h4>
                        <div class="product-inner-info border-bottom-0">
                            <div class="row pb-4">
                                <div class="col-sm-8">
                                    <div class="mb-3"><b>Factory Lead time:</b><span> @if(!empty( $product->lead_time)) N/A @else {{ $product->lead_time }} @endif </span></div>
                                    <div class="table-responsive">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Qty</th>
                                                    <th>Price</th>
                                                    <th>Ext. Price</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    @if(!empty($product->price)) or ($product->price == 0) <td colspan="3" style="text-align:center"> Request for Quote </td> @else
                                                    <td>${{ $product->qtyMin }}</td>
                                                    <td>${{ $product->price }}</td>
                                                    <td>${{ $product->qtyMin * $product->price }}</td>
                                                    @endif
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-sm-4 qtybox">
                                    <b>Quantity</b>
                                    <input class="form-control input-quantity" type="number">
                                    <span class="error"></span>
                                    <span class="footnote">Min.{{ $product->qty_min }}/ Mult. {{ $product->qty_multiple }}</span>
                                    <a class="btn btn-primary add-to-cart" href="javascript:void(0)" data-id="{{ $product->id }}" data-qty="{{$product->qtyMin}}">Add to Quote</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @if(!empty($technicalSpecification) && $technicalSpecification != 0)
            <div class="col-lg-6">
                <h4 class="mt-3 mb-3 mb-lg-3">Tech Specifications</h4>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Discription</th>
                                <th scope="col">Product Attribute</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($technicalSpecification as $techSpecKey => $techSpec)
                            <tr>
                                <td>{{ $techSpecKey }}</td>
                                <td>{{ $techSpec }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            @endif
            <div class="col-lg-6">
                <h4 class="mt-3 mb-3 mb-lg-3">Export and Environmental Classification</h4>
                <div class="table-responsive">
                    <table class="table table-bordered specification-table table-striped export-table">
                        <tbody>
                            <tr>
                                <td>RoHS</td>
                                <td> @if(!empty($product->rohs )) {{ $product->rohs }} @ELSE N/A @endif </td>
                            </tr>
                            <tr>
                                <td>ECCN</td>
                                <td>@if(!empty($product->eccm )) {{ $product->eccm }} @ELSE N/A @endif</td>
                            </tr>
                            <tr>
                                <td>HS Code</td>
                                <td>@if(!empty($product->hscode )) {{ $product->hscode }} @ELSE N/A @endif</td>
                            </tr>
                            <tr>
                                <td>COO</td>
                                <td>@if(!empty($product->coo )) {{ $product->coo }} @ELSE N/A @endif</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
    </section>

</main>
{{-- <form method="POST" target="_blank" id="product_filter_form" action="{{ route('productFrontList') }}">
<input type="hidden" id="filterByProductsSubCategory" name="filterByProductsSubCategory[]" />
<input type="hidden" id="filterByProductCategory" name="filterByProductCategory[]" />
<input type="hidden" id="groupCategoryValueName" name="groupCategoryName" />
</form> --}}

<script>
    $(document).ready(function() {
        $('.product_filter').on('click', function() {
            $('#filterByProductsSubCategory, #filterByProductCategory').val('');
            $('#filterByProductsSubCategory, #filterByProductCategory').removeAttr('disabled');
            var type = $(this).attr('data-type');
            if (type == 'category') {
                $('#filterByProductCategory').val(parseInt($(this).attr('data-id')));
                $('#filterByProductsSubCategory').attr('disabled', true);
            } else {
                $('#filterByProductsSubCategory').val(parseInt($(this).attr('data-id')));
                $('#filterByProductCategory').attr('disabled', true);
            }
            $('#groupCategoryValueName').val($('.group_category_item').attr('data-name'));
            console.log(parseInt($(this).attr('data-id')));
            $('#product_filter_form').submit();
        })
    })
</script>

@endsection