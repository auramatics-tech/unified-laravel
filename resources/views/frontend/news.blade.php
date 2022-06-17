@extends('layouts.master')
@section('content')
<main>
        <!-- Inner Hero Section -->
        <section class="inner-hero-section no-overlay no-image bg-muted">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-uppercase text-primary">New and Updates</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Inner Hero Section -->

        <!-- New and Updates Section -->
        <section class="small-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 order-md-2 mb-md-0 mb-4">
                        <div class="img-wrap">
                            <img class="w-100" src="{{url('/')}}/uploads/news/{{$news->image}}"
                                alt="{{ $news->name }}">
                        </div>
                    </div>
                    <div class="col-md-8 order-md-1 pr-5 update-page">
                        <h3 class="font-semibold">{{ $news->name }}</h3>
                        <ul>
                            <li>
                                <img class="svgImg" src="{{url('/')}}/assets/frontend/assets/images/calender.svg" alt="Date">
                              
                                {{ date('j M Y',strtotime($news->created_at)) }}
                            </li>
                        </ul>
                        <p class="font-16">{{ $news->description }}</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End New and Updates Section -->

    </main>
@endsection