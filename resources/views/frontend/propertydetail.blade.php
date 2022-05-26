@extends('layouts.master')
@section('content')
    <main>
        <section class="inner-hero-section no-overlay no-image">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-uppercase text-primary">{{ $manufacturer->name }}</h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="small-section manufactures-detail">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 d-none d-lg-block">
                        <div class="img-wrap">
                            <img width="100%" src="{{url('/')}}/uploads/manufacturer/{{ $manufacturer->image }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="section-header text-left">
                            <h2>
                                {{ $manufacturer->name }}
                            </h2>
                        </div>
                        <p>{{ $manufacturer->about }}</p>
                    </div>
                </div>
            </div>
        </section>
        @if($subCategories)

        <section class="section bg-muted">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-header text-center">
                            <h2>
                                Product Categories
                            </h2>
                        </div>
                    </div>
                    {{-- <div class="col-md-12 text-center">
                        <h5>Search our broad inventory products below.</h5>
                    </div> --}}
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="featured-product-container swiper-container">
                            <div class="swiper-wrapper">
                                @foreach($subCategories as $subCategory)
                                <div class="swiper-slide">
                                    <div class="featuredProducts-wrap">
                                        <div class="image-wrap">
                                            <img src=" @if(isset($subCategory->image) && !empty($subCategory->image)) 
                                                    {{url('/')}}/uploads/prodcutcategory/{{$subCategory->image}}
                                                @else 
                                                    {{url('/')}}/theme/frontend/assets/images/no-images.png
                                                @endif                                          " alt="Power & Energy">
                                        </div>
                                        <div class="product-info">
                                            <a href="javascript:void(0);" class="nav-link product_filter" data-id="{{$subCategory->id}}">{{ $subCategory->name }}</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @endif
        @if(isset($show_resources_section) && $show_resources_section == 1)

        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-header text-center">
                            <h2>
                                Resources
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="resources-container swiper-container">
                            <div class="swiper-wrapper">
                            
                                @foreach($downloadResourcesAssets as $key => $downloadResourcesAsset)
                                    <div class="swiper-slide {{$key}}">
                                        <div class="resource-wrap">
                                            <div class="image-wrap">
                                                <img src="@if(!empty($downloadResourcesAsset->thumbnail))
                                                    {{url('/')}}/uploads/manufacturer/{{$downloadResourcesAsset->thumbnail}}
                                                @else
                                                    {{url('/')}}/theme/frontend/assets/images/no-images-resize.png
                                                @endif                                         " alt="{{ $downloadResourcesAsset->label }}">
                                            </div>
                                            <div class="product-info">
                                                <h3>{{ $downloadResourcesAsset->label }}</h3>
                                                <p>{{ $downloadResourcesAsset->description }}</p>
                                                <a href="{{url('/')}}/uploads/manufacturer/{{ $downloadResourcesAsset->name }}" target="_blank">Download </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endif
       {{-- @if($newsList != null)
        <section class="section bg-muted top-square-image">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-header text-center">
                            <h2>
                                Manufacturer News
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
                                            <img src="{{url('/')}}/uploads/news/{{$news->image}}" alt="{{ $news->title }}">
                                        </div>
                                        <h3>{{ $news->title }}</h3>
                                        <ul>
                                            <li>
                                                <img class="svgImg" src="{{url('/')}}/theme/frontend/assets/images/update.svg" alt="Company Updates">
                                                Company Updates
                                            </li>
                                            <li>
                                                <img class="svgImg" src="{{url('/')}}/theme/frontend/assets/images/calender.svg" alt="Date">
                                                {{ date('d M Y',strtotime($news->created_at)) }}
                                            </li>
                                        </ul>
                                        <p>{{ $news->description}}</p>
                                        <a href="{{ path('AboutNewsFront', ['id' => $news->id ]) }}">Learn more <img class="svgImg" src="{{url('/')}}/theme/frontend/assets/images/left-aerrow.svg" alt="Left"></a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                        <div class="swiper-btns">
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endif--}}
        @if($show_video_section == 1)
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-header text-center">
                            <h2>
                                Video
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="video-wrapper">
                            <div class="vid-main-wrapper clearfix">
                                <div class="vid-container">
                                    @if(count($videoAssets) )
                                    <iframe id="vid_frame"
                                            src="{{ $videoAssets[0]->name }}"
                                            frameborder="0" width="560" height="315"></iframe>
                                    @endif
                                </div>
                                <div class="vid-list-container">
                                    <ol id="vid-list">
                                        @foreach($videoAssets as $videoAsset)
                                            <li>
                                                <a href="javascript:void();" onClick="document.getElementById('vid_frame').src = '{{$videoAsset->name}}'">
                                                    @php 
                                                        $vidoeImageArray = explode('/',$videoAsset->name);
                                                        $vidoeImage = explode('?',$vidoeImageArray[count($vidoeImageArray)-1]); 
                                                     @endphp
                                                    <span class="vid-thumb"><img width=72 src="https://img.youtube.com/vi/{{$vidoeImage[0]}}/0.jpg" /></span>
                                                    <div class="desc">{{ $videoAsset->label }}</div>
                                                </a>
                                            </li>
                                        @endforeach
                                        </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endif
    </main>
    <form method="POST" target="_blank" class="productFilterForm" action="">
        <input type="hidden" id="filterByProductCategory" name="filterByProductCategory[]"/>
        <input type="hidden" id="filterByManufacturer" name="filterByManufacturer[]" value="{{$manufacturer->id}}"/>
    </form>

    <script>
        $(document).ready(function(){
            $('.product_filter').on('click', function() {
                    $('#filterByProductCategory').val(parseInt($(this).attr('data-id')));
                    $('#filterByProductsSubCategory').attr('disabled', true);
                    $('.productFilterForm').submit();
            })
        })
    </script>
@endsection