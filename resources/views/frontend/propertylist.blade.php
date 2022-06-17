@extends('layouts.master')
@section('content')
<main>
    <section class="small-section filter-category">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="left-filter-sidebar">
                        @if(isset($_GET['searchByValue']))
                        <div class="selected-part">
                            <p>Part Number: {{$_GET['searchByValue']}}</p>
                        </div>
                        @endif
                        <form method="GET" id="filter-form" action="{{route('product_list')}}">
                            <div class="filter-search">
                                <h4>
                                    <img class="svgImg" src="{{url('/')}}/assets/frontend/assets/images/filter.svg" alt="Filter Your Search">
                                    Filter Your Search
                                </h4>
                                <div class="btn-grp">
                                    <button class="btn btn-primary btn-white btn-big-fonts reset-btn">Reset All</button>
                                    <button class="btn btn-primary btn-success btn-big-fonts" id="applySearchFilter">Apply Filters</button>
                                </div>
                            </div>
                            <div class="filter-category">
                                <div id="accordion-category">
                                    <div class="cat-list">
                                        <div class="box-header" id="headingThree">
                                            <a href="#collapseThree" class="d-flex align-items-center justify-content-between  btn-link" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                                <h5>Product Category</h5>
                                                <div class="fa-stack">
                                                    <span class="acco-plus"></span>
                                                </div>
                                            </a>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree">
                                            <div class="box-content">
                                                @foreach($productCategoryList as $productCategory)
                                                <div class="form-check">
                                                    <input type="checkbox" id="filterByProductCategory_{{$productCategory->id}}" class="form-check-input filterCategory filterByProductCategory" name="filterByProductCategory[]" {% if productCategory.id in filterByProductCategory %}checked{% endif %} value="{{ $productCategory->id }}" />
                                                    <label class="form-check-label" for="filterByProductCategory_{{$productCategory->id}}">{{ $productCategory->name }}</label>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cat-list">
                                        <div class="box-header" id="headingFour">
                                            <a href="#collapseFour" class="d-flex align-items-center justify-content-between  btn-link" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                                <h5>Product Sub-Category</h5>
                                                <div class="fa-stack">
                                                    <span class="acco-plus"></span>
                                                </div>
                                            </a>
                                        </div>
                                        <div id="collapseFour" class="collapse product_sub_categories" aria-labelledby="headingFour">
                                            <div class="box-content">
                                                @foreach($productsSubCategoryList as $productsSubCategory)
                                                <div class="form-check">
                                                    <input type="checkbox" class="filterByProductsSubCategory form-check-input" id="filterByProductsSubCategory_{{$productsSubCategory->id}}" name="filterByProductsSubCategory[]" {% if productsSubCategory.id in filterByProductsSubCategory %}checked{% endif %} value="{{ $productsSubCategory->id }}" />
                                                    <label class="form-check-label" for="filterByProductsSubCategory_{{$productsSubCategory->id}}">{{ $productsSubCategory->name }}</label>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cat-list">
                                        <div class="box-header" id="headingTwo">
                                            <a href="#collapseTwo" class="d-flex align-items-center justify-content-between  btn-link" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                                <h5>Manufacturers</h5>
                                                <div class="fa-stack">
                                                    <span class="acco-plus"></span>
                                                </div>
                                            </a>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo">
                                            <div class="box-content">
                                                @foreach($manufacturerList as $manufacturer)
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input filterByManufacturer" id="filterByManufacturer_{{$manufacturer->id}}" name="filterByManufacturer[]" value="{{ $manufacturer->id }}" />
                                                    <label class="form-check-label" for="filterByManufacturer_{{$manufacturer->id}}">{{ $manufacturer->name }}</label>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" class="form-control" id="searchByValue" name="searchByValue" placeholder="Search Part" value="{{ isset($searchByValue) ? $searchByValue : '' }}">
                            <input type="hidden" class="form-control" id="page" name="page" value="{{ isset($page) ? $page : '' }}">
                        </form>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="filtered-bar">
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control" id="searchByValue" name="searchByValue"
                                 placeholder="Search Part" value="{{request()->get('searchByValue')}}">
                                <div class="input-group-append">
                                    <button class="btn btn-secondary" type="button">
                                        <img class="svgImg" src="{{url('/')}}/assets/frontend/assets/images/search.svg" alt="Search">
                                    </button>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-big-fonts" type="button" >Search</button>
                        </form>
                        <div class="product-table">
                            <div class="table-responsive-md">
                                <table class="table table-striped dt-responsive table-bordered ct1_table" id="product-tbl">
                                    <thead>
                                      {{-- <?php
                                        echo"<pre>";
                                        print_r($productList);
                                        die;
                                        ?>  --}} 
                                        <tr>
                                            <th width="62%">Part </th>
                                            <th width="8%">Availability</th>
                                            <th width="20%">Purchasing</th>
                                            <th width="10%">RoHS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($productList as $key => $product)
                                        <tr>
                                            <td data-label="MFR">
                                                <div class="partbox">
                                                    <div class="part-thumb">
                                                        <div class="thumbdiv disableRightClick">
                                                            <img src="{{isset($product->image) ? $product->image : url('/').'assets/frontend/assets/images/no-images.png'}}" alt="">
                                                            <a href="{{route('product_detail',$product->id)}}"><span class="fa fa-search"></span></a>
                                                        </div>
                                                        <div class="form-check">
                                                            <a href="{{ $product->datsheet }}" target="_blank"><span class="fa fa-file-pdf"></span> Datasheet</a>
                                                        </div>
                                                    </div>
                                                    <div class="part-dtl">
                                                        <p style="cursor:pointer" onclick="window.location.href = '{{url('/')}}/product-detail/{{$product->id}}'">
                                                            <b> MFR:</b>
                                                            <span>{{$product->name}}</span>
                                                        </p>
                                                        @if(isset($product->manufuture_info->name))
                                                        <span onclick="window.location.href = '{{url('/')}}/manufacturer-detail/{{$product->manufuture_info->id}}'">
                                                            {{ $product->manufuture_info->name }}
                                                        </span>
                                                        @else
                                                        <span>N/A</span>
                                                        @endif
                                                        <p class="mt-3">{{ $product->short_description }}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td data-label="Product" class="text-center">
                                             {{--  <?php
                                                echo"<pre>";
                                                print_r($product->lead_time);
                                                die;
                                                ?>  --}}
                                                @if(isset($product->lead_time)) <br>
                                                {{$product->lead_time}} <br>Lead Time @endif

                                            </td>
                                            <td data-label="Quantity" align="center">
                                                <div class="d-flex">
                                                    <div>
                                                        <p class="d-flex"><b></b>
                                                            <span class="ml-3 nohighlight">@if(isset($product->price) ||
                                                                ($product->price == 0)) N/A @else {{$product->price}}
                                                                @endif</span>
                                                        </p>
                                                    </div>
                                                    <div class="btn-quantity-div">
                                                        <input class="form-control input-quantity" type="number">
                                                        <span class="error"></span>
                                                        <span>Min.{{ $product->qty_min }}/ Mult.
                                                            {{ $product->qty_multiple }}</span>
                                                        <a class="btn btn-primary add-to-cart" href="#" data-id="{{ $product->id }}" data-qty="{{ $product->qtyMin}}">Add Quote</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <p> @if(isset($product->rohs)) N/A @else {{ $product->rohs}} @endif</p>

                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="pagination-div">
                             {{ $productList->withQueryString()->onEachSide(0)->links("pagination::bootstrap-4") }}  
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
@section('script')
<script>
    $('#product-tbl').DataTable({
            filter: false,
            "paging": false
        });
