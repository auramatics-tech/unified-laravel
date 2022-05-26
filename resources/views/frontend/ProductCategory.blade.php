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
                        @php 
                        $productCategoryWithGroup  = postLoad();
                        @endphp
                        <ul class="nav nav-tabs" id="productCategoriesTab" role="tablist">
                            @if(isset($productCategoryWithGroup['Electromechanical Components'])) 
                            <li class="nav-item">
                                <a class="nav-link" id="electromechanical-components-tab" data-toggle="tab"
                                   href="#Electromechanical-components" role="tab"
                                   aria-controls="electromechanical-components" aria-selected="true">
                                    <div class="img-wrap">
                                        <img class="svgImg" src="{{url('/')}}/assets/frontend/assets/images/electromechanical-components.svg"
                                             alt="Electromechanical Components">
                                    </div>
                                    <span>Electromechanical Components</span>
                                </a>
                            </li>
                            @endif
                            @if(isset($productCategoryWithGroup['Power Components']))
                            <li class="nav-item">
                                <a class="nav-link" id="power-components-tab" data-toggle="tab"
                                   href="#power-components" role="tab" aria-controls="power-components"
                                   aria-selected="false">
                                    <div class="img-wrap">
                                        <img class="svgImg" src="{{url('/')}}/assets/frontend/assets/images/noun-power-transformer.svg"
                                             alt="Power Electronics">
                                    </div>
                                    <span>Power Components</span>
                                </a>
                            </li>
                            @endif
                            @if(isset($productCategoryWithGroup['RF & Microwave'])) 
                            <li class="nav-item">
                                <a class="nav-link" id="rf-microwave-tab" data-toggle="tab"
                                   href="#RF & Microwave" role="tab" aria-controls="rf-microwave"
                                   aria-selected="false">
                                    <div class="img-wrap">
                                        <img class="svgImg" src="{{url('/')}}/assets/frontend/assets/images/noun-amplifier.svg"
                                             alt="Active RF components">
                                    </div>
                                    <span>RF & Microwave</span>
                                </a>
                            </li>
                            @endif
                            @if(isset($productCategoryWithGroup['Interconnect'])) 
                            <li class="nav-item">
                                <a class="nav-link" id="interconnect-tab" data-toggle="tab" href="#Interconnect"
                                   role="tab" aria-controls="interconnect" aria-selected="true">
                                    <div class="img-wrap">
                                        <img class="svgImg" src="{{url('/')}}/assets/frontend/assets/images/noun-adapter.svg" alt="Interconnect">
                                    </div>
                                    <span>Interconnect</span>
                                </a>
                            </li>
                            @endif
                            @if(isset($productCategoryWithGroup['Display & Systems'])) 
                            <li class="nav-item">
                                <a class="nav-link" id="display-systems-tab" data-toggle="tab" href="#display-systems" role="tab"
                                   aria-controls="display-systems" aria-selected="false">
                                    <div class="img-wrap">
                                        <img class="svgImg" src="{{url('/')}}/assets/frontend/assets/images/noun-monitor.svg" alt="display-systems">
                                    </div>
                                    <span>Display and Systems</span>
                                </a>
                            </li>
                            @endif
                            @if(isset($productCategoryWithGroup['Passive Components'])) 
                            <li class="nav-item">
                                <a class="nav-link" id="passive-components-tab" data-toggle="tab"
                                   href="#passive-components" role="tab" aria-controls="passive-components"
                                   aria-selected="false">
                                    <div class="img-wrap">
                                        <img class="svgImg" src="{{url('/')}}/assets/frontend/assets/images/noun-capacitor.svg"
                                             alt="Passive Components">
                                    </div>
                                    <span>Passive Components</span>
                                </a>
                            </li>
                            @endif
                            @if(isset($productCategoryWithGroup['Wireless & Memory']))
                            <li class="nav-item">
                                <a class="nav-link" id="wireless-memory-tab" data-toggle="tab" href="#wireless-memory" role="tab"
                                   aria-controls="wireless-memory" aria-selected="false">
                                    <div class="img-wrap">
                                        <img class="svgImg" src="{{url('/')}}/assets/frontend/assets/images/noun-signal.svg" alt="wireless-memory">
                                    </div>
                                    <span>Wireless & Memory</span>
                                </a>
                            </li>
                            @endif
                            @if(isset($productCategoryWithGroup['Sensors']))
                            <li class="nav-item">
                                <a class="nav-link" id="sensors-tab" data-toggle="tab" href="#sensors"
                                   role="tab" aria-controls="sensors" aria-selected="false">
                                    <div class="img-wrap">
                                        <img class="svgImg" src="{{url('/')}}/assets/frontend/assets/images/noun-memory.svg" alt="sensors">
                                    </div>
                                    <span>Sensors</span>
                                </a>
                            </li>
                            @endif
                        </ul>
                        <div class="tab-content" id="productCategoriesTabContent">
                           
                            @foreach($productCategoryWithGroup as $groupCategoryKey => $groupCategory)
                            @php
                            $id = str_replace(' & ',' ',$groupCategoryKey);
                            $tabId = str_replace(' ', '-',$id);
                            @endphp
                            <div class="tab-pane fade" id="{{$tabId}}" role="tabpanel"
                                     aria-labelledby="{{$tabId}}-tab">
                                    <div class="inner-tab-content">
                                        <table>
                                            <tbody>
                                                @foreach($groupCategory as $productCategoryKey => $productCategory)
                                               
                                                <tr>
                                                    <td>
                                                        <span class="" data-id="{{$productCategoryKey}}">
                                                            {{$productCategory['pc_name']}}
                                                        </span>
                                                        <span class="plusIcon fa fa-plus"></span><span class="plusIcon fa fa-minus" style="display:none;"></span>
                                                    </td>
                                                    <td>
                                                        <div class="list-wrap">
                                                            @if(isset($productCategory->manufactures))
                                                           
                                                            <ul>
                                                                @foreach($productCategory['manufactures'] as $manu_key => $manu_data)
                                                                <a href="{{url('/')}}/manufacturer-detail/{{manu_data["manufacturer_id"]}}">
                                                                 <li>
                                                                    <img src="{{url('/')}}/uploads/manufacturer/{{manu_data["manufacturer_image"]}}" alt="Categories">
                                                                </li>
                                                                </a>
                                                                @endforeach
                                                            </ul>
                                                            @endif
                                                            <a href="javascript:void(0);" data-group-category="{{$groupCategoryKey}}" class="category_click" data-id="{{$productCategoryKey}}" data-type="category">View All</a>
                                                        </div>
                                                        </td>
                                                </tr>
                                                <tr class="hiderow" style="display: none">
                                                    <td colspan="2">
                                                    <table class="hidetabledata">
                                                        @foreach($productCategory as $productCategoryDetailsKey => $productCategoryDetails)                   
                                                        @if($productCategoryDetailsKey == "pc_name" || $productCategoryDetailsKey == "manufactures")
                                                        @else
                                                        @foreach($productCategoryDetails as $subCategoryKey => $subCategoryValue)
                                                            <tr>
                                                                <td><span>{{$subCategoryValue}}</span></td>
                                                                <td><div class="list-wrap">
                                                                        <a href="javascript:void(0)" data-group-category="{{$groupCategoryKey}}" class="category_click" data-id="{{$productCategoryDetailsKey}}">View Details</a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                            @endif
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
            <input type="hidden" id="filterByProductsSubCategory" name="filterByProductsSubCategory[]"/>
        </form>
    </main>
    <script>
        $(document).ready(function(){
            var id = "{{$index}}";
            setTimeout(function(){
                if(id != '') {
                    console.log(id);
                    $('#'+id).trigger('click');
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