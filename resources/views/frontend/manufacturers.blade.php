@extends('layouts.master')
@section('content')

<!-- Main Content -->
<main>
    <!-- Inner Hero Section -->
    <section class="inner-hero-section no-overlay no-image">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-uppercase text-primary">Manufacturers</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="section bg-muted manufacturer-list py-5">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="btn-grp" style="display:none;">
                        <form action="{{url('/')}}/manufacturers" method="POST">
                            <button class="btn btn-primary btn-big-text active">All Manufactures</button>
                            <div class="input-group">
                                <input type="text" id="searchManufacturer" name="searchManufacturer" class="form-control" placeholder="Search Manufacture">
                                <div class="input-group-append">
                                    <button class="btn btn-secondary" type="button" id="searchAllManufacturer">
                                        <img class="svgImg" src="{{url('/')}}/theme/frontend/assets/images/search.svg" alt="Search">
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="cata-sub-nav">
                        {{-- <div class="nav-prev arrow">
                                <img class="svgImg" src="{{url('/')}}/theme/frontend/assets/images/big-aerrow.svg" alt="Aerrow">
                    </div> --}}
                    <ul>
                        {{-- <li><a href="{{url('/')}}/manufacturers/no" class="nav-item
                        {%if index == 'no'%}active{%endif%}">#</a></li> --}}
                        @foreach ($manufacturerList as $key => $manufacturer)
                        <li><a href="#{{$key }}" class="nav-item ">{{ $key }}</a></li>
                        @endforeach
                    </ul>
                    {{-- <div class="nav-next arrow">
                                <img class="svgImg" src="{{url('/')}}/theme/frontend/assets/images/big-aerrow.svg" alt="Aerrow">
                </div> --}}
            </div>
            <!-- <div class="view-all-btn">
                            <button onclick="location.href='{{url('/')}}/manufacturers'" class="btn btn-primary btn-big-text">View All</button>
                        </div> -->
            <div class="copy-your-files ">
                <a href="{{url('/')}}/uploads/line-card-files/line-card.PDF" download class="download-files"><img class="svgImg" src="{{url('/')}}/assets/frontend/assets/images/download-icon.svg" alt="Download"> Download our Line Card</a>
            </div>
            @foreach ($manufacturerList as $key => $manufacturer)
            <div class="result-section" id="{{$key}}">
                <div class="section-header text-left">
                    <h2>
                        @if ($key == 'no')
                        <span class="text-primary">#</span>
                        @else 
                        <span class="text-primary">{{ $key }}</span>
                        @endif
                    </h2>
                </div>
                <div class="result-wrap">

                    @foreach($manufacturer  as $indexCount => $manufacturer_same)
                    
                    @if($indexCount % 4 == 0)
                    <div class="result-row">
                        
                        @endif
                        <div class="resut-inner" style="cursor: pointer;" data-id="{{$manufacturer_same['id']}}">
                            <h4>
                                {{ $manufacturer_same['name'] }}
                            </h4>
                            <div class="img-wrap">
                                <img style="width: 99px;height: 29px;" src="{{url('/')}}/uploads/manufacturer/{{ $manufacturer_same['image'] }}" alt="{{ $manufacturer_same['name'] }}">
                            </div>
                        </div>
                        @if($indexCount % 4 == 3)
                            </div>
                        @endif
                    @endforeach
                    @for($i=0;$i<(3-($indexCount % 4));$i++)
                    <div class="resut-inner" style="background: white;">
                                        </div>
                    @endfor
                    @if($indexCount % 4 != 3)
                    </div>
                    @endif
                </div>
            </div>

        @endforeach
        </div>
        </div>

        <div class="copy-your-files">
            <div class="section-header text-left">
                <h4>
                    Want a copy for your files?
                </h4>
            </div>
            <a href="{{url('/')}}/uploads/line-card-files/line-card.PDF" download class="download-files"><img class="svgImg" src="{{url('/')}}assets/frontend/08-01assets/imagesdownload-icon.svg" alt="Download"> Download our Line Card</a>
        </div>
        </div>
        </div>
        </div>
    </section>
    <!-- End Manufacturer Listing Section -->
</main>
<!-- End Content -->
<script>
    $(document).ready(function() {
        $('.nav-item').on('click', function() {
            $('.nav-item').removeClass('active');
            $(this).addClass('active');
        })
    });

    $(document).on('click','.resut-inner',function(){
        var id = $(this).attr('data-id');
        console.log(id);
        location.href = "{{url('/')}}/manufacturer-detail/" + id;
    })
</script>
@endsection