</script>
<script>
    $(document).ready(function() {
       
        $('#searchByValue').on("keypress", function(e) {
            if (e.keyCode == 13) {
                // Cancel the default action on keypress event
                e.preventDefault();
                $('#searchByValue').val($(this).val());
                $('#applySearchFilter').trigger('click');
            }
        })
        var categories = [];
        //To set the selected product category
        if ($.isArray(product_categories) && product_categories.length > 0) {
            categories = [
                product_categories
            ]
        }
        $('.pagination_link').on('click', function() {
            $('#page').val($(this).attr('data-index'));
            $('#applySearchFilter').attr('data-type', 'pagination');
            $('#applySearchFilter').trigger('click');
        })
        $('.reset-btn').on('click', function(e) {
            $('#searchByValue').val('');
            $('#page').val('');
            $('#applySearchFilter').removeAttr('data-type');
            $('.filterByManufacturer').prop('checked', false);
            $('.filterByProductsSubCategory').prop('checked', false);
            $('.filterByProductCategory').prop('checked', false);
            $('#applySearchFilter').trigger('click');
        })
        $('#applySearchFilter').on('click', function(e) {
            if ($(this).attr('data-type') == undefined || $(this).attr('data-type') == '') {
                $('#page').val('');
            }
            $('#filter-form').submit();
        })
        $('.filterCategory').on('change', function() {
            if ($(this).is(":checked")) {
                categories.push($(this).val());
            } else {
                var index = categories.indexOf($(this).val());
                if (index !== -1) {
                    categories.splice(index, 1);
                }
            }
            if (categories.length) {
                $.ajax({
                    url: '{{url(' / ')}}/get-subcategories',
                    type: 'POST',
                    data: {
                        'ids': categories
                    },
                    success: function(response) {
                        if (response.status == 'success') {
                            var html = '';
                            $('.product_sub_categories').empty();
                            html += '<div class="box-content">';
                            $.each(response.data, function(key, val) {
                                html += '<div class="form-check">';
                                html +=
                                    '<input type="checkbox" class="filterByProductsSubCategory form-check-input"  id="filterByProductsSubCategory_' +
                                    val.id +
                                    '" name="filterByProductsSubCategory[]" value="' +
                                    val.id + '" />'
                                html +=
                                    '<label class="form-check-label" style="margin-left: 5px;" for="filterByProductsSubCategory_' +
                                    val.id + '"> ' + val.name + '</label>';
                                html += '</div>';
                            });
                            html += '</div>';
                            $('.product_sub_categories').html(html);
                        }
                    },
                    error: function() {}
                });
            }
        })
        //AutoComplete js to search product
        $("#searchByValue").autocomplete({
            source: function(request, response) {
                // Fetch data
                $.ajax({
                    url: "{{url('/')}}/search/item",
                    type: 'post',
                    dataType: "json",
                    data: {
                        //1 = only products 
                        searchByValue: request.term,
                        type: 1
                    },
                    success: function(data) {
                        response($.map(data.status, function(item) {
                            var AC = new Object();
                            AC.label = item.name;
                            AC.value = item.id;
                            //extend values
                            AC.type = item.option_type;
                            return AC;
                        }));
                    }
                });
            },
            minLength: 3,
            select: function(event, ui) {
                $('#search-box').val(ui.item.label);
                $('#searchByValue').val(ui.item.label);
                $('#searchByValue').val(ui.item.label);
                $('#filter-form').submit();
                return false;
            }
        });
    });
</script>


@endsection