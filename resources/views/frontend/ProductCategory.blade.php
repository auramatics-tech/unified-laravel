@extends('layouts.master')
@section('content')
<main>
    <section class="inner-hero-section no-overlay no-image">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-uppercase text-primary">Products</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                  
                    <ul class="nav nav-tabs" id="productCategoriesTab" role="tablist">
                        @foreach($category as $category_key => $category_value)
                        @if(isset($category_value))
                        <li class="nav-item">
                            <a class="nav-link" id="{{$category_value->id}}" data-toggle="tab" href="#{{str_replace(' ','_',$category_value->name)}}" role="tab" aria-controls="{{$category_value->name}}" aria-selected="true">
                                <div class="img-wrap">
                                    <img class="svgImg" src="{{$category_value->images}}" alt="{{$category_value->name}}">
                                </div>
                                <span>{{$category_value->name}}</span>
                            </a>
                        </li>
                        @endif
                        @endforeach
                       
                     
                    </ul>
                    <div class="tab-content" id="productCategoriesTabContent">
                    @foreach($category as $CategoryKey => $groupCategory)
                        @php
                       
                        $id = str_replace(' & ',' ',$CategoryKey);
                        $tabId = str_replace(' ', '-',$id);
                        @endphp
                        <div class="tab-pane fade" id="{{str_replace(' ','_',$groupCategory->name)}}" role="tabpanel" aria-labelledby="{{$tabId}}-tab">
                            <div class="inner-tab-content">
                                <table>
                                    <tbody>
                                        @foreach($groupCategory->product_category as $productCategoryKey => $productCategory)
                                        <tr>
                                            <td>
                                                <span class="" data-id="{{$productCategoryKey}}">
                                                    {{$productCategory->name}}
                                                </span>
                                                <span class="plusIcon fa fa-plus"></span><span class="plusIcon fa fa-minus" style="display:none;"></span>
                                            </td>
                                            <td>
                                                <div class="list-wrap">
                                                    @if(isset($Manufacturer))
                                                   
                                                    <ul>
                                                        @foreach($Manufacturer as $manu_key => $manu_data)
                                                        <a href="{{url('/')}}/manufacturer-detail/{{$manu_data['manufacturer_id']}}">
                                                            <li>
                                                                <img src="{{$manu_data->image}}" alt="Categories">
                                                            </li>
                                                        </a>
                                                        @endforeach
                                                    </ul>
                                                    @endif
                                                    <a href="{{route('product_list')}}" data-group-category="{{$CategoryKey}}" class="category_click" data-id="{{$productCategoryKey}}" data-type="category">View All</a>
                                                </div>
                                            </td> 
                                        </tr>
                                       <tr class="hiderow" style="display: none">
                                            <td colspan="2">
                                                <table class="hidetabledata">
                                                     @foreach($productCategory->get_sub_category as $productCategoryDetailsKey => $productCategoryDetails)
                                                    
                                                    <tr>
                                                        <td><span>{{$productCategoryDetails->name}}</span></td>
                                                        <td>
                                                            <div class="list-wrap">
                                                                <a href="javascript:void(0)" data-group-category="{{$CategoryKey}}" class="category_click" data-id="{{$productCategoryDetailsKey}}">View Details</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </table>
                                            </td>
                                        </tr>
                                        @endforeach
                                   
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <form method="POST" class="productFilterForm" action="">
        <input type="hidden" id="filterByProductsSubCategory" name="filterByProductsSubCategory[]" />
    </form>
</main>
<script>
    $(document).ready(function() {
        
        var id = "{{$index}}";
        setTimeout(function() {
            if (id != '') {
                console.log(id);
                $('#' + id).trigger('click');
            } else {
                $('#electromechanical-components-tab').trigger('click');
            }
        }, 100)

        $('.product_filter').on('click', function() {
            $('#filterByProductsSubCategory').val(parseInt($(this).attr('data-id')));
            $('.productFilterForm').submit();
        })
    })
</script>
@endsection